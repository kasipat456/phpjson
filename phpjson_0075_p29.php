<!doctype html>
<html>
<head>
    <title>JSON Data in PHP</title>
</head>
<body>
    <br>
    <h3 align="">How to Load JSON Data in PHP</h3><br>
    <h4>Video Title</h4>
    <?php
        $data = file_get_contents('video.json');
        $data = json_decode($data, true);
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    ?>
</body>
</html>