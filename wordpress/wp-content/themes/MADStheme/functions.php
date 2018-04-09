<?php if ( function_exists('register_sidebar') ) register_sidebar(2); ?>

<?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>

<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured[ 'meta-checkbox']
                ) ) checked( $featured[ 'meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>

    </div>
</p>

<?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>

    <?php
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}

}
add_action( 'save_post', 'sm_meta_save' );

add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
  }

  //Pagination
  function pagination($query) {  
	
	$baseURL="http://".$_SERVER['HTTP_HOST'];
	if($_SERVER['REQUEST_URI'] != "/"){
		$baseURL = $baseURL.$_SERVER['REQUEST_URI'];
	}
 
	// Suppression de '/page' de l'URL
	$sep = strrpos($baseURL, '/page/');
	if($sep != FALSE){
		$baseURL = substr($baseURL, 0, $sep);
	}
 
  // Suppression des paramètres de l'URL
	$sep = strrpos($baseURL, '?');
	if($sep != FALSE){
	// On supprime le caractère avant qui est un '/'
		$baseURL = substr($baseURL, 0, ($sep-1));
	}	
	
	$page = $query->query_vars["paged"];  
	if ( !$page ) $page = 1;  
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";  
	
	// Nécessaire uniquement si on a plus de posts que de posts par page admis 
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {  
		echo '<ul class="pagination">'; 
		// lien précédent si besoin
		if ( $page > 1 ) { 
			echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">« précédente</a></li>'; 
		} 
		// la boucle pour les pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) { 
			// ajout de la classe active pour la page en cours de visualisation
			if ( $i == $page ) { 
				echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>'; 
			} else { 
				echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>'; 
			} 
		} 
		// le lien next si besoin
		if ( $page < $query->max_num_pages ) { 
			echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">suivante »</a></li>'; 
		} 
		echo '</ul>';  
	}  
}

?>
