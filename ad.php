<!DOCTYPE html>
<head>
  <!-- include Open Sans font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
  <!-- include Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <!-- include Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- include css -->
	<link href="assets/style.css" rel="stylesheet">
  <!-- include meter JS script -->
  <script src="assets/js/meter.js"></script>
  <!-- include scrollspy JS script -->
  <script src="assets/js/scrollspy.js"></script>
	<title>Wornhub</title>
  <link href="./style.CSS" rel="stylesheet">
  <script>
</script>
	<script src="./get.js"></script>
</head>
<body data-spy="scroll" data-target="#main-navbar" data-offset="58">
  <!-- NOTE: the this is used to detect bootstrap media changes in JS -->
  <div class="device-xs d-block d-sm-none"></div>

  <!-- define navbar -->
  <nav id="main-navbar" class="navbar navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="./homepage.html">Wornhub</a>
  <input class="searchBar" type="text" placeholder="Search..">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="./about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./help.HTML">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./shop.HTML">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./sell.HTML">Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.HTML">Login/Signup</a>
      </li>
    </ul>
  </nav>

  <!-- mobile navbar layout
  <input type="checkbox" id="main-navicon"/>
  <div id="main-navbar" class="navicon-container">
    <label for="main-navicon" class="label"></label>
    <ul class="sidebar">
      <li class="nav-item">
        <a class="nav-link" href="#profile">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#experience">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projects">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#skills">Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Login/Signup</a>
      </li>
    </ul>
  </div> -->

  <!-- define initial title pane -->
  <div class="title">
    <div class="title-overlay">
      <div class="container">
        <h1>LOREM IPSUM</h1>
        <h3 class="DescriptionHeadline">The world's largest marketplace for used fashion</h3>
      </div>
    </div>
  </div>

  <!-- define content to contain main sections -->
  <div class="content">
    <!-- define Browse By Category pane -->
    <div id="experience" class="experiences">
      <div class="container">
        <h2 class="BrowseByCategoryHeadline">Browse By Category</h2>
        <hr>
        <!-- row of experiences
        <div class="row justify-content-around">
          <div class="location col-lg-4">
            <h4>Venenatis</h4>
            <p>
              May 2017 - August 2017
            </p>
          </div>
          <div class="col-lg-8">
            <strong>Software Engineering Intern</strong>
            <ul>
              <li><span>Venenatis magnis velit tristique pharetra blandit bibendum dis senectus id sociosqu ut himenaeos nibh nisl, malesuada metus netus.</span></li>
              <li><span>Dignissim parturient tincidunt neque justo magna phasellus habitasse facilisi ac, nibh curabitur leo ultricies suspendisse rhoncus.</span></li>
              <li><span>Varius dictumst pellentesque velit inceptos in id nullam, augue cubilia mus tempus etiam eros porttitor, tincidunt diam ultrices vehicula.</span></li>
            <ul>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="location col-lg-4">
            <h4>Volutpat</h4>
            <p>
              May 2016 - December 2016
            </p>
          </div>
          <div class="col-lg-8">
            <strong>Payments Software Developer Intern</strong>
            <ul>
              <li><span>Volutpat massa condimentum nisl mus ac class ullamcorper habitant, himenaeos venenatis imperdiet accumsan.</span></li>
              <li><span>Platea donec dictum dui curabitur at commodo nisi ornare, vulputate malesuada placerat venenatis vitae tellus himenaeos velit eget.</span></li>
              <li><span>Molestie sociis leo curae luctus purus gravida risus odio suspendisse, curabitur parturient viverra imperdiet conubia congue aenean a.</span></li>
              <li><span>Eleifend dictum suspendisse cubilia litora facilisi congue pharetra magnis himenaeos nam, nascetur lectus per viverra aliquam hendrerit phasellus ac.</span></li>
            <ul>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="location col-lg-4">
            <h4>Eleifend</h4>
            <p>
              May 2015 - August 2015
            </p>
          </div>
          <div class="col-lg-8">
            <strong>Student Software Developer</strong>
            <ul>
              <li><span>Netus posuere euismod curae quis nam massa condimentum, fermentum diam purus hendrerit volutpat habitant curabitur sodales.</span></li>
              <li><span>Venenatis gravida dapibus velit nunc hac volutpat neque, enim sodales tempor pharetra integer nam vivamus erat, suspendisse orci sollicitudin donec sociosqu turpis.</span></li>
              <li><span>Imperdiet ac nunc sociis porta felis luctus, leo nascetur curabitur pharetra nulla vivamus, auctor donec sagittis penatibus bibendum.</span></li>
            <ul>
          </div>
        </div>
      </div>
    </div>
  -->

    <!-- define projects pane
    <div id="projects" class="projects">
      <div class="container">
        <h2>Projects</h2>
        <hr>
        <p class="lead">
          A series of projects, primarily revolving around web services and technologies.
        </p>
        <div class="row">
          <div class="project col-md-12 col-lg-6">
            <img class="thumb" src="assets/project/500px.jpg">
            <div class="project-overlay">
              <h3>React</h3>
              <p>
                A declarative, efficient, and flexible JavaScript library for building user interfaces.
              </p>
              <a class="btn btn-primary" href="https://reactjs.org/">Visit Website</a>
            </div>
          </div>

          <div class="project col-md-12 col-lg-6">
            <img class="thumb" src="assets/project/dotfiles.jpg">
            <div class="project-overlay">
              <h3>Ruby on Rails</h3>
              <p>
                A web framework integrating web templating, presistence, and asynchronous operations.
              </p>
              <a class="btn btn-primary" href="https://github.com/rails/rails">Visit Repo</a>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="project col-md-12 col-lg-6">
              <img class="thumb" src="assets/project/event-dashboard.jpg">
              <div class="project-overlay">
                <h3>Node.js</h3>
                <p>
                  Node.js® is a JavaScript runtime built on Chrome's V8 JavaScript engine.
                </p>
                <a class="btn btn-primary" href="https://nodejs.org/en/">Visit Website</a>
              </div>
            </div>

            <div class="project col-md-12 col-lg-6">
              <img class="thumb" src="assets/project/strict-parameters.jpg">
              <div class="project-overlay">
                <h3>Angular</h3>
                <p>
                  Use modern web platform capabilities to deliver app-like experiences. High performance, offline, and zero-step installation.
                </p>
                <a class="btn btn-primary" href="https://angular.io/">Visit Repo</a>
              </div>
            </div>
        </div>
      </div>
    </div>-->

    <!-- define skills pane
    <div id="skills" class="skills">
      <div class="container">
        <h2>Skills</h2>
        <hr>
        <p class="lead">
          These skills range from years of experience to a couple months of familiarity.
        </p>
        <div class="row">
          <ul class="col-md-12 col-lg-6">
            <li>
              <div class="skill">Ruby</div>
              <div class="meter"><span class="bar" data-width="100%"></span></div>
            </li>
            <li>
              <div class="skill">JavaScript</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">HTML/CSS</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">Java</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">C++</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">Python</div>
              <div class="meter"><span class="bar" data-width="70%"></span></div>
            </li>
            <li>
              <div class="skill">C</div>
              <div class="meter"><span class="bar" data-width="60%"></span></div>
            </li>
          </ul>
          <ul class="col-md-12 col-lg-6">
            <li>
              <div class="skill">Rails</div>
              <div class="meter"><span class="bar" data-width="100%"></span></div>
            </li>
            <li>
              <div class="skill">Node.js</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">AngularJS</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">React</div>
              <div class="meter"><span class="bar" data-width="80%"></span></div>
            </li>
            <li>
              <div class="skill">RESTful APIs</div>
              <div class="meter"><span class="bar" data-width="50%"></span></div>
            </li>
            <li>
              <div class="skill">Deep Learning</div>
              <div class="meter"><span class="bar" data-width="50%"></span></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
