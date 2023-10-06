<?php /* Template Name: BBA-SCM-Career-Prospects */ ?>
<main>
    <section class="page-banner position-relative">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueLight bold wow fadeInUp" title="Career Prospects">Career Prospects</h1>
              
                
            </div>
        </div>
        <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/b7.jpg" alt="images"></div>
    </section>
    <div class="bread">
            <div class="container">
                     <a href="../" title="Home">Home</a>   
                     <span>/</span>
                     <a href="" title="Programmes">Programmes</a>
                     <span>/</span>
                     <a href="../BBA-SCM-Cover/" title=" Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05) "> Bachelor of Management Science and Information Management (Honours)(BMSIM) Programme (JUPAS Code: JSSH05)</a>
                     <span>/</span>
                     <a href="" title="Career Prospects">Career Prospects</a>
            </div>
    </div>


  
    <section class="index-block wow fadeInUp" >
       <div class="container">
           <div class="row">
               <div class="col-md-2 col-sm-12 col-xs-12 left">
                   <div class="mt-5">
                     <h2 class="fs20 pc blueLight bold wow fadeInUp" title="Bachelor of Business Administration (Honours) in Supply Chain Management (BBA-SCM) Programme (JUPAS Code: JSSH01)">Bachelor of Business Administration (Honours) in Supply Chain Management (BBA-SCM) Programme (JUPAS Code: JSSH01)</h2>
                     <h2 class="fs20 mobile blueLight bold wow fadeInUp" title="Bachelor of Business Administration (Honours) in Supply Chain Management (BBA-SCM) Programme (JUPAS Code: JSSH01)">Bachelor of Business Administration (Honours) in Supply Chain Management (BBA-SCM) Programme (JUPAS Code: JSSH01)</h2>
                     <div class="menu-box mt-3 wow fadeInUp">
                        <ul>         	        
                            <li><a  href="../bba-scm-programme-overview/"title="Programme Overview ">Programme Overview </a> </li>        
                            <li><a  href="../BBA-SCM-Career-Prospects/" class="active"  title="Career Prospects">Career Prospects</a> </li>  
                            <li><a  href="../BBA-SCM-Professional-Recognition/"  title="Professional Recognition" >Professional Recognition</a> </li>  
                            <li><a  href="../BBA-SCM-Programme-Pamphlet/" title="Programme Pamphlet">Programme Pamphlet</a> </li>        
                            <li><a  href="../BBA-SCM-Experience-and-Opportunities/" title="Experience and Opportunities">Experience and Opportunities</a> </li>  
                            <li><a  href="../BBA-SCM-Admission/" title="Admission" >Admission</a> </li>  
                                
                        </ul>
                    </div>
                  </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                    <div class="pl-3 mt-5 mb-5">
                        
                        <div class="title fs28 white  wow fadeInUp" title="Career Prospects">Career Prospects</div>
                        <div class="txt fs18  wow fadeInUp">
                            <p>The programme aims to cultivate student to be management professionals with analytical thoughts and innovative and design solutions for business. Graduates are expected to have the abilities to join various professions including:</p>
                            <ul>
                                <li>Purchasing Management</li>
                                <li>Production and Operation Management</li>
                                <li>Logistics and Sales Management</li>
                                <li>Supply Chain Management</li>
                                <li>Vendor Quality Development</li>
                                <li>Enterprise Resources Planning</li>
                                <li>Quality Management</li>

                                <li>Inventory Management</li>
                                <li>Order Processing and Customer Service Management</li>
                                <li>Management Information System</li>
                            </ul>
                    
                        </div>

                        <div class="title fs28 mt-5 white  wow fadeInUp" title="Graduate Sharing">Graduate Sharing</div>
                        <div class="txt fs18  wow fadeInUp">
                            <div class="IOlist">
                                <div class="row">

                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' =>'bba-scm-career',
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
                                                <p class="fs18"><?php echo get_field( 'expertise' ); ?> <?php echo get_field( 'graduate_year' ); ?> Graduate <?php echo get_field( 'degree' ); ?></p>
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
                                                                <p><?php echo get_field( 'expertise' ); ?><br/><?php echo get_field( 'graduate_year' ); ?> Graduate<br/><?php echo get_field( 'degree' ); ?></p>
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
