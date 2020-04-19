<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= html(FFF_DESCRIPTION) ?>">
    <meta name="author" content="Filmmakers for Future">
    <meta property="og:image" content="https://filmmakersforfuture.org/img/preview.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://filmmakersforfuture.org<?= html($_SERVER['REQUEST_URI']) ?>">
    <meta property="og:title" content="Filmmakers for Future<?= defined("FFF_PAGENAME") ? " - ".html(constant("FFF_PAGENAME")) : "" ?>">
    <meta property="og:description" content="<?= html(FFF_DESCRIPTION) ?>">

    <title>Filmmakers for Future<?= defined("FFF_PAGENAME") ? " - ".html(constant("FFF_PAGENAME")) : "" ?></title>

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/user/themes/fm4ftheme/img/app_icon.png">
    
    <!-- Fork Awesome Icons -->
    <link href="/user/themes/fm4ftheme/vendor/fork-awesome/css/fork-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/user/themes/fm4ftheme/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="/user/themes/fm4ftheme/css/creative.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand<?= defined("FFF_PAGENAME") ? "" : " js-scroll-trigger" ?>" href="<?= defined("FFF_PAGENAME") ? "/" : "" ?>#page-top">Filmmakers for Future</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item"><a class="nav-link<?= defined("FFF_PAGENAME") ? "" : " js-scroll-trigger" ?>" href="<?= defined("FFF_PAGENAME") ? "/" : "" ?>#statement">Statement</a></li>
            <li class="nav-item"><a class="nav-link" href="/demands">Demands</a></li>
            <li class="nav-item"><a class="nav-link" href="/signatures">Signatures</a></li>
            <li class="nav-item"><a class="nav-link" href="/greenfilmmaking">Green Filmmaking</a></li>
            <li class="nav-item"><a class="nav-link" href="/videos">Videos</a></li>
            <li class="nav-item"><a class="nav-link" href="/participate">Participate</a></li>
            <li class="nav-item"><a class="nav-link<?= defined("FFF_PAGENAME") ? "" : " js-scroll-trigger" ?>" href="<?= defined("FFF_PAGENAME") ? "/" : "" ?>#sign">Sign the Statement</a></li>
          </ul>
        </div>
      </div>
    </nav>

