<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MaShu's Shack - Home</title>
        <link rel="icon" href="Assets/Icon.ico">
        <link rel="stylesheet" href="styles.css">
        <script src="script.js"></script>
    </head>
    <body class="ani">
        <div class="fll_cntct">
            <div class="navbar">
                <div class="navbar_slct">
                    <a href="home.html">Home</a>
                    <a href="profile.html">Profile</a>
                    <a href="about.html">About Me</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="contact.html"><img class="logo" src="Assets/logo.png" alt="MaShu's Shack" width="40px"></a>
                </div>
            </div>
            <div class="form" >
                <div class="cntnr cntct">
                    <h4>If you have suggestion or question feel free to contact me!</h4>
                    <br>
                    <form id="contactForm">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
    
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
    
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
    
                        <button type="button" onclick="submitForm()">Submit</button>
                    </form>
    
                    <div id="errorMessage" class="error-message"></div>
                </div>
            </div>
        </div>
    </body>
    <footer class="ftr_cntnt">
        <div class="ftr_cntnr">
            <p id="bldrname">Matthew Paren</p>
            <p id="femail">mcparen@student.apc.edu.ph<!-- MAKE THIS A LINK --></p>
            <p id="crdts">&copy; 2024 MaShu's Shack. All rights reserved.</p>
        </div>
    </footer>
</html>
