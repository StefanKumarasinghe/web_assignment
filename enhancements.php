<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Enhancements page">
        <meta name="author" content="Developers">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/wwwlogo.jpg">
        <link rel="stylesheet" href="styles/Mstyle.css" media="screen and (max-width:999px)">
        <link rel="stylesheet" href="styles/style.css"  media="screen and (min-width:999px)">
        <title>Enhancements</title>
    </head>
    <body>
		<!-- Navigation bar -->
		<?php require("menu.inc"); ?>
		<!-- Yellow header banner -->
        <?php require("header.inc"); ?>
		<!-- Main content of page -->
        <main id="enhancements">
			<!-- Introduction to enhancements -->
            <h1>Enhancements</h1>
            <p>This page will explain all the extensions and enhancements that have been applied to the project. A reference has been given for each point</p>
		<h2>Key Enhancements</h2>
            <ul>
                <li>
                    <h3><em>Mobile Optimized and Fluid/Responisve design</em></h3>
                    <p>If you change the device or change the size of the webpage then you are able to see the webpage in different sizes and so it has been optimized to look amazing for all devices, using flex boxes, grids and media queries and a separate stylesheet dedicated for the mobile and tablet webpages.</p>
                   <textarea cols="14">    &#60; link rel="stylesheet" href="styles/Mstyle.css" media="screen and (max-width:999px)">
    &#60; link rel="stylesheet" href="styles/style.css"  media="screen and (min-width:999px)"></textarea>
    <br />
    <a href="quiz.html#quiz-page" class="reference" >Reference</a>
    <br />
			<!-- Mobile portrait mode demo -->
					<details>
                        <summary>Mobile - Portrait Mode</summary>
                        <figure>
                            <img src="images/Fluid.png" alt="Webpage viewed through a smartphone portrait mode">
                            <figcaption>The following website viewed through a smartphone on portrait mode</figcaption>
                        </figure>
                    </details>
					<!-- Mobile landscape mode demo -->
                    <details>
                        <summary>Mobile - Landscape Mode</summary>
                        <figure>
                            <img src="images/landscape.png" alt="Webpage viewed through a smartphone landscape mode">
                            <figcaption>The following website viewed through a smartphone on landscape mode</figcaption>
                        </figure>
                    </details>
					<!-- Tablet portrait mode demo -->
                    <details>
                        <summary>Tablet - Portrait Mode</summary>
                        <figure>
                            <img src="images/tablet.png" alt="Webpage viewed through a smartphone landscape mode">
                            <figcaption>The following website viewed through a tablet on portrait mode</figcaption>
                        </figure>
                    </details>
					<!-- Tablet landscape mode demo -->
                    <details>
                        <summary>Tablet - Landscape Mode</summary>
                        <figure>
                            <img src="images/tabletL.png" alt="Webpage viewed through a smartphone landscape mode">
                            <figcaption>The following website viewed through a tablet on landscape mode</figcaption>
                        </figure>
                    </details>
					<!-- Responsive mode demo -->
                    <details>
                        <summary>Responsive Mode</summary>
                        <figure>
                            <img src="images/responsive.png" alt="Webpage viewed through responsive mode">
                            <figcaption>The following website viewed through responsive mode</figcaption>
                        </figure>
                    </details>
                </li>
                <li>
					<!-- CSS animation enhancements section -->
                    <h3><em>CSS animation</em></h3>
                    <p>Have used animation using keyframes to change the style of the webpage over time and to improve user interface</p>
			                    <textarea rows="14">   
                        
@keyframes background-design {
    0% {
        background-color: red;
    }
    25% {
        background-color: black;
    }
    75% {
        background-color: purple;
    }
    100% {
        background-color: red;
    }
}
@keyframes shadow {
    0% {
        border:3px solid blue;
    }
    5% {
        border:3px solid green;
    }
    40% {
        border:3px solid yellow;
    }

    70% {
        border:3px solid black;
    }
    100% {
        border:3px solid blue;
    }
}


                    </textarea>
                        <br />
                        <a href="#animation-example" class="reference" >Reference</a>
                        <br />      
                    <details>
                        <summary>Animation Examples</summary>
						<!-- Demo of footer animation -->
                        <figure>
                            <img src="images/animation.png" alt="simple animation example">
                            <figcaption>The color of the animation changes over time and loops infinitely</figcaption>
                        </figure>
						<!-- Demo of aside border animation -->
                        <figure>
                            <img src="images/animation2.png" alt="simple animation example 2">
                            <figcaption>The color of the border changes over time and loops infinitely, this is to encourage people to see the aside content </figcaption>
                        </figure>
                    </details>
                </li>
            </ul>
        </main>
		<!-- Page footer -->
		<?php require("footer.inc"); ?>
    </body>
</html>
