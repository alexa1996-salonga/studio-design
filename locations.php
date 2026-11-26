<?php require("header.php"); ?>
  
<!--Plus 15 map-->
<main>
      <!-- Your existing map image (add class="map-clickable") -->
    <img 
        src="./images/SkyScrape-Maps/Maps_SkyScrape.png" 
        alt="Calgary +15 Treasure Hunt Network Map" 
        class="map-clickable"
        id="skywalk-map"
        width="5780" height="3300"
    >

    <!-- Full-Screen Lightbox Overlay -->
    <div id="map-lightbox" class="lightbox-overlay" aria-hidden="true">
        <button type="button" id="close-lightbox" class="lightbox-close" aria-label="Close full-screen map">&times;</button>
        <img id="lightbox-img" src="" alt="Full screen Calgary +15 Map">
    </div>


    <h1>Operating Hours</h1>

<!--Operating Hours-->
  <div class="operating-hours-wrapper">
    <section class="operating-hours-container">
      <div class="operating-hours-image">
        <img src="./temp/operating-hours.jpg" alt="Plus 15 Network Hours" class="img-vertical">
        <img src="./temp/operating-hours_horizontal.jpg" alt="Plus 15 Network Hours" width="3024" height="2010" class="img-horizontal">
      </div>

      <div class="operating-hours-text">
        <h2>Plus 15 Network Hours</h2>
        <p class="subtitle">Plan your visit through Calgary's indoor walkway</p>
        <ul>
          <li><strong>Weekdays:</strong> 6 AM – 9 PM</li>
          <li><strong>Weekends & Statutory Holidays:</strong> 9 AM – 7 PM</li>
          <li>Access to the Plus 15 Network will be closed on <br> December 25 (Christmas Day).</li>
        </ul>
        <p><b>Note: These operating hours are subject to change and some bridges may have shorter hours or close on weekends and statutory holidays.</b><br><br>
        <i>Visit <a href="https://www.calgary.ca/bike-walk-roll/plus-15-network.html" target="_blank" rel="noopener noreferrer">Calgary's official website </a> for construction & closure alerts <br> and other up-to-date information.</i></p>
      </div>
    </section>
  </div>

<!--Free Fare Zone Info-->
     <section class="free-fare-section">
        <h3>Free fare Zone</h3>

        <div>
          <img src="./images/train-station-freefare.jpeg" alt="Approaching Train in the train station" width="1376" height="768">
        </div>

        <div>
        <p>Along the the Calgary C-train route in downtown, there is a free fare zone. This zone typically stretches 2.5 kilometers from 7th avenue to City Hall station. The free fare zone allows citizens to travel along those stations without needing to pay any fees to ride on board the train.  However, this only applies to those starting and ending within said stations.</p>
        </div>
      </section>


<!--Stations to Explore-->
   <section class="stations-container">
        <h2 class="station-title">Stations to Explore</h2>
        
        <div class="stations-grid">
        <!-- Card 1 -->
        <div class="station-card">
        <div class="image-wrapper">
           <img src="./temp/8th-station-fountain.jpg" alt="8th SW Skywalk Bridge" width="4032" height="3024">
        </div>
        <a href="stations.php" class="a_button_style">8th SW</a>
        </div>

        <!-- Card 2 -->
        <div class="station-card">
        <div class="image-wrapper">
             <img src="./temp/3rd-station-spirit-of-land.jpg" alt="3rd SW Skywalk Bridge" width="4032" height="3024">
        </div>
        <a href="3rdstation.php" class="a_button_style">3rd SW</a>
        </div>

        <!-- Card 3 -->
        <div class="station-card">
        <div class="image-wrapper">
              <img src="./temp/city-hall-Calgary-Municipal-Building.jpg" alt="City Hall Skywalk Bridge" width="900" height="900">
        </div>
        <a href="cityhall.php" class="a_button_style">City Hall</a>
        </div>
        </div>
     </section>
  </main>
<?php require("footer.php"); ?>