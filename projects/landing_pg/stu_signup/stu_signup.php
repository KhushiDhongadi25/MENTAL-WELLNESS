<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="stu_signups.css" />
    <title>Student-register</title>
  </head>

  <body>
  
    <div class="container" id="container">
    <div class="form-container sign-up">

    <form action="login.php" method="POST">
          <h1 id="sin">Student Login</h1>
          <div class="form__group field">
            <input
              type="input"
              class="form__field"
              placeholder="Name"
              required=""
              name="username"
            />
            <label for="name" class="form__label"> Username</label>
          </div>
          <div class="form__group field">
            <input
              type="password"
              class="form__field"
              placeholder="Name"
              required=""
              name="password"
            />
            <label for="name" class="form__label"> Password</label>
          </div>
          <a href="#">Forget Your Password?</a>
          <input type="submit" id="submits" value="Login" name="login">
        </form>

    
              </div>
      <div class="form-container sign-in">
      <form  action="register.php" method="POST" id="myForm">
          <h1 id="cre-acc">Create Account</h1>
          <div class="form__group field">
            <input
              type="input"
              class="form__field"
              placeholder="Name"
              required=""
              name="username"
            />
            <label for="name" class="form__label"> Username</label>
          </div>
          <div class="form__group field">
            <input
              type="input"
              class="form__field"
              placeholder="Name"
              required=""
              id="email"
              name="email"
            />
            <p id="emailError" class="error-message">Please enter a valid email address.</p>
            <label for="email" class="form__label"> Email</label>
          </div>
          <div class="form__group field">
            <input
              type="password"
              class="form__field"
              placeholder="Name"
              required=""
              id="password"
              name="password"
            />
            <p id="passwordError" class="error-message">Password must be atleast 8 characters.</p>
            <label for="name" class="form__label"> Password</label>
          </div>
          <input type="submit" id="submits" value="Sign Up" name="sign up">
          <p style='color:red;font-size:1vw;margin-top:45px;border:solid;height:2vw;padding:5px 8px 0 8px;border-radius:8px;background-color:rgba(255, 0, 0, 0.108);display:none' id="message">
            <?php
              if (isset($_GET['message'])) {
                echo htmlspecialchars($_GET['message']);
                echo "<script>";
                echo "document.addEventListener('DOMContentLoaded', function() {";
                echo "    var para = document.getElementById('message');";
                echo "    para.style.display = 'block';";
                echo "});";
                echo "</script>";
              }
            ?>
          </p>
          <p style='color:green;font-size:1vw;margin-top:45px;border:solid;height:2.5vw;padding:9px 8px 0 8px;border-radius:8px;background-color:rgba(0, 255, 55, 0.178);display:none' id="messages">
            <?php
              if (isset($_GET['messages'])) {
                echo htmlspecialchars($_GET['messages']);
                echo "<script>";
                echo "document.addEventListener('DOMContentLoaded', function() {";
                echo "    var para = document.getElementById('messages');";
                echo "    para.style.display = 'block';";
                echo "});";
                echo "</script>";
              }
            ?>
          </p>
         </form>
        
      </div>
 
           <div class="toggle-container">
        <div class="toggle">
         
          
          <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
            <p id="wel-con">
              Enter your personal details to use all of site features
            </p>
            <p id="registers">New User?</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
          <div class="toggle-panel toggle-right">
          <h1 id="tog1">Hello, Friend!</h1>
            <p id="tog2">
              Register with your personal details to use all of site features
            </p>
            <p id="registers" >Already have an account?</p>
            <button class="hidden" id="login">Login</button>
            
          </div>
        </div>
      </div>
    </div>
    <script src="script1.js">
     
    </script>
  </body>
</html>
