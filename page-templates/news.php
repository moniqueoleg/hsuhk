<?php require_once(get_template_directory() . '/header.php');  ?>
<main>
    <section class="page-banner position-relative">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueLight bold wow fadeInUp" title="News">News</h1>
              
                
            </div>
        </div>
        <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/b10.jpg" alt="images"></div>
    </section>
    <div class="bread">
            <div class="container">
                     <a href="" title="Home">Home</a>   
                     <span>/</span>
                     <a href="" title="News & Events">News & Events</a>
                     <span>/</span>
                     <a href="" title="News">News</a>
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
                            <li><a  href="#" class="active" title="News" >News</a> </li>        
                            <li><a  href="<?=site_url()?>/events" title="Events">Events</a> </li>   
                                
                        </ul>
                    </div>
               </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                    <div class="pl-3 mt-5 mb-5">
                        <div class="news">
                            <div class="row">
                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' =>'news',
                                        'posts_per_page' => 6,
                                        'paged' => get_query_var('paged') // Add this line to update the page number
                                    );
                                    
                                    $query = new WP_Query($args);

                                    if ($query->have_posts()) {
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                ?>
                                    <div class='col-md-6 col-sm-12 col-xs-12 mb-4 wow fadeInUp'>
                                        <a href="<?php the_permalink(); ?>">
                                            <!-- <div class="date">
                                                <strong class="day fs42">12</strong>
                                                <em class="year">Jan, 2023</em>
                                            </div> -->
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
                            <!-- <div class="pageinfo">
                                <ul>
                                    <li><a href="" class="prev">Previous Page</a></li>
                                    <li><a href="" class="active">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">....</a></li>
                                    <li><a href="">10</a></li>
                                    <li><a href="" class="next">Next Page</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
               </div>
           </div>
       </div>
    </section>
</main>
<?php require_once(get_template_directory() . '/footer.php');  ?>
</body>
</html>