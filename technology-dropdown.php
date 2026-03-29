<style>
        .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    width: 80vw;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: -430px;
    opacity: 0.92;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
    color: black !important;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  .nav-pills{
    background-color: white !important;
    padding: 40px 0px 40px 20px ;
    height: 100%;
  }
  .nav-pills .nav_link.active,.nav-pills .show > .nav-link{
    background-color:#0E2354 !important;
    color: white !important;
    border-radius: 10px 0px 0px 10px !important;
  }
  .nav_link{
    transition: none !important;
    color: #081A48 !important;
    height: 100%;
    font-weight: 600;
    margin-bottom: 10px;
    padding: 13px 35px !important;
    margin: 10px 0px 10px 10px;
  }
  .industry-content{
    margin-top: 5px;
    margin-bottom: 5px;
    color: white;
  }
</style>
<body>
<div class="dropdown-content">
<div style="background-color:#081A48; opacity:1 !important; padding-top:10.5px"></div>
<div class="d-flex align-items-start" style="background-color:#0E2354; width:100% !important;">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link nav_link active" id="v-pills-programming-tab" data-bs-toggle="pill" data-bs-target="#v-pills-programming" type="button" role="tab" aria-controls="v-pills-programming" aria-selected="true">Programming</button>
    <button class="nav-link nav_link" id="v-pills-trending-tab" data-bs-toggle="pill" data-bs-target="#v-pills-trending" type="button" role="tab" aria-controls="v-pills-trending" aria-selected="false">Trending</button>
    <button class="nav-link nav_link" id="v-pills-platform-tab" data-bs-toggle="pill" data-bs-target="#v-pills-platform" type="button" role="tab" aria-controls="v-pills-platform" aria-selected="false">Platform</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="width:100%;">
    <div class="tab-pane fade show active" id="v-pills-programming" role="tabpanel" aria-labelledby="v-pills-programming-tab" >
    <div class="row">
        <div class="col-lg-4">
        <p class="industry-content"><a href=""> React</a></p>
        <p class="industry-content"><a href="./program-java.php"> Java</a></p>
        <p class="industry-content"><a href=""> Python</a></p>
        <p class="industry-content"><a href=""> PHP</a></p>
        <p class="industry-content"><a href=""> JavaScript</a></p>
        </div>
        <div class="col-lg-4">
        <p class="industry-content"><a href=""> React Native</a></p>
        <p class="industry-content"><a href=""> Node.JS</a></p>
        <p class="industry-content"><a href=""> Laravel</a></p>
        <p class="industry-content"><a href=""> Flutter</a></p>
        <p class="industry-content"><a href=""> Kotlin</a></p>
        </div>
        <div class="col-lg-4">

        <p class="industry-content"><a href=""> Swift</a></p>
        <p class="industry-content"><a href=""> Objective-C</a></p>
        <p class="industry-content"><a href=""> Laravel</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-trending" role="tabpanel" aria-labelledby="v-pills-trending-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Virtual Reality (VR)</a></p>
        <p class="industry-content"><a href=""> Cloud</a></p>
        <p class="industry-content"><a href=""> Big Data</a></p>
        <p class="industry-content"><a href=""> Data Science</a></p>
        </div>
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Artificial Intelligence</a></p>
        <p class="industry-content"><a href=""> Blockchain</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="v-pills-platform" role="tabpanel" aria-labelledby="v-pills-platform-tab">
    <div class="row">
        <div class="col-lg-6">
        <p class="industry-content"><a href=""> Microsoft</a></p>
        <p class="industry-content"><a href=""> Amazon</a></p>
        <p class="industry-content"><a href=""> Salesforce</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

