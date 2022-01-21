<?php 


// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Economica:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7870449ae9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap" rel="stylesheet">
    
    <title>Gianni Jouve</title>
</head>
<body> 
    <div class="header">
        <div class="header-bg"></div>
        <div class="header-mask">
            <svg width="100%" height="100%" viewbox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
            </svg>
        </div>
        <div class="container">
            <div class="navbar">
                <a href="/" class="nav-logo">
                </a>
                <div class="nav-links">
                    <a href="/" class="nav-item">
                        <span style="color: #FFE162; font-size: 1rem;" >
                            <i class="fas fa-home"></i>
                        </span>
                        About Me
                    </a>
                    <a href="/" class="nav-item">
                        <span style="color: #91C483; font-size: 1rem;">
                            <i class="fas fa-code"></i>
                        </span>
                        Portfolio
                    </a>
                    
                    <a href="/" class="nav-item">
                        <span style="color: #FF6464; font-size: 1rem;">
                            <i class="fas fa-inbox"></i>
                        </span>
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
        <div class="header-slogan">
            <div class="header-slogan-title">FULL-STACK DEVELOPER</div>
            <img src="/public/img/cvPhoto.jpg" alt="">
        </div>
    </div>
</body>
</html>