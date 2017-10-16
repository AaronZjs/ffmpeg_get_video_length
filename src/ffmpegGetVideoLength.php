<?php
namespace sscs\ffmpeg_get_video_length;
class ffmpegGetVideoLength
{
	function getLength($url)
	{
        // $uri =  $url.urlencode($value['video']);
        $com = "ffmpeg -i ".$url." 2>&1 | grep '"."Duration' | cut -d "."'"." ' -f 4| sed s/,//";
        ob_start();
        passthru($com);
        $length_time = ob_get_contents();
        ob_end_clean();
        return $length_time;
	}
}
 ?>