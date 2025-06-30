<?php get_header();
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package 
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

while (have_posts()) :
	the_post();
?>
	<section class="section-w"></section>
	<main>

		<?php add_revslider('slider-2', 'homepage'); ?>

		<section class="identidad-palabras">
			<div class="container">
				<div class="row ">
					<div class="col-12 text-center ">
						<div class="main__title" aria-label="Prepa en Línea-SEP es">
							Prepa en Línea-SEP es&nbsp;<span class="typewriter nocaret"></span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="prepa-distinta">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h2 class="titulo">Una prepa <span>distinta</span> </h2>
					</div>
				</div>

				<div class="row justify-content-center text-center">
					<div class="col-12 text-center">
						<h2 class="ns mt-5">Nuestros servicios</h2>
					</div>
				</div>
			</div>


			<div class="mask">
				<div class="container cont mt-5">
					<div class="row justify-content-center pt-2">
						<div class="col-12 col-md-2 ">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-examen-unico" />
								</svg>
								<div class="titulo-servicios">
									Examen <br> único
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-atencion-temprana" />
								</svg>
								<div class="titulo-servicios">
									Perfil del estudiante para tutoría
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-orientacion-vocacional" />
								</svg>
								<div class="titulo-servicios">
									Orientación<br>vocacional
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-pase-reglamentario" />
								</svg>
								<div class="titulo-servicios">
									Continuo mis<br>estudios
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-educacion-continua" />
								</svg>
								<div class="titulo-servicios">
									Red de extensión académica y desarrollo integral
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-bolsa-trabajo" />
								</svg>
								<div class="titulo-servicios">
									Bolsa<br>de trabajo
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center align-items-center mt-4 mt-md-4 ">
						<div class="col-12 col-md-3 text-center">
							<div class="descripcion-servicios d-md-inline-flex align-self-center">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-vida-saludable" />
								</svg>
								<div class="titulo-servicios align-self-center ps-md-2">
									Vida saludable
								</div>
							</div>
						</div>
						<div class="col-12 col-md-3 text-center">
							<div class="descripcion-servicios mt-4 mt-md-0 d-md-inline-flex align-self-center">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-cultura" />
								</svg>
								<div class="titulo-servicios align-self-center ps-md-2">
									Cultura
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center mtm">
						<div class="col-12 col-md-4 text-center mt-5 mt-md-4">
							<p class="titulo-servicios-dos">Modelo educativo</p>
							<p class="parrafo-servicios">
								No escolarizado <br>
								Horarios flexibles <br>
								Centrado en el estudiante <br>
								Aprendizaje social y significativo
							</p>
							<a class="btn-leer-mas mx-auto" href="#">
								Más información
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px"
									width="15px" class="icon">
									<path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="1.5" stroke="#292D32"
										d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
									</path>
								</svg>
							</a>
						</div>
						<div class="col-12 col-md-4 text-center mt-5 mt-md-4">
							<p class="titulo-servicios-dos">Plan de estudios</p>
							<p class="parrafo-servicios">
								2 años 6 meses <br>
								23 módulos <br>
								5 áreas disciplinares<br>
								Formación para el trabajo
							</p>
							<a class="btn-leer-mas mx-auto" href="#">
								Más información
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px"
									width="15px" class="icon">
									<path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="1.5" stroke="#292D32"
										d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
									</path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="linesvg d-none d-md-inline-block">
					<div class=" text-center ">
						<svg id="route" viewBox="0 0 1418 689" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="path" stroke-linecap="round"
								d="M708.5 689V619M708.5 394V317M708.5 226V196M708.5 46V0M708 394H1148C1164.57 394 1178 407.431 1178 424V589C1178 605.569 1164.57 619 1148 619H708V394ZM709 394H269C252.431 394 239 407.431 239 424V589C239 605.569 252.431 619 269 619H709V394ZM708 226H1028C1044.57 226 1058 239.431 1058 256V288C1058 304.569 1044.57 318 1028 318H708V226ZM709 226H389C372.431 226 359 239.431 359 256V288C359 304.569 372.431 318 389 318H709V226ZM1180 46H1387C1403.57 46 1417 59.4315 1417 76V166C1417 182.569 1403.57 196 1387 196H1180V46ZM945 46H1181V196H945V46ZM708 46H946V196H708V46ZM472 46H709V196H472V46ZM237 46H473V196H237V46ZM238 46H31C14.4315 46 1 59.4315 1 76V166C1 182.569 14.4315 196 31 196H238V46Z"
								stroke="#D9D9D9" />
						</svg>
					</div>
				</div>
				<div class="linesvgm d-block d-sm-block d-md-none">
					<svg width="353" height="1786" viewBox="0 0 353 1786" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M176 0L178 8.74229e-08V43H176V0Z" fill="#D9D9D9" />
						<path d="M176 1236H178V1296H176V1236Z" fill="#D9D9D9" />
						<path d="M353 341V491H0V341H353ZM1 490H352V342H1V490Z" fill="#D9D9D9" />
						<path d="M352 73C352 56.9837 339.016 44 323 44H30C13.9837 44 1 56.9837 1 73V192H352V73ZM353 193H0V73C0 56.4315 13.4315 43 30 43H323L323.774 43.0098C339.985 43.4205 353 56.6904 353 73V193Z" fill="#D9D9D9" />
						<path d="M353 192V342H0V192H353ZM1 341H352V193H1V341Z" fill="#D9D9D9" />
						<path d="M353 490V640H0V490H353ZM1 639H352V491H1V639Z" fill="#D9D9D9" />
						<path d="M353 639V789H0V639H353ZM1 788H352V640H1V788Z" fill="#D9D9D9" />
						<path d="M353 788V938H0V788H353ZM1 937H352V789H1V937Z" fill="#D9D9D9" />
						<path d="M353 937V1087H0V937H353ZM1 1086H352V938H1V1086Z" fill="#D9D9D9" />
						<path d="M323 1235V1236H30V1235H323ZM352 1206V1087H1V1206C1 1222.02 13.9837 1235 30 1235V1236C13.6904 1236 0.420519 1222.99 0.00976562 1206.77L0 1206V1086H353V1206C353 1222.31 339.985 1235.58 323.774 1235.99L323 1236V1235C339.016 1235 352 1222.02 352 1206Z" fill="#D9D9D9" />
						<path d="M352 1325C352 1308.98 339.016 1296 323 1296H30C13.9837 1296 1 1308.98 1 1325V1540H352V1325ZM353 1541H0V1325C3.8658e-07 1308.43 13.4315 1295 30 1295H323L323.774 1295.01C339.985 1295.42 353 1308.69 353 1325V1541Z" fill="#D9D9D9" />
						<path d="M323 1785V1786H30V1785H323ZM352 1756V1541H1V1756C1 1772.02 13.9837 1785 30 1785V1786C13.6904 1786 0.420519 1772.99 0.00976562 1756.77L0 1756V1540H353V1756L352.99 1756.77C352.586 1772.73 339.728 1785.59 323.774 1785.99L323 1786V1785C339.016 1785 352 1772.02 352 1756Z" fill="#D9D9D9" />
					</svg>
				</div>
			</div>


		</section>

		<?php get_template_part('template-parts/boletines-home'); ?>

		<section class="banner-colavorativos">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<div class="list">
							<div class="list-item">
								<a href="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/01/carteles-descrimincacion.pdf"
									target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banner-colavorativo-1.webp" alt="banner-campana-vs-fentalino"
										class="img-fluid">
								</a>
							</div>

							<div class="list-item">
								<a href="https://prepaenlinea.sep.gob.mx/vinculacion/sne/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banner-colavorativo-2.webp" alt="banner-campana-vs-fentalino"
										class="img-fluid">
								</a>
							</div>

							<div class="list-item">
								<a href="https://educacionmediasuperior.sep.gob.mx/SEMS_en_cifras" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banner-colavorativo-3.webp" alt="banner-campana-vs-fentalino"
										class="img-fluid">
								</a>
							</div>

							<div class="list-item">
								<a href="https://estrategiaenelaula.sep.gob.mx/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banner-colavorativo-4.webp" alt="banner-campana-vs-fentalino"
										class="img-fluid">
								</a>
							</div>
						</div>

						<button class="show-hide-btn">
							<svg width="40" height="40">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#show-hide-btn" />
							</svg>

						</button>
					</div>
				</div>
			</div>
		</section>

		<section id="branding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8">
						<div class="text-brading">
							<p class="uno">Lleguemos</p>
							<p class="dos text-center">a la meta</p>
							<p class="tres text-end">juntos</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-12 col-md-6">
						<div class="carousel-identidad">
							<div id="carousel-identidad-branding" class="carousel slide " data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" class="img-fluid" alt="m1">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/2.png" class="img-fluid" alt="m1">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/3.png" class="img-fluid" alt="m1">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/4.png" class="img-fluid" alt="m1">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/5.png" class="img-fluid" alt="m1">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/6.png" class="img-fluid" alt="m1">
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
endwhile;
get_footer(); ?>