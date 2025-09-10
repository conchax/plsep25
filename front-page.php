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
					<div class="col-12 text-center mb-5">
						<h2 class="ns mt-5">Nuestros servicios</h2>
					</div>
				</div>
			</div>


			<div class="container cont mt-5">
				<div class="row justify-content-center">
					<div class="col-xl-3 col-lg-6">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="139" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#sidat"></use>
								</svg>
								<p>Inspira e Integra, apoyo para seguir aprendiendo sin detenerte.</p>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 mt-5 m-lg-0">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="226" height="29">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#proyecta"></use>
								</svg>
								<p>¿Ya pensaste en tu futuro? Descubre universidades, modalidades y guías para avanzar.</p>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 mt-xl-0 mt-5">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="162" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#readi"></use>
								</svg>
								<p>Cursos, talleres y conferencias para fortalecer tu aprendizaje a tu ritmo.</p>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 mt-xl-0 mt-lg-5 mt-4">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="108" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#difusion"></use>
								</svg>
								<p>Vive experiencias culturales con actividades nuevas y creativas.</p>
							</a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center align-items-center mt-5 mt-md-5 mt-lg-5 mt-xl-3 ">
					<div class="col-lg-3 text-center">
						<div class="descripcion-servicios d-lg-inline-flex align-self-center">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#vida-saludable" />
								</svg>
								<div class="titulo-servicios align-self-center ps-md-2">
									Vida saludable
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 text-center">
						<div class="descripcion-servicios mt-5 mt-lg-1 d-lg-inline-flex align-self-center">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#bolsa-trabajo" />
								</svg>
								<div class="titulo-servicios align-self-center ps-md-2">
									Bolsa de trabajo
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center mt-lg-5 mt-5">
					<div class="col-lg-4 text-center mt-5 mt-md-5 mt-lg-3">
						<p class="titulo-servicios-dos">Modelo educativo</p>
						<p class="parrafo-servicios">
							No escolarizado <br>
							Horarios flexibles <br>
							Centrado en el estudiante <br>
							Aprendizaje social y significativo
						</p>
						<a class="btn-leer-mas mx-auto" href="http://10.3.29.145/modelo-educativo/">
							Más información
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px" width="15px"
								class="icon">
								<path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"
									stroke="#292D32"
									d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
								</path>
							</svg>
						</a>
					</div>
					<div class="col-lg-4 text-center mt-3 mt-md-3 mt-lg-3">
						<p class="titulo-servicios-dos">Plan de estudios</p>
						<p class="parrafo-servicios">
							2 años 6 meses <br>
							23 módulos <br>
							5 áreas disciplinares<br>
							Formación para el trabajo
						</p>
						<a class="btn-leer-mas mx-auto" href="http://10.3.29.145/plan-de-estudios/">
							Más información
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15px" width="15px"
								class="icon">
								<path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"
									stroke="#292D32"
									d="M8.91016 19.9201L15.4302 13.4001C16.2002 12.6301 16.2002 11.3701 15.4302 10.6001L8.91016 4.08008">
								</path>
							</svg>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="line-boletines-svg d-none d-xl-inline-block">
						<div class=" text-center ">
							<svg viewBox="0 0 1324 672" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M660.932 -0.000488194L662.932 -0.000488281V42.8901H660.932V-0.000488194Z" fill="#D9D9D9" />
								<path d="M660.932 231.749H662.932V248.789H660.932V231.749Z" fill="#D9D9D9" />
								<path d="M0 201.749V71.0002C0 54.4316 13.4315 41.0002 30 41.0002H328V231.749H30V230.749H327V42.0002H30C13.9837 42.0002 1 54.9839 1 71.0002V201.749C1 217.765 13.9837 230.749 30 230.749V231.749L29.2256 231.739C13.0149 231.329 0 218.059 0 201.749Z" fill="#D9D9D9" />
								<path d="M662 41.0002V231.749H328V41.0002H662ZM329 230.749H661V42.0002H329V230.749Z" fill="#D9D9D9" />
								<path d="M997 41.0002V231.749H662V41.0002H997ZM663 230.749H996V42.0002H663V230.749Z" fill="#D9D9D9" />
								<path d="M336 304.78V279C336 262.431 349.431 249 366 249H662.338V334.78H366V333.78H661.338V250H366C349.984 250 337 262.984 337 279V304.78C337 320.796 349.984 333.78 366 333.78V334.78C349.431 334.78 336 321.349 336 304.78Z" fill="#D9D9D9" />
								<path d="M987.338 304.569V278.788C987.338 262.772 974.354 249.788 958.338 249.788H663V333.569H958.338V334.569H662V248.788H958.338C974.907 248.788 988.338 262.22 988.338 278.788V304.569C988.338 321.137 974.907 334.569 958.338 334.569V333.569C974.354 333.569 987.338 320.585 987.338 304.569Z" fill="#D9D9D9" />
								<path d="M660.932 334.569L662.932 334.569V396.363L660.932 396.363V334.569Z" fill="#D9D9D9" />
								<path d="M660.932 606.152H662.932V671.419H660.932V606.152Z" fill="#D9D9D9" />
								<path d="M223.775 576.152V426.363C223.775 409.794 237.206 396.363 253.775 396.363H662V606.152H253.775V605.152H661V397.363H253.775C237.758 397.363 224.775 410.347 224.775 426.363V576.152C224.775 592.168 237.759 605.152 253.775 605.152V606.152L253 606.142C237.047 605.738 224.189 592.88 223.784 576.926L223.775 576.152Z" fill="#D9D9D9" />
								<path d="M1099.23 576.152V426.363C1099.23 410.347 1086.24 397.363 1070.23 397.363H663V605.152H1070.23V606.152H662V396.363H1070.23L1071 396.373C1087.21 396.784 1100.23 410.053 1100.23 426.363V576.152L1100.22 576.926C1099.81 592.879 1086.95 605.738 1071 606.142L1070.23 606.152V605.152C1086.24 605.152 1099.23 592.168 1099.23 576.152Z" fill="#D9D9D9" />
								<path d="M1323 201.749V71.0002C1323 54.9839 1310.02 42.0002 1294 42.0002H998V230.749H1294V231.749H997V41.0002H1294L1294.77 41.0099C1310.99 41.4207 1324 54.6906 1324 71.0002V201.749L1323.99 202.524C1323.59 218.477 1310.73 231.335 1294.77 231.739L1294 231.749V230.749C1310.02 230.749 1323 217.765 1323 201.749Z" fill="#D9D9D9" />
							</svg>

						</div>
					</div>

					<div class="line-boletines-svg-tb d-none d-lg-block d-xl-none">
						<div class="text-center">
							<svg width="935" height="843" viewBox="0 0 935 843" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M466.932 -0.000488194L468.932 -0.000488281V42.8901H466.932V-0.000488194Z" fill="#D9D9D9" />
								<path d="M466.932 201.749H468.932V228.788H466.932V201.749Z" fill="#D9D9D9" />
								<path d="M466.932 389.749H468.932V416.788H466.932V389.749Z" fill="#D9D9D9" />
								<path d="M0 171.749V70.9998C0 54.4313 13.4315 40.9998 30 40.9998H468V201.749H30V200.749H467V41.9998H30C13.9837 41.9998 1 54.9836 1 70.9998V171.749C1 187.765 13.9837 200.749 30 200.749V201.749L29.2256 201.739C13.0149 201.328 0 188.058 0 171.749Z" fill="#D9D9D9" />
								<path d="M141.662 472.569V446.788C141.662 430.22 155.094 416.788 171.662 416.788H468V502.569H171.662V501.569H467V417.788H171.662C155.646 417.788 142.662 430.772 142.662 446.788V472.569C142.662 488.585 155.646 501.569 171.662 501.569V502.569C155.094 502.569 141.662 489.137 141.662 472.569Z" fill="#D9D9D9" />
								<path d="M793.338 472.569V446.788C793.338 430.772 780.354 417.788 764.338 417.788H469V501.569H764.338V502.569H468V416.788H764.338C780.907 416.788 794.338 430.22 794.338 446.788V472.569C794.338 489.137 780.907 502.569 764.338 502.569V501.569C780.354 501.569 793.338 488.585 793.338 472.569Z" fill="#D9D9D9" />
								<path d="M466.932 501.569H468.932V573.363H466.932V501.569Z" fill="#D9D9D9" />
								<path d="M466.932 777.152H468.932V842.419H466.932V777.152Z" fill="#D9D9D9" />
								<path d="M136.775 748.152V603.363C136.775 586.794 150.206 573.363 166.775 573.363H468V778.152H166.775V777.152H467V574.363H166.775C150.758 574.363 137.775 587.346 137.775 603.363V748.152C137.775 764.168 150.759 777.152 166.775 777.152V778.152L166 778.142C150.047 777.738 137.189 764.879 136.784 748.926L136.775 748.152Z" fill="#D9D9D9" />
								<path d="M797.226 748.152V603.363C797.226 587.346 784.242 574.363 768.226 574.363H469V777.152H768.226V778.152H468V573.363H768.226L769 573.372C785.211 573.783 798.226 587.053 798.226 603.363V748.152L798.216 748.926C797.811 764.879 784.953 777.738 769 778.142L768.226 778.152V777.152C784.242 777.152 797.225 764.168 797.226 748.152Z" fill="#D9D9D9" />
								<path d="M934 171.749V71.0003C934 54.9841 921.016 42.0003 905 42.0003H469V200.749H905V201.749L468 201.749V40.9998L905 41.0003L905.774 41.0101C921.985 41.4209 935 54.6907 935 71.0003V171.749L934.99 172.524C934.586 188.477 921.728 201.335 905.774 201.74L905 201.749V200.749C921.016 200.749 934 187.766 934 171.749Z" fill="#D9D9D9" />
								<path d="M0 359.749V259C0 242.431 13.4315 229 30 229H468V389.749H30V388.749H467V230H30C13.9837 230 1 242.984 1 259V359.749C1 375.765 13.9837 388.749 30 388.749V389.749L29.2256 389.739C13.0149 389.328 0 376.058 0 359.749Z" fill="#D9D9D9" />
								<path d="M934 359.749V259C934 242.984 921.016 230 905 230H469V388.749H905V389.749L468 389.749V229L905 229L905.774 229.01C921.985 229.421 935 242.691 935 259V359.749L934.99 360.524C934.586 376.477 921.728 389.335 905.774 389.74L905 389.749V388.749C921.016 388.749 934 375.766 934 359.749Z" fill="#D9D9D9" />
							</svg>


						</div>
					</div>

					<div class="line-boletines-svg-mb d-block d-md-block d-lg-none" style="top:-75px">
						<div class="text-center">
							<svg width="353" height="1580" viewBox="0 0 353 1580" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 1179C6.04109e-09 1178.74 0.00324488 1178.48 0.00976562 1178.23C0.420519 1162.01 13.6904 1149 30 1149V1150C13.9837 1150 1 1162.98 1 1179V1364H352V1179C352 1162.98 339.016 1150 323 1150H30V1149H176V1113H30C13.6904 1113 0.420519 1099.99 0.00976562 1083.77L0 1083V72C3.02054e-08 71.7411 0.00324486 71.4829 0.00976562 71.2256C0.42052 55.015 13.6904 42 30 42V43C13.9837 43 1 55.9837 1 72V221H352V72C352 55.9837 339.016 43 323 43H30V42H176V0H178V42H323L323.774 42.0098C339.985 42.4205 353 55.6904 353 72V1083L352.99 1083.77C352.586 1099.73 339.728 1112.59 323.774 1112.99L323 1113H178V1149H323L323.774 1149.01C339.985 1149.42 353 1162.69 353 1179V1550L352.99 1550.77C352.586 1566.73 339.728 1579.59 323.774 1579.99L323 1580H30C13.6904 1580 0.420519 1566.99 0.00976562 1550.77L0 1550V1179ZM1 1550C1 1566.02 13.9837 1579 30 1579H323C339.016 1579 352 1566.02 352 1550V1365H1V1550ZM1 1083C1 1099.02 13.9837 1112 30 1112H323C339.016 1112 352 1099.02 352 1083V934H1V1083ZM1 933H352V756H1V933ZM1 755H352V401H1V755ZM1 400H352V222H1V400Z" fill="#D9D9D9" />
								<path d="M353.006 578L353 579L1 577L1.00568 576L353.006 578Z" fill="#D9D9D9" />
							</svg>

						</div>
					</div>

				</div>
			</div>
			<!-- 	<div class="mask">
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
									Red de extensión <br> académica y desarrollo <br> integral (Readi)
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
						<path d="M439.797 743.712H441.797V808.966H439.797V743.712Z" fill="#D9D9D9" />
						<path d="M878 713.712V563.966C878 547.95 865.016 534.966 849 534.966H441.864V742.712H849V743.712H440.864V533.966H849L849.774 533.976C865.985 534.387 879 547.657 879 563.966V713.712L878.99 714.487C878.586 730.44 865.728 743.298 849.774 743.703L849 743.712V742.712C865.016 742.712 878 729.728 878 713.712Z" fill="#D9D9D9" />
						<path d="M2.729 713.712V563.966C2.72901 547.657 15.744 534.387 31.9546 533.976L32.729 533.966H440.864V743.712H32.729V742.712H439.865V534.966H32.729C16.7128 534.966 3.72902 547.95 3.729 563.966V713.712C3.72919 729.729 16.7129 742.712 32.729 742.712V743.712L31.9546 743.703C16.0014 743.298 3.14317 730.44 2.73877 714.487L2.729 713.712Z" fill="#D9D9D9" />
						<path d="M439.797 462.187H441.797V533.966H439.797V462.187Z" fill="#D9D9D9" />
						<path d="M766.136 432.187V406.424C766.136 390.408 753.152 377.424 737.136 377.424H441.864V461.187H737.136V462.187H440.864V376.424H737.136L737.91 376.434C754.121 376.845 767.136 390.114 767.136 406.424V432.187L767.126 432.961C766.722 448.914 753.863 461.772 737.91 462.177L737.136 462.187V461.187C753.152 461.186 766.136 448.203 766.136 432.187Z" fill="#D9D9D9" />
						<path d="M114.594 432.119V406.356C114.594 390.046 127.609 376.776 143.819 376.366L144.594 376.356H440.865V462.119H144.594V461.119H439.865V377.356H144.594C128.577 377.356 115.594 390.34 115.594 406.356V432.119C115.594 448.135 128.577 461.119 144.594 461.119V462.119L143.819 462.109C127.609 461.698 114.594 448.428 114.594 432.119Z" fill="#D9D9D9" />
						<path d="M439.797 183.39H441.797V210.424H439.797V183.39Z" fill="#D9D9D9" />
						<path d="M439.797 349.39H441.797V376.424H439.797V349.39Z" fill="#D9D9D9" />
						<path d="M660.933 319.83V240C660.933 223.984 647.949 211 631.933 211H442V348.83H631.933V349.83H441V210H631.933L632.706 210.01C648.917 210.42 661.933 223.69 661.933 240V319.83L661.923 320.604C661.519 336.558 648.66 349.416 632.706 349.82L631.933 349.83V348.83C647.949 348.83 660.933 335.846 660.933 319.83Z" fill="#D9D9D9" />
						<path d="M881.729 153.389V73.5591C881.729 57.543 868.745 44.5593 852.729 44.5591H662.796V182.389H852.729V183.389H661.796V43.5591H852.729L853.502 43.5688C869.713 43.9793 882.729 57.2493 882.729 73.5591V153.389L882.719 154.164C882.315 170.117 869.456 182.975 853.502 183.379L852.729 183.389V182.389C868.745 182.389 881.729 169.405 881.729 153.389Z" fill="#D9D9D9" />
						<path d="M662.729 43.5591V183.389H440.864V43.5591H662.729ZM441.864 182.389H661.729V44.5591H441.864V182.389Z" fill="#D9D9D9" />
						<path d="M440.864 43.5591V183.389H219.932V43.5591H440.864ZM220.932 182.389H439.865V44.5591H220.932V182.389Z" fill="#D9D9D9" />
						<path d="M220 319.83V240C220 223.431 233.431 210 250 210H440.933V349.83H250V348.83H439.933V211H250C233.984 211 221 223.984 221 240V319.83C221 335.846 233.984 348.83 250 348.83V349.83C233.431 349.83 220 336.399 220 319.83Z" fill="#D9D9D9" />
						<path d="M0 153.322V73.4917C0 56.9232 13.4315 43.4917 30 43.4917H220.933V183.322H30V182.322H219.933V44.4917H30C13.9837 44.4917 1 57.4754 1 73.4917V153.322C1 169.338 13.9837 182.322 30 182.322V183.322C13.4315 183.322 0 169.89 0 153.322Z" fill="#D9D9D9" />
						<path d="M439.797 0.677246L441.797 0.677246V43.5591H439.797V0.677246Z" fill="#D9D9D9" />
					</svg>
				</div>
				<div class="linesvgm d-block d-md-block d-lg-none">
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
			</div> -->
		</section>

		<?php get_template_part('template-parts/boletines-home'); ?>

		<section class="banner-colavorativos">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<div class="list">
							<div class="list-item">
								<a href="https://educacionmediasuperior.sep.gob.mx/SEMS_en_cifras"
									target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banners-h-1.webp" alt="banner SEMS cifras"
										class="img-fluid">
								</a>
							</div>

							<div class="list-item">
								<a href="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/01/carteles-descrimincacion.pdf" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banners-h-2.webp" alt="te descriminaron DENUNCIA"
										class="img-fluid">
								</a>
							</div>

							<div class="list-item">
								<a href="https://estrategiaenelaula.sep.gob.mx/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banners-h-3.webp" alt="Te drogas te dañas"
										class="img-fluid">
								</a>
							</div>

							<div class="list-item">
								<a href="http://10.3.29.145/egresados/certificado-electronico/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banners-h-4.webp" alt="Certificación electrónica"
										class="img-fluid">
								</a>
							</div>
							<div class="list-item">
								<a href="https://prepaenlinea.sep.gob.mx/wp-content/uploads/2025/07/09C.05_Banners_certificado_RVOE_Aviso_VF-1.png" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/banners-h-5.webp" alt="Estudios oficiales RVOE"
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