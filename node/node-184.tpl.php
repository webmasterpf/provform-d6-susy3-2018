<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-NID.tpl.php
 * Template pour Enquete satisfaction : nid = 384(dev)/385(prod)
 * Formulaire postuler Ct Pro : 184
 */

?>
<!-- NODE-WEBFORM.TPL SPECIFIQUE : OFFRE DE CONTRAT -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>
   
        <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="offre-contrat-alternance">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
                 <?php if ($node->field_illus_administratif[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-offre">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_administratif[0]['view'] ?>
            </div>
            <?php endif;?>
                 
            </div><!-- /zone-illustration -->
       <!--______________ ZONE 1 ________________ -->
        <div id="zone-1" class="zone_layout_max_centre webform">
          <?php print $picture; ?>

<?php if ($submitted): ?>
                <span class="submitted"><?php print $submitted; ?></span>
<?php endif; ?>
                
                            <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>

      
                
                
                        <div class="content">
                            
                            <a href="javascript:history.back();" class="retour-liste"> << Retour au détail de l'offre </a>
                            
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                            
                            <?php print $node->content['webform']['#value']; ?>
                </div>

                
         
         
        </div><!--  /zone-1-->

</div> <!-- /node-inner -->
</div><!-- /node -->