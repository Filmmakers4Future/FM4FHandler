<?php
  # do not define FFF_PAGENAME because we're on the index page
  define("FFF_DESCRIPTION", "Our goal is to minimize the environmental impact of the global film industry. We focus on raising awareness and encouraging the exchange of knowledge.");
  require_once(__DIR__."/templates/header.php");

  $error  = []; // has to be defined as an array to be used
  $result = null;
  if ("POST" === HTTP_METHOD) {
    $result = register($_POST, $error);
  }
?>
    <!-- Masthead -->
    <header class="masthead">
      <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="header_video">
          <source data-src="/user/uploads/files/videos/demo_h264.mp4" type='video/mp4'>
        </video>
        <div class="container h-100">
          <div class="h-100 row align-items-center justify-content-center text-center">
            <div class="align-self-end col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-3 col-6">
              <img class="img-fluid" id="main_logo" src="/user/uploads/files/logos/logo_standalone.svg">
            </div>
            <div class="col-lg-10">
              <h1 class="text-uppercase text-white font-weight-bold">Filmmakers for Future</h1>
              <hr class="divider" id="main_divider">
            </div>
            <div class="col-lg-9 align-self-start">
              <p class="text-white-85 font-weight-light mb-4" style="font-size:1.24rem" id="main_text">Our goal is to minimize the environmental impact of the global film industry. We focus primarily on raising awareness and encouraging the exchange of knowledge and experience.</p>
              <a class="btn btn-primary btn-xl js-scroll-trigger " href="#statement">Read our Statement</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Index Section -->
    <section class="page-section bg-primary" id="statement">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h3 class="text-white-85 mt-0 text-center">Statement by Filmmakers for Future on the protests for more climate and environmental protection</h3>
            <h6 class="text-white-75 mt-0 text-center">#Filmmakers4Future - Filmmakers for Future</h6>
            <hr class="divider light my-4">
            <p class="text-white mb-4">As artists, employees and freelancers in the motion picture industry, we stand in solidarity with the <b>Fridays for Future</b> movement and support the demands of the striking students. We are deeply impressed by the peaceful protests and the debates that the students have sparked.</p>
            <p class="text-white mb-4">Fiction and visual storytelling in general have the ability to construct realities, which is why we as <b class="text-white">filmmakers have a special responsibility to society</b>. This applies not only to the stories we tell, but also to the way our industry works.</p>
            <p class="text-white mb-4">As artists, <b class="text-white">we have the means to create awareness</b> about the climate crisis and to influence public discourses through our work and our themes. We pledge to use the publicity available to us to further <b class="text-white">pressure decision-makers to protect our environment</b> by speaking up about this topic at every possibility we get.</p>
            <p class="text-white mb-4">In our role as an industry, <b class="text-white">we have the duty to carry out our productions in a climate-friendly manner</b>. We therefore support the many green film initiatives around the world and demand that the production companies we work for take environmental protection and the ecological balance of a production into account as a vital part of their planning for every project. If they don't we will point it out to them - again and again.</p>
            <p class="text-white mb-5">If we want to continue having a planet worth living on, <b class="text-white">climate and environmental protection must become an essential part of our lives and our society</b>. We must learn to live in harmony with nature and stop exploiting it beyond its limits, otherwise we destroy the very foundation that makes human life on earth possible. We cannot stress enough how important it is to <b class="text-white">listen to scientists on this issue and take their research seriously</b>. This concerns all of us, so please join your local climate movement and be aware of this issue. Don't look away in times of fake news and scientific hostility, instead, help us fight for a future worth living for.</p>
            <!--<div class="text-center"><a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Download Statement</a></div>-->
          </div>
        </div>
      </div>
    </section>
    <section class="page-section bg-dark text-white" id="sign">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="mt-0">Sign the statement</h2>
            <hr class="divider my-4">
            <p class="text-white-85 mb-1">Sign our statement and help us make the film industry sustainable!</p>
            <p class="text-white-85 mb-5">If you choose so we will keep you updated with current events and ways you can help.</p>
