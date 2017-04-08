// JavaScript Document

function ContactUsValidate()
{
	//Fetching values in the form by the NAME
	var name = document.form_contactus.contact_name;
	var email_from = document.form_contactus.contact_email;
	var user_subject = document.form_contactus.contact_sub;
	var query = document.form_contactus.contact_query;
	var mobile = document.form_contactus.contact_mob;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var numbers = /^[0-9]+$/;
		
	if(name.value.length != 0 && email_from.value.length != 0 && user_subject.value.length != 0 && query.value.length != 0
	   	&& mobile.value.length != 0)
	{
		if(email_from.value.match(mailformat))
		{
			if(mobile.value.length == 10)
			{
				if(mobile.value.match(numbers))
				{
					return true;
				}
				
				else 
				{
					alert("You have entered an invalid contact number");
					document.form_contactus.contact_mob.focus();
					return false;
				}
			}
			
			else 
			{
				alert("Contact number must be of 10 digits");
				document.form_contactus.contact_mob.focus();
				return false;
			}
		}
		else 
		{
			alert("You have entered an invalid email address");
			document.form_contactus.contact_email.focus();
			return false;
		}
	}
	else
	{
		alert("All * Fields are required");
		return false;
	}
}