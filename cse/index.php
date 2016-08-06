<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>CSE test</title>




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
</div>
 
  
<div class="content">
<div class="highlight-version"> 
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

	




</body>
</html>

