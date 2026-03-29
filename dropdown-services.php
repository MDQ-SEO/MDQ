<style>
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content-service {
    display: none;
    position: absolute;
    width: 60vw;
    z-index: 1;
    margin-left: -320px;
    opacity: 0.92;
    background-color: #1C46A8 !important;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #081A48;
    color: white !important;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .nav_pills {
    background-color: white !important;
    padding: 30px 0px 30px 20px !important;
    height: 100%;
  }

  .nav-pills .nav-link-service.active,
  .nav-pills .show>.nav-link {
    background-color: #1C46A8 !important;
    color: white !important;
    border-radius: 10px 0px 0px 10px !important;
  }

  .nav-link-service {
    transition: none !important;
    color: #081A48 !important;
    height: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    padding: 13px 35px !important;
    margin: 10px 0px 10px 10px;
  }

  .industry-content {
    margin-top: 5px;
    margin-bottom: 5px;
    color: white;
    margin-right: 10px !important;
  }

  @media (max-width:1190px) and (min-width:992px) {
    .dropdown-content-service {
      width: 80vw !important;
    }

  }

  @media (max-width:991px) and (min-width:720px) {
    .dropdown-content-service {
      width: 80vw !important;
      margin-left: 0px !important;
    }

  }

  @media (max-width:719px) {
    .dropdown-content-service {
      width: 96vw !important;
      margin-left: -0px !important;
    }

    .mobile-wrap {
      height: 330px !important;
      overflow-y: auto !important;
    }
  }

  /* @media (max-width:580px){
  .mobile-wrap{
min-height: 100px !important;
}} */
</style>

<body>
  <div class="dropdown-content dropdown-content-service">
    <div class="background-adjust" style="opacity:1 !important; padding-top:6.5px"></div>
    <div class="d-flex align-items-start" style=" width:100% !important; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
      <div class="nav flex-column nav-pills nav_pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link nav-link-service active" id="v-pills-Industry-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Industry" type="button" role="tab" aria-controls="v-pills-Industry" aria-selected="true">Industry</button>
        <button class="nav-link nav-link-service" id="v-pills-Offering-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Offering" type="button" role="tab" aria-controls="v-pills-Offering" aria-selected="false">Offering</button>
        <button class="nav-link nav-link-service" id="v-pills-Models-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Models" type="button" role="tab" aria-controls="v-pills-Models" aria-selected="false">Models</button>
        <button class="nav-link nav-link-service" id="v-pills-trending-tab" data-bs-toggle="pill" data-bs-target="#v-pills-trending" type="button" role="tab" aria-controls="v-pills-trending" aria-selected="false">Trending</button>
      </div>
      <div class="tab-content" id="v-pills-tabContent" style="width:100%;">
        <div class="tab-pane fade show active" id="v-pills-Industry" role="tabpanel" aria-labelledby="v-pills-Industry-tab">
          <div class="row mobile-wrap">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p class="industry-content"><a href="./industry-e-commerce.php"><img style="margin-top: -5px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/device-shop.png" alt="device-shop" />&nbsp;&nbsp; E-Commerce</a></p>
              <p class="industry-content"><a href="./industry-education.php"><img style="margin-top: -2px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/online-group-studying.png" alt="online-group-studying" />&nbsp;&nbsp; Education & E-Learning</a></p>
              <p class="industry-content"><a href="./industry-electric-vechicle.php"><img style="margin-top: -2px;" width="25" height="25" src="https://img.icons8.com/glyph-neue/640/ffffff/electric-bike.png" alt="electric-bike" />&nbsp;&nbsp; Electric Vechicle</a></p>
              <p class="industry-content"><a href="./industry-iot.php"><img style="margin-top: -2px;" width="25" height="25" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/640/ffffff/external-iot-mobile-app-development-solid-solidglyph-m-oki-orlando.png" alt="external-iot-mobile-app-development-solid-solidglyph-m-oki-orlando" />&nbsp;&nbsp; IoT Apps</a></p>
              <p class="industry-content"><a href="./industry-manufacture.php"><img style="margin-top: -5px;" width="25" height="25" src="https://img.icons8.com/sf-regular-filled/150/ffffff/factory.png" alt="factory" />&nbsp;&nbsp; Manufacture</a></p>
              <p class="industry-content"><a href="./industry-healthcare.php"><img style="margin-top: -5px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/trust--v1.png" alt="trust--v1" />&nbsp;&nbsp; Healthcare</a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">

              <p class="industry-content"><a href="./industry-logistics.php"><img style="margin-top: -7px;" width="23" height="23" src="https://img.icons8.com/pastel-glyph/640/ffffff/transport--delivery--logistics--cargo--parcel--box--service-28.png" alt="transport--delivery--logistics--cargo--parcel--box--service-28" />&nbsp;&nbsp; Logistics & Distribution</a></p>
              <p class="industry-content"><a href="./industry-realestate.php"><img style="margin-top: -5px;margin-left: -4px;" width="25" height="25" src="https://img.icons8.com/external-yogi-aprelliyanto-glyph-yogi-aprelliyanto/320/ffffff/external-house-real-estate-yogi-aprelliyanto-glyph-yogi-aprelliyanto.png" alt="external-house-real-estate-yogi-aprelliyanto-glyph-yogi-aprelliyanto" />&nbsp;&nbsp; Real Estate</a></p>
              <p class="industry-content"><a href="./industry-retail.php"><img width="25" height="25" style="margin-top: -5px;" src="https://img.icons8.com/ios-glyphs/500/ffffff/grocery-store.png" alt="grocery-store" />&nbsp;&nbsp; Retail</a></p>
              <p class="industry-content"><a href="./industry-travel.php"><img width="23" height="23" style="margin-right: -2px;" src="https://img.icons8.com/ios-filled/500/ffffff/wedding-travel.png" alt="wedding-travel" />&nbsp;&nbsp; Travel & Hospitality</a></p>
              <p class="industry-content"><a href="./industry-media.php"><img width="25" height="25" style="margin-top: -5px;" src="https://img.icons8.com/ios-filled/500/ffffff/popcorn-time.png" alt="popcorn-time" />&nbsp;&nbsp; Media & Entertainment</a></p>
              <p class="industry-content"><a href="./industry-oil.php"><img width="23" height="23" style="margin-top: -3px;" src="https://img.icons8.com/ios-filled/500/ffffff/oil-industry.png" alt="oil-industry" />&nbsp;&nbsp; Oil & Gas</a></p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-Offering" role="tabpanel" aria-labelledby="v-pills-Offering-tab">
          <div class="row mobile-wrap">
            <div class="col-lg-6">
              <p class="industry-content"><a href="./offering-ar-vr.php"><img style="margin-top:-5px;" width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/oculus-rift.png" alt="oculus-rift" />&nbsp;&nbsp; AR/VR App Development</a></p>
              <p class="industry-content"><a href="./offering-it-consulting.php"><img style="margin-top:-5px;" width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/it.png" alt="it" />&nbsp;&nbsp; IT Consulting Services</a></p>
              <p class="industry-content"><a href="./offering-web-application.php"><img width="23" height="23" src="https://img.icons8.com/ios-filled/500/ffffff/google-code.png" alt="google-code" />&nbsp;&nbsp; Website Development</a></p>
              <p class="industry-content"><a href="./offering-mobile-app.php"><img width="25" height="25" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/600/ffffff/external-mobile-front-end-mobile-app-development-solid-solidglyph-m-oki-orlando.png" alt="external-mobile-front-end-mobile-app-development-solid-solidglyph-m-oki-orlando" />&nbsp;&nbsp; Mobile App Development</a></p>
              <p class="industry-content"><a href="./offering-front-end.php"><img width="23" height="23" src="https://img.icons8.com/ios-filled/500/ffffff/google-code.png" alt="google-code" />&nbsp;&nbsp; Front End Development</a></p>
            </div>
            <div class="col-lg-6">
              <p class="industry-content"><a href="./offerings-microsoft.php"><img style="margin-top:-5px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/microsoft.png" alt="microsoft" />&nbsp;&nbsp; Microsoft Development</a></p>
              <p class="industry-content"><a href="./offerings-hire-dedicated.php"><img width="25" height="25" src="https://img.icons8.com/fluency-systems-filled/960/ffffff/hire-me.png" alt="hire-me" />&nbsp;&nbsp; Hire Dedicated Developers</a></p>
              <p class="industry-content"><a href="./offerings-product-prototyping.php"><img style="margin-top:-4px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/prototype.png" alt="prototype" />&nbsp;&nbsp; Product Prototyping</a></p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-Models" role="tabpanel" aria-labelledby="v-pills-Models-tab">
          <div class="row">
            <div class="col-lg-6">
              <p class="industry-content"><a href="./models-delivery.php"><img style="margin-top:-4px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/in-transit.png" alt="in-transit" />&nbsp;&nbsp; Delivery Models</a></p>
              <p class="industry-content"><a href="./models-engagement.php"><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/people-working-together.png" alt="people-working-together" />&nbsp;&nbsp; Engagement Models</a></p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-trending" role="tabpanel" aria-labelledby="v-pills-trending-tab">
          <div class="row">
            <div class="col-lg-6">
              <p class="industry-content"><a href="./services-trending-chatbot.php"><img style="margin-top:-4px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/message-bot.png" alt="message-bot" />&nbsp;&nbsp; ChatBOT</a></p>
              <p class="industry-content"><a href="./services-trending-ai-ml.php"><img width="23" height="23" src="https://img.icons8.com/ios-filled/600/ffffff/artificial-intelligence.png" alt="artificial-intelligence" />&nbsp;&nbsp; AI / ML</a></p>
              <p class="industry-content"><a href="./services-trending-blockchain.php"><img style="margin-top:-2px;" width="23" height="23" src="https://img.icons8.com/ios-filled/500/ffffff/blockchain-technology.png" alt="blockchain-technology" />&nbsp;&nbsp; BlockChain</a></p>
              <p class="industry-content"><a href="./digital-marketing-company-in-india-chennai.php"><img width="22" height="22" src="https://img.icons8.com/pastel-glyph/104/ffffff/web-marketing--v1.png" alt="web-marketing--v1"/>&nbsp;&nbsp; Digital Marketting</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>