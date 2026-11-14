<?php require("header.php");

  $skywalk_quotes = [
      "A city above a city, where the streets are made of light and the sky is just an arm's length away.",
      "Sixteen kilometres of glass and steel, keeping Calgary connected through every season.",
      "Fifteen feet above the bustle, where winter fades and the city moves indoors.",
      "Bridging towers, gardens, and daily journeys high above the downtown streets.",
      "A hidden world of warmth and connection, where the city breathes in a different rhythm.",
      "Where the skyline meets the skywalk, and every step is a journey through Calgary's heart.",
      "A network of bridges that turns the city into a labyrinth of light and life.",
      "From office towers to shopping havens, the +15 is Calgary's elevated artery."
    ];
  $random_quote = $skywalk_quotes[array_rand($skywalk_quotes)];

?>

<!--Photo and Intro-->
  <div class="video-header">
    <video autoplay muted loop playsinline>
          <source src="./temp/skywalk_video_1.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
    </video>
  </div>

<main>
  <section class="intro-section">
    <div class="intro-image">
      <img src="./temp/intro-skywalk.jpg" alt="Outside view of Calgary's +15 Skywalk bridge at Stephen Avenue">
    </div>

    <div class="intro-text">
    <h1>Calgary's +15 Skywalk</h1>
    <p class="subtitle">World's most extensive indoor pedestrian skywalk network</p>
    <p>The Calgary Plus 15 is a massive indoor bridging system running throughout the heart of downtown. Named for being situated exactly 15 feet above street level, this architectural network features 86 climate-controlled bridges that connect office towers, shopping centres, food courts, and public transit.</p>

    <p>Built to shield citizens from Calgary's harsh winter weather, it provides an accessible, vibrant indoor ecosystem far away from the bustling traffic below. Whether you are a daily commuter, a tourist, or a local exploring downtown, this website is your ultimate guide to navigating Calgary's historic <q>hidden gem</q>.</p>

    <p>Spanning over 16 kilometres across more than 100 buildings, the walkway connects iconic landmarks like the <i>CORE Shopping Centre, Bankers Hall, and the Calgary Tower</i>. Along the way, visitors can discover indoor botanical gardens, rotating public art installations, and cozy cafes without ever stepping outside.</p>
  </div>
  </section>

<!--Stations to Explore-->
   <section class="stations-container">
        <h2 class="station-title">Stations to Explore</h2>
        
        <div class="stations-grid">
        <!-- Card 1 -->
        <div class="station-card">
        <div class="image-wrapper">
           <img src="./temp/8th-station-fountain.jpg" alt="8th SW Skywalk Bridge">
        </div>
        <a href="stations.php" class="a_button_style">8th SW</a>
        </div>

        <!-- Card 2 -->
        <div class="station-card">
        <div class="image-wrapper">
             <img src="./temp/3rd-station-spirit-of-land.jpeg" alt="3rd SW Skywalk Bridge">
        </div>
        <a href="3rdstation.php" class="a_button_style">3rd SW</a>
        </div>

        <!-- Card 3 -->
        <div class="station-card">
        <div class="image-wrapper">
              <img src="./temp/city-hall-Calgary-Municipal-Building.jpg" alt="City Hall Skywalk Bridge">
        </div>
        <a href="cityhall.php" class="a_button_style">City Hall</a>
        </div>
        </div>
     </section>

<!--Quote that changes every refresh-->
<section class="quote-banner">
  <!-- Replace with your own ./temp/skywalk-icon.png or keep this SVG -->
  <div class="banner-icon">
      <img src="./temp/quote-icon.svg" alt="Outside view of Calgary's +15 Skywalk bridge at Stephen Avenue">
    </div>

  <blockquote class="quote-text">
    <?php echo htmlspecialchars($random_quote); ?>
  </blockquote>
</section>

<!--Operating Hours-->

     <section class="index-last-font">
        <h2>Plus 15 Network Hours:</h2>
        <ul>
          <li>Weekdays: 6 AM - 10 PM</li>
          <li>Weekends & Statutory Holidays: 9 AM - 7 PM</li>
          <li>Access to the Plus 15 Network will be closed on December 25 (Christmas Day)</li>
        </ul>
     </section>
</main>


<?php require("footer.php"); ?>
    
