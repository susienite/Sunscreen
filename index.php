<?php
include("includes/init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sunscreen</title>

    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
    <?php include("includes/header.php"); ?>

    <div class="content">
        <article id="index-content">
            <figure>
                <!-- Source: http://www.beaconexaminer.com/wp-content/uploads/2017/11/Climate-Change-1200x545_c.jpg -->
                <p>Learn about why <a href="motive.php">sunscreen</a></p>
                <img src="images/weather.jpg" alt="Weather" class="home_image" />
                <figcaption class="home_image_caption">
                    Image from <cite><a href="http://www.beaconexaminer.com/how-will-climate-change-continue-to-impact-on-the-financial-landscape/">Beacon Examiner</a></cite>
                </figcaption>
            </figure>

            <figure>
                <!-- Source: https://images.agoramedia.com/everydayhealth/gcms/10-Essential-Facts-About-Sunscreen-722x406.jpg -->
                <p>How to <a href="apply.php">apply</a></p>
                <img src="images/rangeSC.jpg" alt="Sunscreen Range" class="home_image" />
                <figcaption class="home_image_caption">
                    Image from <cite><a href="https://www.everydayhealth.com/news/essential-facts-about-sunscreen/">Everyday Health</a></cite>
                </figcaption>
            </figure>

            <figure>
                <!-- Source: https://cdn.shopify.com/s/files/1/0021/0318/1365/articles/spf_394x.gif?v=1525292718 -->
                <p>And choosing the right <a href="spf.php">SPF</a></p>
                <img src="images/spf.jpg" alt="SPF" class="home_image" />
                <figcaption class="home_image_caption">
                    Image from <cite><a href="https://laakua.com/blogs/news/what-s-wrong-with-high-spf">La Akua</a></cite>
                </figcaption>
            </figure>
        </article>
    </div>

    <?php include("includes/footer.php"); ?>
</body> 