-->
  <!-- define title footer paine -->
  <div id="adOverview" class="contact bg-light">
    <div class="container">
      <h2 id="atitle"></h2>
	  Posted by <b id="aowner"></b> on <i id="adate"></i><br />
	  <i id="apostal">K2G 6T6</i><br /><br />
	  <h4 id="aprice"></h4>
      <hr>
        <div id="aimg" class = "col-md-12 col-lg-6">
          <!-- <img style="max-width:100%;" src ="img/20190211_190924.jpg"> -->
      </div><br />
	  <div id="ainfo" class = "col-md-12 col-lg-6">
		
      </div>
	  <div class = "col-md-12 col-lg-6">
		<button onclick="showContactInfo();" id="acontact">Get Contact</button><br /><br />
		<span id="uinfo"></span>
      </div>
	</div>
	
  
	<script>
	
	var uid;
	
	function showContactInfo(){
		getJSON('./REST/get_user.php?id='+uid,
function(err, data) {
  if (err !== null) {
    alert('Something went wrong: ' + err);
  } else {
    var a = data[uid];
	document.getElementById("uinfo").innerHTML = a["phone number"]+"<br />"+a["email"]+"<br /><br />";
  }
});
	}
	
	getJSON('./REST/get_ad.php?id=<?php echo $_GET["id"]; ?>',
function(err, data) {
  if (err !== null) {
    alert('Something went wrong: ' + err);
  } else {
    var a = data[<?php echo $_GET["id"]; ?>];
	document.getElementById("atitle").innerHTML = a["title"];
	document.getElementById("aowner").innerHTML = a["owner"];
	document.getElementById("adate").innerHTML = a["date"];
	document.getElementById("apostal").innerHTML = a["postal"];
	document.getElementById("aprice").innerHTML = "$"+a["price"];
	
	uid = a["oid"];
	
	document.getElementById("ainfo").innerHTML += "Colour: <b>"+a["colour"]+"</b><br />";
	document.getElementById("ainfo").innerHTML += "Type: <b>"+a["type"]+"</b><br />";
	document.getElementById("ainfo").innerHTML += "Size: <b>"+a["size"]+"</b><br />";
	
	document.getElementById("ainfo").innerHTML += "<br />";
  }
});
	getJSON('./REST/get_picture.php?id=<?php echo $_GET["id"]; ?>',
function(err, data) {
  if (err !== null) {
    alert('Something went wrong: ' + err);
  } else {
    var a = data[<?php echo $_GET["id"]; ?>];
	document.getElementById("aimg").innerHTML = "<img style=\"max-width:100%;\" src =\"img/"+a["location"]+"\">";
  }
});
</script>
</body>
