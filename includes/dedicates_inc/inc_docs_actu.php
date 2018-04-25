<?php //

/*
 * Tableau pour afficher des fichiers joints (pdf) sans limite 
 * de nombre.
 */
?>
<?php
//
//foreach($node->field_fichier_joint as $file) {
//  if ($file['view']) {
//      $header = array('data' => 'Aller plus loin');
//      $rows[] = array($file['view']);
//      $attributes = array('class'=> 'doc-joints','sticky' => FALSE);
//    }
//}
//
//$output = theme('table', $header,$rows, $attributes);
//print $output;
?>

<?php
                    /* 03/2018 Liste les fichiers uploadés par
                     * filefield and linkfield
                     * création d'une liste dynamique 
                     */
                    if (!empty(
                        
         $node->field_fichier_joint[0]['view']
      
    ) ): ?>
                
               <?php  //récupération du nom du champ si besoin
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul class='doc-joints'>
               <?php
               //Parcourir le tableau field_NAME de l'objet $node pour lister le contenu clé/valeur
              foreach ($node->field_fichier_joint as $key => $liens) {
                   //Ne pas afficher les champs vides du tableau
                      if (!empty($liens['view'])):
                    print '<li>'.$node->field_fichier_joint[$key]['view'].'</li>';
                endif;
               }
               ?>  
                  </ul>  
            <?php endif;?>