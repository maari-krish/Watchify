<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="signups.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>
    <body>
        <div class="bgimages">
            <div>
                <div class="bgimage" style="background-image: url('./signup/02/1@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/2@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/3@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/4@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/5@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/6@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/7@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/9@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/10@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/12@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/13@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/14@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/15@2x.png');"></div>
                <div class="bgimage" style="background-image: url('./signup/02/16@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/18@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/19@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/20@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/21@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/Bitmap@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/23@2x.png');"></div>
                <div class="bgimage row" style="background-image: url('./signup/02/24@2x.png');"></div>
            </div>
            <form action="" class="form" id="forms" method="post">
                <h1>Signup</h1>
                <p>Enter Your details to signup</p>
                <label for = "Name">Name</label><br>
                <input type="text" name="text"  placeholder="Enter Your Name" id="Name"><br>
                <span id="nameerr" style="color: red; display: none;">Enter Name</span>
                <label for = "Email">Email</label><br>
                <input type="text" name="email" placeholder="Enter Your Email" id="emailid"><br>
                <span id="emailerr" style="color: red; display: none;">Enter EmailId</span>
                <label for = "Password">Password</label><br>
                <input type="password" name="password"  placeholder="Enter Your password" id="password"><br>
                <img id="eye"src="OTT Icon/Visible.png">
                <span id="pswderr" style="color: red; display: none;">Enter Password</span>
                <label for = "City">City</label><br>
                <input type="text" name="text"  placeholder="Enter Your City" id="city"><br>
                <span id="cityerr" style="color: red; display: none;">Enter City</span>
                <input class="sign" type="submit" name="signup" value="Signup" id="signup">
                <span id="output" style="color: white;"></span>
                <a href="loginn.php">Login here</a>
            </form>
            </div>
            <!-- <footer>
                <div class="bottom">
                        <nav class="column1">   
                            <div class="field">
                                <a href="">FAQ</a>
                            </div>
                            <div class="field">
                                <a href="">Terms of use</a>
                            </div>
                            <div class="field">
                                <a href="">Privacy policy</a>
                            </div>
                        </nav>
                        <nav class="column-2">
                            <div class="field">
                               <a href="">Help center</a>
                            </div>
                            <div class="field">
                                <a href="">Blog</a>
                            </div>
                            <div class="field">
                                <a href="">Watch List</a>
                            </nav>
                            <nav class="column-3">
                                <div class="field-1">
                                   <a href="">Media center</a>
                                </div>
                                <div class="field-1">
                                    <a href=""><img src="./OTT Icon/You Tube.png" alt=""></a>
                                    <a href=""><img src="./OTT Icon/Face book.png" alt=""></a>
                                    <a href=""><img src="./OTT Icon/Instagram.png" alt=""></a>
                                </div>
                                <div class="field-1">
                                   <a href=""><img src="./OTT Icon/App Store.png" alt=""></a>
                                   <a href=""><img src="./OTT Icon/Google play.png" alt=""></a>
                                </div>
                            </nav>
                </div>
                <p class="rights"><span style="color: #A6AE00;">Terms and Privacy NoticeSend us feedbackHelp<span>&#169;</span></span> 1996-2021, Watchify.com. Inc. or its affilites</p>
            </footer> -->
            <div class="rows">
                <div class ="columns">
                    <ul>
                        <li class="links"><a href="" id="links">FAQ</a></li>
                        <li class="links"><a href="" id="links">Terms of Use</a></li> 
                        <li class="links"><a href="" id="links">Private Policy</a></li>
                    </ul>
                </div>
                <div class ="columns">
                    <ul>
                      <li class="links"><a href="" id="links">Help Centre</a></li>
                      <li class="links"><a href="" id="links">Blog</a></li>
                      <li class="links"><a href="" id="links">Watch List</a></li>  
                    </ul>
                </div>
                <div class ="columns">
                    <ul>
                        <li class="links"><a href="" id="links">Media Centre</a></li>
                        <li class="links1"><img src="./OTT Icon/You Tube.png" alt=""><img src="./OTT Icon/Face book.png" alt=""><img src="./OTT Icon/Instagram.png" alt=""></li>
                        <li class="links2"><img src="./OTT Icon/App Store.png" alt=""><img src="./OTT Icon/Google play.png" alt=""></li>
                            
                    </ul>
                   
                </div>
                <p class="right"><span style="color: #A6AE00;">Terms and Privacy NoticeSend us feedbackHelp<span>&#169;</span></span><span style="color: white;">1996-2021, Watchify.com. Inc. or its affilites</span></p>
            </div>
            <script src="signup.js"></script>

    </body>
</html>