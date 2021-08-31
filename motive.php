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
        <article id="about_content">
            <h1>Why Sunscreen?</h1>
            <p class="make"> Sunscreen contains ingredients to protect our skin from dangerous rays the sun emits. The sun emits a type of radiation called ultraviolent (UV-rays). Direct and prolong exposure to UV-rays causes the skin to age and wrinkle. It can also increase the risk of skin cancer. So, it is important that we protect our skin from the sun and start applying sunscreen! </p>

            <h2>Three types of UV-rays</h2>
            <figure>
                <!-- Source: https://www.simplysunscreen.com/images/landscape-skin-UV-Spectrum.jpg -->
                <img src="images/UV-spectrum.jpg" alt="UV spectrum" id="UV-spec" />
                <figcaption class="home_image_caption">
                    Image from <cite><a href="https://www.simplysunscreen.com/how-does-sunscreen-work.html">www.simplysunscreen.com</a></cite>
                </figcaption>
            </figure>
            <ul>
                <p> <strong> UVA </strong> </p>
                <p> UVA rays penetrate beyond the skin surface and deep into the skin barrier. It is present all day long, all year long, even when the sun is hidden. UVA rays can cause aging, wrinkling, and other light-induced skin concerns. It can also supress the immune system, as well as cause skin cancer. </p>
                <p> FUN FACT! UVA rays can penetrate glass. So, we are can still be exposed to UV-rays indoors. </p>

                <p> <strong> UVB </strong> </p>
                <p> UVB rays affect the surface of the skin. It is also present all year long but is more prevalent in sunny conditions. UVB rays can cause the skin to burn and can also lead to skin cancer.</p>

                <p> <strong> UVC </strong> </p>
                <p> Amongst the ultraviolent rays, UVC rays have the shortest wavelength. They are absorbed by the atmosphere and do not affect us. </p>
            </ul>
            <br>

            <p> Everyone should should sunscreen and everyday. There is often a misconception that we should only apply sunscreen when at the beach or on the days in which the sun is out and bright. <em>This is not true!</em> Although the sun is hidden behind the clouds, it is still emitting UV-rays. We want to start protecting our skin from these rays as much as possible. </p>
        </article>
    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html> 
