# ffmpeg_get_video_length
获取视频长度，获取视频时长。


依赖：ffmpeg


使用方法：


use sscs\ffmpeg_get_video_length\ffmpegGetVideoLength;


$ffmpegGetVideoLength = new ffmpegGetVideoLength();

$uri =  $url.urlencode($value['video']);

$length_time = $ffmpegGetVideoLength->getLength($uri);

echo $length_time;