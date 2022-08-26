<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>facebook</title>
    <link rel="stylesheet" href="style.css" href="" />
    <script src="script.js" defer></script>
    <link rel="shortcut icon" href="facebook.JFIF" />
</head>

<body>
    <div class="header_box">
        <div class="facebook_tags">
            <p class="facebook_name">facebook</p>
        </div>
        <form class="sign_in_tags" method = "POST">
            <div class="emailorphone">
                <p>Email or Phone</p>
                <input name="email"   class="email_container" type="text"   />
            </div>
            <div class="password">
                <p class="password_text">Password</p>
                <input name="password" class="email_container" type="password" />
                <p class="forgottenaccount">forgotten account?</p>
            </div>
            <div class="login_button">
                <button name="login"class="log_in">LOG IN</button>
                <p class="forgotpassword">Forgotten password?</p>
            </div>
        <?php
            $tdhostname = "localhost";
            $tdusername = "root";
            $tdpassword = "";
            $tddatabases= "facebook_clones";


            //create connections
                
            $conn = mysqli_connect ("$tdhostname","$tdusername","$tdpassword","$tddatabases");
            if (isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $facebook = mysqli_query($conn, "SELECT * FROM users");
            $equery = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
            $pquery = mysqli_query($conn, "SELECT * FROM users WHERE password='$password'");
            
            
            if ($equery -> num_rows ==  0 ) {
                echo'Wrong email address';
            } else if ($pquery -> num_rows == 0) {
                echo'Wrong password';
            } else {
                // echo 'email has been existance try again';
                // mysqli_query($conn, "INSERT INTO users (email, password) values ('$email', '$password');"  );
                echo 'This users is exist!';
            }

            
            }

                                                                                                                     

            ?>
        </form>

        <span class="createaccount">CREATE NEW FACEBOOK ACCOUNT</span>
    </div>

    <div class="body_box">
        <div class="facebook_picture">
            <p class="facebook_text">
                Facebook helps you connect and share the people in your life
            </p>
            <img class="logo_picture" src="logo.png" />
        </div>
        <div class="createaccount_tags">
            <div class="create_account">
                <h1>Create an account</h1>
                <p class="quickandeasy">It's quick and easy.</p>
            </div>
            <form class="names">
                <div class="firstname_text">
                    <input class="firstname-input" type="text" placeholder="Firstname" name="" />
                    <input class="firstname-input" type="text" placeholder="Surname" name="" />
                </div>
                <div class="mobilenumbers_signup">
                    <input class="MOBILENUMBER" type="text" placeholder="Mobile number or email address" name="" />
                </div>
                <div class="newpassword_signup">
                    <input class="PASSWORD" type="text" placeholder="New password" name="" />
                </div>
                <h1 class="birthday_container">Birthday</h1>
                <div class="birthday">
                    <input class="AGE" type="text" placeholder="18" name="" />
                    <input class="DATEMONTH" type="text" placeholder="Mar" name="" />
                    <input class="YEAR" type="text" placeholder="2001" name="" />
                    <img class="logo_question" src="questionmark.png" />
                </div>
                <h1 class="KASARIAN">Gender</h1>
                <div class="genderContainer">
                    <div class="gender">
                        <input type="radio" name="" />
                        <label class="genderandcustom">Female</label>
                    </div>
                    <div class="lalaki">
                        <input type="radio" name="" />
                        <label class="genderandcustom">Male</label>
                    </div>
                    <div class="customs">
                        <input type="radio" name="" />
                        <label class="genderandcustom">Custom</label>
                    </div>
                    <img class="logo_question" src="questionmark.png" />
                </div>
                <div class="QA">
                    <p class="textmessage_container">
                        By clicking Sign up ,you agree to our terms.learn how we collect,use and share your data in our Data Policy and how we use cookies and similar technology in our Cookie Policy, You may recieve SMS notification from us and can opt out at any time.
                    </p>
                </div>
                <div class="sign_upbuttoon">
                    <button class="signupngpogi">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>