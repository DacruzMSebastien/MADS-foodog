<div class="popular-post">   
          <?php  if(function_exists('wpp_get_mostpopular')){
                $args = array(
                    'limit' => 5,
                    'stats_category' =>1,
                    'thumbnail_width' => 300,
                    'thumbnail_height' => 270);
                wpp_get_mostpopular($args);
    }?> 