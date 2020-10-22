// $Id: README.txt,v 1.1 02∕04∕2011

ABOUT THEME
-----------

Thème RWD pour les sites de l'Association développés sous Drupal 6.
Thème développé avec Sass - Susy 3. Version 2018.
Utilisation de Gulp + NodeJS

MODULES NODE.JS via NPM
----------------------------------
Installation de Gulp
:/var/www/drupal-6/sites/all/themes/dossier_projet$ sudo npm init (création du fichier  package.json + dossier node_modules)
:/var/www/drupal-6/sites/all/themes/dossier_projet$ npm install gulp@^3.0.0 --save-dev
Utilise Gulp 3 car sinon synthaxe change avec Gulp 4 et cause une erreur.
Vérifier version avant avec gulp -v doit renvoyer CLI version 3.9.1 Mais il faut la même en Local.

Si besoin de MAJ de NPM:
sudo npm update puis npm i npm

Plugin pour Gulp (permet de charger tous les plugins)
:/var/www/drupal-6/sites/all/themes/dossier_projet$ npm install gulp-load-plugins --save-dev

Plugin pour Sass:
npm install --save-dev  event-stream gulp-util node-sass-import-once gulp-sass  gulp-autoprefixer gulp-size gulp-shell gulp-notify notify-send gulp-sourcemaps typey susy node-normalize-scss gulp-plumber gulp-postcss
breakpoint-sass

Vérifier versions des npm:
npm-check
npm list | grep sass pour filtrer la liste

Vérifier maj pour NPM:
 sudo npm update check

 !! Remplacer gulp-autoprefixer par autoprefixer pour avoir la dernière version du package.Utiliser avec PostCSS
 https://github.com/postcss/autoprefixer
 npm install --save-dev autoprefixer gulp-postcss browserslist

 https://github.com/at-import/breakpoint

 Pour utiliser les Breakpoints CSS avec javascript : enquire.js
 npm install enquire.js  permet d'installer + enquire.js@2.1.6
 05/2020: inutile,plutôt utiliser l'url distante via le fichier .libraries

 Importer des SCSS de modules NPM comme normalize, utiliser la commande suivante aprés avoir installé sass-include-paths
 ce qui va générer une liste des inclusions possibles pour le projet.
 sassc $(sassIncludePaths --sassc --node_modules) [...]

 Pour breakpoint, possible d'utiliser breakpoint-sass si pb de chemin.
 npm install --save-dev breakpoint-sass

BROWSER SYNC
-----------------
:/var/www/drupal-6/sites/all/themes/dossier_projet$
npm install browser-sync --save-dev

GIT
-----------------
Pour compilation locale utiliser Git pour synchroniser LAMP et machine locale.
Automatisation via un hook dans le dossier du dépôt local sur le LAMP - Ajuster les réglages pour post-update

Vérifier bonne installation des modules en listant les tâches avec gulp --tasks et vérifier la version avec gulp -v

DEBOGUER LES SUPPORTS MOBILES ( TELEPHONE-TABLETTE)
----------------------------------------------------------------------
http://people.apache.org/~pmuellr/weinre/docs/latest/


REGLAGES A FAIRE
----------------

dans template.php :
remplacer le nom du theme dans les fonctions necessaires.

Changer le nom du fichier .info

Changer le favicon
Changer le screenshot
Changer le logo

dans fichiers tpl
remplacer le nom du theme dans les appels d'includes
<pre>
 <?php
$theme_path = drupal_get_path('theme', 'starterd6_pf_rwd'); //Nom du thème idem nom du fichier .info
include ($theme_path.'/chemin/vers/fichier.php');
?>
</pre>

-- INUTILE --

Pour le thème en production, inutile d'envoyer sur le serveur les dossiers sass, node-module

Dans images
-----------

Mettre a jour les images du theme

Compilation des fichiers scss
-----------------------------
dans le terminal (sur serveur Linux) :
user@vm-server1:~$ cd /PATH/TO/THEMENAMEFOLDER/
user@vm-server1:/var/www/drupal-6/PATH/TO/THEMENAMEFOLDER$ gulp


Usage de Susy 3
------------------------
Il n'existe plus de mixins dans Susy3, tout passe par span()
Ainsi:
<pre>
.classe{ @include container;} devient .classe { width: span (3);}
.classe{ @include span( 12 of $desktopcol);} devient .classe { width: span( 12 of $desktopcol);}
.classe{@include push (1); } devient .classe{ margin-left: span(1 wide); }
.classe{@include pull (1); } devient .classe{ margin-left: 0 - span(3 wide); }
</pre>

 Breakpoints pour SUSY
----------------------------------

Utilisation de https://github.com/at-import/breakpoint , installé sur le serveur via NPM (abandon de la GEM)
<pre>
 @include breakpoint ($mobile){}
 @include breakpoint ($desktop){}
 @include breakpoint ($tablet){}
</pre>

Diaporama homepage surimpression - BXSlider
------------------------------------
Réécriture du champs dans Views
<pre>
[field_illus_administratif_fid][field_illus_entreprise_fid][field_diapo_lycee_fid]
<div class="bx-caption">[title]</div>
</pre>


JAVASCRIPT
------------------------
LazyLoad : remplacer "src" par "data-src" pour images, video, etc, par exemple:
>> data-src="https://www.youtube.com/embed/
