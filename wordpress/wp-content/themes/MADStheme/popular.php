<div class="popular-post">
    <h3 class="title">POPULAR POST</h3>
    <?php if(function_exists('wpp_get_mostpopular')){
                $args = array(
                    'limit' => 5,
                    'stats_views' => 0);
                wpp_get_mostpopular($args);
    }?>
</div>
