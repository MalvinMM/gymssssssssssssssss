<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
     
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: fixed;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .words{
                text-align: center;
                padding: 20vh 0;
                position: relative;
            }
            .title {
                font-size: 84px;
                font-weight: 600;
            }
            .subs{
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                opacity: 0.75;
                color: #d3d3d3;
            }
            .details{
                margin-top: 10px;
                padding-top: 50px;
                padding-left: 24px;
                padding-right: 24px;
                padding-bottom: 50px;
                color: white;
                z-index:1;
                text-align: left;
            }
            /*navbar*/
            .navbar {
                backdrop-filter: blur(5px);
                background-color: rgba(0, 0, 0, 0.4);
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                right: 0;
            }
            .navbar a {
                float: right;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
                top: 50%;
                left: 50%;
            }
            .navbar a:hover {
                color: #ffffff;
                font-weight: 900;
            }
            .logo {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                text-decoration: none;
                font-size: 22px;
                color: #ffffff;
                font-weight: 500;
                float: left;
            }
            .navbar a.active {
                color: rgb(230, 111, 111);
            }
        </style>
    </head>
    <body>
        
    <nav class="navbar">
        <div class="logo"><a href="/">LOGO</a></div>
        <div class="menu">
            <a href="news">News</a>
            <a href="contact">Contact</a>
            <a href="about" class="active">About Us</a>
        </div>
    </nav>

</head>
<body>
<section class="words">
    <div class="title">
    About Us
    </div>
    <div class="subs">
    There wil be more details about the website.
    </div>
</section>
<div class="details">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
</body>
</html>