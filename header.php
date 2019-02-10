<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php do_action( 'bblt_head_open' ); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php wp_head(); ?>
    <?php do_action( 'bblt_head_close' ); ?>

    <!-- noptimize --><script>function loadCSS(href,before,media){"use strict";var ss=window.document.createElement("link");var ref=before||window.document.getElementsByTagName("script")[0];ss.rel="stylesheet";ss.href=href;ss.media="only x";ref.parentNode.insertBefore(ss,ref);setTimeout(function(){ss.media= media||"all";});return ss;};/*loadCSS("https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700");*/</script><!-- /noptimize -->
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php do_action( 'bblt_body_open' ); ?>

<?php do_action( 'bblt_before_header' ); ?>
<?php do_action( 'bblt_header' ); ?>
<?php do_action( 'bblt_after_header' ); ?>
