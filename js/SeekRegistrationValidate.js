// JavaScript Document

function SeekerValidate()
{
	//Fetching all the fields value by the user.
	//LOGIN DETAILS
	var email = document.form_registerseeker.user_email;
	var re_email = document.form_registerseeker.user_reemail;
	var password = document.form_registerseeker.user_pass;
	var re_pass = document.form_registerseeker.user_repass;
	
	//CONTACT DETAILS
	var fname = document.form_registerseeker.user_fname;
	var lname = document.form_registerseeker.user_lname;
	var gender = document.querySelector('[name="seeker_gender"]:checked');
	var marriage = document.querySelector('[name="seeker_marriage"]:checked');
	var mobile = document.form_registerseeker.user_mob;
	var phone = document.form_registerseeker.user_home;
	var address = document.form_registerseeker.user_add;
	var country = document.form_registerseeker.user_country;
	var state = document.form_registerseeker.user_state;
	var city = document.form_registerseeker.user_city;
	var pincode = document.form_registerseeker.user_pincode;
	
	//CURRENT EMPLOYMENT DETAILS
	var key = document.form_registerseeker.user_key_skill;
	var user_exp = document.getElementsByName("seeker_exp_ddl")[0];
	var user_industry_type = document.getElementsByName("seeker_industry_type_ddl")[0];
	var user_func_area = document.getElementsByName("seeker_func_area_ddl")[0];
	
	//EDUCATION DETAILS
	var highest_course = document.form_registerseeker.seeker_highest_course;
	
	//UPLOAD RESUME
	var upload_cv = document.form_registerseeker.seeker_resume;
	
	//CAPTCHA
	var user_captcha = document.form_registerseeker.seeker_captcha;
	var user_hddn_captcha = document.form_registerseeker.seeker_hddn_capta;
	
	//AGREEMENT
	var agree = document.form_registerseeker.seeker_agree;
	var notification = document.form_registerseeker.seeker_notifications;
	var call_sms = document.form_registerseeker.seeker_call_sms;
	
	//REGISTRATION
	var user_register_btn = document.form_registerseeker.seeker_register;
			
	//Defining some standard formats
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var numbers = /^[0-9]+$/;
	var alphanumeric = /^[a-zA-Z][0-9]$/;
	var alphabets = /^[a-zA-Z]+$/;
	
//	alert(update_cv.value.length);
	
	//VALIDATION TO FORM APPLIED
	if(email.value.length != 0 && re_email.value.length != 0 && password.value.length != 0 && re_pass.value.length != 0 &&
	   	fname.value.length != 0 && lname.value.length != 0 && gender.checked == true && mobile.value.length != 0 &&
		city.value.length != 0 && pincode.value.length != 0 && key.value.length != 0 && user_exp.value != -1 && 
		highest_course.value != -1)
	{
		if(email.value.match(mailformat))
		{
			if(re_email.value.match(mailformat))
			{
				if(email.value.length == re_email.value.length)
				{
					var flag = 1;
			
					for(i=0; i<email.value.length; i++)
					{
						if(email.value[i] != re_email.value[i])
						{
							flag = 0;
							break;
						}
					}
					
					if(flag == 1)
					{
						if(password.value.length >=8 && password.value.length <=24)
						{
							if(password.value.length == re_pass.value.length)
							{
								for(i=0; i<email.value.length; i++)
								{
									if(password.value[i] != re_pass.value[i])
									{
										flag = 0;
										break;
									}
								}
								
								if(flag == 1)
								{
									if(fname.value.match(alphabets))
									{
										if(lname.value.match(alphabets))
										{
											if(mobile.value.match(numbers))
											{
												if(mobile.value.length == 10)
												{
													if(pincode.value.match(numbers))
													{
														if(pincode.value.length == 6)
														{
															if(user_captcha.value == user_hddn_captcha.value)
															{
																if(agree.checked == true)
																{
																	if(upload_cv.value.length != 0)
																	{
																		return true;
																	}
																
																	else
																	{
																		alert("Choose your resume file");
																		document.form_registerseeker.seeker_resume.focus();
																		return false;
																	}
																}
																
																else
																{
																	alert("Please accept our agreement");
																	document.form_registerseeker.seeker_agree.focus();
																	return false;
																}
															}
															
															else
															{
																alert("Captcha does not match");
																document.form_registerseeker.seeker_captcha.focus();
																return false;
															}
														}
														
														else
														{
															alert("Pin-Code must be of 6 digits only");
															document.form_registerseeker.user_pincode.focus();
															return false;
														}
													}
													
													else
													{
														alert("Pin-Code must be in digits only");
														document.form_registerseeker.user_pincode.focus();
														return false;
													}
												}
											
												else
												{
													alert("Contact number must be of 10 digits only");
													document.form_registerseeker.user_mob.focus();
													return false;
												}
											}
											
											else
											{
												alert("Contact number must be in digits only");
												document.form_registerseeker.user_mob.focus();
												return false;
											}
										}
										
										else
										{
											alert("Surname must be in alphabets");
											document.form_registerseeker.user_lname.focus();
											return false;
										}
									}
									
									else
									{
										alert("First name must be in alphabets");
										document.form_registerseeker.user_fname.focus();
										return false;
									}
								}
								
								else
								{
									alert("Password do not match");
									document.form_registerseeker.user_repass.focus();
									return false;
								}
							}
							
							else
							{
								alert("Password lenth is unproper");
								document.form_registerseeker.user_pass.focus();
								return false;
							}
						}
						
						else
						{
							alert("Password must be in between 8 & 24");
							document.form_registerseeker.user_pass.focus();
							return false;
						}
					}
					
					else
					{
						alert("Email address do not match");
						document.form_registerseeker.user_reemail.focus();
						return false;
					}
					
				}
				
				else
				{
					alert("Length of email address are different");
					document.form_registerseeker.user_reemail.focus();
					return false;
	
				}
			}
			
			else
			{
				alert("You have entered an invalid Confirm Email address");
				document.form_registerseeker.user_reemail.focus();
				return false;
			}			
		}
		
		else
		{
			alert("You have entered an invalid Email address");
			document.form_registerseeker.user_email.focus();
			return false;
		}
	}
	
	else
	{
		alert("All * fields are mandatory");
		return false;
	}
}

