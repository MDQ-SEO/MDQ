<style>
        .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content-tech {
    display: none;
    position: absolute;
    width: 67vw;
    z-index: 1;
    margin-left: -480px !important;
    opacity: 0.92;
    background-color:#1C46A8 !important;
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
  .nav-pills-tech{
    background-color: white !important;
    padding: 35px 0px 35px 20px !important;
    height: 100%;
  }
  .nav-pills .nav-link-tech.active,.nav-pills .show > .nav-link{
    background-color:#1C46A8 !important;
    color: white !important;
    border-radius: 10px 0px 0px 10px !important;
  }
  .nav-link-tech{
    transition: none !important;
    color: #081A48 !important;
    height: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    width:10vw !important;
    height: 50px !important;
    margin: 10px 0px 10px 10px !important;
  }
  .industry-content{
    margin-top: 5px;
    margin-bottom: 5px;
    color: white;
  }
  @media (max-width:1150px) and (min-width:991px){

  .nav-link-tech{
    width: 18vh !important;
    margin: 0px !important;
  }

}
  @media (max-width:991px) and (min-width:720px){
  .dropdown-content-tech {
    width: 80vw !important;
    margin-left: 0px !important;
  }
  .nav-link-tech{
    width: 18vh !important;
    margin: 0px !important;
  }
  .nav-pills-tech{
    padding: 80px 0px 35px 20px !important;
  }
}

@media (max-width:719px){
  .dropdown-content-tech {
    width: 96vw !important;
    margin-left: -0px !important;
  }
  .nav-link-tech{
    width: 15vh !important;
    margin: 0px !important;
  }
  .mobile-wrap{
height: 330px !important;
overflow-y: auto !important;
}
.nav-pills-tech{
  height: 350px !important;
}
.nav-pills-tech{
    padding: 80px 0px 35px 20px !important;
  }
}

</style>
<body>
<div class="dropdown-content dropdown-content-tech">
<div class="background-adjust" style="opacity:1 !important; padding-top:6.5px"></div>
<div class="d-flex align-items-start" style=" width:100% !important;box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
  <div class="nav flex-column nav-pills nav-pills-tech me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link nav-link-tech active" id="v-pills-programming-tab" data-bs-toggle="pill" data-bs-target="#v-pills-programming" type="button" role="tab" aria-controls="v-pills-programming" aria-selected="true">Programming</button>
    <button class="nav-link nav-link-tech" id="v-pills-Trending-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Trending" type="button" role="tab" aria-controls="v-pills-Trending" aria-selected="false">Trending</button>
    <button class="nav-link nav-link-tech" id="v-pills-platform-tab" data-bs-toggle="pill" data-bs-target="#v-pills-platform" type="button" role="tab" aria-controls="v-pills-platform" aria-selected="false">Platform</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="width:100%;">
    <div class="tab-pane fade show active" id="v-pills-programming" role="tabpanel" aria-labelledby="v-pills-programming-tab" >
    <div class="row mobile-wrap">
        <div class="col-lg-4 col-md-4 col-sm-6">
        <p class="industry-content"><a href="./program-react.php"><img style="margin-top:-5px;"  width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/1000/ffffff/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="java-coffee-cup-logo--v1" />&nbsp;&nbsp; React JS</a></p>
        <p class="industry-content"><a href="./program-java.php"><img style="margin-top:-7px;" width="25" height="25" src="https://img.icons8.com/ios/500/ffffff/java-coffee-cup-logo--v1.png" alt="java-coffee-cup-logo--v1" />&nbsp;&nbsp; Java</a></p>
        <p class="industry-content"><a href="./program-python.php"><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/python.png" alt="python"/>&nbsp;&nbsp; Python</a></p>
        <p class="industry-content"><a href="./program-php.php"><img width="25" height="25" src="https://img.icons8.com/nolan/1000/ffffff/php-elephant.png" alt="java-coffee-cup-logo--v1" />&nbsp;&nbsp; PHP</a></p>
        <p class="industry-content"><a href="./program-javascript.php"><img style="margin-top: -1px;" width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/javascript-logo.png" alt="javascript-logo"/>&nbsp;&nbsp; JavaScript</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
        <p class="industry-content"><a href="./program-reactnative.php"><img style="margin-top:-5px;"  width="25" height="25" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/1000/ffffff/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="java-coffee-cup-logo--v1" />&nbsp;&nbsp; React Native</a></p>
        <p class="industry-content"><a href="./program-nodejs.php"><img style="margin-top:-3px;" width="25" height="25" src="https://img.icons8.com/windows/200/ffffff/node-js.png" alt="node-js" />&nbsp;&nbsp; Node.js</a></p>
        <p class="industry-content"><a href="./program-laravel.php"><img style="margin-top:-5px;" width="20" height="20" src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/500/ffffff/external-laravel-is-a-free-open-source-php-web-framework-logo-bold-tal-revivo.png" alt="external-laravel-is-a-free-open-source-php-web-framework-logo-bold-tal-revivo"/>&nbsp;&nbsp;&nbsp; Laravel</a></p>
        <p class="industry-content"><a href="./program-flutter.php"><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/flutter.png" alt="flutter"/>&nbsp;&nbsp; Flutter</a></p>
        <p class="industry-content"><a href="./program-kotlin.php"><img style="margin-top:-3px;" width="25" height="25" src="https://img.icons8.com/material-rounded/960/ffffff/kotlin.png" alt="kotlin"/>&nbsp;&nbsp; Kotlin</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
        <p class="industry-content"><a href="./program-angular.php"><img style="margin-top:-3px;" width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/angularjs.png" alt="angularjs"/>&nbsp;&nbsp; Angular JS / TS</a></p>
        <p class="industry-content"><a href="./program-csharp.php"><img style="margin-top:-3px;" width="25" height="25" src="https://img.icons8.com/ios-filled/700/ffffff/c-sharp-logo.png" alt="c-sharp-logo"/>&nbsp;&nbsp; C Sharp</a></p>
        <p class="industry-content"><a href="./program-swift.php"><img style="margin-top:-3px;" width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/swift.png" alt="swift"/>&nbsp;&nbsp; Swift</a></p>
        <p class="industry-content"><a href="./program-objective-c.php"><img width="25" height="25" src="https://img.icons8.com/external-flat-icons-inmotus-design/670/ffffff/external-c-calculator-flat-icons-inmotus-design.png" alt="external-c-calculator-flat-icons-inmotus-design"/>&nbsp;&nbsp; Objective-C</a></p>
        <p class="industry-content"><a href="./program-asp.net.php"><img width="25" height="25" src="https://img.icons8.com/material-outlined/960/ffffff/asp.png" alt="asp"/>&nbsp;&nbsp;.NET</a></p>

        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-Trending" role="tabpanel" aria-labelledby="v-pills-Trending-tab">
    <div class="row mobile-wrap">
        <div class="col-lg-6">
        <p class="industry-content"><a href="./trending-virtual-reality.php"><img width="27" height="27" src="https://img.icons8.com/sf-black-filled/640/ffffff/virtual-reality.png" alt="virtual-reality"/>&nbsp;&nbsp; Virtual Reality (VR)</a></p>
        <p class="industry-content"><a href="./trending-cloud.php"><img width="23" height="23" src="https://img.icons8.com/ios-glyphs/300/ffffff/cloud.png" alt="cloud"/>&nbsp;&nbsp; Cloud</a></p>
        <p class="industry-content"><a href="./trending-bigdata.php"><img width="25" height="25" src="https://img.icons8.com/external-sbts2018-solid-sbts2018/580/ffffff/external-big-data-basic-ui-elements-2.4-sbts2018-solid-sbts2018.png" alt="external-big-data-basic-ui-elements-2.4-sbts2018-solid-sbts2018"/>&nbsp;&nbsp; Big Data</a></p>
        <p class="industry-content"><a href="./trending-data-science.php"><img width="25" height="25" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/640/ffffff/external-data-science-programming-solid-solidglyph-m-oki-orlando.png" alt="external-data-science-programming-solid-solidglyph-m-oki-orlando"/>&nbsp;&nbsp; Data Science</a></p>
        </div>
        <div class="col-lg-6">
        <p class="industry-content"><a href="./trending-artificial-intelligence.php"><img width="23" height="23" src="https://img.icons8.com/ios-filled/600/ffffff/artificial-intelligence.png" alt="artificial-intelligence"/>&nbsp;&nbsp; Artificial Intelligence</a></p>
        <p class="industry-content"><a href="./trending-blockchain.php"><img style="margin-top:-2px;"width="23" height="23" src="https://img.icons8.com/ios-filled/500/ffffff/blockchain-technology.png" alt="blockchain-technology"/>&nbsp;&nbsp; Blockchain</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-platform" role="tabpanel" aria-labelledby="v-pills-platform-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href="./platform-microsoft.php"><img style="margin-top:-5px;" width="25" height="25" src="https://img.icons8.com/ios-glyphs/300/ffffff/microsoft.png" alt="microsoft"/>&nbsp;&nbsp; Microsoft</a></p>
        <p class="industry-content"><a href="./platform-amazon.php"><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/amazon.png" alt="amazon"/>&nbsp;&nbsp; Amazon</a></p>
        <p class="industry-content"><a href="./platform-salesforce.php"><img width="25" height="25" src="https://img.icons8.com/ios-filled/500/ffffff/salesforce.png" alt="salesforce"/>&nbsp;&nbsp; Salesforce</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

