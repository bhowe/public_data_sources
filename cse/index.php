<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>USLegal, Inc.</title>

<link rel="stylesheet" href="http://media.uslegal.com/css/blue-style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://media.uslegal.com/css/blue-content.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://media.uslegal.com/css/microformat.css" type="text/css" media="screen" />
 
 
<script language="JavaScript" type="text/javascript" src="http://media.uslegal.com/js/uslf2.js"></script>
<!--nav script-->
<script type="text/javascript" src="http://media.uslegal.com/js/subnav.js"></script>
<!--nav script-->
 
<link rel='shortcut icon' href='http://media.uslegal.com/images/favicon.ico' type='image/x-icon' />



<?php

//set up the class, grab the search terms, them clean them up
include 'googleCustomSearch.php';
	
$cs = new googleCustomSearch();

$searchterms = '';
if (isset($_GET['q'])) {
$searchterms = $_GET['q'];
}

$searchterms = $cs->cleanInput($searchterms);


?>

<script type="text/javascript" >


//hide and undhide the divs to display the different search boxs
function switchsearchbox(box) {
	
	//ignore the errors 
try
{
	document.getElementById('search-results').innerHTML = '';
	
	document.getElementById('cse-search-results').innerHTML = '';
	  }
catch(err)
  {
  //Handle errors here
  }
  
	document.getElementById("uslegal_searchbox_uslegal").style.display = "none";
	document.getElementById("uslegal_searchbox_uslegalforms").style.display = "none";
	document.getElementById("uslegal_searchbox_answers").style.display = "none";
	document.getElementById("uslegal_searchbox_web").style.display = "none";
	document.getElementById("uslegal_searchbox_"+box).style.display = "block";
	
	
	//after you set it automatically submit the form
	if (box == 'web'){
	
	document.getElementById("cse-search-box").submit();
	return;
	}
	
	if (box == 'uslegal'){

	document.getElementById("uslegalsearchbox").submit();
	return;
	}
	
	
	if (box == 'uslegalforms'){
	
	document.getElementById("uslegalformssearchbox").submit();
	return;
	}
	
	if (box == 'answers'){
	
	document.getElementById("answerssearchbox").submit();
	return;
	}
	
	return false;
}

</script>


<link href="searchBLUE.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
	<style type="text/css">
		div.rbar {width:330px;}
	</style>
<![endif]-->
</head>
 
<body  id="1">
<div id="wrapper">
<div id="header">
  	<div id="top_menu"> 
  		<a href="http://uslegal.com/" class="first">USLegal Home</a>
		<a href="http://uslegal.com/legal-topics/">Legal Topics</a>
		<a href="http://uslegal.com/uslegal-sites/">USLegal Sites</a>
		<div style="float:right;margin:0;padding:0;"><span style="min-width:160px;margin:0;padding:0;" class="first">Toll Free 1-877-389-0141</span>
			<a href="http://members.uslegal.com/" title="Your Account" style="text-align:right;">Signin</a>
			<a href="http://secure.uslegalforms.com/cgi-bin/forms/view.pl" title="View Cart">View Cart</a>
			<a href="http://help.uslegal.com/" target="_new">Contact</a>
		</div>
  	</div>
 
   	<div class="logo"><a href="/"><span>U.S. Legal Home</span></a></div>
	
	<div class="sb">
	<form id="uslegalsearchbox" action="" id="cse-search-box">
		<input type="hidden" name="cx" value="001866675113529353458:a1bz6zacbow" />
		<input type="hidden" name="search_type" value="uslegal" />
		<input name="q" id="text" value=" Search All of USLegal, Inc"  onClick="this.value=''"  type="text" onfocus="this.style.backgroundColor='white'; this.style.color='black'" />
		<input type="Button" class="flipback" onmouseover="this.className='flip'" onmouseout="this.className='flipback'" name="sa" onclick="this.form.submit()"  />
		<input type="hidden" name="cof" value="FORID:11" />
	</form>
	</div>
 
    <div id="navmenu">
		<a href="http://uslegal.com/legal-topics/">Legal Topics</a>
		<a href="http://uslegal.com/uslegal-sites/">USLegal Sites</a>
		<a href="http://uslegal.com/legal-community/">Legal Community</a>
		<a href="http://uslegal.com/products-services-for-attorneys/">For Attorneys</a>
		<a href="http://uslegal.com/builduslegal/">Build USLegal</a>
	</div>
