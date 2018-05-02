/*
 * Plugin Jquery qui utilisent la version de base fournie par Drupal
 * jquery update 1.3.2
 */
(function ($) {

//    jQuery(document).ready(function ()
//    {
//        //Header collant haut de page
//        console.log('Chargement du script pour header fixe');
//      $("#header").sticky({topSpacing: 10});
//    });
    


    //Pour enlever la taille des images sur les Gallery Formatter
    jQuery(document).ready(function () {

        jQuery('#bloc-galerie-vdl .gallery-slides').each(function () {
            //jQuery(this).removeAttr('width')
            //jQuery(this).removeAttr('height');
            jQuery(this).attr("style", "width:25em;height:22em;");
        });

    });
    
       //Pour Sticky.js - Partage social en position fixe
       // Fonctionne pas
       
//    jQuery(window).load(function(){
//      
//        console.log('Appel du script Sticky.js');
//    $('.service-links').sticky({topSpacing: 50, zIndex: 10});
//});
    
// Sticky-kit pour barre de partage social 
//console.log('Appel du script sticky-kit.js pour jQuery 1.3');
//$('.service-links').stick_in_parent();

    // StickUp pour barre de partage social 
//    jQuery(document).ready(function () {
//        console.log('Chargement de StickUp.js pour jQuery>=1.11');
//        $('#block-service_links-service_links').stickUp({
//            // distance from the top of the webpage
//            topMargin: "auto",
//// Z-index property
//            zIndex: 5,
//            // forces stickUp to synchronize left position
//            syncPosition: false,
//            // change CSS classes here
//            namespaceClass: "stuckElement",
//            fixedClass: "isStuck"
//        });
//    });
       
})(jQuery);