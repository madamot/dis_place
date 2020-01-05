<?php
  require "header.php";
 ?>



<?php
// Checks if form has been submitted

    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdoJMUUAAAAABdAtSldBXX760GPGkKp6Z0VfJMe',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...

				// require codebird
				require_once('src/codebird.php');

				$name = $_POST['name'];
				$offer = $_POST['offer'];
				$street = $_POST['street'];
				$postcode = $_POST['postcode'];
				$city = $_POST['city'];
				$fromdate = $_POST['fromdate'];
				$fromtime = $_POST['fromtime'];
				$enddate = $_POST['enddate'];
				$endtime = $_POST['endtime'];

				$final = "$name is offering $offer at $street, $postcode, $city from $fromdate $fromtime until $enddate $endtime";



				\Codebird\Codebird::setConsumerKey("sCCt4D4IjUxaeqDrj52Tk1T0J", "I51GmszWiBEgPYijqC3TyByXKVsiOiACSeWOhpOb3MOcUfuSOM");

				$cb = \Codebird\Codebird::getInstance();

				$cb->setToken("1200077624816607232-ffAwRJNbIQoNwmkhZaHgXTHPomirIZ", "pW0DuW54ZhNab8lv0zCSzUCS5KDLejNCdFNhVyPJ7Soge");

				$params = array(

				  'status' => $final
				);
				$reply = $cb->statuses_update($params);


				echo "

				<br /> <br /> <br />

				<h3> Thank you <?php echo $name ;?> </h3>

				 <h3> for your offer of ' <?php echo $offer;?> ' </h3>

				<h4>Go to <a href='https://twitter.com/place_dis'>@place_dis </a> to see it live! </h4>


				<br /><br /><br /> <h2> <a href='index.php'>Home</a></h2>

				</div>";
    }
 ?>


<?php
	require "footer.php"
 ?>
