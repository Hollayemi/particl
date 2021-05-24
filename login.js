var loingInput = document.querySelector('.loingInput')
var signupInput = document.querySelector('.signupInput');

var switchLogin = document.querySelector('.switchLogin')
var switchSignUp = document.querySelector('.switchSignUp')

switchSignUp.addEventListener('click',function(){
    switchLogin.style.backgroundColor="rgb(14, 194, 140)"
    switchLogin.style.color="#fff"

    switchSignUp.style.backgroundColor="transparent"
    switchSignUp.style.color="rgb(14, 194, 140)"
    loingInput.style.marginTop="-500px"

})

switchLogin.addEventListener('click',function(){
    switchLogin.style.backgroundColor="transparent"
    switchSignUp.style.backgroundColor="rgb(14, 194, 140)"
    switchSignUp.style.color="#fff"
    switchLogin.style.color="rgb(14, 194, 140)"
    loingInput.style.marginTop="0px"
    signupInput.style.marginTop="0px"
})
