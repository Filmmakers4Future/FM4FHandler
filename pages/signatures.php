<?php
  define("FFF_PAGENAME",    "Signatures");
  define("FFF_DESCRIPTION", "Public list of filmmakers who support our initiative for a greener film industry.");
  require_once(__DIR__."/templates/header.php");

  // get verified users
  $error  = []; // has to be defined as an array to be used
  $signatures = get_verified($error);

  // sort signatures by country
  $countries = [];
  if (is_array($signatures)) {
    foreach ($signatures as $signature) {
      // initialize a new country as an array
      if (!array_key_exists($signature[MAIL_COUNTRY], $countries)) {
        $countries[$signature[MAIL_COUNTRY]] = [];
      }

      // add the current signature to that country
      $countries[$signature[MAIL_COUNTRY]][] = $signature;
    }
  }

  // sort by array keys
  ksort($countries);
?>
    <!-- Header Section -->
    <section class="header-section bg-primary" id="Signatures">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
        <h5 class="text-white mt-0 text-center">#Filmmakers4Future - Filmmakers for Future</h5>
        <h6 class="text-white-50 mt-0 text-center">(Total signatures: <?= html(count($signatures)) ?> - Last update: <?= date("j F Y", hexdec(substr(end($signatures)[MAIL_UID], 0, 8))) ?>)</h6>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
<?php
  $even = false;
  foreach ($countries as $country => $signatures) {
    $even = (!$even);
?>
    <section class="page-section <?= ($even) ? "bg-dark text-left" : "bg-primary text-right" ?>">
      <div class="container">
        <h2 class="text-white-50"><?= html($country) ?></h2>
        <p>
<?php
    foreach ($signatures as $signature) {
?>
          <?= ($signature[MAIL_ISCOMPANY]) ? "<span class=\"text-white-75 fa fa-briefcase\"></span>" : "" ?> <?= (empty($signature[MAIL_WEBSITE])) ? "<span class=\"text-white\">" : "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"".html($signature[MAIL_WEBSITE])."\" class=\"text-white\">" ?><?= html($signature[MAIL_NAME]) ?><?= (empty($signature[MAIL_WEBSITE])) ? "</span>" : "</a>" ?> <span class="text-white-50" >(<?= html($signature[MAIL_JOB]) ?>)</span> ·
<?php
    }
?>
        </p>
      </div>
    </section>
<?php
  }
  require_once(__DIR__."/templates/footer.php");

