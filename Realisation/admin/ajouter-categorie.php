<head>
   <!-- https://fonts.google.com/specimen/Roboto -->
   <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

<?php 




include "gestion.php";
// Trouver tous les employés depuis la base de données 
$gestion= new Gestion();




if(!empty($_POST)){
	$categorie = new produit_categorie();
	$categorie->setNom_Categorie($_POST['nom_categorie']);
	$gestion->ajouterCategorie($categorie);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}
?>


<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Categorie</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form method="POST" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Categorie
                    </label>
                    <input
                      id="name"
                      name="nom_categorie"
                      type="text"
                      class="form-control validate"
                      required
                    />
                 
                  
                </div>
                  
              </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add categorie Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>