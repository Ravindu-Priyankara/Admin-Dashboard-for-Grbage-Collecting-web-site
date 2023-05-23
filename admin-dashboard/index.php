<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>Garbage Collector</title>
    <link rel="stylesheet"
          href="main.css">
    <link rel="stylesheet"
          href="responsive.css">
</head>
 
<body>
   
    <!-- for header part -->
    <header>
 
        <div class="logosec">
            <div class="logo">Garbage Collector</div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn"
                id="menuicn"
                alt="menu-icon">
        </div>
 
        <div class="searchbar">
            <input type="text"
                   placeholder="Search">
            <div class="searchbtn">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn"
                    alt="search-icon">
              </div>
        </div>
 
        <div class="message">
            <div class="circle"></div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
                 class="icn"
                 alt="">
            <div class="dp">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn"
                    alt="dp">
              </div>
        </div>
 
    </header>
 
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>
 
                    <div class="option2 nav-option">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                            class="nav-img"
                            alt="articles">
                        <h3> Articles</h3>
                    </div>
                    <a href = "report.php">
                        <div class="nav-option option3">
                            <img src=
    "https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                                class="nav-img"
                                alt="report">
                            <h3> Reports of garbage</h3>
                        </div>
                    </a>

                    <a href="https://www.google.com/maps/d/u/2/edit?mid=1P1nwg0COTSXk1tDaWcujwrYztoNnSEs&usp=sharing">
                        <div class="nav-option option4">
                            <img src=
    "https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                                class="nav-img"
                                alt="institution">
                            <h3> Map</h3>
                        </div>
                    </a>

                    <a href = "add-captains.php">
                        <div class="nav-option option5">
                            <img src=
    "https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                                class="nav-img"
                                alt="blog">
                            <h3> Add Green captains</h3>
                        </div>
                    </a>

                    <a href = "../index.php">
                        <div class="nav-option logout">
                            <img src=
    "https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                                class="nav-img"
                                alt="logout">
                            <h3>Logout</h3>
                        </div>
                    </a>
 
                </div>
            </nav>
        </div>
        <div class="main">
 
            <div class="searchbar2">
                <input type="text"
                       name=""
                       id=""
                       placeholder="Search">
                <div class="searchbtn">
                  <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                  </div>
            </div>
 
            <div class="box-container">
 
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Article Views</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views">
                </div>
 
                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Likes</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
                         alt="likes">
                </div>
 
                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Comments</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">
                </div>
 
                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Published</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Articles</h1>
                    <button class="view">View All</button>
                </div>
 
                <div class="report-body">
                    <div class="report-topic-heading">
                        <h3 class="t-op">Article id</h3>
                        <h3 class="t-op">Article name</h3>
                        <h3 class="t-op">Publisher name</h3>
                        <h3 class="t-op">Status</h3>
                    </div>

                    <?php 
                      include "../connect.php";

                      $records = mysqli_query($conn, "select * from article");
                      while($data = mysqli_fetch_array($records))
                      {
                    ?>
 
                    <div class="items">
                        <div class="item1">
                            <h3 class="t-op-nextlvl"><?php echo $data['id'];?></h3>
                            <h3 class="t-op-nextlvl"><?php echo $data['name'];?></h3>
                            <h3 class="t-op-nextlvl"><?php echo $data['publisher_name'];?></h3>
                            <h3 class="t-op-nextlvl label-tag"><?php echo $data['status'];?></h3>
                        </div>
                        <?php
                      }
                    ?>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script src="./main.js"></script>
</body>
</html>