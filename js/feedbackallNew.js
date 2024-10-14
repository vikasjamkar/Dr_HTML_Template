
// *** COMMON CROSS-BROWSER COMPATIBILITY CODE ***


	function onSubmit(){
	if (document.Enquiry.CompanyName.value  == "")
	{
		alert("Please enter your CompanyName.");
		document.Enquiry.CompanyName.focus()
		return false;
	}
	if (document.Enquiry.contact_person.value  == "")
	{
		alert("Please enter Contact Person Name .");
		document.Enquiry.contact_person.focus()
		return false;
	}
	
//	if (document.Enquiry.City.value  == "")
//	{
//		alert("Please enter City .");
//		document.Enquiry.City.focus()
//		return false;
//	}
	if (document.Enquiry.telNo.value  == "")
	{
		alert("Please enter Telephone No .");
		document.Enquiry.telNo.focus()
		return false;
	}
	if (document.Enquiry.telNo.value!="")
	{
		var tel= parseInt(document.Enquiry.telNo.value); 
			if (isNaN(tel)) 
				{  
				alert("Enter Telephone Number Correctly");
				document.Enquiry.telNo.focus();
				return false
				} 
	}
//	if (document.Enquiry.faxNo.value!="")
//	{
//		var fax= parseInt(document.Enquiry.faxNo.value);
//		if (fax != "")
//		{
//			if (isNaN(fax))
//			{
//				alert("Enter Fax Number Correctly");
//				document.Enquiry.fax.focus();
//				return false
//			}
//		}
//	}
		
	if (document.Enquiry.from.value  == "")
	{
		alert("Please enter Email Address.");
		document.Enquiry.from.focus()
		return false;
	}
	var tempEmail= document.Enquiry.from.value;
	var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
	var check=/@[\w\-]+\./;
	var checkend=/\.[a-zA-Z]{2,3}$/;
	if (document.Enquiry.from.value!="")
	{
	if (tempEmail.search(exclude)!=-1||tempEmail.search(check)==-1||tempEmail.search(checkend)==-1)
	{
		alert("Can you check your Email Address again?");
		document.Enquiry.from.focus();
		return false
	}
	}
	if (document.Enquiry.Address.value  == "")
	{
		alert("Please enter your Address.");
		document.Enquiry.Address.focus()
		return false;
	}	
	if (document.Enquiry.requirement_details.value  == "")
	{
		alert("Please enter Requirement Details .");
		document.Enquiry.requirement_details.focus()
		return false;
	}		
//	if (document.Enquiry.country.selectedindex== -1) 
//	{
//		alert("Please select your country.");
//		document.Enquiry.country.focus()
//		return false;
//	}
//	if (document.Enquiry.state.selectedindex==-1){
//		alert("Please enter your State.");
//		document.Enquiry.state.focus()
//		return false;
//	}



	return CheckData();

	if (document.getElementById('file').value !="")
	{
	    return validateFileExtension(document.getElementById('file').value);
	}
	
	
}
	
	var states = new Array();
	states[0]="Select State from the List Below";
	states[1]="Andaman and Nicobar Icelands";
	states[2]="Andhra Pradesh";
	states[3]="Arunachal Pradesh";
	states[4]="Assam";
	states[5]="Bihar";
	states[6]="Chandigarh";
	states[7]="Chhattisgarh";
	states[8]="Dadar & Nagar Haveli";
	states[9]="Daman & Diu";
	states[10]="Delhi";
	states[11]="Goa";
	states[12]="Gujarat";
	states[13]="Haryana";
	states[14]="Himachal Pradesh";
	states[15]="Jammu & Kashmir";
	states[16]="Jharkhand";
	states[17]="Karnataka";
	states[18]="Kerala";
	states[19]="Lakshadweep Islands";
	states[20]="Madhya Pradesh";
	states[21]="Maharashtra";
	states[22]="Manipur";
	states[23]="Meghalaya";
	states[24]="Mizoram";
	states[25]="Nagaland";
	states[26]="Orissa";
	states[27]="Pondicherry";
	states[28]="Punjab";
	states[29]="Rajasthan";
	states[30]="Sikkim";
	states[31]="Tamil Nadu";
	states[32]="Tripura";
	states[33]="Uttar Pradesh";
	states[34]="Uttaranchal";
	states[35]="West Bengal";
	states[36]="Other than Indian State";
	
//   	function changestate(){
//   		var box2= document.Enquiry.state.options;
//   		if (Enquiry.country.options(Enquiry.country.selectedIndex).value == "India")
//        {
//			if (box2[2].text=="")
//			{
//				for (i=0;i< states.length;i++)
//				{
//					box2[i].text=states[i];
//					box2[i].value=states[i];		
//				}
//			}
//			else
//			{	
//				box2[0].selected = true;
//			}
//		box2[0].selected = true;				
//		}
//		else
//		{
//			for (i=0; i < Enquiry.state.options.length ; i++)
//        	{
//        		if (Enquiry.state.options(i).text == "Other than Indian State"){
        			//do nothing
//        		}
//        		else
//        		{
//        			box2[i].text="";
//        			box2[i].value=""; 
//        			//i=-1;
//        		}
//			}
//			box2[36].selected=true;
//		}
//	}

// Validating
function CheckData()
{
with(document.Enquiry)
{
if(q.value != randomnumber)
{
alert("Please Enter Correct Verification Numbers");
q.focus();
return false;
}
}
return true;
}

function validateFileExtension(fld) {
    if (!/(\.bmp|\.gif|\.jpg|\.jpeg|\.txt|\.doc|\.xls|\.pdf|\.zip|\.rar)$/i.test(fld.value)) {
        alert("Invalid file type.");
        fld.form.reset();
        fld.focus();
        return false;
    }
    return true;
}