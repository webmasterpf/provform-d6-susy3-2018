<?php
/* 03/2018 Liste les fichiers uploadés par
 * filefield and linkfield
 * création d'une liste dynamique
 10/2020: liste des liens contenus dans TdC[21] => page_bts
 */
?>

    <?php
    if (!empty(
         $node->field_lien_utile_bts[0]['view']
    ) ): ?>

               <?php  //récupération du nom du champ si besoin
               print $node->content['field_NAME']['field']['#title'] ?>
      <ul class="<?php print $node->content['field_lien_utile_bts']
      // Classe dynamique utilisant nom du champ
      ?>">
               <?php
               //Parcourir le tableau field_NAME de l'objet $node pour lister le contenu clé/valeur
              foreach ($node->field_lien_utile_bts as $key => $liens) {
                   //Ne pas afficher les champs vides du tableau
                      if (!empty($liens['view'])):
                    print '<li>'.$node->field_lien_utile_bts[$key]['view'].'</li>';
                endif;
               }
               ?>
    </ul>
    <?php endif;?>
