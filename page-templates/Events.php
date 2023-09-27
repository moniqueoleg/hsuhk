<?php /* Template Name: Events */ ?>
<main>
    <section class="page-banner position-relative">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueLight bold wow fadeInUp" title="News & Events">News & Events</h1>
              
                
            </div>
        </div>
        <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/b5.jpg" alt="images"></div>
    </section>
    <div class="bread">
            <div class="container">
                <a href="../" title="Home">Home</a>   
                <span>/</span>
                <a href="../news/" title="News & Events">News & Events</a>
                <span>/</span>
                <a href="../events/" title="Events">Events</a>
            </div>
    </div>
  
    <section class="index-block wow fadeInUp" >
       <div class="container">
           <div class="row">
               <div class="col-md-2 col-sm-12 col-xs-12 left">
                   <div class="mt-5">
                    <h2 class="fs20 pc blueLight bold wow fadeInUp" title="News & Events">News & Events</h2>
                    <h2 class="fs20 mobile blueLight bold wow fadeInUp" title="News & Events">News & Events</h2>
                    <div class="menu-box mt-3 wow fadeInUp">
                        <ul>         	        
                            <li><a  href="../news/"  title="News" >News</a> </li>        
                            <li><a  href="../events/" class="active" title="Events">Events</a> </li>   
                                
                        </ul>
                    </div>
               </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                    <div class="pl-3 mt-5 mb-5">
                        <div class="news">
                            <div class="evlist">

                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' =>'events',
                                        'posts_per_page' => 6,
                                        'paged' => get_query_var('paged') // Add this line to update the page number
                                    );
                                    
                                    $query = new WP_Query($args);

                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                ?>

                                <div class="items">  
                                    <a href="javascript:;">
                                        <div class="boximg"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"></div>
                                        <div class="conbox">
                                            <h5 class="tit fs20"><?php the_title(); ?></h5>
                                            <em class="date"><?php the_time('F j, Y'); ?></em>
                                            <?php the_content(); ?>
                                        </div>
                                    
                                    </a>
                                    <div class="pup" id="events-<?php get_the_ID(); ?>">
                                            <div class="pupback"></div>
                                            <div class="container">
                                                <div class="conbox">
                                                    <div class="close"></div> 
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                                            <div class='pic'><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="pic"></div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-12 col-xs-12 mb-3">
                                                            <div class="fs24 bold blueLight"><?php the_title(); ?></div>
                                                            <div class="txt fs18 mt-2">
                                                                    <p></p>
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
    </section>
</main>
