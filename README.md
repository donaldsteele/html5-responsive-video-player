# html5 responsive video player

This is a simple html5 video player that is resonsive and will work in both mobile and desktop web browsers. 


##The following web browsers are supported
```
Chrome version 52.0.2743.116 m
Firefox 48.0.2
Internet Explorer 11.545.10586
```

## Screenshot 
[[https://github.com/donaldsteele/html5-responsive-video-player/blob/master/screenshot/demo.png|alt=octocat]]


##Setup
installing is super simple! the structure should look like this 

/
-index.php
-loading.png
-poster.png
-/video
--MyVideo.mp4


put index.php, loading.png, poster.png in the same folder
create a new folder named video 
put your mp4 video's in the video folder 


## Video Tips
to maximize compatablity with mobile and desktop devices here is the ffmpeg command i use to convert my video's to a standard format

ffmpeg -i  "input.whatver.format" \ 
-c:v libx264 \ 
-profile:v high \ 
-level 5 \ 
-crf 2 \ 
-maxrate 2.5M \ 
-bufsize 16M \ 
-pix_fmt yuv420p \ 
-vf "scale=iw*sar:ih, scale='if(gt(iw,ih),min(1920,iw),-1)':'if(gt(iw,ih),-1,min(1080,ih))'" \ 
-x264opts bframes=3:cabac=1 \ 
-movflags faststart \ 
-c:a libfdk_aac \ 
-b:a 160k \ 
-y "my_output_video.mp4"
