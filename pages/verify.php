<?php
  define("FFF_PAGENAME",    "Verify Signature");
  define("FFF_DESCRIPTION", "Signature verification page.");
  require_once(__DIR__."/templates/header.php");

  $error = []; // has to be defined as an array to be used
  $link  = (array_key_exists("uid", $_GET) && (array_key_exists("admin", $_GET) || array_key_exists("user", $_GET)));
  $result = null;
  if ("GET" === HTTP_METHOD) {
    if ($link) {
      $result = preview_verify($_GET, $error);
    } else {
      $result = false; // show the initial form
    }
  } elseif ("POST" === HTTP_METHOD) {
    $result = verify(array_merge($_GET, $_POST), $error);
  }
  $admin = ($result && array_key_exists("uid", $_GET) && array_key_exists("admin", $_GET) && !array_key_exists("user", $_GET));
?>
    <!-- Header Section -->
    <section class="header-section bg-primary">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-white">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
<?php
  if ("GET" === HTTP_METHOD) {
    if ($result) {
?>
            <p class="text-white-85 mb-4"><?= ($admin) ? "Please verify the following signature:" : "You entered the following data to sign our statement:" ?></p>
            <form class="text-center" id="verify_form" action="<?= html($_SERVER['REQUEST_URI']) ?>" method="post">
              <!-- Name -->
              <input type="text" name="name" maxlength="256" placeholder="Full name or company name*" value="<?= html($result[MAIL_NAME]) ?>" class="form-control mb-4" required>
              <!-- Email -->
              <input type="email" name="mail" maxlength="256" placeholder="Email address*" value="<?= html($result[MAIL_MAIL]) ?>" class="form-control mb-4" required <?= ($admin) ? "" : "disabled readonly" ?>>
              <!-- Job -->
              <input type="text" name="job" maxlength="256" placeholder="Job title or company field*" value="<?= html($result[MAIL_JOB]) ?>" class="form-control mb-4" required>
              <!-- Country -->
              <input type="text" name="country" maxlength="256" placeholder="Country*" value="<?= html($result[MAIL_COUNTRY]) ?>" class="form-control mb-4" required>
              <!-- City -->
              <input type="text" name="city" maxlength="256" placeholder="City (not entered)" value="<?= html($result[MAIL_CITY]) ?>" class="form-control mb-4">
              <!-- Website -->
              <input type="link" name="website" maxlength="256" placeholder="Website | Filmography (not entered)" value="<?= html($result[MAIL_WEBSITE]) ?>" class="form-control mb-4">
              <!-- individual or a company -->
              <select name="iscompany" class="browser-default custom-select mb-4" required>
                <option value="0" <?= ($result[MAIL_ISCOMPANY]) ? "" : "selected" ?>>Individual</option>
                <option value="1" <?= ($result[MAIL_ISCOMPANY]) ? "selected" : "" ?>>Company</option>
              </select>
              <!-- Newsletter -->
              <label class="mb-1">Do you want to stay in touch?</label>
              <select name="newsletter" class="browser-default custom-select mb-4" required <?= ($admin) ? "disabled readonly" : "" ?>>
                <option value="0" <?= ($result[MAIL_NEWSLETTER]) ? "" : "selected" ?>>No updates please.</option>
                <option value="1" <?= ($result[MAIL_NEWSLETTER]) ? "selected" : "" ?>>Please keep me updated.</option>
              </select>
              <!-- Send button -->
              <button class="btn btn-info btn-block mb-1" id="verify_button" type="submit"><?= ($admin) ? "Authorize signature" : "Verify your signature" ?></button>
            </form>
<?php
    } else {
      if ($link) {
?>
            <div class="text-center border border-light p-5">
              <p><b>The verification link you used is invalid.</b><br>
                Please try again later or <a href="/contact">contact us</a> directly.
                <?= (array_key_exists(ERROR_ID, $error)) ? "<br>Please provide the following error id when contacting us about this issue: <span style=\"overflow-wrap: break-word;\">".html($error[ERROR_ID])."</span>" : "" ?>
            </div>
<?php
      }
?>
            <p class="text-white-85 mb-4">Request a new verification link:</p>
            <form class="text-center" id="verify_form" action="<?= html($_SERVER['REQUEST_URI']) ?>" method="post">
              <input class="form-control mb-4" type="email" name="newmail" required maxlength="256" placeholder="Email address*">
              <button class="btn btn-info btn-block mb-3" id="verify_button" type="submit">Request a new link</button>
              <p class="text-white-85 font-weight-light mb-0"><b>Please note:</b> You can only verify your signature if you have signed our statement and have not yet finished the verification process.</p>
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
        if ($admin) {
?>
                <b>Signature is now online.</b><br>
                At the moment there is nothing more to do for you.
<?php
        } else {
?>
                <b>Thank you for verifying your signature.</b><br>
                We will review your signature and inform you as soon as it is validated.<br>
                In the meantime, please take a look at <a href="/participate">what else you can do</a>!
<?php
        }
      } else {
?>
                <b>Thank you for verifying your signature.</b><br>
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

