<?php
    require('config.php');
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hacking Course </title>
    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

    <script src="back.js"> </script>
    <link rel="stylesheet" href="MainCourses.css">
    <link rel="stylesheet" href="StudyLab.css">
    <link rel="stylesheet" href="video.css">

    
    <link
        href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>
<?php
    include("header.php")
?>
  
  <div class="box">
       <div class=" contain">
       <img src="../Images/hacking.jpg" alt="">
              <div class="poster">
                 <div class="text">
                        <p class="title"> The Complete Ethical Hacking Course: Beginner to Advanced!</p>
                         <style>
                                #myProgress {
                                width: 50%;
                                background-color: #ddd;
                                }

                                #myBar {
                                width: 35%;
                                height: 9px;
                                background-color: #3882b3;;
                                }
                            </style>
                               <p class="title">In Progress </p>

                                <div id="myProgress">
                                    <div id="myBar"></div>
                                </div>
                        <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                                </div>
                                  <p class="rate"> Rate us </p>
                            </div>
                    </div>
              </div>
        </div>
  </div>
 
  <!-- <div class="first_reating_c">
                                <div class="reating_class_c">
                                    <p class="reating_no">4.5</p>
                                </div>
                                <div class="reating_class_c">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div> -->


                    <div class="contener">
                        <div class="main-video">
                            <div class="video">
                                <video src="../Videos/hacking/video1.mp4" controls  autoplay type="video/mp4"> </video>
                                <h3 class="title">class1: Network Penetration Testing </h3>
                            </div>
                        </div>
                        
                        <div class="video-list">
                            <div class="vid active">
                            <video src="../Videos/hacking/video1.mp4"  muted > </video>
                                <h3 class="title">class1: Network Penetration Testing </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.mp4"  muted > </video>
                                <h3 class="title">class2: Improve Cybersecurity Skills with CTFs </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video3.mp4"  muted > </video>
                                <h3 class="title"> class3: Ethical Hacking 101 </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video4.mp4"  muted > </video>
                                <h3 class="title">class4: Linux for Eithical Hackers</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video5.mp4"  muted > </video>
                                <h3 class="title">class5: Create a Keyloggere with Python</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video6.mp4"  muted > </video>
                                <h3 class="title">class6: Writting Code like a Real Hackers</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video7.mp4"  muted > </video>
                                <h3 class="title">Day7: Play loads of songs</h3>
                            </div>
                            <p> <strong> Section 2 </strong> </p>
                             <div class="vid">
                            <video src="../Videos/hacking/video2.1.mp4"  muted > </video>
                                <h3 class="title">lecture 1</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.2.mp4"  muted > </video>
                                <h3 class="title"> lecture 2</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.3.mp4"  muted > </video>
                                <h3 class="title">lecture 3</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.4.mp4"  muted > </video>
                                <h3 class="title"> lecture 4 </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.5.mp4"  muted > </video>
                                <h3 class="title"> lecture 5</h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.6.mp4"  muted > </video>
                                <h3 class="title"> lecture 6 </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.7.mp4"  muted > </video>
                                <h3 class="title"> lecture 7 </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video2.8.mp4"  muted > </video>
                                <h3 class="title"> lecture  8</h3>
                            </div>
                            <!-- <div class="vid">
                            <video src="../Videos/hacking/video16.mp4"  muted > </video>
                                <h3 class="title"> ORM </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video17.mp4"  muted > </video>
                                <h3 class="title"> Freelancing </h3>
                            </div>
                            <div class="vid">
                            <video src="../Videos/hacking/video18.mp4"  muted > </video>
                                <h3 class="title"> How to get hacking Jobs </h3>
                            </div> -->
                        </div>
                    </div>

            <script>
                let listVideo = document.querySelectorAll('.video-list .vid');
                let mainVideo = document.querySelector('.main-video video');
                let title = document.querySelector('.main-video .title');

                listVideo.forEach(video=>{
                    video.onclick =() =>{
                        listVideo.forEach(vid => vid.classList.remove('active'));
                            video.classList.add('active')
                            if(video.classList.contains('active')){
                                let src = video.children[0].getAttribute('src');
                                mainVideo.src = src;
                                let text = video.children[1].innerHTML;
                                title.innerHTML = text;
                            };
                    };
                });

            </script>



            <p class="bottom">Proprietary content. &copy; Great Learning. All Rights Reserved. Unauthorized use or distribution prohibited. </p>
                <div class="room">
                    <div class="bottom-list ">
                        <p> &copy;2023 All rights reserved </p>
                        <ul class="tc">
                            <li> Privacy </li>
                            <li>Terms of service </li>
                            <li> <a href="StudyLab.php"> StudyLab.in  </a>  </li>
                    </div>
                 </div>
</body>
</html> 