</div>
 
<a name="back-to-top"></a>
  
<div class="content">
<div class="highlight-version"> 
	<p><span><a href="http://uslegal.com/">USLegal</a>  &raquo; Search</span></p>
</div>

	

 
<!-- begin content page.php -->	
 
<div class="content-left">
 
	<div id="content" class="narrowcolumn" role="main">
 
				
		<div class="post">
			<div class="entry">



 <!-- Begin US legal search -->
 <div id="uslegal_searchbox"> 
  
    <div class="uslegal_searchbox" id="uslegal_searchbox_uslegal" >
     
	 <div class="searchboxheaderbar"> <span>USLegal.com</span><a href="#" onclick="switchsearchbox('uslegalforms');return false;">U.S. Legal Forms</a><a href="#" onclick="switchsearchbox('web');return false;">World Wide Legal</a> 
  
    </div>
	
     <br />
	  <form id="uslegalsearchbox" action="">
        <input type="hidden" name="cx" value="001866675113529353458:a1bz6zacbow" />
		<input type="hidden" name="search_type" value="uslegal" />
        <input name="q" id="uslegalquery" class="uslegalsearchquerybox" type="text" size="40" value = "<?php echo $searchterms;?>"/>
        <input type="submit" name="sa" value="Search Uslegal" />
        <input type="hidden" name="cof" value="FORID:11" />
      </form>
  </div>
   
	 <!-- END US legal search -->
	
    <!-- Begin US legal FORMS search -->
	
    <div class="uslegal_searchbox" id="uslegal_searchbox_uslegalforms" style = "display:none">
      
	  <div class="searchboxheaderbar"> <a href="#" onclick="switchsearchbox('uslegal');return false;">USLegal.com</a><span>U.S. Legal Forms</span><a href="#" onclick="switchsearchbox('web');return false;">World Wide Legal</a> 
	  
	</div>
    <br>
		  <form id="uslegalformssearchbox" action="">
			<input type="hidden" name="cx" value="001866675113529353458:a1bz6zacbow" />
			<input type="hidden" name="search_type" value="uslegalforms" />
			<input name="q" id="uslegalforms_query" class="uslegalsearchquerybox" type="text" size="40" value="<?php echo $searchterms;?>" />
			<input type="submit" name="sa" value="Search US legal forms" />
			<input type="hidden" name="cof" value="FORID:11" />
		  </form>
    </div>
	
    <!-- END US legal forms search -->
	
    <!-- Begin ANSWERS search -->
	
    <div class="uslegal_searchbox" id="uslegal_searchbox_answers" style = "display:none">
      
	  <div class="searchboxheaderbar"> <a href="#" onclick="switchsearchbox('uslegal');return false;">USLegal.com</a><a href="#" onclick="switchsearchbox('uslegalforms');return false;">U.S. Legal Forms</a><a href="#" onclick="switchsearchbox('web');return false;">World Wide Legal</a> <span>Answers.USLegal.com</span>
	  
	</div>
    <br>
		  <form id="answerssearchbox" action="">
			<input type="hidden" name="cx" value="001866675113529353458:a1bz6zacbow" />
			<input type="hidden" name="search_type" value="answers" />
			<input name="q" id="uslegalforms_query" class="uslegalsearchquerybox" type="text" size="40" value="<?php echo $searchterms;?>" />
			<input type="submit" name="sa" value="Search Answers" />
			<input type="hidden" name="cof" value="FORID:11" />
		  </form>
    </div>
	
    <!-- END ANSWERS search -->
	
	
    <!-- Begin world wide legal  search -->
	
    <div class="uslegal_searchbox" id="uslegal_searchbox_web" style= "text-align:left;display:none;">
	  <div class="searchboxheaderbar"> <a href="#" onclick="switchsearchbox('uslegal');return false;">USLegal.com</a><a href="#" onclick="switchsearchbox('uslegalforms');return false;">U.S. Legal Forms</a><span>World Wide Legal</span>
	  
    </div>
     <br>
	 
	 
