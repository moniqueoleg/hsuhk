<?php /* Template Name: BBA-SCM-Cover */ ?>
<main>
    <section class="banner position-relative wow fadeInUp">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/banner.jpg" alt="banner"></div>
                    <div class="inner">
                        <div class="container">
                            <div class="banText banText2">
                                <h1 class="fs36 bold blueText">Bachelor of Business<br/> Administration (Honours) in <br/>Supply Chain Management (BBA-SCM)</h1>
                                <a href="" class="more">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/bs.png" alt="banner"></div>
                    <div class="inner">
                        <div class="container">
                            <div class="banText banText2">
                                <h1 class="fs36 bold blueText">Bachelor of Business<br/> Administration (Honours) in <br/>Supply Chain Management (BBA-SCM)</h1>
                                <a href="" class="more">More</a>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
 
    </section>

    <section class="first-block py-5 wow fadeInUp" >
       <div class="container">
            <div class="mneubar">
                <div class="row justify-content-between">
                    <div class="col-md-2 col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                        <a href="../bba-scm-programme-overview/">
                            <img src="<?=get_template_directory_uri()?>/static/images/i1.svg" alt="Programme Overview">
                            <h3 class="fs20 text-center bold blueText">Programme Overview</h3>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                        <a href="../BBA-SCM-Career-Prospects/">
                            <img src="<?=get_template_directory_uri()?>/static/images/i2.svg" alt="Career Prospects"> 
                            <h3 class="fs20 text-center bold blueText">Career Prospects</h3>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                        <a href="../BBA-SCM-Professional-Recognition/">
                            <img src="<?=get_template_directory_uri()?>/static/images/i3.svg" alt="Professional Recognition">
                            <h3 class="fs20 text-center bold blueText">Professional Recognition</h3>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                        <a href="../BBA-SCM-Programme-Pamphlet/">
                            <img src="<?=get_template_directory_uri()?>/static/images/i4.svg" alt="Programme Pamphlet">
                            <h3 class="fs20 text-center bold blueText">Programme Pamphlet</h3>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                        <a href="../BBA-SCM-Experience-and-Opportunities/">
                            <img src="<?=get_template_directory_uri()?>/static/images/i5.svg" alt="Experience and Opportunities">
                            <h3 class="fs20 text-center bold blueText">Experience and Opportunities</h3>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                        <a href="../BBA-SCM-Admission/">
                            <img src="<?=get_template_directory_uri()?>/static/images/i6.svg" alt="Admission">
                            <h3 class="fs20 text-center bold blueText">Admission</h3>
                        </a>
                    </div>
                </div>
            </div>
           <div class="row mt-4">
                <div class='col-md-7 col-sm-12 col-xs-12 mt-4 wow fadeInUp'>
                   <div class="title fs36 bold mb-3">Video</div> 
                   <div class="video">
                       <img src="<?=get_template_directory_uri()?>/static/images/video.jpg" alt="video">
                   </div>
               </div>
               <div class='col-md-5 col-sm-12 col-xs-12 mt-4 wow fadeInUp'>
                    <div class="title fs36 bold mb-3">News</div> 

                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'category_name' =>'news',
                            'posts_per_page' => 1
                        );
                        
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                    ?>

                            <a href="<?php the_permalink(); ?>">
                                <div class="date">
                                    <strong class="day fs42"><?php echo get_the_date('d'); ?></strong>
                                    <em class="year"><?php echo get_the_date('M, Y'); ?></em>
                                </div>
                                <div class="boximg">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="pic">
                                
                                </div>
                                <div class="con fs20">
                                    <p><?php the_title(); ?></p>
                                </div>
                            </a>
                        <?php
                        }
                        wp_reset_postdata();
                    }
                ?>

               </div>
           </div>
       </div>
    </section>
</main>
