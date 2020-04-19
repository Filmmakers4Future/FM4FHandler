<?php
  define("FFF_PAGENAME",    "Demands");
  define("FFF_DESCRIPTION", "The demands of Filmmakers for Future for a greener film industry.");
  require_once(__DIR__."/templates/header.php");
?>
    <!-- Header Section -->
    <section class="header-section bg-primary">
      <div class="container">
        <h2 class="text-center text-white mt-0"><?= html(FFF_PAGENAME) ?></h2>
        <h5 class="text-white mt-0 text-center">#Filmmakers4Future - Filmmakers for Future</h5>
        <h6 class="text-white-50 mt-0 text-center">(Last update: <?= date("j F Y", filemtime(__FILE__)) ?>)</h6>
        <br>
        <h6 class="text-white-50 text-center">The demands are work in progress. Want to help finish them? Join our <a href="/participate">working groups</a>.</h6>
      </div>
    </section>

    <!-- <?= html(FFF_PAGENAME) ?> Section -->
    <section class="page-section bg-dark text-left">
      <div class="container">
        <h2 class="text-white-75">Laws and regulations</h2>
        <h5 class="text-white-50">Public funding</h5>
        <p class="text-white mt-0">In a lot of countries the film industry is heavily dependent on public funding. Politicians must therefore impose much stricter requirements on productions and broadcasters that want to receive funding from a given state. Budgeting money for an environmentally friendly workflow must not only be recognized as an expense but must become an absolute necessity in obtaining any public funds at all.</p>
        <h5 class="text-white-50">Strenghten regional funding</h5>
        <p class="text-white mt-0">Many low and medium budget feature film projects require the support of several regional funds, resulting in the necessarity of filming in all of those regions. Compared to VoD and broadcaster produced projects, those productions have a huge disadvantage in their carbon-dioxide footprint. Smaller funds need to invest more money in less projects, in order to avoid funding tourism.</p>
        <h5 class="text-white-50">Technical innovations</h5>
        <p class="text-white mt-0">The development of climate-friendly technical innovations is expensive. Compared to other industries, the film industry is a niche market and our suppliers and rental houses will have to make major investments in the coming years in order to develop these technologies and supply the market. This will most likely lead to higher rental prices, which the producers want to avoid – suppliers who are willing to invest and develop these innovations will have difficulty selling them to rental companies because they are afraid they will not be able to rent them out as they will be more expensive, leading to financial problems.<br>In order to strenghten sustainable suppliers, we need to offer them funding or tax measurements to recognize their investment and secure their existence. At the very least, we must create a viable market for new green technologies by regulating the <span class="font-weight-light">(momentarily)</span> cheaper and climate-damaging alternatives.</p>
        <h4 class="text-white-50">In a nutshell</h4>
        <p class="text-white mt-0">Social and ecological aspects must be taken into account in media productions to the same extent as financial and artistic criteria. We want to persuade politicians to change the legal framework. We need laws and regulations that on the one hand create incentives for innovation and on the other hand define binding standards to make their implementation possible.</p>
      </div>
    </section>
    <section class="page-section bg-primary text-right">
      <div class="container">
        <h2 class="text-white-75">Adjust the mindset towards protecting the environment</h2>
        <p class="text-white mt-0">While talking to people on set we realized that the different departments quite often have very good ideas on how to improve the sustainability of a production. Sadly most of the time they are encouraged to go the environmentally harmful route by their superiors because it seems cheaper, less complicated or has always been done that way. Harmful actions are also done out of pure routine and not giving it another thought. Like using a 140 KVA gasoline generator to charge some batteries instead of asking the restaurant nearby for a socket. Doing that would not only be a lot cheaper but also much better for our planet. The main purpose of the public signature list therefore is to increase the pressure on productions to rethink, and instead of the simple route, always follow the one best for the environment. It also allows us to see who we can join forces with, to make a production rethink their position.</p>
      </div>
    </section>
<?php
  require_once(__DIR__."/templates/footer.php");

