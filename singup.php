<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up/ Sign In  </title>
  <link rel="stylesheet" href="https://raw.githack.com/Reyouf5/adopt/main/style1.css">
</head>
<body>
<!-- partial:index.partial.html -->
<body>
<div class="page">

  <div class="panel">
    <div class="panel__visible">
      <div class="panel__content">
        <h1 class="panel__title">  Sign Up </h1>
     
<form class="form" action="insert.php" method="post">

          <label class="form__label" for="fullname">Full Name</label>
          <input class="form__input" type="text" id="fullname" name="fullname" required>

          <label class="form__label" for="username">Username</label>
          <input class="form__input" type="text" id="username" name="username" required>
          <label class="form__label" for="password">Password</label>
          <input class="form__input " type="password" id="password" name="password" required>
     
 <label class="form__label" for="email">email</label>
          <input class="form__input" type="text" id="email" name="email" required>
 <label class="form__label" for="phone">phone number</label>
          <input class="form__input" type="text" id="phone" name="phone" required>
<label class="form__label" for="username">Gender</label>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
          

<head>
<script type="text/javascript">
  function submitClick( ) //function shows message after submitting information
  {alert("Thank you for your time! Your details have been submitted!");}
 </script>
 </head>
<form  action="insert.php"  method="post">
<p><input class="form__btn" type="submit" name="send" value="Submit Details" onClick="submitClick( )"></p>

          <button class="form__toggle js-formToggle" type="button">Or, Sign In</button>
        </form>
      </div>

      <div class="panel__content panel__content--overlay js-panel__content ">
        <h1 class="panel__title">  Sign In </h1>
        <form class="form">
          <label class="form__label" for="email">Username</label>
          <input class="form__input" type="text" id="usernameIn" name="usernameIn">

          <label class="form__label" for="passwordIn">Password</label>
          <input class="form__input " type="password" id="passwordIn" name="passwordIn">
          <button class="form__btn" type="button" value="Submit">Sign In</button>
          <br>
          <button class="form__toggle js-formToggle" type="button">Or, Sign Up</button>
        </form>
      </div>
    </div>
    <div class="panel__back js-imageAnimate">
      <img class="panel__img" src="https://i.pinimg.com/564x/6a/f2/63/6af2630fbc12b0aa8ca073eeebd5e127.jpg" />
    </div>
  </div>

</div>
</body>
<!-- partial -->
  <script  src="https://raw.githack.com/Reyouf5/adopt/main/script.js"></script>

</body>
</html>
