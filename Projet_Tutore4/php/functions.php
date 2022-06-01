
<?php
    function lister_images($repertoire){  
        $images = glob($repertoire."*.jpg");
        
        foreach($images as $image) {
            echo '<div class="grid-child"><img src="'.$image.'" /></div>';
        }
    } 
?>
