<?php
session_start();
include("dbopenconn.php");
date_default_timezone_set("Asia/Kolkata");
// $currentTime = date( 'Y-m-d h:i:s', time () ); 
// $HTTP_POST_VARS1=$_POST;
$HTTP_POST_VARS=$_SESSION['new']=$_POST;

// print_r($HTTP_POST_VARS);
$_SESSION['from']=$_POST['from'];
$_SESSION['redirect']=$_POST['redirect'];
$_SESSION['recipient']=$_POST['recipient'];
$_SESSION['subject']=$_POST['subject'];
$_SESSION['CompanyName']=$_POST['CompanyName'];
$_SESSION['telNo']=$_POST['telNo'];
$_SESSION['contact_person']=$_POST['contact_person'];
$_SESSION['Address']=$_POST['Address'];
$_SESSION['requirement_details']=$_POST['requirement_details'];


if($_SESSION['from'] !='' && $_SESSION['subject']!='' && $_SESSION['CompanyName']!='' && $_SESSION['telNo']!='' && $_SESSION['contact_person']!=''){

$WebsiteUrl	= getenv('HTTP_REFERER');
$split_from = explode('@',$_SESSION['from']);

$query_details = "select * from update_testresult where `id`=1";  // Query To check URL.
$result_details =@mysql_query("$query_details",$connect);
$record_fetch = mysql_fetch_assoc($result_details);	

$emailbody =  $record_fetch['description'];

//content block end
$original_id = $_SESSION['from'];
//Yahoo id converted to mipl
if(($split_from[1]=='yahoo.com')||($split_from[1]=='ymail.com')||($split_from[1]=='yahoo.co.in')){
	$_SESSION[from] = 'sagar.deshpande@mipl.co.in';
}

if($WebsiteUrl=="")
{
 
$WebsiteUrl ="http://".$_POST[website];
}

if (!empty($WebsiteUrl))
{	
	$Website_new= split("/",$WebsiteUrl);	

	$Ip = @gethostbyname($Website_new[2]); 

	if($Ip=="")
	{
	$Ip =gethostbyname($WebsiteUrl);
	$Website_new[2]=$WebsiteUrl;
	}

	// echo "IP=".$Ip."<br/>";


	if (substr($Website_new[2],0,4)=="www.")
	{ 
	$ref_url_new = $Website_new[2];							
	}
	else
	{
	$ref_url_new = "www.".$Website_new[2];

	}

//echo "diff==".$ref_url_new ;
}

		
$str_file_name=$ref_url_new."_".$_FILES["file"]["name"];

if($_FILES["file"]["name"]!="")
{

	$path_parts = pathinfo($_FILES["file"]["name"]);
	$allowed_extension  = array('jpeg','png','jpg','pdf','bmp','doc','docx','odt','xls','xlsx','ppt','pptx');
	$file_valid = in_array(strtolower($path_parts['extension']), $allowed_extension);

	if($file_valid == '1'){

	   if (file_exists("uploads/" .$str_file_name))
	      {

	      //echo $_FILES["file"]["name"] . " already exists. ";
	      //unlink($_FILES["file"]["name"]);
	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "uploads/" . $str_file_name);
	      //echo "Stored in: " . "uploads/" . $_FILES["file"]["name"];
	      if($str_file_name>"")
	      {
	      $filepath="uploads/" . $str_file_name;
	      }
	      

	      }
	    else
	      {
	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "uploads/" . $str_file_name);
	     // echo "Stored in: " . "uploads/" . $_FILES["file"]["name"];
	      if($str_file_name>"")
	      {
	      $filepath="uploads/" . $str_file_name;
	      }
	      }
	}else{
		echo "<script> alert('Unable to upload file.Please Use image,word or pdf file'); 
 		window.location.href='".$WebsiteUrl."';
		</script>";
		die;
	}
  }
//echo "coming ".$ref_url;

if($ref_url=="")
{
$ref_url=$ref_url_new;
}

