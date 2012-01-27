<?php

/* #####################################################
	FUNCTION get_feed_data();
	
	Variables
		$username - Value should be the username of the youtube user's feed you wish to retrieve

	Returned Data
		Data type: Array of Array

		Access
			[index][key]

		Keys / Definitions
		'id' = Youtube video ID
                'title' = Video title
                'description' = Video description
                'date' = Video post date
                'length' = Video length in seconds
                'rating' = Average video rating
                'viewcount' = Total number of video views
                'commentsCount' = Total number of comments
                'watchURL' = URL to view the video on Youtube
                'commentsURL' = API URL for the videos comments
   ##################################################### */

function get_feed_data($userName){

	//get youtube video feed array
	$sxml=simplexml_load_file('http://gdata.youtube.com/feeds/api/users/'.$userName.'/uploads?orderby=updated');
	$youtubeFeed = array();

	foreach ($sxml->entry as $entry) {

		//get media: nodes
		$media = $entry->children('http://search.yahoo.com/mrss/');

		//get video url
		$watchURL = $media->group->player->attributes();
		$watchURL = $watchURL['url'];

		//get yt:duration node for video length (in seconds)
		$length = $media->children('http://gdata.youtube.com/schemas/2007');
		$length = $length->duration->attributes();
		$length = $length['seconds'];

		//get yt:stats node for viewer statistics
		$viewCount = $entry->children('http://gdata.youtube.com/schemas/2007');
		$viewCount = $viewCount->statistics->attributes();
		$viewCount = $viewCount['viewCount'];

		//get gd:comments node for comment count & comments url
		$gd = $entry->children('http://schemas.google.com/g/2005');
		if ($gd->comments->feedLink) {
			$gd = $gd->comments->feedLink->attributes();
			$commentsURL = $gd['href'];
			$commentsCount = $gd['countHint'];
		}

		//get gd:rating node for avg video ratings
		$rating = $entry->children('http://schemas.google.com/g/2005');
		if ($rating->rating) {
			$rating = $rating->rating->attributes();
			$rating = $rating['average'];
		} else {
			$rating = 0;
		}

		//create video array to return to user
		$videoEntry = array (
		  'id' => end(explode("/", $entry->id)),
		  'title' => $entry->title,
		  'description' => $entry->content,
		  'date' => explode("-", $entry->published),
		  'length' => $length,
		  'rating' => $rating,
		  'viewcount' => $viewCount,
		  'commentsCount' => $commentsCount,
		  'watchURL' => $watchURL,
		  'commentsURL' => $commentsURL
		  );
		$videoEntry['date'][2]=substr($videoEntry['date'][2], 0, 2);
		array_push($youtubeFeed, $videoEntry);
	}

	//return videos array
	return $youtubeFeed;

}


/* #####################################################
        FUNCTION get_video_data();   
                 
        Variables
		$videoID - The ID of the Youtube video you wish to retrieve data for
                
        Returned Data
                Data type: Array
                  
                Keys / Definitions
                'title' = Video title 
                'description' = Video description
                'date' = Video post date
                'length' = Video length in seconds
                'rating' = Average video rating
                'commentsCount' = Total number of comments
                'watchURL' = URL to view the video on Youtube
                'commentsURL' = API URL for the videos comments
   ##################################################### */
function get_video_data($videoID){

	//get youtube video feed array
	$sxml=simplexml_load_file('https://gdata.youtube.com/feeds/api/videos/'.$videoID.'?v=2');

	//get media: nodes
	$media = $sxml->children('http://search.yahoo.com/mrss/');

	//get video url
	$watchURL = $media->group->player->attributes();
	$watchURL = $watchURL['url'];

	//get yt:duration node for video length (in seconds)
	$length = $media->children('http://gdata.youtube.com/schemas/2007');
	$length = $length->duration->attributes();
	$length = $length['seconds'];

	//get gd:comments node for comment count & comments url
	$gd = $sxml->children('http://schemas.google.com/g/2005');
	if ($gd->comments->feedLink) {
		$gd = $gd->comments->feedLink->attributes();
		$commentsURL = $gd['href'];
		$commentsCount = $gd['countHint'];
	}

	//get gd:rating node for avg video ratings
	$rating = $sxml->children('http://schemas.google.com/g/2005');
	if ($rating->rating) {
		$rating = $rating->rating->attributes();
		$rating = $rating['average'];
	} else {
		$rating = 0;
	}

	//create video array to return to user
	$videoEntry = array (
          'title' => $sxml->title,
          'description' => $media->group->description,
          'date' => explode("-", $sxml->published),
          'length' => $length,
          'rating' => $rating,
          'commentsCount' => $commentsCount,
          'watchURL' => $watchURL,
          'commentsURL' => $commentsURL
        );
	$videoEntry['date'][2]=substr($videoEntry['date'][2], 0, 2);

	//return videos array
	return $videoEntry;
}


