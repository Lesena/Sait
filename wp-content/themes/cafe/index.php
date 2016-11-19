<?php

get_header(); ?>

 
<!-- SLIDER -->
				<?php get_sidebar(); ?>
	             	
				 <section id="news" class="well text-center" style="margin-bottom: 0px;
">
      <div class="container">
        <div class="row" id="title_one"><h4><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('title_one') ) : ?>
    <?php endif; ?></h4>
		
        <div class="col-md-4" style="visibility: visible; animation-name: fadeInUp;">
           <?php
$id=4; // ID заданной рубрики
$n=3;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n"); 
while($recent->have_posts()) : $recent->the_post();
?><?php echo get_the_post_thumbnail(); ?>
<h5><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title(); ?></a></h5>
<br><?php the_excerpt(); ?> 
<?php endwhile; ?>
            
          </div>
          <div class="col-md-4" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            
            <?php
$id=5; // ID заданной рубрики
$n=3;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n"); 
while($recent->have_posts()) : $recent->the_post();
?><?php echo get_the_post_thumbnail(); ?>
<h5><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title(); ?></a></h5>
<br><?php the_excerpt(); ?> 
<?php endwhile; ?>
          </div>
          <div class="col-md-4" style="visibility: visible; animation-name: fadeInUp;">
             <?php
$id=6; // ID заданной рубрики
$n=3;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n"); 
while($recent->have_posts()) : $recent->the_post();
?><?php echo get_the_post_thumbnail(); ?>
<h5><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title(); ?></a></h5>
<br><?php the_excerpt(); ?> 
<?php endwhile; ?>
            
          </div>
		 
		  
        </div>
      </div>
    </section>
		<section class="well1" id="photo" data-url="/images/fon.png" data-mobile="true" data-direction="inverse" data-speed="0.7"><div class="parallax_image" style="background-image: url(images/fon.png); background-color: inherit; height: 1320px; transform: translate3d(0px, -395.414px, 0px);"></div><div class="parallax_cnt">
      <div class="container" id="title_two">
        <h3><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('title_two') ) : ?>
    <?php endif; ?></h3>
        <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
              <div id="img-wrap1">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('img-wrap1') ) : ?>
    <?php endif; ?>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <div id="img-wrap2">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('img-wrap2') ) : ?>
    <?php endif; ?>
                
              </div>

             
            </div>
          </div>
		  
          <div class="col-md-4">
            <div class="product wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <div id="img-wrap3">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('img-wrap3') ) : ?>
    <?php endif; ?>

                
              </div>

             
            </div>
          </div>
		  
        </div>
      </div>
      </div>
    </div>
	
	</section>
                    
	            	
					
			
			
				
<?php get_footer(); ?>