<?php

if (!defined('ABSPATH'))
  exit; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>> <head>
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://cdn.jsdelivr.net/">
<link rel="preconnect" href="https://www.googletagmanager.com/">
<link rel="preconnect" href="https://www.google-analytics.com/">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300,400,700,900;&display=swap"
        rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<?php wp_head(); ?>

<?php get_template_part( 'template-parts/gatm' ); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script>
    (function (c, s, q, u, a, r, e) {
        c.hj=c.hj||function(){(c.hj.q=c.hj.q||[]).push(arguments)};
        c._hjSettings = { hjid: a };
        r = s.getElementsByTagName('head')[0];
        e = s.createElement('script');
        e.async = true;
        e.src = q + c._hjSettings.hjid + u;
        r.appendChild(e);
    })(window, document, 'https://static.hj.contentsquare.net/c/csq-', '.js', 6402175);
</script>
</head>

<body  <?php body_class(); ?> data-offset="100">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQGQHDQN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div id="particles-js"></div>
  
<div id="headerPLS"></div>