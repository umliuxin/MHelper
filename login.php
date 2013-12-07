<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MHelper-Profile</title>
  
  <!-- Load CSS Files -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="css/login.css">
  
  <!-- Load Script Files -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/jquery/jquery-ui.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  
</head>
<body>
  <div id="fullscreen_bg" class="fullscreen_bg"/>

  <div class="container">
    <form class="form-signin">
      <h1 class="form-signin-heading text-muted">MHelper</h1>
      <input type="text" class="form-control" placeholder="Email address" required="" autofocus="">
      <input type="password" class="form-control" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block" id="loginBtn" type="submit">
        Sign In
      </button>
      <div class="form-signin-text"><a href="index.php">Explore some examples</a></div>
    </form>
  </div>

</body>

<script>
  $(document).ready(function() {
    $('#loginBtn').click(function() {
    window.location.href = 'index.php';
    return false;
});
  })
</script>