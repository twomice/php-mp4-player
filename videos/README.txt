Place video files in this directory.
Videos can be played by specifying the path (relative to this directory) in ?v=...

Examples:

- index.php?v=foo/bar.mkp :: play the video at [root directory]/videos/foo/bar.mkp
- index.php?v=baz.mp4 :: play the video at [root directory]/videos/baz.mp4

If the video requested in ?v= is not found (or if no value is given), 
videoplayer will exit with a simple message to the user.

