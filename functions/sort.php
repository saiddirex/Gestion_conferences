

<!DOCTYPE HTML>

<?php
	
	// sort the database according to date & time
	function sortConf($db_in = "../db/conference.xml", $db_out = "../db/conference.xml")
	{
		$xml = simplexml_load_file($db_in);
	
		// export xml data from file to an array
		$tosort_array = array();
		foreach($xml->conference as $conf)
		{
			$tosort_array[] = $conf;
		}
		
		// Array sorting : a function is defined to sort according to the date and time.
		usort($tosort_array, function($a, $b){
			$dateA = DateTime::createFromFormat(DATE_ATOM, $a->datetime);
			$dateB = DateTime::createFromFormat(DATE_ATOM, $b->datetime);
			return $dateA > $dateB;
		});
		
		$sorted_xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><conferences></conferences>');
		
		// Add the sorted array elements to a new SimpleXMLElement structure
		foreach($tosort_array as $elem)
		{
			$newChild = $sorted_xml->addChild("conference");	// Add a new child (conference)
			
			foreach($elem->attributes() as $attr => $value)		// Add the attributes of the element
			{
				$newChild->addAttribute($attr, $value);
			}
			foreach($elem->children() as $child)				// Add the sub-elements
			{
				$newChild->addChild($child->getName(), $child);
			}
		}
		
		$sorted_xml->asXML($db_out);
	}
?>