
<html>
<head><title>Mail Form</title></head>
<body>
<?php include "mailform.php" ?>
<form action="" method="post">
      <input id="vname" name="vname" placeholder="Your Name" type="text" required />
      <input id="vemail" name="vemail" placeholder="email@example.com" type="email" required />
      <textarea id="msg" name="msg" placeholder="Your Message" rows="7" required></textarea>
      <div class="g-recaptcha" data-sitekey="6LebofcSAAAAAFErs-g7o1zqwG9sl8nPzazncS_I"></div>
      <input type="submit" class="btn btn-success form-send" value="Send">
    </div>  
</form>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>


