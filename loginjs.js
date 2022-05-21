function func()
{
    var u=document.getElementById("un").value;
    var p=document.getElementById("pass").value;
    //alert(p);
    if(u!="" && pass!="")
    {
        alert("logged in successfully");
        location.href="D:/WINSEM-22 DA/IWP/proj_iwp/index.html";

    }
    else{
        alert("enter a valid user id and password!!!!");
    }
}