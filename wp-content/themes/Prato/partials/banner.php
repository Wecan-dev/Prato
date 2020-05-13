<!-- banner -->
<section id="arrow-top" class="banner p-0 section">

  <div id="pratos-slider"  class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner');?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-banner__items">
        <div class="main-banner " >
          <div class="main-banner__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
          <div class="main-banner__text " data-animation='fadeInUp'>
           <?php the_content(); ?>
           
         </div>
       </div>
     </div>
   <?php endwhile; ?>
   <div class="main-banner__items">
    <div class="main-banner">
      <div class="main-banner__img">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/banners/2.jpg" alt="">
      </div>
      <div class="wow main-banner__text " data-animation='fadeInUp'>
        <p>Prato <br>APARTAMENTOS</p>
        <hr>
        <span>Ubicación</span>
        <p>LOMA DE SAN JOSE, <br> SABANETA</p>
        <span>Área </span>
        <p> 
        70 m² hasta 87 m²</p>
        <span>Desde </span>
        <div class="price">
          <p>$323.601.608
          </p>
          <small>Valor impuestos incluido*</small>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="dropdown_aroow">
  <a href="#acerca">	<img src="<?php echo get_template_directory_uri();?>/assets/img/dropdown.png" alt=""></a>
</div>
</section>