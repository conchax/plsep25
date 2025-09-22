<?php
/**
 * The template for displaying search results pages
 *
 * 
 *
 * @package WordPress
 * @subpackage Portal PL-SEP-2025
 * @since Portal PL-SEP-2025 2.1
 */

get_header();?>

<section class="section-w">
    <div class="container">
        <div class="row">
            <div class="breadcrumb"><?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?></div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-lg-10 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/404w.webp" class="img-fluid" alt="404">
        </div>
        <div class="col-lg-10 mt-5">
            <h2> Lo sentimos, pero no encontramos la página que buscas. </h2>
            <p class="mt-5">Busca en nuestro portal o visita la <a href="<?php echo SITE_URL ?>/" role="button">página principal</a></p>
        </div>
        <div class="col-md-4 mb-5">
            <div id="contenido">
                <form action="<?php echo SITE_URL; ?>" method="get" enctype="multipart/form-data" class="form-only-controls mt-4">
                    <div class="input-group">
                        <div class="btn" style="border: 1px solid var(--color-border)">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.375 15C8.38001 16.3854 8.5535 17.7649 8.89167 19.1084H14.2917V11.2084H8.81667C8.52894 12.4519 8.3808 13.7237 8.375 15Z" fill="#E3E3E3"/>
                            <path d="M15.7083 11.2084V19.1084H21.1083C21.4605 17.7667 21.648 16.3871 21.6666 15C21.6635 13.724 21.5182 12.4522 21.2333 11.2084H15.7083Z" fill="#E3E3E3"/>
                            <path d="M15.0001 1.66663C12.363 1.66663 9.78514 2.44861 7.59248 3.9137C5.39983 5.37878 3.69086 7.46117 2.68169 9.89751C1.67253 12.3339 1.40848 15.0148 1.92295 17.6012C2.43742 20.1876 3.7073 22.5634 5.572 24.4281C7.4367 26.2928 9.81247 27.5626 12.3989 28.0771C14.9853 28.5916 17.6662 28.3275 20.1025 27.3184C22.5389 26.3092 24.6213 24.6002 26.0864 22.4076C27.5514 20.2149 28.3334 17.637 28.3334 15C28.3334 11.4637 26.9287 8.07235 24.4282 5.57187C21.9277 3.07138 18.5363 1.66663 15.0001 1.66663ZM25.1834 20.5916H22.1668C21.5964 22.3773 20.7531 24.0639 19.6668 25.5916C18.8648 25.9401 18.0262 26.1972 17.1668 26.3583C18.7065 24.6855 19.8914 22.7182 20.6501 20.575H15.7168V26.5333H14.3084V20.5916H9.35009C10.1077 22.7378 11.2927 24.7081 12.8334 26.3833C11.9917 26.224 11.1701 25.9725 10.3834 25.6333C9.29327 24.0928 8.44982 22.3918 7.88342 20.5916H4.81675C4.55069 20.1059 4.31955 19.6019 4.12509 19.0833H7.45842C7.14608 17.7444 6.98397 16.3748 6.97509 15C6.97628 13.7256 7.11034 12.4548 7.37509 11.2083H3.96675C4.14231 10.6913 4.35394 10.1873 4.60009 9.69996H7.77509C8.37141 7.71606 9.29526 5.84583 10.5084 4.16663C11.2784 3.84857 12.0802 3.6139 12.9001 3.46663C11.2417 5.24535 9.99046 7.36387 9.23342 9.67496H14.3084V3.33329H15.7168V9.69996H20.7918C20.0361 7.39257 18.7878 5.27706 17.1334 3.49996C17.9521 3.63648 18.7538 3.85996 19.5251 4.16663C20.7312 5.8337 21.652 7.6895 22.2501 9.65829H25.3918C25.6379 10.1456 25.8495 10.6496 26.0251 11.1666H22.6418C22.9122 12.4265 23.0491 13.7114 23.0501 15C23.0458 16.3829 22.8865 17.7609 22.5751 19.1083H25.9084C25.7021 19.6192 25.4598 20.1149 25.1834 20.5916Z" fill="#E3E3E3"/>
                            </svg>
                        </div>
                        <input type="text" name="s" placeholder="Busca en PL-SEP" value="" class="form-control text-left autocomplete" />
                        <button type="submit" class="btn btn-search">
                                <svg width="30" height="30" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5253 29.0507C22.9953 29.0507 29.0507 22.9953 29.0507 15.5253C29.0507 8.05537 22.9953 2 15.5253 2C8.05537 2 2 8.05537 2 15.5253C2 22.9953 8.05537 29.0507 15.5253 29.0507Z" stroke="currentColor" stroke-width="4" stroke-linejoin="round"/>
                                <path d="M20.0262 10.229C19.4356 9.63725 18.7341 9.16797 17.9617 8.84808C17.1893 8.52818 16.3614 8.36397 15.5254 8.36487C14.6894 8.36397 13.8615 8.52818 13.0891 8.84808C12.3168 9.16797 11.6152 9.63725 11.0247 10.229M25.2493 25.2493L32.0001 32" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </button>
                    </div>
                </form>    
            </div> 
        </div>
    </div>
</div>





<?php get_footer(); ?>