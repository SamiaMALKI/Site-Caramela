	<!DOCTYPE html>
	
<?php 

function findProductBymarqueId($id_marque){
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
 $sql="SELECT * FROM `produit` WHERE id_marque ='".$id_marque."'";
 return  $result = $conn->query($sql);	
	
} 
?>
<head>
<title>Caramela</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
 <script src="js/jquery.min.js"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <h1 id="logo"><a href="#">Urgan Gear</a></h1>
      <div id="navigation">
        <ul>
          <li><a href="#">Accueil</a></li>
          <li class="last"><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/i1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/i2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/img7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/img8.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/img11.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/img10.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <div class="options">
      <div class="search">
        <form action="#" method="post">
          <span class="field">
          <input type="text" class="blink" value="Rechercher" title="SEARCH" />
          </span>
          <input type="text" class="search-submit" value="GO" />
        </form>
      </div>
      
      <div class="right"> <span class="cart"> <a href="#" class="cart-ico" style="position: relative;">&nbsp;</a> <div class="nbr" style="position: absolute;
    top: 1px;
    left: 38px;">0</div><strong>$0.00</strong> </span> <span class="left more-links"> <a href="#">Checkout</a> <a href="#">Details</a> </span> </div>
    </div>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul class="">
          <li><a onClick="$('.tab-content').hide();$('#one').show(); $('.tabs ul li a').removeClass('active');$(this).addClass('active');" class="active"><span>ZARA</span></a></li>
          <li><a onClick="$('.tab-content').hide();$('#one_').show(); $('.tabs ul li a').removeClass('active'); $(this).addClass('active');"><span>H&M </span></a></li>
          <li><a onClick="$('.tab-content').hide();$('#one__').show(); $('.tabs ul li a').removeClass('active'); $(this).addClass('active');" class="red"><span>Jennyfer</span></a></li>
        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" id="one" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <?php
				    $result=findProductBymarqueId(1);
					 if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//$row["id_produit"]
								   echo '<li>'.
											'<div class="image"> <a href="#"><img src="'.$row["image"].'" alt="" /></a> </div>'.
											'<p> REF: <span>'.$row["ref_produit"].'</span><br />'.
											'Taille : <span>'.$row["taille"].'</span><br />'.
											'Marque: <a href="#">'."ZARA".'</a></p><input type="hidden" class="id_produit" value="'.$row["id_produit"].'"/>'.
											'<p class="price">Prix:'.' <strong class="priceValue">'.$row["prix"]. '</strong><strong>EUR</strong></p>'.
											'<div class="btn btn-success " onclick="popUpPanier(this)"><i class="glyphicon glyphicon-plus"></i>'.
										'</li>';
						}
					  } else {
						echo "0 results";
					}				
				
                
                ?>
                
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
          <!-- Second Tab Content -->
          <div class="tab-content" id="one_">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                 <?php
				    $result=findProductBymarqueId(2);
					 if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//$row["id_produit"]
								   echo '<li>'.
											'<div class="image"> <a href="#"><img src="'.$row["image"].'" alt="" /></a> </div>'.
											'<p> REF: <span>'.$row["ref_produit"].'</span><br />'.
											'Taille : <span>'.$row["taille"].'</span><br />'.
											'Marque: <a href="#">'."H&M".'</a></p><input type="hidden" class="id_produit" value="'.$row["id_produit"].'"/>'.
											'<p class="price">Prix:'.' <strong class="priceValue">'.$row["prix"]. '</strong><strong>EUR</strong></p>'.
											'<div class="btn btn-success " onclick="popUpPanier(this)"><i class="glyphicon glyphicon-plus"></i>'.
										'</li>';
						}
					  } else {
						echo "0 results";
					}				
				
                
                ?>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Second Tab Content -->
          <!-- Third Tab Content -->
          <div class="tab-content" id="one__">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                 <?php
				    $result=findProductBymarqueId(3);
					 if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//$row["id_produit"]
								   echo '<li>'.
											'<div class="image"> <a href="#"><img src="'.$row["image"].'" alt="" /></a> </div>'.
											'<p> REF: <span>'.$row["ref_produit"].'</span><br />'.
											'Taille : <span>'.$row["taille"].'</span><br />'.
											'Marque: <a href="#">'."Jennyfer".'</a></p><input type="hidden" class="id_produit" value="'.$row["id_produit"].'"/>'.
											'<p class="price">Prix:'.' <strong class="priceValue">'.$row["prix"]. '</strong><strong>EUR</strong></p>'.
											'<div class="btn btn-success " onclick="popUpPanier(this)"><i class="glyphicon glyphicon-plus"></i>'.
										'</li>';
						}
					  } else {
						echo "0 results";
					}				
				
                
                ?>
                
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Third Tab Content -->
        </div>
        <!-- Brands -->
        <div class="brands">
          <h3>Marques</h3>
          <div class="logos"> <a href="#"><img src="css/images/z.png" alt="" /></a> <a href="#"><img src="css/images/h.png" alt="" /></a> <a href="#"><img src="css/images/f.png" alt="" /></a> <a href="#"><img src="css/images/zp.png" alt="" /></a></div>
        </div>
        <!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"> <a href="#">Accueil</a> <span>|</span><a href="#">Contact</a> </div>
          <div class="right"><a href="">malki.samia@hotmail.fr</a> </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter au panier </h4>
        </div>
        <div class="modal-body">
		  <div class="image" ></div>
		   <p class="price">Prix: <strong class="priceValue"></strong><strong>EURO</strong></p>
		  <div class="quantite" style="margin-top:20px"><label>Quantité</label><input type="number" style="width:50px" name="howmuch"></div>
          <p class="info">Voulez vous ajouter cette article au panier ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-success addPanier" data-prod="" onClick="AddToPanier()">Ajouter</button>
        </div>
      </div>
    </div>
  </div>
  <script>
     function popUpPanier(a){
		 var img = $(a).parents("li").find(".image img").attr("src");
		 var id  = $(a).parents("li").find(".id_produit").val();
		 var prix  = $(a).parents("li").find(".price strong.priceValue").html();
		     $("#myModal .image").html('<img class="img" src="'+img+'" />');
			 $("#myModal .addPanier").attr("data-prod",id);
			 $("#myModal .price strong.priceValue").html(prix);
			 $("#myModal").modal("show");
	 }
	 
     	 
	 function AddToPanier(){
		 var id       = $("#myModal .addPanier").attr("data-prod");
		 var quantite = $(".quantite input").val();
		 var prix     = $("#myModal .price strong.priceValue").html(); 
		 $.ajax({
			  method: "POST",
			  url: "dataManagement/panier.php",
			  data: { id: id,quantite:quantite,prix:prix}
		})
		.done(function( msg ) {
			    if (msg){
					var b=$(".nbr").html();
					nbr=parseInt(b);
					h=nbr+parseInt(msg);
					$(".nbr").html(h);
					$("#myModal").modal("hide");
				}
			 });
		 
	 }
  </script>
  <style>
   .image a img{
	   width:100%;
   }
   #myModal .image .img{
	   margin: auto;
    width: 80%;
    margin-left: 10%;
	   
	   
   }
   .info{
	   
	   text-align:center;
	   font-weight:bold;
   }
  </style>
</body>
</html>
