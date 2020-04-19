<?php
  define("FFF_PAGENAME",    "Send Newsletter");
  define("FFF_DESCRIPTION", "Send Newsletter to Subscribers.");
  require_once(__DIR__."/templates/header.php");

  $error  = []; // has to be defined as an array to be used
  $result = null;
  if ("GET" === HTTP_METHOD) {
    $result = get_subscribed($error);

    $countries = [];
    if (is_array($result)) {
      foreach ($result as $result_item) {
        // initialize a new country as an array
        if (!array_key_exists(strtolower(trim($result_item[MAIL_COUNTRY])), $countries)) {
          $countries[strtolower(trim($result_item[MAIL_COUNTRY]))] = trim($result_item[MAIL_COUNTRY]);
        }
      }

      // sort by array keys
      ksort($countries);
    }
  } elseif ("POST" === HTTP_METHOD) {
    $result = send_newsletter($_POST, $error);
  }
?>
    <!-- Header Section -->
    <section class="header-section bg-primary" id="<?= html(FFF_PAGENAME) ?>">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
        <h5 class="text-white mt-0 text-center">Use this page to send a newsletter to the newsletter subscribers.</h5>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-white" id="sign">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 text-center">
<?php
  if ("GET" === HTTP_METHOD) {
    if (is_array($countries) && (0 < count($countries))) {
?>
            <form class="text-center" id="contact_form" action="<?= html($_SERVER['REQUEST_URI']) ?>" method="post">
              <!-- Subject -->
              <label class="mb-1">Please select a subscriber country:</label>
              <select name="country" class="browser-default custom-select mb-4" required>
                <option value="" disabled selected>Choose option...</option>
                <option value="">ALL COUNTRIES</option>
<?php
      foreach ($countries as $key => $value) {
?>
                <option value="<?= html($key) ?>"><?= html($value) ?></option>
<?php
      }
?>
              </select>
              <!-- Subject -->
              <input type="text" name="subject" maxlength="256" placeholder="Subject*" value="<?= html(NEWSLETTER_MAIL_SUBJECT) ?>" class="form-control mb-4" required>
              <!-- Message -->
              <div class="form-group">
                <textarea name="message" rows="5" placeholder="Message*" class="form-control mb-4" required><?= html(NEWSLETTER_MAIL_BODY) ?></textarea>
              </div>
              <!-- Password -->
              <input type="password" name="password" maxlength="256" placeholder="Password*" class="form-control mb-4" required>
              <!-- Send button -->
              <button class="btn btn-info btn-block mb-1" id="send_button" type="submit">Send newsletter</button>
            </form>
<?php
    } else {
?>
            <div class="text-center border border-light p-5">
              <p>
<?php
      if (is_array($result)) {
?>
                There are currently no verified subscribers of the newsletter.
<?php
      } else {
?>
                <b>Unfortunately, an error has occured<?=  (array_key_exists(ERROR_OUTPUT, $error)) ? ":</b><br>".html($error[ERROR_OUTPUT]) : ".</b>" ?><br>
                Please try again later or send an email to <a href="mailto:contact@filmmakersforfuture.org">contact@filmmakersforfuture.org</a>.
                <?= (array_key_exists(ERROR_ID, $error)) ? "<br>Please provide the following id when contacting us about this issue: <span style=\"overflow-wrap: break-word;\">".html($error[ERROR_ID])."</span>" : "" ?>
<?php
      }
?>
              </p>
            </div>
<?php
    }
  } elseif ("POST" === HTTP_METHOD) {
?>
            <div class="text-center border border-light p-5">
              <p>
<?php
    if ($result) {
?>
                <b>The newsletter has been sent.</b>
                At the moment there is nothing more to do for you.
<?php
    } else {
?>
                <b>Unfortunately, an error has occured<?=  (array_key_exists(ERROR_OUTPUT, $error)) ? ":</b><br>".html($error[ERROR_OUTPUT]) : ".</b>" ?><br>
                Please try again later or send an email to <a href="mailto:contact@filmmakersforfuture.org">contact@filmmakersforfuture.org</a>.
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

