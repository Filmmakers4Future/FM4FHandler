<?php
  define("FFF_PAGENAME",    "Privacy Policy");
  define("FFF_DESCRIPTION", "Our privacy policy.");
  require_once(__DIR__."/templates/header.php");
?>
    <!-- Header Section -->
    <section class="header-section bg-primary" id="statement">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="text-white mt-0 text-center"><?= html(FFF_PAGENAME) ?></h2>
            <h6 class="text-white mt-0 text-center">Information in accordance with Article 13 GDRP.</h6>
          </div>
        </div>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-white" id="sign">
      <div class="container">
        <h2 class="text-white">1. General information and mandatory information</h2>
        <h5 class="text-white-50" id="responsible_person">1.1. The party responsible for processing data on this website is:</h5>
        <p class="text-white"><b>Filmmakers for Future</b><br>
          <span class="font-weight-light">Represented by:</span><br>
          Paul-Vincent Roll<br>
          Gürtelstraße 13<br>
          13088 Berlin<br>
          Germany</p>
        <p class="text-white mb-4">Telephone: +49 173 1626294<br>
          Email: <a href="mailto:privacy@filmmakersforfuture.org">privacy@filmmakersforfuture.org</a></p>
        <p class="text-white">The responsible party is the natural or legal person who alone or jointly with others decides on the purposes and means of processing personal data (names, email addresses, etc.).</p>
        <h5 class="text-white-50">1.2. Revocation of your consent to the processing of your data</h5>
        <p class="text-white">Many data processing operations are only possible with your express consent. You may revoke your consent at any time with future effect. An informal email making this request is sufficient. </p>
        <h5 class="text-white-50">1.3. Right to file complaints with regulatory authorities</h5>
        <p class="text-white">If there has been a breach of data protection legislation, the person affected may file a complaint with the competent regulatory authorities. The competent regulatory authority for matters related to data protection legislation is the data protection officer of the German state in which we are located. A list of data protection officers and their contact details can be found at the following link: <a target="_blank" rel="noopener noreferrer" style="overflow-wrap: break-word;" href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</a>.</p>
        <h5 class="text-white-50">1.4. Right to data portability</h5>
        <p class="text-white">You have the right to have data which we process based on your consent or in fulfillment of a contract automatically delivered to yourself or to a third party in a standard, machine-readable format. If you require the direct transfer of data to another responsible party, this will only be done to the extent technically feasible.</p>
        <h5 class="text-white-50">1.5. SSL or TLS encryption</h5>
        <p class="text-white">This site uses SSL or TLS encryption for security reasons and for the protection of the transmission of confidential content, such as the inquiries you send to us as the site operator. You can recognize an encrypted connection in your browser's address line when it changes from "http://" to "https://" and the lock icon is displayed in your browser's address bar.</p>
        <p class="text-white">If SSL or TLS encryption is activated, the data you transfer to us cannot be read by third parties.</p>
        <h5 class="text-white-50">1.6. Information, blocking, deletion</h5>
        <p class="text-white">As permitted by law, you have the right to be provided at any time with information free of charge about any of your personal data that is stored as well as its origin, the recipient and the purpose for which it has been processed. You also have the right to have this data corrected, blocked or deleted. You can contact us at any time using the address given <a class="js-scroll-trigger" href="#responsible_person">above</a> if you have further questions on the topic of personal data.</p>
        <h5 class="text-white-50">1.7. Underaged people</h5>
        <p class="text-white">This website is not intended for people under 16 years of age. We do not knowingly process personal data of this group.</p>
        <h2 class="text-white" id="data_collection">2. Data collection on our website</h2>
        <h4 class="text-white">2.1. Server log files</h4>
        <p class="text-white">Each time the website is accessed, we automatically collect and store information that your browser transmits to us in "server log files".</p>
        <p class="text-white">These are:</p>
        <ul class="list">
          <li>Your IP address</li>
          <li>Host name of the accessing computer</li>
          <li>Duration of the request</li>
          <li>Time of the server request</li>
          <li>First Line of Request (what is requested)</li>
          <li>Status of the request</li>
          <li>Transmitted data (volume)</li>
          <li>Useragent</li>
          <ul>
            <li>Browser type and browser version</li>
            <li>Operating system used</li>
          </ul>
          <li>Referrer URL</li>
        </ul>
        <p class="text-white">The basis for data processing is Art. 6 (1) (f) GDPR, which allows the processing of data to fulfill a contract or for measures preliminary to a contract.</p>
        <p class="text-white">This data will be stored for fourteen days and not be merged with other data sources.</p>
        <h4 class="text-white" id="#signing">2.2. Signing the statement</h4>
        <p class="text-white">You can sign a statement on our website. The input data will only be used for the purpose of listing you as a supporter and keeping you up to date if you choose to receive <a class="js-scroll-trigger" href="#newsletter">newsletters</a>. The mandatory information requested during signing must be provided in full. Otherwise, we will reject your signature.</p>
        <p class="text-white">If you would like to sign our statement, we require a valid email address as well as information that allows us to verify that you are the owner of the specified email address and that you agree to sign our statement. In addition to an automatic check (link via email and verification of your email address via <a class="js-scroll-trigger" href="#mailgun">Mailgun</a>) we may personally contact you via email to verify your signature.</p> 
          <p class="text-white">If you are signing as a company please use an email address we can use to verify that you are entitled to decide on behalf of the company you entered. We may personally contact you via email or via phone to double check this.</p>
        <p class="text-white">Additionally the following data is collected:</p>
        <ul class="list">
          <li>A website link you provide (optional)</li>
          <li>The country you are located in</li>
          <li>Are you an individual or a company?</li>
          <ul>
            <li>Individual:</li>
            <ul>
              <li>Your full name</li>
              <li>Your profession</li>
              <li>The cities you are located in (optional)</li>
            </ul>
            <li>Company:</li>
            <ul>
              <li>Company name</li>
              <li>Company field (e.g. "Camera Rental")</li>
              <li>The cities you are located in</li>
            </ul>
          </ul>
        </ul>
        <p class="text-white">The following data will be publicly published on our website alongside your signature:</p>
        <ul class="list">
          <li>A website link you provide (if your provide one)</li>
          <li>The country in which you are located</li>
          <li>If you are an individual or a company</li>
          <ul>
            <li>Individual:</li>
            <ul>
              <li>Your full name</li>
              <li>Your profession</li>
            </ul>
            <li>Company:</li>
            <ul>
              <li>Company name</li>
              <li>Company field (e.g. "Camera Rental")</li>
              <li>The cities in which you are located</li>
            </ul>
          </ul>
        </ul>
        <p class="text-white">For private individuals we only use the city you are located in order to determine what kind of information might be useful to you if you decide to sign up for our newsletter.</p>
        <p class="text-white">We will process the data provided during signing only based on your consent per Art. 6 (1)(a) GDPR. You may revoke your consent at any time with future effect. An informal email making this request is sufficient. </p>
        <p class="text-white">The data collected during signing will be stored for as long as you remain listed on our website. In case you want to have your signature removed, an informal email is sufficient.</p>
        <h4 class="text-white">2.3. Contact form</h4>
        <p class="text-white">Our contact form allows you to easily send us an email.</p>
        <p class="text-white">The following data is collected:</p>
        <ul class="list">
          <li>Your name</li>
          <li>Your email address</li>
          <li>Subject of your message</li>
          <li>Your message</li>
        </ul>
        <p class="text-white">We will process the data provided through the contact form only based on your consent per Art. 6 (1)(a) GDPR. You may revoke your consent at any time with future effect. An informal email making this request is sufficient. </p>
        <h4 class="text-white" id="#groups">2.4. Working Groups</h4>
        <p class="text-white">We offer working groups to enable people to participate in Filmmakers for Future and to coordinate us. They can be found at <a target="_blank" rel="noopener noreferrer" href="https://groups.filmmakersforfuture.org">groups.filmmakersforfuture.org</a>.</p>
        
        <p class="text-white">The following data are mandatory:</p>
        <ul class="list">
          <li>Username</li>
          <li>Email address</li>
          <li>Password</li>
          <li>First name</li>
          <li>Last name</li>
        </ul>
        <p class="text-white">Optionally you can provide the following data categories:</p>
        <ul class="list">
          <li>Contact details</li>
          <li>Links to your social media accounts</li>
          <li>Images and documents you upload</li>
          <li>Communication contents</li>
        </ul>
        <p class="text-white">Your full name, username and the optional data you provide will be visible to other members. The data will also be used for notification e-mails (e.g. "User X posted a new comment").</p>
        <p class="text-white">We will process the data provided based on your consent per Art. 6 (1)(a) GDPR. You may revoke your consent at any time with future effect by deleting your account.</p>
        <h2 class="text-white" id="newsletter">3. Newsletter</h2>
        <h5 class="text-white-50">3.1. Newsletter data</h5>
        <p class="text-white">For our newsletter we use the email and name you provided when signing our statement. We only use this data to send the requested information.</p>
        <p class="text-white">As mentioned above the cities you provided are being used to send you localized information that might be of interest to you. If you did not provide a city you will only receive the generalized newsletter.</p>
        <p class="text-white">We will process any data you enter into the signing form only with your consent per Art. 6 (1) (a) GDPR. You can revoke consent to the use of your email address and the cities you provided for sending the newsletter at any time, e.g. through the "unsubscribe" link in the newsletter. </p>
        <p class="text-white">The data you provided when signing the statement will be used to distribute the newsletter until you cancel your subscription.</p>
        <h2 class="text-white">4. Data processing by third party providers</h2>
        <h4 class="text-white" id="videos">4.1. Videos on our video page</h4>
        <p class="text-white">The videos displayed on our <a href="/videos">videos page</a> are hosted by third party services (YouTube and Vimeo). When playing one of those videos, a connection to their server is established.</p>
        <p class="text-white">This will only happen <b>after and when you decide to click</b> on one of the preview images on our <a href="/videos">videos page</a>.</p>
        <p class="text-white">When you do the video provider will be told on which page you are watching the video from. In this way - if you are logged into your YouTube or Vimeo account - YouTube and Vimeo can personally assign your surfing behavior to you. You can prevent this by logging out of your YouTube and Vimeo account beforehand. If you want you can also right click on the images to copy the link to the video and manually open it in a new tab. This way YouTube and Vimeo won't know which page you are coming from. If a video is started, the providers use cookies that collect information about user behavior. Whoever has deactivated the saving of cookies for the Google Ads program will not have to reckon with such cookies when watching YouTube videos. However, YouTube and Vimeo also stores non-personal usage information in other cookies. If you wish to prevent this, you must block the storage of cookies in your browser. YouTube and Vimeo also obtains your IP address when watching a video.</p>
        <h5 class="text-white-50">4.1.1. YouTube</h5>
        <p class="text-white">Videos hosted on YouTube are marked as such. When playing one of those videos, a connection to the servers of YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA is established.</p>
        <p class="text-white">Further information on data protection at "YouTube" can be found in the provider's data protection declaration under <a target="_blank" rel="noopener noreferrer" style="overflow-wrap: break-word;" href="https://www.google.de/intl/de/policies/privacy/">https://www.google.de/intl/de/policies/privacy/</a>.</p>
        <p class="text-white">The use of YouTube is based on your consent (per Art. 6 (1) p. 1 lit. a GDPR) as well as on our legitimate interest (per Art. 6 (1) p. 1 lit. f GDPR) since it ensures that videos are watchable on a wide variety of browsers and internet speeds.</p>
        <h5 class="text-white-50">4.1.2. Vimeo</h5>
        <p class="text-white">Videos hosted on Vimeo are marked as such. When playing one of those videos, a connection to the servers of Vimeo Inc., 555 West 18th Street, New York, New York 10011, USA is established.</p>
        <p class="text-white">Further information on data protection at "Vimeo" can be found in the provider's data protection declaration under <a target="_blank" rel="noopener noreferrer" style="overflow-wrap: break-word;" href="https://vimeo.com/privacy">https://vimeo.com/privacy</a>.</p>
        <p class="text-white">The use of Vimeo is based on your consent (per Art. 6 (1) p. 1 lit. a GDPR) as well as on our legitimate interest (per Art. 6 (1) p. 1 lit. f GDPR) since it ensures that videos are watchable on a wide variety of browsers and internet speeds.</p>
        <h4 class="text-white" id="mailgun">4.2. Mailgun</h4>
        <p class="text-white">In order to verify your email address and send you emails we use the service Mailgun by Mailgun Technologies, Inc., 548 Market St. #43099 San Francisco, CA 94104.</p>
        <p class="text-white">We have entered into a data processing agreement and into the "EU standard contractual clauses" with Mailgun for the outsourcing of our data processing and fully implement the strict requirements of the German data protection authorities when using Mailgun.</p>
        <p class="text-white">Mailgun Technologies, Inc. is certified under the EU-US Privacy Shield. The Privacy Shield is an agreement between the European Union and the US to ensure compliance with European data protection standards in the US (<a target="_blank" rel="noopener noreferrer" style="overflow-wrap: break-word;" href="https://www.privacyshield.gov/participant?id=a2zt0000000PCbmAAG&status=Active">https://www.privacyshield.gov/participant?id=a2zt0000000PCbmAAG&status=Active</a>).</p>
        <p class="text-white">The privacy policy of Mailgun can be found at: <a target="_blank" rel="noopener noreferrer" style="overflow-wrap: break-word;" href="https://www.mailgun.com/privacy-policy">https://www.mailgun.com/privacy-policy</a></p>
        <p class="text-white">The use of Mailgun is based on our legitimate interest (per Art. 6 (1) p. 1 lit. f GDPR) since it ensures that emails (newsletters, signing verification etc.) are delivered reliably, securely and quickly without being mistakenly classified as spam.</p>
        <h4 class="text-white" id="netcup">4.3. Netcup</h4>
        <p class="text-white">We use Netcup GmbH, Daimlerstraße 25, 76185 Karlsruhe (<a href="https://www.netcup.de">https://www.netcup.de</a>) as our hosting provider.</p>
        <p class="text-white">The collected data mentioned in <a href="#data_collection" class="js-scroll-trigger">Section 2</a> is processed and stored on servers provided by Netcup GmbH.</p>
        <p class="text-white">We have entered into a data processing agreement with Netcup GmbH for the outsourcing of our data processing and fully implement the strict requirements of the German data protection authorities when using the services by Netcup GmbH.</p>
        <p class="text-white">The privacy policy of Netcup GmbH can be found at: <a target="_blank" rel="noopener noreferrer" style="overflow-wrap: break-word;" href="https://www.netcup.eu/kontakt/datenschutzerklaerung.php">https://www.netcup.eu/kontakt/datenschutzerklaerung.php</a></p>
      </div>
    </section>
<?php
  require_once(__DIR__."/templates/footer.php");

