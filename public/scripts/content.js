
function changeTheme(){

    
    
    
    if(change('#svg1','#svg2')) return;
    if(change('#svg2','#svg3')) return;
    if(change('#svg3','#svg4')) return;
    if(change('#svg4','#svg1')) return;
   
    /* if(texture){
        var display = texture.style.display;
        if(display == "none"){

        }
    } */
}

function change( selector1, selector2){
    if($(selector1).css('display') != 'none'){
        $(selector2).css('display','inline');
        $(selector1).css('display','none');
        return true;
    }
    else{
        return false;
    }
    
}
