<?php

?>
<html>
  <head>
    <title>Creator Dashboard</title>
    <link rel='stylesheet' href='../assets/css/main.css'>
    <link rel='stylesheet' href='../assets/css/creatorStyle.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"><!--GOOGLE FONTS API-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--FOR GOOGLE MATERIAL ICONS-->
  </head>
  <body>
    <div class='profileNavBar'>
      <div class='profileNavlinkWrap'>
        <img src='../assets/img/logo.png' class='profileLogo'>
        <br />
        <div class='profileSiteName'>PagePod</div><div class='subName'>Creator</div>
        <a href='createpost.php'>
          <button class='createBtn'>Create +</button>
        </a>
        <a href='../index.php'>
          <button class='createBtn'>View site</button>
        </a>
      </div>
    </div>
    <div class='contentWrap'>
      <div class='sectionTitle'>Your recent posts and its stats</div>
      <div class='sectionSeperator'></div>
      <br />
      <div class='creatorPostBox'>
        <img src='../media/img/laptop.jpg' class='creatorPostImg'>
        <div class='storyBitHead'>The story title will go here in this spot</div>
        <br /><br />
        <div class='storyBitAuthor'>By <font color='#e93636'>You</font> &nbsp;&nbsp;|&nbsp;&nbsp; July 20 &nbsp;&nbsp;|&nbsp;&nbsp; Topic</div>
        <div class='postButtons'>
          <i class="material-icons postBtnElem" title='Edit post'>edit</i>
          <i class="material-icons postBtnElem" title='Delete post'>delete</i>
          <i class="material-icons postBtnElem" title='Post status'>track_changes</i>
        </div>
      </div>
      <br /><br />
      <div class='sectionTitle newline mt50'>Latest comments on your posts</div>
      <div class='sectionSeperator'></div>
    </div>
  </body>
</html>
