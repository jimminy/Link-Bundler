<?php
class Link_model extends Model {

    function Link_model()
    {
        // Call the Model constructor
        parent::Model();
    }
    
    function get_entries($page = 0,$limit = 30)
    {	
		$this->db->order_by("id", "desc"); 
        $query = $this->db->get('array', $limit, ($page*$limit));
		$query = $query->result();
		
        return $query;
    }
	
	function insert_links($data)
	{
		$this->db->insert('array', $data);
		return;
	}
	
	function explode_links($id)
	{	
		$this->db->select('body');
		$this->db->where('id', $id);
		$query = $this->db->get('array');
		
		foreach($query->result() as $links){
			$linkbody = explode(",","$links->body");
		}
		return $linkbody;
	}
	
	function create_script($items)
	{	
		$i = 0;
		$count = count($items);
		$script = '';
		$script.='<script type="text/javascript"> var myLinks=new Array();';
		while ($count>$i){
			$script.='myLinks['.$i.']="'.$items[$i].'";';
			$i++;
		}
		$script.='</script>';
		return $script;
	}
}
