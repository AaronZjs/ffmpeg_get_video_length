# ffmpeg_get_video_length
获取视频长度，获取视频时长。


依赖：ffmpeg（运行此脚本的机器需要安装软件ffmpeg）


使用方法：


use sscs\ffmpeg_get_video_length\ffmpegGetVideoLength;


$ffmpegGetVideoLength = new ffmpegGetVideoLength();


// 如果URL包含空格或特殊符号，可用urlencode进行URL编码后再传入。

$length_time = $ffmpegGetVideoLength->getLength('https://www.baidu.com/aa.mp4');

echo $length_time;