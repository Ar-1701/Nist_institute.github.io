function myform() 
{
    var user=document.getElementById('user').value;
    var fname=document.getElementById('fname').value;
    var mname=document.getElementById('mname').value;
    var mobile=document.getElementById('mobile').value;
    var dob=document.getElementById('dob').value;
    var address=document.getElementById('address').value;
    var email=document.getElementById('email').value;
    var pass=document.getElementById('pass').value;
    var conpass=document.getElementById('conpass').value;
    

    if(user == "")
    {
        document.getElementById("usename").style.color="red";
        document.getElementById("usename").innerHTML="**Please Enter Username**";
        return false;
    }
    if((user.length<=2)||(user.length>20))

    {
        document.getElementById("usename").style.color="red";
        document.getElementById("usename").innerHTML="**Username must be between 2 to 20**";
        return false;
    }
    if(!isNaN(user))
    {
        document.getElementById("usename").style.color="red";
        document.getElementById("usename").innerHTML="**Only Characters are allowed**";
        return false;
        
    }
   
    if(fname == "")
    {
        document.getElementById("fname1").style.color="red";
        document.getElementById("fname1").innerHTML="**please enter Father name**";
        return false;
    }
    if((fname.length<=2)||(fname.length>20))
    {
        document.getElementById("fname1").style.color="red";
        document.getElementById("fname1").innerHTML="**User name must be between 2 to 20**";
        return false;
    }
    if(!isNaN(fname))
    {
        document.getElementById("fname").style.color="red";
        document.getElementById("fname").innerHTML="**Only Characters are allowed**";
        return false;
        
    }
   
    if(mname == "")
    {
        document.getElementById("mname1").style.color="red";
        document.getElementById("mname1").innerHTML="**please enter mother name**";
        return false;
    }
    if((mname.length<=2)||(mname.length>20))
    {
        document.getElementById("mname1").style.color="red";
        document.getElementById("mname1").innerHTML="**User name must be between 2 to 20**";
        return false;
    }
    if(!isNaN(mname))
    {
        document.getElementById("mname1").style.color="red";
        document.getElementById("mname1").innerHTML="**Only Characters are allowed**";
        return false;
        
    }

    if(mobile == "")
    {
        document.getElementById("phone").style.color="red";
        document.getElementById("phone").innerHTML="**please Enter mobile number**";
        return false;
    }
    if(isNaN(mobile))
    {
        document.getElementById("phone").style.color="red";
        document.getElementById("phone").innerHTML="**Only Digit are allowed**";
        return false;
    }
    if(mobile.length<10)
    {
        document.getElementById("phone").style.color="red";
        document.getElementById("phone").innerHTML="**Please enter 10 digit number**";
        return false;
        
    }
    if(mobile.length>10)
    {
        document.getElementById("phone").style.color="red";
        document.getElementById("phone").innerHTML="**you fill +10 digit number**";
        return false;
        
    }
    if(dob == "")
    {
        document.getElementById("dob1").style.color="red";
        document.getElementById("dob1").innerHTML="**please enter  Enter DOB**";
        return false;
    }
  
    if(Course.selectedIndex < 1)
    {
        document.getElementById("course1").style.color="red";
        document.getElementById("course1").innerHTML="**please fill course**";
        return false;
    }



    if(address == "")
    {
        document.getElementById("add1").style.color="red";
        document.getElementById("add1").innerHTML="**please enter Address** ";
        return false;
    }
    if(email == "")
    {
        document.getElementById("email1").style.color="red";
        document.getElementById("email1").innerHTML="**please enter email**";
        return false;
    }
    if(email.indexOf("@")== 1)
    {
        document.getElementById("email1").style.color="red";
        document.getElementById("email1").innerHTML="**Invalid @ Postion**";
        return false;
    }
    if(pass == "")
    {
        document.getElementById("password").style.color="red";
        document.getElementById("password").innerHTML="**please enter password**";
        return false;
    }
    if((pass.length<5)||(pass.length>10))
    {
        document.getElementById("password").style.color="red";
        document.getElementById("password").innerHTML="**please fill password between 5 to 10 digit**";
        return false;
    }
    if(conpass == "")
    {
        document.getElementById("confirm_password").style.color="red";
        document.getElementById("confirm_password").innerHTML="**please enter confirm password**";
        return false;
    }
    if(pass!=conpass)
    {
        document.getElementById("confirm_password").style.color="red ";
        document.getElementById("confirm_password").innerHTML="**confirm pass not matched**";
        return false;
  
    }
    else
    {
     button.submit();
     alert("Your Form will be submitted.**Thank You**"+user);
     return true;
    }

}