<form action="" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-6831319752508398:lpfu7qqo6ia" />
   
			<input type="hidden" name="cof" value="FORID:11" />
			<input type="hidden" name="ie" value="ISO-8859-1" />
			 <input type="hidden" name="search_type" value="free" />
			<input type="text" name="q" size="45" value="<?php echo $searchterms;?>"/>
			<input type="submit" name="sa" value="Search World Wide Legal" />
	 
  </div>
</form>

<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>


		
		<!--
		// Here are all the Variables
		
		// googleSearchResizeIframe
		// googleSearchPath
		// googleSearchQueryString
		// googleSearchFormName
		// googleSearchDomain
		// googleSearchNumAds
		// googleSearchFrameBorder
		// googleSearchIframeName
		// googleSearchFrameWidth
		// googleSearchFrameHeight
		// googleSearchFrame
		
		You can add values to all this variables in your search results box of
		code that Goog provides for you.  My results look like this:
		  var googleSearchIframeName =
		"results_004385511730049861780:wmn6s4_td1s";
		  var googleSearchFormName =
		"searchbox_004385511730049861780:wmn6s4_td1s";
		  var googleSearchFrameWidth = 714;
		  var googleSearchFrameHeight = 545;
		  var googleNumSearchResults = 5;
		  var googleSearchFrameborder = 0;
		  var googleSearchDomain = "www.google.com";
		  var googleSearchPath = "/cse"; 
		-->
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>


<div id="cse-search-results" align="left"  ></div>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
 var googleSearchFrameWidth = 550; 
  var googleSearchFrameHeight = 550; 
  var googleNumSearchResults = 5; 
  var googleSearchFrameBorder = 0; 
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

      
    </div>
	
	<!-- END world wide legal search -->

	</div> <!-- end of main div -->
<div style="clear:both;"><?php
	

	
	//blank out the site seach it default so US legal
 	$cs->as_sitesearch = '';
    $cs->search_type = '';

     if (isset($_GET['search_type'])) {
  	$cs->search_type =  $_GET['search_type'];
  	}

	$s = '';
	$q = '';
	
	
    if (isset($_REQUEST['s'])) {
    $s = $_REQUEST['s'];
    }
    
    if (isset($_REQUEST['g'])) {	
	$q = $_REQUEST['q'];
	}
    
   if ($cs->search_type === 'free')
   {
     
   // do nothing just roll on its all self containted
   }
   elseif ($cs->search_type === 'uslegalforms')
   {//USLEGALFORMS site search
	
    $cs->as_sitesearch = 'www.uslegalforms.com/*';
  	$cs ->writeXMLSearchForm($searchterms,$s,$q);
   }
    elseif ($cs->search_type === 'answers')
   {//USLEGALFORMS site search
	
    $cs->as_sitesearch = 'answers.uslegal.com/*';
  	$cs ->writeXMLSearchForm($searchterms,$s,$q);
   }
 
   else 
   { //DEFAULT TO USLEGAL if anything goes squirlly
   	 
     $cs ->writeXMLSearchForm($searchterms,$s,$q);
   
   }
	
	//this just sets it to the correct menu option when th page loads
	$cs->setMenu();
	
	
	
?></div>

</div>
 
			<br class="cl" />	
		
		
		
 
		
	
 
 
 
 
 
 
<br class="cl" />
<!-- page-sidebar.php -->
  
 
<!-- End Content -->
 
 
			</div>
 
		</div>
				
		
	</div>
</div>

<div class="content-right">
 
