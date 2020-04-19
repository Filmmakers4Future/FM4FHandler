<?php
  define("FFF_PAGENAME",    "Contact");
  define("FFF_DESCRIPTION", "You have questions? Contact us!");
  require_once(__DIR__."/templates/header.php");

  $error  = []; // has to be defined as an array to be used
  $result = null;
  if ("POST" === HTTP_METHOD) {
    $result = contact($_POST, $error);
  }
?>
    <!-- Header Section -->
    <section class="header-section bg-primary" id="<?= html(FFF_PAGENAME) ?>">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
        <h5 class="text-white mt-0 text-center">You have questions, want to help or have any other inquiries?</h5>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-white" id="sign">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 text-center">
<?php
  if ("GET" === HTTP_METHOD) {
?>
            <form class="text-center" id="contact_form" action="<?= html($_SERVER['REQUEST_URI']) ?>" method="post">
              <!-- Subject -->
              <label class="mb-1">Please select a subject for your message:</label>
              <select name="subject" class="browser-default custom-select mb-4" required>
                <option value="" disabled selected>Choose option...</option>
<?php
    if (is_array(CONTACT_SUBJECTS)) {
      for ($i = 0; $i < count(CONTACT_SUBJECTS); $i++) {
?>
                <option value="<?= html(strval($i)) ?>"><?= html(CONTACT_SUBJECTS[$i][MAIL_SUBJECT]) ?></option>
<?php
      }
    }
?>
              </select>
              <!-- Name -->
              <input type="text" name="name" maxlength="256" placeholder="Full name or company name*" class="form-control mb-4" required>
              <!-- Email -->
              <input type="email" name="mail" maxlength="256" placeholder="Email address*" class="form-control mb-4" required>
              <!-- Message -->
              <div class="form-group">
                <textarea name="message" rows="5" placeholder="Message*" class="form-control mb-4" required></textarea>
              </div>
              <!-- Privacy -->
              <div class="custom-control custom-checkbox mb-4">
                <input type="checkbox" class="custom-control-input" id="privacy" required>
                <label class="custom-control-label" for="privacy">I have read and agree to the <a href="/privacy" target="_blank" rel="noopener noreferrer">privacy policy</a>.</label>
              </div>
              <!-- Send button -->
              <button class="btn btn-info btn-block mb-1" id="contact_button" type="submit">Send message</button>
            </form>
<?php
  } elseif ("POST" === HTTP_METHOD) {
?>
            <div class="text-center border border-light p-5">
              <p>
<?php
    if ($result) {
?>
                <b>Thank you for contacting us.</b><br>
                We will come back to you as soon as possible.
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

