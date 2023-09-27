<?php get_header();  ?>

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
                            <li><a  href="<?=site_url()?>/news" class="active" title="News" >News</a> </li>        
                            <li><a  href="<?=site_url()?>/events" title="Nevents">Events</a> </li>   
                                
                        </ul>
                    </div>
                </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                    <div class="pl-3 mt-5 mb-5" style="border-radius:0">
                    <?php
                    while(have_posts()) {
                        the_post();
                    ?>
                        <div class="article fs18">
                            <div class="arc-tit">
                                <div class="date">
                                    <strong class="day fs42"><?php echo get_the_date('d'); ?></strong>
                                    <em class="year"><?php echo get_the_date('M, Y'); ?></em>
                                </div>
                                <h2 class="fs40 bold"><?php the_title(); ?></h2>
                            </div>
                            <div class="con">
                                <?php echo the_content(); 
                                    // comment_form();
                                ?>
                            </div>
                            
                        </div>
                    <?php
                    }
                    ?>
                    </div>
               </div>
           </div>

       </div>
    
          


            
    </section>

 



 
</main>
<?php get_footer();  ?>


</body>
</html>