<div class="rbar" role="complementary">
 
 
	


		
		<div align="center"><script type="text/javascript"><!--
		google_ad_client = "pub-6831319752508398";
		/* 336x280, created 9/3/09 - Default for subs.uslegal */
		google_ad_slot = "9443350493";
		google_ad_width = 336;
		google_ad_height = 280;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script></div>
		
		
	
		<div class="fl" style="width:50%">
			<h3>Hot!</h3>
				<ul>
			<li><a href="http://answers.uslegal.com/">Answers</a></li>
			<li><a href="http://www.uslegalforms.com/">Legal Forms</a></li>
				</ul>
		</div>
		<div class="fl" style="width:50%; margin-bottom:10px;">
			<h3>Sites</h3>
				<ul>
			<li><a href="http://lawyers.uslegal.com/">Lawyers</a></li>
			<li><a href="http://services.uslegal.com/">Preparation</a></li>
				</ul>
		</div>
	
						
		<h3>USLegal Company</h3>
		<ul>
			<li><a href="http://uslegal.uslegalblogs.com/">News</a> - News, Press Releases and More</li>
			<li><a href="http://uslegal.com/builduslegal/">Join USLegal</a> - Join the USLegal Network</li>
			<li><a href="http://help.uslegal.com/" target="_new">Customer Service</a> - Get help from Customer Service</li>
		</ul>
		
<div class="gray">
	<div style="margin:5px">
		<img class="fl" src="http://media.uslegal.com/images/envelope.gif" style="margin:15px 10px 0 0" />
		<form name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post">
		<span style="font-weight: bold; font-family:Arial; font-size:16px; color:#550e00;">Get the USLegal Newsletter</span><br />
		Email: 
		<input type="text" name="ea" size="15" style="padding:0;margin:0;vertical-align:top;">
		<input type="image" src="http://media.uslegal.com/images/button_subscribe.gif" name="go"  class="submit" style="verticle-align:top" >
		<input type="hidden" name="m" value="1101086260531">
		<input type="hidden" name="p" value="oi">
		</form>
	</div>
	<div align="center" ><a href="http://www.constantcontact.com/safesubscribe.jsp" target="_blank"><img src="http://img.constantcontact.com/ui/images1/safe_subscribe_logo.gif" border="0" width="168" height="14" alt=""/></a></div>
</div>
	
 
<div align="center"><br />
	<a href="http://twitter.com/home?status=From%20@uslegal%20http://uslegal.com" target="_blank"><img src="http://media.uslegal.com/images/tweet-this-page.gif" alt="Tweet this Page!"></a>
	<a href="http://www.facebook.com/sharer.php?u=http://uslegal.com&amp;t=From @uslegal" target="_blank"><img src="http://media.uslegal.com/images/discuss-this-page.gif" alt="Share on Facebook"></a>
	<a href="http://twitter.com/uslegal/" target="_blank"><img src="http://media.uslegal.com/images/follow-us-on.gif" alt="Follow @USLegal on Twitter"></a>
	<a href="http://www.facebook.com/pages/USLegal-Taking-care-of-your-Legal-Life/158908725871?v=app_2373072738#/pages/USLegal-Taking-care-of-your-Legal-Life/158908725871?ref=ts" target="_blank"><img src="http://media.uslegal.com/images/become-a-fan.gif" alt="Become a USLegal Fan on Facebook" /></a>
</div>
 
 
	
<h3>US Legal Forms</h3>
 
	<ul>
		<li>
 
<form name="states" method="post" action="">
		<select name="state" size="1"onchange="if (this.options[selectedIndex].value != '') location.href=this.options[selectedIndex].value">
			<option value="">Browse US Legal Forms</option>
<option value="http://www.uslegalforms.com/formcategories/?state=AK&process=1&cs=no" >Alaska</option>
<option value="http://www.uslegalforms.com/formcategories/?state=AZ&process=1&cs=no" >Arizona</option>
<option value="http://www.uslegalforms.com/formcategories/?state=AR&process=1&cs=no" >Arkansas</option>
 
