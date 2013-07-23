/**
 * Страница
 *
 * Пустая страница
 *
 * @category	template
 * @version 	4.2
 * @license 	http://opensource.org/licenses/MIT The MIT License (MIT)
 * @internal	@lock_template 0
 * @internal 	@modx_category 1. Основные
 * @internal    @installset sample
 */
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="[(modx_charset)]">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="[(site_url)]" /></base>
    <title>[*seo-title*]</title>
    <meta name="description" content="[*seo-description*]">
    <meta name="keywords" content="[*seo-keywords*]">
    [*seo-noindex*]
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="assets/site/css/normalize.css">
    <link rel="stylesheet" href="assets/site/css/main.css">
    <script src="assets/site/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
[*content*]
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/site/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="assets/site/js/plugins.js"></script>
<script src="assets/site/js/main.js"></script>
</body>
</html>