/* #####################################################
        FUNCTION get_display_feed();
        
        Variables
		$username - Value should be the username of the youtube user's feed you wish to retrieve
		$videos_per_page - how many videos to display on a page
		$page - which page to display		
        
        Returned Data
                Data type: String
                
		String contains formatted html for display on a page.
   ##################################################### */
function get_display_feed($username, $videos_per_page, $page){

        $youtubeFeed = get_feed_data($username);

	$method_path="?page=";

	//PROVIDE PAGINATION -- COMPILE PAGE LIST
        //Work out page breaks. We dont want to overload our users with every page available
	$total_pages=ceil(count($youtubeFeed)/$videos_per_page);
        $pre_pages="";
        $post_pages="";
        $page_string="";
        if(intval($page) < 10){ //Were in the first 10 pages
                $startPage=1;
                $endPage=10;
                
                if($total_pages<$endPage){   
                       $endPage=$total_pages;
                }
                        
                if($total_pages!=$endPage){
                        $post_pages="&nbsp;<b>...</b>&nbsp;<a href='{$method_path}{$total_pages}' >$total_pages</a>";
                }
        }else{
                if(intval(substr($page, strlen($page)-1, 1))==0){ //were past the first 10 pages and its a "milestone"
                        $startPage=intval($page)-1;
                        $endPage=intval($page)+10;
	                        if($total_pages<$endPage){
                                $endPage=$total_pages;
                                $post_pages="";
                        }
        
                        $pre_pages="<a href='{$method_path}1'>1</a>&nbsp;&nbsp;<b>...</b>&nbsp;";
                        if($total_pages!=$endPage){
                                $post_pages.="&nbsp;<b>...</b>&nbsp;&nbsp;<a href='{$method_path}{$total_pages}'>$total_pages</a>";
                        }
                }else{ //were past the first 10 pages but its not a "milestone"
                        $tempPageCalc=$page;
                        $tempPageCalc=substr_replace($page, 0, strlen($page)-1, 1);
                        $startPage=$tempPageCalc-1;
                        $endPage=$tempPageCalc+10;
                        
                        if($total_pages<$endPage){
                                $endPage=$total_pages;
                                $post_pages="";
                        }
                        $pre_pages="<a href='{$method_path}1'>1</a>&nbsp;&nbsp;<b>...</b>&nbsp;";
                        if($total_pages!=$endPage){   
                                $post_pages.="&nbsp;<b>...</b>&nbsp;&nbsp;<a href='{$method_path}{$total_pages}'>$total_pages</a>";
                        }
                }
        }               
        
        //compile page links with current page marker
        for($z=$startPage; $z < $endPage+1; $z++){
                
                if($z==$page){
                    $curpagemarker1='[';
                    $curpagemarker2=']';
                }else{
                    $curpagemarker1='';
                    $curpagemarker2='';
                }               
                
                if($total_pages!=1){
                   $page_string.=" <a href='{$method_path}{$z}'>$curpagemarker1$z$curpagemarker2</a>";
                }
        }
        $page_string=$pre_pages.$page_string.$post_pages;
	//END PAGINATION sTRING CREATION

	$formatted_feed = "<div class='video_pre_top_nav_spacer'></div>";

	//display navigation page links and prev/next
	$formatted_feed .= "<div style='clear: both; width: 100%;'></div>";
        if ($total_pages > 1){
		$formatted_feed .= "<div class='video_nav'>";
                                    
                if($page!=1){
                        $paged_newer_page=$page-1;
			$formatted_feed .= "<div class='video_nav_prev'><a href='{$method_path}{$paged_newer_page}'>&laquo; Prev</a></div>";
                }
                        
		$formatted_feed .= "<div class='video_nav_pages'>$page_string</div>";
                        
                if($page>=1 && $page<$total_pages ){

                        $paged_older_page=$page+1;
			$formatted_feed .= "<div class='video_nav_next'><a href='{$method_path}{$paged_older_page}'>Next &raquo;</a></div>";
                }
		$formatted_feed .= "</div>";
	}
	$formatted_feed .= "<div style='clear: both; width: 100%;'></div>";
	//end display navigation

        $formatted_feed .= "<div class='video_tiles_wrapper'>";
        //display video data
	$min_video=(($page-1) * $videos_per_page);
	$max_video=$min_video + $videos_per_page;
	if(count($youtubeFeed) < $max_video){
		$max_video = count($youtubeFeed);
	}

	for($x=$min_video; $x < $max_video; $x++){
	    $video=$youtubeFeed[$x];

            $formatted_feed .= "
            <div class='video_tile_container'>
            <div class='video_tile'>
                <!--<div class='date'>
                        <div class='".date("M", mktime(NULL, NULL, NULL, $video['date'][1], $video['date'][2], $video['date'][0]))."'>
                                <div class='calendar-day'>{$video['date'][2]}</div> 
                                <div class='calendar-year'>{$video['date'][0]}</div>
                        </div>
                </div>-->
                
                <div class='title'><a href='view_video.php?{$video['id']}' title='{$video['title']}'>{$video['title']}</a></div>
                <!--<div class='views'>Views: {$video['viewcount']}</div>-->
                
                <div class='image'>
                <a href='view_video.php?{$video['id']}' title='{$video['title']}'>
                        <img src='http://img.youtube.com/vi/{$video['id']}/0.jpg' />
                </a>
                <div class='duration'>".sec2hms($video['length'])."</div>
                </div>
                
                <!--<div class='description'>{$video['description']}</div>-->
            </div>  
            </div>";
        }
        
        $formatted_feed .= "</div>";
        $formatted_feed .= "<div style='width: 100%; clear: both; height: 5px;'></div>";


        //display navigation page links and prev/next
        $formatted_feed .= "<div style='clear: both; width: 100%;'></div>";
        if ($total_pages > 1){
                $formatted_feed .= "<div class='video_nav'>";
                                
                if($page!=1){
                        $paged_newer_page=$page-1;
                        $formatted_feed .= "<div class='video_nav_prev'><a href='{$method_path}{$paged_newer_page}'>&laquo; Prev</a></div>";
                }
                
                $formatted_feed .= "<div class='video_nav_pages'>$page_string</div>";
        
                if($page>=1 && $page<$total_pages ){
                
                        $paged_older_page=$page+1;
                        $formatted_feed .= "<div class='video_nav_next'><a href='{$method_path}{$paged_older_page}'>Next &raquo;</a></div>";
                }
                $formatted_feed .= "</div>";
        }           
        $formatted_feed .= "<div style='clear: both; width: 100%;'></div>";
        //end display navigation

	$formatted_feed .= "<div class='video_post_bottom_nav_spacer'></div>";
        
        return $formatted_feed;
}


