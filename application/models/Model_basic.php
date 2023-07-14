<?php

class Model_basic extends CI_Model {

    function __construct()
	{
		parent::__construct();
	}

   
    function getdata(
		$table,
		$strSelect='', 
		$strCondition='', 
		$strGroupBy='', 
		$strOrderBy='', 
		$strLimit='', 
		$strDropdown=false)
	{		
		$this->select = $strSelect;
		$this->table = $table;
		$this->condition = $strCondition;
		$this->groupby = $strGroupBy;
		$this->orderby = $strOrderBy;
		$this->limit = $strLimit;
		$this->dropdown = $strDropdown;
		$this->dropdownkey = '';
		$this->dropdownvalue = '';		
		return $this->generateQuery();
    }



    function simpandata($table,$data)
	{
		if(is_array($data))
		{
			if($this->db->insert($table, $data))
			{			
				return true;				
			}else{			
				return false;				
			}			
		}
    }

    function updatedata($table,$PARAM_set, $PARAM_conditions)
	{	
		if(!empty($PARAM_set))
		{		
			if(is_array($PARAM_conditions))
			{			
				foreach($PARAM_conditions as $STR_key => $STR_value)
				{				
					$this->db->where($STR_key, $STR_value);	
					

				}				
			}
			if($this->db->update($table, $PARAM_set))

			{			
				return true;				
			}			
		}	
		return false;
	}
	
	function deletedata($table,$PARAM_conditions)
	{			
		if(is_array($PARAM_conditions))
		{			
			foreach($PARAM_conditions as $STR_key => $STR_value)
			{				
				$this->db->where($STR_key, $STR_value);					
			}				
		}
		if($this->db->delete($table))
		{			
			return true;				
		}			
		return false;
	}
	
    


    function generateQuery()
	{
		$this->db->distinct();
		if(!empty($this->select)){
		
			$this->db->select($this->select);
			
		}				
		if(is_array($this->condition)){
			
			foreach($this->condition as $strKey => $strValue){
				
				$this->db->where($strKey, $strValue);
					
			}
		}else{
			
			if(!empty($this->condition)){
			
				$this->db->where($this->condition);
			
			}
			
		}		
		
		if(!empty($this->groupby)){
		
			$this->db->group_by($this->groupby);
			
		}			
		if(!empty($this->orderby)){
		
			$this->db->order_by($this->orderby);
			
		}
		if(!empty($this->limit)){
		
			$this->db->limit($this->limit);
		}		
		$strQuery = $this->db->get($this->table);
		
		if($this->dropdown == true)
		{
			if($strQuery->num_rows() > 0)
			{
				foreach($strQuery->result_array() as $dataResult)
				{
					$result[$dataResult[$this->dropdownkey]] = $dataResult[$this->dropdownvalue];
				}
			}else{
				$result = '';
			}
			return $result;
			
		}else{		
			return $strQuery->result();			
		}		
	}

}
?>