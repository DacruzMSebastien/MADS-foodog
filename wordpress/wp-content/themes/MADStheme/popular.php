<div class="popular-post">   
    <?php  
        if(function_exists('wpp_get_mostpopular')){
            $args = array(
                'limit' => 5,
                'thumbnail_width' => 221,
                'thumbnail_height' => 200);
            wpp_get_mostpopular($args);
        }
    ?>
</div> 