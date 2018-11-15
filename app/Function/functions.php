<?php 
	function base_url()
    {
        return $url  = "http://localhost/project-demo/public/admin/"; 
    }

    function depatment_name($depa, $select=0)
    {
    	foreach ($depa as $key => $value) {
    		$id = $value["id"];
    		$name = $value	["name"];
    		if ($select !=0 && $id == $select) {
    			echo "<option value='$id' selected='select'>$name</option>";
    		}else{
    			echo "<option value='$id'>$name</option>";
    		}
            //depatment_name ($depa, $select);
    	}
    }

 ?>