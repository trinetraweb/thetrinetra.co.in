<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index-main.css">
    <!-- <link rel="stylesheet" media="only screen and (max-width: 1000)" href="css/index-tab.css" >
    <link rel="stylesheet" media="only screen and (max-width: 700)" href="css/index-tab1.css" >
    <link rel="stylesheet" media="only screen and (max-width: 480)" href="css/index-phone.css"> -->
    <link rel="icon" href="image/logo.jpg" type="image/icon">
    <title>Shubham Yadav</title>
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- LIANEAR ICONS  -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>


<!-- NAVIGATION BAR STARTS HERE  -->
    <navbar class="navbar">
            <div class="nav-name">
                 <a class="logo a-1st" href="index.html" >
                 <!-- <img src="image/logo.jpg" alt=""> -->
                 SHUBHAM YADAV
                 </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            
            <div class="navbarContent" id="navbarContent" >
            <ul class="menu_nav">
                 <li class="nav-item a-2nd" id="nav-skills"><a class="nav-link center"  onclick='toggleskills()'>Skills</a></li>
                 <li class="nav-item a-2nd" id="nav-hobbies"><a class="nav-link center"  onclick="togglehobbies()">My Hobbies</a></li>
                 <li class="nav-item a-2nd" id="nav-home"><a class="nav-link center"  onclick="togglehome()">Home</a></li>
            </ul>
            </div>
     </navbar>

     <!-- NAVIGATION BAR ENDS HERE  -->




     <!-- HOME SECTION START HERE  -->

    <section id="home">
        <div class="home">
            <div class="home-me"id="home-image"><img src="image/my_image.jpg" alt="Shubham Yadav">
            </div>
            <div class="home-me" id="home-data">
                    <h3 class="h-2nd">HELLO EVERYONE,</h6>
                    <p class="h-3rd">I AM</p>
                    <h3 class="h-1st">Shubham Yadav</h3>
                    <h3 class="h-3rd">Student, B.Tech(CSE)</h4>
                    <p class="h-3rd">Netaji Subhash University of Technology</p>
                    <p class="h-3rd">Dwarika, Sector-3, Delhi</p>
                    <ul class="list basic-info">
                    <li><a href="#"><i class="lnr lnr-calendar-full a-3rd"></i> 21st July, 2003</a></li>
                    <li><a href="#"><i class="lnr lnr-phone-handset a-3rd"></i> +91 6387350031</a></li>
                    <li><a href="#"><i class="lnr lnr-envelope a-3rd"></i> syrohuwar@gmail.com</a></li>
                    <li><a href="#"><i class="lnr lnr-home a-3rd"></i> Azamgarh, Uttar Pradesh</a></li>
                    </ul>
                    <br>
                    <ul class="list personal-social">
                    <li><a href="https://www.facebook.com/shubham2142"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/Y1Shubham"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/shubham-yadav-887a0922a/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/y1shubham/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
            </div>
        </div>
    </section>
    <!-- HOME SECTION ENDS HERE  -->


    <!-- HOBBIES SECTION STARTS HERE  -->
    <section id="hobbies">
        <h1 class="skill-head center">MY Hobbies</h1>
        <div class="hobby-list">
            <div class="hobby-item" id="hobby-item-1"><img src="image/hobby1.png" alt="Coding"><p class="center hobby-p">Coding</p></div>
            <div class="hobby-item" id="hobby-item-2"><img src="image/hobby2.png" alt=""><p class="center hobby-p">Reading</p></div>
            <div class="hobby-item" id="hobby-item-3"><img src="image/hobby3.png" alt=""><p class="center hobby-p">Gaming</p></div>
            <div class="hobby-item" id="hobby-item-4"><img src="image/hobby4.png" alt=""><p class="center hobby-p">Music</p></div>
            <div class="hobby-item" id="hobby-item-5"><img src="image/hobby5.png" alt=""><p class="center hobby-p">Sleeping</p></div>
            <div class="hobby-item" id="hobby-item-6"><img src="image/hobby6.png" alt=""><p class="center hobby-p">Traveling</p></div>
            
    </section>

    <!-- HOBBIES SECTION ENDS HERE  -->



    <!-- SKILLS SECTION STARTS HERE  -->
    <section id="skills">
        <h1 class="skill-head center">MY Skills</h1>
        <div class="skill-list">
            <div class="skill_item">
                <h4 class="h-4th">HTML <span class="counter">85</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">CSS <span class="counter">75</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">JAVASCRIPT <span class="counter">25</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">PHP <span class="counter">50</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">C Language <span class="counter">65</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">C++ Language <span class="counter">45</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">Python <span class="counter">33</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill_item">
                <h4 class="h-4th">JAVA <span class="counter">00</span>%</h4>
                <div class="progress_br">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="gap"></div>
    </section>

    <!-- SKILLS SECTION ENDS HERE  -->



    <!-- FOOTER START HERE -->
    <footer class="footer">
        <div class="center">
            Copyright &copy; www.thetrinetra.co.in .All rights reserved
        </div>
    </footer>

    <!-- FOOTER ENDS HERE  -->



    <!-- JAVASCRIPT START HERE  -->
    <script>
        function togglehome(){
            let home = document.getElementById('home');
            let hobbies = document.getElementById('hobbies');
            let skills = document.getElementById('skills');
            if(home.style.display != 'block'){
            home.style.display = 'block';
            hobbies.style.display = 'none';
            skills.style.display = 'none';
            }
            else{
                hobbies.style.display = 'none';
            skills.style.display = 'none';
            }
        }
        function togglehobbies(){
            let home = document.getElementById('home');
            let hobbies = document.getElementById('hobbies');
            let skills = document.getElementById('skills');    
            if(hobbies.style.display != 'block'){
            home.style.display = 'none';
            hobbies.style.display = 'block';
            skills.style.display = 'none';
            }
            else{
                hobbies.style.display = 'block';
            skills.style.display = 'none';
            }
        }
        function toggleskills(){
            let home = document.getElementById('home');
            let hobbies = document.getElementById('hobbies');
            let skills = document.getElementById('skills');       
            if(skills.style.display = 'block'){
            home.style.display = 'none';
            hobbies.style.display = 'none';
            skills.style.display = 'block';
            }
            else{
                home.style.display = 'none';
            hobbies.style.display = 'none';
            }

        }

        
    </script>
    
    <!-- JAVASCRIPT ENDS HERE  -->
</body>
</html>
<?php
?>