<?php
  if ("GET" === HTTP_METHOD) {
?>
            <form class="text-center border border-light p-5" id="sign_form" action="<?= html($_SERVER['REQUEST_URI']) ?>#sign" method="post">
              <!-- Name -->
              <input type="text" name="name" maxlength="256" placeholder="Full name or company name*" class="form-control mb-4" required>
              <!-- Email -->
              <input type="email" name="mail" maxlength="256" placeholder="Email address*" class="form-control mb-4" required>
              <!-- Job -->
              <input type="text" name="job" maxlength="256" placeholder="Job title or company field*" class="form-control mb-4" required>
              <!-- Country -->
              <input type="text" name="country" maxlength="256" placeholder="Country*" class="form-control mb-4" required>
              <!-- City -->
              <input type="text" name="city" maxlength="256" placeholder="City" class="form-control mb-4">
              <!-- Website -->
              <input type="link" name="website" maxlength="256" placeholder="Website | Filmography" class="form-control mb-4">
              <!-- Individual or Company -->
              <select name="iscompany" class="browser-default custom-select mb-4" required>
                <option value="" disabled selected>Individual or company?</option>
                <option value="0">Individual</option>
                <option value="1">Company</option>
              </select>
              <!-- Newsletter -->
              <label class="mb-1">Do you want to stay in touch?</label>
              <select name="newsletter" class="browser-default custom-select mb-4" required>
                <option value="" disabled selected>Choose option...</option>
                <option value="0">No updates please.</option>
                <option value="1">Please keep me updated.</option>
              </select>
              <!-- Privacy -->
              <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="privacy" required>
                <label class="custom-control-label" for="privacy">I have read and agree to the <a href="/privacy" target="_blank" rel="noopener noreferrer">privacy policy</a>.</label>
              </div>
              <!-- Send button -->
              <button class="btn btn-info btn-block mb-1" id="register_button" type="submit">Publicly sign statement</button>
            </form>
<?php
  } elseif ("POST" === HTTP_METHOD) {
?>
            <div class="text-center border border-light p-5">
              <p>
<?php
    if ($result) {
?>
                <b>Thank you for signing the statement.</b><br>
                We will send you an e-mail with further instructions.<br>
                Please check your spam folder, just in case.
<?php
    } else {
?>
                <b>Unfortunately, an error has occured<?=  (array_key_exists(ERROR_OUTPUT, $error)) ? ":</b><br>".html($error[ERROR_OUTPUT]) : ".</b>" ?><br>
                Please try again later or <a href="/contact">contact us</a> directly.
                <?= (array_key_exists(ERROR_ID, $error)) ? "<br>Please provide the following error id when contacting us about this issue: <span style=\"overflow-wrap: break-word;\">".html($error[ERROR_ID])."</span>" : "" ?>
<?php
    }
?>
              </p>
            </div>
<?php
  }
?>
          </div>
        </div>
      </div>
    </section>
    <section class="page-section bg-primary" id="statement">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8">
            <h1 class="text-white mt-0 text-center">Further resources</h1>
            <h6 class="text-white mt-0 text-center"></h6>
            <hr class="divider light my-4">
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7 col-7 mx-5">
            <figure class="figure">
              <img src="/user/uploads/img/logos/FFF_Logo.png" class="figure-img img-fluid" alt="Fridays for Future Logo">
              <a target="_blank" rel="noopener noreferrer" href="https://fridaysforfuture.org"><figcaption class="text-center text-white">FridaysForFuture.org</figcaption></a>
              <a target="_blank" rel="noopener noreferrer" href="https://fridaysforfuture.org/events/map"><figcaption class="text-center text-white">Strike Map</figcaption></a>
            </figure>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7 col-7 mx-5">
            <figure class="figure">
              <img src="/user/uploads/files/logos/sf4_logo.svg" width="500px" class="figure-img img-fluid" alt="Scientists for Future Logo">
              <a target="_blank" rel="noopener noreferrer" href="https://scientistsforfuture.org"><figcaption class="text-center text-white">Official Statement</figcaption></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.scientists4future.org/stellungnahme/facts-2019-03/"><figcaption class="text-center text-white">Climate Change Facts</figcaption></a>
            </figure>
          </div>
        </div>
      </div>
    </section>
<?php
  // prevent resubmission via JavaScript
  if ("POST" === HTTP_METHOD) {
?>
    <script src="/user/themes/fm4ftheme/js/norepost.js"></script>
<?php
  }
  require_once(__DIR__."/templates/footer.php");

