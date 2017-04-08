<?php	
	ob_start();
	
		if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_sub']) 
										&& isset($_POST['contact_query']) && isset($_POST['contact_mob']))
		{
			//Get details by user inputs from contact.us.php
			$Name = $_POST['contact_name'];
			$Email_From = strtolower($_POST['contact_email']);
			$User_Subject = strtoupper($_POST['contact_sub']);
			$Query = $_POST['contact_query'];
			$Mobile = $_POST['contact_mob'];
			
			if(!empty($Name) && !empty($Email_From) && !empty($User_Subject) && !empty($Query) && !empty($Mobile))
			{			
				$get = $_GET['flag'];
				echo $get;
				
				//Designing format for Mail.
				$To = 'garg.paras.14@gmail.com';
				$Subject = 'Enquiry Mail from CareerJump.com';
				$Body = '<h6>Subject : '.$User_Subject.'<br /><br />Query : '.$Query.'<br /><br />Name : '.$Name.
						'<br /><br />Email-Id : '.$Email_From.'<br /><br />Contact Number : '.$Mobile.'</h6>';
				$Headers = "From: ".$Email_From;
				
				if(mail($To, $Subject, $Body, $Headers))
				{
					echo '<script> alert("Thankyou for Contacting Us. We\'ll reply you soon."); </script>';
				}
				
				else
				{
					echo '<script> alert("Sorry, Connection problem, mail has been discarded !!."); </script>';
				}
				
				header('Location: contact.us.php');
			}		
		}
?>
