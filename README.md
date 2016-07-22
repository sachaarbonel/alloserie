# Alloserie Project

Le but de ce projet a eu pour but de maîtriser le framework PHP Laravel à travers le développement d'une API REST inspirée de allociné pour les séries. Vous pourrez trouver le schéma de la BDD ici : http://www.laravelsd.com/share/lC4YaN
Les outils tiers utilisés sont le package Dingo : https://github.com/dingo/api 
Et la plateforme : https://www.import.io/ pour le "scrapping" des données du site http://www.allocine.fr/series/
Vous trouverez également dans le depot quelques exmplaires des requêtes que j'ai effectué sur l'API d'import.io afin d'extraire les données. Les données extraites sont au format json.

## Points forts
- Les "seeders" utilisent des fichiers json pour remplir la base de données, ce qui va faciliter la migration
- Versioning : le dossier /app est organisé de façon à séparer la partie API, de la future partie Web (ex: back-end)

## Installation 
via composer 
- "composer install  Sach97/alloserie"
- "composer update"
- renommez le fichier ".env.example" en ".env" puis ajoutez-y vos variables d'environnement. Pensez à créer votre bdd dans phpmyadmin et à la renseigner dans ce fichier
- "php artisan serve" pour initialiser votre fichier ".env" puis "Ctrl+C" pour interrompre le serveur web
- "php artisan migrate --seed" pour lancer la migration et le seeding de la base de données 

##Demo 
Une fois installée vous pouvez voir les routes de l'API en faisant "php artisan routes:list" ou
directement essayez celle ci "http://localhost:8000/api/v1/series/list" avec Postman(http://www.getpostman.com/) ou directement sur votre navigateur 

##TODO
- Finir les routes et les controllers qui correspondent, notamment ajouter, supprimer, modifier
- Implementer l'autodoc de Apiary Blueprint fournie par Dingo
- Finir de scrapper http://www.allocine.fr/series/ et de trier les données afin de créer les fichiers json qui serviront à la migration
- Ajouter la gestion d'erreurs dans les controllers
- Creer un back-end en Angular2, le front-end de l'appli et une version mobile en Ionic, ... des évolutions du projet qui consumeront cette API en clair.
- Sécurisation par token

