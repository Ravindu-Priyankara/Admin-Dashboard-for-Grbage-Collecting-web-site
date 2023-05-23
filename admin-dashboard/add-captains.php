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

    <style>
        /* Bordered form */
            form {
            border: 3px solid #f1f1f1;
            }

            /* Full-width inputs */
            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            }

            /* Add a hover effect for buttons */
            button:hover {
            opacity: 0.8;
            }

            /* Extra style for the cancel button (red) */
            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            /* Center the avatar image inside this container */
            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            }

            /* Avatar image */
            img.avatar {
            width: 40%;
            border-radius: 50%;
            }

            /* Add padding to containers */
            .container {
            padding: 16px;
            }

            /* The "Forgot password" text */
            span.psw {
            float: right;
            padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
            }
    </style>
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

                    <form action="save-green-captain.php" method="post">
                        <center><h1>Add Green captain</h1></center>
                        <div class="imgcontainer">
                            <img src="add.jpg" alt="Avatar" class="avatar">
                        </div>

                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required>

                            <button type="submit">save credential</button>
                            <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
 
    <script src="./main.js"></script>
</body>
</html>