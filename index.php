<?php
    function getThumbnails() {
        return glob("assets/uploads/thumbnails/*");
    }
?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>My example album</title>
        <link rel="icon" type="image/png" href="favicon.png"/>
        <link href="styles/example.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-2.2.3.min.js"
            integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
            crossorigin="anonymous">
        </script>
    </head>

    <body>
        <div id="thumbsSlider">
            <ul>
                <?php foreach (getThumbnails() as $thumb): ?>
                    <li>
                        <img class="thumbnail" src="<?php echo $thumb; ?>" alt="" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div id="pictureFrame">
        </div>
    </body>
</html>