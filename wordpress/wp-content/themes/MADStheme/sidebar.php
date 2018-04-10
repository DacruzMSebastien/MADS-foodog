<!-- SIDEBAR ( MENU ) -->

<div class="sidebar">
    <ul>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?> <!--CONTENU DE LA SIDEBAR -->

        <!-- <li id="search">
            <//?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </li>
        <li>
            <h2>Categories</h2>
            <//?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
            <//?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
        </li>
        <li>
            <h2>Archives</h2>
            <ul>
                <//?php wp_get_archives('type=monthly'); ?>
                <//?php get_links_list(); ?>
            </ul>
        </li>
        <li>
            <h2>Infos Meta</h2>
            <ul>
                <//?php wp_register(); ?>
                <li>
                    <//?php wp_loginout(); ?>
                </li>
                <li>
                    <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">
                        <abbr title="eXtensible HyperText Markup Language">XHTML valide</abbr>
                    </a>
                </li>
                <li>
                    <a href="http://gmpg.org/xfn/">
                        <abbr title="XHTML Friends Network">XFN</abbr>
                    </a>
                </li>
                <li>
                    <a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a>
                </li>
                <li>
                    <a href="http://wordpress-fr.net/" title="Communauté française de WordPress et WPmu.">WordPress Francophone</a>
                </li>
                <//?php wp_meta(); ?>
            </ul>
        </li>
        <li>
            <h2>Abonnez-vous au blog !</h2>
            <ul>
                <li>
                    <a href="<//?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles</a>
                </li>
                <li>
                    <a href="<//?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires</a>
                </li>
            </ul>
        </li> -->
        <div class="liensSubscribe">
            <div class="sidebar_social">
                <ul>
                    <li class="fcbk">
                        <a href="https://fr-fr.facebook.com/">
                            <img class="social" src="http://localhost/MADS-foodog/wordpress/wp-admin/images/facebook.png" alt="facebook">
                        </a>21 562 Fans <span>LIKE</span>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/?lang=fr">
                            <img class="social" src="http://localhost/MADS-foodog/wordpress/wp-admin/images/twitter.png" alt ="twitter">
                        </a>1 401 Followers <span>FOLLOW</span>
                    </li>
                    <li class="insta">  
                        <a href="https://www.instagram.com/?hl=fr">
                            <img class="social" src="http://localhost/MADS-foodog/wordpress/wp-admin/images/insta.png" alt="instagram">
                        </a>23 538 Followers <span>FOLLOW</span>
                    </li>
                </ul>
            </div>

            <img class="alignleft size-full wp-image-133" src="http://localhost/MADS-foodog/wordpress/wp-content/uploads/2018/03/sidebar1.jpg" alt="" width="250" height="500" />
        </div>
        <?php endif; ?>
    </ul>
</div>
