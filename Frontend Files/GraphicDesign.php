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
    <title>Course</title>

    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="MainCourses.css">
    <link rel="stylesheet" href="StudyLab.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar Starts -->
<?php
    include("header.php")
?>
<!-- Navbar Ends -->
    <div class="head_c">
        <!-- Left Section started -->
        <div class="left_right_c">
            <div class="left_section_c">
                <Section>
                    <div class="best common_c">
                        <div class="best_c1">BEST SELLER</div>
                        <div class="best_c2">NEW</div>
                        <div class="best_c3">POPULAR</div>
                    </div>

                    <div class="heading_c common_c">
                        <p class="main_heading_c">The Complete Graphic Design Theory for Beginners Course</p>

                        <p class="secondery_heading_c">Learn Graphic Design Theory and the Basic Principles
                             of Color Theory, Typography, Branding, Logo Design, Layout & More!
                           
                        </p>
                    </div>

                    <div class="reating_c common_c">
                        <!-- First Reating 4.5 wal -->
                        <div class="first_reating_c">
                            <div class="reating_class_c">
                                <p class="reating_no">4.5</p>
                            </div>
                            <div class="reating_class_c">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="">
                                <p class="year_c">(1987)</p>
                            </div>
                        </div>

                        <!-- second Reating enrolled wal -->
                        <div class="second_reating_c">
                            <div>
                                <i class="fa-regular fa-user"></i>
                            </div>

                            <div>
                                <p>16,452 enrolled on this course</p>
                            </div>
                        </div>

                        <!-- Third Reating update wala -->
                        <div class="third_reating_c">
                            <div>
                                <i class="fa-regular fa-clock"></i>
                            </div>

                            <div>
                                Last updated 8/2021
                            </div>
                        </div>
                    </div>

                    <div class="tufan common_c">
                        <p class="teacheby">Teached By :</p>
                        <br>
                        <div class="tufan_img_c">
                            <img src="../Images/hruta.jpg" alt="">
                        </div>
                        <div class="tufan_name_c">
                            <p>Hruta Durgule</p>
                        </div>
                    </div>
                </Section>
            </div>
            <!-- Left Section ended -->

            <!-- Right Section started -->
            <div class="right_section_div">
                <div class="right_section_c">
                    <div class="right_img_c">
                        <img class="Image_c" src="../Images/graphicdesign.png" alt="">
                    </div>

                    <div class="right_details_c">
                        <div class="after_img_c">
                            <div class="reating_right_c">
                                <div class="Course_price">
                                    <div class="first_rate_c price">
                                        <p>₹499</p>
                                    </div>
                                    <div class="second_rate_c price">
                                        <p>₹2,299</p>
                                    </div>
                                    <div class="Price_off">
                                        <p>78% off</p>
                                    </div>
                                </div>
                               
                            </div>

                           
                            </div>
                        </div>

                        <div class="right_list_c">
                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-regular fa-file-video"></i>
                                    <span class="Lessons_c">Modules</span>
                                </div>
                                <div>16</div>
                            </div>
                            <div class="right_line_c"></div>

                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <span class="Lessons_c">Skill level</span>
                                </div>
                                <div>Beginner</div>
                            </div>
                            <div class="right_line_c"></div>
                            <a href="graphic.php">
                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-solid fa-certificate"></i>
                                    <span class="Lessons_c">Certificate</span>
                                </div>
                                <div>Yes</div>
                            </div>
                            </a>
                            <div class="right_line_c"></div>

                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-solid fa-infinity"></i>
                                    <span class="Lessons_c">Full lifetime access</span>
                                </div>
                                <div>Yes</div>
                            </div>
                            <div class="right_line_c"></div>
                        </div>



                        <div class="right_button_c">
                            <div class="Course_buttons">
                           
                            <?php 
                                 if (isset($_SESSION["Fname"])){ ?>
                                 <a href="payment.php"><button class="second_btn_c"> Buy Now</button></a> 
                                <?php } else { ?>
                                    <a href="StudyLab_login.php"><button class="second_btn_c"> Buy Now</button></a>
                                    <?php }
                                 ?>  
                                <button class="cart-button">
	                                <span class="add-to-cart">Add to cart</span>
	                                <span class="added">Added</span>
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-box"></i>
                                </button> 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Description Section Started -->



    <section class="description_c common_c">

        <div class="overview_c">
            <a href="#" class="overview_first_c">Overview</a>
            <a href="#" class="overview_second_c">Course Content</a>
            <a href="#" class="overview_second_c">Instructor</a>
            <a href="#" class="overview_second_c">Reviews</a>
        </div>
        <div class="line_d_c"></div>

        <div class="main_description_c">
            <p class="head_desc_c">Description</p>

            <p class="full_desc_c">By understanding the foundations of color, typography,
                 layout, composition, branding, and other fields of study in the graphic
                  design realm, you can propel yourself from a beginner to an expert, 
                  just by having the right education.
            </p>

            <button class="show_btn_c">Show more</button>
           
        </div>
    </section>

    <!-- Description Section Ended -->


    <!-- Learn Section Started -->


    <section class="learn_c common_c">

        <p class="head_learn_c">What you'll learn</p>

        <div class="flex_c">
            <div class="learn_flex_c">

                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>You will have intermediate to expert level knowledge of graphic
                         design theory that you will immediately be able to apply to 
                         your career, job, hobby, or company.</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>You will be given real-world, applicable projects that you can follow 
                        along with and practice.

                    </p>
                </div>
            </div>

            <div class="second_flex_c">
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>You will be given a major overview of the most common graphic design practices and
                         the thought process behind these principles.</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>You will achieve the experience and knowledge to take graphic design fundamentals
                         and apply them in your everyday life.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Learn Section Started -->



    <!-- Requirements section Started -->


    <div class="heading_req_c common_c">
        <h2>Requirements</h2>
        <ul class="list_req_c">
            <li class="first_list_req">This course is for beginners to graphic design
                 theory and for anyone who wants to learn the basic principles of
                  color theory, typography, layout design, photography, logo design,
                   branding, and more as it relates to graphic design.</li>
            <li class="first_list_req">You will learn intermediate and advanced terminology 
                that you can use to incorporate in graphic design, user interfaces, mobile
                 app design, logo design, t-shirt design, and other digital or print mediums.
            </li>
            <li class="first_list_req">Though programs like Adobe Photoshop CC and Canva are used
                 throughout this course, you will not need them unless you would like to follow 
                 along. The principles outlined in this course are transfereable to many applications,
                  both digital and physical.</li>
         </ul>
    </div>


    <!-- Requirements section Ended -->

    
   <!-- Course Content Section Started -->

    <section class="course_c common_c">
        <p class="course_head">Course Content</p>

        <div class="course_lecture">
            <p>16 Modules • 168 lectures</p>
            <a href="#" class="course_link">Expand All Sections</a>
        </div>

        <ul class="acco"> 
            <li>
                <input type="radio" name="accord" id="first">
                <label for="first">
                    <div class="course_content_1 content-color5">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">How to become a graphic designer full guide </p>
                        </div>
                        <div class="course_1_right">
                            <p>4 lectures • 11 min 48 sec</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Join Our Online Classroom!
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#"> 1min 25 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Exercise: Meet Your Classmates and Instructor
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">4 min 38 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Join Our Open Source Projects!
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">3 min 24 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Exercise: Break Google Yourself</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">2 min 28 sec</a>
                        </div>
                    </div>
                    
                   
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="second">
                <label for="second">
                    <div class="course_content_1 content-color1">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1"> How internet works!</p>
                        </div>
                        <div class="course_1_right">
                            <p>20 lectures • 2 hr 8 min</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>DEVELOPER FUNDAMENTALS: I
                                </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">1 min 40 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>What Does A Developer Do?
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">4 min 12 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Optional: The Article Which Inspired This Course
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">8 min 13 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Web Developer Monthly
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">6 min 16 sec</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>HTML, CSS, Javascript
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">15 min 51 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>DEVELOPER FUNDAMENTALS: II
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">25 min 41 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Monthly Coding Challenges, Free Resources and Guides
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">6 min 20 sec</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Exercise: Adding CSS and JavaScript to Tim's website
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">20 min 20 sec</a>
                        </div>
                    
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="third">
                <label for="third">
                    <div class="course_content_1 content-color2">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1"> HTML 5</p>
                        </div>
                        <div class="course_1_right">
                            <p>21 lectures • 3 hr 8 min</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>DEVELOPER FUNDAMENTALS: III
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">13 min 23 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>HTML Tags
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">10 min 28 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Self Closing HTML Tags
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">20 min 56 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>HTML Forms
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">36 min 34 sec</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>HTML vs HTML 5</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">31 min 59 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>HTML Challenge
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">21 min 45 sec</a>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="fourth">
                <label for="fourth">
                    <div class="course_content_1 content-color3">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">CSS</p>
                        </div>
                        <div class="course_1_right">
                            <p>6 lectures • 2 hr 41 min</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Your First CSS

                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">11 min sec 56</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Box Model
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">20 min 20 sec </a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>px vs em vs rem
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">41 min 13 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>CSS 3

                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">03:56</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Responsive UI

                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">30 min 2 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Exercise: Robot Animation

                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">4 min 34 sec</a>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="fifth">
                <label for="fifth">
                    <div class="course_content_1 content-color4">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">Extra</p>
                        </div>
                        <div class="course_1_right">
                            <p>6 lectures • 2 hr 34 secd</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Bootsrtap, Templates and building your strtup landing page
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">9 min 45 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>CSS grid + CSS layout
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">40 min 23 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Career of a web developer
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">37 min 34 sec</a>
                        </div>
                    </div>

                    <li>
                        <!-- <input type="radio" name="accord" id="fourth">
                        <label for="fourth">
                            <div class="course_content_1">
                                <div class="course_1_left">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <p class="head_course_1">MySQL</p>
                                </div>
                                <div class="course_1_right">
                                    <p>6 lectures • 2 hr 41 min</p>
                                </div>
                            </div> -->
                        </label>
            

        </ul>

        <!-- <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Course Content</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">The Brief</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Type, Color & Icon Introduction</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Prototyping a App - Introduction</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Wireframe Feedback</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div> -->








    </section>

    <!-- Course Content Section Ended -->



    <!-- Instructor section Started -->


    <div class="instructor_c common_c">
        <p class="inst_name_c">Instructor</p>
        <div class="main_info_c">
        <div class="img_inst_c">
                <img src="../Images/hruta.jpg" alt="">
            </div>

            <div class="info_inst_c">
                <p class="name_c">
                  Hruta Durgule</p>
                <p class="sale_c">Founder of universe.io</p>

                <div class="rate_inst_c">
                    <div class="fiex_inst_c">
                        <div class="color_div_c">
                            <i class="fa-solid fa-star"></i><span>4.5</span>
                        </div>
                        <p>Instructor Rating</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-regular fa-comment-dots"></i>
                        <p>12,781 Reviews</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-solid fa-user"></i>
                        <p>765 Students</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-regular fa-clock"></i>
                        <p>34 Course</p>
                    </div>
                </div>
            </div>
        </div>


        <p class="p_inst_c">Andrei is the instructor of some of the highest rated
             programming and technical courses online. He is now the founder of
              ZTM Academy which is one of the fastest growing education platforms
               in the world.</p><br>

        <p class="p_inst_c">ZTM Academy is known for having some of the best
             instructors and success rates for students. His graduates have
              moved on to work for some of the biggest tech companies around
               the world like Apple, Google, Tesla, Amazon, JP Morgan, IBM, 
               UNIQLO etc... He has been working as a senior software developer 
               in Silicon Valley and Toronto for many years, and is now taking all
                that he has learned, to teach programming skills and to help you
                 discover the amazing career opportunities that being a developer
                  allows in life. </p>
    </div>



    <!-- Instructor section Ended -->

 
    <!-- Review section started -->

    <section class="review_section_c common_c">
        <h3>Reviews</h3>

        <div class="review_first_c">
            <div class="review_div">
                <p class="A_T">A.T</p>
            </div>

            <div class="review_det">
                <p class="review_ali">Royston A. <span>2 Days ago</span></p>
                <p class="review_LMS">The best ever</p>
                <p class="review_para">This course was amazing. "web-developer-zero-to-mastery" 
                    as it is said, thank you Andrei.</p>

                <div class="review_was">
                    <a href="#" class="review_que">Was this review helpful?
                    </a>
                    <button class="review_btn1">Yes</button>
                    <button class="review_btn2">No</button>
                </div>
            </div>
        </div>

        <div class="line_review_c"></div>


        <div class="review_first_c">
            <div class="review_div">
                <p class="A_T">A.T</p>
            </div>

            <div class="review_det">
                <p class="review_ali">Jarratt S. <span>1 Days ago</span></p>
                <p class="review_LMS">The course too Good</p>
                <p class="review_para">Great course that was thoroughly enjoyable and generally 
                    easy to follow throughout. As all courses, the libraries, platforms and packages 
                    sometimes become out of date over time, but this only adds to the learning 
                    experience 
                </p>

                <div class="review_was">
                    <a href="#" class="review_que">Was this review helpful?
                    </a>
                    <button class="review_btn1">Yes</button>
                    <button class="review_btn2">No</button>
                </div>
            </div>
        </div>

        <div class="line_review_c"></div>


        <div class="review_view_all">
            <a href="#" class="review_view">View All Reviews</a>
        </div>


        <div class="write_review_section">
            <p class="write_R">Write a Review</p>
            <p class="write_w">What is it like to Course?</p>
            <div class="reating_class_s">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p class="write_w1">Review Title</p>
            <input class="write_input_1" type="text" placeholder="Great Course">

            <p class="write_w2">Review Content</p>
            <textarea class="write_input_2" type="text" placeholder="Message" rows="8"></textarea>
        </div>

        <button class="first_btn_w">Add To Cart</button><br>
    </section>


    <!-- Review section Ended -->

<!-- Footer Section Starts -->
<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->
</body>
<script src="javascript.js">
    </script>

</html>