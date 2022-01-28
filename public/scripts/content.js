
function changeGeo(){

    
    
    
    if(changeSvg('#svg1','#svg2')) return;
    if(changeSvg('#svg2','#svg3')) return;
    if(changeSvg('#svg3','#svg4')) return;
    if(changeSvg('#svg4','#svg1')) return;
   
    /* if(texture){
        var display = texture.style.display;
        if(display == "none"){

        }
    } */
}

function changeSvg( selector1, selector2){
    if($(selector1).css('display') != 'none'){
        $(selector2).css('display','inline');
        $(selector1).css('display','none');
        return true;
    }
    else{
        return false;
    }
    
}

function changeColorTemp(headerColor, navLogoColor, navLogoHoverColor, navFontColor){
    document.querySelector(":root").style.setProperty('--header-color', headerColor);
    document.querySelector(":root").style.setProperty('--nav-logo-color', navLogoColor);
    document.querySelector(":root").style.setProperty('--nav-logo-hover-color', navLogoHoverColor);
    document.querySelector(":root").style.setProperty('--nav-font-color', navFontColor);
}

function changeColor2(){
    changeColorTemp("#6b705c","#f4a261","#F98224","#4D5437");
    $("#heroHeader").attr("src","/public/img/userHeader2.svg");
    return;
}
function changeColor1(){
    changeColorTemp("#2F3A8F","#FE7E6D","#ff523b","#474554");
    $("#heroHeader").attr("src","/public/img/userHeader.svg");
    return;
}
function changeColor3(){
    changeColorTemp("#EA99D5","#B762C1","#8946A6","#323232");
    $("#heroHeader").attr("src","/public/img/userHeader3.svg");
    return;
}