<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php
  include_once "header.php";
?>
<body>
   <div class="wrapper">
     <section class="form login">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt"></div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" placeholder="Enter your email address" name="email">
          </div>
          <div class="field input">
           <label>Password</label>
            <input type="password" placeholder="Enter your password" name="password">
            <i class='fa fa-eye'></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat">
          </div>
        </form>
        <div class="link">Not yet signed up ?<a href="index.php">SignUp now</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>

