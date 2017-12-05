<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Turf Wars Mob Adder</title>
    <link rel="stylesheet" href="Reset.css">
    <link rel="stylesheet" href="DEViANCE.css">
  </head>
  <body>

    <section class="PHP-Code">

      <?php
      $params = array(
        "api_key" => "ttxcPt83bTJO",
        "start_url" => "http://turfwarsuk.com/temp/",
        "start_template" => "main_template",
        "start_value_override" => "{\"API-Request\": \"Recived-From-Web\"}",
        "send_email" => "1"
      );

      $options = array(
        'http' => array(
          'method' => 'POST',
          'header' => 'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
          'content' => http_build_query($params)
        )
      );

      $context = stream_context_create($options);
      $result = file_get_contents('https://www.parsehub.com/api/v2/projects/tBeZQcb52tcH/run', false, $context);
      echo($result);
      ?>

    </section>
  </body>
</html>
