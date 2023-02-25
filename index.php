<?php get_header();?>
<!-- banner-section-start -->
<div id="content" class="content">
<div class="homepage-personal">            
<section class="banner-section s4 two-home" id="home">
<div class="container">
<div class="content-text position-relative">
    <div class="animate-element wow delay5 fadeInDown" data-wow-delay="0.3s">
        <div class="tag color-d1 lt-sp53 mg-b34"><?php echo get_field('banner_sub_heading','option');?></div>

        <h1 class="cd-headline clip is-full-width title color-d11 mg-b41">
            <span>Hello, </span>
            <span class="cd-words-wrapper color-d6">
                <?php
                if(class_exists('ACF')){
                    if( $headings = get_field('banner_heading','option')){
                        foreach($headings as $heading){
                            ?>
                            <b class="is-visible"><?php echo $heading['banner_heading1'];?></b>
                        <?php
                        }
                    }   
                }
                ?>
            </span>
        </h1>
        <p class="color-d13 lt-sp02 mg-b51">
        <?php echo get_field('banner_description','option');?>
        </p>
    </div>
    <div class="animate-element wow delay5 fadeInUp" data-wow-delay="0.3s">
        <div class="fl-btn btn-general color-s2 btn-hv-border">
            <a href="#" class="f-w500 color-d6 border-corner5 lt-sp01 text-two"><?php echo get_field('banner_btn_text','option');?></a>
        </div>
    </div>
</div>
<!-- banner-section-end -->

<div class="featured-post border-corner-bl">
    <img src="<?php echo esc_attr(get_template_directory_uri());?>/images/section/47.jpg" alt="images">
    <div class="site-list has-border text-center animate-element wow delay5 fadeInUp" data-wow-delay="0.3s">
        <a href="#" class="bg-s1"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#" class="bg-s2"><i class="fa fa-behance" aria-hidden="true"></i></a>
        <a href="#" class="bg-s3"><span class="icon-dribble"></span></a>
    </div>
</div>
</div>

</section>
<!-- banner-section -->

<section class="about-me t2 s3 shape-am position-relative" id="about">
<div class="section-icons">
<div class="shape-one"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/01.png" alt="images"></div>
<div class="shape-two"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/02.png" alt="images"></div>
<div class="shape-three"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/03.png" alt="images"></div>
<div class="shape-four"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/04.png" alt="images"></div>
<div class="shape-five"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/05.png" alt="images"></div>
<div class="shape-six"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/06.png" alt="images"></div>
</div>
<div class="container">
<div class="row position-relative">
    <div class="col-lg-7 animate-element wow delay5 fadeInDown">
        <div class="flat-title t2">
            <h4 class="sub-title mg-b22"><?php echo get_field('about_sub_heading','option');?></h4>
            <h2 class="title-section color-d11 mg-b41"><?php echo get_field('about_heading','option');?></h2>
            <div class="description">
                <p class="color-d13 lt-sp01">
                <?php echo get_field('about_description','option');?>
                </p>
            </div>
        </div>
    </div>
    <div class="fact">
        <div class="d-md-flex mg-b40">
            <div class="col-left">
                <div class="f-item color-s2 counter mg-f-item1">
                    <div class="counter-box bg-s2 d-flex justify-content-center align-items-center">
                        <div class="inner">
                            <span class="numb-count" data-from="0" data-to="284" data-speed="2000" data-inviewport="yes"><?php echo get_field('client_number','option');?></span>
                            <p class="color-d13"><?php echo get_field('client_text','option');?></p>
                        </div>
                    </div>
                </div>
                 <div class="f-item color-s3 counter mg-f-item2">
                    <div class="counter-box bg-s2 d-flex justify-content-center align-items-center">
                        <div class="inner">
                            <span class="numb-count" data-from="0" data-to="165" data-speed="2000" data-inviewport="yes"><?php echo get_field('review_text','option');?></span>
                            <p class="color-d13"><?php echo get_field('review_number','option');?></p>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-right">
                <div class="f-item color-s4 counter mg-f-item3">
                    <div class="counter-box bg-s2 d-flex justify-content-center align-items-center">
                        <div class="inner">
                            <span class="numb-count" data-from="0" data-to="379" data-speed="2000" data-inviewport="yes"><?php echo get_field('project_number','option');?></span>
                            <p class="color-d13"><?php echo get_field('project_text','option');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-contact bg-s2 text-center">
            <h4 class="title color-d11"><?php echo get_field('email_heading','option');?></h4>
            <a href="#" class="email color-s2 color-d15"><?php echo get_field('email','option');?></a>
        </div>
    </div>
