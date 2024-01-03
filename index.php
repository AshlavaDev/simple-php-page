<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple PHP Testing Page</title>
</head>
<body>
  <heading>
    <h1>Simple PHP Testing Page</h1>
    <!-- uses php to check server time -->
    <?php if ( date('G') > 18) : ?>
      <h2>Good Evening</h2>
    <?php elseif (date('G') < 12) : ?>
      <h2>Good Morning</h2>
    <?php else : ?>
      <h2>Good Afternoon</h2>    
    <?php endif ?>
  </heading>
  <div>
    <p>Welcome to this web page</p>
    <p>This page is designed to help me test PHP as I learn it for web development purposes. If the subheading shows the correct greeting for the current time of day for the server location, then that PHP at least works.</p>
    <?php 
      $currentTime = date('g:i A');
    ?>
      <p>The current server time is: <?php echo $currentTime; ?></p>
  </div>
  
</body>
</html>