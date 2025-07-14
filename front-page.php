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
	<section class="section-h"></section>
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
						<div class="col-xl-2 col-lg-3 ">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-examen-unico" />
								</svg>
								<div class="titulo-servicios">
									Examen <br> único
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-atencion-temprana" />
								</svg>
								<div class="titulo-servicios">
									Perfil del estudiante<br>para tutoría
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 ">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-orientacion-vocacional" />
								</svg>
								<div class="titulo-servicios">
									Orientación<br>vocacional
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 ">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-pase-reglamentario" />
								</svg>
								<div class="titulo-servicios">
									Continuo<br>mis estudios
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 mt-xl-0 mt-lg-5">
							<div class="descripcion-servicios">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-educacion-continua" />
								</svg>
								<div class="titulo-servicios">
									Red de extensión <br> académica y desarrollo <br> integral
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 mt-xl-0 mt-lg-5">
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

					<div class="row justify-content-center align-items-center mt-4 mt-lg-4 ">
						<div class="col-lg-3 text-center">
							<div class="descripcion-servicios d-lg-inline-flex align-self-center">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-vida-saludable" />
								</svg>
								<div class="titulo-servicios align-self-center ps-md-2">
									Vida saludable
								</div>
							</div>
						</div>
						<div class="col-lg-3 text-center">
							<div class="descripcion-servicios mt-4 mt-lg-1 d-lg-inline-flex align-self-center">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/prepa-distinta.svg#icono-cultura" />
								</svg>
								<div class="titulo-servicios align-self-center ps-lg-2">
									Cultura
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center mtm">
						<div class="col-lg-4 text-center mt-5 mt-lg-4">
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
						<div class="col-lg-4 text-center mt-5 mt-lg-4">
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
				<div class="linesvg d-none d-xl-inline-block">
					<div class=" text-center ">
						<svg id="route" viewBox="0 0 1418 689" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="path" stroke-linecap="round"
								d="M708.5 689V619M708.5 394V317M708.5 226V196M708.5 46V0M708 394H1148C1164.57 394 1178 407.431 1178 424V589C1178 605.569 1164.57 619 1148 619H708V394ZM709 394H269C252.431 394 239 407.431 239 424V589C239 605.569 252.431 619 269 619H709V394ZM708 226H1028C1044.57 226 1058 239.431 1058 256V288C1058 304.569 1044.57 318 1028 318H708V226ZM709 226H389C372.431 226 359 239.431 359 256V288C359 304.569 372.431 318 389 318H709V226ZM1180 46H1387C1403.57 46 1417 59.4315 1417 76V166C1417 182.569 1403.57 196 1387 196H1180V46ZM945 46H1181V196H945V46ZM708 46H946V196H708V46ZM472 46H709V196H472V46ZM237 46H473V196H237V46ZM238 46H31C14.4315 46 1 59.4315 1 76V166C1 182.569 14.4315 196 31 196H238V46Z"
								stroke="#D9D9D9" />
						</svg>
					</div>
				</div>
				<div class="linesvgt d-none d-lg-block d-xl-none">
					<svg width="883" height="809" viewBox="0 0 883 809" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M439.797 743.712H441.797V808.966H439.797V743.712Z" fill="#D9D9D9"/>
					<path d="M878 713.712V563.966C878 547.95 865.016 534.966 849 534.966H441.864V742.712H849V743.712H440.864V533.966H849L849.774 533.976C865.985 534.387 879 547.657 879 563.966V713.712L878.99 714.487C878.586 730.44 865.728 743.298 849.774 743.703L849 743.712V742.712C865.016 742.712 878 729.728 878 713.712Z" fill="#D9D9D9"/>
					<path d="M2.729 713.712V563.966C2.72901 547.657 15.744 534.387 31.9546 533.976L32.729 533.966H440.864V743.712H32.729V742.712H439.865V534.966H32.729C16.7128 534.966 3.72902 547.95 3.729 563.966V713.712C3.72919 729.729 16.7129 742.712 32.729 742.712V743.712L31.9546 743.703C16.0014 743.298 3.14317 730.44 2.73877 714.487L2.729 713.712Z" fill="#D9D9D9"/>
					<path d="M439.797 462.187H441.797V533.966H439.797V462.187Z" fill="#D9D9D9"/>
					<path d="M766.136 432.187V406.424C766.136 390.408 753.152 377.424 737.136 377.424H441.864V461.187H737.136V462.187H440.864V376.424H737.136L737.91 376.434C754.121 376.845 767.136 390.114 767.136 406.424V432.187L767.126 432.961C766.722 448.914 753.863 461.772 737.91 462.177L737.136 462.187V461.187C753.152 461.186 766.136 448.203 766.136 432.187Z" fill="#D9D9D9"/>
					<path d="M114.594 432.119V406.356C114.594 390.046 127.609 376.776 143.819 376.366L144.594 376.356H440.865V462.119H144.594V461.119H439.865V377.356H144.594C128.577 377.356 115.594 390.34 115.594 406.356V432.119C115.594 448.135 128.577 461.119 144.594 461.119V462.119L143.819 462.109C127.609 461.698 114.594 448.428 114.594 432.119Z" fill="#D9D9D9"/>
					<path d="M439.797 183.39H441.797V210.424H439.797V183.39Z" fill="#D9D9D9"/>
					<path d="M439.797 349.39H441.797V376.424H439.797V349.39Z" fill="#D9D9D9"/>
					<path d="M660.933 319.83V240C660.933 223.984 647.949 211 631.933 211H442V348.83H631.933V349.83H441V210H631.933L632.706 210.01C648.917 210.42 661.933 223.69 661.933 240V319.83L661.923 320.604C661.519 336.558 648.66 349.416 632.706 349.82L631.933 349.83V348.83C647.949 348.83 660.933 335.846 660.933 319.83Z" fill="#D9D9D9"/>
					<path d="M881.729 153.389V73.5591C881.729 57.543 868.745 44.5593 852.729 44.5591H662.796V182.389H852.729V183.389H661.796V43.5591H852.729L853.502 43.5688C869.713 43.9793 882.729 57.2493 882.729 73.5591V153.389L882.719 154.164C882.315 170.117 869.456 182.975 853.502 183.379L852.729 183.389V182.389C868.745 182.389 881.729 169.405 881.729 153.389Z" fill="#D9D9D9"/>
					<path d="M662.729 43.5591V183.389H440.864V43.5591H662.729ZM441.864 182.389H661.729V44.5591H441.864V182.389Z" fill="#D9D9D9"/>
					<path d="M440.864 43.5591V183.389H219.932V43.5591H440.864ZM220.932 182.389H439.865V44.5591H220.932V182.389Z" fill="#D9D9D9"/>
					<path d="M220 319.83V240C220 223.431 233.431 210 250 210H440.933V349.83H250V348.83H439.933V211H250C233.984 211 221 223.984 221 240V319.83C221 335.846 233.984 348.83 250 348.83V349.83C233.431 349.83 220 336.399 220 319.83Z" fill="#D9D9D9"/>
					<path d="M0 153.322V73.4917C0 56.9232 13.4315 43.4917 30 43.4917H220.933V183.322H30V182.322H219.933V44.4917H30C13.9837 44.4917 1 57.4754 1 73.4917V153.322C1 169.338 13.9837 182.322 30 182.322V183.322C13.4315 183.322 0 169.89 0 153.322Z" fill="#D9D9D9"/>
					<path d="M439.797 0.677246L441.797 0.677246V43.5591H439.797V0.677246Z" fill="#D9D9D9"/>
					</svg>
				</div>
				<div class="linesvgm d-block d-md-block d-lg-none">
					<svg width="353" height="1786" viewBox="0 0 353 1786" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M176 0L178 8.74229e-08V43H176V0Z" fill="#D9D9D9"/>
						<path d="M176 1236H178V1296H176V1236Z" fill="#D9D9D9"/>
						<path d="M353 341V491H0V341H353ZM1 490H352V342H1V490Z" fill="#D9D9D9"/>
						<path d="M352 73C352 56.9837 339.016 44 323 44H30C13.9837 44 1 56.9837 1 73V192H352V73ZM353 193H0V73C0 56.4315 13.4315 43 30 43H323L323.774 43.0098C339.985 43.4205 353 56.6904 353 73V193Z" fill="#D9D9D9"/>
						<path d="M353 192V342H0V192H353ZM1 341H352V193H1V341Z" fill="#D9D9D9"/>
						<path d="M353 490V640H0V490H353ZM1 639H352V491H1V639Z" fill="#D9D9D9"/>
						<path d="M353 639V789H0V639H353ZM1 788H352V640H1V788Z" fill="#D9D9D9"/>
						<path d="M353 788V938H0V788H353ZM1 937H352V789H1V937Z" fill="#D9D9D9"/>
						<path d="M353 937V1087H0V937H353ZM1 1086H352V938H1V1086Z" fill="#D9D9D9"/>
						<path d="M323 1235V1236H30V1235H323ZM352 1206V1087H1V1206C1 1222.02 13.9837 1235 30 1235V1236C13.6904 1236 0.420519 1222.99 0.00976562 1206.77L0 1206V1086H353V1206C353 1222.31 339.985 1235.58 323.774 1235.99L323 1236V1235C339.016 1235 352 1222.02 352 1206Z" fill="#D9D9D9"/>
						<path d="M352 1325C352 1308.98 339.016 1296 323 1296H30C13.9837 1296 1 1308.98 1 1325V1540H352V1325ZM353 1541H0V1325C3.8658e-07 1308.43 13.4315 1295 30 1295H323L323.774 1295.01C339.985 1295.42 353 1308.69 353 1325V1541Z" fill="#D9D9D9"/>
						<path d="M323 1785V1786H30V1785H323ZM352 1756V1541H1V1756C1 1772.02 13.9837 1785 30 1785V1786C13.6904 1786 0.420519 1772.99 0.00976562 1756.77L0 1756V1540H353V1756L352.99 1756.77C352.586 1772.73 339.728 1785.59 323.774 1785.99L323 1786V1785C339.016 1785 352 1772.02 352 1756Z" fill="#D9D9D9"/>
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
					<div class="col-12 ">
						<div class="text-brading">
							<p class="uno">Lleguemos</p>
							<p class="dos text-center">a la <span>meta</span></p>
							<p class="tres text-end">juntos</p>
						</div>
					</div>
				</div>
			
				<div class="row justify-content-center">
					<div class="col-xl-7 col-lg-7 col-md-8 col-10">
						<div class="carousel-identidad">   
							<div id="carousel-identidad-branding" class="carousel slide " data-bs-interval="10000" data-bs-ride="carousel" data-bs-pause="false">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" class="img-fluid" alt="m1">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/2.png" class="img-fluid" alt="m2">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/3.png" class="img-fluid" alt="m3">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/4.png" class="img-fluid" alt="m4">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/5.png" class="img-fluid" alt="m5">
									</div>
									<div class="carousel-item">
										<img src="<?php echo get_template_directory_uri(); ?>/img/6.png" class="img-fluid" alt="m6">
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