function SeekerPageLoad()
{	
	var seeker_agree = document.form_registerseeker.seeker_agree;
	var seeker_register_btn = document.getElementsByName("seeker_register");
	
	//Hiding Register button
	if(seeker_agree.checked == false)
	{
		document.getElementsByName("seeker_register")[0].style.display = "none";
	}
	
	else if(seeker_agree.checked != false)
	{
		document.getElementsByName("seeker_register")[0].style.display = "inline-block";
	}
	
	//Disabling Experience related Fields
	var seeker_exp = document.form_registerseeker.seeker_exp_ddl;
	if(seeker_exp.value <= 0)
	{
		document.getElementsByName("seeker_industry_type_ddl")[0].disabled = true;
		document.getElementsByName("seeker_func_area_ddl")[0].disabled = true;
	}
	
	//Disabling EDUCATION DETAILS related fields
	var seeker_highest_course = document.form_registerseeker.seeker_highest_course;
	if(seeker_highest_course.value == -1)
	{
		document.getElementsByName("seeker_edu_describe")[0].disabled = true;
		
		document.getElementsByName("seeker_hsc")[0].disabled = true;
		document.getElementsByName("seeker_hsc_special")[0].disabled = true;
		document.getElementsByName("seeker_hsc_percentage")[0].disabled = true;
		document.getElementsByName("seeker_hsc_rollno")[0].disabled = true;
		document.getElementsByName("seeker_hsc_college")[0].disabled = true;
		document.getElementsByName("seeker_hsc_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_ssc")[0].disabled = true;
		document.getElementsByName("seeker_ssc_special")[0].disabled = true;
		document.getElementsByName("seeker_ssc_percentage")[0].disabled = true;
		document.getElementsByName("seeker_ssc_rollno")[0].disabled = true;
		document.getElementsByName("seeker_ssc_college")[0].disabled = true;
		document.getElementsByName("seeker_ssc_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_bachelor")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_special")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_percentage")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_rollno")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_college")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_master")[0].disabled = true;
		document.getElementsByName("seeker_master_special")[0].disabled = true;
		document.getElementsByName("seeker_master_percentage")[0].disabled = true;
		document.getElementsByName("seeker_master_rollno")[0].disabled = true;
		document.getElementsByName("seeker_master_college")[0].disabled = true;
		document.getElementsByName("seeker_master_batch")[0].disabled = true;
	}	
}

