[Clementine : framework MVC libre en PHP](http://clementine.quai13.com/)
===

![Clementine Framework logo](https://pa-de-solminihac.github.io/clementine-framework/logo.jpg)

Présentation
====

Clementine est un [framework MVC](http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller) pour PHP, c'est un logiciel libre sous [licence MIT](http://en.wikipedia.org/wiki/MIT_License).

Issu d'une expérience...
---

Clémentine est partie d'une frustration : quand on importe des librairies dans un projet web, on doit souvent les adapter à notre besoin. Et il n'est pas toujours facile de le faire _proprement_.

Même lorsqu'elles ont été conçues pour être flexibles, avec des [hooks](http://en.wikipedia.org/wiki/Hooking) par exemple, on finit souvent par tomber sur un cas qui n'a pas encore été prévu. Par exemple ce hook qui nous aurait bien arrangé mais qui n'existe pas encore.

Dans des cas un peu plus favorables, on peut utiliser de l'[injection de dépendances](http://en.wikipedia.org/wiki/Dependency_injection).

On étend alors les librairies importées en utilisant des classes dérivées, afin de surcharger certains comportements et on injecte nos instances de classes dérivées à la place de ceux des classes d'origine... si l'injection de dépendances a été prévue à l'endroit qui nous intéresse. _Mais ce n'est malheureusement pas toujours le cas_.

On se retrouve alors à devoir _modifier le code source_ des librairies qu'on a importées. Et là, c'est le drame : on ne peut plus suivre facilement les mises à jour.

Et si un framework s'occupait d'utiliser _automatiquement_ __nos classes dérivées__ partout, à la place des classes d'origine ? Plus besoin de modifier le code source des classes qu'on a importées ! _Nos modifications_ restent dans leurs _propres_ fichiers, elles sont prises en compte automatiquement, et on peut mettre à jour plus sereinement les librairies importées.

__L'expérience Clémentine était née.__

Cette expérience a pris pour terreau un _framework MVC_ inspiré de [Zend Framework](http://framework.zend.com/), pour devenir un outil resté simple, mais mature.

Un outil simple
===
* Pas de _code généré_, pas de _fichiers de cache_ dont on ne retrouve plus la source : on reste sur du code interprété, plus facile à maintenir.
* Debug facilité : pour que vous trouviez rapidement cette requête SQL, ou pour que vous ne laissiez plus passer la moindre _Notice_ (vous pouvez en recevoir une trace par e-mail).

De la modularité partout
---
* Dans Clémentine, tout fonctionne sous forme de _modules_, même le coeur du framework... et tous les modules sont surchargeables, _y compris les surcharges_.

Tout est surchargeable
---
Le framework garantit de __toujours pouvoir intercaler__ une classe à n'importe quel niveau de l'héritage.

Comme on y prend vite goût, on a utilisé le concept partout : 
* fichiers de configuration
* contrôleurs
* modèles
* vues
* controleurs
* helpers
 
On peut même utiliser _l'héritage sur des modules_ (tout ou partie) en quelques lignes.

Par exemple si vous avez

    class Robin extends Batman
    
Clémentine vous permettra d'injecter une classe **_Joker_** entre les deux, sans modifier une seule ligne de _Robin_ ni _Batman_, et le framework comprendra **automatiquement** que :

    class Robin extends Joker
    class Joker extends Batman

Et si besoin, vous pouvez même changer l'ordre d'héritage des classes comme vous trieriez des _calques dans Photoshop_.

Les performances sont excellentes
---
Ce n'est pas parce qu'on n'utilise pas de code généré ou de fichiers cache que ça doit ramer... et ça ne rame pas du tout, promis !

__Pour l'exemple__ : une page _"hello world"_ est rendue en `2ms`. Ça ne vaut sans doute pas un benchmark approfondi mais ça donne une idée du temps pris pour faire tourner le framework lui même.

Alors... lancez l'installeur
---
* Pour une première installation
* Pour la gestion des _mises à jour_ des modules et _migrations_ de la base de données
* Pour la _gestion des dépendances_. Vous pouvez choisir d'__imposer les versions__ de modules (si vous n'êtes pas prêt pour un passage de version majeure) : l'installeur choisira les versions des autres modules de manière à respecter ces choix __sans casser la compatibilité__
* Vous pouvez même utiliser _votre propre dépôt_ de modules si vous voulez

Et laissez vous guider pour installez vos premiers modules !

Installation
---
* Récupérez la [dernière version](http://clementine.quai13.com/repository/clementine-framework/clementine-framework.zip) et décompressez la dans un dossier __my_directory__
* Pointez votre navigateur sur __my_directory__ et laissez vous guider par l'installeur :
[http://localhost/__my_directory__/](http://localhost/my_directory/)

[Site officiel](http://clementine.quai13.com/)
