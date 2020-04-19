<?php
  define("FFF_PAGENAME",    "Green Filmmaking");
  define("FFF_DESCRIPTION", "Tips on producing green movies and links to further resources.");
  require_once(__DIR__."/templates/header.php");
?>
    <!-- Header Section -->
    <section class="header-section bg-primary">
      <div class="container">
        <h2 class="text-center text-white mt-0">Things productions can easily do</h2>
        <h5 class="text-white mt-0 text-center">Often even saving some money on the way</h5>
        <h6 class="text-white-50 mt-0 text-center">(Last update: <?= date("j F Y", filemtime(__FILE__)) ?>)</h6>
        <br>
        <h6 class="text-white-50 text-center">This guide is still work in progress. Want to help finish it? Join our <a href="/participate">working groups</a>.</h6>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50">Have people opt-in for printed call sheets</h3>
        <p class="text-white">Let's assume your production has <b>60 crew members</b>. Your typical call sheet may be around <b>3 pages</b>. For a <b>35 days production</b> this sums up to <b>6.300 pages</b> of paper or roughly <b>31kg</b> (68lb). For a <b>200 people crew</b> and <b>55 shooting days</b> this already increases to <b>33.000 pages</b> and <b>165kg</b> (364lb) of paper. If you also print risk assessments and other extra information these numbers can quickly double while being easily avoidable.</p>
        <p class="text-white">Instead of printing all those pages let your crew know why you decided against it and give them an option to opt-in - <b>instead of out</b> - if their position requires a physically printed version.</p>
        <p class="text-white-50 font-weight-light">Data used for the calculations:</p>
        <ul class="text-white-50 font-weight-light list">
          <li>Paper format = DIN A4</li>
          <li>Paper strength = 80 g/qm</li>
        </ul>
      </div>
    </section>
    
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50">Get rid of plastic bottles, disposable cups and dishes</h3>
        <p class="text-white"><b>Plastic bottles</b> are a <b>big problem</b> on film sets. Crew members <b>take one, drink a few sips, place it somewhere</b> to continue working and then don't remember which bottle was theirs. The result? They <b>take a new one</b>, leaving the location department with dozens of almost full bottles for disposal. This is not only very costly, it is a <b>nightmare for the environment</b>.</p>
        <p class="text-white">The same applies for <b>disposable cups and dishes</b>. They are <b>used, discarded immediately</b> and thus produce an enormous amount of <b>waste</b> that is <b>hard to recycle due to contamination</b> and again also produces high costs.</p>
        <p class="text-white">A possible solution can be giving ever crew member a <b>durable cup or bottle</b> they can <b>clip to their belt</b> and <b>reuse</b> for the whole production. Even better ask your crew beforehand if they need one or <b>might already have one</b> from a previous production. Provide <b>tap water</b> in areas where it is available and safe to drink. If you provide bottled water, choose <b>reusable glass bottles</b> and make them easily available so people can fill their own cups and bottles with them. Source water <b>filled locally</b> that does not have to be transported very far.</p>
      </div>
    </section>
    
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Waste separation</h3>
        <p class="text-white mt-0">Enable waste separation by providing multiple types of bins according to local standards. They should be clearly labeled and available at various locations on set. Having only one type of bin makes it harder to recycle and to properly dispose of non-recyclable materials.</p>
        <p class="text-white">Even more importantly: Make your crew aware of how to avoid garbage and support them in the process.</p>
      </div>
    </section>
    
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50 mt-0">Make use of organic regional and seasonal foods - reduce meat</h3>
        <p class="text-white mt-0">Regional and seasonal foods have many advantages. They do not have to be transported over long distances and thus save a lot of CO₂, which would otherwise be released during transport. They support local agriculture and are fresher because they do not have to be harvested prematurely and instead end up directly in the hands of the consumer without much detour. This often makes them tastier and healthier as well.</p>
        <p class="text-white mt-0">Way too often the vegetarian and vegan menu feel like a second-class option. It's the same dish, but the meat has been replaced by tofu, for instance. Meatless dishes can be very nutritious, healthy and incredibly delicious. If the vegetarian dish is regarded as an independent and first-class option by the catering provider, one quickly notices that even non-vegetarians increasingly choose it, even if meat is offered as well. Once you have arrived at this point, you can completely omit meat on individual days without any major complaints. Especially if you simultaneously educate your crew about the reasons behind this decision.</p>
      </div>
    </section>
    
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Eliminate idling of cars and generators</h3>
        <p class="text-white mt-0">In the US over 14 million liters (3.8 million gallons) of fuel are wasted everday by idling. You should therefore enforce a strict no idling policy for your production. Use vehicles with automatic start/stop systems, turn off unused generators and replace those that are oversized for the current load. Whenever possible, favor the local power grid over a generator for electricity.</p>
        <p class="text-white-50 font-weight-light">Source:</p>
        <ul class="text-white-50 font-weight-light list">
          <li><a target="_blank" rel="noopener noreferrer" href="https://www.greenproductionguide.com/wp-content/uploads/2017/04/GPG_Idling_Infographic.pdf">Green Production Guide</a></li>
        </ul>
      </div>
    </section>
    
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50 mt-0">Educate your crew and team members - inspire them to talk about it</h3>
        <p class="text-white mt-0">When it comes to this issue it is vital that everyone is on board. Start conversations about how to be greener, incorporate the topic into your daily safety meetings and help people realize the importance of treating our planet better. It does not help if you are fully aware of this but your team is not. So inspire them to come up with their own ideas and when they do support them. Ideally, appoint a responsible person to whom people can turn in matters concerning climate protection. The goal must be that every member of your team thinks about the ecological consequences of their actions and knows how important it is to do the right thing.</p>
      </div>
    </section>
    
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h3 class="text-white-50 mt-0">Improve your office</h3>
        <p class="text-white mt-0">A good deal of film production takes place in offices. From coming up with ideas in one's home office to the development and financing by producers, as well as the similarly office-based production process. As such, pan-industry topics such as green offices in sustainable buildings are hugely important in our industry as well.</p>
        <p class="text-white mt-0">Some of the things you should think about are:</p> 
        <ul class="text-white-50 font-weight-light list">
          <li>Electricity and heating from renewable energies</li>
          <li>Mechanical cooling and sun protection</li>
          <li>Drinkable tap water</li>
          <li>Waste separation</li>
          <li>Multifunctional & writable walls</li>
          <li>Flexible furnishings & low-emission interior design</li>
        </ul>
        <p class="text-white mt-0">Then check which purchases you can make in a sustainable way - used, fair trade, environmentally friendly. Which work processes can be optimized with regard to their resource and financial efficiency (e.g. printing on both sides of recycled paper) on the one hand and with regard to employee satisfaction (e.g. ergonomics, exercise, catering) on the other.</p>
      </div>
    </section>
  
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h3 class="text-white-50 mt-0">Don't stop here!</h3>
        <p class="text-white mt-0"><b>To be clear:</b> Doing the 10 things mentioned on this site can be a good start but they are nowhere near enough! In order for your film or show to be ecologically sustainable it is vital to calculate it's unique footprint before the production begins and then develop a plan on how exactly this footprint can be minimized.</p>
      </div>
    </section>
    
    <section class="page-section bg-dark text-center">
      <div class="container">
        <h2 class="text-center text-white mt-0 mb-5">Further resources</h2>
         <div class="row justify-content-center">
        
            <!-- Green Shooting Card -->
            <div class="col-xl-4 col-lg-5 col-md-10 col-sm-10 col-10 mx-5 mb-3">
              <figure class="figure">
                <a target="_blank" rel="noopener noreferrer" href="https://www.ffhsh.de/de/film_commission/gruener_drehpass.php"><img src="/user/handlers/fm4fhandler/files/logos/Gruener_Drehpass.svg" width="160px" class="figure-img img-fluid mb-3" alt="Green Shooting Card Logo"></a>
                <figcaption class="text-center text-white">Green Shooting Initiative of the Hamburg Film Fund in Germany.</figcaption>
                <figcaption class="text-left text-white">
                <ul>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.ffhsh.de/download/97_Sonstiges/GruenerDrehpass_Flyer_edition2.pdf.pdf">Leaflet</a> <span class="text-center text-white-50 small">[English + German]</span></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.ffhsh.de/download/Best_Practice_Guide_D_2016_03.pdf">Best Practice Guide</a> <span class="text-center text-white-50 small">[German]</span></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.ffhsh.de/download/GreenProductionGuide_30102015.pdf">Green Service Providers</a> <span class="text-center text-white-50 small">[German]</span></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.ffhsh.de/download/GruenerDrehpass_Checkliste.pdf">Checklist</a> <span class="text-center text-white-50 small">[German]</span></li>
                </ul>
                </figcaption>
              </figure>
            </div>
            <!-- End Green Shooting Card -->
            
            <!-- Green Film -->
            <div class="col-xl-4 col-lg-5 col-md-10 col-sm-10 col-10 mx-5 mb-3">
              <figure class="figure">
                <a target="_blank" rel="noopener noreferrer" href="https://www.green.film"><img src="/user/handlers/fm4fhandler/files/logos/green-film-logo.svg" width="200px" class="figure-img img-fluid mb-3" alt="Green Film Logo"></a>
                <figcaption class="text-center text-white">Italian rating system for sustainable film production.</figcaption>
                <figcaption class="text-left text-white">
                <ul>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.green.film/how-does-it-work.php">How does it work?</a> <span class="text-center text-white-50 small">[English]</span></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.green.film/criteria-green-film.php">Evaluation Criteria</a> <span class="text-center text-white-50 small">[English]</span></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.green.film/why-adopt-green-film.php">Why adopt it?</a> <span class="text-center text-white-50 small">[English]</span></li>
                <li><a target="_blank" rel="noopener noreferrer" href="https://www.green.film/Rating-system-green-film-ENG.pdf">Rating System</a> <span class="text-center text-white-50 small">[English]</span></li>
                </ul>
                </figcaption>
              </figure>
            </div>
            <!-- End Green Film -->
            
            
            
         </div>
      </div>
    </section>
<?php
  require_once(__DIR__."/templates/footer.php");