/* #####################################################
        FUNCTION sec2hms();
                
        Variables
		$sec - seconds to convert to hours, minutes, seconds.
		$padhours - add leading 0 to hours. False = no pad.
                
        Returned Data
                Data type: String 
                    
                String contains formatted time in hh:mm:ss format
   ##################################################### */
function sec2hms ($sec, $padHours = false) {

	//string for hours:minute:seconds
	$hms = "";
    
	// there are 3600 seconds in an hour
	$hours = intval(intval($sec) / 3600);
   
	// add to $hms, with a leading 0 if asked for
	if($hours>0){
		$hms .= ($padHours)
	? str_pad($hours, 2, "0", STR_PAD_LEFT). ':'
		: $hours. ':';
	}
     
	// dividing the total seconds by 60 will gives us the number of minuutes 
	// divide by 60 again and keep the remainder for minutes past the hours
	$minutes = intval(($sec / 60) % 60);
    
	// then add to $hms (with a leading 0 if needed)
	$hms .= str_pad($minutes, 2, "0", STR_PAD_LEFT). ':';
    
	//divide the total seconds by 60 and keep the remainder for seconds
	$seconds = intval($sec % 60);
    
	// add to $hms, again with a leading 0 if needed
	$hms .= str_pad($seconds, 2, "0", STR_PAD_LEFT);
    
	return $hms;
}

?>
