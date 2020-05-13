<!-- planos -->
<section id="planos-proyecto" class="section-planos"> 
	<div class="content-zone__planos row">
		<div class="main-plan col-12">
			<div class="main-planos__content">
				<?php $args = array( 'post_type' => 'PlanosDelProyecto');?>   
				<?php $loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="main-planos__items">
						<div class="items-slider">
							<div class="title-general title-general-planos content-zone__text">
								<h3> Planos del <span>PROYECTO</span></h3>
								<p><?php the_field('subtitulo'); ?></p>
							</div>

							<img onclick="openModal();currentSlide(1)"  src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/1.jpg" alt="">
						</div>
						<div class="content-zone__text">
							<div class="text-plano">
								<p><strong class="texto-planos"><?php the_field('medidas'); ?></strong></p>
							</div>
							<div class="items-planos ">
								<ul>
									<?php if (get_field('item_plano_1')): ?>
										<li class='wow fadeIn' data-wow-delay='0.2s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_8.png" alt=""><?php the_field('item_plano_1'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_2')): ?>
										<li class='wow fadeIn' data-wow-delay='0.3s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_6.png" alt=""><?php the_field('item_plano_2'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_3')): ?>
										<li class='wow fadeIn' data-wow-delay='0.4s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_7.png" alt=""><?php the_field('item_plano_3'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_4')): ?>
										<li class='wow fadeIn' data-wow-delay='0.5s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_10.png" alt=""><?php the_field('item_plano_4'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_5')): ?>
										<li class='wow fadeIn' data-wow-delay='0.6s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_3.png" alt=""> <?php the_field('item_plano_5'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_6')): ?>
										<li class='wow fadeIn' data-wow-delay='0.7s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_2.png" alt=""><?php the_field('item_plano_6'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_7')): ?>
										<li class='wow fadeIn' data-wow-delay='0.8s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_9.png" alt=""> <?php the_field('item_plano_7'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_10')): ?>
										<li class='wow fadeIn' data-wow-delay='0.9s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_10.png" alt=""> Estudio</li>
									<?php endif; ?>
									<?php if (get_field('item_plano_8')): ?>
										<li class='wow fadeIn' data-wow-delay='0.9s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_5.png" alt=""> <?php the_field('item_plano_8'); ?></li>
									<?php endif; ?>
									<?php if (get_field('item_plano_9')): ?>
										<li class='wow fadeIn' data-wow-delay='0.9s'><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/icon_4.png" alt=""> <?php the_field('item_plano_9'); ?></li>
									<?php endif; ?>

								</ul>
								<span class="number number-2 ">03</span>
							</div>
							
						</div>
					</div>

				<?php endwhile; ?>



			</div>

		</div>

	</div>
	<div  id="galeria-apartamento"></div>
</section>


<div id="myModal" class="modal">


	<div class="modal-content">
		<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal()">
			<span aria-hidden='true' class='fa fa-close'></span>
		</button>

		<div class="mySlides">
			<!-- <div class="numbertext">1 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/1.jpg" style="width:100%">
		</div>

		<div class="mySlides">
			<!-- <div class="numbertext">2 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/2.jpg" style="width:100%">
		</div>

		<div class="mySlides">
			<!-- <div class="numbertext">3 / 4</div> -->
			<img src="<?php echo get_template_directory_uri();?>/assets/img/iconos_planos/3.jpg" style="width:100%">
		</div>





		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>



	</div>
</div>
