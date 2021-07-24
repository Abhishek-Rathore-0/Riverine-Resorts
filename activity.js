function topup(arr){
    document.getElementById(arr).classList.add('active');
    document.getElementById("overlay").classList.add('active');
}
function rem(){
    document.getElementById("overlay").classList.remove('active');
    document.getElementById("modal1").classList.remove('active');
    document.getElementById("modal2").classList.remove('active');
    document.getElementById("modal3").classList.remove('active');
    document.getElementById("modal4").classList.remove('active');
    document.getElementById("modal5").classList.remove('active');
    document.getElementById("modal6").classList.remove('active');
    document.getElementById("moda1").classList.remove('active');
    document.getElementById("moda2").classList.remove('active');
    document.getElementById("moda3").classList.remove('active');
    document.getElementById("moda4").classList.remove('active');
    document.getElementById("moda5").classList.remove('active');
    document.getElementById("moda6").classList.remove('active');
    document.getElementById("mod1").classList.remove('active');
    document.getElementById("mod2").classList.remove('active');
    document.getElementById("mod3").classList.remove('active');
    document.getElementById("mod4").classList.remove('active');
    document.getElementById("mod5").classList.remove('active');
}
function top1(arr){
    document.getElementById(arr).classList.toggle('show');
    document.getElementsByClassName(arr)[0].classList.toggle('active');
    document.getElementsByClassName(arr)[1].classList.toggle('active');
    document.getElementById(arr).classList.toggle('answer');
}