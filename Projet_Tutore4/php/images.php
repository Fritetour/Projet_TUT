<main>
	<div>
        <h2>Images Satellitaires</h2>
        <br>
    </div>
    <div class="grid-container">
    <?php
        // Affichage des images du site web http://metsat.gogan.org

        // Récupère le contenu de la page web http://metsat.gogan.org
        $html = file_get_contents("http://metsat.gogan.org");
        //var_dump($html);

        // Recherche dans le contenu les chaines de caractères qui correspondent à l'expression : 
        // noaa-(des caractères alphanumériques)-(des caractères alphanumériques)-(des caractères alphanumériques).jpg
        // Mets le résultat dans le tableau $images ($images[0] contient les expressions qui correspondent complètement à l'expression recherchée)
        preg_match_all("/noaa-(\w+)-(\w+)-(\w+)\.jpg/", $html, $images, PREG_SET_ORDER);
        // var_dump($images);

        // Insère les url des images dans la page web
        foreach($images as $image) {
            echo '<div class="grid-child"><h4>'.$image[0].'</h4><img src="http://metsat.gogan.org/'.$image[0].'" /></div>';
        }


        // Affichage des immages à partir du répertoire img du site web
        // require_once('functions.php');
        // lister_images("./img/");
        
    ?>
    </div>
</main>