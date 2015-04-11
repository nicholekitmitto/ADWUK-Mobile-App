<?php include('inc/header.php');?>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger" onclick=""><span class="visually-hidden">Menu</span></label>
<div class="wrapper" id="top" tabindex="0">
  <header class="header">
    <a href="home.php"><img src="./assets/img/adwuk-logo.png" alt="Action on Disability and Work UK" class="header-logo"></a>
    <span class="notifications"><a href="#" class="visually-hidden">Notifications</a></span>
  </header>
  <div class="content-banner">
    <h1>Messages</h1>
    <div class="breadcrumb">
      <ul>
        <li class="previous"><a href="home.php">Home</a></li>
        <li class="previous"><a href="messages.php">Messages</a></li>
        <li>Send a Message</li>
      </ul>
    </div>
  </div>
  <div id="main" role="main" class="forum-wrap">
    <div class="search-container" id="the-basics">
      <form method="get" action="sendNew.php" class="flex-inline">
        <input class="search-field search-users typeahead" type="search" placeholder="Search username" name="searchName" required>
        <button type="submit" class="search-btn">Ok</button>
      </form>
    </div>

    <div class="frequent">
      <p class="frequent-header">Frequent Contacts</p>
      <hr />
      <ul class="contacts">
        <li>
          <a href="conversation.php">
            <div class="user_photo">
              <img src="./assets/img/gravatar1.png" alt="CindyLou">
            </div>
            <p>CindyLou</p>
          </a>
        </li>
        <li>
          <div class="user_photo">
            <img src="./assets/img/gravatar2.png" alt="shereads">
          </div>
          <p>shereads</p>
        </li>
        <li>
          <div class="user_photo">
            <img src="./assets/img/wheels.png" alt="SouthWestAngel">
          </div>
          <p>SouthWestAngel</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- End of site-wrap -->
</div>
<!-- End of content wrapper -->

<?php include('inc/footer.php');?>
