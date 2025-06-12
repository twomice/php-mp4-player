<?php
// Specify one video in query param 'v'. 
// (May contain subdirectories under videos/. See videos/README.txt)
$video_filename = $_GET['v'];
if (empty($video_filename)) {
  die('No video specified.');
}
$video_dir_name = 'videos/';
$video_file_path = __DIR__ . '/' . $video_dir_name . $video_filename;
if (!file_exists($video_file_path)) {
  die('Video not available.');
}
$video_file_url = './' . $video_dir_name . $video_filename;
?>
<html>
  <head>
    <link rel="stylesheet" href="efe.css">
    <script>
      <?php echo "var video_url = " . json_encode($video_file_url);?>

      function queueVideo() {
        videoPlayer = document.getElementById("play-video")
        videoPlayer.src = video_url;
        videoPlayer.play();
      }

      function oops() {
        console.log("OOPS: ". document.getElementById("play-video").error.code)
      }
    </script>
  </head>
  <body> 
    <video  class="videom" id="play-video" controls autobuffer></video>
    <script>
      document.getElementById("play-video").addEventListener('error', oops, false);
      queueVideo();
    </script>
  </body>
</html>
