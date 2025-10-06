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

		<section class="mirada">
			<div class="container">
				<div class="row justify-content-center mt-5">
					<div class="col-6 text-center">
						<p><b>Dale play a otra mirada</b></p>
						<a class="btn-play" href="https://www.youtube.com/embed/CeuJolL3FyQ?si=p23UtZpK1xPoNTq4" data-bs-toggle="modal" data-bs-target="#videofull" data-url="https://www.youtube.com/embed/CeuJolL3FyQ?si=p23UtZpK1xPoNTq4" rel="noopener" tabindex="0">
							<svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M33.9868 22.397C35.3783 22.2006 36.4096 22.8881 37.5882 23.4774L68.6258 40.6659C69.1987 41.1079 70.2791 42.2375 70.4101 42.9414C70.8193 45.2659 68.7731 46.0353 67.1361 46.9684L36.4096 62.9619C34.2979 64.206 31.5641 63.1256 31.2694 60.6046L31.0075 26.2603C31.0402 24.4269 32.0879 22.6753 34.0032 22.397H33.9868Z" fill="#5B5A5A"/>
							<path d="M23.1173 30.4838C25.8183 29.9927 27.2752 31.8262 27.488 34.3308L27.4553 52.4851C27.2916 53.9584 26.8824 55.3826 25.4418 56.021C22.8717 57.1833 20.6454 55.4644 20.3998 52.7797L20.4326 33.3486C20.629 31.9571 21.7094 30.7294 23.1173 30.4838Z" fill="#C1D13F"/>
							<path d="M82.7002 42.9248C82.7001 20.9578 64.8919 3.15039 42.9248 3.15039C20.9578 3.15049 3.15049 20.9578 3.15039 42.9248C3.15039 64.8919 20.9578 82.7001 42.9248 82.7002C64.8919 82.7002 82.7002 64.8919 82.7002 42.9248ZM85 42.9248C85 66.1622 66.1622 85 42.9248 85C19.6875 84.9999 0.849609 66.1621 0.849609 42.9248C0.849708 19.6876 19.6876 0.849708 42.9248 0.849609C66.1621 0.849609 84.9999 19.6875 85 42.9248Z" fill="#5B5A5A"/>
							</svg>
						</a>
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
				<div class="row justify-content-center align-items-start">
					<div class="col-xl-3 col-lg-6">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="139" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#sidat"></use>
								</svg>
								<p class="mt-2">Inspira e Integra, apoyo para seguir aprendiendo sin detenerte.</p>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 mt-5 m-lg-0">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="226" height="29">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#proyecta"></use>
								</svg>
								<p style="margin-top:28px;">Descubre universidades, modalidades y guías para avanzar.</p>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 mt-xl-0 mt-5">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="162" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#readi"></use>
								</svg>
								<p class="mt-2">Cursos, talleres y conferencias para fortalecer tu aprendizaje a tu ritmo.</p>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 mt-xl-0 mt-lg-5 mt-4">
						<div class="text-center border-boletin ">
							<a class="btn-icono" href="http://10.3.29.145/difusion-cultural/">
								<svg width="108" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#difusion"></use>
								</svg>
								<p class="mt-2">Vive experiencias culturales con actividades nuevas y creativas.</p>
							</a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center align-items-center mt-5 mt-md-5 mt-lg-5 mt-xl-3 ">
					<div class="col-lg-3 text-center">
						<div class="descripcion-servicios ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#vida-saludable" />
								</svg>
								<div class="titulo-servicios mt-2">
									Vida saludable
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 text-center">
						<div class="descripcion-servicios mt-5 mt-lg-1 ">
							<a class="btn-icono" href="#" target="_blank">
								<svg width="50" height="50">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/servicios.svg#bolsa-trabajo" />
								</svg>
								<div class="titulo-servicios mt-2">
									Bolsa de trabajo
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center mt-lg-5 mt-4">
					<div class="col-lg-4 text-center mt-5 mt-md-5 mt-lg-2">
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
					<div class="col-lg-4 text-center mt-3 mt-md-3 mt-lg-2">
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
							<svg viewBox="0 0 1324 702" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M660.932 -0.000488194L662.932 -0.000488281V42.8901H660.932V-0.000488194Z" fill="#D9D9D9"/>
							<path d="M660.932 231.749H662.932V248.789H660.932V231.749Z" fill="#D9D9D9"/>
							<path d="M0 201.749V71.0002C0 54.4316 13.4315 41.0002 30 41.0002H328V231.749H30V230.749H327V42.0002H30C13.9837 42.0002 1 54.9839 1 71.0002V201.749C1 217.765 13.9837 230.749 30 230.749V231.749L29.2256 231.739C13.0149 231.329 0 218.059 0 201.749Z" fill="#D9D9D9"/>
							<path d="M662 41.0002V231.749H328V41.0002H662ZM329 230.749H661V42.0002H329V230.749Z" fill="#D9D9D9"/>
							<path d="M997 41.0002V231.749H662V41.0002H997ZM663 230.749H996V42.0002H663V230.749Z" fill="#D9D9D9"/>
							<path d="M336 334.78V279C336 262.431 349.431 249 366 249H662.338V364.78H366V363.78H661.338V250H366C349.984 250 337 262.984 337 279V334.78C337 350.796 349.984 363.78 366 363.78V364.78C349.431 364.78 336 351.349 336 334.78Z" fill="#D9D9D9"/>
							<path d="M987.338 334.569V278.788C987.338 262.772 974.354 249.788 958.338 249.788H663V363.569H958.338V364.569H662V248.788H958.338C974.907 248.788 988.338 262.22 988.338 278.788V334.569C988.338 351.137 974.907 364.569 958.338 364.569V363.569C974.354 363.569 987.338 350.585 987.338 334.569Z" fill="#D9D9D9"/>
							<path d="M660.932 364.569L662.932 364.569V406.363L660.932 406.363V364.569Z" fill="#D9D9D9"/>
							<path d="M660.932 636.152H662.932V701.419H660.932V636.152Z" fill="#D9D9D9"/>
							<path d="M223.775 606.152V436.363C223.775 419.794 237.206 406.363 253.775 406.363H662V636.152H253.775V635.152H661V407.363H253.775C237.758 407.363 224.775 420.347 224.775 436.363V606.152C224.775 622.168 237.759 635.152 253.775 635.152V636.152L253 636.142C237.047 635.738 224.189 622.88 223.784 606.926L223.775 606.152Z" fill="#D9D9D9"/>
							<path d="M1099.23 606.152V436.363C1099.23 420.347 1086.24 407.363 1070.23 407.363H663V635.152H1070.23V636.152H662V406.363H1070.23L1071 406.373C1087.21 406.784 1100.23 420.053 1100.23 436.363V606.152L1100.22 606.926C1099.81 622.879 1086.95 635.738 1071 636.142L1070.23 636.152V635.152C1086.24 635.152 1099.23 622.168 1099.23 606.152Z" fill="#D9D9D9"/>
							<path d="M1323 201.749V71.0002C1323 54.9839 1310.02 42.0002 1294 42.0002H998V230.749H1294V231.749H997V41.0002H1294L1294.77 41.0099C1310.99 41.4207 1324 54.6906 1324 71.0002V201.749L1323.99 202.524C1323.59 218.477 1310.73 231.335 1294.77 231.739L1294 231.749V230.749C1310.02 230.749 1323 217.765 1323 201.749Z" fill="#D9D9D9"/>
							</svg>
						</div>
					</div>

					<div class="line-boletines-svg-tb d-none d-lg-block d-xl-none">
						<div class="text-center">
							<svg width="935" height="868" viewBox="0 0 935 868" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M466.932 -0.000488194L468.932 -0.000488281V42.8901H466.932V-0.000488194Z" fill="#D9D9D9"/>
							<path d="M466.932 201.749H468.932V228.788H466.932V201.749Z" fill="#D9D9D9"/>
							<path d="M466.932 389.749H468.932V426.788H466.932V389.749Z" fill="#D9D9D9"/>
							<path d="M0 171.749V70.9998C0 54.4313 13.4315 40.9998 30 40.9998H468V201.749H30V200.749H467V41.9998H30C13.9837 41.9998 1 54.9836 1 70.9998V171.749C1 187.765 13.9837 200.749 30 200.749V201.749L29.2256 201.739C13.0149 201.328 0 188.058 0 171.749Z" fill="#D9D9D9"/>
							<path d="M240.662 512.569V456.788C240.662 440.22 254.094 426.788 270.662 426.788H468V542.569H270.662V541.569H467V427.788H270.662C254.646 427.788 241.662 440.772 241.662 456.788V512.569C241.662 528.585 254.646 541.569 270.662 541.569V542.569C254.094 542.569 240.662 529.137 240.662 512.569Z" fill="#D9D9D9"/>
							<path d="M695.338 512.569V456.788C695.338 440.772 682.354 427.788 666.338 427.788H469V541.569H666.338V542.569H468V426.788H666.338C682.907 426.788 696.338 440.22 696.338 456.788V512.569C696.338 529.137 682.907 542.569 666.338 542.569V541.569C682.354 541.569 695.338 528.585 695.338 512.569Z" fill="#D9D9D9"/>
							<path d="M466.932 541.569H468.932V588.363H466.932V541.569Z" fill="#D9D9D9"/>
							<path d="M466.932 812.152H468.932V867.419H466.932V812.152Z" fill="#D9D9D9"/>
							<path d="M136.775 783.152V618.363C136.775 601.794 150.206 588.363 166.775 588.363H468V813.152H166.775V812.152H467V589.363H166.775C150.758 589.363 137.775 602.346 137.775 618.363V783.152C137.775 799.168 150.759 812.152 166.775 812.152V813.152L166 813.142C150.047 812.738 137.189 799.879 136.784 783.926L136.775 783.152Z" fill="#D9D9D9"/>
							<path d="M797.226 783.152V618.363C797.226 602.346 784.242 589.363 768.226 589.363H469V812.152H768.226V813.152H468V588.363H768.226L769 588.372C785.211 588.783 798.226 602.053 798.226 618.363V783.152L798.216 783.926C797.811 799.879 784.953 812.738 769 813.142L768.226 813.152V812.152C784.242 812.152 797.225 799.168 797.226 783.152Z" fill="#D9D9D9"/>
							<path d="M934 171.749V71.0003C934 54.9841 921.016 42.0003 905 42.0003H469V200.749H905V201.749L468 201.749V40.9998L905 41.0003L905.774 41.0101C921.985 41.4209 935 54.6907 935 71.0003V171.749L934.99 172.524C934.586 188.477 921.728 201.335 905.774 201.74L905 201.749V200.749C921.016 200.749 934 187.766 934 171.749Z" fill="#D9D9D9"/>
							<path d="M0 359.749V259C0 242.431 13.4315 229 30 229H468V389.749H30V388.749H467V230H30C13.9837 230 1 242.984 1 259V359.749C1 375.765 13.9837 388.749 30 388.749V389.749L29.2256 389.739C13.0149 389.328 0 376.058 0 359.749Z" fill="#D9D9D9"/>
							<path d="M934 359.749V259C934 242.984 921.016 230 905 230H469V388.749H905V389.749L468 389.749V229L905 229L905.774 229.01C921.985 229.421 935 242.691 935 259V359.749L934.99 360.524C934.586 376.477 921.728 389.335 905.774 389.74L905 389.749V388.749C921.016 388.749 934 375.766 934 359.749Z" fill="#D9D9D9"/>
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
		</section>

		<?php get_template_part('template-parts/boletines-home'); ?>

		<section class="banner-colavorativos">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<div class="list">
							<div class="list-item">
								<a href="https://educacionmediasuperior.sep.gob.mx/SEMS_en_cifras.html"
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

