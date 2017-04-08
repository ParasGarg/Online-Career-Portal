// JavaScript Document

function QuickSearchValidate()
{
	var name = document.form_quicksearch.quick_key;
	var location = document.form_quicksearch.quick_location;
	
	if(name.value.length != 0 && location.value.length != 0)
	{
		return true;
	}
	else
	{
		alert("Require both, Key Skill and Location field.");
		document.form_quicksearch.quick_key.focus();
		return false;
	}
}