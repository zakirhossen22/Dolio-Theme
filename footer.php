<div class="tf-modal-content justify-content-end"> 
<footer id="footer" class="footer footer-s4">
<div class="container">
    <div id="footer-widget" class="footer-widget-s3 border-bottom-s2 position-relative">
        <h3 class="widget-title larger lt-sp06 text-white text-center"><?php echo esc_html(get_field('try_me_heading','option'));?></h3>
        <div class="site-list site-list-center text-center">
            <?php
            $trys = get_field('try_me_social','option');
            foreach($trys as $try){
            ?>
            <a href="<?php echo $try['try_social_link'];?>" class="bg-s1"><i class="fa <?php echo $try['try_social_icon'];?>" aria-hidden="true"></i></a>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div id="bottom" class="bottom-s3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="copyright lt-sp02">
                    <?php echo get_field('footer_text','option');?>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="widget-nav-menu color-s2">
                <?php
                if(is_active_sidebar('sidebar-1')){
                    dynamic_sidebar('sidebar-1');

                }
                
                ?>
                </ul>
            </div>
            <div class="col-lg-2">
                <div class="socials-list color-s2">
                    <?php
                    if(class_exists('ACF')){
                    if( $footer_socials = get_field('footer_social','option')){
                        foreach($footer_socials as $footer_social){
                        ?>
                        <a href="<?php echo $footer_social['footer_social_icon_link'];?>"><i class="fa <?php echo $footer_social['footer_social_icon'];?>" aria-hidden="true"></i></a>
                        <?php
                        }
                    }  
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</footer><!-- footer -->
</div>

        </div>
    </div><!-- content -->
    <a id="scroll-top"></a>

    
<?php wp_footer();?>
</body>
</html>