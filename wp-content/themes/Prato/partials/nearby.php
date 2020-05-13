<!-- Acerca de.... -->
<?php if(have_posts()): the_post(); ?>
	<section class="section">
		<div class="main-about">
			<div class="main-about__item">
				<img src="<?php the_field('imagen_acerca_de'); ?>" class='wow fadeInUp' data-wow-delay='.5s' alt="">
			</div>
			<div class="main-about__item">
				<div class="title-general">
					<h3>Acerca del <span>proyecto</span></h3>
				</div>

				<div class="h-5">
					<p>
						<?php the_field('test'); ?>
					</p>

				</div>
				<!--zonas -->
				<div class="main-zone">
					<a href="#galeria-apartamento" class="btn-general">ver galeria</a>
					<!-- <h3>Zonas comunes</h3> -->

					<div class="main-zone__item">
						<!-- <ul>
							<li>Zona coworking</li>
							<li>Salón de cardio</li>
							<li>Solarium</li>
						</ul> -->
						<span class="number">01</span>
					</div>

					
				</div>
			</div>

		</div>


	</section>
	<?php endif; ?>