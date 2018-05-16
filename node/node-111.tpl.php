<!--______________NODE TPL POUR Contenu Entreprise Node/111 .TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
                 <!--______________ ILLUSTRATION et TITRE ________________ -->
        <div id="zone-illustration" class="contenu-entreprise">
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
      
        <div id="zone-1" class="zone1_layout_8_4 contenu-entreprise">


    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php  print $node->content['body']['#value']; ?>


      
                  <?php
            if ($node->field_docs_bts_alternance[0]['view']):

              global $theme_path;
                include($theme_path . '/includes/dedicates_inc/inc_docs_bts_alternance_111.php');
            endif;
            //il ne s'agit pas d'une vue mais de code PHP !!
            ?>
        
                  <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_1.php');
              ?>
        
    </div>

    <?php if ($terms): ?>

      <div id="taxonomy">
<?php //print Cyrano_PF_print_terms($node);?>
      </div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>
       
      </div>

<!--_______________________ ZONE 2 __________________ -->
<div id="zone-2" class="zone2_layout_8_4 contenu-entreprise">
    
            <?php
            if ($node->field_fichier_joint_partenaires[0]['view']):

              global $theme_path;
                include($theme_path . '/includes/dedicates_inc/inc_objectif_bts.php');
            endif;
            //il ne s'agit pas d'une vue mais de code PHP !!
            ?>

          <?php
              global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_zone_2.php');
              ?>
      </div>

  </div> <!-- /node-inner -->
</div> <!-- /node-->