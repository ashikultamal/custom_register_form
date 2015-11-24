<?php
/*
  Plugin Name: Custom Registration Form
  Plugin URI: http://crypticbd.com
  Description: Custom Registration Form
  Version: 1.0
  Author: Ashikul Islam Tamal
  Author URI: http://tamal.crypticbd.com
 */

function registration_form( $username, $full_name,$gender, $age, $password, $email) {

    echo '
    <form id="form" action="' . $_SERVER['REQUEST_URI'] . '" method="post">

    <h4 align="center">IT\'S FREE TO JOIN</h4>

                <label for="username">Username <strong>*</strong></label>
                <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">

               <label>Full Name</label>
               <input name="first_name" id="fullname" type="text" value="'. ( isset( $_POST['first_name']) ? $full_name : null )
        .'" maxlength="30" required>
               <div class="gender">
                    <label style="padding-top:10px;">I\'m a</label><br />
                    <input type="radio" name="gender" value="'. ( isset( $_POST['gender']) ? $gender : null ) .'"
                    id="radio" class="icon" title="male">
                    <label for="radio"><img src="http://cdn.asiandating.com/assets/images/default/man-big.png" width="40" height="30" class="icon" alt="male"></label>
                    <input type="radio" name="gender" value="'. ( isset( $_POST['gender']) ? $gender : null ) .'" id="radio2" class="icon" title="female">
                    <label for="radio2"><img src="http://cdn.asiandating.com/assets/images/default/woman-big.png" width="40" height="30" class="icon" alt="female"></label>
               </div>
               <div align="right">
                    <label class="age">Age</label>
                    <select name="age" required value="'. ( isset( $_POST['age']) ? $age : null ) .'">
                         <option value="18">18</option>

                         <option value="19">19</option>

                         <option value="20">20</option>

                         <option value="21">21</option>

                         <option value="22">22</option>

                         <option value="23">23</option>

                         <option value="24">24</option>

                         <option value="25">25</option>

                         <option value="26">26</option>

                         <option value="27">27</option>

                         <option value="28">28</option>

                         <option value="29">29</option>

                         <option value="30">30</option>

                         <option value="31">31</option>

                         <option value="32">32</option>

                         <option value="33">33</option>

                         <option value="34">34</option>

                         <option value="35">35</option>

                         <option value="36">36</option>

                         <option value="37">37</option>

                         <option value="38">38</option>

                         <option value="39">39</option>

                         <option value="40">40</option>

                         <option value="41">41</option>

                         <option value="42">42</option>

                         <option value="43">43</option>

                         <option value="44">44</option>

                         <option value="45">45</option>

                         <option value="46">46</option>

                         <option value="47">47</option>

                         <option value="48">48</option>

                         <option value="49">49</option>

                         <option value="50">50</option>

                         <option value="51">51</option>

                         <option value="52">52</option>

                         <option value="53">53</option>

                         <option value="54">54</option>

                         <option value="55">55</option>

                         <option value="56">56</option>

                         <option value="57">57</option>

                         <option value="58">58</option>

                         <option value="59">59</option>

                         <option value="60">60</option>

                         <option value="61">61</option>

                         <option value="62">62</option>

                         <option value="63">63</option>

                         <option value="64">64</option>

                         <option value="65">65</option>

                         <option value="66">66</option>

                         <option value="67">67</option>

                         <option value="68">68</option>

                         <option value="69">69</option>

                         <option value="70">70</option>

                         <option value="71">71</option>

                         <option value="72">72</option>

                         <option value="73">73</option>

                         <option value="74">74</option>

                         <option value="75">75</option>

                         <option value="76">76</option>

                         <option value="77">77</option>

                         <option value="78">78</option>

                         <option value="79">79</option>

                         <option value="80">80</option>

                         <option value="81">81</option>

                         <option value="82">82</option>

                         <option value="83">83</option>

                         <option value="84">84</option>

                         <option value="85">85</option>

                         <option value="86">86</option>

                         <option value="87">87</option>

                         <option value="88">88</option>

                         <option value="89">89</option>

                         <option value="90">90</option>

                         <option value="91">91</option>

                         <option value="92">92</option>

                         <option value="93">93</option>

                         <option value="94">94</option>

                         <option value="95">95</option>

                         <option value="96">96</option>

                         <option value="97">97</option>

                         <option value="98">98</option>

                         <option value="99">99</option>

                    </select>
               </div>
               <label style="clear:both;">Choose Password</label>
               <input name="password" id="password" type="password" maxlength="20" required value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
               <label>Your Email Address</label>
               <input name="email" id="email" type="email" maxlength="70" required value="' . ( isset( $_POST['email']) ? $email : null ) . '">


    <input type="submit" name="submit" value="GET STARTED NOW!"/>
    <div align="center" class="privacy">

                    <p><input type="checkbox" name="terms" id="terms" value="agreement" checked=""><span><span>By clicking Get Started, I affirm I am over 18 years of age and have read, and agree, to the Filipino Sweetie </span> <a href="http://www.definitelymustloveaccents.com/terms-and-conditions/" target="_blank">Terms and Conditions</a></span></p>

               </div>
    </form>
    ';
}

function registration_validation( $username, $password, $email )
{

    global $reg_errors;
    $reg_errors = new WP_Error;
    if (empty($username) || empty($password) || empty($email)) {
        $reg_errors->add('field', 'Required form field is missing');
    }

    if (4 > strlen($username)) {
        $reg_errors->add('username_length', 'Username too short. At least 4 characters is required');
    }

    if (username_exists($username))
        $reg_errors->add('user_name', 'Sorry, that username already exists!');

    if (!validate_username($username)) {
        $reg_errors->add('username_invalid', 'Sorry, the username you entered is not valid');
    }

    if (5 > strlen($password)) {
        $reg_errors->add('password', 'Password length must be greater than 5');
    }
    if (!is_email($email)) {
        $reg_errors->add('email_invalid', 'Email is not valid');
    }

    if (email_exists($email)) {
        $reg_errors->add('email', 'Email Already in use');
    }

    if (is_wp_error($reg_errors)) {

        foreach ($reg_errors->get_error_messages() as $error) {

            echo '<div>';
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';
            echo '</div>';

        }

    }
}

function complete_registration() {
    global $reg_errors, $username, $full_name, $password, $email, $gender, $age ;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
            'user_login'    =>   $username,
            'user_email'    =>   $email,
            'user_pass'     =>   $password,
            'first_name'    =>   $full_name,
            'gender' => $gender,
            'age' => $age,

        );
        $user = wp_insert_user( $userdata );
        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';
    }
}

function custom_registration_function() {
    if ( isset($_POST['submit'] ) ) {
        registration_validation(
            $_POST['username'],
            $_POST['password'],
            $_POST['email'],
            $_POST['first_name'],
            $_POST['gender'],
            $_POST['age']



        );

        // sanitize user form input
        global $username, $password, $email, $full_name, $age, $gender;
        $username   =   sanitize_user( $_POST['username'] );
        $password   =   esc_attr( $_POST['password'] );
        $email      =   sanitize_email( $_POST['email'] );
        $full_name =   sanitize_text_field( $_POST['first_name'] );
        $age =    $_POST['age'] ;
        $gender = $_POST['gender'];



        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
            $username,
            $full_name,
            $gender,
            $age,
            $password,
            $email
        );
    }

    registration_form(
        $username,
        $full_name,
        $gender,
        $age,
        $password,
        $email




    );
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'tm_custom_registration', 'custom_registration_shortcode' );

// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}
