<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/master.css" type="text/css" />
</head>

<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'title_bar.loggedin.php'; include 'navigation.navi.bar.php'; }
	else {	include 'title_bar.php'; include 'navigation_bar.php'; }
?>

<body>
	<!-- Start of Body Struct Div -->
	<div id="body_struct">
	
		<!-- Start of Search Div -->
		<div id="search">
		
			<!-- Start of Body Heading Div -->
			<div class="heading">
				<div style="float: left; width: 95%">Search Jobs</div>
				<div style="float: left; width: 2%"><a href="seeker.joinus.php" style="text-decoration:none; color:#FF0000">&laquo;</a></div>
				<div style="float: left; width: 1%"><a href="search.job.fairs.php" style="text-decoration:none; color:#FF0000">&raquo;</a></div>
			</div clas="heading">
			<!-- End of Body Heading Div -->
		
			<!-- Start of Search Body Div -->
			<div id="search_body">
			<br /><br /><br />
			
				<!-- Start of Search Jobs Form -->
				<form action="search.jobs.search.php" method="post">
				<font color="#000000">
				
					<!-- Start of Left Search Body Div -->
					<div id="left">
								
						<!-- Start of Keywords Div -->
						<div>
							<div align="right" id="bck_clr" class="div_left">Keywords</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<input id="textbox" type="text" name="search_keyword" placeholder="Keywords" style="width:70%"/>
							</div>
						</div><br /><br />
						<!-- End of Keywords Div -->
						
						<!-- Start of Salary Expected Div -->
						<div>
							<div align="right" id="bck_clr" class="div_left">Salary Expected</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<select name="search_salary_ddl" size="+5" id="ddl">
									<optgroup label="Salary Expected"></optgroup>
									<option value="1">100000 pa</option>
									<option value="2">200000 pa</option>
									<option value="3">300000 pa</option>
									<option value="4">400000 pa</option>
									<option value="5">500000 pa</option>
									<option value="6">600000 pa</option>
									<option value="7">700000 pa</option>
									<option value="8">800000 pa</option>
									<option value="9">900000 pa</option>
									<option value="10">1000000 pa</option>
									<option value="11">1100000 pa</option>
									<option value="12">1200000 pa</option>
									<option value="13">1300000 pa</option>
									<option value="14">1400000 pa</option>
									<option value="15">1500000 pa</option>
									<option value="16">1600000 pa</option>
									<option value="17">1700000 pa</option>
									<option value="18">1800000 pa</option>
									<option value="19">1900000 pa</option>
									<option value="20">2000000 pa</option>
									<option value="21">2100000 pa</option>
									<option value="22">2200000 pa</option>
									<option value="23">2300000 pa</option>
									<option value="24">2400000 pa</option>
									<option value="25">2500000 pa</option>
									<option value="26">2600000 pa</option>
									<option value="27">2700000 pa</option>
									<option value="28">2800000 pa</option>
									<option value="29">2900000 pa</option>
									<option value="30+">3000000+ pa</option>
								</select>
							</div>
						</div><br /><br /><br  /><br /><br />
						<!-- End of Salaey Expected Div -->
				
						<!-- Start of Job Category Div -->
						<div>
							<div align="right" id="bck_clr" class="div_left">Job Category</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" class="div_right">
								<select name="search_func_area_ddl" id="ddl">
										<option value="-1">Select</option>
									<optgroup label="Top Categories"></optgroup>
										<option value="0"><li>Accounts / Finance / Tax / CS / Audit</li></option>
										<option value="2"><li>Analytics &amp; Business Intelligence</li></option>
										<option value="4"><li>Banking / Insurance</li></option>
										<option value="7"><li>Engineering Design / R&amp;D</li></option>
										<option value="9"><li>Fashion / Garments / Merchandising</li></option>
										<option value="12"><li>HR / Administration / IR</li></option>
										<option value="29"><li>ITES / BPO / KPO / Customer Service / Operations</li></option>
										<option value"31"><li>Marketing / Advertising / MR / PR</li></option>
										<option value="34"><li>Production / Maintenance / Quality</li></option>
										<option value"40"><li>Site Engineering / Project Management</li></option>
										<option value"36"><li>Sales / BD</li></option>
										<option value"39"><li>Shipping</li></option>
									<optgroup label="IT Software Categories"></optgroup>
										<option value="13"><li>IT Software - Application Programming / Maintenance</li></option>	
										<option value="14"><li>IT Software - Client Server</li></option>
										<option value="15"><li>IT Software - Mainframe</li></option>
										<option value="16"><li>IT Software - Middleware</li></option>
										<option value="17"><li>IT Software - Mobile</li></option>
										<option value"18"><li>IT Software - Other</li></option>
										<option value"19"><li>IT Software - System Programming</li></option>
										<option value"20"><li>IT Software - Telecom Software</li></option>
										<option value"21"><li>IT Software - DBA / Datawarehousing</li></option>
										<option value"22"><li>IT Software - E-Commerce / Internet Technologies</li></option>
										<option value"23"><li>IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</li></option>
										<option value"24"><li>IT Software - ERP / CRM</li></option>
										<option value"25"><li>IT Software - Network Administration / Security</li></option>
										<option value"26"><li>IT Software - QA &amp; Testing</li></option>
										<option value"27"><li>IT Software - Systems / EDP / MIS</li></option>
									<optgroup label="More Categories"></optgroup>
										<option value="1"><li>Agent</li></option>
										<option value="3"><li>Architecture / Interior Design</li></option>
										<option value="5"><li>Content / Journalism</li></option>
										<option value="6"><li>Corporate Planning / Consulting</li></option>
										<option value="8"><li>Export / Import / Merchandising</li></option>
										<option value="10"><li>Guards / Security Services</li></option>
										<option value"28"><li>IT- Hardware / Telecom / Technical Staff / Support</li></option>
										<option value="11"><li>Hotels / Restaurants</li></option>
										<option value"30"><li>Legal</li></option>
										<option value"32"><li>Packaging</li></option>
										<option value"33"><li>Pharma / Biotech / Healthcare / Medical / R&amp;D</li></option>
										<option value"35"><li>Purchase / Logistics / Supply Chain</li></option>
										<option value"37"><li>Secretary / Front Office / Data Entry</li></option>
										<option value"38"><li>Self Employed / Consultants</li></option>
										<option value"41"><li>Teaching / Education</li></option>
										<option value"42"><li>Ticketing / Travel / Airlines</li></option>
										<option value"43"><li>Top Management</li></option>
										<option value"44"><li>TV / Films / Production</li></option>
										<option value"45"><li>Web / Graphic Design / Visualiser</li></option>
										<option value"46"><li>Other</li></option>
								</select>
							</div>
						</div><br /><br />
						<!-- End of Job Category Div -->
						
					</div id="left">
					<!-- End of Left Search Body Div -->
					
					<!-- Start of Right Search Body Div -->
					<div id="right">
								
						<!-- Start of Locations Div -->
						<div>
							<div align="right" class="div_left" style="width: 55%">
								<input id="textbox" type="text" placeholder="Locations" name="search_location"
									style="width:70%" />
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" id="bck_clr" class="div_right" style="width: 35%">Locations</div>		
						</div><br /><br />
						<!-- End of Locations Div -->
						
						<!-- Start of Experience Div -->
						<div>
							<div align="right" class="div_left" style="width: 55%">
								<select name="search_exp" id="ddl" size="+5">
									<optgroup label="Experience"></optgroup>
									<option value="0">Fresher</option>
									<option value="1">1 Year</option>
									<option value="2">2 Years</option>
									<option value="3">3 Years</option>
									<option value="4">4 Years</option>
									<option value="5">5 Years</option>
									<option value="6">6 Years</option>
									<option value="7">7 Years</option>
									<option value="8">8 Years</option>
									<option value="9">9 Years</option>
									<option value="10">10 Years</option>
									<option value="11">11 Years</option>
									<option value="12">12 Years</option>
									<option value="13">13 Years</option>
									<option value="14">14 Years</option>
									<option value="15">15 Years</option>
									<option value="16">16 Years</option>
									<option value="17">17 Years</option>
									<option value="18">18 Years</option>
									<option value="19">19 Years</option>
									<option value="20">20 Years</option>
									<option value="21">21 Years</option>
									<option value="22">22 Years</option>
									<option value="23">23 Years</option>
									<option value="24">24 Years</option>
									<option value="25">25 Years</option>
									<option value="26">26 Years</option>
									<option value="27">27 Years</option>
									<option value="28">28 Years</option>
									<option value="29">29 Years</option>
									<option value="30">30+ Years</option>
								</select>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" id="bck_clr" class="div_right" style="width: 35%">Experience</div>								
						</div><br /><br /><br  /><br /><br />
						<!-- End of Experience Div -->
						
						<!-- Start of Industry Div -->
						<div>
							<div align="right" class="div_left" style="width: 55%">
							<select name="search_industry_type_ddl" id="ddl" >
									<option value="-1">Select</option>
									<option value="0">Accounting / Finance</option>
									<option value="1">Advertising / PR / MR / Event Management</option>
									<option value="2">Agriculture / Dairy</option>
									<option value="3">Animation / Gaming</option>
									<option value="4">Architecture / Interior Design</option>
									<option value="5">Automobile / Auto Anciliary / Auto Components</option>
									<option value="6">Aviation / Aerospace Firms</option>
									<option value="7">Banking / Financial Services / Broking</option>
									<option value="8">BPO / Call Centre / ITES</option>
									<option value="9">Brewery / Distillery</option>
									<option value="10">Ceramics / Sanitary ware</option>
									<option value="11">Chemicals / PetroChemical / Plastic / Rubber</option>
									<option value="12">Construction / Engineering / Cement / Metals</option>
									<option value="13">Consumer Electronics / Appliances / Durables</option>
									<option value="14">Courier / Transportation / Freight / Warehousing</option>
									<option value="15">Education / Teaching / Training</option>
									<option value="16">Electricals / Switchgears</option>
									<option value="17">Export / Import</option>
									<option value="18">Facility Management</option>
									<option value="19">Fertilizers / Pesticides</option>
									<option value="20">FMCG / Foods / Beverage</option>
									<option value="21">Food Processing</option>
									<option value="22">Fresher / Trainee / Entry Level</option>
									<option value="23">Gems / Jewellery</option>
									<option value="24">Glass / Glassware</option>
									<option value="25">Government / Defence</option>
									<option value="26">Heat Ventilation / Air Conditioning</option>
									<option value="27">Industrial Products / Heavy Machinery</option>
									<option value="28">Insurance</option>
									<option value="29">Iron and Steel</option>
									<option value="30">IT-Hardware &amp; Networking</option>
									<option value="31">IT-Software / Software Services</option>
									<option value="32">KPO / Research / Analytics</option>
									<option value="33">Legal</option>
									<option value="34">Media / Entertainment / Internet</option>
									<option value="35">Internet / Ecommerce</option>
									<option value="36">Medical / Healthcare / Hospitals</option>
									<option value="37">Mining / Quarrying</option>
									<option value="38">NGO / Social Services / Regulators / Industry Associations</option>
									<option value="39">Office Equipment / Automation</option>
									<option value="40">Oil and Gas / Energy / Power / Infrastructure</option>
									<option value="41">Pulp and Paper</option>
									<option value="42">Pharma / Biotech / Clinical Research</option>
									<option value="43">Printing / Packaging</option>
									<option value="44">Publishing</option>
									<option value="45">Real Estate / Property</option>
									<option value="46">Recruitment / Staffing</option>
									<option value="47">Retail / Wholesale</option>
									<option value="48">Security / Law Enforcement</option>
									<option value="49">Semiconductors / Electronics</option>
									<option value="50">Shipping / Marine</option>
									<option value="51">Strategy / Management Consulting Firms</option>
									<option value="52">Telcom / ISP</option>
									<option value="53">Textiles / Garments / Accessories</option>
									<option value="54">Travel / Hotels / Restaurants / Airlines / Railways</option>
									<option value="55">Tyres</option>
									<option value="56">Water Treatment / Waste Management</option>
									<option value="57">Wellness / Fitness / Sports</option>
									<option value="58">Other</option>								
									<default value="-1">
								</select>
							</div>
							<div align="center" class="div_center"><b>:</b></div>
							<div align="left" id="bck_clr" class="div_right" style="width: 35%">Industry Type</div>
						</div><br /><br /><br  />
						<!-- End of Industry Div -->
					
					</div id="right">
					<!-- End of Right Search Body Div -->
					
					<!-- Start of Search Job Button Div -->
					<div>
						<input id="button" type="submit" name="search_btn" value="Search Job" style="color:#222f50" />
					</div>
					<!-- End of Search Job Button Div -->
			
			</font>
			</form>
			<!-- End of Search Jobs Form -->	
			
			</div id="search_body">
			<!-- End of Search Body Div -->
		
		<!-- End of Search Div -->
		</div id="search">
		
	</div id="body_struct">
	<!-- End of Body Struct Div -->
</body>
<?php
include 'footer_bar.php';
?>
</html>
