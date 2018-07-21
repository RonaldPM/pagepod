<!--
  DEVELOPMENT STARTED ON : 21-JULY-2018
  REPOSITORY NAME        : PAGEPOD
  REPOSITORY LINK        : https://github.com/RonaldPM/pagepod
  DEVELOPER email        : ronaldpmathews@gmail.com
-->
<html>
  <head>
    <title>PagePod | News sharing platform</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png"/>
    <link rel='stylesheet' href='assets/css/main.css'>
    <script type='text/javascript' src='assets/js/ui.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"><!--GOOGLE FONTS API-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--FOR GOOGLE MATERIAL ICONS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <!--TOP NAVIGATION BAR FOR THE INDEX PAGE. THIS CONTAINS LOGO, LINKS etc.-->
    <div class='indexTopNav'>
      <div class='navTop'>
        <img src='assets/img/logo.png' class='logo' title='PagePod'>
        <div class='accountActions'>
          <button class='socialBtn'>Signup</button>
          <div class='navLogin'>Login</div>
        </div>
        <br />
        <div class='siteName'>PagePod</div>
      </div>
      <br />
      <div class='navLinks'>
        <div class='navElem'>HOME</div>
        <div class='navElem'>SELECTION-A</div>
        <div class='navElem'>SELECTION-B</div>
        <div class='navElem'>SELECTION-C</div>
        <div class='navElem'>SELECTION-D</div>
        <button class='socialBtn'>Twitter</button>
        <button class='socialBtn'>Facebook</button>
        <button class='socialBtn'>Newsletter</button>
        <!--SEARCH BUTTON AND INPUT CODE STARTS HERE.-->
        <div class='searchBar'>
          <input type='text' class='navSearchInp' placeholder="Search pagePod..." id='searchInp'>
          <i class="material-icons navSearchBtn" onclick="showSearch()">search</i>
        </div>
        <!--SEARCH BUTTON AND INPUT CODE ENDS HERE.-->
      </div>
    </div>
    <!--TOP NAVIGATION BAR ENDS HERE-->
    <!--BODY OF THE PAGE STARTS HERE-->
    <div class='bodyWrap'>
      <!--BOX FOR LATEST ARTICLE STARTS HERE-->
      <div class='latestBox'>
        <img src='media/img/duckduckgo.jpg' class='latestImgHolder'>
        <div class='latestTitle'>
          <div class='latestTitleHead'>Title head goes here</div>
          <br />
          <div class='latestDesc'>Some desctiption about the story can go here</div>
        </div>
        <br /><br />
        <button class='tag'>LATEST</button>
      </div>
      <!--BOX FOR LATEST ARTICLE ENDS HERE-->
      <div class='recentStories'>
        <div class='sectionTitle'>Recent stories</div>
        <div class='sectionSeperator'></div>
        <br />
        <div class='recentStoryBox'>
          <img src='media/img/datacenter.jpg' class='recentStoryImg'>
          <div class='recentHead'>The recent story head will go here</div>
          <div class='recentDesc'>
            A short description of the recent story will be placed here after fetching
            it from the database
          </div>
          <img src='media/author_dp/author1.jpg' class='auth_dp'>
          <div class='authName'>John Doe</div>
        </div>
      </div>
    </div>
    <!--BODY OF THE PAGE ENDS HERE-->
  </body>
</html>
