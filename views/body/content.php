
<!DOCTYPE html>
<div class="containerFooter">
    <div class="divisionLine">

    </div>
    <div class="content">
        <div class="preAbout">
            <div class="titleContent">
                Scroll Down
            </div>
            <div class="palette-all">
                <a class="palette-button" id="palette-button">
                    <i class="fas fa-palette palette-icon"></i>
                </a>
                <div class="palette-subicons" id="subiconT">
                    <a onclick="changeSvg3()" class="subicons top-icons" id="subicon3">
                        <i class="gg-shape-triangle"></i>
                    </a>

                    <a onclick="changeSvg1()" class="subicons top-icons" id="subicon5">
                        <i class="far fa-circle"></i>
                    </a>
                    <a onclick="changeSvg2()" class="subicons top-icons" id="subicon4">
                        <i class="far fa-square"></i>
                    </a>
                </div>
                <div class="palette-subicons" id="subiconB">
                    <div class="subicons" id="subicon6" onclick="changeColor1()"></div>
                    <div class="subicons" id="subicon7" onclick="changeColor2()"></div>
                    <div class="subicons" id="subicon8" onclick="changeColor3()"></div>
                </div>
            </div>
            <a href="#aboutMe">
                <div class='scrolldown' id="test">
                    <div class="chevrons">
                        <div class='chevrondown'></div>
                        <div class='chevrondown'></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="containerContent">
    <div class="sections aboutMe" id="aboutMe">
        <img src="/public/img/welcomingBlue.svg" class="welcomeSvg" id="welcomeSvg" data-aos="fade-right">
        <div class="titleSectionsL">
            ABOUT ME.
        </div>
        <div class="containerWorked">
            <div class="workedWith">
                <div class="titleWorked">Worked with </div>
                <div class="logos">
                    <img src="/public/img/django.png" class="logo">
                    <img src="/public/img/nodejs.png" class="logo">
                    <img src="/public/img/java.png" class="logo">
                    <img src="/public/img/python.png" class="logo">
                    <img src="/public/img/flutter.png" class="logo">

                </div>
            </div>
        </div>
        

        <div class="contentAbout">
            I am a graduated engineer in computer sciences. Since more than 3 years, I have been hired as an apprentice in 2 huge companies.
            <b>Thales Alenia Space</b> and <b>Societe Generale</b>.
            I enjoy coding, it has been a part of my life for few years now.<br/>
            <i style="font-size: small;">For now, the Portfolio section is in progress. Please come back later to witness which projects I have worked on !</i>
            
        </div>
        <div class="resumeButton">
            <a href="public/files/GJCV.pdf">
                <button class="button-29 " role="button "> Download my Resume <i class="fas fa-download"></i></button>
            </a>
        </div>
        

    </div>
    <div class="sections portfolioSection" id="portfolio">
        <div class="titleSectionsR">
            PORTFOLIO.
        </div>
        
        
    </div>
    <div class="sections contactMe" id="contactMe">
        <div class="titleSectionsL contactTitle">
            CONTACT ME.
        </div>
        <!-- <div class="contactForm">
            <form method="post" name="myemailform" action="/views/body/sendMail.php">

            Enter Name:	<input type="text" name="name">

            Enter Email Address:	<input type="text" name="email">

            Enter Message:	<textarea name="message"></textarea>

            <input type="submit" name="submitButton" id="submitButton" value="Send Form">
            </form>
        </div> -->

        <form class="cf" method="post" name="myemailform" action="" class="myemailform"> 
            <div class="half left cf">
                <input type="text" id="input-name" placeholder="Name" name="name" required>
                <input type="email" id="input-email" placeholder="Email address" name="email" required>
            </div>
            <div class="half right cf">
                <textarea name="message" type="text" id="input-message" placeholder="Message" name="message" required></textarea>
            </div>  
            <input class="button-29" type="submit" value="Send Message" name="submitButton" id="submitButton">
        </form>
        <img src="/public/img/byeBlue.svg" class="byeSvg" data-aos="fade-right" id="byeSvg">
        
        
    </div>
    
</div>  


</html>
<?php
    /* if ( isset( $_POST["submitButton"] ) ) { 
        header( "Location: localhost:4000" ); 
        exit; 
    } */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        http_response_code(500);
        exit();
    }
    
    if (isset($_SESSION['count'])) $_SESSION['count']++;
    else $_SESSION['count'] = 0;
    if ($_SESSION['count'] == 3) {
        http_response_code(403);
        exit();
    }
    
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    $to = "gianni.jouve@gmail.com";
    $subject = "Vous avez recu un message de : $name";
    $body = "Vous avez recu un nouveau message depuis le formulaire de votre site perso.\n\n"."Voici les details :\nNom : $name\n\nMail : $email\n\nMessage :\n$message";
    $header = "From: noreply@GianniJouve.com\n";
    $header .= "Reply-To: $email";  
    $header = "Location: http://localhost:4000/\n";
    
    if(!mail($to, $subject, $body, $header))
        http_response_code(500);
    else
        header( 'Location: https://giannijouve.com/' );
?>