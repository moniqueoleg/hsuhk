<?php /* Template Name: BMSIM-Career-Prospects */ ?>
<main>
    <section class="page-banner position-relative">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueLight bold wow fadeInUp" title="Career Prospects">Career Prospects</h1>
              
                
            </div>
        </div>
        <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/b88.jpg" alt="images"></div>
    </section>
    <div class="bread">
            <div class="container">
                     <a href="../" title="Home">Home</a>   
                     <span>/</span>
                     <a href="" title="Programmes">Programmes</a>
                     <span>/</span>
                     <a href="../BMSIM-Cover/" title=" Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05) "> Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05)</a>
                     <span>/</span>
                     <a href="" title="Career Prospects">Career Prospects</a>
            </div>
    </div>


  
    <section class="index-block wow fadeInUp" >
       <div class="container">
           <div class="row">
               <div class="col-md-2 col-sm-12 col-xs-12 left">
                   <div class="mt-5">
                     <h2 class="fs20 pc blueLight bold wow fadeInUp" title="Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05)">Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05)</h2>
                     <h2 class="fs20 mobile blueLight bold wow fadeInUp" title="Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05)">Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05)</h2>
                     <div class="menu-box mt-3 wow fadeInUp">
                        <ul>
                            <?php
                            if ( is_active_sidebar( 'bmsim-sidebar' ) ) : ?>
                                <?php dynamic_sidebar( 'bmsim-sidebar' ); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                  </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                    <div class="pl-3 mt-5 mb-5">
                        
                        <div class="title fs28 white  wow fadeInUp" title="Career Prospects">Career Prospects</div>
                        <div class="txt fs18  wow fadeInUp">
                            <p>With a solid training in Management Science and Information Management, the areas of potential careers for graduates include:</p>
                            <ul>
                                <li>Manufacturing / Service Operations Management</li>
                                <li>Business / IT Project Management</li>
                                <li>Business Analysis & Consultation</li>
                                <li>System Management & Coordination</li>
                                <li>IT Sales & Marketing</li>
                                <li>Product / Software Development</li>
                                <li>Entre-preneurship</li>
                            </ul>
                            <p>With the rapid development of e-commerce, different industries are trying to keep pace with the times, hope to make use of information systems to improve management efficiency.</p>
                            <p>The results of the graduate employment survey in 2021 revealed that while the pandemic hit the whole global economy, the mean salary of BMSIM graduates increased by 0.96% compared to the graduates in 2020. The increasing salary shows that the industry highly values our graduates' knowledge and skills.</p>
                            <img src="http://localhost/bingo/wp-content/themes/hsuhk/static/images/ca.jpg" alt="images">
                        </div>

                        <div class="title fs28 mt-5 white  wow fadeInUp" title="Graduate Sharing">Graduate Sharing</div>
                        <div class="txt fs18  wow fadeInUp">
                            <div class="IOlist">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' =>'bmsim-career',
                                        'posts_per_page' => 6,
                                        'paged' => get_query_var('paged') // Add this line to update the page number
                                    );
                                    
                                    $query = new WP_Query($args);

                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                ?>
                                    <div class="col-md-6  col-sm-12 col-xs-12 mb-3 wow fadeInUp">
                                        <a href="javascript:;">
                                            <div class="imgs"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="pic"></div>
                                            <div class="right">
                                                <h4 class="fs20 blueText bold"><?php the_title(); ?></h4>
                                                <p class="fs18">Class of <?php echo get_field( 'graduate_year' ); ?> <?php echo get_field( 'degree' ); ?> <?php echo get_field( 'expertise' ); ?></p>
                                            </div>
                                        </a>
                                        <div class="pup">
                                            <div class="pupback"></div>
                                            <div class="container">
                                                <div class="conbox">
                                                    <div class="close"></div> 
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                                            <div class='pic'><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="pic"></div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-12 col-xs-12 mb-3">
                                                            <div class="fs32 bold blueText"><?php the_title(); ?></div>
                                                            <div class="txt fs18 mt-2">
                                                                <p><?php echo get_field( 'expertise' ); ?><br/>Class of <?php echo get_field( 'graduate_year' ); ?><br/><?php echo get_field( 'degree' ); ?></p>
                                                                <?php the_content(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="pageinfo">
                                    <?php
                                        $big = 999999999; // Set a large number
                                        // Define the pagination arguments
                                        $args = array(
                                            'base'       => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                            'format'     => '?paged=%#%',
                                            'mid_size'   => 2,
                                            'prev_next'  => True,
                                            'prev_text'  => __('Previous Page'),
                                            'next_text'  => __('Next Page'),
                                            'current'    => max( 1, get_query_var('paged') ),
                                            'total'      => $query->max_num_pages,
                                            'type'       => 'list'
                                        );

                                        $pages = paginate_links($args);

                                        // Display the pagination
                                        echo paginate_links( $args );
                                    ?>
                                    </div>
                                    <?php
                                    wp_reset_postdata();
                                }
                            ?>

                                </div>
                            </div>
                            
                        </div>

                  
            
                
                    </div>
               </div>
           </div>

       </div>
    
          


            
    </section>




 
</main>
