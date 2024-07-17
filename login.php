<!DOCTYPE html>
<html>
<head>
  <title>Sign in</title>
  <link rel="stylesheet" href="./CSS/logincss.css">
</head>

<body>
  
  <!--scroll text and scrollicon here-->
  <div class="scroll-down">SCROLL DOWN
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/>
    </svg>
  </div>

  <!--Scrolling image inside this-->
  <div class="container"></div>
  <div class="modal">
      <div class="modal-container">
        
        <div class="modal-left">
          <!--wellcom and text here-->
          <h1 class="modal-title">Welcome!</h1>
          <p class="modal-desc">To Manage the student profile login here</p>

          <!--Email and password enter place-->
          <form method="post" action="login_php.php" id="signinForm">
            <div class="input-block">
              <label for="email" class="input-label">Email</label>
              <input type="email" name="email" id="email" placeholder="Enter the Email">
            </div>
            <div class="input-block">
              <label for="password" class="input-label">Password</label>
              <input type="password" name="password" id="password" placeholder="Enter the Password">
            </div>

          <!--forget password text and Login button here-->
          <div class="modal-buttons">
            <a href="signup.php" class="">Forgot your password?</a>
            <input type="submit" class="input-button" name="submit" value="Sing in">
          </div>
          </form>

          <!--dont have account and signup link here-->
          <p class="sign-up">Don't have an account? <a href="signup.php">Sign up now</a></p>

        </div>

        <!--login form side image here-->
        <div class="modal-right">
          <img src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dfd2ec5a01006fd8c4d7592a381d3776&auto=format&fit=crop&w=1000&q=80" alt="">
        </div>
        
        <!--login form, form cut button here-->
        <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
          <path d="M25 3C12.86158 3 3 12.86158 3 25C3 37.13842 12.86158 47 25 47C37.13842 47 47 37.13842 47 25C47 12.86158 37.13842 3 25 3zM25 5C36.05754 5 45 13.94246 45 25C45 36.05754 36.05754 45 25 45C13.94246 45 5 36.05754 5 25C5 13.94246 13.94246 5 25 5zM16.990234 15.990234A1.0001 1.0001 0 0 0 16.292969 17.707031L23.585938 25L16.292969 32.292969A1.0001 1.0001 0 1 0 17.707031 33.707031L25 26.414062L32.292969 33.707031A1.0001 1.0001 0 1 0 33.707031 32.292969L26.414062 25L33.707031 17.707031A1.0001 1.0001 0 0 0 32.980469 15.990234A1.0001 1.0001 0 0 0 32.292969 16.292969L25 23.585938L17.707031 16.292969A1.0001 1.0001 0 0 0 16.990234 15.990234z"/>
        </svg>
        </button>

      </div>
    <button class="modal-button">Click here to login</button>
  </div>

  <script>
    const body = document.querySelector("body");
    const modal = document.querySelector(".modal");
    const modalButton = document.querySelector(".modal-button");
    const closeButton = document.querySelector(".close-button");
    const scrollDown = document.querySelector(".scroll-down");
    let isOpened = false;

    const openModal = () => {
      modal.classList.add("is-open");
      body.style.overflow = "hidden";
    };

    const closeModal = () => {
      modal.classList.remove("is-open");
      body.style.overflow = "initial";
    };

    window.addEventListener("scroll", () => {
      if (window.scrollY > window.innerHeight / 3 && !isOpened) {
        isOpened = true;
        scrollDown.style.display = "none";
        openModal();
      }
    });

    modalButton.addEventListener("click", openModal);
    closeButton.addEventListener("click", closeModal);

    document.onkeydown = evt => {
      evt = evt || window.event;
      evt.keyCode === 27 ? closeModal() : false;
    };
  </script>

  <!--navigation bar-->
  <div class="navbar" style="background-color: #333; padding: 10px; position: fixed; top: 0; width: 100%; margin-top: 0px;">
            <a href="home.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Home</a>
            <a href="signup.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Add Admin</a>
            <a href="login.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Manage Student</a>
            <a href="setting.php" style="color: white; text-decoration: none; margin-right: 10%; margin-left: 10%">Setting</a>
    </div>

    <!--footer section-->
    <div class="footer" style="background-color: #333; color: white; padding: 10px; text-align: center; position: fixed; bottom: 0; width: 100%;">
        This is the student management system 2024
    </div>

</body>
</html>
