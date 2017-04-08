// JavaScript Document


function EmpValidate()
{ 
	//Fetching all the fields value by the user.
	var username = document.form_empjoinus.emp_user_name;
	var email = document.form_empjoinus.emp_email;
	var password = document.form_empjoinus.emp_pass;
	var repass = document.form_empjoinus.emp_repass;
	var company_name = document.form_empjoinus.emp_cmpname;
	var company_type = document.querySelector('[name="emp_cmptype"]:checked');
	var industry_type = document.form_empjoinus.emp_industry_type;
	var gender = document.querySelector('[name="emp_gender"]:checked');
	var address = document.form_empjoinus.emp_add;
	var city = document.form_empjoinus.emp_city;
	var state = document.form_empjoinus.emp_state;
	var country = document.form_empjoinus.emp_country;
	var pincode = document.form_empjoinus.emp_pincode;
	var mob = document.form_empjoinus.emp_phno;
	var name = document.form_empjoinus.emp_name;
	var agree = document.querySelector('[name="emp_agree"]:checked');
	var btn_register = document.form_empjoinus.emp_btn_register;
	
	//Variables for Captcha Checking
	var captcha = document.form_empjoinus.emp_captcha;
	var hddn_captcha = document.form_empjoinus.emp_hidden_captcha;
	
	//Variables for hidden files ie for username and email address
	var hddn_username = document.form_empjoinus.emp_hddn_username;
	
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var numbers = /^[0-9]+$/;
	var alphanumeric = /^[a-zA-Z][0-9]$/;
	var alphabets = /^[a-zA-Z]+$/;
		
	//Inputing Username and email address to check the availability in database
//	var user_name = prompt("Enter your suggested username");
//	db_connect(user_name);
	
	//Validation of elements in the textbox by JavaScript
			if(username.value.length != 0 && email.value.length != 0 && password.value.length != 0 && repass.value.length != 0	&& 
				company_name.value.length != 0 && company_type.checked != false && industry_type.value != -1 && gender.checked != false &&
				address.value.length != 0 && city.value.length != 0 && state.value.length != 0 && country.value.length != 0 && 
				pincode.value.length != 0 && mob.value.length != 0 && name.value.length != 0 && captcha.value.length != 0 )
			{	
				if(email.value.match(mailformat))
				{
					if(password.value.length >= 8 && password.value.length <= 24)
					{
						if(password.value.length == repass.value.length)
						{
							//Defining flag variable
							var flag = 1;
			
							for(i=0; i<password.value.length; i++)
							{
								if(password.value[i] != repass.value[i])
								{
									flag = 0;
									break;
								}
							}
					
							if(flag == 1)
							{
								if(pincode.value.match(numbers))
								{
									if(pincode.value.length == 6)
									{
										if(mob.value.match(numbers))
										{
											if(mob.value.length == 10)
											{
												if(captcha.value == hddn_captcha.value)
												{
													if(agree.checked == true)
													{
														document.getElementsByName("emp_btn_register")[0].style.display = "inline-block";
														flag = 1;
													}
													
													else
													{
														alert("Please accept our agreement");
														document.form_empjoinus.emp_agree.focus();
														return false;
													}
												}
												
												else
												{
													alert("Capcha is incorrect");
													document.form_empjoinus.emp_captcha.focus();
													return false;
												}
											}
											
											else
											{
												alert("Contact number must be of 10 digits");
												document.form_empjoinus.emp_phno.focus();
												return false;
											}
										}
										
										else
										{
											alert("Contact number must be in digits");
											document.form_empjoinus.emp_mob.focus();
											return false;
										}
									}
									
									else
									{
										alert("Pin-Code must be of 6 digits");
										document.form_empjoinus.emp_pincode.focus();
										return false;
									}
								}
								
								else
								{
									alert("Pin-Code must be in digits");
									document.form_empjoinus.emp_pincode.focus();
									return false;
								}
							}
							
							else
							{
								alert("Passwords do not match");
								document.form_empjoinus.emp_repass.focus();
								return false;
							}
						}
						
						else
						{
							alert("Password length does not matched");
							document.form_empjoinus.emp_repass.focus();
							return false;
						}				
					}
					
					else
					{
						alert("Password must be in between 8 & 24");
						document.form_empjoinus.emp_password.focus();
						return false;
					}
				}
				
				else 
				{
					alert("You have entered an invalid email address");
					document.form_empjoinus.emp_email.focus();
					return false;
				}
			
			}
			
			else 
			{
				alert("All * fields are required");
			}
			
		
	if(flag == 1 && btn_register.checked == true )
	{										
		alert("Form Succesfully Submitted");
		return true;
	}
}

function LoadPage()
{
	var agree = document.form_empjoinus.emp_agree;
	var btn_register = document.getElementsByName("emp_btn_register");
	
	if(agree.checked == false)
	{
		document.getElementsByName("emp_btn_register")[0].style.display = "none";
	}
}
/*
//Function connecting to database.
function db_connect(user_name)
{
	alert(user_name);
	
	var conn = new ActiveXObject("ADODB.Connection");
	var connectionstring="Data Source=localhost;Initial Catalog=jobsportal;User ID=root;Password=;Provider=SQLOLEDB";
 
    conn.Open(connectionstring);
	var rs = new ActiveXObject("ADODB.Recordset");
	
    var sql_user="SELECT username FROM emp_details WHERE id = '1';";
  
    rs.Open(sql_user,conn);
	rs.MoveFirst
	while(!rs.eof)
	{
		document.write(rs.fields(1));
  		rs.movenext;
	}

	alert(user_name);
	
	rs.close();
	conn.close();
}

/*