<?php

if (!defined('ABSPATH'))
    exit; ?>

<!-- <footer>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class=" col-lg-6 order-2 order-md-1 text-center text-md-start">
                <div class="bor">
                    Av. Revolución 1425, colonia Campestre, <br>
                    alcaldía Álvaro Obregón, CDMX, 01040.
                    <br> <a class="contac"
                        href="<?php echo SITE_URL ?>/contacto">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 2H8C5.79086 2 4 3.79086 4 6V18C4 20.2091 5.79086 22 8 22H17.5C19.7091 22 21.5 20.2091 21.5 18V6C21.5 3.79086 19.7091 2 17.5 2Z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M10.59 13.74C9.96099 14.162 8.31299 15.022 9.31699 16.098C9.80699 16.624 10.354 17 11.04 17H14.96C15.646 17 16.193 16.624 16.683 16.098C17.687 15.022 16.039 14.162 15.41 13.741C14.699 13.2582 13.8594 13.0001 13 13.0001C12.1406 13.0001 11.301 13.2582 10.59 13.741V13.74ZM15 9C15 9.53043 14.7893 10.0391 14.4142 10.4142C14.0391 10.7893 13.5304 11 13 11C12.4696 11 11.9609 10.7893 11.5858 10.4142C11.2107 10.0391 11 9.53043 11 9C11 8.46957 11.2107 7.96086 11.5858 7.58579C11.9609 7.21071 12.4696 7 13 7C13.5304 7 14.0391 7.21071 14.4142 7.58579C14.7893 7.96086 15 8.46957 15 9Z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M5 6H2.5M5 12H2.5M5 18H2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span> Contacto</span>
                         </a>
                </div>
            </div>
            <div class=" col-lg-6 text-center text-md-end order-1 order-md-2">

                <ul class="wrapper">
                    <li class="icon facebook">
                        <a href="https://www.facebook.com/PrepaEnLineadelaSEP/" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Facebook</span>
                            <svg viewBox="0 0 320 512" height="1.2em" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="icon twitter">
                        <a href="https://x.com/PrepaLineaSEP/" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">X</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M2.18511 1.88157H4.23738L13.326 13.8836H11.2737L2.18511 1.88157ZM0.244518 0.929688L6.05232 8.61377L0.202637 14.8631H1.51498L6.63868 9.40011L10.7711 14.8631H15.2526L9.10979 6.75138L14.5546 0.943483H13.2423L8.52342 5.97883L4.71206 0.943483H0.230565L0.244518 0.929688Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li class="icon instagram">
                        <a href="https://www.instagram.com/prepaenlineasep/" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Instagram</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="icon youtube">
                        <a href="https://www.youtube.com/@PrepaenLinea-SEP/" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">YouTube</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor"
                                class="bi bi-youtube" viewBox="0 0 16 11">
                                <path
                                    d="M6.75716 7.65871V3.33046L10.601 5.49459L6.75716 7.65871ZM15.3164 1.97235C15.1488 1.34299 14.646 0.846122 14.0091 0.6805C12.8582 0.371339 8.25447 0.371338 8.25447 0.371338C8.25447 0.371338 3.65079 0.371339 2.49986 0.6805C1.86295 0.846122 1.37129 1.34299 1.19251 1.97235C0.879637 3.10963 0.879639 5.49459 0.879639 5.49459C0.879639 5.49459 0.879637 7.87955 1.19251 9.01682C1.36012 9.64618 1.86295 10.143 2.49986 10.3087C3.65079 10.6178 8.25447 10.6178 8.25447 10.6178C8.25447 10.6178 12.8582 10.6178 14.0091 10.3087C14.646 10.143 15.1377 9.64618 15.3164 9.01682C15.6181 7.87955 15.6181 5.49459 15.6181 5.49459C15.6181 5.49459 15.6181 3.10963 15.3164 1.97235Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li class="icon tiktok">
                        <a href="https://www.tiktok.com/@prepaenlinea_sep/" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">TikTok</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor"
                                class="bi bi-tiktok" viewBox="0 0 15 17">
                                <path
                                    d="M14.9037 4.33176C14.9037 4.25447 14.9037 4.25447 14.8255 4.25447C14.6355 4.25447 14.4568 4.23239 14.2668 4.2103C13.5964 4.11093 11.4398 2.9847 11.071 1.15181C11.071 1.11869 10.9816 0.654945 10.9816 0.46724C10.9816 0.378908 10.9816 0.378908 10.8922 0.378908C10.8699 0.378908 10.8476 0.378908 10.8364 0.378908C9.98715 0.378908 9.14912 0.378908 8.29989 0.378908C8.13228 0.378908 8.15463 0.356826 8.15463 0.522448C8.15463 4.14405 8.15463 7.7767 8.15463 11.3983C8.15463 11.5308 8.15463 11.6743 8.1211 11.8068C7.99819 12.5135 7.62943 13.0545 7.01486 13.4299C6.4785 13.7501 5.90865 13.8495 5.29408 13.7281C5.10413 13.6949 4.91417 13.6176 4.73538 13.5514C4.72421 13.5404 4.70185 13.5293 4.69068 13.5072C4.63481 13.452 4.56775 13.4189 4.50071 13.3747C3.71853 12.8337 3.34979 12.0939 3.46153 11.1664C3.57327 10.2169 4.12079 9.57646 5.02589 9.24522C5.29406 9.14584 5.58459 9.10168 5.86394 9.12376C6.05389 9.12376 6.2327 9.15689 6.41148 9.21209C6.47853 9.23417 6.51205 9.21209 6.51205 9.14584C6.51205 9.12376 6.51205 9.10168 6.51205 9.0796C6.51205 8.42815 6.48971 7.0038 6.48971 7.0038C6.48971 6.81609 6.48971 6.62839 6.48971 6.44068C6.48971 6.38547 6.46733 6.37443 6.42264 6.37443C6.08742 6.33027 5.74104 6.33027 5.39465 6.35235C4.91416 6.38547 4.45604 6.48485 4.00908 6.63943C3.29395 6.89338 2.66818 7.27983 2.13182 7.80982C1.66252 8.26253 1.30497 8.78148 1.03679 9.36667C0.779792 9.92979 0.634503 10.515 0.589807 11.1223C0.567459 11.3873 0.578633 11.6523 0.589807 11.9173C0.623329 12.2816 0.690376 12.646 0.802116 12.9993C1.12616 14.0151 1.71839 14.8432 2.55644 15.4947C2.64583 15.5609 2.72404 15.6382 2.82461 15.6824C2.8693 15.7155 2.91403 15.7597 2.95872 15.7928C3.09281 15.8922 3.23806 15.9805 3.39449 16.0578C4.33311 16.5216 5.3276 16.6982 6.36678 16.5768C7.71883 16.4111 8.84739 15.8149 9.74131 14.7991C10.5794 13.8385 10.9817 12.7122 10.9928 11.4425C10.9928 9.64271 10.9928 7.83191 10.9928 6.02111C10.9928 5.97694 10.9705 5.92173 11.0152 5.89965C11.0487 5.87757 11.0934 5.93277 11.1269 5.95486C11.8085 6.39652 12.5348 6.71672 13.3393 6.89338C13.7975 6.99276 14.2668 7.059 14.7473 7.059C14.8925 7.059 14.9149 7.059 14.9149 6.90442C14.9149 6.26402 14.8814 4.50842 14.8814 4.3428"
                                    fill="#currentColor" />
                            </svg>
                        </a>
                    </li>

                    <li class="icon spotify">
                        <a href="https://open.spotify.com/show/5GH1mXSrMx6AMchq1EAsHc?si=f407167b9a89491a&nd=1" target="_blank" rel="noopener noreferrer">
                            <span class="tooltip">Spotify</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor"
                                class="bi bi-spotify" viewBox="0 0 15 16">
                                <path d="M11.925 6.675C9.525 5.25 5.5125 5.1 3.225 5.8125C2.85 5.925 2.475 5.7 2.3625 5.3625C2.25 4.9875 2.475 4.6125 2.8125 4.5C5.475 3.7125 9.8625 3.8625 12.6375 5.5125C12.975 5.7 13.0875 6.15 12.9 6.4875C12.7125 6.75 12.2625 6.8625 11.925 6.675ZM11.85 8.775C11.6625 9.0375 11.325 9.15 11.0625 8.9625C9.0375 7.725 5.9625 7.35 3.6 8.1C3.3 8.175 2.9625 8.025 2.8875 7.725C2.8125 7.425 2.9625 7.0875 3.2625 7.0125C6 6.1875 9.375 6.6 11.7 8.025C11.925 8.1375 12.0375 8.5125 11.85 8.775ZM10.95 10.8375C10.8 11.0625 10.5375 11.1375 10.3125 10.9875C8.55 9.9 6.3375 9.675 3.7125 10.275C3.45 10.35 3.225 10.1625 3.15 9.9375C3.075 9.675 3.2625 9.45 3.4875 9.375C6.3375 8.7375 8.8125 9 10.7625 10.2C11.025 10.3125 11.0625 10.6125 10.95 10.8375ZM7.5 0C6.51509 0 5.53982 0.193993 4.62987 0.570904C3.71993 0.947814 2.89314 1.50026 2.1967 2.1967C0.790176 3.60322 0 5.51088 0 7.5C0 9.48912 0.790176 11.3968 2.1967 12.8033C2.89314 13.4997 3.71993 14.0522 4.62987 14.4291C5.53982 14.806 6.51509 15 7.5 15C9.48912 15 11.3968 14.2098 12.8033 12.8033C14.2098 11.3968 15 9.48912 15 7.5C15 6.51509 14.806 5.53982 14.4291 4.62987C14.0522 3.71993 13.4997 2.89314 12.8033 2.1967C12.1069 1.50026 11.2801 0.947814 10.3701 0.570904C9.46018 0.193993 8.48491 0 7.5 0Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="main-footer">
    <div class="list-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"><img data-v-9e928f9a=""
                        src="https://framework-gb.cdn.gob.mx/gobmx/img/logo_blanco.svg" href="/"
                        alt="logo gobierno de méxico" class="logo_footer" style="max-width: 90%;"></div>
                <div class="col-sm-3" style="padding-left: 0px;">
                    <h5>Enlaces</h5>
                    <ul>
                        <li><a href="https://participa.gob.mx" target="_blank" rel="noopener"
                                title="Enlace abre en ventana nueva">Participa</a></li>
                        <li><a href="http://www.ordenjuridico.gob.mx" target="_blank" rel="noopener"
                                title="Enlace abre en ventana nueva">Marco Jurídico</a></li>
                        <li><a href="https://consultapublicamx.inai.org.mx/vut-web/" target="_blank" rel="noopener"
                                title="Enlace abre en ventana nueva">Plataforma Nacional de Transparencia</a></li>
                        <li><a href="https://alertadores.funcionpublica.gob.mx/" target="_blank" rel="noopener"
                                title="Enlace abre en ventana nueva">Alerta</a></li>
                        <li><a href="https://sidec.funcionpublica.gob.mx" target="_blank" rel="noopener"
                                title="Enlace abre en ventana nueva">Denuncia</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>¿Qué es gob.mx?</h5>
                    <p>Es el portal único de trámites, información y participación ciudadana. <a
                            href="https://www.gob.mx/que-es-gobmx">Leer más</a></p>
                    <ul>
                        <li><a href="https://datos.gob.mx" target="_blank">Portal de datos abiertos</a></li>
                        <li><a href="https://www.gob.mx/accesibilidad" target="_blank">Declaración de
                                accesibilidad</a></li>
                        <li><a href="https://www.gob.mx/terminos" target="_blank">Términos y Condiciones</a></li>
                        <li><a href="https://www.gob.mx/terminos#medidas-seguridad-informacion"
                                target="_blank">Política de seguridad</a></li>
                        <li><a href="https://www.gob.mx/sitemap" target="_blank">Mapa de sitio</a></li>
                    </ul>
                </div>
                <div class="col-sm-3" style="padding-left: 0px;">
                    <h5><a href="https://www.gob.mx/tramites/ficha/presentacion-de-quejas-y-denuncias-en-la-sfp/SFP54"
                            target="_blank">Denuncia contra servidores públicos</a></h5>
                    <h5>Síguenos en</h5>
                    <ul class="list-inline">
                        <li><a data-v-6b1f797a="" id="Facebook" href="https://www.facebook.com/gobmexico"
                                target="_blank" rel="noopener" title="enlace a facebook abre en una nueva ventana"
                                class="sendEst share-info footer"><img alt="Facebook"
                                    src="https://framework-gb.cdn.gob.mx/landing/img/facebook.png"></a></li>
                        <li style="margin-left: 5px; margin-right: 5px;"><a data-v-6b1f797a="" id="Twitter"
                                href="https://twitter.com/GobiernoMX" target="_blank" rel="noopener"
                                title="Enlace a twitter abre en una nueva ventana"
                                class="sendEst share-info footer"><img alt="Twitter"
                                    src="https://framework-gb.cdn.gob.mx/landing/img/twitter.png"></a></li>
                        <li style="margin-left: 5px; margin-right: 5px;"><a data-v-6b1f797a="" id="Instagram"
                                href="https://www.instagram.com/gobmexico/" target="_blank" rel="noopener"
                                title="Enlace a instagram abre en una nueva ventana"
                                class="sendEst share-info footer"><img alt="Instagram"
                                    src="https://framework-gb.cdn.gob.mx/landing/img/instagram.png"></a></li>
                        <li style="margin-left: 5px; margin-right: 5px;"><a data-v-6b1f797a="" id="Youtube"
                                href="https://www.youtube.com/@gobiernodemexico" target="_blank" rel="noopener"
                                title="Enlace a youtube abre en una nueva ventana"
                                class="sendEst share-info footer"><img alt="Youtube"
                                    src="https://framework-gb.cdn.gob.mx/landing/img/youtube.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-pleca">
        <div class="row">
            <div class="col"><br><br></div>
        </div>
    </div>
