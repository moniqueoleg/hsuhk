<?php /* Template Name: BBA-SCM-Experience-and-Opportunities */ ?>
<main>
    <section class="page-banner position-relative">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueLight bold wow fadeInUp" title="Experience and Opportunities">Experience and Opportunities</h1>
              
                
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
                     <a href="../BBA-SCM-Cover/" title=" Bachelor of Business Administration (Honours) in Supply Chain Management (BBA-SCM) Programme (JUPAS Code: JSSH01) "> Bachelor of Business Administration (Honours) in Supply Chain Management (BBA-SCM) Programme (JUPAS Code: JSSH01) </a>
                     <span>/</span>
                     <a href="" title="Experience and Opportunities">Experience and Opportunities</a>
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
                        
                        <div class="title fs28 white  wow fadeInUp" title="Scholarship ">Scholarship </div>
                        <div class="txt fs18  wow fadeInUp">
                            <p>HSUHK offers entrance scholarships to qualified new local Year 1 students. For details, please visit <a href="https://admission.hsu.edu.hk/undergraduate-admissions/year-1-entry/hkdse-self-financing/entrance-scholarships/" target="_blank" title="here">HERE.</a></p>
                           
                        </div>

                        <div class="title fs28 mt-5 white  wow fadeInUp" title="Internship">Internship</div>
                        <div class="txt fs18  wow fadeInUp">
                            <p>We continuously cooperate and coordinate with different companies in Hong Kong and Mainland China to secure internship opportunities for our students. During Jun to Aug 2022, over 160 students successfully found their internship opportunities which provided them with valuable experience in industries before graduation. We are proud to say that our BBA-SCM and BMSIM graduates perform well in their employment. We believe that taking up an internship placement makes our graduates’ CV look really good. We are in particular thankful for some of our internship partners that have tailor-made projects for our students.</p>
                            <p>我們不斷與香港和中國內地不同的公司進行合作和協調,努力為同學爭取實習機會。在 2022 年 6 月至 8 月期間,超過 160 多名學生成功找到了實習工作,為畢業前提供了寶貴的行業經驗。供應鏈管理工商管理(榮譽)學士學位課程和管理科學與資訊管理(榮譽)學士學位課程的畢業生一向在工作表現上獲得雇主們的良好評價。我們相信實習安排讓學生從中汲取實際工作經驗,培養與專業知識有關的技能,有利日後求職。我們在此感謝提供實習機會的機構為學生量身定制實習項目。</p>
                            <div class="IOlist mt-4">
                                <div class="row">

                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' =>'bba-scm-experience-opportunities',
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
                                                <p class="fs18"><?php the_content(); ?></p>
                                            </div>
                                        </a>
                                        <div class="pup">
                                            <div class="pupback"></div>
                                            <div class="container">
                                                <div class="conbox">
                                                    <div class="close"></div> 
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                                            <div class='pic'><img src="<?=get_template_directory_uri()?>/static/images/sh4.jpg" alt="pic"></div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-12 col-xs-12 mb-3">
                                                            <div class="fs32 bold blueText"><?php the_title(); ?></div>
                                                            <div class="txt fs18 mt-2">
                                                            <p>
                                                            <?php the_content(); ?>
                                                            </p>
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
                            <div class="sdlist">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mt-3 wow fadeInUp">
                                        <div class="imgs"><img src="<?=get_template_directory_uri()?>/static/images/1.jpg" alt="pic"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mt-3 wow fadeInUp">
                                        <div class="imgs"><img src="<?=get_template_directory_uri()?>/static/images/2.jpg" alt="pic"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mt-3 wow fadeInUp">
                                        <div class="imgs"><img src="<?=get_template_directory_uri()?>/static/images/3.jpg" alt="pic"></div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="title fs28 mt-5 white  wow fadeInUp" title="Exchange">Exchange</div>
                        <div class="txt fs18  wow fadeInUp">
                            <p>HSUHK continuously explores student exchange opportunities with different international tertiary institutions. We have established partnership with many institutions.</p>
                            <p>For a detailed list of institutions, please click <a href="https://sao.hsu.edu.hk/our-services/student-exchange/overseas-partners" target="_blank" title="here">HERE.</a></p>
                            <div class="sdlist">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mt-3 wow fadeInUp">
                                        <div class="imgs"><img src="<?=get_template_directory_uri()?>/static/images/4.jpg" alt="pic"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mt-3 wow fadeInUp">
                                        <div class="imgs"><img src="<?=get_template_directory_uri()?>/static/images/5.jpg" alt="pic"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mt-3 wow fadeInUp">
                                        <div class="imgs"><img src="<?=get_template_directory_uri()?>/static/images/6.jpg" alt="pic"></div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                
                  
            
                
                    </div>
               </div>
           </div>

       </div>
    
          


            
    </section>
    



 
</main>
