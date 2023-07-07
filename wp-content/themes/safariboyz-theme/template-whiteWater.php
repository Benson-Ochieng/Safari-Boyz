<?php

/* Template Name: White Water */
get_header();

?>


<section class="pages-hero package-det">
      <div class="home-page-slider">
        <img
          src="<?php bloginfo('template_directory');?>/images//whitewater.jpeg"
          alt="whitewater"
          class="home-page-img"
        />
        <img
          src="<?php bloginfo('template_directory');?>/images//whitewater1.jpg"
          alt="whitewater"
          class="home-page-img"
        />
        <img
          src="<?php bloginfo('template_directory');?>/images//whitewater2.jpg"
          alt="whitewater"
          class="home-page-img"
        />
        <img
          src="<?php bloginfo('template_directory');?>/images//whitewater3.png"
          alt="whitewater"
          class="home-page-img"
        />
        <img
          src="<?php bloginfo('template_directory');?>/images//whitewater4.png"
          alt="whitewater"
          class="home-page-img"
        />
      </div>
      <div class="home-page-navi">
        <span class="active"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container flex flex-cl">
        <h1>white water rafting adventure</h1>
        <span class="days">3 DAYS</span>
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
          Enjoy the phenomenal 3-day ‘White Water Rafting’ adventure tour,
          offering an adrenaline-raising rafting experience in the longest river
          in the world- the Nile. This tour starts and ends at Kampala city and
          includes a road transfer from Entebbe International Airport to Jinja
          and back to the airport. The typical safari itinerary is listed as
          follows:
        </p>
        <div class="itinerary">
          <div class="itinerary-content">
            <div class="way">
              <span class="day">day 1</span>
              <h3>Entebbe International Airport - Jinja</h3>
              <p>
                Have breakfast in the morning and get ready for your departure
                to Jinja. Your driver guide picks you up for a road transfer to
                Jinja, a fascinating city full of attractions and adventurous
                activities like river rafting, boating, nature walks, and
                sightseeing. On your way to Jinja, you will stop at the
                Namawojjolo market to enjoy the roadside delicacies of Uganda.
                Reach Jinja, and check in at your hotel for a delicious lunch
                and enjoy the gorgeous sunset at the hotel.
              </p>
              <p>
                Road Transfer From Entebbe International Airport To Jinja <br />
                Time: <span class="travel-time">45 minutes</span> <br />
                Distance: <span class="travel-time">80 km</span> <br />
                Road Terrain: <span class="travel-time">Tarmac</span>
              </p>
              <h4>Accommodation At:</h4>
              <p>Nile Front Cottages</p>
              <p>Meal Plan: Full board</p>
            </div>
            <div class="way">
              <span class="day">day 2</span>
              <h3>White Water Rafting At The Nile</h3>
              <p>
                Have breakfast in the morning and depart for whitewater rafting
                along the Nile River. It starts with an orientation about safety
                and instructions and then you proceed to the river for the most
                exciting ride of your life. The whitewater rapids near Jinja are
                some of the best in the world. With a grade 5 classification,
                this section of the Nile River is known for its obstacles,
                drops, steep inclines, islands and waves. As you see the rapids
                ahead in your rafting adventure, feel the excitement and the
                beginning of an adrenaline rush.
              </p>
              <p>
                Have lunch on an island river and in the evening and head for a
                sunset cruise along the Nile River. The river boat cruise is the
                best way to enjoy a few relaxing hours on the river Nile with
                amazing company, great food and drinks. After an adventurous
                day, head back to the hotel for an overnight stay.
              </p>
            </div>
            <div class="way">
              <span class="day">day 3</span>
              <h3>Jinja - Entebbe International Airport</h3>
              <p>
                Wake up in the morning and have breakfast. Depart for Kampala
                where lunch will be served and then road transfer to Entebbe
                International Airport for your flight back home.
              </p>
              <h4>End Of Trip</h4>
              <h4>Price Starting From</h4>
              <p>$1,360 USD for 2 people</p>
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
              <li>Accommodation and meals as per itinerary</li>
              <li>Transportation</li>
              <li>Boat to the source of the Nile River</li>
              <li>Entrance fees</li>
              <li>Driver allowances</li>
            </ul>
          </div>
          <div class="inclusion">
            <h3>EXCLUSIONS</h3>
            <ul>
              <li>
                Expenses of personal nature like activities not included in the
                package
              </li>
              <li>Air fare</li>
              <li>Visa</li>
              <li>Drinks</li>
              <li>Laundry</li>
              <li>Tips to local guides</li>
              <li>Telephone</li>
              <li>Porter fee while trekking</li>
              <li>Personal insurance</li>
              <li>Personal shopping bills</li>
              <li>Cigarettes</li>
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
            <a href="ultimateAdventure.html" class="package">
              <img
                src="<?php bloginfo('template_directory');?>/images//ultimateadvanture.jpeg"
                alt="ultimateadvanture"
              />
              <h3 class="p-txt">
                <span class="title-head"> Ultimate </span>
                <span class="title">Uganda Adventure</span>
              </h3>
              <div class="overlay"></div>
            </a>
            <a href="ugandaGorilas.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//ugandagorillas.jpeg" alt="ugandagorillas" />
              <h3 class="p-txt">
                <span class="title-head"> Adventure </span>
                <span class="title">Gorilla Trekking</span>
              </h3>
              <div class="overlay"></div>
            </a>
          </div>
          <div class="package-row">
            <a href="ugandaWildLife21.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//ugandawildlife21.jpeg" alt="ugandawildlife21" />
              <h3 class="p-txt">
                <span class="title-head"> Unforgettable </span>
                <span class="title">Wildlife and Nature</span>
              </h3>
              <div class="overlay"></div>
            </a>
            <a href="ugandaWildLife.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//ugandawildlife.jpeg" alt="ugandawildlife" />
              <h3 class="p-txt">
                <span class="title-head"> Explore </span>
                <span class="title">Uganda’s National Parks</span>
              </h3>
              <div class="overlay"></div>
            </a>
            <a href="bestUganda.html" class="package">
              <img src="<?php bloginfo('template_directory');?>/images//bestofuganda.jpeg" alt="bestofuganda" />

              <h3 class="p-txt">
                <span class="title-head"> Best of </span>
                <span class="title">Uganda </span>
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
