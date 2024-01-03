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
    <?php if ( date('G') > 18) : ?>
      <h2>Good Evening</h2>
    <?php elseif (date('G') > 12) : ?>
      <h2>Good Morning</h2>
    <?php else : ?>
      <h2>Good Afternoon</h2>    
    <?php endif ?>
  </heading>
  <div>
    <p>Welcome to this web page</p>
    <p>This page is designed to help me test PHP as I learn it for web development purposes. If the subheading shows the correct greeting for your current time of day, then that PHP at least works.</p>
  </div>
  
</body>
</html>