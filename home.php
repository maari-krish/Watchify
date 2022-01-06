<?php 
session_start();
if(!isset($_SESSION["email"])){
    header("location:loginn.php");
}
?>
 
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div class="home">
            <div>
                <div class="bgimage" style="background-image: url('./Home screen images/09@2x.png');"></div>
                <div class="showup">
                    <div class="showtop-up">
                        <img class = "img" src="logo.png" alt="">
                        <menu>
                            <ul class="menu">
                                <li><a class="home" href="">Home</a></li>
                                <li><a class="movies" href="">Movies</a></li>
                                <li><a class="tvshows" href="">TvShows</a></li>
                                <li><a class="webseries" href="">WebSeries</a></li>
                            </ul>
                        </menu>
                       <div class="content"><p class="title"> Watch your Favourite <span style="color: #A6AE00;"> Movies,Shows,Web series</span></p>
                        <p class="title2">at <span style="color: #A6AE00;">Anywhere and Anytime</span></p></div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="logoutt">
            <form action="logoutt.php">
                <input type="submit" value="Logout">
            </form>
            </div>
        <div class="movielist">
            <h3 class="thumbnail">Recent Watch</h3>
           <div class="recent">
                <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/1.png);">
                   <div class="details">
                       <h3 style="color:#a6ae00">SHADOW</h3>
                       <table>
                           <tbody>
                               Crew
                               <td>
                              <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Deng Chao</span></pre>
                              <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                              <p style="color: #fff;">Year</p>
                              <span class="sp" style="color:#a6ae00">Nov 2021</span>
                           </td>
                           </tbody>
                           
                       </table>
                   </div>
               </div>
                <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/2.png);">
                   <div class="details">
                       <h3 style="color:#a6ae00">SHADOW IN THE CLOUD</h3>
                       <table>
                           <tbody>
                               Crew
                               <td>
                              <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Lari Mark</span></pre>
                              <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Swifty</span></pre>
                              <p style="color: #fff;">Year</p>
                               <span class="sp" style="color:#a6ae00">Nov 2020</span>
                           </td>
                           </tbody>
                           
                       </table>
                   </div>
               </div>
                <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/3.png);">
                   <div class="details">
                       <h3 style="color:#a6ae00">Matrix</h3>
                       <table>
                           <tbody>
                               Crew
                               <td>
                              <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Deng Chao</span></pre>
                              <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                              <p style="color: #fff;">Year</p>                               <span class="sp" style="color:#a6ae00">Nov 2021</span>
                           </td>
                           </tbody>
                           
                       </table>
                   </div>
               </div>
           </div>
        </div>
        <div class="movielist">
        <h3 class="thumbnail">Recommended</h3>
        <div class="recent">
             <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/4.png);">
                <div class="details">
                    <h3 style="color:#a6ae00">CONTRA</h3>
                    <table>
                        <tbody>
                            Crew
                            <td>
                           <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Drnold Schwarzeneger,sylvester stallone</span></pre>
                           <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                           <p style="color: #fff;">Year</p>                            <span class="sp" style="color:#a6ae00">Nov 2021</span>
                        </td>
                        </tbody>
                        
                    </table>
                </div>
            </div>
             <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/5.png);">
                <div class="details">
                    <h3 style="color:#a6ae00">X - MEN</h3>
                    <table>
                        <tbody>
                            Crew
                            <td>
                           <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Bryan Singer</span></pre>
                           <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Simon Kinberg</span></pre>
                           <p style="color: #fff;">Year</p>                            <span class="sp" style="color:#a6ae00">Nov 2020</span>
                        </td>
                        </tbody>
                        
                    </table>
                </div>
            </div>
             <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/6.png);">
                <div class="details">
                    <h3 style="color:#a6ae00">DEAD POOL 2</h3>
                    <table>
                        <tbody>
                            Crew
                            <td>
                           <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Deng Chao</span></pre>
                           <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                           <p style="color: #fff;">Year</p>                            <span class="sp" style="color:#a6ae00">Nov 2021</span>
                        </td>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
     </div>
     <div class="movielist">
        <h3 class="thumbnail">Tamil Movies</h3>
       <div class="recent">
            <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/7.png);">
               <div class="details">
                   <h3 style="color:#a6ae00">Anbarivu</h3>
                   <table>
                       <tbody>
                           Crew
                           <td>
                          <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Hip Hop Thamizha</span></pre>
                          <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                          <p style="color: #fff;">Year</p>                           <span class="sp" style="color:#a6ae00">Nov 2021</span>
                       </td>
                       </tbody>
                       
                   </table>
               </div>
           </div>
            <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/8.png);">
               <div class="details">
                   <h3 style="color:#a6ae00">Valimai</h3>
                   <table>
                       <tbody>
                           Crew
                           <td>
                          <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Ajith Kumar</span></pre>
                          <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Huma Qureshi</span></pre>
                          <p style="color: #fff;">Year</p>                           <span class="sp" style="color:#a6ae00">Nov 2020</span>
                       </td>
                       </tbody>
                       
                   </table>
               </div>
           </div>
            <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/9.png);">
               <div class="details">
                   <h3 style="color:#a6ae00">Beast</h3>
                   <table>
                       <tbody>
                           Crew
                           <td>
                          <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Vijay</span></pre>
                          <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Pooja Hedge</span></pre>
                          <p style="color: #fff;">Year</p>                           <span class="sp" style="color:#a6ae00">Nov 2021</span>
                       </td>
                       </tbody>
                       
                   </table>
               </div>
           </div>
       </div>
    </div>
    <div class="movielist">
        <h3 class="thumbnail">Malayalam Movies</h3>
       <div class="recent">
            <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/10.png);">
               <div class="details">
                   <h3 style="color:#a6ae00">HOME</h3>
                   <table>
                       <tbody>
                           Crew
                           <td>
                          <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Hip Hop Thamizha</span></pre>
                          <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sun Li</span></pre>
                          <p style="color: #fff;">Year</p>                           <span class="sp" style="color:#a6ae00">Nov 2021</span>
                       </td>
                       </tbody>
                       
                   </table>
               </div>
           </div>
            <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/11.png);">
               <div class="details">
                   <h3 style="color:#a6ae00">SUNNY</h3>
                   <table>
                       <tbody>
                           Crew
                           <td>
                          <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Jayasurya</span></pre>
                          <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">Sshivada</span></pre>
                          <p style="color: #fff;">Year</p>                           <span class="sp" style="color:#a6ae00">Nov 2020</span>
                       </td>
                       </tbody>
                       
                   </table>
               </div>
           </div>
            <div class="movieimg" style="background-image: url(./Homescreenimages/Homescreenimages/12.png);">
               <div class="details">
                   <h3 style="color:#a6ae00">ONE</h3>
                   <table>
                       <tbody>
                           Crew
                           <td>
                          <pre id="details" style="color:#a6ae00">Actor       :     <span style="color: #fff;display: inline;">Mamooty</span></pre>
                          <pre id="details" style="color:#a6ae00">Actress   :     <span style="color: #fff;display: inline;">-</span></pre>
                          <p style="color: #fff;">Year</p>                           <span class="sp" style="color:#a6ae00">Nov 2021</span>
                       </td>
                       </tbody>
                       
                   </table>
               </div>
           </div>
       </div>
    </div>
    <footer>
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
    </footer>

    </body>
</html>








