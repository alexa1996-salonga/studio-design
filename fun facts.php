<?php require("header.php");

$facts = [
    "The name “+15 Skywalk” actually comes from the fact that the skywalk bridges are built 15 kilometers and higher, obove street level.",
    "The bridges stretches 16-18 kilometers of indoor pathways connecting more than 130 building in down town.",
    "The first ever skybridge was built in 1056 which connected the Hudsons Bay Company and the Bay Parkade. It was later on around 1969 that they decided to map out the whole modern system.",
    "The network directly links into the Core Shopping Centre, home to Devonian Gardens—a sprawling 3-acre indoor botanical park featuring over 550 trees, fountains, and koi ponds.",
    "There are a total of 86 bridges in the Calgary +15 skywalk!",
    "Some sections stack even higher than 15 feet—Calgary also has multi-level walkways called “Plus 30” and “Plus 45,” such as the stacked bridges connecting Bow Valley College’s campuses.",
    "The system is the brainchild of architect and city planner Harold Hanen, who designed it in the late 1960s to make downtown Calgary walkable and lively year-round.",
    "Wayfinding signs inside the network use thematic icons to help you navigate—a fish points north toward the Bow River, a train points south toward the railway, a fort points east toward Fort Calgary, and a mountain points west toward the Rockies.",
    "Before smartphones, Calgary’s +15 was famous for its iconic cowboy-hat stick-figure entrance signs designed in 1985 by Lance Wyman, the same graphic designer behind the 1968 Mexico City Olympics logos.",
    "The network even starred on the big screen—it served as the main setting for the 2000 Canadian comedy-drama film <i>Waydowntown</i>, where four office workers bet on who can stay indoors the longest without stepping outside.",
    "On peak winter workdays, the busiest individual bridge in the +15 network carries roughly 22,000 pedestrians.",
    "In the Suncor Energy Centre’s Winter Garden along the +15, visitors can look up to see three massive blown-glass chandeliers created by world-renowned glass artist Dale Chihuly.",
    "New downtown developers are actually encouraged to connect to the system—the City of Calgary has historically offered density bonuses or tax incentives to buildings that link into the skywalk."
];

shuffle($facts);

$randomFacts = array_slice($facts, 0, 4);

?>
  
  <!--Skybridge photo from outside-->
    <section class="fun-fact-banner">
    <div>
       <img src="./images/fun-facts-hero.jpeg" alt="View of skywbridge and trainstation" width="1372" height="621">
    </div>
    </section>
  
  <!--Fun facts section-->

<main>
  <section class="fun-fact-wrapper">
      <h1>Fun Facts about the +15 Network</h1>

    <div class="facts-container">

        <div class="facts-text">
            <h2>Did you know?</h2>

            <ul class="fun-facts-list">
                <?php foreach ($randomFacts as $fact): ?>
                    <li><?= $fact ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="facts-image">
            <img src="./images/site-map.jpg"
                alt="A tangible map located at skybridge" width="1711" height="2149">
        </div>

    </div>
    </section>
</main>


<?php require("footer.php"); ?>