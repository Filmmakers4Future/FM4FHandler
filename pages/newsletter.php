<?php
  define("FFF_PAGENAME",    "Manage Newsletter");
  define("FFF_DESCRIPTION", "Manage your newsletter subscription.");
  require_once(__DIR__."/templates/header.php");

  $error  = []; // has to be defined as an array to be used
  $link   = (array_key_exists("uid", $_GET) && array_key_exists("user", $_GET));
  $result = null;
  if ("GET" === HTTP_METHOD) {
    if ($link) {
      $result = preview_newsletter($_GET, $error);
    } else {
      $result = false; // show the initial form
    }
  } elseif ("POST" === HTTP_METHOD) {
    $result = newsletter(array_merge($_GET, $_POST), $error);
  }
?>
    <!-- Header Section -->
    <section class="header-section bg-primary">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-white" id="sign">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
<?php
  if ("GET" === HTTP_METHOD) {
    if ($result) {
?>
            <form class="text-center p-5" id="newsletter_form" action="<?= html($_SERVER['REQUEST_URI']) ?>" method="post">
              <p class="text-white-85 mb-4">Below you can see your current subscription status. Feel free to adjust it, you can always request a new link if you change your mind.</p>
              <label class="mb-3">Do you want to stay in touch?</label>
              <select id="newsletter" name="newsletter" class="browser-default custom-select mb-4" required>
                <option value="" disabled>Choose option</option>
                <option value="0" <?= ($result[MAIL_NEWSLETTER]) ? "" : "selected" ?>>No updates please.</option>
                <option value="1" <?= ($result[MAIL_NEWSLETTER]) ? "selected" : "" ?>>Please keep me updated.</option>
              </select>
              <!-- Send button -->
              <button class="btn btn-info btn-block mb-0" id="verify_button" type="submit">Update newsletter subscription</button>
            </form>
<?php
    } else {
      if ($link) {
?>
            <div class="text-center border border-light p-5">
              <p><b>The newsletter management link you used is invalid.</b><br>
                Please try again later or <a href="/contact">contact us</a> directly.
                <?= (array_key_exists(ERROR_ID, $error)) ? "<br>Please provide the following error id when contacting us about this issue: <span style=\"overflow-wrap: break-word;\">".html($error[ERROR_ID])."</span>" : "" ?>
            </div>
<?php
      }
?>
            <p class="text-white-85 mb-4">Request a new newsletter management link:</p>
            <form class="text-center" id="newsletter_form" action="<?= html($_SERVER['REQUEST_URI']) ?>" method="post">
              <input class="form-control mb-4" type="email" name="newmail" required maxlength="256" placeholder="Email address*">
              <button class="btn btn-info btn-block mb-3" id="verify_button" type="submit">Request a new link</button>
              <p class="text-white-85 mb-0 font-weight-light"><b>Please note:</b> You can only manage your newsletter subscription if you have signed our statement and have finished the verification process. We do not offer a general newsletters.</p>
            </form>
<?php
    }
  } elseif ("POST" === HTTP_METHOD) {
?>
            <div class="text-center border border-light p-5">
              <p>
<?php
    if ($result) {
      if ($link) {
?>
                <b>Thank you for updating your newsletter subscription.</b><br>
                At the moment there is nothing more to do for you.
<?php
      } else {
?>
                <b>Thank you for updating your newsletter subscription.</b><br>
                We will send you an e-mail with further instructions.<br>
                Please check your spam folder, just in case.
<?php
      }
    } else {
?>
                <b>Unfortunately, an error has occured<?=  (array_key_exists(ERROR_OUTPUT, $error)) ? ":</b><br>".html($error[ERROR_OUTPUT]) : ".</b>" ?><br>
                Please try again later or <a href="/contact">contact us</a> directly.
                <?= (array_key_exists(ERROR_ID, $error)) ? "<br>Please provide the following id when contacting us about this issue: <span style=\"overflow-wrap: break-word;\">".html($error[ERROR_ID])."</span>" : "" ?>
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
<?php
  // prevent resubmission via JavaScript
  if ("POST" === HTTP_METHOD) {
?>
    <script src="/user/themes/fm4ftheme/js/norepost.js"></script>
<?php
  }
  require_once(__DIR__."/templates/footer.php");

