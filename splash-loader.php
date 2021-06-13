<html>

<head>
    <meta charset="UTF-8">
    <style>
        .logo {
            -webkit-animation: spin 5s infinite;
            animation: spin 5s infinite;
        }

        @-webkit-keyframes spin {
            from {
                -webkit-transform: rotateY(0deg);
            }

            to {
                -webkit-transform: rotateY(-0deg);
            }
        }

        @keyframes spin {
            from {
                -moz-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                transform: rotateY(0deg);
            }

            to {
                -moz-transform: rotateY(-360deg);
                -ms-transform: rotateY(-360deg);
                transform: rotateY(-360deg);
            }
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="logo">
                <img src="images/logo.png" alt="shah IT Institute logo">
            </div>
        </div>
    </div>

</body>

</html>