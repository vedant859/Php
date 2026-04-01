#contact.dat
1 Rahul 02012345 9876543210 Pune
2 Amit 02067890 9123456789 Mumbai
3 Neha 02054321 9988776655 Nashik

function loadData(){
    let x=new XMLHttpRequest();
    x.onload=function(){
        document.getElementById("data").innerHTML=this.responseText;
    }
    x.open("GET","contact.dat");
    x.send();
}
