<?php
// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Display welcome message
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="home_pg.css" />
</head>
<body>
  <nav class="navbar">
    <button class="menu-button" id="menuButton" onclick="togglemenu()">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
  </button>
      <!-- <button onclick="toggleMenu()">menu</button> -->
      <div class="logo"></div>
    </div>
    <div class="link-logout">
      <div class="nav-links">
        <a href="home_pgs.php">Home</a>
        <a href="/final_pro/projects/landing_pg/stu_signup/home/music/tunestream/index.html" target="main">TuneStream</a>
        <a href="calm/calm.html" target='main'>CalmCorner</a>
        <a href="/final_pro/projects/landing_pg/stu_signup/home/assesment/test.html" target="main">Assessment</a>
      </div>
      <div class="logout-button">
        <button class="Btn" onclick="logout()">
          <div class="sign">
            <svg viewBox="0 0 512 512">
              <path
                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
              ></path>
            </svg>
          </div>

          <div class="text">Logout</div>
        </button>
      </div>
    </div>
  </nav>
    <div id="menu" class="menus-lists">
    <ul>

    <li><h2 id="profile">
    <i class="fa-solid fa-user"></i>
    Welcome, <?php echo htmlspecialchars($username); ?>!</h2></li>
      <li><a href="home_pgs.php"><i class="fa-solid fa-house"></i>Home</a></li>
      <li><a href="/final_pro/projects/landing_pg/stu_signup/home/music/tunestream/index.html"><i class="fa-solid fa-headphones"></i>TuneStream</a></li>
      <li><a href="calm/calm.html" target='main'><i class="fa-solid fa-people-group"></i>CalmCorner</a></li>
      <li><a href="/final_pro/projects/landing_pg/stu_signup/home/assesment/test.html"><i class="fa-solid fa-book-open-reader"></i>Assessment</a></li>
      <li><a href="#support"><i class="fa-solid fa-phone"></i>Support</a></li>
      <li><a href="#aboutus"><i class="fa-solid fa-address-card"></i>About Us</a></li>
      <li><a href="/final_pro/projects/landing_pg/landing.html"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
    </ul>
  </div>
  <div class="hero">
    <div class="left">
      <div class="left-img"></div>
    </div>
    <div class="right">
      <div class="not-alone">
        <h1>Not feeling like yourself lately? You’re not alone.</h1>
      </div>
      <div class="not-p">
        <p>
          It’s something most people experience at some point. And there are
          simple things you can do that can help.
        </p>
      </div>
    </div>
  </div>
  <div class="mood">
    <div class="mood-txt">
      <h1>How are you feeling today?</h1>
      <p>We can help you find resources for understanding and managing what you’re experiencing.</p>
    </div>
    <div class="container">
      <form id="emotionForm">
        <p id="ifeel">I'm feeling 
          <span class="dropdown">
            <select name="emotion" id="emotionDropdown">
              <option value="anxious">Anxious / Worried</option>
              <option value="angry">Angry</option>
              <option value="stressed">Stressed / Overwhelmed</option>
              <option value="lonely">Lonely</option>
            </select>
          </span>
          <button id="mod">
            <div class="svg-wrapper-1">
              <div class="svg-wrapper">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="24"
                  height="24"
                >
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path
                    fill="currentColor"
                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                  ></path>
                </svg>
              </div>
            </div>
            <span>Explore</span>
          </button>
        </p>
      </form>
    </div>
  </div>
  <div class="not-sure" id="notsure">
    <div class="not-txt">
      <h1>Not sure where to start?</h1>
      <p>UMatter can connect you to mental health support. </p>
    </div>
    <div class="not-card">
      <div class="card1 card" onmouseover="fun1()" onmouseout="resetBackground()">
        <a href="assesment/test.html">Try our online quiz</a>
        <p>Start our mental health assessment.</p>
        <div class="img1 img"></div>
      </div>
      <div class="card2 card" onmouseover="fun2()" onmouseout="resetBackground()">
        <a href="./music/tunestream/index.html">Tune your mood</a>
        <p>Find peace with our music.</p>
        <div class="img2 img"></div>
      </div>
      <div class="card3 card" onmouseover="fun3()" onmouseout="resetBackground()">
        <a href="calm/calm.html">Calm Corner</a>
        <p>Explore serenity at our Calm Corner oasis.</p>
        <div class="img3 img"></div>
      </div>
    </div>
  </div>
  <div class="tips">
    <div class="tipdiv">
      <h1 id="tip-txt">Tips for maintaining your wellbeing and seeking support</h1>
    </div>
    <div class="tip-list">
      <div class="tip-1 tip">
        <div class="tip-img1 tipim"></div>
        <div class="tip-info1 tipin">
          <p>Establish a Routine: Create a consistent daily routine that includes dedicated time for sleep, meals, studying, and breaks. This helps maintain balance and reduces stress by providing structure to your day.
          </p>
        </div>
      </div>
      <div class="tip-2 tip">
        <div class="tip-img2 tipim"></div>
        <div class="tip-info2 tipin">
        <p>⁠Stay Connected: Regularly connect with friends, family, and classmates. Building and maintaining supportive relationships can help you feel understood, valued, and less isolated during challenging
times.</p>
        </div>
      </div>
      <div class="tip-3 tip">
        <div class="tip-img3 tipim"></div>
        <div class="tip-info3 tipin">
          <p>⁠Learn Stress Management Techniques: Explore various stress management techniques such as
deep breathing exercises, progressive muscle relaxation or keeping a journal.  
</p>
        </div>
      </div>
      <div class="tip-4 tip">
        <div class="tip-img4 tipim"></div>
        <div class="tip-info4 tipin">
          <p>⁠Engage in Hobbies and Relaxation: Make time for activities you enjoy, whether it's reading
playing a musical instrument, or spending time outdoors. Engaging in hobbies  
  can help recharge your mind.</p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="fot-logo">
      <div class="logo-fot">UMatter</div>
    </div>
    <div class="privacy">
      <div class="privacy-con">
        <pre>
          2024 ©UMatter, Inc. All Rights Reserved.       
          Privacy Policy   Terms of Service   Contact Information 
        </pre>
      </div>
    </div>
  </footer>

  <!-- <script src="home_pg.js"></script> -->
  <script src="home_pgs.js">
window.embeddedChatbotConfig = {
chatbotId: "Qc7rT2mkKkSYvU6LmJ_Uq",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="Qc7rT2mkKkSYvU6LmJ_Uq"
domain="www.chatbase.co"
defer>
</script>
</body>
</html>
