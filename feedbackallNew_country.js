
// *** COMMON CROSS-BROWSER COMPATIBILITY CODE ***


function onSubmit(){
	
	if (document.Enquiry.CompanyName.value  == "")
	{
		alert("Please enter your CompanyName.");
		document.Enquiry.CompanyName.focus();
		return false;
	}
	if (document.Enquiry.contact_person.value  == "")
	{
		alert("Please enter Contact Person Name.");
		document.Enquiry.contact_person.focus();
		return false;
	}

	if (document.Enquiry.telNo.value  == "")
	{
		alert("Please enter Telephone No .");
		document.Enquiry.telNo.focus();
		return false;
	}
		
	if (document.Enquiry.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry.from.focus();
		return false;
	}

	
	if (document.Enquiry.country.value=="") 
	{
		alert("Please select your country.");
		document.Enquiry.country.focus();
		return false;
	}
	if (document.Enquiry.Address.value  == "")
	{
		alert("Please enter your Address.");
		document.Enquiry.Address.focus();
		return false;
	}
	if (document.Enquiry.requirement_details.value  == "")
	{
		alert("Please enter Requirement Details .");
		document.Enquiry.requirement_details.focus();
		return false;
	}

	if (document.getElementById('file').value !="")
	{
	    return validateFileExtension(document.getElementById('file').value);
	}
	if (document.Enquiry.q.value=="") 
	{
		alert("Please enter captcha code.");
		document.Enquiry.q.focus();
		return false;
	}
		
}

function validateFileExtension(fld) {
    if (!/(\.bmp|\.png||\.gif|\.jpg|\.jpeg|\.txt|\.doc|\.docx|\.xls|\.xlsx|\.pdf)$/i.test(fld.value)) {
        alert("Invalid file type.");
        fld.form.reset();
        fld.focus();
        return false;
    }
    return true;
}

function numval(key) {
    var keycode = (key.which) ? key.which : key.keyCode;
    if (keycode > 31 && (keycode < 43 || keycode > 57)) {
        return false;
    }
    else return true;
}