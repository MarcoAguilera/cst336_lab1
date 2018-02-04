<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8" />
        <title> Marco Aguilera : Personal Website </title>
        <style>
            @import url("css/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Marco Aguilera </h1>
        </header>
        <nav>
            <hr width="50%" />
            <a href="index.php" id="index">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        
        <br /><br />
        
        <main>
            <figure id="me">
                <img src="img/IMG_0017.jpg" alt="Picture of Marco Aguilera" id="image_of_me" />
            </figure>
            
            <div id="welcomeText">
                Hello! <br />
                
                <p>Thank you for visiting my professional portfolio website.</p>
                
                <p>I am a Software Engineer and have been recently hired at the Acme Corporation.</p>
                
                <p>Feel free to contact me!</p>
                
                <br /> <br />
                
                <em>"With ordinary talent and extraordinary <strong>perseverance</strong>, all things are attainable"</em><br />
                - Thomas F. Buxton
                
            </div>
            
        </main>
        
        <footer>
            <hr>
                Course Name. 2017&copy; Aguilera <br />
                <strong>Disclaimer:</strong> The information in this webpage
                is fictitous. <br />
                It is used for academic purposes only.
                <figure>
                    <img src="img/csumb_logo.png" alt="CSUMB Logo"/>
                </figure>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>