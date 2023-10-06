 
<main>
    <section class="page-banner position-relative">
        <div class="inner">
            <div class="container">
                <h1 class="fs36 blueLight bold wow fadeInUp" title="職業前景">職業前景</h1>
              
                
            </div>
        </div>
        <div class="boximg"><img src="<?=get_template_directory_uri()?>/static/images/b6.jpg" alt="images"></div>
    </section>
    <div class="bread">
            <div class="container">
                     <a href="../" title="Home">首頁</a>   
                     <span>/</span>
                     <a href="" title="Programmes">課程</a>
                     <span>/</span>
                     <a href="" title="全球供應鏈管理理學碩士（MSC-GSCM） ">全球供應鏈管理理學碩士（MSC-GSCM）</a>
                     <span>/</span>
                     <a href="" title="職業前景">職業前景</a>
            </div>
    </div>


  
    <section class="index-block wow fadeInUp" >
       <div class="container">
           <div class="row">
               <div class="col-md-2 col-sm-12 col-xs-12 left">
                   <div class="mt-5">
                    <h2 class="fs20 pc blueLight bold wow fadeInUp" title="全球供應鏈管理理學碩士（MSC-GSCM）">全球供應鏈管理理學碩士（MSC-GSCM）</h2>
                    <h2 class="fs20 mobile blueLight bold wow fadeInUp" title="全球供應鏈管理理學碩士（MSC-GSCM）">全球供應鏈管理理學碩士（MSC-GSCM）</h2>
                    <div class="menu-box mt-3 wow fadeInUp">
                        <ul>         	        
                            <li><a  href="../msc-gscm-programme-overview-zh/"  title="計劃概覽 ">計劃概覽 </a> </li>        
                            <li><a  href="../MSc-GSCM-Academic-Structure-zh/" title="Academic Structure">學術結構</a> </li>  
                            <li><a  href="../MSc-GSCM-Career-Prospects-zh/"   class="active" title="職業前景" >職業前景</a> </li>  
                            <li><a  href="../MSc-GSCM-Scholarships-FinancialAid-zh/" title="Scholarship & Financial Aids">獎學金和經濟援助</a> </li>        
                            <li><a  href="../MSc-GSCM-Graduate-Sharing-zh/"   title="Graduate Sharing">畢業生分享</a> </li>  
                            <li><a  href="../MSc-GSCM-Admission-zh/"  title="Admission" >入場</a> </li>  
                                
                        </ul>
                    </div>
                  </div>
               </div>
               <div class="col-md-10 col-sm-12 col-xs-12 right">
                    <div class="pl-3 mt-5 mb-5">
                        
                        <div class="title fs28 white  wow fadeInUp" title="職業前景">職業前景</div>
                        <div class="txt fs18  wow fadeInUp">
                            <p>該計劃旨在培養具有分析思維和創新設計解決方案的管理專業人士。畢業生有望具備以下能力，並能從事各種職業：</p>
                            <ul>
                                <li>採購分析師</li>
                                <li>採購經理</li>
                                <li>物流經理</li>
                                <li>供應鏈經理</li>
                                <li>供應鏈分析師</li>
                                <li>倉庫經理</li>
                                <li>生產計劃師</li>
                                <li>採購經理</li>
                                <li>庫存專家</li>
                                <li>業務分析師</li>
                            </ul>
                            <p>根據政府《2027年勞動力預測報告》，隨著全球電子商務的蓬勃發展，倉儲和其他運輸支持服務預計將增長，從而對跨境物流和存儲服務的需求不斷增加。</p>
                        </div>
                        <div class="title mt-5 fs28 white  wow fadeInUp" title="Message from Industry">來自行業的信息</div>
                        <div class="txt fs18  wow fadeInUp">
                            <div class="IOlist">
                                <div class="row">
                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'category_name' =>'msc-gscm-career',
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