<option value="http://www.uslegalforms.com/formcategories/?state=CA&process=1&cs=no" >California</option>
<option value="http://www.uslegalforms.com/formcategories/?state=CO&process=1&cs=no" >Colorado</option>
<option value="http://www.uslegalforms.com/formcategories/?state=CT&process=1&cs=no" >Connecticut</option>
<option value="http://www.uslegalforms.com/formcategories/?state=DE&process=1&cs=no" >Delaware</option>
<option value="http://www.uslegalforms.com/formcategories/?state=DC&process=1&cs=no" >District of Columbia</option>
<option value="http://www.uslegalforms.com/formcategories/?state=FL&process=1&cs=no" >Florida</option>
<option value="http://www.uslegalforms.com/formcategories/?state=GA&process=1&cs=no" >Georgia</option>
<option value="http://www.uslegalforms.com/formcategories/?state=HI&process=1&cs=no" >Hawaii</option>
<option value="http://www.uslegalforms.com/formcategories/?state=ID&process=1&cs=no" >Idaho</option>
 
<option value="http://www.uslegalforms.com/formcategories/?state=IL&process=1&cs=no" >Illinois</option>
<option value="http://www.uslegalforms.com/formcategories/?state=IN&process=1&cs=no" >Indiana</option>
<option value="http://www.uslegalforms.com/formcategories/?state=IA&process=1&cs=no" >Iowa</option>
<option value="http://www.uslegalforms.com/formcategories/?state=KS&process=1&cs=no" >Kansas</option>
<option value="http://www.uslegalforms.com/formcategories/?state=KY&process=1&cs=no" >Kentucky</option>
<option value="http://www.uslegalforms.com/formcategories/?state=LA&process=1&cs=no" >Louisiana</option>
<option value="http://www.uslegalforms.com/formcategories/?state=ME&process=1&cs=no" >Maine</option>
<option value="http://www.uslegalforms.com/formcategories/?state=MD&process=1&cs=no" >Maryland</option>
<option value="http://www.uslegalforms.com/formcategories/?state=MA&process=1&cs=no" >Massachusetts</option>
 
<option value="http://www.uslegalforms.com/formcategories/?state=MI&process=1&cs=no" >Michigan</option>
<option value="http://www.uslegalforms.com/formcategories/?state=MN&process=1&cs=no" >Minnesota</option>
<option value="http://www.uslegalforms.com/formcategories/?state=MS&process=1&cs=no" >Mississippi</option>
<option value="http://www.uslegalforms.com/formcategories/?state=MO&process=1&cs=no" >Missouri</option>
<option value="http://www.uslegalforms.com/formcategories/?state=MT&process=1&cs=no" >Montana</option>
<option value="http://www.uslegalforms.com/formcategories/?state=NE&process=1&cs=no" >Nebraska</option>
<option value="http://www.uslegalforms.com/formcategories/?state=NV&process=1&cs=no" >Nevada</option>
<option value="http://www.uslegalforms.com/formcategories/?state=NH&process=1&cs=no" >New Hampshire</option>
<option value="http://www.uslegalforms.com/formcategories/?state=NJ&process=1&cs=no" >New Jersey</option>
 
<option value="http://www.uslegalforms.com/formcategories/?state=NM&process=1&cs=no" >New Mexico</option>
<option value="http://www.uslegalforms.com/formcategories/?state=NY&process=1&cs=no" >New York</option>
<option value="http://www.uslegalforms.com/formcategories/?state=NC&process=1&cs=no" >North Carolina</option>
<option value="http://www.uslegalforms.com/formcategories/?state=ND&process=1&cs=no" >North Dakota</option>
<option value="http://www.uslegalforms.com/formcategories/?state=OH&process=1&cs=no" >Ohio</option>
<option value="http://www.uslegalforms.com/formcategories/?state=OK&process=1&cs=no" >Oklahoma</option>
<option value="http://www.uslegalforms.com/formcategories/?state=OR&process=1&cs=no" >Oregon</option>
<option value="http://www.uslegalforms.com/formcategories/?state=PA&process=1&cs=no" >Pennsylvania</option>
<option value="http://www.uslegalforms.com/formcategories/?state=RI&process=1&cs=no" >Rhode Island</option>
 
