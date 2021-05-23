var marketDiv = document.querySelector('.marketDiv')
var angleUp = document.querySelector('.angleUp')
var showMarket = document.querySelector('.showMarket')

marketDiv.addEventListener('click', function(){
    if(angleUp.style.color == "rgb(14, 194, 140)"){
        
        angleUp.style.transform   = "scale(-1)"
        angleUp.style.color       = "rgb(85, 85, 85)"
        showMarket.style.height   = "0px"
        
    }else{
        angleUp.style.transform   = "scale(1)"
        angleUp.style.color       = "rgb(14, 194, 140)"
        showMarket.style.height   = "150px"

    }
})
////////////////////////////////////////// wallet section//////////////////////////////////////////////
var walletDiv        = document.querySelector('.walletDiv')
var walletAngleUp    = document.querySelector('.walletAngleUp')
var ShowwalletSec    = document.querySelector('.ShowwalletSec')

walletDiv.addEventListener('click', function(){
    if(walletAngleUp.style.color == "rgb(14, 194, 140)"){
        walletAngleUp.style.transform   = "scale(-1)"
        walletAngleUp.style.color       = "rgb(85, 85, 85)"
        ShowwalletSec.style.height      = "0px"
        
    }else{
        walletAngleUp.style.transform   = "scale(1)"
        walletAngleUp.style.color       = "rgb(14, 194, 140)"
        ShowwalletSec.style.height      = "200px"
    }
})








///////////////////////// switching Tabs   ////////////////////////////

function switchPage(PageName) {
    var i;
    var x = document.getElementsByClassName("mainSide");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(PageName).style.display = "block";  
}

document.querySelector('.questionMark').addEventListener('click', function(){
    document.querySelector('.Sell_Add_Item_help').style.display   =  "block"
    document.querySelector('.questionMark').style.transform       =  "scale(0)"
    document.querySelector('.questionMarkCancel').style.transform =  "scale(1)"
})



document.querySelector('.questionMarkCancel').addEventListener('click', function(){
    document.querySelector('.Sell_Add_Item_help').style.display   =  "none"
    document.querySelector('.questionMark').style.transform       =  "scale(1)"
    document.querySelector('.questionMarkCancel').style.transform =  "scale(0)"
})