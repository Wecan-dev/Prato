	<!-- galleria -->
	<section class="section-galery" >
		<div class="main-galery">
			<div class="title-general">
				<h3>Galería <span>exterior</span></h3>
			</div>

			<div class="">
				<div class="main-galery__grid">
					<div class="grid-slider">


						<div class="grid-slide">
							<?php $args = array( 'post_type' => 'galeriaExterior','posts_per_page' => 4);?>   
							<?php $loop = new WP_Query( $args ); 
							$cout1 = 1;
							?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="grid-row">
									<div>
										<img onclick="openModal2();currentSlide2(<?php echo $cout1 ?>)" class='wow fadeInUp' data-wow-delay='0.<?php echo $cout1 ?>s'src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
									</div>
									
								</div>
								<?php $cout1++; endwhile; ?>

							</div>
							<div class="grid-slide">
								<div class="grid-row">
									<?php $args = array( 'post_type' => 'galeriaExterior','posts_per_page' => 4);?>   
									<?php $loop = new WP_Query( $args ); 
									$cout1 = 1;
									?>
									<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

										<div>
											<img onclick="openModal2();currentSlide2(<?php echo $cout1 ?>)" class='wow fadeInUp' data-wow-delay='0.<?php echo $cout1 ?>s'src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
										</div>

										
										<?php $cout1++; endwhile; ?>
									</div>
								</div>

								<div class="barra-progress">
									<div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
										<span class="slider__label sr-only">

										</div>
										<span class="line"></span>
									</div>
								</div>
							</sectio>
						</div>


					</div>
				</section>

				<!--Modal galeria-->
				<div id="myModal2" class="modal">


					<div class="modal-content">
						<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal2()">
							<span aria-hidden='true' class='fa fa-close'></span>
						</button>

						<?php $args = array( 'post_type' => 'galeriaExterior','posts_per_page' => 4);?>   
						<?php $loop = new WP_Query( $args ); 
						$cout2 = 4;
						?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="mySlides2">
								<!-- <div class="numbertext">1 / 4</div> -->
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
							</div>
						<?php endwhile; ?>


						<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides2(1)">&#10095;</a>



					</div>
				</div>