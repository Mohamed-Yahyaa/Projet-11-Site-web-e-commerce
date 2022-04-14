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
$gestion = new gestion();
//afficher dans input
if(isset($_GET['id'])){
    $afficherData = $gestion->afficherProduit($_GET['id']);
    $id = $_GET["id"];
    foreach($afficherData as $value);
}

// modifier les donnes
if(!empty($_POST)){
    $photo = $_FILES["image"]["name"];
   
	$produit = new produit_categorie();
	$produit->setId_Produit($_POST['id']);
	$produit->setNom_Produit($_POST['nom_produit']);
	$produit->setPrix($_POST['prix']);
	$produit->setDescription($_POST['description']);
	$produit->setCategorie_produit($_POST['categorie_produit']);
	$produit->setQuantite_stock($_POST['quantite_stock']);
	$produit->setDate_dexpiration($_POST["date_d'expiration"]);
	$produit->setPhoto($photo);

  $tempname = $_FILES["image"]["tmp_name"];

    if(!empty($photo)){
     
      
      $gestion->upload_photo($photo, $tempname);
  } else {
    $produit->setPhoto($value->getPhoto());
  }
  
    $gestion->Modifier($produit);
    header('Location: index.php');
}
?>


<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form method="POST" enctype='multipart/form-data' class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <input type="hidden" name="id" value="<?php echo $value->getId_Produit() ?>">
                    <label
                      for="name"
                      >Produit
                    </label>
                    <input
                      id="name"
                      name="nom_produit"
                      type="text"
                      class="form-control validate"
                      required
                      value="<?php echo $value->getNom_Produit() ?>"
                    >
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Prix
                    </label>
                    <input
                      id="name"
                      name="prix"
                      type="text"
                      class="form-control validate"
                      required
                      value="<?php echo $value->getPrix() ?>"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <input
                      class="form-control validate"
                      rows="3"
                      required
					            name="description"
                      value="<?php echo $value->getDescription() ?>"
                    >
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
					            name="categorie_produit"

                    >
                   
                    <option selected><?php echo $value->getNom_Categorie() ?></option>
                   <?php $afficherdata = $gestion -> afficherCategorie() ?>
                    <?php  foreach($afficherdata as $affichervalue){ ?>
                      <option value="<?= $affichervalue->getId_Categorie()?>"><?= $affichervalue->getNom_Categorie();} ?> </option>
                      
                      
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Expire Date
                          </label>
                          <input
                            id="expire_date"
                            name="date_d'expiration"
                            type="date"
                            class="form-control validate"
                            data-large-mode="true"
                            value="<?php echo $value->getDate_dexpiration() ?>"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >Quantite de stock
                          </label>
                          <input
                            id="stock"
                            name="quantite_stock"
                            type="text"
                            class="form-control validate"
                            required
                            value="<?php echo $value->getQuantite_stock() ?>"
                          />
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class=" mx-auto">
                <img src="../admin/img/<?php echo $value->getPhoto()?>" class="tm-product-img-dummy mx-auto" alt="">
                </div>
                <div class="custom-file mt-3 mb-3">
                  
                <input
                    
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                   type="file" name="image"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>