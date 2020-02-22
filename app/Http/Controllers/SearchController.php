<?php 

include("Controller.php");

class SearchController extends Controller
{
	# Read = R
	public function getSearchResult($keyword)
	{	
		$query = "";

		$query->query($query);
		
		$totalRows = $query->rowCount();
		
		if($totalRows > 0)
			return $gotData;
		else
			return false;
	}
	
}