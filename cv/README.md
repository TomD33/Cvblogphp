---------------------------------------------------------------------------------------------------------------------------------
                                                           Comment Installe
---------------------------------------------------------------------------------------------------------------------------------

Clonez le projet avec 
git clone https://github.com/Thorin10/Thomas-Maurin-cv

Créer une base de donnée blog dans mysql.

Dans votre terminal, accédez au dossier que vous venez de cloner, puis lancer la commande 
composer install ou composer update si vous l'avez déjà
Utiliser ensuite la commande php bin/console doctrine:schema:update
Tous les composants vont alors s'installer

Vous pouvez désormais accéder au site ! 

Il s'agit d'un site CV, dans lequel on y retrouve mes compétences, mes expériences, ma scolarité ainsi que mes articles de blog.

Pour accéder à la partie administration, il faut accéder a son espace personnel, se connecter avec les identifiants "admin" et le mot de passe "admin"
Une fois connecter ajouter /admin à la fin de votre url : http://127.0.0.1:8001/admin
Partie Blog :
Il est possible d’ajouter des articles via la page d’administration. 
Chaque article peut être commenté, puis chaque commentaire sont modérés pour pouvoir être affiché.

Thomas Maurin
