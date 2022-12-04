<!doctype html>
<html>
    <head>
        <title>JSON Data in PHP</title>
    </head>
</html>
<body>
    <br>
    <h3 align="">How to load JSON Data in PHP</h3><br>
    <h4>Video Title</h4>
</body>
<?php
$data = file_get_contents("video.json");
$data = json_decode($data, true);
foreach($data as $row)
{echo $row["video_title"],'<br>';}
?>
</html>