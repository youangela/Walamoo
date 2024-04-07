<?php  
	$target_path = "C:/xampp/htdocs/Walamoo/uploads/";  
	$target_path = $target_path.basename( $_FILES['fileToUpload']['name']); 
	$success= 0;
	$name = $_FILES['fileToUpload']['name'];
	$oldFilePath = $target_path;
	$newFilePath = 'C:/xampp/htdocs/Walamoo/uploads/currentxml.xml';
	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
		echo "File uploaded successfully."; 
		rename($oldFilePath, $newFilePath);		
	} else 
	{echo "File was not uploaded.";  }
	  
	
?>    