<?php
class Mgeneral extends CI_Model {

   
   function __construct()
   {
        // Call the Model constructor
        parent::__construct();
   }
	
	function list_category(){
			   // $sql = "SELECT building_category,count(*) total from gicdb_sfj_building group by building_category union SELECT 'All' building_category,count(*) total from gicdb_sfj_building";
				//$query = $this->db->query($sql);
				//$chart = array();
				//foreach ($query->result_array() as $rs)
				//{
				//	$chart[] = $rs;
				//}
				
				//$chart = "halo";		
				

				$results = $this->mongo_db->where_gte('quantity', 9)->get('items');
				foreach($results as &$q)
					{
						unset($q['_id']);
					}

					
				return $results;
	}
		
	
}
?>