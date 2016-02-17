<?php 
 if(isset($_POST["id"])){
	 
	 
	$sql="INSERT INTO `base_site_caramela`.`panier` (`id`, `id_produit`, `quantite`, `prix`) VALUES (NULL, '".$_POST['id']."', '".$_POST['quantite']."', '".$_POST['prix']."')";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="base_site_caramela";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
    
	$result =$conn->query($sql);
    if($result==1){
		
		echo $_POST['quantite'];
	}	
 
  }

  

?>