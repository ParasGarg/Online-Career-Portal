// JavaScript Document

//Functions used while using Forgot Password button in Enmployer Login Page
function EmpForgetPassword()
{
	var emp_emailforgot = document.form_empforgotpass.emp_email_forgot;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(emp_emailforgot.value.length != 0)
	{
		if(emp_emailforgot.value.match(mailformat))
		{
			emp_send_mail();
			return true;
		}
		
		else
		{
			alert("You have entered an invalid email address");
			document.form_empforgotpass.emp_email_forgot.focus();
			return false;
		}
	}
	
	else 
	{
		alert("Enter your email id");
		document.form_empforgotpass.emp_email_forgot.focus();
		return false;
	}
}

function emp_send_mail()
{
	var email_id = document.getElementsByName('emp_email_forgot');
	var msg = 'Password is sent to ';
	alert(msg.concat(email_id[0].value));
}


//Functions used while using Login button in Enmployer Login Page
function EmpLogin()
{
	var emp_emailLogin = document.form_emplogin.emp_email_login;
	var emp_passLogin = document.form_emplogin.emp_pass_login;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(emp_emailLogin.value.length != 0)
	{
		if(emp_passLogin.value.length != 0)
		{
			if(emp_emailLogin.value.match(mailformat))
			{
				return true;			
			}
			
			else
			{
				alert("You have entered an invalid email address");
				document.form_emplogin.emp_email_login.focus();
				return false;
			}
		}
		
		else 
		{
			alert("Password field is compulsary");
			document.form_emplogin.emp_pass_login.focus();
			return false;
		}
	}
	
	else 
	{
		alert("Username field is compulsary");
		document.form_emplogin.emp_email_login.focus();
		return false;
	}
}

//==============SEEKER ZONE============//

//Functions used while using Forgot Password button in Enmployer Login Page
function SeekerForgetPassword()
{
	var seeker_emailforgot = document.form_seekerforgotpass.seeker_email_forgot;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(seeker_emailforgot.value.length != 0)
	{
		if(seeker_emailforgot.value.match(mailformat))
		{
			seeker_send_mail();
			return true;
		}
		
		else
		{
			alert("You have entered an invalid email address");
			document.form_seekerforgotpass.seeker_email_forgot.focus();
			return false;
		}
	}
	
	else 
	{
		alert("Enter your email id");
		document.form_seekerforgotpass.seeker_email_forgot.focus();
		return false;
	}
}

function seeker_send_mail()
{
	var email_id = document.getElementsByName('seeker_email_forgot');
	var msg = 'Password is sent to ';
	alert(msg.concat(email_id[0].value));
}


//Functions used while using Login button in Enmployer Login Page
function SeekerLogin()
{
	var seeker_emailLogin = document.form_seekerlogin.seeker_email_login;
	var seeker_passLogin = document.form_seekerlogin.seeker_pass_login;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(seeker_emailLogin.value.length != 0)
	{
		if(seeker_passLogin.value.length != 0)
		{ 
			if(seeker_emailLogin.value.match(mailformat))
			{
				return true;			
			}
			
			else
			{
				alert("You have entered an invalid email address");
				document.form_seekerlogin.seeker_email_login.focus();
				return false;
			}
		}
		
		else 
		{
			alert("Password field is compulsary");
			document.form_seekerlogin.seeker_pass_login.focus();
			return false;
		}
	}
	
	else 
	{
		alert("Username field is compulsary");
		document.form_seekerlogin.seeker_email_login.focus();
		return false;
	}
}
