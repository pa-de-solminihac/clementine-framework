[Clementine : PHP MVC framework, UNIX philosophy](http://clementine.quai13.com/)
====================

Installation
---
* Récupérez la [dernière version](http://clementine.quai13.com/repository/clementine-framework/clementine-framework.zip)
* Décompressez la dans un dossier __my_directory__
* Ouvrez le dossier __my_directory__ dans votre navigateur et laissez vous guider...

Présentation
====

Clementine est un framework MVC2 pour PHP sous licence MIT.

Simple
---
* Architecture MVC avec _front controller_ unique (MVC2)
* Pas de _code généré_ difficile à maintenir, pas de _fichiers de cache_ illisibles dont on ne retrouve plus la source
* Debug facilité : ne laissez plus passer une _Notice_, vous pouvez même être prévenu par e-mail (allez, on code proprement !)

Modulaire
---
Modulaire dans l'âme grâce à ses fonctionnalités uniques. Cela favorise la flexibilité et la réutilisation :
* Héritage **implicite**, à tous les niveaux : configuration, contrôleurs, modèles, helpers, vues, et même des modules entiers
* **Tout est surchargeable**, jusqu'au coeur du framework... ne râlez plus parce qu'un hook manque : vous n'en aurez (presque) plus jamais besoin.
* Modules fortement découplés et réorganisables, comme les calques dans _Photoshop ou Gimp_. 
* Injection de dépendances **systématique** :

Par exemple si vous avez

    class Robin extends Batman
    
Clémentine vous permettra toujours d'injecter une dépendance **_Joker_** entre les deux, sans modifier une seule ligne de _Robin_ ni _Batman_.

Ainsi, le framework comprendra **automatiquement** que :

    class Robin extends Joker
    class Joker extends Batman

Performant
---
Par principe, ne serait-ce que pour l'honneur. Utilisation d'APC si disponible.

Avec un installeur
---
* Pour la première install comme pour les mises à jour
* Gestion de dépendances
* Gestion des migrations de la base de données
* Gestion de branches de développement multiples
* Utilisez votre propre dépôt de modules si vous voulez (petit control freak, va)
* Sauvegarde, et restauration en cas d'échec

En savoir plus
---
[Page de description](http://clementine.quai13.com/)
