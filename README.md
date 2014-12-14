[Clementine : framework MVC libre en PHP](http://clementine.quai13.com/)
===

![Clementine Framework logo](https://pa-de-solminihac.github.io/clementine-framework/logo.jpg)

Installation
---
* Récupérez la [dernière version](http://clementine.quai13.com/repository/clementine-framework/clementine-framework.zip) et décompressez la dans un dossier __my_directory__
* Pointez votre navigateur sur __my_directory__ et laissez vous guider par l'installeur :
[http://localhost/__my_directory__/](http://localhost/my_directory/)

Présentation
====

Clementine est un framework MVC pour PHP, c'est un logiciel libre sous licence MIT.

Issu d'une expérience...
---

Clémentine est parti d'une frustration : il n'est pas toujours simple d'adapter les librairies qu'on importe dans un projet. 

Même lorsqu'elles ont été conçues pour être flexibles, avec des hooks par exemple, on finit souvent par tomber sur un cas qui n'a pas encore été prévu. Par exemple ce hook qui nous aurait bien arrangé mais qui n'existe pas encore.

Dans des cas un peu plus favorables, on peut utiliser de l'injection de dépendances.

On étend alors les librairies importées en utilisant des classes dérivées, afin de surcharger certains comportements et on injecte nos instances de classes dérivées à la place de ceux des classes d'origine... si l'injection de dépendances a été prévue à l'endroit qui nous intéresse.

Et si le framework s'occupait automatiquement d'utiliser nos classes dérivées partout, à la place des classes d'origine ?

L'expérience Clémentine est née. 

Cette expérience a pris pour terreau un framework MVC inspiré de Zend Framework, pour devenir un outil resté simple, mais mature.

Un outil simple
---
* Pas de _code généré_, pas de _fichiers de cache_ dont on ne retrouve plus la source : on reste sur du code interprété, plus facile à maintenir
* Debug facilité : pour que vous ne laissiez plus passer la moindre _Notice_. Vous pouvez même être prévenu par e-mail.

De la modularité partout
---
* Dans Clémentine, tout fonctionne sous forme de modules, même le coeur du framework... et tous les modules sont surchargeables, y compris les surcharges.
* Le framework garantit de toujours pouvoir intercaler une classe à n'importe quel niveau de l'héritage. Comme on y prend vite goût, on a utilisé le concept partout : fichiers de configuration, contrôleurs, modèles, helpers, vues... on peut même utiliser l'héritage sur des modules entiers en quelques lignes.

Par exemple si vous avez

    class Robin extends Batman
    
Clémentine vous permettra d'injecter une classe **_Joker_** entre les deux, sans modifier une seule ligne de _Robin_ ni _Batman_, et le framework comprendra **automatiquement** que :

    class Robin extends Joker
    class Joker extends Batman

Les performances sont excellentes
---
Ce n'est pas parce qu'on n'utilise pas de code généré ou de fichiers cache que ça doit ramer... et ça ne rame pas du tout, promis !

Lancez l'installeur, installez vos premiers modules
---
* Pour la première installation
* Pour la gestion des mises à jour et migrations de la base de données
* Pour la gestion des dépendances. Vous pouvez même coller à des branches de développement si vous n'êtes pas prêt pour un passage de version majeure sans casser toute la compatibilité
* Sauvegarde, et restauration en cas d'échec
* Utilisez votre propre dépôt de modules si vous voulez (petit control freak ;))

En savoir plus
---
[Page de description](http://clementine.quai13.com/)
