<?php
	class googleCustomSearch
	{
	
		/**
		 *	@var string its the search type you are doing, uselegal, uslegalforms, or the freebee
		 */
		 
		var $search_type = '';
		
		


		
		/**
		 *	@var string If you want to limit your site search.
		 */
		
		var $as_sitesearch = '';
		
		function googleCustomSearch()
		{
			//empty constructor
		}
		
		
		
		/**
		 *	//bold all the search terms for the URL
		 *
		 *	
		 *	@param string - input string to be cleaned
		 *	@return - input string stripped of html character,+,/, and the site keyword used for site search
		 */
		
		function boldSearchTerms($url,$terms)
		{
		
	
		$theurl = $url;
		
		$theurl = str_replace($terms,"<strong>" .$terms . "</strong>",$theurl);
		
		$individualSearchTerms = explode(' ',$terms);
		
		foreach ($individualSearchTerms  as $term)
		{
		
		
		$theurl = str_replace($term,"<strong>" .$term . "</strong>",$theurl);
		
		
		
		}
		
			
			return $theurl;
		}
		
		
		/**
		 *	//a handy function to clean the inputs from a search query
		 *
		 *	
		 *	@param string - input string to be cleaned
		 *	@return - input string stripped of html character,+,/, and the site keyword used for site search
		 */
		
		function cleanInput($input)
		{
		
			 $input = strip_tags($input);
		
			//$input = preg_replace('/[^a-zA-Z0-9\s]/', '', $input);
			$input = str_replace(" ","+",$input);
			$input = str_replace("++","+",$input);
		    $input = str_replace("/"," ",$input);
			
			
		   $pos = strrpos($input, "site:");
		
		
		
			if ($pos != false) { // its found
		
		
			$input = substr_replace($input, ' ', $pos, strlen($input));
			
			
		}
			
			 $input	= urldecode($input);
		 
		
			
			return $input;
		}
		
				/**
		 *	Calls google and gets the XML feed for the search term. Keep in mind there are 2 different 
		 *  searchs and its limited by the instance search_type variable.
		 *
		 *	
		 *	@param searchterms - string -  what they searched 
		 *  @param start - int -  starting location (1, 10,20) returns starting loc + 10 results
		 *	@return - input string stripped of html character,+,/, and the site keyword used for site search
		 */

		function getXML($searchterms,$start)
		{
		    
		
			
			//the unique identifier for this Google Custom Search
			$cseNumber = 'w'; // CHANGE ME!!!!!!  this won't work otherwise
			
			
			//real google string
			//http://www.google.com/cse?cx=001866675113529353458%3Aa1bz6zacbow&client=google-csbe&output=xml_no_dtd&q=query+terms
			 if ($searchterms === '') return; 
			//if its a site search limit 
		
			 if ($this->as_sitesearch)
			 {
			   $xmlfile = 'http://www.google.com/cse?cx='.$cseNumber.'&client=google-csbe&output=xml_no_dtd&q='.$searchterms . '&start='.$start.'&num=10&ie=utf8&oe=utf8&as_sitesearch=' . $this->as_sitesearch;
			
			}
			else
			{
				 $xmlfile = 'http://www.google.com/cse?cx='.$cseNumber.'&client=google-csbe&output=xml_no_dtd&q='.$searchterms . '&start='.$start.'&num=10&ie=utf8&oe=utf8';
			
			}
			
			//echo $xmlfile;
			
		
			$xml = simplexml_load_file($xmlfile);
			
			
		

			return $xml;
		}
		
		//get estimated total number of results.  this is awfully inaccurate until you're on the final page
		//so it's only useful for working out whether there is a next page or not, rather than "results 1-10 of 417
		function getTotalResults($xml)
		{
		     $total = '';
		    if ($xml){
			$total = $xml->RES->M;
			}
			
			
			return $total;
		}
		
		//total number of results for this page
		function getPageTotal($xml)
		{
		if ($xml){
			return count($xml->RES->R);
		}
		return '';
		}
		
		
		//writes out the cool "next" "previous"
		function writePagination($totalnum, $total, $start, $searchterms)
		{
			echo '<div class="pagination">';
			
			
			
			//if there you have a full 10 results on the page
			if($total >= 10)
			{	
				//if we're not at the start
				if($start != 0)
				{
					echo '<a  href="?s='.($start -10).'&q='.$searchterms.'&search_type='.$this->search_type . '"><strong>&lt; Previous Page</strong></a>';
					echo '&nbsp;&nbsp;';
					
				}					
				//if where you started + 10 is NOT equal to the total number of results
				if(($start + 10) != $totalnum)
				{
					echo '<a  href="?s='.($start +10).'&q='.$searchterms.'&search_type='.$this->search_type . '"><strong>Next Page &gt;</strong></a>';
				
				}
			}
			
			
			echo '<br><br></div>';
			
		}
		
		/**
		 *	Writes out the serach results. takes a string of XML from the google API
		 *
		 *	
		 *	@param XML - string -  the xml feed from google
		 *  
		 */
		function writeSearchResults($xml,$terms)
		{



$output = '';
		
			$i = 0;
			
			if (empty($xml))return;
			if (empty($xml->RES->R)) return;
			if (empty($terms)) return;
			
			foreach ($xml->RES->R as $key)
			{
			
			
				 $i++;
			 
			    //if its a odd numer result dont put a gradient backgroud 
				if ( $i&1 )
				{
				 $output .= '<div><p>';
				}
				else
				{
				
				$output .=  '<div class="even"><p>';
				}
				

				   
				 $output .= ' <a   href="'.$key->U.'">'.$key->T.'</a><br \> <br\> ' ;
				 $output .= $key->S.'<br />';
				
				 $url =  $this->boldSearchTerms($key->U,$terms);
				
				//$output .= '<span>'.$key->U.'<span>';
				 $output .= '<span>'.$url.'<span>';
				 $output .= '</p></div>';
				
			}
			

			echo $output;
			
			
		}
		
		//"did you mean..."
		function writeSuggestion($xml)
		{
		
		
		    $search_term = '';
		    $suggestion = '';
	        if ($xml){
   		
			$searchterm = $xml->Q;
			$suggestion = $xml->Spelling->Suggestion;
			
			
			$searchterm = $this->cleanInput($searchterm);
			$suggestion = $this->cleanInput($suggestion);
			}
			
					

					
			if($suggestion != "")
					echo '<p align = "left" style="padding-left:100px;color: #800040;">You searched for <strong>'.($searchterm).'</strong>, did you mean <strong><a href="?q='.$suggestion.'&searchtype=' . $this->search_type . '">'.$suggestion.'</a></strong>?</p>';
		}
		
		
		
		
		
		
		
		
		 //sets the menu to the correct choice depending on what search they are using
		function setMenu()
		{
		
		
			echo '<script type="text/javascript" >';
		
			
			
			if ($this->search_type === 'free')
			{
 			
			echo 'document.getElementById("uslegal_searchbox_uslegal").style.display = "none";';
			echo 'document.getElementById("uslegal_searchbox_uslegalforms").style.display = "none";';
			echo 'document.getElementById("uslegal_searchbox_web").style.display = "block";';
			echo '</script>';
			return;
			
			}
			
			
			if ($this->search_type === 'uslegalforms')
			{
 			

			 
			echo ' document.getElementById("uslegal_searchbox_uslegal").style.display = "none";';
			echo 'document.getElementById("uslegal_searchbox_uslegalforms").style.display = "block";';
			echo 'document.getElementById("uslegal_searchbox_web").style.display = "none";';
			 
			 echo '</script>';
			return;
			}
			if ($this->search_type === 'answers')
			{
 			

			 
			echo 'document.getElementById("uslegal_searchbox_uslegal").style.display = "none";';
			echo 'document.getElementById("uslegal_searchbox_uslegalforms").style.display = "none";';
			echo 'document.getElementById("uslegal_searchbox_answers").style.display = "block";';
			echo 'document.getElementById("uslegal_searchbox_web").style.display = "none";';
			 
			 echo '</script>';
			return;
			}
			
			//default it to us legal
			echo 'document.getElementById("uslegal_searchbox_uslegal").style.display = "block";';
			echo 'document.getElementById("uslegal_searchbox_uslegalforms").style.display = "none";';
			echo 'document.getElementById("uslegal_searchbox_web").style.display = "none";';
			echo '</script>';
			
		
			
		
		}
		

		
		
		//this does all the work just follow the comments down
		//$terms - are the search terms passed in
		//$s = starting position
		//was the query for pages
		
		function writeXMLSearchForm($terms,$s,$q)
		{
		
		echo '<div class = "searchresult">';
		
	
		//if the start number was is  there set it
		if($s){
			$start = (int) $s;
		}
		else {
			$start = 0;
		}
	
	      
		
		//if the query was querystringed through (for pagination purposes)
		if($q)
		{
			$terms = $this->cleanInput($q);
		}
		
       

		//get the XML 
		$xml = $this->getXML($terms,$start);
		
		
		
		
	
		
		//get the number of results on this page
		$total = $this->getPageTotal($xml);
		
		
		
		//get the *ESTIMATED* total results not alwaya accuracte
		$totalnum = $this->getTotalResults($xml);
		
	
		//to show the Y of "showing results x - y"
		$displaytotal = $total + $start;
		
		if($displaytotal != 0)
			echo '<p style = "text-align:left"><strong>Viewing results '.($start+1).' - '.$displaytotal.' out of ' . $totalnum . '</strong></p>';
		
		//suggestions
		$this->writeSuggestion($xml);
	
	
		//write search results
		$this->writeSearchResults($xml,$terms);
		
		//write the pagination
		$this->writePagination($totalnum, $total, $start, $terms);
		
		
		//if there were no records and there were search terms tell them oh my! 
		//commented out its annoying and I hate it
		if($total == 0)
		{
			//echo '<p align = "left" style="padding-left:100px" ><strong><center><p>Sorry, there were no results.</p><center><strong></p>';
		}


		echo '</div>';
			
	}

	
		
	}
?>