</div>  -->
<footer>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 order-2 order-md-1 text-center text-md-start">
                <div class="bor">Av. Revolución 1425, colonia Campestre,<br>alcaldía Álvaro Obregón, CDMX, 01040.<br><a class="contac" href="https://prepaenlinea.sep.gob.mx/contacto" target="_blank"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 2H8C5.79086 2 4 3.79086 4 6V18C4 20.2091 5.79086 22 8 22H17.5C19.7091 22 21.5 20.2091 21.5 18V6C21.5 3.79086 19.7091 2 17.5 2Z" stroke="currentColor" stroke-width="1.5" />
                            <path d="M10.59 13.74C9.96099 14.162 8.31299 15.022 9.31699 16.098C9.80699 16.624 10.354 17 11.04 17H14.96C15.646 17 16.193 16.624 16.683 16.098C17.687 15.022 16.039 14.162 15.41 13.741C14.699 13.2582 13.8594 13.0001 13 13.0001C12.1406 13.0001 11.301 13.2582 10.59 13.741V13.74ZM15 9C15 9.53043 14.7893 10.0391 14.4142 10.4142C14.0391 10.7893 13.5304 11 13 11C12.4696 11 11.9609 10.7893 11.5858 10.4142C11.2107 10.0391 11 9.53043 11 9C11 8.46957 11.2107 7.96086 11.5858 7.58579C11.9609 7.21071 12.4696 7 13 7C13.5304 7 14.0391 7.21071 14.4142 7.58579C14.7893 7.96086 15 8.46957 15 9Z" stroke="currentColor" stroke-width="1.5" />
                            <path d="M5 6H2.5M5 12H2.5M5 18H2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg><span>Contacto</span></a></div>
            </div>
            <div class="col-lg-6 text-center text-md-end order-1 order-md-2">
                <ul class="wrapper">
                    <li class="icon facebook"><a href="https://www.facebook.com/PrepaEnLineadelaSEP/" target="_blank" rel="noopener noreferrer"><span class="tooltip">Facebook</span><svg viewBox="0 0 320 512" height="1.2em" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                            </svg></a></li>
                    <li class="icon twitter"><a href="https://x.com/PrepaLineaSEP/" target="_blank" rel="noopener noreferrer"><span class="tooltip">X</span><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M2.18511 1.88157H4.23738L13.326 13.8836H11.2737L2.18511 1.88157ZM0.244518 0.929688L6.05232 8.61377L0.202637 14.8631H1.51498L6.63868 9.40011L10.7711 14.8631H15.2526L9.10979 6.75138L14.5546 0.943483H13.2423L8.52342 5.97883L4.71206 0.943483H0.230565L0.244518 0.929688Z" fill="currentColor"></path>
                            </svg></a></li>
                    <li class="icon instagram"><a href="https://www.instagram.com/prepaenlineasep/" target="_blank" rel="noopener noreferrer"><span class="tooltip">Instagram</span><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg></a></li>
                    <li class="icon youtube"><a href="https://www.youtube.com/@PrepaenLinea-SEP/" target="_blank" rel="noopener noreferrer"><span class="tooltip">YouTube</span><svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 11">
                                <path d="M6.75716 7.65871V3.33046L10.601 5.49459L6.75716 7.65871ZM15.3164 1.97235C15.1488 1.34299 14.646 0.846122 14.0091 0.6805C12.8582 0.371339 8.25447 0.371338 8.25447 0.371338C8.25447 0.371338 3.65079 0.371339 2.49986 0.6805C1.86295 0.846122 1.37129 1.34299 1.19251 1.97235C0.879637 3.10963 0.879639 5.49459 0.879639 5.49459C0.879639 5.49459 0.879637 7.87955 1.19251 9.01682C1.36012 9.64618 1.86295 10.143 2.49986 10.3087C3.65079 10.6178 8.25447 10.6178 8.25447 10.6178C8.25447 10.6178 12.8582 10.6178 14.0091 10.3087C14.646 10.143 15.1377 9.64618 15.3164 9.01682C15.6181 7.87955 15.6181 5.49459 15.6181 5.49459C15.6181 5.49459 15.6181 3.10963 15.3164 1.97235Z" fill="currentColor"></path>
                            </svg></a></li>
                    <li class="icon tiktok"><a href="https://www.tiktok.com/@prepaenlinea_sep/" target="_blank" rel="noopener noreferrer"><span class="tooltip">TikTok</span><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 15 17">
                                <path d="M14.9037 4.33176C14.9037 4.25447 14.9037 4.25447 14.8255 4.25447C14.6355 4.25447 14.4568 4.23239 14.2668 4.2103C13.5964 4.11093 11.4398 2.9847 11.071 1.15181C11.071 1.11869 10.9816 0.654945 10.9816 0.46724C10.9816 0.378908 10.9816 0.378908 10.8922 0.378908C10.8699 0.378908 10.8476 0.378908 10.8364 0.378908C9.98715 0.378908 9.14912 0.378908 8.29989 0.378908C8.13228 0.378908 8.15463 0.356826 8.15463 0.522448C8.15463 4.14405 8.15463 7.7767 8.15463 11.3983C8.15463 11.5308 8.15463 11.6743 8.1211 11.8068C7.99819 12.5135 7.62943 13.0545 7.01486 13.4299C6.4785 13.7501 5.90865 13.8495 5.29408 13.7281C5.10413 13.6949 4.91417 13.6176 4.73538 13.5514C4.72421 13.5404 4.70185 13.5293 4.69068 13.5072C4.63481 13.452 4.56775 13.4189 4.50071 13.3747C3.71853 12.8337 3.34979 12.0939 3.46153 11.1664C3.57327 10.2169 4.12079 9.57646 5.02589 9.24522C5.29406 9.14584 5.58459 9.10168 5.86394 9.12376C6.05389 9.12376 6.2327 9.15689 6.41148 9.21209C6.47853 9.23417 6.51205 9.21209 6.51205 9.14584C6.51205 9.12376 6.51205 9.10168 6.51205 9.0796C6.51205 8.42815 6.48971 7.0038 6.48971 7.0038C6.48971 6.81609 6.48971 6.62839 6.48971 6.44068C6.48971 6.38547 6.46733 6.37443 6.42264 6.37443C6.08742 6.33027 5.74104 6.33027 5.39465 6.35235C4.91416 6.38547 4.45604 6.48485 4.00908 6.63943C3.29395 6.89338 2.66818 7.27983 2.13182 7.80982C1.66252 8.26253 1.30497 8.78148 1.03679 9.36667C0.779792 9.92979 0.634503 10.515 0.589807 11.1223C0.567459 11.3873 0.578633 11.6523 0.589807 11.9173C0.623329 12.2816 0.690376 12.646 0.802116 12.9993C1.12616 14.0151 1.71839 14.8432 2.55644 15.4947C2.64583 15.5609 2.72404 15.6382 2.82461 15.6824C2.8693 15.7155 2.91403 15.7597 2.95872 15.7928C3.09281 15.8922 3.23806 15.9805 3.39449 16.0578C4.33311 16.5216 5.3276 16.6982 6.36678 16.5768C7.71883 16.4111 8.84739 15.8149 9.74131 14.7991C10.5794 13.8385 10.9817 12.7122 10.9928 11.4425C10.9928 9.64271 10.9928 7.83191 10.9928 6.02111C10.9928 5.97694 10.9705 5.92173 11.0152 5.89965C11.0487 5.87757 11.0934 5.93277 11.1269 5.95486C11.8085 6.39652 12.5348 6.71672 13.3393 6.89338C13.7975 6.99276 14.2668 7.059 14.7473 7.059C14.8925 7.059 14.9149 7.059 14.9149 6.90442C14.9149 6.26402 14.8814 4.50842 14.8814 4.3428" fill="#currentColor"></path>
                            </svg></a></li>
                    <li class="icon spotify"><a href="https://open.spotify.com/show/5GH1mXSrMx6AMchq1EAsHc?si=f407167b9a89491a&amp;nd=1" target="_blank" rel="noopener noreferrer"><span class="tooltip">Spotify</span><svg xmlns="http://www.w3.org/2000/svg" height="1.2em" fill="currentColor" class="bi bi-spotify" viewBox="0 0 15 16">
                                <path d="M11.925 6.675C9.525 5.25 5.5125 5.1 3.225 5.8125C2.85 5.925 2.475 5.7 2.3625 5.3625C2.25 4.9875 2.475 4.6125 2.8125 4.5C5.475 3.7125 9.8625 3.8625 12.6375 5.5125C12.975 5.7 13.0875 6.15 12.9 6.4875C12.7125 6.75 12.2625 6.8625 11.925 6.675ZM11.85 8.775C11.6625 9.0375 11.325 9.15 11.0625 8.9625C9.0375 7.725 5.9625 7.35 3.6 8.1C3.3 8.175 2.9625 8.025 2.8875 7.725C2.8125 7.425 2.9625 7.0875 3.2625 7.0125C6 6.1875 9.375 6.6 11.7 8.025C11.925 8.1375 12.0375 8.5125 11.85 8.775ZM10.95 10.8375C10.8 11.0625 10.5375 11.1375 10.3125 10.9875C8.55 9.9 6.3375 9.675 3.7125 10.275C3.45 10.35 3.225 10.1625 3.15 9.9375C3.075 9.675 3.2625 9.45 3.4875 9.375C6.3375 8.7375 8.8125 9 10.7625 10.2C11.025 10.3125 11.0625 10.6125 10.95 10.8375ZM7.5 0C6.51509 0 5.53982 0.193993 4.62987 0.570904C3.71993 0.947814 2.89314 1.50026 2.1967 2.1967C0.790176 3.60322 0 5.51088 0 7.5C0 9.48912 0.790176 11.3968 2.1967 12.8033C2.89314 13.4997 3.71993 14.0522 4.62987 14.4291C5.53982 14.806 6.51509 15 7.5 15C9.48912 15 11.3968 14.2098 12.8033 12.8033C14.2098 11.3968 15 9.48912 15 7.5C15 6.51509 14.806 5.53982 14.4291 4.62987C14.0522 3.71993 13.4997 2.89314 12.8033 2.1967C12.1069 1.50026 11.2801 0.947814 10.3701 0.570904C9.46018 0.193993 8.48491 0 7.5 0Z" fill="currentColor"></path>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="main-footer">
    <div class="">
        <div class="container">
            <div class="bottom-buffer-footer row">
                <div class="col-sm-3 logo-footer"><img src="https://framework-gb.cdn.gob.mx/gobmx/img/logo_blanco.svg" href="/" alt="logo gobierno de méxico" class="logo_footer" style="max-width:50%"></div>
                <div class="accordion col-sm-3"><input id="toggle1" type="checkbox" class="accordion-toggle" name="toggle"><label for="toggle1">
                        <h5>Enlaces</h5>
                    </label>
                    <section>
                        <div class="">
                            <ul class="nav-list">
                                <li><a href="https://data.buengobierno.gob.mx/" target="_blank" rel="noopener" title="Enlace abre en ventana nueva">Datos abiertos de la SABG</a></li>
                                <li><a href="http://www.ordenjuridico.gob.mx" target="_blank" rel="noopener" title="Enlace abre en ventana nueva">Marco Jurídico</a></li>
                                <li><a href="https://consultapublicamx.plataformadetransparencia.org.mx/vut-web/faces/view/consultaPublica.xhtml#inicio" target="_blank" rel="noopener" title="Enlace abre en ventana nueva">Plataforma Nacional de Transparencia</a></li>
                                <li><a href="https://transparencia.gob.mx" target="_blank" rel="noopener" title="Enlace abre en ventana nueva">Transparencia para el pueblo</a></li>
                                <li><a href="https://alertadores.buengobierno.gob.mx/" target="_blank" rel="noopener" title="Enlace abre en ventana nueva">Alerta</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="accordion col-sm-3"><input id="toggle2" type="checkbox" class="accordion-toggle" name="toggle"><label for="toggle2">
                        <h5>¿Qué es gob.mx?</h5>
                    </label>
                    <section>
                        <div class="">
                            <p>Es el portal único de trámites, información y participación ciudadana.<a href="https://www.gob.mx/que-es-gobmx">Leer más</a></p>
                            <ul class="nav-list">
                                <li><a href="https://datos.gob.mx" target="_blank">Portal de datos abiertos</a></li>
                                <li><a href="https://www.gob.mx/accesibilidad" target="_blank">Declaración de accesibilidad</a></li>
                                <li><a href="https://www.gob.mx/terminos" target="_blank">Términos y Condiciones</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="title col-sm-3">
                    <h5 class="link-a"><a class="footer" id="SIDEC" href="https://sidec.buengobierno.gob.mx/#!/" target="_blank" rel="sidec">Denuncia contra servidores públicos</a></h5>
                    <div class="row ps-2"><span class="col-5 col-md-12 social-media">Síguenos en</span>
                        <ul class="col-6 col-md-12 list-inline social-media">
                            <li><a data-v-6b1f797a="" id="Facebook" href="https://www.facebook.com/gobmexico" target="_blank" rel="noopener" title="enlace a facebook abre en una nueva ventana" class="sendEst share-info footer"><img alt="Facebook" src="https://framework-gb.cdn.gob.mx/landing/img/facebook.png"></a></li>
                            <li style="margin-left:2px;margin-right:2px"><a data-v-6b1f797a="" id="Twitter" href="https://twitter.com/GobiernoMX" target="_blank" rel="noopener" title="Enlace a twitter abre en una nueva ventana" class="sendEst share-info footer"><img alt="Twitter" src="https://framework-gb.cdn.gob.mx/landing/img/twitter.png"></a></li>
                            <li style="margin-left:2px;margin-right:5px"><a data-v-6b1f797a="" id="Instagram" href="https://www.instagram.com/gobmexico/" target="_blank" rel="noopener" title="Enlace a instagram abre en una nueva ventana" class="sendEst share-info footer"><img alt="Instagram" src="https://framework-gb.cdn.gob.mx/landing/img/instagram.png"></a></li>
                            <li style="margin-left:2px;margin-right:2px"><a data-v-6b1f797a="" id="Youtube" href="https://www.youtube.com/@gobiernodemexico" target="_blank" rel="noopener" title="Enlace a youtube abre en una nueva ventana" class="sendEst share-info footer"><img alt="Youtube" src="https://framework-gb.cdn.gob.mx/landing/img/youtube.png"></a></li>
                        </ul>
                    </div>
                    <ul class="list-inline">
                        <li>
                            <div class="logo-079"><a href="tel:+079" target="_blank"><img src="https://framework-gb.cdn.gob.mx/gobmx/img/079.png" href="/" alt="logo 079" class="logo-079"></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mesa-servicio" aria-labelledby="mmesa-servicio" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="titulo mx-auto text-center" id="mmesa-servicio">Mesa de <span>servicio</span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <p><b>Atendemos tus dudas y solicitudes.</b> <br>
                        Comienza seleccionando tu perfil.</p>
                </div>

                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="text-center borde-gris">
                                <a class="btn-icono" href="https://prepaenlinea.sep.gob.mx/mesadeservicio/aspirantes.php" target="_blank">
                                    <svg width="50" height="50">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/mesa-servicio.svg#aspirantes" />
                                    </svg>
                                    <p><b>Aspirantes</b></p>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center borde-gris">
                                <a class="btn-icono" href="https://prepaenlinea.sep.gob.mx/mesadeservicio/estudiantes.php" target="_blank">
                                    <svg width="55" height="55" viewBox="0 0 70 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M44.366 7.62357C44.268 6.60802 43.428 6.56628 42.826 6.53846C42.644 6.53846 42.448 6.52455 42.28 6.49673C42.238 6.37152 42.168 6.24632 42.098 6.12111C42.042 5.99591 41.958 5.85679 41.944 5.78723C41.944 5.68985 42.168 5.42553 42.308 5.2725C42.658 4.86907 43.148 4.3126 42.84 3.70049C42.714 3.45008 40.964 1.75286 40.796 1.64157C40.082 1.11293 39.494 1.61375 39.074 1.98936C38.92 2.12848 38.752 2.26759 38.584 2.36498L37.828 2.08674C37.814 1.97545 37.786 1.7946 37.772 1.64157C37.716 0.987725 37.646 0.153028 37.086 0H33.768C33.222 0.180851 33.152 0.973813 33.096 1.61375C33.082 1.78069 33.068 2.00327 33.068 2.07283L32.284 2.35106C32.144 2.26759 31.99 2.12848 31.836 2.00327C31.402 1.62766 30.8 1.11293 30.072 1.64157C29.806 1.83633 28.28 3.33879 28.084 3.63093C27.678 4.25696 28.196 4.84124 28.56 5.25859C28.686 5.41162 28.938 5.67594 28.924 5.77332C28.924 5.84288 28.826 5.99591 28.77 6.1072C28.7 6.23241 28.644 6.35761 28.588 6.48281C28.434 6.51064 28.266 6.51064 28.084 6.52455C27.468 6.55237 26.614 6.59411 26.502 7.5401C26.474 7.84615 26.432 10.1972 26.6 10.5867C26.796 11.0458 27.44 11.0876 28 11.1293C28.196 11.1432 28.504 11.171 28.63 11.2128C28.714 11.3658 28.896 11.8249 28.924 11.8944C28.938 12.0057 28.658 12.3257 28.518 12.5065C28.196 12.8822 27.86 13.2856 27.93 13.7029C27.972 13.9673 28.35 14.3568 29.54 15.4558C29.89 15.7758 30.226 16.0957 30.324 16.2209L30.38 16.2905L30.464 16.3183C30.912 16.4435 31.318 16.1097 31.71 15.7758C31.934 15.581 32.256 15.3167 32.396 15.3445C32.48 15.3723 32.97 15.5532 32.998 15.5671C33.054 15.6506 33.11 16.0401 33.138 16.2905C33.194 16.8052 33.25 17.2782 33.502 17.5286L33.586 17.626L37.436 17.5843L37.856 15.6227L38.556 15.3306C38.696 15.4002 38.92 15.5671 39.088 15.7201C39.522 16.0818 40.012 16.4853 40.502 16.2627L40.586 16.2209L40.628 16.1514C40.754 15.9705 41.216 15.5393 41.636 15.1637C42.476 14.4124 42.84 14.0507 42.924 13.8003C43.064 13.3273 42.672 12.8543 42.322 12.437C42.182 12.27 42.042 12.1031 41.972 11.9779L42.224 11.2962L44.156 10.8372L44.226 10.7259C44.296 10.6146 44.338 10.4754 44.366 10.3502C44.464 9.80769 44.45 8.22177 44.394 7.63748L44.366 7.62357ZM40.32 11.9083C40.264 12.2144 40.516 12.5622 40.95 13.0908C41.048 13.2021 41.174 13.3691 41.244 13.4664L40.068 14.6211L38.724 13.6751L36.75 14.4264C36.428 14.6489 36.358 15.1915 36.288 15.9566C36.288 16.0401 36.274 16.1236 36.26 16.207H34.58C34.58 16.1097 34.566 16.0123 34.552 15.901C34.496 15.2332 34.44 14.7741 34.244 14.5516C34.09 14.3846 33.81 14.2872 33.334 14.1342C33.04 14.0368 32.634 13.9116 32.508 13.8003L32.396 13.7447C32.074 13.6334 31.696 13.9116 31.108 14.3846C31.01 14.4681 30.87 14.5655 30.786 14.635L29.638 13.4664L30.618 12.0196L30.492 11.8527C30.352 11.6718 30.24 11.3101 30.142 11.0041C30.03 10.6702 29.932 10.3642 29.778 10.1555C29.554 9.83552 28.98 9.76596 28.182 9.71031C28.126 9.71031 28.084 9.71031 28.028 9.71031V8.04092C28.028 8.04092 28.182 8.027 28.266 8.01309C28.896 7.94353 29.358 7.88789 29.596 7.73486C29.848 7.56792 29.932 7.26187 30.016 6.99754C30.044 6.91407 30.072 6.81669 30.1 6.74714C30.128 6.67758 30.184 6.5802 30.254 6.4689C30.422 6.17676 30.52 5.982 30.548 5.82897C30.604 5.46727 30.268 5.06383 29.932 4.63257C29.834 4.50736 29.694 4.32651 29.61 4.21522L30.786 3.07447C30.94 3.15794 31.094 3.28314 31.248 3.40835C31.598 3.70049 32.046 4.0761 32.634 3.89525C32.76 3.85352 33.894 3.39444 34.034 3.31097C34.482 3.03273 34.524 2.47627 34.566 1.97545C34.58 1.78069 34.594 1.58592 34.636 1.44681C34.874 1.4329 35.882 1.44681 36.26 1.46072C36.302 1.61375 36.316 1.80851 36.344 2.00327C36.386 2.49018 36.442 3.10229 36.946 3.3527C37.1 3.43617 38.164 3.86743 38.332 3.92308C38.878 4.0761 39.382 3.65876 39.774 3.32488C39.872 3.24141 40.026 3.1162 40.124 3.06056L41.258 4.20131L40.278 5.71768L40.39 5.88461C40.488 6.00982 40.586 6.28805 40.684 6.55237C40.88 7.10884 41.09 7.6653 41.51 7.81833C41.664 7.87398 41.972 7.91571 42.462 7.97136C42.602 7.98527 42.728 7.99918 42.84 8.01309V9.6964L41.216 9.96072L40.362 11.9083H40.32Z" fill="#C1D13E" />
                                        <path d="M39.27 6.98363C39.004 6.92799 38.738 6.99755 38.528 7.20622C38.206 7.52619 38.318 8.04092 38.416 8.48609C38.444 8.61129 38.472 8.76432 38.472 8.81997C38.472 10.3363 37.45 11.2684 36.498 11.6301C35.56 11.9918 34.188 11.9779 33.166 10.8511C32.382 9.97463 32.186 8.80606 32.634 7.70704C33.082 6.62193 34.09 5.89853 35.238 5.82897C35.336 5.82897 35.462 5.84288 35.616 5.8707C36.092 5.94026 36.68 6.00982 37.002 5.64812C37.128 5.509 37.24 5.24468 37.114 4.82733C37.072 4.68822 36.974 4.50737 36.708 4.36825C35.966 3.97872 34.328 4.27087 33.95 4.39607C31.36 5.18903 30.492 7.5401 30.786 9.51555C31.08 11.5188 32.606 13.536 35.364 13.5638H35.392C36.876 13.5638 38.388 12.743 39.326 11.4214C40.166 10.225 40.39 8.83388 39.942 7.60966C39.83 7.3036 39.564 7.0671 39.256 6.99754L39.27 6.98363Z" fill="#C1D13E" />
                                        <path d="M37.73 6.9419C37.856 6.98363 37.982 6.99754 38.094 6.99754C38.388 6.99754 38.64 6.87234 38.822 6.64975C39.088 6.31588 39.116 5.84288 38.892 5.509C38.682 5.17512 38.276 5.03601 37.814 5.13339C37.422 5.21686 37.142 5.56465 37.114 5.99591C37.086 6.42717 37.324 6.81669 37.702 6.9419H37.73Z" fill="#C1D13E" />
                                        <path d="M65.492 48.8437C65.492 48.8437 65.464 48.8298 65.464 48.8159C65.352 48.6768 65.24 48.3151 65.142 48.009C65.03 47.689 64.932 47.3691 64.792 47.1187C63.574 44.865 61.516 42.9591 59.304 42.027C58.73 41.7905 58.156 41.6375 57.596 41.4845C57.302 41.401 57.008 41.3314 56.714 41.234L56.784 39.0499C57.526 38.3265 58.324 37.5196 58.87 36.4902C59.094 36.0728 59.29 35.3633 59.472 34.7512C59.556 34.4452 59.64 34.1669 59.682 34.0139C59.752 33.9722 59.85 33.9304 59.962 33.8887C60.746 33.527 61.488 33.1653 61.88 32.7758C63.994 30.6751 64.568 25.6391 63.154 21.7717C62.188 19.1424 60.494 17.5008 58.338 17.1252C57.904 15.4697 56.504 14.2038 54.558 13.7725C48.286 12.3953 40.516 14.8576 38.444 22.1473C37.618 25.0548 37.324 30.5638 40.04 32.9566C40.432 33.3044 41.118 33.6244 41.706 33.9165C41.972 34.0417 42.364 34.1948 42.336 34.1948C42.406 34.3061 42.56 34.7651 42.658 35.099C42.854 35.6972 43.078 36.3789 43.33 36.8101C43.722 37.4779 44.394 38.3682 45.164 38.9664L45.234 41.1923C41.146 42.0409 38.528 44.1416 36.582 48.1203C36.484 48.329 36.428 48.5655 36.386 48.7741C36.386 48.8298 36.358 48.8854 36.344 48.9272C36.344 48.9272 36.316 48.9272 36.302 48.9411C36.722 49.3584 37.058 49.8314 37.338 50.3462C38.094 50.4714 38.864 50.5827 39.62 50.68H39.704C43.582 50.68 47.46 50.6383 51.338 50.6244C55.594 50.5966 59.85 50.5687 64.106 50.5687C64.456 49.9149 64.918 49.3306 65.492 48.8576V48.8437ZM56.504 33.8887C56.042 35.6833 54.712 37.0606 52.878 37.6588C50.946 38.2848 48.874 37.9231 47.348 36.6849C45.192 34.946 45.276 32.4419 45.36 29.7987C45.374 29.1727 45.402 28.5466 45.388 27.9206C47.25 27.6285 49.014 26.5295 50.372 24.8601C50.526 24.9992 50.694 25.1661 50.806 25.2774C51.044 25.5139 51.268 25.7226 51.38 25.82C53.004 27.0164 54.852 27.7815 56.784 28.018C56.952 29.3535 56.826 32.6088 56.504 33.8887ZM53.382 42.7782C53.256 43.0147 52.934 43.5295 52.864 43.6268C52.066 44.5311 50.526 44.7398 49.49 44.0442C49.154 43.8216 48.468 42.973 48.412 42.7365V40.7471C49.924 41.248 51.66 41.2758 53.382 40.8306V42.7782ZM45.052 24.7905C44.954 24.8183 44.758 24.8462 44.534 24.874C43.386 25.0131 42.196 25.1661 42.196 26.0843V30.5917C41.454 29.8682 41.216 28.7414 41.146 28.018C40.586 22.6064 42.91 18.5581 47.362 17.1809C48.342 16.8748 49.882 16.68 51.352 16.68C53.088 16.68 54.712 16.9583 55.16 17.6817C55.272 17.8764 55.314 18.1408 55.37 18.4329C55.468 18.9894 55.608 19.8519 56.56 20.144C56.882 20.2414 57.162 20.2692 57.456 20.311C57.82 20.3527 58.114 20.3805 58.492 20.5892C60.872 21.8691 61.25 27.4754 60.102 29.8822C60.06 29.9795 60.004 30.063 59.948 30.1465V26.2512C59.948 25.18 58.38 24.9714 56.854 24.7488C56.574 24.707 56.336 24.6792 56.196 24.6514C54.852 24.3175 53.452 23.5245 52.276 22.4255C52.164 22.3142 52.038 22.1612 51.912 21.9943C51.45 21.3822 50.498 20.1162 49.154 21.1039C48.972 21.2291 48.832 21.4517 48.426 22.0917C48.23 22.4116 48.02 22.7455 47.88 22.8985C47.068 23.8306 45.99 24.554 45.08 24.8044L45.052 24.7905ZM39.984 48.4263C41.174 46.3118 43.288 44.8093 45.626 44.4337C46.774 46.437 48.776 47.6612 50.946 47.6612H51.03C53.172 47.6334 55.034 46.437 56.112 44.4476C58.478 44.7259 60.62 46.2283 61.824 48.4263H39.984Z" fill="#5B5A5A" />
                                        <path d="M57.4 27.6563L57.232 27.7537V27.6841L57.4 27.6563Z" fill="#5B5A5A" />
                                        <path d="M56.756 27.7676L57.05 27.7119L56.896 27.9345H56.868C56.798 27.8928 56.756 27.8093 56.742 27.7676H56.756Z" fill="#5B5A5A" />
                                        <path d="M34.566 47.8003C34.454 47.4804 34.342 47.1465 34.202 46.8961C33.88 46.3118 33.502 45.7692 33.11 45.2267L33.012 45.1015C34.174 43.1956 34.356 41.0671 33.53 39.2169C33.404 38.9247 33.222 38.6882 33.054 38.4517C32.872 38.2013 32.69 37.9648 32.662 37.7561C32.34 35.8502 32.466 33.2905 32.592 30.8003C32.69 28.8666 32.788 26.8633 32.662 25.18C32.34 20.4223 29.386 16.3044 24.962 14.4124C20.608 12.5622 15.834 13.23 12.18 16.2349C7.098 20.4083 7.378 25.7504 7.63 30.9116C7.742 33.0123 7.84 35.1686 7.63 37.2971C7.574 37.7979 7.364 38.1039 7.098 38.4795C6.874 38.7995 6.622 39.1751 6.454 39.6759C5.754 41.8044 6.328 43.5155 7.126 45.018C6.776 45.4632 6.426 45.9362 6.146 46.4509C5.978 46.743 5.81 47.1604 5.642 47.5638C5.502 47.9116 5.362 48.2594 5.222 48.4959L4.662 49.4697H8.232L8.4 49.0663C9.534 46.3535 11.914 44.4894 14.686 44.1137C15.806 46.1309 17.822 47.3552 20.062 47.3552C20.104 47.3552 20.146 47.3552 20.188 47.3552C22.4 47.3134 24.332 46.0614 25.354 44.0581C27.86 44.545 30.632 46.2005 31.514 49.0246L31.654 49.4836H35.42L34.818 48.4959C34.734 48.3568 34.636 48.0786 34.552 47.8142L34.566 47.8003ZM29.33 26.5851C26.74 26.1121 24.5 25.027 22.792 23.4272C22.61 23.2463 22.414 22.9959 22.204 22.7316C21.616 21.9804 20.958 21.1457 20.062 21.1457C19.166 21.1457 18.508 21.9943 17.85 22.8151C17.612 23.1072 17.374 23.3993 17.178 23.5941C15.484 25.1383 13.244 26.1817 10.808 26.599V24.5679C10.808 23.5802 11.928 21.2709 12.642 20.3388C14.406 18.0295 17.192 16.6661 20.146 16.6661C20.244 16.6661 20.342 16.6661 20.44 16.6661C23.506 16.7635 26.208 18.252 27.888 20.7422C28.364 21.4656 29.344 23.5385 29.344 24.0532V26.5712L29.33 26.5851ZM10.808 33.2209C10.766 32.0663 10.71 30.8838 10.766 29.7848L11.018 29.757V33.3322C11.018 34.6538 12.67 37.1579 13.286 37.8813C13.482 38.1178 13.706 38.2848 13.888 38.41C14.154 38.6187 14.238 38.6743 14.252 38.7856C14.308 39.189 14.28 39.7038 14.252 40.1907C14.252 40.4411 14.224 40.6915 14.224 40.928C12.474 41.248 10.948 41.8462 9.604 42.7365C9.562 42.6391 9.52 42.5556 9.506 42.5278C9.212 41.3175 9.548 40.7193 9.982 39.9681C10.318 39.3838 10.696 38.73 10.794 37.7701C10.948 36.3093 10.878 34.7512 10.822 33.2209H10.808ZM14.182 29.6039C14.182 29.4092 14.182 29.2005 14.196 29.0057C16.576 28.1154 18.578 26.7799 20.076 25.1244C21.812 26.9329 23.716 28.1989 25.886 28.9918C26.026 31.1064 26.11 33.1097 25.046 34.8764C24.01 36.5876 22.148 37.6031 20.048 37.6031C17.962 37.6031 16.114 36.5876 15.092 34.8764C14.084 33.1931 14.14 31.5237 14.196 29.6039H14.182ZM25.858 38.6882C25.928 38.5769 26.292 38.2013 26.558 37.9231C27.048 37.4084 27.566 36.8797 27.804 36.4902C28.056 36.0728 29.12 33.8748 29.12 33.1514V29.757L29.386 29.7848C29.456 30.7447 29.386 31.8437 29.344 33.0123C29.246 35.1686 29.134 37.3944 29.764 39.0777C29.932 39.509 30.142 39.829 30.338 40.1211C30.618 40.5246 30.842 40.8584 30.87 41.4566C30.884 41.7349 30.758 42.4444 30.604 42.8478C29.316 41.9018 27.706 41.2619 25.872 40.9558C25.83 40.2881 25.844 38.8691 25.872 38.7021L25.858 38.6882ZM22.722 40.4411V42.1383C22.638 42.3609 22.358 42.9313 22.288 43.0426C21.532 44.1833 19.712 44.5172 18.48 43.7103C18.242 43.5434 17.486 42.6113 17.416 42.4165V40.4272C19.236 41.0115 21.07 40.8028 22.722 40.455V40.4411Z" fill="#5B5A5A" />
                                        <path d="M37.156 65.4403H33.6V52.4051C33.6 51.8347 33.138 51.3617 32.55 51.3617H7.056C6.482 51.3617 6.006 51.8208 6.006 52.4051V65.4403H2.45V52.4051C2.45 49.8871 4.522 47.8282 7.056 47.8282H32.55C35.084 47.8282 37.156 49.8871 37.156 52.4051V65.4403Z" fill="#C1D13E" />
                                        <path d="M37.534 68H1.778C0.798 68 0 67.207 0 66.2332C0 65.2594 0.798 64.4664 1.778 64.4664H37.534C38.514 64.4664 39.312 65.2594 39.312 66.2332C39.312 67.207 38.514 68 37.534 68Z" fill="#C1D13E" />
                                        <path d="M67.844 65.4403H64.288V52.4051C64.288 51.8347 63.826 51.3617 63.238 51.3617H37.744C37.17 51.3617 36.694 51.8208 36.694 52.4051V65.4403H33.138V52.4051C33.138 49.8871 35.21 47.8282 37.744 47.8282H63.238C65.772 47.8282 67.844 49.8871 67.844 52.4051V65.4403Z" fill="#C1D13E" />
                                        <path d="M68.222 68H32.466C31.486 68 30.688 67.207 30.688 66.2332C30.688 65.2594 31.486 64.4664 32.466 64.4664H68.222C69.202 64.4664 70 65.2594 70 66.2332C70 67.207 69.202 68 68.222 68Z" fill="#C1D13E" />
                                    </svg>
                                    <p><b>Estudiantes</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="text-center borde-gris">
                                <a class="btn-icono" href="https://prepaenlinea.sep.gob.mx/mesadeservicio/egresados.php" target="_blank">
                                    <svg width="50" height="50">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/mesa-servicio.svg#egresados" />
                                    </svg>
                                    <p><b>Egresados</b></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center borde-gris">
                                <a class="btn-icono" href="https://prepaenlinea.sep.gob.mx/mesadeservicio/instituciones.php" target="_blank">
                                    <svg width="50" height="50">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/mesa-servicio.svg#instituciones" />
                                    </svg>
                                    <p><b>Instituciones externas</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="text-center borde-gris">
                                <a class="btn-icono" href="https://prepaenlinea.sep.gob.mx/mesadeservicio/view.php" target="_blank">
                                    <b>Estatus de ticket</b>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center borde-gris">
                                <a class="btn-icono" href="https://prepaenlinea.sep.gob.mx/mesadeservicio/ta/temasAyuda.html" target="_blank">
                                    <b>Formatos por tema</b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-5">
                            <a class="btn-dos w-100 btn" href="<?php echo SITE_URL ?>/preguntas-frecuentes/" target="_blank">Preguntas frecuentes</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>