<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
?>
    
    
    <select name='id_list6' id='id_list6'>
        <option value="0">Chọn</option>
    <?php
    	$sql = "select * from table_product_phu where com='quanhuyen' and id_cat='".intval($_REQUEST['id'])."' order by stt asc,id desc";
        $d->query($sql);	
        $cat = $d->result_array();		
		if(count($cat) != 0){
        	foreach($cat as $v){    
        		echo "<option value='".$v['id']."'>".$v['ten']."</option>";  
            }
        }		
    ?>
    </select>
    
    