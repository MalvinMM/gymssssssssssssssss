<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Landing Page</title>

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
            .overlay::after{
                content: "";
                display: block;
                width: 100%;
                height: 100%;
                background-color: #000000;
                position: absolute;
                top: 0;
                left: 0; 
                opacity: .6;
                z-index: 0;
            }
            .overlay{
                position: relative;
            }
            .overlay > *{
                z-index: 10;
                position: relative;
            }
            .overlay{
                background-image: url(https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);
                padding: 20vh 0;
                background-size: cover;
                text-align: center;
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
        </style>
    </head>
    <nav class="navbar">
        <div class="logo"><a href="/">LOGO</a></div>
        <div class="menu">
            <a href="news">News</a>
            <a href="contact">Contact</a>
            <a href="about">About Us</a>
        </div>
    </nav>
    
    <body>
        <section class="overlay">
                <div class="title">
                    Landing Page
                </div>
                <div class="subs">
                    Welcome to this website! Currently, the landing page is in progress
                    so sit tight <br> wait for the upcoming updates!                           
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
