<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Turf Wars Mob Adder</title>
    <link rel="stylesheet" href="Reset.css">
    <link rel="stylesheet" href="DEViANCE.css">
  </head>
  <body>
    <nav>
      <a href="#Top">Top</a>
      <a href="https://github.com/Yeehawlerz101">Github</a>
      <a href="mailto:nmaster98@yandex.com?subject=feedback_On_Turfwars_Project">E-mail Dev</a>
    </nav>
    <h2>Welcome to: GPSTurfWarsMobAdder</h2>
    <h5>Or in this case M.A.</h5>
    <p>This was cerated as an easy way to find and connect to new players using "Web-Scraping" to get information about the temp codes.</p>
    <div class="Directions">
      <h4>Directions</h4>
      <ol>
        <li>Have some sort of keyboard input automation app (Tasker/Hiromacro to name a few).</li>
        <li>Click on the "Send Request" button to send a request of what currnet temp codes there are available.</li>
        <li>Wait for about 15-30 seconds</li>
        <li>Click on Download and await for the arrival of the codes!</li>
        <li>Open the file in a text editor, select all lines of code and then paste them into your keyboard automation app</li>
        <li>Launch Turf Wars</li>
        <li>Go to the "Mob tab"</li>
        <li>Then tap into the invite mobsters text box</li>
        <li>Start your application that has the temp codes that you pasted in from earlier</li>
        <li>You should start to see that youre inviting people into your mob!</li>
        <hr>
        <li><h3>Optional</h3></li>
        <li>Donate $1</li>
<p>Q: Why shoud I (being you the visitor) donate?</p>
  I dont want to sound like a sob story but, currently I'm going to a communitty college, then a university to get a degree in software reverse engineering.  I'm working fulltime and living with may parents to help save on expenses. I spend a lot of my money on my old Buick Lesabre from '05 to afford gas and even going to work. By donating youll do a majority of 5, things.
      </ol>
    </div>
    <ul>
      <li>Help me afford college (tust me every anything helps).</li>
      <li>Allow me to accomplish my dreams</li>
      <li>Put hope in myself knowing that at least someone liked what I did</li>
      <li>It gives a goal to some of my projects</li>
      <li>I can sleep easier at night since I won't be so desperate for looking for another job.</li>
    </ul>
    <main>
      <div class="Temp-Code-Send-Request">
        <a href=""><button type="button" name="Send Request"class="Button-Sync">Request Mob Codes</button></a>
      </div>
      <div class="Donation">
        <button type="button" name="button"class="Button-Donation">Donate</button>
      </div>
      <div class="Temp-Code-Download-Request">
        <a href="https://www.parsehub.com/api/v2/runs/tr1TMcwRwRdh/data?api_key=ttxcPt83bTJO&format=csv"><button type="button" name="Download As .CSV File" class="Button-Recomended">Save Request as .csv</button></a>
        <a href="https://www.parsehub.com/api/v2/runs/tr1TMcwRwRdh/data?api_key=ttxcPt83bTJO&format=json"><button type="button" name="Download as .Json File" class="Button-Not-Reccomended">View request as .json</button></a> (Not reccomended)
      </div>
      <div class="Forum-Scrape">

      </div>
    </main>
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
    <footer>
    </footer>
  </body>
</html>
