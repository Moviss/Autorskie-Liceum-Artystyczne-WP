<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Ogólnokształcące Liceum Artystyczne</title>
  <meta name="description" content="Liceum Ogólnokształcące o profilu artystycznym jest szkołą,
w której każdy Uczeń ma możliwość wyrażania własnego zdania i
zostania wysłuchanym – zgodnie z zasadą “Chcemy Was uczyć i uczyć
się od Was”. Jest to szkoła tworzona z pasją.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/favikon.jpg" />

  <link href="https://fonts.googleapis.com/css?family=Caveat&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=latin-ext" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>style.css">

  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.bxslider.js"></script>

    <?php wp_head(); ?>

  </head>

  <body>

      <!-- Główny pojemnik strony -->
    <div class="grid">

      <header class=header>

              <!-- Logo szkoły -->
              <div class="logo">
                  <a href="/index.php">
                      <img class="logo-img" src="<?php echo get_bloginfo('template_directory'); ?>/images/log.png" alt="Logo Ogólnokształcącego Liceum Artystycznego" />
                  </a>
              </div>

              <!-- Menu hamburger -->
              <nav class="nav">
                  <button class="hamburger">&#9776;</button>
                  <button class="cross">&#735;</button>

                  <ul class="menu">
                      <li>
                          <a href="/aktualnosci/">AKTUALNOŚCI</a>
                      </li>

                      <li>
                          <a href="/kim-jestesmy/">SZKOŁA</a>
                               <ul class="sub-menu">
                                  <li>
                                      <a href="/kim-jestesmy/">Kim jesteśmy?</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo site_url('co-oferujemy') ?>">Co Tobie oferujemy?</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo site_url('czesne') ?>">Czesne</a>
                                  </li>
                                  <li>
                                      <a href="/zalozyciel/">Założyciel szkoły</a>
                                  </li>
                              </ul>
                      </li>

                      <li>
                          <a href="/program-nauczania/">PROGRAM</a>
                          <ul class="sub-menu">
                                  <li>
                                      <a href="/program-nauczania/">Program nauczania</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo site_url('dlaczego_warto_nas_wybrac') ?>">Dlaczego warto nas wybrać?</a>
                                  </li>
                                  <li>
                                      <a href="/kadra/">Kadra</a>
                                  </li>
                                  <li>
                                      <a href="/sztuki-tradycyjne/">Sztuki tradycyjne</a>
                                  </li>
                                  <li>
                                      <a href="/sztuki-audiowizualne/">Sztuki audiowizualne</a>
                                  </li>
                              </ul>
                      </li>

                      <li>
                          <a href="/warunki-rekrutacji/">REKRUTACJA</a>
                          <ul class="sub-menu">
                                  <li>
                                      <a href="/warunki-rekrutacji/">Warunki rekrutacji</a>
                                  </li>
                                  <li>
                                      <a href="/dokumenty-do-pobrania/">Dokumenty do pobrania</a>
                                  </li>
                              </ul>
                      </li>

                      <li>
                          <a href="/kontakt/">KONTAKT</a>
                          <ul class="sub-menu">
                                  <li>
                                      <a href="/kontakt/">Kontakt</a>
                                  </li>
                                  <li>
                                      <a href="/gdzie-sie-miescimy/">Gdzie się mieścimy</a>
                                  </li>
                              </ul>
                      </li>
                  </ul>
              </nav>

          </header>
