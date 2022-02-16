
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
            Thales Alenia Space and Societe Generale.
            I enjoy coding, it has been a part of my life for few years now.
            Thank you for beeing here and do not forget to discover my Portfolio section to discover other projects I have worked on.
        </div>
        <div class="resumeButton">
            <a href="public/files/GJCVVF.pdf">
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
        <div class="titleSectionsL">
            CONTACT ME.
        </div>
        <div class="form" method="POST">
            
            <div class="form-name">
                <div class="form-label">
                    NAME
                </div>
                <input class="form-name-input name" name="name" placeholder="Your name">
            </div>
            <div class="form-email">
                <div class="form-label">
                    E-MAIL
                </div>
                <input class="form-email-input email" name="email" placeholder="Your e-mail">
            </div>
            <div class="form-message">
                <div class="form-label">
                    MESSAGE
                </div>
                <textarea class="form-message-input message" name="message" placeholder="Your message here"></textarea>
            </div>
            <button type="submit" name="submit">SEND</button>
            

        </div>
    </div>
</div>


</html>
<?php
/* session_start();
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
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "remy93130@gmail.com";
$subject = "Vous avez recu un message de : $name";
$body = "Vous avez recu un nouveau message depuis le formulaire de votre site perso.\n\n"."Voici les details :\nNom : $name\n\nMail : $email\n\nMessage :\n$message";
$header = "From: noreply@BarberetRemy.com\n";
$header .= "Reply-To: $email";  

if(!mail($to, $subject, $body, $header))
    http_response_code(500); */

?>