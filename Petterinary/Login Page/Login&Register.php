<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/Login&Register-Style.css">
    <script defer src="./Assets/Login&Register-JS.js"></script>
    <script src="https://kit.fontawesome.com/366cf4fc21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Global/Assets/Global-Style.css">

    <title>Login & Register</title>
</head>

<body>
    <?php
    session_start();
    ?>

    <div class="main-container">
        <div class="section right">
            <div class="logo-box">
                <img src="../Global/Pictures/Logo.png" alt="">
                <p>PETTERINARY</p>
            </div>
            <img id="picture" src="./Pictures/img3.png" alt="">
            <img id="peek" src="./Pictures/img2.png" alt="">
        </div>
        <div class="section left">
            <div class="log-on-container">
                <div class="lo-nav-bar">
                    <ul class="tabs">
                        <li class="tab is-active">
                            <a data-switcher data-tab="1">Login</a>
                        </li>
                        <li class="tab">
                            <a data-switcher data-tab="2">Signup</a>
                        </li>
                    </ul>
                </div>
                <div class="pages">
                    <div class="page is-active" data-page="1">
                        <!--LOGIN START-->
                        <h1>Login to your account</h1>
                        <form id="login" action="/Project Petterinary/api/login.php" method="POST">
                            <div>
                                <p style="color: green">
                                    <?php
                                    if (isset($_SESSION['login_message'])) {
                                        $message = $_SESSION['login_message'];
                                        unset($_SESSION['login_message']);
                                        echo $message;
                                    }
                                    ?>
                                </p>
                            </div>
                            <div>
                                <p style="color: red">
                                    <?php
                                    if (isset($_SESSION['login_error'])) {
                                        $message = $_SESSION['login_error'];
                                        unset($_SESSION['login_error']);
                                        echo $message;
                                    }
                                    ?>
                                </p>
                            </div>
                            <div>
                                <p style="color: red">
                                    <?php
                                    if (isset($_SESSION['register_error'])) {
                                        $message = $_SESSION['register_error'];
                                        unset($_SESSION['register_error']);
                                        echo $message;
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="txt">
                                <input class="email" type="email" name="email" required>
                                <span></span>
                                <label>Email</label>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-xmark"></i>
                            </div>
                            <div class="txt">
                                <input class="pswrd" type="password" name="password" required>
                                <span></span>
                                <label>Password</label>
                                <span class="show">SHOW</span>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-xmark"></i>
                            </div>
                            <div style="margin: -5px 0 20px 0;">
                                <input type="checkbox" id="remember-me" style="margin-right: 5px;">
                                <label for="remember-me">Remember Me</label>
                            </div>
                            <div class="finish-btn">
                                <div class="fb-inner"></div>
                                <button type="submit" id="logon-btn">Login</button>
                            </div>
                            <div id="forget-password">Forgot Password?</div>
                        </form>
                        <!--LOGIN END-->
                    </div>
                    <div class="page" data-page="2">
                        <!--REGISTER START-->
                        <h1 style="margin-bottom: 20px;">Let's get you started</h1>
                        <form id="register" action="/Project Petterinary/api/register.php" method="post">
                            <div class="r-name">
                                <div class="txt">
                                    <input type="text" name="first_name" required>
                                    <span></span>
                                    <label>First Name</label>
                                </div>
                                <div class="txt">
                                    <input type="text" name="last_name" required>
                                    <span></span>
                                    <label>Last Name</label>
                                </div>
                            </div>
                            <div class="txt" style="margin-top: -2.5px;">
                                <input class="email" type="email" name="email" required>
                                <span></span>
                                <label>Email</label>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-xmark"></i>
                            </div>
                            <div class="txt">
                                <input class="pswrd" type="password" name="password" required>
                                <span></span>
                                <label>Password</label>
                                <span class="show">SHOW</span>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-xmark"></i>
                            </div>
                            <div>
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" required>
                            </div>
                            <!-- <div class="dob-container">
                                <div class="select-box" style="width: 50px;">
                                    <label>Date</label>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>dst</option>
                                    </select>
                                </div>
                                <div class="select-box" style="width: 120px;">
                                    <label>Month</label>
                                    <select>
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                                <div class="select-box" style="width: 80px;">
                                    <label>Year</label>
                                    <select>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="finish-btn">
                                <button id="logon-btn">Create Account</button>
                            </div>
                        </form>
                        <!--REGISTER END-->
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>