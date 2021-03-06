<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Main introduction page for site">
        <meta name="author" content="Developers">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/wwwlogo.jpg">
        <link rel="stylesheet" href="styles/Mstyle.css" media="screen and (max-width:999px)">
        <link rel="stylesheet" href="styles/style.css"  media="screen and (min-width:999px)">
        <title>Home</title>
    </head>
    <body>
		<!-- Navigation bar -->
		<?php require("menu.inc"); ?>
		<!-- Yellow header banner -->
        <?php require("header.inc"); ?>
		<!-- Main content of page -->
        <main id="indexbackground">
            <h1>Welcome</h1>
			<!-- Paragraph 1 -->
            <p>We use the internet for almost everything in our lives, from our day to day tasks to connecting with people around the world! We will be discussing on the topic how Web 3 is different from its precessedor, Web 2.0.  For our more information, you can watch our demonstration <a href="https://youtu.be/1twlGBjVs6U">video</a></p>
            <!-- Image section -->
			<div class="flex-container-nowrap">
                <div class="w-75">
                    <div class="flex-container w-100">
                        <div class="item">
                            <figure>
                                <img src="images/harold.jpg" alt="harold.jpg">
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/social_media.jpg" alt="social_media.jpg">
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/html_css_javascript.jpg" alt="html_css_javascript.jpg">
                            </figure>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/worldwideweb.jpg" alt="worldwideweb.jpg">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Paragraph 2 -->
            <p>Web 2.0 is basically the web that we all know of, the web that we use which consists of websites like Instagram, Facebook, Zomato, etc.
                Web 3.0 is the new age Web which represents a new phase, which will be decentralized, open, and of greater utility. Think of things like cryptocurrencies, Non Fungible Tokens, decentralised websites and more privacy in Web 3.0.
                Web 3.0 is more stronger and powerful than Web 2.0, opening to many new features and improving user interface. Would you want to know?
            </p>
            <br>
            <a href="topic.php" class="learn-more">Yes of Course!</a>
        </main>
		<!-- Page footer -->
		<?php require("footer.inc"); ?>
    </body>
</html>