<!-- Modal -->

<div class="modal fade" id="videofull" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
			<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 0C6.64286 0 0 6.64286 0 15C0 23.3571 6.64286 30 15 30C23.3571 30 30 23.3571 30 15C30 6.64286 23.3571 0 15 0ZM15 27.8571C7.92857 27.8571 2.14286 22.0714 2.14286 15C2.14286 7.92857 7.92857 2.14286 15 2.14286C22.0714 2.14286 27.8571 7.92857 27.8571 15C27.8571 22.0714 22.0714 27.8571 15 27.8571Z" fill="#C1D13F"></path>
                <path d="M20.7857 22.5L15 16.7143L9.21429 22.5L7.5 20.7857L13.2857 15L7.5 9.21429L9.21429 7.5L15 13.2857L20.7857 7.5L22.5 9.21429L16.7143 15L22.5 20.7857L20.7857 22.5Z" fill="#C1D13F"></path></svg>
		</button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
            <iframe width="100%" height="100%" class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      
    </div>
  </div>
</div>




<script>
     jQuery('.modal').on('show.bs.modal', function (event) {
	jQuery(this).find('iframe').attr("src", jQuery(event.relatedTarget).data('url') );
	});
	
	jQuery('.modal').on('hidden.bs.modal', function (e) {
	jQuery(this).find('iframe').attr("src", "");
	}); 
</script>

<?php
endwhile;
get_footer(); ?>