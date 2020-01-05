<?php
  require "header.php";
 ?>

 <div class="topnav" id="myTopnav">
   <a class="normalnav" href="#home" class="active">Dis_Place</a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
 </div>

 <div id="screen1">

     <div class="cloud c-1"></div>
     <div class="cloud c-2"></div>
     <div class="cloud c-3"></div>

     <!-- <div class="cloud2 cl-1"></div>
     <div class="cloud2 cl-2"></div>
     <div class="cloud2 cl-3"></div>
     <div class="cloud2 cl-4"></div>
     <div class="cloud2 cl-5"></div>
     <div class="cloud2 cl-6"></div> -->



   <div class="container_mount">
     <div class="mountain m-1">
       <div class="container_snow">
         <div class="s-1"></div>
         <div class="s-1"></div>
         <div class="s-1"></div>
         <div class="s-1"></div>
       </div>
     </div>

     <div class="mountain m-2">
       <div class="container_snow2">
         <div class="s-2"></div>
         <div class="s-2"></div>
         <div class="s-2"></div>
         <div class="s-2"></div>
       </div>
     </div>
   </div>

 </div>

  <div class="formContainer">
   <form action="post.php" method="POST">
     <label for="name">Your Name </label>
     
     <input type="text" id="name" name="name" maxlength="10" required placeholder="- Your name">
     <div class="feedback" id="nameFeedback"></div>

     <label>Your Offer </label>
     
     <input type="text" id="offer" name="offer" maxlength="120" required placeholder="- Offer">
     <div class="feedback" id="offerFeedback"></div>

     <label>Address </label>
     
     <input type="text" id="street" name="street" maxlength="30" required placeholder="- Street name">
     <div class="feedback" id="streetFeedback"></div>
     <input type="text" id="postcode" name="postcode" maxlength="30" required placeholder="- Postcode">
     <div class="feedback" id="postcodeFeedback"></div>
     <input type="text" id="city" name="city" maxlength="30" required placeholder="- City">
     <div class="feedback" id="cityFeedback"></div>

     <label>Valid From </label>
     
     <input type="text" id="fromdate" name="fromdate" maxlength="30" required placeholder="- Date">
     <div class="feedback" id="fromdateFeedback"></div>
     <input type="text" id="fromtime" name="fromtime" maxlength="30" required placeholder="- Time">
     <div class="feedback" id="fromtimeFeedback"></div>

     <label>Valid Until </label>
     
     <input type="text" id="enddate" name="enddate" maxlength="30" required placeholder="- Date">
     <div class="feedback" id="enddateFeedback"></div>
     <input type="text" id="endtime" name="endtime" maxlength="30" required placeholder="- Time">
     <div class="feedback" id="endtimeFeedback"></div>

     <br>
     <br>
     <div class="g-recaptcha" data-sitekey="6LdoJMUUAAAAAATUFgAXHwvJXQ2WYDQ93puA2j5A"></div>
     <br>

     <input type="submit" class="success button" value="Submit">
   </form>
  </div>

  <div id="screen2">
    <h2>Offers</h2>
  </div>

  <!-- <div id="screen3">
    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit odio, faucibus rhoncus quam quis, faucibus porta orci. Curabitur volutpat mi eu magna venenatis consequat. Ut nec luctus mi, in posuere mi. Pellentesque dapibus egestas lectus et mattis. Curabitur sed bibendum turpis. Etiam urna ipsum, ultricies id consequat ultricies, ullamcorper sed arcu. Quisque at augue vel libero maximus condimentum. Curabitur gravida diam id ullamcorper sagittis. Donec fermentum justo eu pretium dapibus. Nullam hendrerit consectetur mi ac facilisis. Ut laoreet porttitor nunc, vel mollis lacus sodales ac. Donec augue mauris, viverra in tortor rutrum, dictum eleifend lacus. Ut maximus velit neque, vel congue augue semper ut. Mauris nunc enim, malesuada sit amet scelerisque ac, porttitor vehicula lorem.

Etiam lacinia aliquet ante, porttitor accumsan tellus hendrerit vel. Integer id luctus diam. Vestibulum tristique non sapien vitae convallis. Quisque vitae tincidunt magna, vel consequat nulla. Nulla imperdiet tortor tortor, faucibus varius orci egestas eu. Pellentesque imperdiet pellentesque leo vel tempor. Phasellus porttitor viverra libero ac posuere. Nunc placerat lobortis velit. Sed vel augue posuere diam accumsan porttitor porttitor sit amet risus.

Vivamus porttitor bibendum erat, in eleifend eros congue ac. Fusce ac diam nisi. Proin id ipsum lobortis, laoreet orci quis, egestas dolor. Cras facilisis facilisis diam in commodo. Suspendisse dapibus imperdiet odio, quis rhoncus tellus interdum quis. Phasellus metus erat, iaculis vel efficitur et, euismod non augue. Quisque mollis imperdiet quam, sit amet ullamcorper felis pellentesque non. Aliquam suscipit scelerisque dignissim. Nullam bibendum est libero, sed egestas lorem fermentum ut. Phasellus euismod gravida rhoncus. Cras semper iaculis pretium.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div> -->





 <?php
    require_once('src/TwitterAPIExchange.php');

    $settings = array(
    'oauth_access_token' => "1200077624816607232-ffAwRJNbIQoNwmkhZaHgXTHPomirIZ",
    'oauth_access_token_secret' => "pW0DuW54ZhNab8lv0zCSzUCS5KDLejNCdFNhVyPJ7Soge",
    'consumer_key' => "sCCt4D4IjUxaeqDrj52Tk1T0J",
    'consumer_secret' => "I51GmszWiBEgPYijqC3TyByXKVsiOiACSeWOhpOb3MOcUfuSOM"
    );

    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
    $requestMethod = "GET";
    $getfield = '?screen_name=place_dis';


    $twitter = new TwitterAPIExchange($settings);

    // COMMENTED OUT TO LEAVE CLEAN TWEET


    // echo $twitter->setGetfield($getfield)
    //           ->buildOauth($url, $requestMethod)
    //           ->performRequest();

    $string = json_decode($twitter ->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest(),$assoc = TRUE);


    // COMMENTED OUT IS ALL DATA ABOUT STRING

    // echo "<pre>";
    // print_r($string);
    // echo "</pre>";
    ?>

    <?php
echo "<div id='screen3'>";
        foreach ($string as $items)
         {

				echo"<div class='blog-post centered'>";
          echo "<h5> <small> ".$items['created_at']."</h5> </small><br />";
            echo "<h5>". $items['text']."<br /> </h5>";

            echo "<hr>";
            // echo "screen name: ".$items['user']['screen_name']."<br />";
        }


     echo "</div>";
     echo "</div>";

     ?>

     <?php
       require "footer.php"
      ?>
