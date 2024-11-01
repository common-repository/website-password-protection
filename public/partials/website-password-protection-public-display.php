<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://alignpx.com
 * @since      1.0.0
 *
 * @package    Website_Password_Protection
 * @subpackage Website_Password_Protection/public/partials
 */

$password = get_option( 'wpp-password');

    $error = false;
    if (isset($_POST['password'])) {
            $upass = trim($_POST['password']);

            if ($upass && $upass == $password) { 
                    setcookie('pass', 'true', 0, COOKIEPATH, COOKIE_DOMAIN );
                    wp_safe_redirect(site_url());
            }else {
                    $error = true;
                    $msg = 'Password is wrong';

            }
    }

if(!isset($_COOKIE['pass']) && !empty($password)){?>

    <div class="popup-pass" id="popup-pass2">
            <p>Enter store using password:</p>
            <?php if (isset($error) && $error) {
                    echo "<span style='color:red'>".$msg."</span>";
            }?>

        <form method="POST">
              <p>
                      <input type="password" name="password">
              </p>
              <p>
                      <input type="submit" name="submit" value="Submit">
              </p>
      </form>
    </div>
<style type="text/css">
	.popup-pass {
	  position: fixed;
	  width: 30%;
	  text-align: center;
	  padding: 10px;
	  left: 50%;
	  margin-left: -200px;
	  top: 50%;
	  margin-top: -100px;
	  background: #FFF;
	  z-index: 10000;
	}



	#popup-pass2:after {
	  position: fixed;
	  content: "";
	  top: 0;
	  left: 0;
	  bottom: 0;
	  right: 0;
	  background: rgba(80, 90, 90, 0.9);
	  z-index: -2;
	}

	#popup-pass2:before {
	  position: absolute;
	  content: "";
	  top: 0;
	  left: 0;
	  bottom: 0;
	  right: 0;
	  background: #FFF;
	  z-index: -1;
	}

	p{
            font-size: 24px;
            font-family: fantasy;
	}

	input{
            width: 66%;
            font-family: monospace;
            font-size: 16px;
            padding: 10px;
	}
        input[type=submit]{
                background: #7fb5da;
                border: none;
                border-radius: 5px;
        }
</style>
<?php

die(); }