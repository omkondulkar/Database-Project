<?php
    require('config.php');


    session_start();
    error_reporting(0);
    $input=$_POST['search_res'];
   
?>


<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="Adminpage.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Font Awesomr CDN link -->
    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <nav>
        <div class="logo-name">

            <div class="logo-image">
                <i class="fa-solid fa-code logo_icon"></i>
            </div>
            <a href="StudyLab.php">
                <P class="logo_name"><Span class="skill">Study</Span>Lab</P>
            </a>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#dashboard">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>

                    <!-- <li><a href="#search">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li> -->

                <li><a href="#purchase">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Course Purchase</span>
                    </a></li>
                <li><a href="#courses">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Content </span>
                    </a></li>

                <li><a href="#instructor">
                <i class="fa-sharp fa-solid fa-user-tie"></i>
                        <span class="link-name">Staffs</span>
                    </a></li>

               
                <!-- <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->

            </ul>

            <ul class="logout-mode">
                <li><a href="Logout.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">Dashboard</span>
            </div>
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content" id="dashboard">
            <div class="overview">


                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-sharp fa-solid fa-bookmark"></i>
                        <span class="text">Total Courses</span>
                        <span class="number">7+</span>

                    </div>
                    <div class="box box2">
                        <i class="fa-user fa-solid "></i>
                        <span class="text">Total Users</span>
                        <span class="number">90+</span>
                    </div>


                    <div class="box box3">
                        <i class="fa-sharp fa-solid fa-user-tie"></i>
                        <span class="text">Total Staff</span>
                        <span class="number">8+</span>

                    </div>


                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <?php

                    $query="SELECT * FROM register";
                    $result=mysqli_query($connect,$query);

                    
                ?>
                <table>

                    <th class="t_head">Sr.No</th>
                    <th class="t_head">First Name </th>
                    <th class="t_head">Last Name </th>
                    <th class="t_head">Email </th>
                    <th class="t_head">User Name</th>
                    <th class="t_head">Date Of Registration </th>

                    <?php

                 while ($rows=mysqli_fetch_assoc($result)) 
                 {
                ?>
                    <tr>
                        <td class="user"> <?php echo $rows['User_id'] ?></td>
                        <td> <?php echo $rows['FirstName'] ?></td>
                        <td> <?php echo $rows['LastName'] ?></td>
                        <td> <?php echo $rows['Email'] ?></td>
                        <td> <?php echo $rows['UserName'] ?></td>
                        <td class="user"> <?php echo $rows['Date'] ?></td>
                    </tr>

                    <?php
                 }
                ?>



                </table>


            </div>
            <!-- ________________________________________________________  search _____________________________________________  -->

         <div class="search-contain" id="search">
            
             <div class="activity" id="purchase" >
                <div class="title">
                <i class="fa-solid fa-magnifying-glass search_logo"></i>
                    <span class="text" >Course Purchase  Search</span>
                </div>

                <form action="#search" method="POST">
                    <div class="search flex">
                        <div class="">
                        <i class="fa-solid fa-magnifying-glass search_logo"></i> 
                        <input type="text" class="Search_input" id="search" placeholder="Search Courses"
                                name="search_res" value="<?php if(isset($input)){echo $input;} ?>">
                        </div>

                        <div class="">
                            <button class="searchbtn" name="search"> </button>

                        </div>
                    </div>
                </form>
                <?php
                
                 $sql="SELECT * FROM `payment_details` WHERE `CourseName` LIKE '%$input%' OR `FullName`LIKE '%$input%'";

                 $searchres=mysqli_query($connect,$sql);

                 $coursefound=mysqli_num_rows($searchres)>0;

               
                if($coursefound)
                    {
                        ?>
                <div class="search-box">
                <table>

                    <th class="t_buy">Sr.No</th>
                    <th class="t_buy">Email </th>
                    <th class="t_buy">Full Name </th>
                    <th class="t_buy">Enrolled Course</th>
                    <th class="t_buy"> City </th>
                    <th class="t_buy">Date Of Purchased </th>

                    <?php
                    while($data=mysqli_fetch_assoc($searchres))
                    {?>
                    <tr>
                        <td class="user1"> <?php echo $data['ID'] ?></td>
                        <td> <?php echo $data['Email_id'] ?></td>
                        <td> <?php echo $data['FullName'] ?></td>
                        <td> <?php echo $data['CourseName'] ?></td>
                        <td> <?php echo $data['City'] ?></td>
                        <td> <?php echo $data['Date'] ?></td>

                    </tr>
                    </div>
                    <?php
                        }
                    }
                    else
                        {
                            echo' <p class="no_found">Not Available</p> ';
                        }

              ?>
    
                        
        </div>

                    <!-- ___________________________ search end __________________________________________________________ -->

                    <!-- <div class="activity" >
                        <div class="title">
                        <i class="uil uil-chart"></i>
                            <span class="text">Course Purchase Details</span>
                        </div> -->

                        <?php

                    $query="SELECT * FROM `payment_details`";
                    $result=mysqli_query($connect,$query);
                ?>
                        <!-- <table>

                            <th class="t_buy">Sr.No</th>
                            <th class="t_buy">Email </th>
                            <th class="t_buy">Full Name </th>
                            <th class="t_buy">Enrolled Course</th>
                            <th class="t_buy"> City </th>
                            <th class="t_buy">Date Of Purchased </th> -->

                            <?php

                 while ($rows=mysqli_fetch_assoc($result)) 
                 {
                ?>
                             <!-- <tr>
                                <td class="user"> <?php echo $rows['ID'] ?></td>
                                <td> <?php echo $rows['Email_id'] ?></td>
                                <td> <?php echo $rows['FullName'] ?></td>
                                <td> <?php echo $rows['CourseName'] ?></td>
                                <td> <?php echo $rows['City'] ?></td>
                                <td> <?php echo $rows['Date'] ?></td>

                            </tr> -->

                            <?php
                 }
                ?>
                        </table>
                    </div>



                    <div class="activity" id="courses">
                        <div class="title">
                        <i class="uil uil-files-landscapes"></i>
                            <span class="text">Courses Available</span>
                        </div>

                        <?php

                    $query="SELECT * FROM `courses_details`";
                    $result=mysqli_query($connect,$query);
                ?>
                        <table>

                            <th class="t_course">Course_id</th>
                            <th class="t_course">Course Category </th>
                            <th class="t_course">Course Title </th>
                            <th class="t_course">Instructor Name</th>
                            <th class="t_course"> Course Price </th>
                            <?php

                 while ($rows=mysqli_fetch_assoc($result)) 
                 {
                ?>
                            <tr>
                                <td class="user"> <?php echo $rows['course_id'] ?></td>
                                <td> <?php echo $rows['course_category'] ?></td>
                                <td> <?php echo $rows['course_title'] ?></td>
                                <td> <?php echo $rows['instructor_name'] ?></td>
                                <td class="user"> <?php echo $rows['course_price'] ?></td>


                            </tr>

                            <?php
                 }
                ?>



                        </table>


                    </div>

                    <div class="activity" id="instructor">
                        <div class="title">
                        <i class="fa-sharp fa-solid fa-user-tie"></i>
                            <span class="text">Total Staff</span>
                        </div>

                        <?php

                    $query="SELECT * FROM `courses_details`";
                    $result=mysqli_query($connect,$query);
                ?>
                        <table>
                            <th class="instruct ">Instructor Name</th>
                            <th class="instruct">Course Title </th>
                            <?php

                 while ($rows=mysqli_fetch_assoc($result)) 
                 {
                ?>
                            <tr>

                                <td class="name"> <?php echo $rows['instructor_name'] ?></td>
                                <td class="name"> <?php echo $rows['course_title'] ?></td>


                            </tr>

                            <?php
                 }
                ?>



                        </table>


                    </div>
            </div>
    </section>


</body>

</html>

<script>
const body = document.querySelector("body"),
    modeToggle = body.querySelector(".mode-toggle");
sidebar = body.querySelector("nav");
sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if (getStatus && getStatus === "close") {
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if (sidebar.classList.contains("close")) {
        localStorage.setItem("status", "close");
    } else {
        localStorage.setItem("status", "open");
    }
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});
</script>