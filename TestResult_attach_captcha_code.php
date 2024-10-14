<?php
include("dbopenconn.php");
date_default_timezone_set("Asia/Kolkata");
$currentTime = date( 'Y-m-d h:i:s', time () ); 
$HTTP_POST_VARS=$_POST;
$random_key = $_POST['random_key'];
$random_no = $_POST['q'];
$doamin_name = $_POST['domain_name'];

if($_POST['from'] !='' && $_POST['subject']!='' && $_POST['CompanyName']!='' && $_POST['telNo']!='' && $_POST['contact_person']!=''){

$query = mysql_query('SELECT * FROM `code_verify` WHERE `random_no`="'.$random_no.'" AND `random_key`="'.$random_key.'" AND `domain_name`="'.$doamin_name.'" AND status = 0');
$rows = mysql_num_rows($query);

if($rows == 1){
$WebsiteUrl	= getenv('HTTP_REFERER');

  
	$update_query = mysql_query('UPDATE `code_verify` SET `status`="1", `submitted_on`="'.$currentTime.'" WHERE `random_no`="'.$random_no.'" AND `random_key`="'.$random_key.'" AND `domain_name`="'.$doamin_name.'"');
  
$split_from = explode('@',$_POST['from']);

$emailbody =  '<tr><td><hr style="height: 3px; border-width: 0; color: Crimson; background-color:Crimson" /></td></tr><tr><td height="40" bgcolor="#F0F0F0"><span style="font-family: Tahoma, Geneva, sans-serif; font-size: 22px; color: #00006C">&nbsp; New Enquiry from Maharashtra Industries Directory Web Service</span></td></tr><tr><td>
<hr style="height: 3px; border-width: 0; color: Crimson; background-color: Crimson" /></td></tr><tr><td></td></tr></br></br>';

//For Blocking the unwanted users with invalid email id and black listed domain  
if((empty($split_from[1]))||($_POST['from'] == 'adi@ndmails.com')||($_POST['from'] == 'canela.alfred56@yahoo.com')||($_POST['from'] == 'emma5885fro@gmail.com')||($_POST['from'] == 'holliver23@yahoo.com')||($_POST['from'] == 'db538544@yahoo.com')||($_POST['from'] == 'ericatcu@yahoo.com')||($_POST['from'] == 'erna.mckeon@hotmail.com')||($split_from[1] == 'israeltelemarketing.online')||($split_from[1] == 'explainmybusiness.com')||($split_from[1] == 'roitraffic.icu')||($split_from[1] == 'talkwithlead.com')||($_POST['from'] == 'jason.franklinpainting@yahoo.com')||($_POST['from'] == 'emily5r9vpmoore@aol.com')||($_POST['from'] == 'katrice.ochs@gmail.com')||($_POST['from'] == 'marywingo@roxwellwaterhouse.com')||($_POST['from'] == 'sales@bestchoiceseo.com')||($split_from[1] == 'alychidesigns.com')||($split_from[1] == '126.com')||($split_from[1] == '163.com')||($split_from[1] == 'QQ.com')||($split_from[1] == 'sohu.com')||($split_from[1] == 'sina.com')||($split_from[1] == 'gmx.com')||($split_from[1] == 'qq.com')||($_POST['Address'] =='makati888hao')||($_POST['Address'] == "Are You interested in advertising")||($_POST['Address'] =='makati888hao ')||($split_from[1] == 'bestoptionseo.com')||($split_from[1] == 'talkwithcustomer.com')||($split_from[1] == 'windstream.net')||($_POST['from'] == 'haight.orlando@yahoo.com')||($_POST['from'] == 'ronda.hamel@yahoo.com')||($_POST['from'] == 'fergusonpqlu05@thefirstpageplan.com')||($_POST['from'] == 'les.forlonge@gmail.com')||($_POST['from'] == 'jorge.omeara@googlemail.com')||($_POST['from'] == 'chas.armitage@yahoo.com')||($_POST['from'] == 'pearse.kenneth@gmail.com')||($_POST['from'] == 'torri.troy@gmail.com')||($_POST['from'] == 'emanuel.bruno@googlemail.com')||($_POST['from'] == 'bobbye.rosson@gmail.com')||($_POST['from'] == 'parthenia.toliman48@yahoo.com')||($_POST['from'] == 'shana.davison@hotmail.com')||($_POST['from'] == 'sherlyn.cespedes@msn.com')||($_POST['from'] == 'charla.croft@googlemail.com')||($_POST['from'] == 'nutter.dwain@gmail.com')||($_POST['from'] == 'claire.monahan@gmail.com')||($_POST['from'] == 'franziska.hardesty@gmail.com')||($_POST['from'] == 'cassell.maricela@hotmail.com')||($_POST['from'] == 'bryan.darden@gmail.com')||($_POST['from'] == 'boase.alonzo@gmail.com')||($_POST['from'] == 'lien.cheesman@googlemail.com')||($_POST['from'] == 'mcdowall.roland@gmail.com')||($_POST['from'] == 'mclaurin.grady11@yahoo.com')||($_POST['from'] == 'webleads@techrepublic.biz')||($_POST['from'] == 'sales6@doseating.com')||($_POST['from'] == 'katherina.pena@gmail.com')||($_POST['from'] == 'uikyuronik@gmail.com')||($_POST['from'] == 'samleberao2@gmail.com')||($_POST['from'] == 'commerciale@pmgroupsrl.com')||($_POST['from'] == 'orders@ultraprint.com.au')||($_POST['from'] == 'savannah@maxvisits.icu')||($_POST['from'] == 'info@metlinked.com')||($_POST['from'] == 'mike@monkeydigital.co')||($_POST['from'] == 'rob@consumermax.icu')||($split_from[1] == 'roipatron.icu')||($split_from[1] == 'roipatron.icu ')||($_POST['from'] == 'dulaney.delores@gmail.com')||($_POST['from']== 'eric.connal@gmail.com')|| ($_POST['Address']=='mia4675whi@gmail.com')||($_POST['from'] == 'wally.haynie36@gmail.com')||($_POST['Address']=='Would you be interested in an advertising service')||($_POST['Address']=='chris.patterson@seoespecialista.com')||(strlen($_POST['Address'])>=200)||($_POST['from'] == 'eric@talkwithcustomer.com')||($_POST['Address'] == 'http://www.talkwithcustomer.com')||($_POST['Address'] == 'http://liveserveronline.com/talkwithcustomer.aspx?d=datarnutra.in')||($_POST['Address'] == 'michael4621gre@gmail.com')||($_POST['Address'] == 'Looking for fresh buyers? Receive thousands of people')||($_POST['from'] == 'polen.debbra@gmail.com')||($_POST['Address'] == 'eliza3644will@gmail.com')||($_POST['Address'] == "Trying to find powerful online promotion that isn't completely full of it?")||($_POST['from'] == 'mellissa.nunez@googlemail.com')||($_POST['Address'] == "How would you like to submit your advertisement on 1000's of Advertising sites every month?")||($_POST['Address'] == "http://www.postonthousandsofsites.xyz")||($_POST['from'] == 'oferrall.stuart@googlemail.com')||($_POST['Address'] == "How would you like to submit your ad on 1000's of Advertising sites monthly?")||($_POST['from'] == 'stacey.odriscoll@hotmail.com')||($_POST['Address'] == "http://bit.ly/unlimitedwebtrafficandfreesite")||($_POST['Address'] == "Unlimited FREE Traffic + Website On Autopilot Imagine making $50,000+ PER MONTH WITHOUT the need")||($_POST['from'] == 'molly.bardon@gmail.com')||($_POST['from'] == 'dodds.gena@gmail.com')||($_POST['from'] == 'brooke.smith@businessseo1.top')||($_POST['from'] == 'noreplygooglealexarank@gmail.com')||($_POST['Address'] == 'https://googlealexarank.com/index.php/seo-packages/')||($_POST['Address'] == 'Increase ranks and visibility for internationalequipments.com with a monthly SEO plan that is built uniquely for your website Increase SEO metrics')||($_POST['from'] == 'eugenio.fatnowna@yahoo.com')||($_POST['Address'] == 'sarah1916eva@gmail.com')||($_POST['Address'] == 'Sorry to bug you on your contact form but actually that was kinda the point')||($_POST['from'] == 'german.barajas@gmail.com')||($_POST['Address'] == 'I hope you are doing well')||($_POST['Address'] == 'walter3519rob@gmail.com')||($_POST['Address'] == 'Interested in advertising that costs less than $49 monthly and delivers tons of people')||($_POST['Address'] == 'Want to submit your advertisement on 1000s of Advertising sites monthly?')||($_POST['from'] == 'steffey.dani@gmail.com')||($_POST['Address'] == 'http://www.submitmyadnow.tech')||($_POST['from'] == 'goderich.birgit@hotmail.com')||($_POST['Address'] == 'http://bit.ly/unlimitedwebtrafficandfreesite')||($_POST['Address'] == 'Unlimited FREE Traffic + Website On Autopilot Imagine making $50,000+ PER MONTH WITHOUT the need to have a mailing list to get started or any experience')||($_POST['from'] == 'melvin.elam@googlemail.com')||($_POST['Address'] == 'leo6866tay@gmail.com')||($_POST['Address'] == 'Need to find powerful advertising that isnt full of crap?')||($_POST['from'] == 'jennifer@businessmarketingmap.top')||($_POST['Address'] == 'https://www.monkeydigital.io/product/high-ahrefs-backlinks/')||($_POST['from'] == 'kurtis.hitchcock14@gmail.com')||($_POST['Address'] == 'https://www.monkeydigital.io/product/gov-backlinks/')||($_POST['from'] == 'denise.vivier@gmail.com')||($_POST['Address'] == 'debbiesilver2112@gmail.com')||($_POST['from'] == 'askins.glory@yahoo.com')||($_POST['Address']=='complete my order in your store')||($_POST['Address'] == 'Sick of wasting money on PPC')||($_POST['Address'] == 'Do you want to submit your advertisement')||($_POST['Address'] == 'protect your loved ones')||($_POST['Address'] == 'Looking to get rid of excess body fat quick')||($_POST['Address'] == 'complete my order in your store')||($_POST['Address'] == 'Muchas gracias. ?Como puedo iniciar sesion?')||($_POST['Address'] == 'Erichem')||($_POST['from'] == 'dann.mcauley17@gmail.com')||($_POST['Address'] == 'push some prick ranks down')||($_POST['from'] == 'martin.bordoley@gmail.com')||($_POST['telNo'] == '423-386-3279')||($_POST['from'] == 'larry@bizlineofcredit.xyz')||($_POST['City'] == 'Los Angeles')||($_POST['from'] == 'mr_n_hemandez@yahoo.com')||($_POST['Address'] =='Best Dog Bed')||($_POST['CompanyName'] =='Olivia Johnson')||(strpos($_POST['requirements_details'],'Muchas gracias'))||(strpos($_POST['Address'], 'Muchas gracias'))||(strpos($_POST['Experience_Details'], 'Muchas gracias'))||($_POST['Suggestion_For_Improvement_In_Quality_Of_Product'] == 'Bitcoin')||($_POST['telNo'] == '+1 213 425 1453')||($_POST['from'] == '@absolutevideo.link')||(strpos($_POST['requirement_details'],'The Original Mosquito Trap'))||(strpos($_POST['requirements_details'],'The Original Mosquito Trap'))||(strpos($_POST['requirement_details'],'Body Revolution'))||(strpos($_POST['requirement_details'],'Dog Harness'))||(strpos($_POST['requirement_details'],'Premium sunglasses'))||(strpos($_POST['requirement_details'],'Ray-Ban sunglasses'))||(strpos($_POST['requirement_details'],'sunglasses'))||(strpos($_POST['requirement_details'],'sun glasses'))||(strpos($_POST['from'],'henke.erick@gmail.com'))||(strpos($_POST['Address'],'https://www.speed-seo.net/product/negative-seo-service/'))||($_POST['from']== 'castleton.finn@gmail.com')||($_POST['from']== 'polina.karabatova90@gmail.com')||($_POST['from']== 'stefanikevelina1@gmail.com')||($_POST['from']== 'obrienkaren67@gmail.com')||($_POST['from']== 'flarbacdnok@gmail.com')||($_POST['from']== 'quinton.beuzeville@gmail.com')||($_POST['from']== 'whivervelyfj@gmail.com')||(strpos($_POST['Address'],'https://goolnk.com/1Nm9d7'))||($_POST['from']== 'giselle.spear@outlook.com')||($_POST['from']== 'websterjames015@gmail.com')||($_POST['from']== 'maryterry6615@gmail.com')||($_POST['reset']== 'Reset')||($_POST['reset']== 'reset')||($_POST['address']== 'http://talkwithcustomer.com')||($_POST['from']== 'eric.jones.z.mail@gmail.com')||($_POST['from']== 'eric@talkwithwebvisitor.com')||($_POST['address']== 'john@stridehigher.com')||($_POST['from']== 'pring.danelle@hotmail.com')||($_POST['address']== 'www.largeglobes.com')||($_POST['from']== 'office.largeglobes.com@gmail.com')||($_POST['address']== 'I am sure you are under the impression that China is a really screwed up country. The West has a very biased view of China.')||($_POST['from']== 'langner.jayme@gmail.com')||($split_from[1] == 'buycodeshop.com')||($_POST['from']== 'tim@thehomers.net')||($_POST['from']== 'quincyfranklin@gmail.com')||($split_from[1] == 'shoppingonlinesupport.com')||($_POST['from']== 'mcfaddenrooney266@gmail.com') || ($_POST['Address']== $_POST['requirement_details'])){
	echo "Security Breach !! ";
	exit;

}     

//content block start
// michael4621gre@gmail.com
$req_details = $_POST['requirement_details'];
$dummy_content = "Sunglasses";
$dummy_content1 = "";
$dummy_content2 ="Catapult Your Rankings";
$dummy_content3 ="V1 SEO Service";
$dummy_content4 ="http://lotsofadsposted4u.myvnc.com";
$dummy_content5 ="earn cash online";
$dummy_content6 ="http://moreadsposted.sytes.net";
$dummy_content7 ="Do you want to post your business";
$dummy_content8 ="post your business";
$dummy_content9 ="1000's of Advertising sites";
$dummy_content10 ="thousands of advertising sites";
$dummy_content11 = "https://spytools.win/";
$dummy_content12="http://simpleseosolutions.xyz";
$dummy_content13="consumermax.icu";
$dummy_content14 ="Price starts at 5$";
$dummy_content15 ="We offer Guaranteed TF 20 and TF 30 Majestic Trust Flow";
$dummy_content16 = "I wanted to encourage you to buy backlinks that will boost ranks and SEO metrics";
$dummy_content17 = "Hi I don't want to ruin your day";
$dummy_content18 = "Savannah Choice Traffic 361 Southwest Drive";
$dummy_content19 = "Do you want more targeted traffic?";
$dummy_content20 = "Interested in advertising that costs less than $40 every month";
$dummy_content21 = "FREE NO OBLIGATION Analysis Report for your website";
$dummy_content22 = "Interested in advertising that costs less than $50 per month";
$dummy_content23 = "chris.patterson@seoespecialista.com";
$dummy_content24 = "lily5885mil@gmail.com";
$dummy_content25 = "mia4675whi@gmail.com";
$dummy_content26 = "Get free gas, free groceries, free movie and music downloads";
$dummy_content27 = "Want more visitors for your website";
$dummy_content28 = "Looking for fresh buyers? Receive tons of keyword";
$dummy_content29 = "I was looking at a few different sites online";
$dummy_content30 = "http://www.talkwithcustomer.com";
$dummy_content31 = "http://liveserveronline.com/talkwithcustomer.aspx?d=datarnutra.in";
$dummy_content32 = "michael4621gre@gmail.com";
$dummy_content33 = "Interested in advertising that charges less than $49 every month";
$dummy_content34 = "eliza3644will@gmail.com";
$dummy_content35 = "Need to find effective online marketing that isn't full of crap?";
$dummy_content36 = "How would you like to submit your advertisement on thousands of advertising sites every month?";
$dummy_content37 = "http://www.postonthousandsofsites.xyz";
$dummy_content38 = "How would you like to promote your ad on thousands of advertising sites monthly?";
$dummy_content39 = "Unlimited FREE Traffic + Website On Autopilot Imagine making $50,000+ PER MONTH WITHOUT the need";
$dummy_content40 = "http://bit.ly/unlimitedwebtrafficandfreesite";
$dummy_content41 = "You have a great website.  May I ask how your SEO is doing?e";
$dummy_content42 = "https://businessseo1.top/wal/?=swamiyogachittam.com";
$dummy_content43 = "https://googlealexarank.com/index.php/seo-packages/";
$dummy_content44 = "Increase ranks and visibility for internationalequipments.com with a monthly SEO plan that is built uniquely for your website Increase SEO metrics";
$dummy_content45 = "Need to find effective online promotion that isn't completely full of it? Sorry to bug you on your contact form but actually that's exactly where I wanted to make my point.";
$dummy_content46 = "sarah1916eva@gmail.com";
$dummy_content47 = "Would you be interested in an advertising service that charges less than $39 monthly and delivers tons";
$dummy_content48 = "walter3519rob@gmail.com";
$dummy_content49 = "http://bit.ly/unlimitedwebtrafficandfreesite";
$dummy_content50 = "Unlimited FREE Traffic + Website On Autopilot Imagine making $50,000+ PER MONTH WITHOUT the need to have a mailing list to get started or any experience";
$dummy_content51 = "leo6866tay@gmail.com";
$dummy_content52 = "Looking for effective advertising that isnt full of BS?";
$dummy_content53 = "https://www.monkeydigital.io/product/high-ahrefs-backlinks/";
$dummy_content54 = "https://www.monkeydigital.io/product/gov-backlinks/";
$dummy_content55 = "Everyone is always talking about improving your SEO and leads but the problem is that nobody is willing to prove to you that they are better than the other 6 million SEO companies out there.";
$dummy_content56 = "debbiesilver2112@gmail.com";
$dummy_content57 = "your loved ones from";
$dummy_content58 = "Muchas gracias. ?Como puedo iniciar sesion?";
$dummy_content59 = "Hello Body Revolution?";
$dummy_content60 = "Ray-Ban Sunglasses";
$dummy_content61 = "Fairly priced sunglasses with high quality UV400 lenses protection only $19.99";
$dummy_content62 = "Good Morning Meet your best Buds - True Wireless Earbuds with amazing sound, convenience, portability, & affordability! Order yours now at 50% OFF with FREE Shipping: musicontrol.";
$dummy_content63 = "https://www.speed-seo.net/product/negative-seo-service/";
$dummy_content64 = "Good day, My name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement _ Congratulations What for?";
$dummy_content65 = "Honestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site_s visitors disappear and are gone forever after just a moment.";
$dummy_content66 = "Greetings, are you 100% confident your sales team has the skills to consistently close busines? If not, 2020 could cripple your company_s growth for years to come!";
$dummy_content67 = "Hello, Our company makes handmade Large world globes that can be customized for your brand, company or interior design https://bit.ly/www-largeglobes-com";
$dummy_content68 = "I am sure you are under the impression that China is a really screwed up country. The West has a very biased view of China.";
$dummy_content69 = "Hurry to get your Baseball Cap Now";

if((strpos($req_details,$dummy_content) !== false) || (strpos($req_details,$dummy_content1) !== false) || (strpos($req_details,$dummy_content2) !== false)|| (strpos($req_details,$dummy_content3) !== false) || (strpos($req_details,$dummy_content4) !== false) || (strpos($req_details,$dummy_content5) !== false) || (strpos($req_details,$dummy_content6) !== false)|| (strpos($req_details,$dummy_content7) !== false)|| (strpos($req_details,$dummy_content8) !== false)|| (strpos($req_details,$dummy_content9) !== false)|| (strpos($req_details,$dummy_content10) !== false)||(strpos($req_details,$dummy_content11) !== false)||(strpos($req_details,$dummy_content12) !== false)||(strpos($req_details,$dummy_content13) !== false)||(strpos($req_details,$dummy_content14) !== false)||(strpos($req_details,$dummy_content15) !== false)||(strpos($req_details,$dummy_content16) !== false)||(strpos($req_details,"http://") !== false)||(strpos($req_details,"https://") !== false)||(strpos($req_details,$dummy_content17) !== false)||(strpos($req_details,$dummy_content18) !== false)||(strpos($req_details,$dummy_content19) !== false)||(strpos($req_details,$dummy_content20) !== false)||(strpos($req_details,$dummy_content21) !== false)||(strpos($req_details,$dummy_content22) !== false)||(strpos($req_details,$dummy_content23) !== false)||(strpos($req_details,$dummy_content24) !== false)||(strpos($req_details,$dummy_content25) !== false)||(strpos($req_details,$dummy_content26) !== false)||(strpos($req_details,$dummy_content27) !== false)||(strpos($req_details,$dummy_content28) !== false)||(strpos($req_details,$dummy_content29) !== false)||(strpos($req_details,$dummy_content30) !== false)||(strpos($req_details,$dummy_content31) !== false)||(strpos($req_details,$dummy_content32) !== false)||(strpos($req_details,$dummy_content33) !== false)||(strpos($req_details,$dummy_content32) !== false)||(strpos($req_details,$dummy_content33) !== false)||(strpos($req_details,$dummy_content34) !== false)||(strpos($req_details,$dummy_content35) !== false)||(strpos($req_details,$dummy_content36) !== false)||(strpos($req_details,$dummy_content37) !== false)||(strpos($req_details,$dummy_content38) !== false)||(strpos($req_details,$dummy_content39) !== false)||(strpos($req_details,$dummy_content40) !== false)||(strpos($req_details,$dummy_content41) !== false)||(strpos($req_details,$dummy_content42) !== false)||(strpos($req_details,$dummy_content43) !== false)||(strpos($req_details,$dummy_content44) !== false)||(strpos($req_details,$dummy_content45) !== false)||(strpos($req_details,$dummy_content46) !== false)||(strpos($req_details,$dummy_content47) !== false)||(strpos($req_details,$dummy_content48) !== false)||(strpos($req_details,$dummy_content49) !== false)||(strpos($req_details,$dummy_content50) !== false)||(strpos($req_details,$dummy_content51) !== false)||(strpos($req_details,$dummy_content52) !== false)||(strpos($req_details,$dummy_content53) !== false)||(strpos($req_details,$dummy_content54) !== false)||(strpos($req_details,$dummy_content55) !== false)||(strpos($req_details,$dummy_content56) !== false)||(strpos($req_details,$dummy_content57) !== false)||(strpos($req_details,$dummy_content58) !== false)||(strpos($req_details,$dummy_content59) !== false)||(strpos($req_details,$dummy_content60) !== false)||(strpos($req_details,$dummy_content61) !== false)||(strpos($req_details,$dummy_content62) !== false)||(strpos($req_details,$dummy_content63) !== false)||(strpos($req_details,$dummy_content64) !== false)||(strpos($req_details,$dummy_content65) !== false)||(strpos($req_details,$dummy_content66) !== false)||(strpos($req_details,$dummy_content67) !== false)||(strpos($req_details,$dummy_content68) !== false)||(strpos($req_details,$dummy_content69) !== false)||(strlen($req_details)>=700)){
	echo "Security Brench !!";
	exit;
}
//content block end
	$original_id = $_POST['from'];
	//Yahoo id converted to mipl
    if(($split_from[1]=='yahoo.com')||($split_from[1]=='ymail.com')||($split_from[1]=='yahoo.co.in')){
		$_POST[from] = 'sagar.deshpande@mipl.co.in';
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

	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "uploads/" . $str_file_name);
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

if(isset($_POST[from]))
{
 
// echo $WebsiteUrl;
if (!empty($WebsiteUrl))
{	
	$Website	= split("/",$WebsiteUrl);	

// echo $Website[2];

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

//echo "<br/>".$ref_url ."" . $Ip; 

if(($ref_url=="forgefittingsindia.com")||($ref_url == "www.skypacktechnology.com")||($ref_url == "skypacktechnology.com")||($ref_url == "hyconindia.com")||($ref_url == "britomatics.com")||($ref_url == "www.britomatics.com")||($ref_url == "www.tansa.co.in")||($ref_url == "www.rokaderototechniks.com")||($ref_url == "rokaderototechniks.com")||($ref_url=="opelenergysystems.com")||($ref_url=="shrijeelifestyle.com")||($ref_url=="www.shrijeelifestyle.com")||($ref_url=="www.preciweigh.com")||($Ip == "103.21.59.28")||($Ip == "63.141.241.237")||($Ip == "174.127.104.94")||($Ip == "192.227.90.91")||($Ip == "192.227.85.170")||($Ip == "192.227.108.55")||($Ip == "192.227.117.41")||($Ip == "192.227.65.65")||($Ip == "203.197.88.54")||($Ip == "74.124.215.254")||($Ip == "43.240.65.62")||($Ip == "216.150.76.187")||($Ip == "203.199.149.73")||($Ip == "115.112.176.46")||($Ip == "203.199.149.87")||($Ip == "50.87.111.126")||($Ip == "203.199.149.79")||($Ip == "203.199.149.84")||($Ip == "115.112.176.48")||($Ip == "203.199.149.94")||($Ip == "72.35.82.214")||($Ip == "115.112.176.21")||($Ip == "176.9.177.170")||($Ip == "192.185.119.102")||($Ip == "182.50.149.1")||($Ip == "103.53.42.49")||($Ip == "111.118.212.66")||($ref_url=="mechspares.com") ||($ref_url=="www.mechspares.com")||($ref_url=="www.datarnutra.in")||($ref_url=="datarnutra.in")||($ref_url=="www.precihole.com")|| ($ref_url=="www.precihole.co.in")|| ($ref_url=="precihole.com") || ($ref_url=="precihole.co.in") || ($ref_url=="www.aaskdam.com")|| ($ref_url=="aaskdam.com") || ($ref_url=="www.specialty-films.com")|| ($ref_url=="specialty-films.com")|| ($ref_url=="www.finegrouptest.com")|| ($ref_url=="www.shrikanchanhotels.com") || ($ref_url=="shrikanchanhotels.com") || ($ref_url=="finegrouptest.com") || ($ref_url=="www.shreemanjunath.com")|| ($ref_url=="shreemanjunath.com") || ($ref_url=="www.tscindia.com")|| ($ref_url=="tscindia.com") || ($ref_url=="www.annapurnatrollies.com")||($ref_url=="annapurnatrollies.com")||($ref_url=="mastergrind.com")||($ref_url=="www.mastergrind.com")||($ref_url=="etind.com")||($ref_url=="www.etind.com")||($ref_url=="endelweighing.com")||($ref_url=="ramsukh.com")||($ref_url=="www.ramsukh.com")||($ref_url=="www.endelweighing.com")||($ref_url=="dubaiweighing.com")||($ref_url=="www.dubaiweighing.com")||($ref_url=="maharashtradirectory.com")||($ref_url=="www.maharashtradirectory.com")||($ref_url=="gujaratdirectory.com")||($ref_url=="www.gujaratdirectory.com")||($ref_url=="internationalsprings.com")||($ref_url=="www.internationalsprings.com")||($ref_url=="acmeindia.com")||($ref_url=="www.acmeindia.com")||($ref_url=="orioleindia.com")||($ref_url=="www.orioleindia.com")||($ref_url=="www.ceeama.com")||($ref_url=="sumkosys.com")||($ref_url=="www.sumkosys.com")||($ref_url=="apollo.co.in")||($ref_url=="usedcnc.in")||($ref_url=="www.usedcnc.in")||($ref_url=="taspowertek.com")||($ref_url=="www.taspowertek.com")||($ref_url=="nkfilter.com")||($ref_url=="www.nkfilter.com")||($ref_url=="sbtispares.com")||($ref_url=="www.sbtispares.com")||($ref_url=="marketdynamicsindia.com")||($ref_url=="www.marketdynamicsindia.com")||($ref_url=="mescspares.com")||($ref_url=="www.pelwrap.com")||($ref_url=="pelwrap.com")||($ref_url=="www.mescspares.com")||($ref_url=="www.grgdetox.com")||($ref_url=="grgdetox.com")||($ref_url=="www.trinityfiltration.in")||($ref_url=="trinityfiltration.in")||($ref_url=="www.signsmithdisplays.com")||($ref_url=="signsmithdisplays.com")||($ref_url=="nirmalhealthcare.com")||($ref_url=="www.nirmalhealthcare.com")||($ref_url=="microsetcontrols.com")||($ref_url=="www.microsetcontrols.com")||($ref_url=="www.phoenixrefrigeration.co.in")||($ref_url=="phoenixrefrigeration.co.in")||($ref_url=="vedhtechno.com")||($ref_url=="www.vedhtechno.com")||($ref_url=="spectrumpaints.net")||($ref_url=="www.dkpharmachem.com")||($ref_url=="dkpharmachem.com")||($ref_url=="spraytechindia.com")||($ref_url=="www.spraytechindia.com")||($ref_url=="www.spectrumpaints.net")||($ref_url=="nexgapparels.com")||($ref_url=="www.nexgapparels.com")||($ref_url=="www.spraytechindia.com")||($ref_url=="www.excellentprinters.in")||($ref_url=="tristarindia.com")||($ref_url=="www.tristarindia.com")||($ref_url=="dishalaser.com")||($ref_url=="www.dishalaser.com")||($ref_url=="www.tridentlabortek.com")||($ref_url=="www.npsengineering.com")||($ref_url=="npsengineering.com")||($ref_url=="www.labindialabs.com")||($ref_url=="labindialabs.com")||($ref_url=="www.xlr.co.in")||($ref_url=="xlr.co.in")||($ref_url=="herambmusic.in")||($ref_url=="www.herambmusic.in")||($ref_url=="www.googleweblight.com")||($ref_url=="www.measurewel.com")||($ref_url=="www.powerjac.com")||($ref_url=="powerjac.com")||($ref_url=="www.greenmagic.co.in")||($ref_url=="greenmagic.co.in")||($ref_url=="www.veroalfa.com")||($ref_url=="veroalfa.com")||($ref_url=="taspowertek.com")||($ref_url=="www.taspowertek.com")||($ref_url=="www.aquaproducts.in")||($ref_url=="www.nexgapparels.com")||($ref_url=="nexgapparels.com")||($ref_url=="aquaproducts.in")||($ref_url=="www.shreejiaqua.com")||($ref_url=="shreejiaqua.com")||($ref_url=="www.wspcranes.com")||($ref_url=="wspcranes.com")||($ref_url=="www.techexpertindia.com")||($ref_url=="techexpertindia.com")||($ref_url=="www.spavengineers.in")||($ref_url=="spavengineers.in")||($ref_url=="www.tridentlabortek.com")||($ref_url=="tridentlabortek.com")||($ref_url=="www.bhagininiveditabank.com")||($ref_url=="bhagininiveditabank.com")||($ref_url=="www.sunshinewallputty.com")||($ref_url=="elenoenergy.com")||($ref_url=="www.elenoenergy.com")||($ref_url=="sunshinewallputty.com")||($ref_url=="www.elenoenergy.com")||($ref_url=="www.swastikcosmetology.in")||($ref_url=="swastikcosmetology.in")||($ref_url=="www.cfodirect.in")||($ref_url=="cfodirect.in")||($ref_url=="hiver.co.in")||($ref_url=="www.kkcans.com")||($ref_url=="kkcans.com")||($Ip == "103.86.176.2")||($Ip == "149.56.66.205")||($Ip == "perfectfiltra.com")||($Ip == "166.62.28.86") || ($ref_url=="symetrix.in") || ($ref_url=="www.symetrix.in")|| ($Ip == "113.193.8.210")|| ($ref_url=="www.nikamironsintered.com")|| ($ref_url=="www.perfect-ventures.com")|| ($Ip == "nikamironsintered.com")||($ref_url=="preciweigh.com")||($ref_url=="www.preciweigh.com")||($ref_url=="www.ktechadditives.com")||($ref_url=="ktechadditives.com")||($ref_url=="www.radioelectricindia.com")||($ref_url=="www.rdgroupindia.com")||($ref_url=="rdgroupindia.com")||($ref_url=="ratecktraining.com")||($ref_url=="www.ratecktraining.com")||($ref_url=="www.ras-tek.com")||($ref_url=="www.charuintegrity.com")||($ref_url=="charuintegrity.com")||($ref_url=="ras-tek.com")||($ref_url=="www.pousse.in")||($ref_url=="www.pousse.in")||($ref_url=="www.shreewatertech.com")||($ref_url=="www.tscomprozone.com")||($ref_url=="www.sreecycleplast.com")||($ref_url=="www.madhuvanfarms.com")) 
	{
	
		$from				 = "$_POST[from]";
		$countAt			 = strpos($from,"@",1);
		$countDot			 = strpos($from,".",1);
		
		if (($countAt > 0)&&($countDot > 0)) 
		{
		
		
			// --- Query To Check Url Is Already Exist --- //
			
			// to do get the domain name from $_POST[from] and compare it with $Website and if it is same then exit.
		
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
										if($_POST['category']!="Adornn Products")
										{
											$bodymail=$bodymail."Type Of Work :  ". $thisValue. "\n <br/><br/>";
										}
									}
									else
									if(($thisField=='Choose_Painting'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										if($_POST['category']!="Adornn Products")
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
									 	$services= $_POST['Add_On_Services'];
										$str_service="";
										   foreach ($services as $service=>$value) {
										              $str_service=$str_service.$value.",";
										        }

										if($_POST['category']!="Adornn Products")
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

				// ---- Send Mail 

					$redirect_url_from	 = "$_POST[redirect]";
					$emailsubject		 = "$_POST[subject]";
					$recipient		 = "$_POST[recipient]";
					$from			 = "$_POST[from]";
					//$requirement_details = "$_POST[requirement_details]";
					$emailfromname	 = "$_POST[contact_person]";

				    $emailto	= "$recipient";      
				    $emailfromaddr	= "$from"; 
				    $emailsubject	= "$emailsubject"; 



				        
	//$emailbody = "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($ref_url)\n\n<br/>";

	    if(($emailsubject=="Enquiry From Catalog")||($emailsubject=="Enquiry From Maharashtra Directory Catalog"))
		{

// Removed Website address from Feedback Form on 25th Dec.2014. Told By Sandeep Gavas & Reverted Back on 17th March 2015

		$emailbody .= "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($redirect_url_from)\n\n<br/>";
		
//                $emailbody = "Following Are The Details Of The FeedBack Form Submited From Your WebSite. \n\n<br/>";
		}
		else
		{

// Removed Website address from Feedback Form on 25th Dec.2014. Told By Sandeep Gavas & Reverted Back On 17th March 2015

		$emailbody .= "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($ref_url)\n\n<br/>";     
//		$emailbody = "Following Are The Details Of The FeedBack Form Submited From Your WebSite. \n\n<br/>";     
		}
		$emailbody .= "<br/><br/>"; 
	    $emailbody .= "$bodymail"; 


	//// for email attachment

if($_FILES["file"]["name"]!="")
{
$fileatt = "uploads/" . $str_file_name;// Path to the file
$fileatt_name =  $str_file_name;// Filename that will be used for the file as the attachment
}

$fileatt_type = "application/octet-stream"; // File Type
$email_from = $_POST["from"];// Who the email is from
$email_subject = $_POST[subject] ; // The Subject of the email

// Removed MahaTech-App icon on 17th March 2021 By Sagar //
$emailbody .= "<br/>This enquiry comes to you through Maharashtra Industries Directory's unique Web Service<br>";

// <br/> <br/><div>Participate in Asias Most Trusted an Exclusively Industrial Exhibition MAHATECH From 10th-13th February 2022 at Pune & 9th-12th December 2022 at Vadodara.<br/><br/> <a href='https://www.maha-tech.com/stall-enquiry.php'>Book</a>&nbsp;Your Stall Now.<br />
// <br /></div>";

$emailbody .= " .\n";  
					
$email_message =  $emailbody;	

$email_to = $_POST[recipient]; // Who the email is to


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
//"Content-Disposition: attachment;\n" .
//" filename=\"{$fileatt_name}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data .= "\n\n" .
"--{$mime_boundary}--\n";

}
else
{
 
$headers = "From: $emailfromname <$emailfromaddr>\n"; 
$headers .= "Content-Type:text/html\r\n"; 
$headers .= "Reply-To: $original_id\n";
//$headers .= "Bcc: enquiry@mahapage.com\n";

}

					  

				$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
				$emailheaders .= "Content-Type:text/html\r\n"; 
				$emailheaders .= "Reply-To: $original_id\n";
				
				if($ref_url == 'www.akshatautomation.com'){

			    	$emailheaders .= "Bcc: midseonew@maharashtradirectory.com\n";
			    	$emailheaders .= "Bcc: sabsealag@gmail.com\n";
			    					}
				    				    				  	
					//$emailheaders .= "Content-Type: text/plain\n";

					//echo $emailto;
					//echo $emailheaders;					
					
					$address			 = "$_POST[Address]";
					
					if($address!="")
					{		
						//$address			 = "$_POST[Address]";
						$countHref			 = strpos($address,"<a href=");
						if ($countHref === false)
						{
							$countHref			 = strpos($address,"http://");
						}
						if ($countHref === false)
						{
							$countHref			 = strpos($_POST[requirement_details],"<a href=");
						}
						if ($countHref === false)
						{
							$countHref			 = strpos($_POST[requirement_details],"http://");
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

			// Query To Update Hits.	
				
			$update_query="update referrer set hits='$hits' where id='$id'";
			$result1 =@mysql_db_query($database,"$update_query",$connect);
		
			if (!$result) { echo("ERROR: " . mysql_error() . "\n$update_query\n"); }
				
			mysql_close();			
		
								
		}
	}
	else
	{
			$emailsubject		 = "$_POST[subject]";
			$recipient	         = "$_POST[recipient]";
			$from		         = "$_POST[from]";
			$emailfromname		 = "$_POST[contact_person]";

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
										if($_POST['category']!="Adornn Products")
										{
											$bodymail=$bodymail."Type Of Work :  ". $thisValue. "\n <br/><br/>";
										}
									}
									else
									if(($thisField=='Choose_Painting'))
									{
										$thisValue = $HTTP_POST_VARS[$thisField];
										$thisField ."  :  ". $thisValue;
										if($_POST['category']!="Adornn Products")
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
									 	$services= $_POST['Add_On_Services'];
										$str_service="";
										   foreach ($services as $service=>$value) {
										              $str_service=$str_service.$value.",";
										        }

										if($_POST['category']!="Adornn Products")
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
		$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
	    $emailheaders .= "Reply-To: $original_id\n";
		$emailheaders .= "X-Priority: 1\n"; // Urgent message!
				
		// This sends the email in html and plain text
		$emailbody .= "This enquiry comes to you through Maharashtra Industries Directory's unique Web Service .\n\n\n";        
		$emailbody .="This mail Comes From Other Server Url Is ($ref_url) And Ip ($Ip).\n"; 
	    $emailbody .= "\nFollowing Are The Detail :\n\n"; 

		//here the email body is inserted
		$emailbody .="\n".$bodymail."\n--$boundary--\n";
  		
		$mail_status = mail($emailto , $emailsubject , $emailbody , $emailheaders);
	}
	
	
	// changes made by rajiv on 27-10-2004
	If (($Ip == "203.197.88.54")||($Ip == "203.197.88.84")||($Ip == "203.199.149.79")||($Ip == "216.157.128.2")||($Ip == "203.199.149.94"))
	{		
		//---- Send SMS if SMS field is present	  ---//
		$strcellno ="$_POST[telNo]";
		$strmessage="$_POST[message]";
		if ($strmessage =="")
		{
			$strmessage="You+have+received+enquiry+from+your+website+Please+check+your+MailBox.+Maharashtra+Directory";
		}
	}


	        $emailheaders_user="";
			$emailheaders_user = "From:<$emailto>\n"; 
			$emailheaders_user .= "Reply-To: $original_id\n";					
			$emailheaders_user .= "Content-Type: text/html\n";	

			$body_user="";
			$body_user=$body_user."Dear Sir, <br/><br/>";
			$body_user=$body_user."We have registered your requirement with us and will get in touch with you shortly. <br/><br/>";
			$body_user=$body_user. $emailbody ;

			 mail($_POST[from] , "Re:Enquiry Form" , $body_user , $emailheaders_user);

			// $mailContent = '<html>
			// 	<head>
			// 	<meta http-equiv="Content-Language" content="en-us">
			// 	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
			// 	</head>
			// 	<body>
			// 	<div align="center">
			// 		<table border="0" width="876" cellspacing="0" cellpadding="0" height="643" bgcolor="#E7E9EB">
			// 			<tr>
			// 				<td>
			// 				<div align="center">
			// 					<font size="5">&nbsp;</font><table border="0" width="805" cellspacing="0" cellpadding="0" height="249" bgcolor="#FFFFFF">
			// 						<tr>
			// 							<td height="39" width="805" colspan="2" bgcolor="#F0F1F4">
			// 							<p align="center"><font face="Arial" size="2">If you 
			// 							have difficulties viewing this mail,&nbsp;<a target="_blank" href="http://demo.mahapage.com/mid/midnewsletter.htm">click 
			// 							here</a></font></td>
			// 						</tr>
			// 						<tr>
			// 							<td height="150" width="21">&nbsp;</td>
			// 							<td height="150" width="784">
			// 							<table border="0" width="100%" cellspacing="0" cellpadding="0">
			// 								<tr>
			// 									<td width="49">&nbsp;</td>
			// 									<td>
			// 									<img border="0" src="http://demo.mahapage.com/mid/mid-newsletter-header.jpg" width="667" height="136"></td>
			// 								</tr>
			// 							</table>
			// 							</td>
			// 						</tr>
			// 						<tr>
			// 							<td width="22" height="27">&nbsp;</td>
			// 							<td width="784" height="27"><hr></td>
			// 						</tr>
			// 						<tr>
			// 							<td width="22">&nbsp;</td>
			// 							<td width="784">
			// 							<div style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)">
			// 								<span style="font-family: Tahoma, Geneva, sans-serif; font-size: 16px">
			// 								<br>
			// 								Dear '.$_POST["contact_person"].'<br>
			// 								<br>
			// 								For '.$_POST["CompanyName"].'</span><p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); line-height: 20px">
			// 								We are a Digital Marketing Company with 40 years of 
			// 								background and a strong client base of&nbsp;<b>10000 
			// 								clients</b>.&nbsp;<br>
			// 								We design websites and promote our clients through 
			// 								our portal and through Google.</p>
			// 								<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61)">
			// 								You had sent an Enquiry to one of our client&nbsp;<a target="_blank" style="color: rgb(17, 85, 204)" href="'.$ref_url.'">'.$ref_url.'</a></p>
			// 								<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61)">
			// 								You must have reached our client through Google or 
			// 								one of our portals. We generate Good Business leads
			// 								<br>
			// 								to our clients through all digital channels.</p>
			// 								<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(81, 81, 81); line-height: 25px">
			// 								<strong>Following are few of our services.</strong></p>
			// 								<ul style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); padding-left: 0px">
			// 									<li style="margin-left: 15px">&nbsp; Responsive and 
			// 									Dynamic Website Designing and hosting.</li>
			// 									<li style="margin-left: 15px">&nbsp; PHP / CMS Based 
			// 									websites.</li>
			// 									<li style="margin-left: 15px">&nbsp; Search Engine 
			// 									Optimization with assured Top Ranking and 
			// 									maintaining throughout the year.</li>
			// 									<li style="margin-left: 15px">&nbsp;Sponsored 
			// 									advertisement.</li>
			// 									<li style="margin-left: 15px">&nbsp;Mailing Service.</li>
			// 									<li style="margin-left: 15px">&nbsp;Social Media.</li>
			// 									<li style="margin-left: 15px">&nbsp;Android and IOS 
			// 									App development.</li>
			// 									<li style="margin-left: 15px">&nbsp;Live Chat Tracker 
			// 									service.</li>
			// 								</ul>
			// 							</div>
			// 							</td>
			// 						</tr>
			// 						<tr>
			// 							<td width="22" rowspan="3">&nbsp;</td>
			// 							<td width="784"><hr></td>
			// 						</tr>
			// 						<tr>
			// 							<td width="784">
			// 							<div style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: small; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255)">
			// 								<p style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); font-weight: bold; margin-top: 20px">
			// 								If you want to avail our services we are happy to 
			// 								talk to you. Please feel free to Contact</p>
			// 								<table border="0" width="764" height="98" cellspacing="0" cellpadding="0">
			// 									<tr>
			// 										<td width="13">&nbsp;</td>
			// 										<td width="301"><b>Mr.S.N.Shinde</b><br>
			// 										<font size="2">Cell: 9004096935&nbsp;<br>
			// 										Pune,Sangli,Satara, Nashik, Kolhapur, 
			// 										Aurangabad<br>
			// 										</font>
			// 										<a target="_blank" style="color: rgb(17, 85, 204); font-weight: 700" href="mailto:E-mail:snshinde@mipl.co.in">
			// 										<font size="2">E-mail:snshinde@mipl.co.in</font></a></td>
			// 										<td width="14">&nbsp;</td>
			// 										<td width="214"><b>Mr. Vasant B. Mali</b><br>
			// 										<font size="2">Cell: 9004096913&nbsp;<br>
			// 										Thane, Mumbai, Navi Mumbai<br>
			// 										</font>
			// 										<a target="_blank" style="color: rgb(17, 85, 204); font-weight: 700" href="mailto:E-mail:vasant.mali@mipl.co.in">
			// 										<font size="2">E-mail:vasant.mali@mipl.co.in</font></a></td>
			// 										<td width="9">&nbsp;</td>
			// 										<td width="213"><b>Mr.Yogesh Modi</b><br>
			// 										<font size="2">Cell: 9824013375&nbsp;<br>
			// 										Ahmedabad, Gujarat<br>
			// 										</font>
			// 										<a target="_blank" style="color: rgb(17, 85, 204); font-weight: 700" href="mailto:E-mail:yogesh.modi@mipl.co.in">
			// 										<font size="2">E-mail:yogesh.modi@mipl.co.in</font></a></td>
			// 									</tr>
			// 								</table>
			// 							</div>
			// 							<p style="font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(61, 61, 61); font-weight: bold; margin-top: 20px; background-color: rgb(255, 255, 255)">
			// 							Happy Association,&nbsp;<br>
			// 							<span style="font-family: Tahoma, Geneva, sans-serif; font-size: 14px; color: rgb(194, 19, 6); font-weight: bold; margin-top: 20px">
			// 							Team MID</span></td>
			// 						</tr>
			// 						<tr>
			// 							<td width="784">&nbsp;</td>
			// 						</tr>
			// 					</table>
			// 					<p><font size="1">&nbsp;</font></div>
			// 				</td>
			// 			</tr>
			// 		</table>
			// 	</div>
			// 	</body>
			// 	</html>';

			// $headers="";			
			// $headers .= "MIME-Version: 1.0" . "\r\n"; 
			// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
			// $headers .= "Reply-To: ccare@mipl.co.in\n";
			// $headers .= "From: ccare@mipl.co.in\n";

			// mail($_POST[from], "Grow Your Bussiness with MID", $mailContent, $headers);

?>	 	
<? if(($emailsubject=="Enquiry From Catalog")||($emailsubject=="Enquiry From Maharashtra Directory Catalog")){?>

<?
$str_val_redirect="";

if($_POST[redirect]!="")
{
$str_val_redirect=$_POST[redirect];

}
else
{
$str_val_redirect=$WebsiteUrl;

}

$str_str=str_replace("http://","",$WebsiteUrl);

$str_opp=split("/",$str_str);	

$str_new_catalog_path="http://".$str_opp[0]."/".$str_opp[1]."/".$str_opp[2];
			
?>
<META HTTP-EQUIV=Refresh CONTENT="5; URL='<?=$str_new_catalog_path?>'">
<? } else {?>
<META HTTP-EQUIV=Refresh CONTENT="5; URL='http://<?=$Website[2]?>'">
<?}?>

<body>


<?	/*	Added on - 16-04-2010, Hemant Ganpule	*/


	$myCompanyName ="$_POST[CompanyName]";
	$myContactPerson ="$_POST[contact_person]";
	$myCity ="$_POST[City]";
	$mycountry ="$_POST[country]";
	$myTelNo ="$_POST[telNo]";
        $myemail="$_POST[from]";
        $req="$_POST[requirement_details]";
        $myaddress="$_POST[Address]";
        $mystate="$_POST[state]";
        $mydesignation="$_POST[Designation]";       
        $mypincode="$_POST[Pincode]";

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
        
        <? if(($emailsubject=="Enquiry From Catalog")||($emailsubject=="Enquiry From Maharashtra Directory Catalog")){?>
        
         <p align="center"><font color="#000080" size="1" face="Verdana">Now you
        are being redirected to Homepage of <b><?=$str_new_catalog_path?></b></font>
        
        <? } else {?>
        
        <p align="center"><font color="#000080" size="1" face="Verdana">Now you
        are being redirected to Homepage of <b><?=$Website[2]?></b></font>
        <?}?>
        
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
	$emailsubject		 = "$_POST[subject]";
	$recipient			 = "$_POST[recipient]";
	$from				 = "$_POST[from]";
	$emailfromname		 = "$_POST[contact_person]";

    $redirect_url_from		 = "$_POST[redirect]";
    
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
    if(($emailsubject=="Enquiry From Catalog")||($emailsubject=="Enquiry From Maharashtra Directory Catalog"))
    {
    $emailbody = "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($redirect_url_from)\n\n";       
    }
    else
    {
	$emailbody = "Following Are The Details Of The FeedBack Form Submited From Your WebSite. ($ref_url)\n\n";     
	}
	
    $emailbody .= "$bodymail"; 
	$emailbody .= "\n\nThis Email comes to you through Maharashtra Industries Directory's DVD-ROM .\n";        
		
	$emailheaders = "From: $emailfromname <$emailfromaddr>\n"; 
    $emailheaders .= "Reply-To: $original_id\n";
    $emailheaders .= "Bcc: dotcom@mahapage.com\n"; 
	$emailheaders .= "Content-Type: text/plain\n";

		$from_dvd				 = "$_POST[from]";
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
	echo "Invalid Captcha Details..!!";
}
}else{
	echo "Security Breach...............!!!!!!!";
}
?>