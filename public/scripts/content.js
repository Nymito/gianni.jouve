window.addEventListener('load', init, false);


function init() {
    palette = document.getElementById('palette-button');

    subicon1 = document.getElementById('subicon3');
    subicon2 = document.getElementById('subicon4');
    subicon3 = document.getElementById('subicon5');
    subicon4 = document.getElementById('subicon6');
    subicon5 = document.getElementById('subicon7');
    subicon6 = document.getElementById('subicon8');

    welcomeSvg = document.getElementById('welcomeSvg');

    palette.onclick = function() { popIcons() };
}

function changeGeo() {




    if (changeSvg('#svg1', '#svg2')) return;
    if (changeSvg('#svg2', '#svg3')) return;
    if (changeSvg('#svg3', '#svg4')) return;
    if (changeSvg('#svg4', '#svg1')) return;

    /* if(texture){
        var display = texture.style.display;
        if(display == "none"){

        }
    } */
}

function changeSvg1() {
    $('#svg2').css('display', 'inline');
    $('#svg3').css('display', 'none');
    $('#svg4').css('display', 'none');
    return;
}

function changeSvg2() {
    $('#svg2').css('display', 'none');
    $('#svg3').css('display', 'inline');
    $('#svg4').css('display', 'none');
    return;
}

function changeSvg3() {
    $('#svg2').css('display', 'none');
    $('#svg3').css('display', 'none');
    $('#svg4').css('display', 'inline');

    return;
}


function changeSvg(selector1, selector2) {
    if ($(selector1).css('display') != 'none') {
        $(selector2).css('display', 'inline');
        $(selector1).css('display', 'none');
        return true;
    } else {
        return false;
    }

}

function changeColorTemp(headerColor, navLogoColor, navLogoHoverColor, navFontColor, contrastColor) {
    document.querySelector(":root").style.setProperty('--header-color', headerColor);
    document.querySelector(":root").style.setProperty('--nav-logo-color', navLogoColor);
    document.querySelector(":root").style.setProperty('--nav-logo-hover-color', navLogoHoverColor);
    document.querySelector(":root").style.setProperty('--nav-font-color', navFontColor);
    document.querySelector(":root").style.setProperty('--main-color-contrast', contrastColor);
}

function changeColor1() {
    changeColorTemp("#2F3A8F", "#FE7E6D", "#ff523b", "#474554", "#F2ECFF");
    $("#heroHeader").attr("src", "/public/img/userHeader.svg");
    $("#welcomeSvg").attr("src", "/public/img/welcomingBlue.svg");
    return;
}

function changeColor2() {
    changeColorTemp("#6b705c", "#f4a261", "#F98224", "#4D5437", "#ECF5CF");
    $("#heroHeader").attr("src", "/public/img/userHeader2.svg");
    $("#welcomeSvg").attr("src", "/public/img/welcomingGreen.svg");
    return;
}

function changeColor3() {
    changeColorTemp("#8946A6", "#5FBAB0", "#49817A", "#323232", "#FFE7FF");
    $("#heroHeader").attr("src", "/public/img/userHeader3.svg");
    $("#welcomeSvg").attr("src", "/public/img/welcomingPink.svg");
    return;
}


function moveIcon(element, classElement) {
    if (element.classList.contains(classElement)) {
        element.classList.remove(classElement);
        element.style.opacity = "0";
    } else {
        element.classList.add(classElement);
        element.style.opacity = "1";
    }
    return;
}


function popIcons() {
    console.log(subicon1);

    moveIcon(subicon1, "move3");
    moveIcon(subicon2, "move4");
    moveIcon(subicon3, "move5");
    moveIcon(subicon4, "move6");
    moveIcon(subicon5, "move7");
    moveIcon(subicon6, "move8");


    return;
}