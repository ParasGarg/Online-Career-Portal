// JavaScript Document

function Career()
{
	//Fetching all the fields value by the user.
	var user_name = document.form_careerus.career_name;
	var user_email = document.form_careerus.career_email;
	var user_mobile = document.form_careerus.career_mob;
	var user_exp = document.form_careerus.career_exp;
	var user_func_area = document.form_careerus.career_func_area;
	var user_upload = document.form_careerus.career_resume;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var numbers = /^[0-9]+$/;
	
	//Validating the conditions and properties
	if(user_name.value.length != 0 && user_email.value.length != 0 && user_mobile.value.length != 0 && user_exp.value != -1 && 
	   	user_func_area.value != -1)
	{
		if(user_email.value.match(mailformat))
		{
			if(user_mobile.value.match(numbers))
			{
				if(user_mobile.value.length == 10)
				{
					if(user_upload.value.length != 0)
					{
						return true;
					}
					
					else
					{
						alert("Choose your resume file");
						document.form_careerus.career_resume.focus();
						return false;
					}
					
				}
				
				else
				{
					alert("Mobile number must be of exact 10 digits");
					document.form_careerus.career_mob.focus();
					return false;
				}
			}
			
			else
			{
				alert("Mobile number must be in digits");
				document.form_careerus.career_mob.focus();
				return false;
			}
		}
		
		else
		{
			alert("You have entered invalid email address");
			document.form_careerus.career_email.focus();
			return false;
		}
	}
	
	else
	{
		alert("All * field are required.");
		return false;
	}
}