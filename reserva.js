function chin(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 
    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("checkin1").setAttribute("min", today);
    document.getElementById("checkin").setAttribute("min", today);
}
function chout1(){
    var cout2=parseDate(document.getElementById("checkin").value);
    if(cout2!="")
    {
        var dd = cout2.getDate()+1;
        var mm = cout2.getMonth()+1; //January is 0! 
        var mm1 = cout2.getMonth()+2;
        var yyyy = cout2.getFullYear();
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        } 
        cout2 = yyyy+'-'+mm+'-'+dd;
        coutm = yyyy+'-'+mm1+'-'+dd;
        document.getElementById("checkout").setAttribute("min",cout2);
        document.getElementById("checkout").setAttribute("max",coutm);
    }
}
function chout2(){
    var cout1=parseDate(document.getElementById("checkin1").value);
    if(cout1!="")
    {
        var dd = cout1.getDate()+1;
        var mm = cout1.getMonth()+1; //January is 0! 
        var mm1 = cout1.getMonth()+2;
        var yyyy = cout1.getFullYear();
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        } 
        cout1 = yyyy+'-'+mm+'-'+dd;
        coutm = yyyy+'-'+mm1+'-'+dd;
        document.getElementById("checkout1").setAttribute("min",cout1);
        document.getElementById("checkout1").setAttribute("max",coutm);
    }
}


function canc(arr){
    document.getElementById(arr).classList.add('active');
    document.getElementById("overlay").classList.add('active');
}
function rem(){
    document.getElementById("overlay").classList.remove('active');
    document.getElementById("modal").classList.remove('active');   
}

function parseDate(input) {
    var parts = input.match(/(\d+)/g);
    // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
    return new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
}
function cost1(){
    var cin1=document.getElementById("checkin1").value;
    var cout1=document.getElementById("checkout1").value;
    var day1=1;
    if(cin1==""||cout1==""){}
    else{
        cin=parseDate(cin1);
        cout=parseDate(cout1);
        var time = cout.getTime() - cin.getTime(); 
        var day = time/ (1000 * 3600 * 24); 
        day1=day;
    }
    var room=document.getElementById("roomtype1");
    var no=room.selectedIndex;
    var no1;
    if(no==0)
        no1=1500;
    else if(no==1)
        no1=2500;
    else if(no==2)
        no1=4000;
    else
        no1=0;
    var no3=parseInt(document.getElementById("noofroom1").value);
       var total=no1*no3*day1;
       document.getElementById("cost").value=total;
}

function show(){
    var pay=document.getElementById("pay");
    var pay1=pay.selectedIndex;
    if(pay1==1||pay1==2)
        document.getElementById("reser").disabled=false;
    else
       document.getElementById("reser").disabled=true;  
}

function card(){
    var pay=document.getElementById("pay");
    var no=pay.selectedIndex;
    if(no==1||no==2)
        document.getElementById("card1").classList.add('display');
    else 
        document.getElementById("card1").classList.remove('display');
}