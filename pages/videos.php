<?php
  define("FFF_PAGENAME",    "Videos");
  define("FFF_DESCRIPTION", "Videos featuring personal statements by our members and related content.");
  define("FFF_CONTENT", __DIR__."/../content/videos.json");
  require_once(__DIR__."/templates/header.php");
  
  //Content JSON file
  $videos = json_decode(file_get_contents(FFF_CONTENT), true);
?>
    <!-- Header Section -->
    <section class="header-section bg-primary" id="Signatures">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
        <h5 class="text-white mt-0 text-center">#Filmmakers4Future - Filmmakers for Future</h5>
        <h6 class="text-white-50 mt-0 text-center">(Last update: <?= date("j F Y", filemtime(FFF_CONTENT)) ?>)</h6>
        <br>
        <h6 class="text-white-50 text-center"><b>Please note:</b> By clicking on the images a connection to YouTube or Vimeo will be established. Read our <a href="/privacy#videos">Privacy Policy</a> for more information.</h6>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark video_grid">
      <h2 class="text-white-50 px-5">Related videos from our supporters</h2>
      <h6 class="text-white-50 px-5">Already signed? <a href="/contact">Send us</a> your related video!</h6>
      <div class="container-fluid px-5">
        <div class="row no-gutters">
        <?php foreach ($videos["related_videos"] as $video) { ?>
          <div class="col-lg-4 col-sm-6">
            <a class="video_grid-box" href="<?= html($video["url"]) ?>">
              <img class="img-fluid" src="<?= html($video["thumb"]) ?>" alt="Preview image for Video: <?= html($video["name"]) ?>">
              <div class="video_grid-box-caption">
                <div class="video-category text-white-50"><?= html($video["category"]) ?></div>
                <div class="video-name"><?= html($video["name"]) ?></div>
                <div class="video-info">[<?= html($video["language"]) ?>]</div>
                <div class="video-info">(<?= html($video["hoster"]) ?>)</div>
              </div>
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>
<?php
  require_once(__DIR__."/templates/footer.php");
