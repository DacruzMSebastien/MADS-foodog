<div id="footer">
    <div id="footerInfo">
        <div id="footerAlign">
            <!--<p> Copyright &#169; MADS TEAM-->
                <?php //print(date(Y)); ?>
                <?php //bloginfo('name'); ?>
                <!--<br /> Blog propulsé par
                <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par
                <a href="http://www.MADSteam.com">MADS TEAM</a>
                <br />
                <a href="feed:<?php //bloginfo('rss2_url'); ?>">Articles (RSS)</a> et
                <a href="feed:<?php //bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
                <?php //echo get_num_queries(); ?> requêtes.
                <?php //timer_stop(1); ?> secondes. 
            </p>-->
            <div id="footerCat">
                <h2 class="footerTitle">CATEGORIES</h2>
                <?php
                $args = array (
                    'menu' => 'Categorie2'
                );
                wp_nav_menu($args);?> 
            </div>
            <div id="footerPop">
                <h2 class="footerTitle">POPULAR POST</h2>
                <?php if(function_exists('wpp_get_mostpopular')){
                            $args = array(
                                'limit' => 3,
                                'stats_views' => 0,
                                'thumbnail_width' => 105,
                                'thumbnail_height' => 81);
                            wpp_get_mostpopular($args);
                }?>
            </div>
            <div id="footerInst">
                <h2 class="footerTitle">INSTAGRAM</h2>
                <div id="listInst">
                        <img id="inst1" src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien.jpg"  alt="chien"/>
                        <img id="inst2"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien10.jpg" alt="chien"/>
                        <img id="inst3"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien2.jpg" alt="chien"/>
                        <img id="inst4"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien3.jpg" alt="chien"/>
                        <img id="inst5"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien4.jpg" alt="chien"/>
                        <img id="inst6"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien5.jpg" alt="chien"/>
                        <img id="inst7"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien6.jpg" alt="chien"/>
                        <img id="inst8"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien7.jpg" alt="chien"/>
                        <img id="inst9"src="http://localhost/MADS-foodog/wordpress/wp-admin/images/chien8.jpg" alt="chien"/>
                </div> 
            </div>
        </div>
    </div>
    <div id="footerEnd">
        <div id="footerEndAlign">
            <ul>
                <li><a href="https://fr-fr.facebook.com/"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/face.png" alt="facebook"></a></li>
                <li><a href="https://twitter.com/?lang=fr"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/twit.png" alt="twitter"></a></li>
                <li><a href="https://www.instagram.com/?hl=fr"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/inst.png" alt="instagram"></a></li>
            </ul>
        </div>
    </div>
</div>