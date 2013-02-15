[Clementine : PHP MVC framework, UNIX philosophy](http://clementine.quai13.com/)
====================

Clementine est un framework MVC pour PHP

Simple
---
* Architecture MVC avec front controller unique (MVC2)
* Pas de code généré difficile à maintenir, pas de fichiers de cache illisibles dont on ne retrouve plus la source
* Debug facilité... ne laissez plus passer une Notice (allez, on code proprement !)

Flexible et favorisant la réutilisation
---
Grâce à des fonctionnalités uniques :
* Héritage implicite - héritage à tous les niveaux : configuration, contrôleurs, modèles, helpers, vues, et même des modules entiers
* Tout est surchargeable, jusqu'au coeur du framework... ne râlez plus parce qu'un hook manque : vous n'en aurez (presque) plus jamais besoin.
* Modules fortement découplés et réorganisables, comme les calques dans Photoshop/Gimp. 
* Injection de dépendances systématique.

Par exemple si 

    class Robin extends Batman
    
vous pouvez injecter une dépendance Joker entre les deux, sans modifier une seule ligne de Robin ni Batman.

Alors, le framework comprendra **automatiquement** que 

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
