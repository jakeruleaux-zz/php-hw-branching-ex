<?php
  $input_temp = $_GET["temp"];
  $reply = whatTheWeather($input_temp);
  
  function whatTheWeather($input_temp)
  {
    if ($input_temp <= 60) {
      return "Its cold as hell!";
    } elseif ($input_temp >= 80) {
      return "Its too damn hot!";
    } else {
      return "That's nice";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>temp is</title>
</head>
<body>
    <div class="container">
        <h1>Holy Crap!</h1>
        <h3>You said its <?php echo $temp; ?></h3>

    </div>
</body>
</html>
