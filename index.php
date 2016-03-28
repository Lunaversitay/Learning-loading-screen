<!-- Now we're in our index.php this is where everything is displayed -->

<!-- We want to require our core.php so this file reads it -->
<?php require_once('inc/core.php'); ?>

<!-- Now time to get the page down -->

<!DOCTYPE html>
<html>
<head>


</head>
  <body>
  
<!-- So we have everything intact such as our steam being synced to our loading screen, remember you should only see the ID you put in the $steamid64 on your browser.
  
 This example will show you how to echo out a steam username -->
<h1>Welcome, <?php echo $username; ?> to Friends Gaming</h1> // This will print out in H1 text Welcome, {Steam_Username} to Friends Gaming

<!-- Now here is an example of a profile image -->
<img src='<?php echo $steamprofileimg; ?>'> <!-- This will use the steam profile image that the user has set on their account.
// Note: I edited the core file cause using the src is easier to modify instead of going back into core.php
Note one more thing: Don't forget commenting with // works in PHP not html, I made that mistake already :( -->
  </body>
</html>