if(isset($_SESSION['from']))
{
if (!empty($WebsiteUrl))
{	
	$Website	= split("/",$WebsiteUrl);	


	$Ip = @gethostbyname($Website[2]); 

	if (substr($Website[2],0,4)=="www.")
	{ 
	$ref_url = $Website[2];							//--- Domain Name ---
	}
	else
	{
	$ref_url = "www.".$Website[2];
    }
//--- ' Check whether It has Come from Our Server Or Not.

// echo "<br/>".$ref_url ."" . $Ip; 

if(($ref_url=="forgefittingsindia.com")||($ref_url == "www.skypacktechnology.com")||($ref_url == "skypacktechnology.com")||($ref_url == "hyconindia.com")||($ref_url == "britomatics.com")||($ref_url == "www.britomatics.com")||($ref_url == "www.tansa.co.in")||($ref_url == "www.rokaderototechniks.com")||($ref_url == "rokaderototechniks.com")||($ref_url=="opelenergysystems.com")||($ref_url=="shrijeelifestyle.com")||($ref_url=="www.shrijeelifestyle.com")||($ref_url=="www.preciweigh.com")||($Ip == "103.21.59.28")||($Ip == "63.141.241.237")||($Ip == "174.127.104.94")||($Ip == "192.227.90.91")||($Ip == "192.227.85.170")||($Ip == "192.227.108.55")||($Ip == "192.227.117.41")||($Ip == "192.227.65.65")||($Ip == "203.197.88.54")||($Ip == "74.124.215.254")||($Ip == "43.240.65.62")||($Ip == "216.150.76.187")||($Ip == "203.199.149.73")||($Ip == "115.112.176.46")||($Ip == "203.199.149.87")||($Ip == "50.87.111.126")||($Ip == "203.199.149.79")||($Ip == "203.199.149.84")||($Ip == "115.112.176.48")||($Ip == "203.199.149.94")||($Ip == "72.35.82.214")||($Ip == "115.112.176.21")||($Ip == "176.9.177.170")||($Ip == "192.185.119.102")||($Ip == "182.50.149.1")||($Ip == "103.53.42.49")||($ref_url == "www.midsupport.com")||($Ip == "111.118.212.66")||($ref_url=="mechspares.com") ||($ref_url=="www.mechspares.com")||($ref_url=="www.datarnutra.in")||($ref_url=="datarnutra.in")||($ref_url=="www.precihole.com")|| ($ref_url=="www.precihole.co.in")|| ($ref_url=="precihole.com") || ($ref_url=="precihole.co.in") || ($ref_url=="www.aaskdam.com")|| ($ref_url=="aaskdam.com") || ($ref_url=="www.specialty-films.com")|| ($ref_url=="specialty-films.com")|| ($ref_url=="www.finegrouptest.com")|| ($ref_url=="www.shrikanchanhotels.com") || ($ref_url=="shrikanchanhotels.com") || ($ref_url=="finegrouptest.com") || ($ref_url=="www.shreemanjunath.com")|| ($ref_url=="shreemanjunath.com") || ($ref_url=="www.tscindia.com")|| ($ref_url=="tscindia.com") || ($ref_url=="www.annapurnatrollies.com")||($ref_url=="annapurnatrollies.com")||($ref_url=="mastergrind.com")||($ref_url=="www.mastergrind.com")||($ref_url=="etind.com")||($ref_url=="www.etind.com")||($ref_url=="endelweighing.com")||($ref_url=="ramsukh.com")||($ref_url=="www.ramsukh.com")||($ref_url=="www.endelweighing.com")||($ref_url=="dubaiweighing.com")||($ref_url=="www.dubaiweighing.com")||($ref_url=="maharashtradirectory.com")||($ref_url=="www.maharashtradirectory.com")||($ref_url=="gujaratdirectory.com")||($ref_url=="www.gujaratdirectory.com")||($ref_url=="internationalsprings.com")||($ref_url=="www.internationalsprings.com")||($ref_url=="acmeindia.com")||($ref_url=="www.acmeindia.com")||($ref_url=="orioleindia.com")||($ref_url=="www.orioleindia.com")||($ref_url=="www.ceeama.com")||($ref_url=="sumkosys.com")||($ref_url=="www.sumkosys.com")||($ref_url=="apollo.co.in")||($ref_url=="usedcnc.in")||($ref_url=="www.usedcnc.in")||($ref_url=="taspowertek.com")||($ref_url=="www.taspowertek.com")||($ref_url=="nkfilter.com")||($ref_url=="www.nkfilter.com")||($ref_url=="sbtispares.com")||($ref_url=="www.sbtispares.com")||($ref_url=="marketdynamicsindia.com")||($ref_url=="www.marketdynamicsindia.com")||($ref_url=="mescspares.com")||($ref_url=="www.pelwrap.com")||($ref_url=="pelwrap.com")||($ref_url=="www.mescspares.com")||($ref_url=="www.grgdetox.com")||($ref_url=="grgdetox.com")||($ref_url=="www.trinityfiltration.in")||($ref_url=="trinityfiltration.in")||($ref_url=="www.signsmithdisplays.com")||($ref_url=="signsmithdisplays.com")||($ref_url=="nirmalhealthcare.com")||($ref_url=="www.nirmalhealthcare.com")||($ref_url=="microsetcontrols.com")||($ref_url=="www.microsetcontrols.com")||($ref_url=="www.phoenixrefrigeration.co.in")||($ref_url=="phoenixrefrigeration.co.in")||($ref_url=="vedhtechno.com")||($ref_url=="www.vedhtechno.com")||($ref_url=="spectrumpaints.net")||($ref_url=="www.dkpharmachem.com")||($ref_url=="dkpharmachem.com")||($ref_url=="spraytechindia.com")||($ref_url=="www.spraytechindia.com")||($ref_url=="www.spectrumpaints.net")||($ref_url=="nexgapparels.com")||($ref_url=="www.nexgapparels.com")||($ref_url=="www.spraytechindia.com")||($ref_url=="www.excellentprinters.in")||($ref_url=="tristarindia.com")||($ref_url=="www.tristarindia.com")||($ref_url=="dishalaser.com")||($ref_url=="www.dishalaser.com")||($ref_url=="www.tridentlabortek.com")||($ref_url=="www.npsengineering.com")||($ref_url=="npsengineering.com")||($ref_url=="www.labindialabs.com")||($ref_url=="labindialabs.com")||($ref_url=="www.xlr.co.in")||($ref_url=="xlr.co.in")||($ref_url=="herambmusic.in")||($ref_url=="www.herambmusic.in")||($ref_url=="www.googleweblight.com")||($ref_url=="www.measurewel.com")||($ref_url=="www.powerjac.com")||($ref_url=="powerjac.com")||($ref_url=="www.greenmagic.co.in")||($ref_url=="greenmagic.co.in")||($ref_url=="www.veroalfa.com")||($ref_url=="veroalfa.com")||($ref_url=="taspowertek.com")||($ref_url=="www.taspowertek.com")||($ref_url=="www.aquaproducts.in")||($ref_url=="www.nexgapparels.com")||($ref_url=="nexgapparels.com")||($ref_url=="aquaproducts.in")||($ref_url=="www.shreejiaqua.com")||($ref_url=="shreejiaqua.com")||($ref_url=="www.wspcranes.com")||($ref_url=="wspcranes.com")||($ref_url=="www.techexpertindia.com")||($ref_url=="techexpertindia.com")||($ref_url=="www.spavengineers.in")||($ref_url=="spavengineers.in")||($ref_url=="www.tridentlabortek.com")||($ref_url=="tridentlabortek.com")||($ref_url=="www.bhagininiveditabank.com")||($ref_url=="bhagininiveditabank.com")||($ref_url=="www.sunshinewallputty.com")||($ref_url=="elenoenergy.com")||($ref_url=="www.elenoenergy.com")||($ref_url=="sunshinewallputty.com")||($ref_url=="www.elenoenergy.com")||($ref_url=="www.swastikcosmetology.in")||($ref_url=="swastikcosmetology.in")||($ref_url=="www.cfodirect.in")||($ref_url=="cfodirect.in")||($ref_url=="hiver.co.in")||($ref_url=="www.kkcans.com")||($ref_url=="kkcans.com")||($Ip == "103.86.176.2")||($Ip == "149.56.66.205")||($Ip == "perfectfiltra.com")||($Ip == "166.62.28.86") || ($ref_url=="symetrix.in") || ($ref_url=="www.symetrix.in")|| ($Ip == "113.193.8.210")|| ($ref_url=="www.nikamironsintered.com")|| ($ref_url=="www.perfect-ventures.com")|| ($Ip == "nikamironsintered.com")||($ref_url=="preciweigh.com")||($ref_url=="www.preciweigh.com")||($ref_url=="www.ktechadditives.com")||($ref_url=="ktechadditives.com")||($ref_url=="www.radioelectricindia.com")||($ref_url=="www.rdgroupindia.com")||($ref_url=="rdgroupindia.com")||($ref_url=="ratecktraining.com")||($ref_url=="www.ratecktraining.com")||($ref_url=="www.ras-tek.com")||($ref_url=="www.charuintegrity.com")||($ref_url=="charuintegrity.com")||($ref_url=="ras-tek.com")||($ref_url=="www.pousse.in")||($ref_url=="www.pousse.in")||($ref_url=="www.shreewatertech.com")||($ref_url=="www.tscomprozone.com")||($ref_url=="www.sreecycleplast.com")||($ref_url=="www.madhuvanfarms.com")) 
	{
	
		$from				 = $_SESSION['from'];
		$countAt			 = strpos($from,"@",1);
		$countDot			 = strpos($from,".",1);
		
		if (($countAt > 0)&&($countDot > 0)) 
		{
		
		
			// --- Query To Check Url Is Already Exist --- //
			
			// to do get the domain name from $_SESSION[from] and compare it with $Website and if it is same then exit.
		
			$ref_url_query = "select * from referrer where ref_url ='$ref_url'";  // Query To check URL.
			$result =@mysql_query("$ref_url_query",$connect);
		
			$AllRows = mysql_num_rows($result);	
		
			//echo "Rows=".$AllRows;
				if ($AllRows=="0")
				{
					$insert_query="insert into referrer values('null','$ref_url','1')";
					$result =@mysql_db_query($database,"$insert_query",$connect);
					$Count = 1;
				  	mysql_close();
				}
				else if($AllRows > "0")
				{
					$rs=mysql_fetch_array($result);
					{		
						$hits	= "$rs[2]";
						$id		= "$rs[0]"; 			
						$hits	= $hits +1;
						$Count  = $hits;
					}
                                   }

					// ---- This For Loop Is Used To Get Request Form Data ---- //                             

					$form_fields = array_keys($HTTP_POST_VARS);
					
					$CustomerNo = $Count;
					$bodymail = $bodymail."Customer No: ".$CustomerNo."\n <br/><br/>";

					for ($i = 0; $i < sizeof($form_fields); $i++)
					{
						$thisField = $form_fields[$i];
						

						if (($thisField!='redirect') && ($thisField!='recipient') &&($thisField!='subject')&&($thisField!='cellno')&&($thisField!='message')&&($thisField!='verificationCode')&&($thisField!='submit') )
						{
					           if(($thisField=='contact_person'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										$bodymail=$bodymail."Contact Person  :  ". $thisValue. "\n <br/><br/>";
									}
									else
									if(($thisField=='telNo'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										$bodymail=$bodymail."Tel. No.  :  ". $thisValue. "\n <br/><br/>";
									}
									else 
									if(($thisField=='from'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										$bodymail=$bodymail."Enquiry From  :  ". $thisValue. "\n <br/><br/>";
									}
									else 
									if(($thisField=='category'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										$bodymail=$bodymail."Category  :  ". $thisValue. "\n <br/><br/>";
									}
									else 
									if(($thisField=='Type_Of_Work'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										if($_SESSION['category']!="Adornn Products")
										{
											$bodymail=$bodymail."Type Of Work :  ". $thisValue. "\n <br/><br/>";
										}
									}
									else
									if(($thisField=='Choose_Painting'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										if($_SESSION['category']!="Adornn Products")
										{
											$bodymail=$bodymail."Choose Painting:  ". $thisValue. "\n <br/><br/>";
										}
									}
									else
									if(($thisField=='Requirement_Details'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										$bodymail=$bodymail."Requirement Details :  ". $thisValue. "\n <br/><br/>";
									}
									else
									if(($thisField=='q'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
									}
									else
									if(($thisField=='random_key'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
									}
									else
									if(($thisField=='domain_name'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
									}
									else
									if(($thisField=='Add_On_Services'))
									{
									 	$services= $_SESSION['Add_On_Services'];
										$str_service="";
										   foreach ($services as $service=>$value) {
										              $str_service=$str_service.$value.",";
										        }

										if($_SESSION['category']!="Adornn Products")
										{
										$bodymail=$bodymail."Add On Services :  ". $str_service. "\n <br/><br/>";
										}
									}
								else
								{

									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". strip_tags($thisValue);
							        $bodymail=$bodymail.$thisField ."  :  ". $thisValue. "\n <br/><br/>";		    		    
								}
     		    

						}
						
					}
					// echo $bodymail;
				// ---- Send Mail 

					$redirect_url_from	 = "$_SESSION[redirect]";
					$emailsubject		 = "$_SESSION[subject]";
					$recipient		 = "$_SESSION[recipient]";
					$from			 = "$_SESSION[from]";
					//$requirement_details = "$_SESSION[requirement_details]";
					$emailfromname	 = "$_SESSION[contact_person]";

				    $emailto	= "$recipient";      
				    $emailfromaddr	= "$from"; 
				    $emailsubject	= "$emailsubject"; 


				$emailbody .= "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($ref_url)\n\n<br/>";    
				$emailbody .= "<br/><br/>"; 
			    $emailbody .= "$bodymail"; 


				//// for email attachment

				if($_FILES["file"]["name"]!="")
				{
				$fileatt = "uploads/" . $str_file_name;// Path to the file
				$fileatt_name =  $str_file_name;// Filename that will be used for the file as the attachment
				}

				$fileatt_type = "application/octet-stream"; // File Type
				$email_from = $_SESSION[from];// Who the email is from
				$email_subject = $_SESSION[subject] ; // The Subject of the email

				// Removed MahaTech-App icon on 17th March 2021 By Sagar //

				
				$query_details1 = "select * from update_testresult where `id`=2";  // Query To check URL.
				$result_details1 =@mysql_query("$query_details1",$connect);
				$record_fetch1 = mysql_fetch_assoc($result_details1);

				$emailbody .= $record_fetch1['description'];

				$emailbody .= " .\n";  
									
				$email_message =  $emailbody;	

				$email_to = $_SESSION[recipient]; // Who the email is to


				$headers = "From: ".$email_from;


				if($_FILES["file"]["name"]!="")
				{
				 
					$file = fopen($fileatt,'rb');
					$data = fread($file,filesize($fileatt));
					fclose($file);

					$semi_rand = md5(time());
					$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

					$headers .= "\nMIME-Version: 1.0\n" .
					"Content-Type: multipart/mixed;\n" .
					" boundary=\"{$mime_boundary}\"";


					$email_message .= "This is a multi-part message in MIME format.\n\n" .
					"--{$mime_boundary}\n" .
					"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
					"Content-Transfer-Encoding: 7bit\n\n" .
					$email_message .= "\n\n";

					$data = chunk_split(base64_encode($data));


					$email_message .= "--{$mime_boundary}\n" .
					"Content-Type: {$fileatt_type};\n" .
					" name=\"{$fileatt_name}\"\n" .
					"Content-Transfer-Encoding: base64\n\n" .
					$data .= "\n\n" .
					"--{$mime_boundary}--\n";

				}
				else
				{
				 
					$headers = "From: $emailfromname <$emailfromaddr>\n"; 
					$headers .= "Content-Type:text/html\r\n"; 
					$headers .= "Reply-To: $original_id\n";
				}					  

				$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
				$emailheaders .= "Content-Type:text/html\r\n"; 
				$emailheaders .= "Reply-To: $original_id\n";
				
					
					$address			 = "$_SESSION[Address]";
					
					if($address!="")
					{		
						//$address			 = "$_SESSION[Address]";
						$countHref			 = strpos($address,"<a href=");
						if ($countHref === false)
						{
							$countHref			 = strpos($address,"http://");
						}
						if ($countHref === false)
						{
							$countHref			 = strpos($_SESSION[requirement_details],"<a href=");
						}
						if ($countHref === false)
						{
							$countHref			 = strpos($_SESSION[requirement_details],"http://");
						}

						
						if ($countHref === false)
						{
							$mailSend			 = "true";
							//echo "1";
						}
						else
						{
							$mailSend			 = "false";
							//echo "2";
						}
					}
					else
					{
						$mailSend			 = "true";
						//echo "3";
					}
					
					if ($mailSend == "true")
					{
						$mail_status = mail($email_to , $email_subject , $email_message, $headers);	
					}
					else
					{
						$emailto = "midreport@gmail.com";
						$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
						$emailheaders .= "Reply-To: $original_id\n";
		
						$emailheaders .= "Bcc: midreport@gmail.com\n";	
						$emailheaders .= "Content-Type: text/html\n";	
						$mail_status = mail($email_to , $email_subject , $email_message , $headers);
					}
					
					//changes done on 10th Feb 2007 by Rajiv in consultation with Mr.Kadam, Mr.Himanshu, Mr.Shinde
		
			// Query To Update Hits.	
				
			$update_query="update referrer set hits='$hits' where id='$id'";
			$result1 =@mysql_db_query($database,"$update_query",$connect);
		
			if (!$result) { echo("ERROR: " . mysql_error() . "\n$update_query\n"); }
				
			mysql_close();			
		
								
		}
	}
	else
	{
			$emailsubject		 = "$_SESSION[subject]";
			$recipient	         = "$_SESSION[recipient]";
			$from		         = "$_SESSION[from]";
			//$requirement_details = "$_SESSION[requirement_details]";
			$emailfromname		 = "$_SESSION[contact_person]";

			$emailfromaddr	= "$from"; 
			$emailsubject	= "$emailsubject"; 	
	
			$emailto		= "midseonew@maharashtradirectory.com";
			$emailsubject   = "Enquiry From Other Server"; 
	
			$form_fields = array_keys($HTTP_POST_VARS);
			$bodymail ="";
			for ($i = 0; $i < sizeof($form_fields); $i++)
				{
					$thisField = $form_fields[$i];
					

					if (($thisField!='redirect') && ($thisField!='recipient') &&($thisField!='subject')&&($thisField!='cellno')&&($thisField!='message')&&($thisField!='verificationCode')&&($thisField!='submit') )
					{
				           if(($thisField=='contact_person'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									$bodymail=$bodymail."Contact Person  :  ". $thisValue. "\n <br/><br/>";
								}
								else
								if(($thisField=='telNo'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									$bodymail=$bodymail."Tel. No.  :  ". $thisValue. "\n <br/><br/>";
								}
								else 
								if(($thisField=='from'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									$bodymail=$bodymail."Enquiry From  :  ". $thisValue. "\n <br/><br/>";
								}
								else 
								if(($thisField=='category'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									$bodymail=$bodymail."Category  :  ". $thisValue. "\n <br/><br/>";
								}
								else 
								if(($thisField=='Type_Of_Work'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									if($_SESSION['category']!="Adornn Products")
									{
										$bodymail=$bodymail."Type Of Work :  ". $thisValue. "\n <br/><br/>";
									}
								}
								else
								if(($thisField=='Choose_Painting'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									if($_SESSION['category']!="Adornn Products")
									{
										$bodymail=$bodymail."Choose Painting:  ". $thisValue. "\n <br/><br/>";
									}
								}
								else
								if(($thisField=='Requirement_Details'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
									$bodymail=$bodymail."Requirement Details :  ". $thisValue. "\n <br/><br/>";
								}
								else
								if(($thisField=='q'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
								}
								else
								if(($thisField=='random_key'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
								}
								else
								if(($thisField=='domain_name'))
								{
									$thisValue = $HTTP_POST_VARS[$thisField];
									$thisField ."  :  ". $thisValue;
								}
								else
								if(($thisField=='Add_On_Services'))
								{
								 	$services= $_SESSION['Add_On_Services'];
									$str_service="";
									   foreach ($services as $service=>$value) {
									              $str_service=$str_service.$value.",";
									        }

									if($_SESSION['category']!="Adornn Products")
									{
									$bodymail=$bodymail."Add On Services :  ". $str_service. "\n <br/><br/>";
									}
								}
							else
							{

								$thisValue = $HTTP_POST_VARS[$thisField];
					        	// $thisField ."  :  ". $thisValue;
								$thisField ."  :  ". strip_tags($thisValue);
						        $bodymail=$bodymail.$thisField ."  :  ". $thisValue. "\n <br/><br/>";		    		    
							}
 		    

					}
					
				}
 
			//'--
			//define headers for email
			//$boundary="--000_0009_01C1F362";
			$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
		    $emailheaders .= "Reply-To: $original_id\n";
		    //$emailheaders .= "\nContent-Type: multipart/alternative;\n boundary=\"$boundary\"";
			$emailheaders .= "X-Priority: 1\n"; // Urgent message!
					
			// This sends the email in html and plain text
			$emailbody .= "This enquiry comes to you through Maharashtra Industries Directory's unique Web Service .\n\n\n";        
			$emailbody .="This mail Comes From Other Server Url Is ($ref_url) And Ip ($Ip).\n"; 
		    $emailbody .= "\nFollowing Are The Detail :\n\n"; 

			//here the email body is inserted
			$emailbody .="\n".$bodymail."\n--$boundary--\n";
	  		
			$mail_status = mail($emailto , $emailsubject , $emailbody , $emailheaders);
	}



	        $emailheaders_user="";
			$emailheaders_user = "From:<$emailto>\n"; 
			$emailheaders_user .= "Reply-To: $original_id\n";					
			$emailheaders_user .= "Content-Type: text/html\n";	

			$body_user="";
			$body_user=$body_user."Dear Sir, <br/><br/>";
			$body_user=$body_user."We have registered your requirement with us and will get in touch with you shortly. <br/><br/>";
			//$emailbody=str_replace("Your","you on ",$emailbody);
			$body_user=$body_user. $emailbody ;

			 mail($_SESSION[from] , "Re:Enquiry Form" , $body_user , $emailheaders_user);

			$mailContent = '<html>
				<head>
				<meta http-equiv="Content-Language" content="en-us">
				<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
				</head>
				<body>
				<div align="center">
					<table border="0" width="876" cellspacing="0" cellpadding="0" height="643" bgcolor="#E7E9EB">
						<tr>
							<td>
							<div align="center">
								<font size="5">&nbsp;</font><table border="0" width="805" cellspacing="0" cellpadding="0" height="249" bgcolor="#FFFFFF">
									<tr>
										<td height="39" width="805" colspan="2" bgcolor="#F0F1F4">
										<p align="center"><font face="Arial" size="2">If you 
										have difficulties viewing this mail,&nbsp;<a target="_blank" href="http://demo.mahapage.com/mid/midnewsletter.htm">click 
										here</a></font></td>
									</tr>
									<tr>
										<td height="150" width="21">&nbsp;</td>
										<td height="150" width="784">
										<table border="0" width="100%" cellspacing="0" cellpadding="0">
											<tr>
												<td width="49">&nbsp;</td>
												<td>
												<img border="0" src="http://demo.mahapage.com/mid/mid-newsletter-header.jpg" width="667" height="136"></td>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td width="22" height="27">&nbsp;</td>
										<td width="784" height="27"><hr></td>
									</tr>
									<tr>
										<td width="22">&nbsp;</td>
										<td width="784">
										<div style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)">
											<span style="font-family: Tahoma, Geneva, sans-serif; font-size: 16px">
											<br>
											Dear '.$_SESSION["contact_person"].'<br>
											<br>
											For '.$_SESSION["CompanyName"].'</span><p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); line-height: 20px">
											We are a Digital Marketing Company with 40 years of 
											background and a strong client base of&nbsp;<b>10000 
											clients</b>.&nbsp;<br>
											We design websites and promote our clients through 
											our portal and through Google.</p>
											<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61)">
											You had sent an Enquiry to one of our client&nbsp;<a target="_blank" style="color: rgb(17, 85, 204)" href="'.$ref_url.'">'.$ref_url.'</a></p>
											<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61)">
											You must have reached our client through Google or 
											one of our portals. We generate Good Business leads
											<br>
											to our clients through all digital channels.</p>
											<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(81, 81, 81); line-height: 25px">
											<strong>Following are few of our services.</strong></p>
											<ul style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); padding-left: 0px">
												<li style="margin-left: 15px">&nbsp; Responsive and 
												Dynamic Website Designing and hosting.</li>
												<li style="margin-left: 15px">&nbsp; PHP / CMS Based 
												websites.</li>
												<li style="margin-left: 15px">&nbsp; Search Engine 
												Optimization with assured Top Ranking and 
												maintaining throughout the year.</li>
												<li style="margin-left: 15px">&nbsp;Sponsored 
												advertisement.</li>
												<li style="margin-left: 15px">&nbsp;Mailing Service.</li>
												<li style="margin-left: 15px">&nbsp;Social Media.</li>
												<li style="margin-left: 15px">&nbsp;Android and IOS 
												App development.</li>
												<li style="margin-left: 15px">&nbsp;Live Chat Tracker 
												service.</li>
											</ul>
										</div>
										</td>
									</tr>
									<tr>
										<td width="22" rowspan="3">&nbsp;</td>
										<td width="784"><hr></td>
									</tr>
									<tr>
										<td width="784">
										<div style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)">
											<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); font-weight: bold; margin-top: 20px">
											If you want to avail our services we are happy to 
											talk to you. Please feel free to Contact</p>
											<table border="0" width="764" height="98" cellspacing="0" cellpadding="0">
												<tr>
													<td width="13">&nbsp;</td>
													<td width="301"><b>Mr.S.N.Shinde</b><br>
													<font size="2">Cell: 9004096935&nbsp;<br>
													Pune,Sangli,Satara, Nashik, Kolhapur, 
													Aurangabad<br>
													</font>
													<a target="_blank" style="color: rgb(17, 85, 204); font-weight: 700" href="mailto:E-mail:snshinde@mipl.co.in">
													<font size="2">E-mail:snshinde@mipl.co.in</font></a></td>
													<td width="14">&nbsp;</td>
													<td width="214"><b>Mr. Vasant B. Mali</b><br>
													<font size="2">Cell: 9004096913&nbsp;<br>
													Thane, Mumbai, Navi Mumbai<br>
													</font>
													<a target="_blank" style="color: rgb(17, 85, 204); font-weight: 700" href="mailto:E-mail:vasant.mali@mipl.co.in">
													<font size="2">E-mail:vasant.mali@mipl.co.in</font></a></td>
													<td width="9">&nbsp;</td>
													<td width="213"><b>Mr.Yogesh Modi</b><br>
													<font size="2">Cell: 9824013375&nbsp;<br>
													Ahmedabad, Gujarat<br>
													</font>
													<a target="_blank" style="color: rgb(17, 85, 204); font-weight: 700" href="mailto:E-mail:yogesh.modi@mipl.co.in">
													<font size="2">E-mail:yogesh.modi@mipl.co.in</font></a></td>
												</tr>
											</table>
										</div>
										<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); font-weight: bold; margin-top: 20px; background-color: rgb(255, 255, 255)">
										Happy Association,&nbsp;<br>
										<span style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(194, 19, 6); font-weight: bold; margin-top: 20px">
										Team MID</span></td>
									</tr>
									<tr>
										<td width="784">&nbsp;</td>
									</tr>
								</table>
								<p><font size="1">&nbsp;</font></div>
							</td>
						</tr>
					</table>
				</div>
				</body>
				</html>';

			$headers="";			
			$headers .= "MIME-Version: 1.0" . "\r\n"; 
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
			$headers .= "Reply-To: ccare@mipl.co.in\n";
			$headers .= "From: ccare@mipl.co.in\n";

			mail($_SESSION[from], "Grow Your Bussiness with MID", $mailContent, $headers);

?>	 	
<META HTTP-EQUIV=Refresh CONTENT="5; URL='http://<?=$Website[2]?>'">

<body>


<?	/*	Added on - 16-04-2010, Hemant Ganpule	*/


	$myCompanyName ="$_SESSION[CompanyName]";
	$myContactPerson ="$_SESSION[contact_person]";
	$myCity ="$_SESSION[City]";
	$mycountry ="$_SESSION[country]";
	$myTelNo ="$_SESSION[telNo]";
    $myemail="$_SESSION[from]";
    $req="$_SESSION[requirement_details]";
    $myaddress="$_SESSION[Address]";
    $mystate="$_SESSION[state]";
    $mydesignation="$_SESSION[Designation]";       
    $mypincode="$_SESSION[Pincode]";

?>

<?php

//connection to the Ms-sql-database

$myServer = "myserver1";
$myUser = "domainenquiries";
$myPass = "MN2k9#@Dru";
$myDB = "domainenquiries"; 


$dbhandle = @mssql_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer"); 


$selected = mssql_select_db($myDB, $dbhandle)
  or die; 

$emailbody=str_replace("'","''",$emailbody);
$req=str_replace("'","''",$req);

$query = "insert into domainenquiries(companyname,contactperson,city,country,telno,emailid,requirements,web_url,edate,state,designation,address,pincode,emailbody,emailto,emailsubject)values('".$myCompanyName."','".$myContactPerson."','".$myCity."','".$mycountry."','".$myTelNo."','".$original_id."','".$req."','".$ref_url."','".date('Y-m-d H:i:s')."','".$mystate."','".$mydesignation."','".$myaddress."','".$mypincode."','".$emailbody."','".$recipient."','".$emailsubject."')"; 

$result = mssql_query($query);
?>

<?/* SMS Code Start Here SMS Alert Stopped on 18th Nov.2014 As per Instruction By Vinay Sir & Started Again On 19th March 2015*/ ?>

<iframe width="0" height="0" src="https://www.maharashtradirectory.com/smsresponse/SmsEnqResponseWithAllDetails.asp?website=<?=$ref_url?>&CompanyName=<?=$myCompanyName?>&ContactPerson=<?=$myContactPerson?>&City=<?=$myCity?>&country=<?=$mycountry?>&TelNo=<?=$myTelNo?>"></iframe>

<?/* SMS Code End Here SMS Alert Stopped on 18th Nov.2014 As per Instruction By Vinay Sir*/ ?>

<div align="center">
  <center>
   <table border="1" cellpadding="0" cellspacing="0" width="724" height="415" bgcolor="#E5E5E5" bordercolor="#C0C5D3">
    <tr>
      <td height="413" bgcolor="#FFFFFF" width="720" valign="top">
        <p align="center">
		<br>
		<img border="0" src="congrats3.png" width="401" height="91"><br>
		<img border="0" src="checkmark.gif" width="225" height="168"></p>
		<table border="0" width="100%" bgcolor="#E5E5E5" cellspacing="0" cellpadding="0" height="67">
			<tr>
				<td bgcolor="#49CC85">
        <p align="center"><font face="Arial" size="5" color="#FFFFFF"><i>Your
        Enquiry Has Been Sent </i></font><font face="Arial"><b><i>
		<font size="5" color="#FFFFFF">Successfully !</font></i></b></font></p>
        		</td>
			</tr>
		</table>
        </div>
        <p align="center"><font face="Times New Roman"><font size="5">Your
        Enquiry Has Been Sent </font><font size="4"><br>
        </font><b><i><font size="5" color="#DA0E03">Successfully !</font></i></b></font></p>
        <hr width="650">
        
        <p align="center"><font color="#000080" size="1" face="Verdana">Now you
        are being redirected to Homepage of <b><?=$Website[2]?></b></font>
        </td>
    </tr>
  </table>
  </center>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
<?
}
else
{
	// changes made by rajiv on 09/02/2004 for Sending form thro' CD.
	//print ("<b>No Url");	
	$emailsubject		 = "$_SESSION[subject]";
	$recipient			 = "$_SESSION[recipient]";
	$from				 = "$_SESSION[from]";
	//$requirement_details = "$_SESSION[requirement_details]";
	$emailfromname		 = "$_SESSION[contact_person]";

    $redirect_url_from		 = "$_SESSION[redirect]";
    
    $emailto		= "$recipient";      
    $emailfromaddr	= "$from"; 
    $emailsubject	= "$emailsubject"; 
    
    // ---- This For Loop Is Used To Get Request Form Data ---- //

	$form_fields = array_keys($HTTP_POST_VARS);
	$bodymail ="";
	for ($i = 0; $i < sizeof($form_fields); $i++)
	{
		$thisField = $form_fields[$i];
		
		if (($thisField!='redirect') && ($thisField!='recipient') &&($thisField!='subject')&&($thisField!='cellno')&&($thisField!='message')&&($thisField!='verificationCode')&&($thisField!='submit'))
		{
			$thisValue = $HTTP_POST_VARS[$thisField];
	        $thisField ."  :  ". strip_tags($thisValue);
		    $bodymail=$bodymail.$thisField ."  :  ". $thisValue. "\n";		    		    
		}
		
	}
	$emailbody = "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($ref_url)\n\n";    
	
    $emailbody .= "$bodymail"; 
	$emailbody .= "\n\nThis Email comes to you through Maharashtra Industries Directory's DVD-ROM .\n";        
		
	$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
    $emailheaders .= "Reply-To: $original_id\n";
    $emailheaders .= "Bcc: dotcom@mahapage.com\n"; 
	$emailheaders .= "Content-Type: text/plain\n";

		$from_dvd				 = "$_SESSION[from]";
		$countAt_dvd			 = strpos($from,"@",1);
		$countDot_dvd			 = strpos($from,".",1);
		
		if (($countAt_dvd > 0)&&($countDot_dvd > 0)) 
		{
		$mail_status = mail($emailto , $emailsubject , $emailbody , $emailheaders);
		}

	
?>
		<body>
		<div align="center">
		  <center>
		  <table border="2" cellpadding="0" cellspacing="0" width="698" height="278" bordercolorlight="#000080" bordercolordark="#000080">
		    <tr>
		      <td valign="middle" height="276" bgcolor="#FFFFCC" width="692">
		        <hr width="650">
		        <div align="center">
		          <table border="3" cellpadding="0" cellspacing="0" width="107" bordercolorlight="#000080" bordercolordark="#000080">
		            <tr>
		              <td>
		                <p align="center"><img border="1" src="aemail.gif" width="107" height="35"></td>
		            </tr>
		          </table>
		        </div>
		        <p align="center"><font face="Times New Roman"><font size="5">Your
		        Enquiry Has Been Sent </font><font size="4"><br>
		        </font><b><i><font size="5" color="#DA0E03">Successfully !</font></i></b></font></p>
		        <hr width="650">
		        <p align="center"><font color="#000080" size="1" face="Verdana"><A Href="javascript:History.back()">Back</A></font></td>
		    </tr>
		  </table>
		  </center>
		</div>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		</body>	
<?
}	

}	

else

{
echo "Invalid Email Entry !";
}
}else{
	echo "Security Breach.....!!!!!!!";
}
?>