</div>
</div>
<div class="featured-post animate-element wow delay5 fadeInUp" data-wow-delay="0.5s">
<img src="<?php echo esc_attr(get_template_directory_uri());?>/images/section/51.png" alt="images">
</div>
</section>
<!-- about-me -->

<section class="experienced s3" id="services">
<div class="container">
<div class="background-inner bg-s2">
    <div class="flat-title animate-element wow delay5 fadeInDown" data-wow-delay="0.5s">
        <h2 class="title-section color-d11 mg-b44 text-center">SPECILIZING IN</h2>
    </div>
    <div class="row animate-element wow delay5 fadeInUp" data-wow-delay="0.5s">

    <?php 
    if(class_exists('ACF')){

        if( $specials = get_field('Specialize_item','option')){
         foreach($specials as $special){
        ?>
        <div class="col-lg-4">
                <div class="iconbox-s2">
                    <div class="featured-post mg-b43"><img src="<?php echo $special['special_item_image']; ?>" alt="images"></div>
                    <h3 class="title mg-b21"><a href="#" class="color-d11"><?php echo $special['special_item_heading']; ?></a></h3>
                    <p class="color-d13">
                    <?php echo $special['special_item_description']; ?> 
                    </p>
                </div>
            </div>
        <?php
        }
        }    
    }
    ?>
    </div>
</div>
</div>
</section>
<!-- experienced -->                   

<section class="get-project s4">
<div class="container">
<div class="row">
    <div class="col-lg-6">
        <div class="featured-post animate-element wow delay5 fadeZooming" data-wow-delay="0.5s">
            <img src="<?php echo get_field('hello_big_image','option') ?>" alt="images">
        </div>
    </div>
    <div class="col-lg-6">
