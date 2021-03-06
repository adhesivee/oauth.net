<?php
@header('X-Pingback: https://webmention.io/aaronpk/xmlrpc');
@header('Link: <https://webmention.io/aaronpk/webmention>; rel="webmention"');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo !empty($page_title) ? $page_title : "OAuth &mdash; An open protocol to allow secure API authorization in a simple and standard method from web, mobile, and desktop applications." ?></title>
  <link href="/stylesheets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/styles.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/carbon.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" rel="stylesheet" type="text/css" media="print" />
  <link rel="webmention" href="https://webmention.io/aaronpk/webmention" />
  <link rel="pingback" href="https://webmention.io/aaronpk/xmlrpc" />
</head>
<body>

<?php if(time() > strtotime('2016-08-01')
         && time() < strtotime('2017-10-01')
         && $_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MLQ3KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MLQ3KK');</script>
<!-- End Google Tag Manager -->
<?php endif; ?>

<?php if($_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-4617305-25', 'auto');
ga('send', 'pageview');
</script>
<script>
var trackFooterClick = function(url) {
   ga('send', 'event', 'footer', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
var trackOutboundClick = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>
<?php endif; ?>

<?php require(__DIR__.'/_nav_primary.php'); ?>
<?php require(__DIR__.'/_new_banner.php'); ?>

