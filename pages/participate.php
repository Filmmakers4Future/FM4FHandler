<?php
  define("FFF_PAGENAME",    "Participate");
  define("FFF_DESCRIPTION", "Become part of the movement! Find out what you can do to make the motion picture industry greener.");
  require_once(__DIR__."/templates/header.php");
?>
    <!-- Header Section -->
    <section class="header-section bg-primary">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
        <h5 class="text-white mt-0 text-center">#Filmmakers4Future - Filmmakers for Future</h5>
        <h6 class="text-white-50 mt-0 text-center">(Last update: <?= date("j F Y", filemtime(__FILE__)) ?>)</h6>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Working Groups</h3>
        <p class="text-white mt-0">The following groups currently exist:</p>
        <ul class="text-white list" style="font-size:1rem">
          <li>Demands</li>
          <span class="text-white-50 font-weight-light">Discuss and work on our demands.</span>
          <li>Green Filmmaking</li>
          <span class="text-white-50 font-weight-light">Discussions about how our industry can become sustainable.</span>
          <li>Public Relations</li>
          <span class="text-white-50 font-weight-light">Anything related to social media, our website and other pr channels.</span>
          <li>Regional Spaces</li>
          <span class="text-white-50 font-weight-light">Discussions about local issues and topics.</span>
          <ul class="text-white list" style="font-size:1rem">          
            <li>Germany</li>
          </ul>
        </ul>
        <p class="text-white mt-0">Our working groups can be found at <a target="_blank" rel="noopener noreferrer" href="https://groups.filmmakersforfuture.org">groups.filmmakersforfuture.org</a>. If you use any kind of social network you will proably feel right at home. To get an invite, <a href="/contact">contact us</a> and choose <b>Working Group Invite</b> as subject, you don't need to add a message if you have signed the statement. We are working on ways to automate this in the future.</p>
        <p class="text-white mt-0">Please join our groups and get involved!</p>
      </div>
    </section>
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50 mt-0">Filmmakers for Future on Crew United</h3>
        <p class="text-white mt-0">If you are in a country where <a target="_blank" rel="noopener noreferrer" href="https://www.crew-united.com/en">Crew United</a> is used as a cv and networking platform, you can add <b>Filmmakers for Future</b> as an association to your profile. This way your colleagues can directly see who they can team up with and companies can easily search for crew members for green productions.</p>
        <div class="row justify-content-center pt-4">
           <div class="col-xl-3 col-lg-3 col-md-5 col-sm-10 col-20 mx-3">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../img/crew_united/1.png")) ?>" width="500px" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
               Edit your profile
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-10 col-20 mx-3">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../img/crew_united/2.png")) ?>" width="500px" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
               <b>Fm4F</b> next to your profile picture
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-9 col-sm-10 col-20 mx-3">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../img/crew_united/3.png")) ?>" width="500px" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
               Filmmakers for Future in your basic data
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Logos</h3>
        <p class="text-white mt-0">Once you have signed the statement, you may use the logos offered below to communicate this. You may also use them to link to us. However, you may not express your views "on behalf" of Filmmakers for Future beyond the statement.</p>
        <div class="row justify-content-start pt-4">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-20 mx-5">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../files/logos/logo_circle.svg")) ?>" width="500px" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
                <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/logos/logo_circle.svg")) ?>" download="Filmmakers4Future_Standalone">svg</a> <span class="small font-weight-light">(rgb)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/logos/logo_circle.png")) ?>" download="Filmmakers4Future_Standalone">png</a> <span class="small font-weight-light">(rgb)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/logos/logo_circle.pdf")) ?>" download="Filmmakers4Future_Standalone">pdf</a> <span class="small font-weight-light">(cmyk)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/logos/logo_circle.eps")) ?>" download="Filmmakers4Future_Standalone">eps</a> <span class="small font-weight-light">(cmyk)</span>
              </figcaption>
            </figure>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-20 mx-5">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../files/logos/logo_standalone.svg")) ?>" width="500px" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
                <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/logos/logo_standalone.svg")) ?>" download="Filmmakers4Future_Standalone">svg</a> <span class="small font-weight-light">(rgb)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/logos/logo_standalone.png")) ?>" download="Filmmakers4Future_Standalone">png</a> <span class="small font-weight-light">(rgb)</span>
              </figcaption>
            </figure>
          </div>
        </div>
        <p class="text-white-50 mt-0 small font-weight-light">The Filmmakers for Future logo was designed by <a target="_blank" rel="noopener noreferrer" href="http://www.felixjanz.de">Felix Janz</a>. Thank you!</p>
      </div>
    </section>
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50 mt-0">Posters</h3>
        <p class="text-white mt-0">Posters are a good way to increase our visibility. Displayed in equipment rentals or production companies, they encourage employees and customers to engage.</p>
        <div class="row justify-content-end pt-1">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-20 mx-0">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../img/poster/sign_statement.jpg")) ?>" class="figure-img img-fluid" alt="Sign now! - Poster">
              <figcaption class="text-center text-white">
                <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/poster/sign_statement_a3.pdf")) ?>" download="Filmmakers4Future_Poster_Sign_A3_3mm_Bleed_ISO_Coated_v2_300%">pdf</a> <span class="small font-weight-light">(A3 - 3mm bleed)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/poster/sign_statement_a4.pdf")) ?>" download="Filmmakers4Future_Poster_Sign_A4_3mm_Bleed_ISO_Coated_v2_300%">pdf</a> <span class="small font-weight-light">(A4 - 3mm bleed)</span>
              </figcaption>
            </figure>
          </div>
        </div>
        <p class="text-white mt-0"><b>As always with printed materials:</b> Print only what you need and use service providers that produce ecologically.</p>
      </div>
    </section>
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Headers</h3>
        <p class="text-white mt-0">Headers for social media networks or news articles.</p>
         <div class="row justify-content-start pt-1">
          <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-15 mx-0">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../img/header_wide.jpg")) ?>" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
                <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/header/header.jpg")) ?>" download="Filmmakers4Future_Header">jpg</a> <span class="small font-weight-light">(2400x1260)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/header/header_wide.jpg")) ?>" download="Filmmakers4Future_Header_Wide">jpg</a> <span class="small font-weight-light">(3312x1260)</span>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50 mt-0">Stickers for self-printing</h3>
        <p class="text-white mt-0">Please do not put these stickers on other people's property without their consent.</p>
         <div class="row justify-content-end pt-4">
           <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-20 mx-5">
            <figure class="figure">
              <img src="<?= html(path2uri(__DIR__."/../files/logos/logo_circle.svg")) ?>" width="500px" class="figure-img img-fluid" alt="">
              <figcaption class="text-center text-white">
                <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/sticker/Filmmakers4Future_Sticker_60mm_3mm_Bleed.pdf")) ?>" download="Filmmakers4Future_Sticker_60mm_3mm_Bleed_ISO_Coated_v2_300%">pdf</a> <span class="small font-weight-light">(60mm - 3mm bleed)</span> · <a target="_blank" rel="noopener noreferrer" href="<?= html(path2uri(__DIR__."/../files/sticker/Filmmakers4Future_Sticker_95mm_3mm_Bleed.pdf")) ?>" download="Filmmakers4Future_Sticker_95mm_3mm_Bleed_ISO_Coated_v2_300%">pdf</a> <span class="small font-weight-light">(95mm - 3mm bleed)</span>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Website</h3>
        <p class="text-white mt-0">The code for this website (excluding database and mailgun credentials) is on <a target="_blank" rel="noopener noreferrer" href="https://github.com/Filmmakers4Future/Website-Code">GitHub</a>. If you find a bug or have an idea on how to improve things, feel free to send us a pull request! If you do not know how to do this but still have a suggestion, please <a href="/contact">send us</a> a message.</p>
      </div>
    </section>
<?php
  require_once(__DIR__."/templates/footer.php");

