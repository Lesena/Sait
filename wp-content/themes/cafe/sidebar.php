<!-- SLIDER -->
				<main>
				<section class="section-60 section-sm-120 swiper-wrap" id="about_us">
          <div class="swiper-container swiper-slider swiper-container-horizontal" id="home">
            
			<div class="container">
			
			
			  <div class=" row tm_pb_row tm_pb_row_0">
			  <?php masterslider(2); ?>
			  
			     <div class="tm_pb_column tm_pb_column_4_4  tm_pb_column_0 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				    <div class="tm_pb_builder #tm_builder_outer_content .tm_pb_text_0 ">
					   
				 The Best 
			
					</div>
					<div class="tm_pb_text_1">
				 Craft Beer Pub 
			</div>
			<div class="tm_pb_text">
				 Welcomes you! 
			</div>
			
			<div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_center  tm_pb_text_4">
				 Call: <a href="tel:5551234567">(555)-123-4567</a> 
			</div>
			
				 </div>
			  </div>
			</div>
          </div>
          
        </section>
				
				<section class="bg-secondary text-md-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-lg-push-5 well5">
           <?php
$id=1; // ID заданной рубрики
$n=1;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n"); 
while($recent->have_posts()) : $recent->the_post();
?><?php echo get_the_post_thumbnail(); ?>
<h5><a href="<?php the_permalink(); ?>"rel="bookmark"><?php the_title(); ?></a></h5>
<br><?php the_excerpt(); ?> 
<?php endwhile; ?>
           
          </div>
          <div class="col-lg-5 col-lg-pull-7 image-wrap-1">
            <img src="<?php bloginfo('template_url') ?>/images/ru_2.png" alt=""  draggable="false">
          </div>
        </div>
      </div>
    </section>	
				</main>