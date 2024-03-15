<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MaShu's Shack - Intro</title>
        <link rel="icon" href="Assets/Icon.ico">
        <link rel="stylesheet" href="styles.css">
        <style>
            /* Centering content */
            body {
                height: 100vh;
                margin: 0;
                font-size: 300px;
                font-family: 'pupcat';
            }
            h1 {
                text-align: center;
                font-size: 80px;
            }
            p {
                align-items: center;
                justify-content: center;
                display: flex;
            }
            .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Loader styles */
        .loader {
            --d: 32px;
            width: 4px;
            height: 4px;
            border-radius: 100%;
            color: #592d79;
            box-shadow: 
                calc(1*var(--d))      calc(0*var(--d))     0 0,
                calc(0.707*var(--d))  calc(0.707*var(--d)) 0 1px,
                calc(0*var(--d))      calc(1*var(--d))     0 2px,
                calc(-0.707*var(--d)) calc(0.707*var(--d)) 0 3px,
                calc(-1*var(--d))     calc(0*var(--d))     0 4px,
                calc(-0.707*var(--d)) calc(-0.707*var(--d))0 5px,
                calc(0*var(--d))      calc(-1*var(--d))    0 6px;
            animation: l27 1s infinite steps(8);
            align-items: center;
            justify-content: center;
            display: flex;
        }
            @keyframes l27 {
                100% {transform: rotate(1turn)}
            }
        </style>
    </head>
    <body>
        <h1>Welcome to MaShu's Shack</h1>
        <p>Redirecting to the Home page...</p>

        <div class="container">
            <div class="loader"></div>
        </div>
    <script>
        // Function to redirect to the main page
        function redirectToMainPage() {
            window.location.href = "home.html";
        }

        // Set timeout to redirect after 8 seconds
        setTimeout(redirectToMainPage, 8000);

        // Redirect if clicked
        document.addEventListener("click", redirectToMainPage);
    </script>
                
    </body>