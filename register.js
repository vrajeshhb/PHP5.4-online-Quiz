function checkU()
{
	if(document.frm.uname.value=="")
	{
		alert("Plz enter username");
		return false;
	}
	else
	{
		return true;
	}
	return false;
}
function sub()
{
	if(document.frm.fname.value=="" && document.frm.lname.value=="" && document.frm.city.value=="" && document.frm.state.value=="" && document.frm.no.value=="" && document.frm.dd.value=="" && document.frm.uname.value=="" && document.frm.pass.value=="")
	{
		alert("Plz fill-up  form");
		return false;
	}
	else if(document.frm.fname.value=="")
	{
		alert("Plz fill-up Fname");
		return false;
	}
	else if(document.frm.lname.value=="")
	{
		alert("Plz fill-up Lname");
		return false;
	}
	else if(document.frm.city.value=="" )
	{
		alert("Plz fill-up City");
		return false;
	}
	else if(document.frm.state.value=="")
	{
		alert("Plz fill-up State");
		return false;
	}
	else if(document.frm.no.value=="")
	{
		alert("Plz fill-up Contact no");
		return false;
	
	}
	else if(document.frm.dd.value=="")
	{
		alert("Plz fill-up Address..");
		return false;
	}
	else if(document.frm.uname.value=="")
	{
		alert("Plz fill-up E-mail (Username)");
		return false;
	}
	else if( document.frm.pass.value=="")
	{
		alert("Plz fill-up Password");
		return false;
	}
	
	return cv();
	
}
function ve()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(document.frm.uname.value.match(mailformat))
	{
		
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		
		return false;
	}
}
function cv()
{
		var phoneno = /^\d{10}$/;
        if(document.frm.no.value.match(phoneno))
        {
            return ve();
        }
        else
        {
            alert("Not a valid Phone Number");
            return false;
        }
		
		return true;

}
function fn()
{
	if(document.frm.fname.value=="")
	{
		alert("Plz Enter First Name..");
		return false;
	}
	return true;
}

function ln()
{
	if(document.frm.lname.value=="")
	{
		if(document.frm.lname.value=="" || document.frm.fname.value=="")
		{
			alert("Plz Enter Fname And Lname ..");
		}		
	}
	if(document.frm.lname.value=="")
	{
			alert("Plz Enter Lname ..");		
			return false;
	}
	else
	{
		return true;
	}
	return false;
	
	
}
function ct()
{
	if(document.frm.city.value=="")
	{
		alert("Plz Enter City..");
			return false;
	}
	else
	{
		return true;
	}
	return false;
}

function st()
{
	if(document.frm.state.value=="")
	{
		alert("Plz Enter State..");
		return false;
	}

	else
	{
		return true;
	}
	return false;
}
function nou()
{
	if(document.frm.no.value=="")
	{
		alert("Plz Enter Contact No..");
		return false;
	}
	else
	{
		return true;
	}
	return false;
}
function noue()
{
	if(document.frm.dd.value=="")
	{
		alert("Plz Enter Add..");
		return false;
	}

	else
	{
		return true;
	}
	return false;
}
function un()
{
	if(document.frm.uname.value=="")
	{
		alert("Plz Enter Username..");
			return false;
	}
	else
	{
		return true;
	}
	return false;
}
function pas()
{
	if(document.frm.pass.value=="")
	{
		alert("Plz Enter Password..");
			return false;
	}
	else
	{
		return true;
	}
	return false;
}
function ciit()
{
	if(document.frm1.tname.value=="")
	{
		alert("Plz Enter Theater Name..");
		return false;
	}
	return true;
}
function tiit()
{
	if(document.frm1.city.value=="")
	{
		alert("Plz Enter City..");
		return false;
	}
	return true;
}

function stt()
{
	if(document.frm1.state.value=="")
	{
		alert("Plz Enter State..");
		return false;
	}
	return true;
}
function noues()
{
	if(document.frm1.dd.value=="")
	{
		alert("Plz Enter Add..");
		return false;
	}
	return true;
}
function cnn()
{
	if(document.frm1.c_no.value=="")
	{
		alert("Plz Enter Contact no...");
		return false;
	}
	return true;
}
function unn()
{
	if(document.frm1.uname.value=="")
	{
		alert("Plz Enter Username..");
	}
	return true;
}
function chall()
{
	if(document.frm1.tname.value=="")
	{
		alert("Plz fill-up tname");
		return false;
	}
	else if(document.frm1.city.value=="")
	{
		alert("Plz fill-up City");
		return false;
	}
	else if(document.frm1.state.value=="" )
	{
		alert("Plz fill-up State");
		return false;
	}
	else if(document.frm1.dd.value=="")
	{
		alert("Plz fill-up Address");
		return false;
	}
	else if(document.frm1.c_no.value=="")
	{
		alert("Plz fill-up Contact no");
		return false;
       	
	}
	else if(document.frm1.uname.value=="")
	{
		alert("Plz fill-up E-mail (Username)");
		return false;
	}
	else if( document.frm1.pass.value=="")
	{
		alert("Plz fill-up Password");
		return false;
    }
	return cv1();
}
function cv1()
{
	var phoneno = /^\d{10}$/;
        if(document.frm1.c_no.value.match(phoneno))
        {
            return ve1();
        }
        else
        {
            alert("Not a valid Phone Number");
            return false;
        }

	return true;
}
function ve1()
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(document.frm1.uname.value.match(mailformat))
	{
		
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!");
		
		return false;
	}
}