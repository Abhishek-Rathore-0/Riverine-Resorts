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
    document.getElementById("modal7").classList.remove('active');
    document.getElementById("modal8").classList.remove('active');
    document.getElementById("modal9").classList.remove('active');
    document.getElementById("modal10").classList.remove('active');
    document.getElementById("modal11").classList.remove('active');
}
function top1(arr){
    document.getElementById(arr).classList.toggle('show');
    document.getElementsByClassName(arr)[0].classList.toggle('active');
    document.getElementsByClassName(arr)[1].classList.toggle('active');
    document.getElementById(arr).classList.toggle('answer');
}
function ques(arr){
    
    var x=document.getElementById('question').value;
    if(x == "")
    {
        alert("Please enter the question.");
    }        
    else
    {
        topup(arr);
    }    
}
function re(arr){
    
    var x=document.getElementById('review').value;
    if(x == "")
    {
        alert("Please enter the review.");
    }        
    else
    {
        topup(arr);
    }    
}