function ChangeExperienceDDL()
{
	var seeker_exp = document.form_registerseeker.seeker_exp_ddl;
	
	if(seeker_exp.value <= 0)
	{
		document.getElementsByName("seeker_industry_type_ddl")[0].disabled = true;
		document.getElementsByName("seeker_func_area_ddl")[0].disabled = true;
	}
	
	else if(seeker_exp.value > 0)
	{
		document.getElementsByName("seeker_industry_type_ddl")[0].disabled = false;
		document.getElementsByName("seeker_func_area_ddl")[0].disabled = false;
	}
}

function ChangeHighestCourse()
{
	var seeker_highest_course = document.form_registerseeker.seeker_highest_course;
	
	if(seeker_highest_course.value == -1)
	{
		document.getElementsByName("seeker_edu_describe")[0].disabled = true;
		
		document.getElementsByName("seeker_hsc")[0].disabled = true;
		document.getElementsByName("seeker_hsc_special")[0].disabled = true;
		document.getElementsByName("seeker_hsc_percentage")[0].disabled = true;
		document.getElementsByName("seeker_hsc_rollno")[0].disabled = true;
		document.getElementsByName("seeker_hsc_college")[0].disabled = true;
		document.getElementsByName("seeker_hsc_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_ssc")[0].disabled = true;
		document.getElementsByName("seeker_ssc_special")[0].disabled = true;
		document.getElementsByName("seeker_ssc_percentage")[0].disabled = true;
		document.getElementsByName("seeker_ssc_rollno")[0].disabled = true;
		document.getElementsByName("seeker_ssc_college")[0].disabled = true;
		document.getElementsByName("seeker_ssc_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_bachelor")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_special")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_percentage")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_rollno")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_college")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_master")[0].disabled = true;
		document.getElementsByName("seeker_master_special")[0].disabled = true;
		document.getElementsByName("seeker_master_percentage")[0].disabled = true;
		document.getElementsByName("seeker_master_rollno")[0].disabled = true;
		document.getElementsByName("seeker_master_college")[0].disabled = true;
		document.getElementsByName("seeker_master_batch")[0].disabled = true;
	}
	
	else if(seeker_highest_course.value == 0)
	{
		document.getElementsByName("seeker_edu_describe")[0].disabled = true;
		
		document.getElementsByName("seeker_hsc")[0].disabled = false;
		document.getElementsByName("seeker_hsc_special")[0].disabled = false;
		document.getElementsByName("seeker_hsc_percentage")[0].disabled = false;
		document.getElementsByName("seeker_hsc_rollno")[0].disabled = false;
		document.getElementsByName("seeker_hsc_college")[0].disabled = false;
		document.getElementsByName("seeker_hsc_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_ssc")[0].disabled = false;
		document.getElementsByName("seeker_ssc_special")[0].disabled = false;
		document.getElementsByName("seeker_ssc_percentage")[0].disabled = false;
		document.getElementsByName("seeker_ssc_rollno")[0].disabled = false;
		document.getElementsByName("seeker_ssc_college")[0].disabled = false;
		document.getElementsByName("seeker_ssc_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_bachelor")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_special")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_percentage")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_rollno")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_college")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_master")[0].disabled = true;
		document.getElementsByName("seeker_master_special")[0].disabled = true;
		document.getElementsByName("seeker_master_percentage")[0].disabled = true;
		document.getElementsByName("seeker_master_rollno")[0].disabled = true;
		document.getElementsByName("seeker_master_college")[0].disabled = true;
		document.getElementsByName("seeker_master_batch")[0].disabled = true;
	}
	
	else if(seeker_highest_course.value == 1)
	{
		document.getElementsByName("seeker_edu_describe")[0].disabled = true;
		
		document.getElementsByName("seeker_hsc")[0].disabled = false;
		document.getElementsByName("seeker_hsc_special")[0].disabled = false;
		document.getElementsByName("seeker_hsc_percentage")[0].disabled = false;
		document.getElementsByName("seeker_hsc_rollno")[0].disabled = false;
		document.getElementsByName("seeker_hsc_college")[0].disabled = false;
		document.getElementsByName("seeker_hsc_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_ssc")[0].disabled = false;
		document.getElementsByName("seeker_ssc_special")[0].disabled = false;
		document.getElementsByName("seeker_ssc_percentage")[0].disabled = false;
		document.getElementsByName("seeker_ssc_rollno")[0].disabled = false;
		document.getElementsByName("seeker_ssc_college")[0].disabled = false;
		document.getElementsByName("seeker_ssc_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_bachelor")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_special")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_percentage")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_rollno")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_college")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_master")[0].disabled = true;
		document.getElementsByName("seeker_master_special")[0].disabled = true;
		document.getElementsByName("seeker_master_percentage")[0].disabled = true;
		document.getElementsByName("seeker_master_rollno")[0].disabled = true;
		document.getElementsByName("seeker_master_college")[0].disabled = true;
		document.getElementsByName("seeker_master_batch")[0].disabled = true;
	}
	
	else if(seeker_highest_course.value == 2)
	{
		document.getElementsByName("seeker_edu_describe")[0].disabled = true;
		
		document.getElementsByName("seeker_hsc")[0].disabled = false;
		document.getElementsByName("seeker_hsc_special")[0].disabled = false;
		document.getElementsByName("seeker_hsc_percentage")[0].disabled = false;
		document.getElementsByName("seeker_hsc_rollno")[0].disabled = false;
		document.getElementsByName("seeker_hsc_college")[0].disabled = false;
		document.getElementsByName("seeker_hsc_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_ssc")[0].disabled = false;
		document.getElementsByName("seeker_ssc_special")[0].disabled = false;
		document.getElementsByName("seeker_ssc_percentage")[0].disabled = false;
		document.getElementsByName("seeker_ssc_rollno")[0].disabled = false;
		document.getElementsByName("seeker_ssc_college")[0].disabled = false;
		document.getElementsByName("seeker_ssc_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_bachelor")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_special")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_percentage")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_rollno")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_college")[0].disabled = false;
		document.getElementsByName("seeker_bachelor_batch")[0].disabled = false;
		
		document.getElementsByName("seeker_master")[0].disabled = false;
		document.getElementsByName("seeker_master_special")[0].disabled = false;
		document.getElementsByName("seeker_master_percentage")[0].disabled = false;
		document.getElementsByName("seeker_master_rollno")[0].disabled = false;
		document.getElementsByName("seeker_master_college")[0].disabled = false;
		document.getElementsByName("seeker_master_batch")[0].disabled = false;
	}
	
	else if(seeker_highest_course.value == 3)
	{
		document.getElementsByName("seeker_edu_describe")[0].disabled = false;
		
		document.getElementsByName("seeker_hsc")[0].disabled = true;
		document.getElementsByName("seeker_hsc_special")[0].disabled = true;
		document.getElementsByName("seeker_hsc_percentage")[0].disabled = true;
		document.getElementsByName("seeker_hsc_rollno")[0].disabled = true;
		document.getElementsByName("seeker_hsc_college")[0].disabled = true;
		document.getElementsByName("seeker_hsc_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_ssc")[0].disabled = true;
		document.getElementsByName("seeker_ssc_special")[0].disabled = true;
		document.getElementsByName("seeker_ssc_percentage")[0].disabled = true;
		document.getElementsByName("seeker_ssc_rollno")[0].disabled = true;
		document.getElementsByName("seeker_ssc_college")[0].disabled = true;
		document.getElementsByName("seeker_ssc_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_bachelor")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_special")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_percentage")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_rollno")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_college")[0].disabled = true;
		document.getElementsByName("seeker_bachelor_batch")[0].disabled = true;
		
		document.getElementsByName("seeker_master")[0].disabled = true;
		document.getElementsByName("seeker_master_special")[0].disabled = true;
		document.getElementsByName("seeker_master_percentage")[0].disabled = true;
		document.getElementsByName("seeker_master_rollno")[0].disabled = true;
		document.getElementsByName("seeker_master_college")[0].disabled = true;
		document.getElementsByName("seeker_master_batch")[0].disabled = true;
	}
}