<?php

/* Template Name: Nairobi Day */
get_header();

?>


<section class="pages-hero package-det">
      <div class="home-page-slider">
        <img src="<?php bloginfo('template_directory');?>/images//nairobi.jpg" alt="nairobi" class="home-page-img" />
        <img src="<?php bloginfo('template_directory');?>/images//nairobi1.jpg" alt="nairobi" class="home-page-img" />
        <img src="<?php bloginfo('template_directory');?>/images//nairobi2.jpg" alt="nairobi" class="home-page-img" />
        <img src="<?php bloginfo('template_directory');?>/images//nairobi3.jpg" alt="nairobi" class="home-page-img" />
        <img src="<?php bloginfo('template_directory');?>/images//nairobi4.jpg" alt="nairobi" class="home-page-img" />
      </div>
      <div class="home-page-navi">
        <span class="active"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container flex flex-cl">
        <h1>nairobi day trip</h1>
        <span class="days">1 DAY</span>
        <a href="#details" class="hero-btn btn"
          >Read more <i class="fa-solid fa-arrow-down"></i
        ></a>
      </div>
    </section>
    <!-- End Header section -->
    <!-- Start About Section -->
    <section class="details" id="details">
      <img class="bg-img" src="<?php bloginfo('template_directory');?>/images//bg2.png" alt="" />
      <div class="container">
        <h2>ITINERARY</h2>
        <p class="det-top-p">
          Enjoy the exceptional ‘Nairobi Day Trip’ offering the ultimate
          adventure and excitement of game drives and wildlife viewing
          experience. This 1-day tour includes pick-up from your hotel in the
          morning, followed by a full day of Nairobi wildlife tour and drop-off
          at your hotel in the end. The typical tour itinerary is listed as
          follows:
        </p>
        <div class="itinerary">
          <div class="itinerary-content">
            <div class="way">
              <span class="day">day 1</span>
              <h3>
                Nairobi National Park - David Sheldrick Wildlife Trust - Giraffe
                Centre
              </h3>
              <p>
                Our driver-guide reports to your hotel for an early morning
                pickup in your private and comfortable 4x4 Land Cruiser to begin
                the Nairobi Day Tour. Visit Nairobi National Park for your game
                drive and see four members of the incredible Big 5 - lion,
                rhino, leopard and buffalo. The Nairobi National Park is the
                only national park situated in the capital city of Kenya and is
                home to a large and varied wildlife population, including
                African leopards, hyenas, baboons, gazelles, hippopotamus and
                many more.
              </p>
              <p>
                After the game drive, transfer to the David Sheldrick Wildlife
                Trust, where you can watch the adorable baby elephants. The
                wildlife trust is an exceptional rescue center where highly
                trained keepers nurture and care for lost, abandoned and
                orphaned baby elephants of Kenya.
              </p>
              <p>
                Next, visit Giraffe Center, an animal sanctuary dedicated to
                wildlife and environmental conservation of the world’s tallest
                animal. The center offers the most exciting experience of
                closely observing giraffes and feeding them. After visiting the
                final destination - Giraffe Center, transfer back to the hotel.
                You can also choose to visit a nearby eatery or shopping mall.
              </p>
              <h4>End Of Trip</h4>
              <h4>Price Starting From</h4>
              <p>$480 USD for 2 people</p>
            </div>
          </div>
          <div class="form-wrapper">
            <p>
              Fill in your details to book this tour today. Or
              <a href="contact.html" class="contact-btn">Contact us</a> to book
              a specialised tour or for any other enquiries you may have.
            </p>
            <form action="">
              <input type="text" name="name" id="name" placeholder="Name" />
              <input
                type="text"
                name="destination"
                id="destination"
                placeholder="Destination"
              />
              <input
                type="number"
                name="budget"
                id="budget"
                placeholder="Budget (USD)"
              />
              <div class="input-row">
                <input type="text" name="pax" id="pax" placeholder="Pax" />
                <select name="Accomodation" id="accomodation">
                  <option value="" disabled selected hidden>
                    Accomodation
                  </option>
                  <option value="option1">option1</option>
                  <option value="option2">option2</option>
                </select>
              </div>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Email Address"
              />
              <input
                type="tel"
                name="tel"
                id="tel"
                placeholder="Telephone Number"
              />
              <div class="input-row">
                <input
                  type="date"
                  name="start-date"
                  id="start-date"
                  placeholder="Start Date"
                />
                <input
                  type="date"
                  name="end-date"
                  id="end-date"
                  placeholder="End Date"
                />
              </div>
              <button type="submit" class="submit-form">
                <span>send custom tour details</span>
                <span><i class="fa-solid fa-arrow-right"></i></span>
              </button>
              <a href="#" class="whatsapp-btn">
                <span><img src="<?php bloginfo('template_directory');?>/images//whatsapp.png" alt="" /> </span
                ><span>or reach us on whatsapp</span>
              </a>
              <p>
                By booking here you agree to our
                <a href="terms.html" class="terms-link">Terms & Conditions</a>.
              </p>
            </form>
          </div>
        </div>
        <div class="det-down">
          <div class="inclusion">
            <h3>INCLUSIONS</h3>
            <ul>
              <li>Return road transfers as mentioned on the itinerary</li>
              <li>Game drives with an English-speaking guide</li>
              <li>Park entry fee for 2 people</li>
              <li>Park entry fee for the Land Cruiser and driver</li>
              <li>Drinking mineral water</li>
              <li>Safari Boyz merchandise</li>
            </ul>
          </div>
          <div class="inclusion">
            <h3>EXCLUSIONS</h3>
            <ul>
              <li>Travel insurance</li>
              <li>Personal belongings</li>
              <li>Tips and gratuity</li>
              <li>Hard drinks</li>
              <li>Laundry services</li>
              <li>Anything not mentioned on the itinerary</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <!-- Start Popular Packages Section -->
    <section
      class="all-single-packages popular-packages bg-orange"
      id="popular-packages"
    >
      <h2>RELATED TOURS</h2>
      <div class="container">
        <div class="packages flex flex-cl">
          <div class="package-row package-middle">
            <a href="wildebeest.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//wildebeest.jpg" alt="greatlakes" />
              <h3 class="p-txt">
                <span class="title-head"> Witness </span>
                <span class="title">The Great Wildebeest Migration</span>
              </h3>
              <div class="overlay"></div>
            </a>
            <a href="nairobiDay.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//nairobi.jpg" alt="nairobi" />
              <h3 class="p-txt">
                <span class="title-head"> Enjoy </span>
                <span class="title">Nairobi Day Trip</span>
              </h3>
              <div class="overlay"></div>
            </a>
          </div>
          <div class="package-row">
            <a href="olPejeta.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//olPejeta.jpg" alt="olPejeta" />
              <h3 class="p-txt">
                <span class="title-head"> Explore </span>
                <span class="title"> ol pejeta </span>
              </h3>
              <div class="overlay"></div>
            </a>
            <a href="mountKilimanjaro.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//kilimanjaro.jpg" alt="kilimanjaro" />
              <h3 class="p-txt">
                <span class="title-head"> Conquer </span>
                <span class="title">Mount Kilimanjaro</span>
              </h3>
              <div class="overlay"></div>
            </a>
            <a href="mountKenya.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//mount-kenya.jpeg" alt="package-1" />
              <h3 class="p-txt">
                <span class="title-head"> Climb </span>
                <span class="title">Mount Kenya</span>
              </h3>
              <div class="overlay"></div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Popular Packages Section -->

    <script src="js/main.js"></script>

<?php get_footer();?>
