<!-- form -->
<section id="contactanos" class="seccion-form-banner section">
	<div class="content-form form-banner" id="contacto">
		<div class="form__item">
			<p>Te llamamos para darte <br> <span>una asesoría completa</span></p>
		</div>
		<div class="form__item ">

			<form method="POST" action="https://nivel.activehosted.com/proc.php" id="_form_11_" class="_form _form_11 _inline-form  _dark" novalidate style="width: 100%;">
				<div class="" >
					<div class="_form-content row">
						<div class="col-md-5 col-lg-4 formulario-banner">
							<input type="hidden" name="u" value="11" />
							<input type="hidden" name="f" value="11" />
							<input type="hidden" name="s" />
							<input type="hidden" name="c" value="0" />
							<input type="hidden" name="m" value="0" />
							<input type="hidden" name="act" value="sub" />
							<input type="hidden" name="v" value="2" />

							<!-- utm source -->
							<input type="hidden" name="field[10]" value="<?php echo $_GET['utm_source']; ?>"/>
							<!-- utm medium -->
							<input type="hidden" name="field[11]" value="<?php echo $_GET['utm_medium']; ?>"/>
							<!-- utm campaign -->
							<input type="hidden" name="field[12]" value="<?php echo $_GET['utm_campaign']; ?>"/>
							<!-- utm term -->
							<input type="hidden" name="field[13]" value="<?php echo $_GET['utm_term']; ?>"/>
							<!-- referrer url -->
							<input type="hidden" name="field[14]" value="<?php echo $_SERVER['HTTP_REFERER']; ?>"/>


							<div class="_form_element _x86821064 _full_width " >
								<label class="_form-label">

								</label>
								<div class="_field-wrapper form-group">
									<input class="form-control" type="text" name="fullname" required placeholder="Nombre y Apellido *" />
								</div>
							</div>
							<div class="_form_element _x48647240 _full_width " >
								<label  class="_form-label">

								</label>
								<div class="_field-wrapper form-group">
									<input class="form-control" type="text" name="email" placeholder="Correo electrónico *" required/>
								</div>
							</div>
							<div class="_form_element _x80842056 _full_width " >
								<label class="_form-label ">

								</label>
								<div class="_field-wrapper form-group">
									<input class="form-control" type="text" name="phone" required placeholder="Teléfono *" />
								</div>
							</div>
							<div class="_form_element _field1 _full_width " style="display: none;" >
								<label class="_form-label">
									Ciudad
								</label>
								<div class="_field-wrapper form-group">
									<input type="text" name="field[1]" value="" placeholder="" />
								</div>
							</div>

						</div>
						<div class="col-md-6">

							<div class="_form_element _field2 _full_width " >
								<label class="_form-label">

								</label>
								<div class="_field-wrapper form-group">
									<textarea class="form-control" name="field[2]" placeholder="Mensaje *"  ></textarea>
								</div>
							</div>
							<div class="_form_element _field4 _full_width " >
								<div class="_row">
									<label class="_form-label">

									</label>
								</div>
								<input data-autofill="false" type="hidden" name="field[4][]" value="~|">
								<div class="_row _checkbox-radio">
									<input id="field_4Acepto" type="checkbox" name="field[4][]" value="Acepto"  required >
									<span>
										<label for="field_4Acepto">
											Acepto <a target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf"><span style="color: white; font-size: 14px; border-bottom: 1px solid;" >políticas y
											privacidad</span></a>
										</label>
									</span>
								</div>
							</div>
							<div class="_field-wrapper" style="display: none;">
								<input type="text" name="field[14]" value="" placeholder="" />
							</div>

							<div class="_button-wrapper _full_width">
								<button id="_form_11_submit" class="_submit btn btn-black btn-form " type="submit">
									Enviar
								</button>
							</div>
							<div class="_clear-element">
							</div>
						</div>
					</div>
					<div class="_form-thank-you" style="display:none;">
					</div>
					<div class="_form-branding" style="display: none;">
						<div class="_marketing-by">
							Marketing por
						</div>
						<a href="http://www.activecampaign.com" class="_logo"></a>
					</div>
				</div>
			</div>
		</div>
	</form>
		<!-- <form action="#">
			<div class="row">
				<div class="col-md-5 col-lg-4 formulario-banner">
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<input type="text" id="fname" class="form-control "
							placeholder="Nombre completo*" />
						</div>

					</div>

					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<input type="text" id="fname" class="form-control " placeholder="Teléfono*" />
						</div>

					</div>

					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<input type="text" id="fname" class="form-control " placeholder="Email*" />
						</div>

					</div>



				</div>
				<div class="col-md-6">
					<div class="row form-group m-0">
						<div class="col-md-12 p-0">
							<textarea name="message" id="message" cols="50"  class="form-control barra-text"
							placeholder="Comentarios"></textarea>
						</div>
					</div>
					<div class="col-md-12 center pl-4 pt-1 pb-1">
						<input type="checkbox" class="custom-control-input " id="customCheck" name="example1" />
						<label class="custom-control-label" for="customCheck">Acepto <a target="_blank" href="assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf"><span>politicas y
						privacidad</span></a></label>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<input type="submit" value="Enviar " class="btn btn-black btn-form " />
						</div>
					</div>
				</div>
			</div>


		</form>  -->
	</div>
	<div id="acerca" ></div>
</div>

</section>