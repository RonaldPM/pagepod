<?php

?>
<html>
  <head>
    <title>Create a new post</title>
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
        <a href='creator.php'>
          <button class='createBtn'>Dashboard</button>
        </a>
        <a href='../index.php'>
          <button class='createBtn'>View site</button>
        </a>
      </div>
    </div>
    <div class='contentWrap'>
      <div class='sectionTitle'>Create a new post</div>
      <div class='sectionSeperator'></div>
      <br /><br />
      <input type='text' class='inpt' placeholder="Post title">
      <br /><br />
      <textarea class='txtArea shortDesc' placeholder='Short desctiption (120 characters max)' maxlength="120"></textarea>
      <br /><br />
      <textarea class='txtArea para left' placeholder='First paragraph' maxlength="120"></textarea>
      <textarea class='txtArea para left' placeholder='Second paragraph' maxlength="120"></textarea>
      <textarea class='txtArea para left' placeholder='Third paragraph' maxlength="120"></textarea>
      <textarea class='txtArea para left' placeholder='Forth paragraph' maxlength="120"></textarea>
      <br /><br />
      <div class='imgUploadWrap'>
        <div class='imgUpload'>
          <div class='uploadTitle'>Image 1</div>
        </div>
        <div class='imgUpload'>
          <div class='uploadTitle'>Image 1</div>
        </div>
        <div class='imgUpload'>
          <div class='uploadTitle'>Image 1</div>
        </div>
        <div class='imgUpload'>
          <div class='uploadTitle'>Image 1</div>
        </div>
      </div>
    </div>
  </body>
</html>
