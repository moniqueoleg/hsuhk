<?php get_header();  ?>
<main>
<?php
while ( have_posts() ) :
    the_post();
?>
    <section class="page-banner position-relative wow fadeInUp">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueText bold wow fadeInUp" title="Faculty">Faculty</h1>
              
                
            </div>
        </div>
        <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/b1.jpg" alt="images"></div>
        <div class="bread">
            <div class="container">
                
                     <a href="<?=home_url();?>" title="Home">Home</a>   
                     <span>/</span>
                     <a href="<?=home_url();?>/overview/" title="About Us">About Us</a>
                     <span>/</span>
                     <a href="<?=home_url();?>/faculty/" title="Faculty">Faculty</a>
                     <span>/</span>
                     <a href="" title="<?php the_title(); ?>"><?php echo get_field( 'name' ); ?></a>
        
            </div>
        </div>
    </section>

  
    <section class="index-block py-5 wow fadeInUp" >
       <div class="container">
           <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 left">
                    <h2 class="fs20 pc blueText bold wow fadeInUp" title="About Us">About Us</h2>
                    <h2 class="fs20 mobile blueText bold wow fadeInUp" title="About Us">About Us</h2>
                    <div class='htmleaf-container wow fadeInUp'>
                        <div class="menu-box htmleaf-content bgcolor-3  ">
                            <ul class="mtree bubba">         	        
                                <li><a  href="<?=home_url();?>/overview/"  title="Overview">Overview</a> </li>        
                                <li><a  href="<?=home_url();?>/faculty/" class="active"  title="Staff">Faculty</a> </li>  
                                <li><a  href="<?=home_url();?>/contact-us/"  title="Contact Us" >Contact Us</a> </li>                                  
                            </ul>
                        </div>
                    </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                
                    <div class="pl-3 mt-3">
                        <div class="txt">
                            

                            <div class="Academic mb-3 wow fadeInUp">
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 col-xs-12 mt-3">
                                            <div class="ten">
                                                <div class="imgs"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="images"></div>
                                                <div class="right fs18">
                                                    <h4 class="fs20 blueLight bold"><?php echo get_field( 'name' ); ?><br/><?php echo get_field( 'chinese_name' ); ?></h4>
                                                    <dl>
                                                        <dd><img src="<?=get_template_directory_uri()?>/static/images/mail.svg" alt="icos"><span>Email: <?php echo get_field( 'email' ); ?></span></dd>
                                                        <dd><img src="<?=get_template_directory_uri()?>/static/images/tel.svg" alt="icos"><span>Tel: <?php echo get_field( 'phone' ); ?></span></dd>
                                                        <dd><img src="<?=get_template_directory_uri()?>/static/images/door.svg" alt="icos"><span>Office : <?php echo get_field( 'office' ); ?></span></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <p><?php echo get_field( 'certification' ); ?></p>
                                            <p><?php echo get_field( 'position' ); ?></p>
                                                        

                                        </div>
                                        <div class="col-md-7 col-sm-12 col-xs-12 mt-3">
                                            <div class="txt fs18">
                                                <p>&nbsp;&nbsp;&nbsp;</p>
                                                <p>&nbsp;&nbsp;&nbsp;</p>
                                                <p><?php echo get_field( 'bio' ); ?></p>
                                                <p>&nbsp;&nbsp;&nbsp;</p>
                                                <p>&nbsp;&nbsp;&nbsp;</p>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </div>
                                <div class="tags mt-5">
                                    <div class="in"> 
                                        <a href="#one" class="active">Selected Publications</a>
                                        <a href="#two">Books</a>
                                    </div>
                                </div>
                                <div class="itlist">
                                    <div class="items" id="one">
                                        <h4 class="fs20 bold">Selected Publications</h4>
                                        <div class="txt fs18">
                                        <?php echo get_field( 'selected_publications' ); ?>
                                        </div>
                                    </div>
                                    <div class="items" id="two">
                                        <h4 class="fs20 bold">Books</h4>
                                        <div class="txt fs18">
                                        <?php echo get_field( 'books' ); ?>
                                        </div>
                                    </div>
                                </div>
                        
                            </div>

                        </div>

                    </div>
               </div>
           </div>

       </div>
          


            
    </section>

   
 


<?php
endwhile; 
?>

</main>
<?php get_footer();  ?>


</body>
</html>