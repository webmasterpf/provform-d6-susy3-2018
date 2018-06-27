<?php
/* Ce template permet la création d'un template pour un node ID spécifique
 */?>
<!--______________NODE TPL POUR Contenu Entreprise ID 619 .TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
                 <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="contenu-entreprise nid-<?php print $node->nid; ?>">
                     <?php if ($title): /*copier le titre dans la zone desirée*/?>
         
            <?php endif; ?>
            
             <?php if ($node->field_illus_entreprise[0]['view']
                 OR
                 $title
                 ): ?>
            <div id="illustration-pleinepage" class="illustration-contenu-entreprise">
                   <h1 class="titre_overlay titre_page"><?php print $title; ?></h1>
                 <?php  print $node->field_illus_entreprise[0]['view'] ?>
            </div>
            <?php endif;?>
     
            
            </div><!-- /zone-illustration -->
        <!--______________ ZONE 1 ________________ -->
      
        <div id="zone-1" class="zone_layout_max_centre contenu-entreprise nid-<?php print $node->nid; ?>">
        
            
            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            
                               <?php if ($node->field_vue_content_vr[0]['view']):
     print '<aside class="liste-contenus">'.$node->field_vue_content_vr[0]['view'].'</aside>';
 endif;
                            ?>
            
            <div class="content">

                
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                
                    <?php if ($formulaire): ?>
                    <div id="formulaire_partenaire">
                        <?php print $formulaire; ?>
                    </div><!-- /#formulaire_partenaire -->
                <?php endif; ?>

                <?php if ($centre_partenaire): ?>
                    <div id="centre-partenaire">
                        <?php print $centre_partenaire; ?>
                    </div>
                <?php endif; ?>
                    
                     <?php if ($node->field_video_externe[0]['view']): ?>
            <div class="video-rubentreprise">
                    <?php  print $node->field_video_externe[0]['view']  ?>
            </div>
            <?php endif;?>
                    
                 
          <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>                    
                    
          <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_2.php');
              ?>
                    
                    
            </div>

            
        
            <?php
            if ($node->field_fichier_joint_partenaires[0]['view']):

              global $theme_path;
                include($theme_path . '/includes/dedicates_inc/inc_docs_entreprise.php');
            endif;
            //il ne s'agit pas d'une vue mais de code PHP !!
            ?>
            

            
            <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        </div>
           


    </div> <!-- /node-inner -->
</div> <!-- /node-->