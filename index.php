<?php
  include_once "header.php";
?>
<body>
   <div class="wrapper">
     <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
             <input type="text" placeholder="First Name" name="fname" required>
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" placeholder="Last Name" name="lname" required>
           </div>
          </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" placeholder="Enter your email address" name="email" required>
          </div>
          <div class="field input">
           <label>Password</label>
            <input type="password" placeholder="Enter new password" name="password" required>
            <i class='fa fa-eye'></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" accept="image/png, image/gif, image/jpeg" name="image" required>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat">
          </div>
        </form>
        <div class="link">Already signed up ?<a href="login.php">Login now</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>