<option value="http://www.uslegalforms.com/formcategories/?state=SC&process=1&cs=no" >South Carolina</option>
<option value="http://www.uslegalforms.com/formcategories/?state=SD&process=1&cs=no" >South Dakota</option>
<option value="http://www.uslegalforms.com/formcategories/?state=TN&process=1&cs=no" >Tennessee</option>
<option value="http://www.uslegalforms.com/formcategories/?state=TX&process=1&cs=no" >Texas</option>
<option value="http://www.uslegalforms.com/formcategories/?state=UT&process=1&cs=no" >Utah</option>
<option value="http://www.uslegalforms.com/formcategories/?state=VT&process=1&cs=no" >Vermont</option>
<option value="http://www.uslegalforms.com/formcategories/?state=VA&process=1&cs=no" >Virginia</option>
<option value="http://www.uslegalforms.com/formcategories/?state=WA&process=1&cs=no" >Washington</option>
<option value="http://www.uslegalforms.com/formcategories/?state=WV&process=1&cs=no" >West Virginia</option>
 
<option value="http://www.uslegalforms.com/formcategories/?state=WI&process=1&cs=no" >Wisconsin</option>
<option value="http://www.uslegalforms.com/formcategories/?state=WY&process=1&cs=no" >Wyoming</option>
</select>&nbsp;&nbsp;
		<input type="button" value="go" style="button" onClick="window.location=state.options[state.selectedIndex].value" />
			
 
<!--<input type="Button" onclick="alert('Please Choose Your State From the Dropdown Menu')" value="go" />	 -->
 
</form>
</li>
<li>Over 60,000 legal forms</li>
 
	</ul>	
	
<h3>Tools and More!</h3>
 
		<ul>
			<li><a href="http://ussearch.uslegal.com/">Find People</a> - Background, Criminal Records and More.</li>
			<li><a href="http://www.lawstore.com/">LawStore.com</a> - Buy and Sell legal products.</li>
			<li><a href="http://e-legal.com/">E-Legal Newsletters</a> - Join and receive legal newsletters.</li>
			<li><a href="http://tools.uslegal.com/">Calculators and More</a> - Child Support, Financial, etc.</li>
			
		</ul>
 
<hr />
 
<div align="center">	
 
 <img src="http://media.uslegal.com/images/web-marketing-award-winning-website.gif" 
 alt="WEB MARKETING ASSOCIATION IS PROUD TO PRESENT A 2008 WEBAWARD FOR OUTSTANDING ACHIEVEMENT IN WEBSITE DEVELOPMENT"  />
 <img src="http://media.uslegal.com/images/top10-2.gif" border=0 alt="TopTen Reviews Rates USLegal #1" >
 
</div>
<hr />
<br />


		
		</div>
	</div>	<!--/ right menu -->		

	<br style="clear:both" /><br />

<!-- /page-sidebar.php -->


 
 
 
		
		<div class="footer"> 
		
			<a class="footer-back-to-top" href="#back-to-top">top</a> 
			
			<div class="footer-address"> 
				<h5>USLegal.com</h5> 
				<address><span class="dark-gray">US Legal, Inc.</span><br />
					<a href="http://uslegal.com/">http://uslegal.com/
					<br /><br />
					<img src="http://media.uslegal.com/images/uslegal-small-logo.png"></a>
				</address> 
			</div> 
 
			
			<ul class="footer-navbar"> 
				<li><a href="http://uslegal.com/legal-topics/">Legal Topics</a> |
				<a href="http://uslegal.com/uslegal-sites/">USLegal Sites</a> |
				<a href="http://uslegal.com/legal-community/">Legal Community</a> |
				<a href="http://uslegal.com/products-services-for-attorneys/">Products &amp; Services for Attorneys</a> |
				<a href="http://uslegal.com/builduslegal/">Build USLegal</a> |
				<a href="http://uslegal.com/disclaimer/">Disclaimer</a></li>
			</ul> 
		
			<p class="copyright">&copy; Copyright 2010 US Legal, Inc</p> 
 
		</div> 
 
 
 
		
	</div> 
 
			
 

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-228575-7");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- search.uslegal separate tracking -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-228575-35");
pageTracker._trackPageview();
} catch(err) {}</script>


<!-- End Analytics -->

</body>
</html>

