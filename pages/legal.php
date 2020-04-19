<?php
  define("FFF_PAGENAME",    "Legal Disclosure");
  define("FFF_DESCRIPTION", "Our legal disclosure.");
  require_once(__DIR__."/templates/header.php");
?>
    <!-- Header Section -->
    <section class="header-section bg-primary" id="statement">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="text-white mt-0 text-center"><?= html(FFF_PAGENAME) ?></h2>
            <h6 class="text-white mt-0 text-center">Information in accordance with Section 5 TMG.</h6>
          </div>
        </div>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-white" id="sign">
      <div class="container">
        <h3 class="text-white-50 mb-4">Contact Information</h3>
        <p class="text-white mb-4"><b>Filmmakers for Future</b><br>
          <span class="font-weight-light">Represented by:</span><br>
          Paul-Vincent Roll<br>
          Gürtelstraße 13<br>
          13088 Berlin<br>
          Germany</p>
        <p class="text-white mb-4">Telephone: +49 173 1626294<br>
          E-Mail: <a href="mailto:contact@filmmakersforfuture.org">contact@filmmakersforfuture.org</a></p>
        <h3 class="text-white-50 mb-4">Disclaimer</h3>
        <h5 class="text-white-50 mb-4">Accountability for content</h5>
        <p class="text-white mb-4">The contents of our pages have been created with the utmost care. However, we cannot guarantee the contents' accuracy, completeness or topicality. According to statutory provisions, we are furthermore responsible for our own content on these web pages. In this matter, please note that we are not obliged to monitor the transmitted or saved information of third parties, or investigate circumstances pointing to illegal activity. Our obligations to remove or block the use of information under generally applicable laws remain unaffected by this as per §§ 8 to 10 of the Telemedia Act (TMG).</p>
        <h5 class="text-white-50 mb-4">Accountability for links</h5>
        <p class="text-white mb-4">Responsibility for the content of external links (to web pages of third parties) lies solely with the operators of the linked pages. No violations were evident to us at the time of linking. Should any legal infringement become known to us, we will remove the respective link immediately.</p>
        <h5 class="text-white-50 mb-4">Opposition to promotional emails</h5>
        <p class="text-white mb-4">We hereby expressly prohibit the use of contact data published in the context of website legal disclosure requirements with regard to sending promotional and informational materials not expressly requested. The website operator reserves the right to take specific legal action if unsolicited advertising material, such as email spam, is received.</p>
        <p><i class="text-white-50 mb-4">Quelle:</i> <a target="_blank" rel="noopener noreferrer" href="http://www.translate-24h.de">Übersetzungsdienst translate-24h.de</a></p>
      </div>
    </section>
<?php
  require_once(__DIR__."/templates/footer.php");

