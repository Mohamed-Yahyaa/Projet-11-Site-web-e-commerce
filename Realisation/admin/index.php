
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />     <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>


  <?php 
  
  include 'gestion.php';
  $gestion = new Gestion ; 
  $data = $gestion->afficher();


  
  ?>


  <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">NOM PRODUIT</th>
                    <th scope="col">CATEGORIE</th>
                    <th scope="col">UNIT SOLD</th>
                    <th scope="col">QUANTITE DE STOCK</th>
                    
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
  

                <?php  foreach ($data as $value ) {
                    
                ?>
                <tr>
                    <th scope="row">
              
                          </th>
                    <td class="tm-product-name"><?php echo $value->getNom_Produit() ?></td>
                    <td ><?php echo $value->getNom_Categorie() ?></td>
                    <td><?php echo $value->getPrix() ?></td>
                    <td><?php echo $value->getQuantite_stock() ?></td>
                   
                    <td>

                      <a href="suprimer.php?id=<?php echo $value -> getId_Produit() ?>" class="tm-product-delete-link">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>

                      </a>
                    </td>
                    <td>
                    <a href="modifier.php?id=<?php echo $value -> getId_Produit() ?>" class="tm-product-delete-link">
                    <i class="fa-solid fa-pen-to-square tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php    }  ?>   
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="ajouter-produit.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>
          </div>
        </div>
        <!-- liste categorie -->
        <?php $categorieData = $gestion->afficherCategorie() 
       
        ?>

        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <?php 
                foreach ($categorieData as $value){
                  ?>
                  <tr>
                    <td class="tm-product-name"> <?php echo $value-> getNom_Categorie() ?></td>
                    <td class="text-center">
                      <a href="suprimerCategorie.php?id=<?php echo $value-> getId_Categorie() ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>             
            </div>
            <a
              href="ajouter-categorie.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new categorie</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected categorie
            </button>
          </div>
        </div>
      </div>
  </div>
   