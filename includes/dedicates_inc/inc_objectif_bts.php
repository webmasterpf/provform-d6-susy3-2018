<?php
/*
 * Tableau pour afficher les objectifs BTS (pdf) sans limite 
 * de nombre.Remplacé par liste dynamique pour thème 2018 en 05/2018.
 * Suite conversion ,changement de nom de champ pour les fichiers  : field_fichier_joint_partenaires
 * remplace field_objectif_bts
 */
?>
<?php
/* 03/2018 Liste les fichiers uploadés par
 * filefield  création d'une liste dynamique 
 */
if (!empty(
        $node->field_fichier_joint_partenaires[0]['view']
    )):
    ?>
    <div class="objectif-bts">
    <?php //récupération du nom du champ
    print $node->content['field_NAME']['field']['#title']
    ?>
        <h3>Les objectifs des formations BTS</h3>
        <ul>
            <?php
            //Parcourir le tableau field_NAME de l'objet $node pour lister le contenu clé/valeur
            foreach ($node->field_fichier_joint_partenaires as $key => $fichiers) {
                //Ne pas afficher les champs vides du tableau
                if (!empty($fichiers['view'])):
//                       print 'Contenu de $fichier'.var_dump($fichier);

                    print '<li>' . $node->field_fichier_joint_partenaires[$key]['view'] . '</li>';

                endif;
            }
            ?>  
        </ul>   </div>
        <?php endif; ?>