<div class="content-inner animate-element wow delay5 fadeInUp" data-wow-delay="0.5s">
    <h2 class="title mg-b14 color-d11"><?php echo get_field('hello_section_heading','option') ?></h2>
    <div class="site-list has-border">
        <?php
        if(class_exists('ACF')){
            if($socials = get_field('hello_section_social','option')){
                foreach($socials as $social){
                    ?>
                    <a href=" <?php echo $social['hello_social_icon_link']; ?>" class="bg-s1"><i class="fa <?php echo $social['hello_social_icon']; ?>" aria-hidden="true"></i></a>
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
</section>
<!-- get-project -->
        
<section class="flat-education s3 position-relative" id="resume">
<div class="container">
<div class="flat-title t2 animate-element wow delay5 fadeInDown" data-wow-delay="0.5s">
    <h4 class="sub-title mg-b13">Educational qualification</h4>
    <h2 class="title-section color-d11">Education & Experience</h2>
</div>
<div class="animate-element delay5 fadeInDown" data-wow-delay="0.5s">
    <div class="padding-bottom">
        <div class="row">
<?php 
$args = array(
    'post_type' => 'educations',
    'order' => 'ASC',
    'posts_per_page' => 6
);
$query = new wp_Query($args);
while($query -> have_posts()){
    $query -> the_post()
    ?>
    <div class="col-lg-4 last-col animate-element wow delay5 fadeIn" data-wow-delay="0.3s">
    <div class="experience-box experience-box-line t3">
        <div class="box-inner">
            <h3 class="f-info bg-s2 color-d6"><?php echo get_field('course_name'); ?></h3>
            <div class="exp-wrap">
                <div class="s-info color-d11 mg-b11"><?php the_title();?></div>
                
                <?php the_content();?> 
                
            </div>
        </div>
    </div>
</div>
<?php
}
wp_reset_postdata();
?>
</div>
</div>


<div class="row">
<?php 
$args = array(
    'post_type' => 'educations',
    'order' => 'DESC',
    'posts_per_page' => 3
);
$query = new wp_Query($args);
while($query -> have_posts()){
    $query -> the_post()
    ?>
    <div class="col-lg-4 last-col animate-element wow delay5 fadeIn" data-wow-delay="0.8s">
            <div class="experience-box experience-box-line t3">
                <div class="box-inner">
                    <h3 class="f-info bg-s2 color-d6"> <?php echo get_field('education_date');?> </h3>
                    <div class="exp-wrap">
                        <div class="s-info color-d11 mg-b11"> <?php  the_title(); ?> </div>
                        <p class="color-d13">
                           <?php  the_content(); ?> 
                        </p>
                    </div>
                </div>
            </div>
     </div>
    <?php
    }
    ?>  
    </div>
</div>
</div>
</section>
<!-- flat-education -->
                        
<section class="flat-case-study s3" id="portfolio">
<div class="container">
<div class="d-md-flex">
    <div class="col-left animate-element wow delay5 fadeInDown" data-wow-delay="0.5s">
        <div class="image-link t2">
            <div class="featured-post">
                <a href="#"><img src="<?php echo get_field('portfolio_item1','option');?>" alt="images"></a>
            </div>
            <div class="portfolio-template-link text-center">
                <a href="<?php echo get_field('portfolio_item1_btn_link','option');?>" class="text-white"><?php echo get_field('portfolio_item1_btn_text','option');?></a>
            </div>
        </div>
        <div class="image-link t2">
            <div class="featured-post">
                <a href="#"><img src="<?php echo get_field('portfolio_item2','option');?>" alt="images"></a>
            </div>
        </div>
        <div class="fl-btn text-center"> 
            <a href="<?php echo get_field('portfolio_btn_link','option');?>" class="f-w500"><?php echo get_field('portfolio_btn_text','option');?></a>
        </div>
    </div>
    <div class="flat-spacer" data-desktop="0" data-mobile="100" data-smobile="100"></div>
    <div class="col-right animate-element wow delay5 fadeInUp" data-wow-delay="0.5s">
        <div class="flat-title t2 mg-b60">
            <h4 class="sub-title mg-b13"><?php echo get_field('portfolio_sub_heading','option');?></h4>
            <h2 class="title-section color-d11 mg-b20"><?php echo get_field('portfolio_heading','option');?></h2>
            <p class="color-d13">
            <?php echo get_field('testimonial_description','option');?>
            </p>
        </div>
        <div class="pd-right">
            <div class="image-link t2">
                <div class="featured-post">
                    <a href="#"><img src="<?php echo get_field('portfolio_item3','option');?>" alt="images"></a>
                </div>
            </div>
            <div class="image-link t2">
                <div class="featured-post">
                    <a href="#"><img src="<?php echo get_field('portfolio_item4','option');?>" alt="images"></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- flat-case-study -->

<section class="testimonial t2 s2 bg-s2 position-relative" id="testimonial">
<div class="background-right bg-cl3">
<div class="text-testimonial color-d18">Testimonial</div>
</div>
<div class="background-transparent bg-cl5"></div>
<div class="container d-lg-flex">
<div class="col-left animate-element wow delay5 fadeInDown" data-wow-delay="0.5s">
    <div class="flat-spacer" data-desktop="4" data-mobile="0" data-smobile="0"></div>
    <div class="wrap-box bg-cl1 position-relative">
        
        <div class="featured-post mg-b27"><img src="<?php echo get_field('testimonial_big_image','option') ?>" alt="images"></div>

        <div class="images-list d-flex justify-content-between">
        <?php 
        if(class_exists('ACF')){
            if($images = get_field('testimonial_small_image','option')){
            foreach($images as $image){
            ?>
            <img src="<?php echo $image['small_image'];?>" alt="images">
            <?php
            }
            }   
        }
        ?>
        </div>
        <div class="quote"><img src="<?php echo esc_attr(get_template_directory_uri());?>/images/testimonial/09.png" alt="images"></div>
    </div>
</div>
<div class="col-right animate-element wow delay5 fadeInUp" data-wow-delay="0.5s">
    <div class="flat-spacer" data-desktop="0" data-mobile="100" data-smobile="100"></div>
    <div class="flat-title t2">
        <h4 class="sub-title mg-b13"><?php echo get_field('testimonial_section_sub_hading','option'); ?></h4>
        <h2 class="title-section color-d11 mg-b20"><?php echo get_field('testimonial_section_heading','option');  ?></h2>
    </div>
    <div class="slider-drop-apps custom-dot dot-s1 none-nav-default mg-dots-s3">
        <div class="flat-carousel-box data-effect clearfix" data-gap="0" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-column5="1" data-dots="true" data-auto="false" data-nav="false" data-loop="true">
            <div class="owl-carousel">

            <?php
            if(class_exists('ACF')){
        if($testimonials =  get_field ('testimonial_item','option')){
            foreach($testimonials as $testimonial){
                ?>
                <div class="client-info">
                <p class="color-d13">
                    “<?php echo $testimonial['testimonial_item_description'];?>”
                </p>
                <div class="client-detail color-d13">
                    <span class="color-d6 f-w500"><?php echo $testimonial['testimonial_item_name'];?></span> at <?php echo $testimonial['testimonial_item_designation'];?>
                </div>
                    </div>
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
</section>
<!-- testimonial -->  

<?php get_footer();?>