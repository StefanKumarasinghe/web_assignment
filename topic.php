<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Topic page">
        <meta name="author" content="Developers">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/wwwlogo.jpg">
        <link rel="stylesheet" href="styles/Mstyle.css" media="screen and (max-width:999px)">
        <link rel="stylesheet" href="styles/style.css"  media="screen and (min-width:999px)">
        <title>Topic</title>
    </head>
    <body>
d        <!-- Header section, includes nav bar and the yellow background header -->
		<?php require("header.inc"); ?>
        <!-- Main content of page -->
        <main id="topic-page" class="w-100 flex-container-nowrap ">
            <div id="content">
                <h1>Topic</h1>
                <!-- Introduction to websites -->
                <section>
                    <h2>What is a Website?</h2>
                    <p>It's a way to gather information, connect with others, and create content on the internet. 
                        <br>There are different Web versions, but mostly covered what we currently use today and the future website development.
                    </p>
                    <h3>Website Evolution Feature </h3>
                    <ol type="i">
                        <li>Read Only - Web 1.0</li>
                        <li>Read and Write - Web 2.0</li>
                        <li>Interactive Executable - Web 3.0</li>
                        <li>??? - Web 4.0</li>
                    </ol>
                </section>
                <!-- Introducing web 2.0 -->
                <section>
                    <h2>Web 2.0</h2>
                    <p>Created by Darcy DiNucci in 1999 and later popularized by Tim O’Reilly in 2004. This technology allows websites to become more interactive such as collaborating, developing, sharing and simultaneously operating the web. It is highly standout for the small business model, content creators, communities and services able to communicate with each other rather than just reading information from Web 1.0. Currently Web 2.0 is known to be used today.</p>
                    <figure>
                        <a href="https://www.reddit.com/r/melbourne/">
                        <img class="topicImg" src="images/web_2.0_example.png" alt="Web 2.0 example">
                        </a>
                        <br>
                        <figcaption>Web 2.0 example, where users create and post forums.</figcaption>
                    </figure>
                </section>
                <!-- Introducing web 3.0 -->
                <section>
                    <h2>Web 3.0</h2>
                    <p>A third stage internet development from previous Web 2.0. It was developed by Tim Berners-Lee, introduced in 2006. Featuring Semantic Web, Artificial Intelligence, 3D Graphics, Connectivity and Ubiquity. Much further improvement in larger companies' business, cryptocurrency, individuals and privacy. However, Web 3.0 is still under development and will be close to finished. In 2021, this technology gained popularity as mentioned non-fungible token and metaverse was introduced.</p>
                    <figure>
                        <a href="https://sketchfab.com/3d-models/shoe-578c885c820544359969facae168c529">
                        <img class="topicImg" src="images/web_3.0_example.png" alt="Web 3.0 example">
                        </a>
                        <br>
                        <figcaption>Web 3.0 example, interactive 3D view where you can rotate around the model.</figcaption>
                    </figure>
                    <br>
                </section>
                <!-- Differences between web 2.0 and web 3.0 -->
                <section>
                    <h2>Differences </h2>
                    <ul>
                        <li>Web 3.0 is going to use more power on CPU, RAM and sometimes GPU(for 3D graphics).</li>
                        <li>Web 2.0 relied on communities while Web 3.0 targeted more for individuals.</li>
                        <li>Web 3.0 has more user control, privacy and security.</li>
                        <li>Web 3.0 is more complex to develop than Web 2.0</li>
                    </ul>
                    <h3>Website Example</h3>
                    <!-- Table listing differences between web 2.0 and web 3.0 -->
                    <table>
                        <thead>
                            <tr>
                                <th>Web 2.0</th>
                                <th>Web 3.0</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Facebook</td>
                                <td>Metaverse</td>
                            </tr>
                            <tr>
                                <td>Reddit</td>
                                <td>Brave</td>
                            </tr>
                            <tr>
                                <td>YouTube</td>
                                <td>Bitcoin</td>
                            </tr>
                            <tr>
                                <td>Dropbox</td>
                                <td>Sketchfab</td>
                            </tr>
                            <tr>
                                <td>Tumblr</td>
                                <td>OpenSea</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
            <div>
				<!-- Aside section -->
                <aside id="topicAside">
                    <h4>Did you know?</h4>
                    Servers have always been required to host all types of websites; from Web 1.0 to 3.0 and into the future!
                    <h4>Would you like to know more?</h4>
                    <p>If you want to discover more in this page, we dare you to dig into these links</p>
                    <h3>References</h3>
                    <ul>
                        <li><a href="https://www.investopedia.com/web-20-web-30-5208698#:~:text=Web%202.0%20is%20the%20current%20version%20of%20the%20web%20with,exponential%20growth%20of%20Web%202.0." target="_blank">Web 2.0 and Web 3.0 Definitions (investopedia.com).</a> </li>
                        <li><a href="https://101blockchains.com/web-2-0-and-web-3-0/" target="_blank">Difference between Web 2.0 and Web 3.0 - 101 Blockchains</a></li>
                        <li><a href="https://www.geeksforgeeks.org/web-1-0-web-2-0-and-web-3-0-with-their-difference/" target="_blank">Web 1.0, Web 2.0 and Web 3.0 with their difference</a></li>
                    </ul>
                </aside>
            </div>
        </main>
		<!-- Color changing footer showing team name and members -->
        <section class="quicklinks">
            <h2>Developers</h2>
            <p>Created by Peter, Leon, John, Stefan and Arka</p>
        </section>
		<!-- Bottom footer with links -->
        <footer>
            <div class="flex-footer">
				<!-- Contact details -->
                <div>
                    <h4>Contact any of us</h4>
                    <a href="mailto:103804645@student.swin.edu.au">Stefan Ralph</a>
                    <a href="mailto:103103232@student.swin.edu.au">Peter</a>
                    <a href="mailto:103808595@student.swin.edu.au">Leon</a>
                    <a href="mailto:103403903@student.swin.edu.au">John</a>
                    <a href="mailto:103804645@student.swin.edu.au">Arka</a>
                </div>
				<!-- Sitemap -->
                <div>
                    <h4>Sitemap</h4>
                    <a href="index.html">Home</a>
                    <a href="topic.html">Topic</a>
                    <a href="quiz.html">Quiz</a>
                    <a href="enhancements.html">Enhancements</a>
                </div>
				<!-- Social media links -->
                <div>
                    <h4>Social Media</h4>
                    <a href="https://facebook.com">Facebook</a>
                    <a href="https://instagram.com">Instagram</a>
                    <a href="https://twitter.com">Twitter</a>
                    <a href="https://discord.com">Discord</a>
                </div>
            </div>
			<!-- Copyright notice -->
            <div>
                <p>All rights reserved to Developers &copy; 2022-2023</p>
            </div>
        </footer>
    </body>
</html>