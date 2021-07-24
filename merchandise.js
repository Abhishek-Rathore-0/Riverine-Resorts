var b=new Array;
for (var i = 1; i <= 12; i++) {
    b[i]=0;
}
function atc(arr,arr1,no){
    if(b[no]==0){
        b[no]=1;
        document.getElementById(arr).value = 'Remove from cart';
        document.getElementById(arr1).classList.add('show');
        document.getElementById("c13").classList.add('show');
        document.getElementById("c14").classList.remove('show');
        var ab="i".concat(no);
        document.getElementById(ab).value=1;
    }
    else{
        b[no]=0;
        document.getElementById(arr).value = 'Add to Cart';
        document.getElementById(arr1).classList.remove('show');
        var ab="i".concat(no);
        var ab1=document.getElementById(ab).value;
        var ac="r".concat(no);
        var ac2=document.getElementById(ac).value;
        document.getElementById(ac).value=(parseInt(ac2)/parseInt(ab1));
        document.getElementById(ab).value=0;
        var j=0;
        for(var i = 1; i <= 12; i++) {
            var ad="i".concat(i);
            var ad1=document.getElementById(ad).value; 
            if(ad1!=0)
            {
                j=j+1;
            }
        }
        if(j==0){
            document.getElementById("c13").classList.remove('show'); 
            document.getElementById("c14").classList.add('show'); 
        }
    }
    sum();
}
function card(){
    var pay=document.getElementById("pay1");
    var no=pay.selectedIndex;
    if(no==1)
        document.getElementById("card1").classList.remove('display');
    else if(no==2 || no==3)
        document.getElementById("card1").classList.add('display');
    else
        document.getElementById("card1").classList.remove('display');
    
}
function show(){
    var pay=document.getElementById("pay1");
    var pay1=pay.selectedIndex;
    if(pay1==1){
        document.getElementById("cname").removeAttribute("required","");
        document.getElementById("cno").removeAttribute("required","");
        document.getElementById("cvv").removeAttribute("required","");
        document.getElementById("em").removeAttribute("required","");
        document.getElementById("ey").removeAttribute("required","");
        document.getElementById("order1").disabled=false;
    }
    else if(pay1==2||pay1==3){
        document.getElementById("order1").disabled=false;
        document.getElementById("cname").setAttribute("required","");
        document.getElementById("cno").setAttribute("required","");
        document.getElementById("cvv").setAttribute("required","");
        document.getElementById("em").setAttribute("required","");
        document.getElementById("ey").setAttribute("required","");  
    }    
    else
       document.getElementById("order1").disabled=true;  
}
function sub(arr,arr1,no){
    var x=parseInt(document.getElementById(arr).value);
    var y=parseInt(document.getElementById(arr1).value);
    
    if(x!=1)
    {
        y=y-parseInt(no);
        x=x-1;
        document.getElementById(arr).value=x;
        document.getElementById(arr1).value=y;
    }
    sum();
}

function add(arr,arr1,no){
    var x=parseInt(document.getElementById(arr).value);
    var y=parseInt(document.getElementById(arr1).value);
    if(x!=5)
    {
        y=y+parseInt(no);
        x=x+1;
        document.getElementById(arr).value=x;
        document.getElementById(arr1).value=y;
    }
    else{
        alert("You cannot order more than 5 ");
    }
    sum();
}
function sum(){
    var s=0;
    for (var i = 1; i <= 12; i++) {
        var ab="i".concat(i);
        var ab1=document.getElementById(ab).value;
        if(ab1!=0)
        {
            var ac="r".concat(i);
            var ac2=parseInt(document.getElementById(ac).value);
            s=s+ac2;
        }
    }
    document.getElementById("s1").value=s;
    document.getElementById("cost").value=s;
}
function canc(arr){
    document.getElementById(arr).classList.add('active');
    document.getElementById("overlay").classList.add('active');
}

function rem(){
    document.getElementById("overlay").classList.remove('active');
    document.getElementById("modal").classList.remove('active');
    document.getElementById("modal2").classList.remove('active');
    
}
function confirm(){
    confirm("Confirm your order");
}