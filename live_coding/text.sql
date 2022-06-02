CREATE DATABASE live_coding;

//
USE `live_coding`;
CREATE TABLE categorie (
    id_categorie int PRIMARY KEY ,
    nom_categorie varchar (255) 
    );
    //

    CREATE TABLE utilisateur (
    id int PRIMARY KEY ,
    nom varchar (255) ,
    prenom varchar (255),
    mode_passe varchar (255) ,
    email varchar (255) ,
    role varchar (255) 
    );

    //

    CREATE TABLE panier (
id int PRIMARY KEY AUTO_INCREMENT ,
reference_visiteur int (255) 
 );

//

CREATE TABLE produit (
    id int PRIMARY KEY AUTO_INCREMENT ,
    id_categorie int(255) , FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
    nom varchar (255) ,
    description varchar (255) ,
    quantité_de_stock int (255),
    prix int (255) ,
    categorie_produit varchar (255),
    photo varchar (255) 
    );


    //

    CREATE TABLE ligne_panier(
    id_ligne_panier int PRIMARY KEY AUTO_INCREMENT,
    id_produit int , FOREIGN KEY (id_produit) REFERENCES produit(id),
    id_panier int , FOREIGN KEY (id_panier) REFERENCES panier(id),
    produit_quantite_panier int (255)
    );

    //
    SELECT * FROM `produit` WHERE id_categorie=categorie_produit