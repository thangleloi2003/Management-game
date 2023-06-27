<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Design Your Website With Background Video</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL('css/index.css')}}">
        <link rel="stylesheet" href="{{URL('video/ytpubg.mp4')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="{{URL('video/ytpubg.mp4')}}" type="video/mp4">
            </video>
            <div class="navbar">
                <img class="logo" src="https://img.freepik.com/premium-vector/console-ninja-gaming-logo-design_100735-52.jpg">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/games">Dashboard</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>DISCOVER THE GAME WORLD</h1>
                <div>
                    <button type="button">Explore</button>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
@include("layout.footer")
</footer>
    </body>
</html>