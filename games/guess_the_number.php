<?php require('../mysql_db.php'); ?>

<html>
   <link rel="stylesheet" href="../style.css">
<head>
   <title>Guess the Number</title>
   <script type="text/javascript">
   function toggleStarter(){
      const content = document.getElementById("starter");
      const easy = document.getElementById("easy");
      const moderate = document.getElementById("moderate");
      const hard = document.getElementById("hard");
      const insane = document.getElementById("insane");
      const one_mil = document.getElementById("one_mil");
      const play = document.getElementById("play");
      const score_div = document.getElementById("score_div");
      if (content.style.display === "none") {
         content.style.display = "block";
         easy.style.display = "none";
         moderate.style.display = "none";
         hard.style.display = "none";
         insane.style.display = "none";
         one_mil.style.display = "none";
         play.style.display = "none";
         score_div.style.display = "none";
      } else {
         content.style.display = "none";
      }
   }

   function play(max){
      const content = document.getElementById("play");
      content.style.display = "block";
      const guess_input = document.getElementById("guess_input");
      guess_input.style.display = "block";

      let the_number = Math.floor(Math.random() * max) + 1;
      document.getElementById("the_number").value = the_number;
      document.getElementById("the_number_copy").value = the_number;

      let num_guesses = 0;
      document.getElementById("num_guesses").value = num_guesses;
   }

   function guess(){
      const guess_input = document.getElementById("guess_input");
      const reveal = document.getElementById("reveal");
      const lower = document.getElementById("lower");
      const higher = document.getElementById("higher");
      const score_div = document.getElementById("score_div");
      const difficulty = document.getElementById("difficulty").value;
      let num_guesses = document.getElementById("num_guesses").value;
      let the_number = document.getElementById("the_number").value;
      let guess = document.getElementById("guess").value;

      num_guesses++;

      if (guess === the_number){
         reveal.style.display = "block";
         score_div.style.display = "block";
         lower.style.display = "none";
         higher.style.display = "none";
         guess_input.style.display = "none";
      } else if (guess > the_number){
         lower.style.display = "block";
         higher.style.display = "none";
      } else if (guess < the_number){
         lower.style.display = "none";
         higher.style.display = "block";
      }
      
      document.getElementById("prev_guess").value = guess;
      document.getElementById("prev_guess_copy").value = guess;
      document.getElementById("num_guesses").value = num_guesses;
      document.getElementById("score").value = num_guesses;
      document.getElementById("difficulty").value = difficulty;
      document.getElementById("the_number").value = the_number;
      document.getElementById("the_number_copy").value = the_number;

   }

   function easy(){
      const content = document.getElementById("easy");
      content.style.display = "block";
      document.getElementById("difficulty").value = "Easy";
   }

   function moderate(){
      const content = document.getElementById("moderate");
      content.style.display = "block";
      document.getElementById("difficulty").value = "Moderate";
   }

   function hard(){
      const content = document.getElementById("hard");
      content.style.display = "block";
      document.getElementById("difficulty").value = "Hard";
   }

   function insane(){
      const content = document.getElementById("insane");
      content.style.display = "block";
      document.getElementById("difficulty").value = "Insane";
   }

   function one_mil(){
      const content = document.getElementById("one_mil");
      content.style.display = "block";
      document.getElementById("difficulty").value = "1 in a Million";
   }

   </script>
   
   <a class="abutton" style="text-decoration: none;" href="../index.php">Go Back to Hub</a>
</head>
<body>     
   <fieldset style="margin:auto;width:90%;margin-bottom:10px;">
      <legend><h1>Guess the Number</h1></legend>
      <div id="starter">
         <h2>Welcome to "Guess the Number" game!</h2>
         <p>How to Play:
            <br>A random number will be chosen by the game, and it is your goal to guess the number with the least amount of guesses as you can do.
            <br><br>Choose a difficulty by clicking the button beside them.
         </p>

         <table border="1" style="margin: top 10px;">
            <tr><td><button onClick="toggleStarter();easy();play(10);" type="button" style="text-decoration: none;">&nbsp;</button></td><td>Easy</td><td>1 - 10</td></tr>
            <tr><td><button onClick="toggleStarter();moderate();play(100);" type="button" style="text-decoration: none;">&nbsp;</button></td><td>Moderate</td><td>1 - 100</td></tr>
            <tr><td><button onClick="toggleStarter();hard();play(1000);" type="button" style="text-decoration: none;">&nbsp;</button></td><td>Hard</td><td>1 - 1,000</td></tr>
            <tr><td><button onClick="toggleStarter();insane();play(10000);" type="button" style="text-decoration: none;">&nbsp;</button></td><td>Insane</td><td>1 - 10,000</td></tr>
            <tr><td><button onClick="toggleStarter();one_mil();play(1000000);" type="button" style="text-decoration: none;">&nbsp;</button></td><td>1 in a Million</td><td>1 - 1,000,000</td></tr>
         </table>
      </div>
      
      <div id="easy" style="display:none;"><h2>Difficulty: Easy (1 - 10)</h2></div>
      <div id="moderate" style="display:none;"><h2>Difficulty: Moderate (1 - 100)</h2></div>
      <div id="hard" style="display:none;"><h2>Difficulty: Hard (1 - 1,000)</h2></div>
      <div id="insane" style="display:none;"><h2>Difficulty: Insane (1 - 10,000)</h2></div>
      <div id="one_mil" style="display:none;"><h2>Difficulty: 1 in a Million (1 - 1,000,000)</h2></div>

      <div id="play" style="display:none;">
         <p>Type your answer in the input box, then click "Guess" to submit it.
            <br>Number of Guesses: <input style="border:none;" id="num_guesses" readonly>
         </p>

         <table id="guess_input" style="margin: top 10px;">
            <tr><td><button onClick="guess();" type="button" style="text-decoration: none;">Guess</button></td><td><input type="number" id="guess"></td></tr>
         </table>
         <br>

         <div id="lower" style="display:none;"><h5>The Number is LOWER than <input style="border:none;" id="prev_guess" readonly></h5></div>
         <div id="higher" style="display:none;"><h5>The Number is HIGHER than <input style="border:none;" id="prev_guess_copy" readonly></h5></div>
         <div id="reveal" style="display:none;"><h5>Congratulations! The Number was <input style="border:none;" id="the_number" readonly></h5></div>
      </div>
      <div id="score_div" style="display:none;">
         <form name="submit" method="POST">
            <table border="1">
               <tr><td>Input Name</td><td><input name="player_name" id="player_name" type="text"></td></tr>
               <tr><td>Score</td><td><input name="score" id="score" type="number" readonly></td></tr>
               <tr><td>Difficulty</td><td><input name="difficulty" id="difficulty" type="text" readonly></td></tr>
            </table>
            <button name="submit" id="submit">SUBMIT</button>
         </form>
      </div>
   </fieldset>

   <h2>Highscores</h2>

   <div style="display: flex; gap: 20px; margin-bottom: 10px;">
   
      <table border="1" style="border-width:2px;margin:auto;width:80%;margin-bottom:5px;">
         <tr style="font-weight:bold;text-align:center;"><td colspan="2">EASY</td></tr>
         <tr style="font-weight:bold;text-align:center;"><td>Name</td><td width="10%">Score</td></tr>
         <?php
            $sql = "SELECT * FROM gtn_scores WHERE difficulty='Easy' ORDER BY score DESC";
            $result = mysqli_query($con, $sql);

            if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                     $player_name = $row['player_name'];
                     $score = $row['score'];
                     echo '<tr><td>'.$player_name.'</td><td>'.$score.'</td></tr>';
                  }
            }
         ?>
      </table>

      <table border="1" style="border-width:2px;margin:auto;width:80%;margin-bottom:5px;">
         <tr style="font-weight:bold;text-align:center;"><td colspan="2">MODERATE</td></tr>
         <tr style="font-weight:bold;text-align:center;"><td>Name</td><td width="10%">Score</td></tr>
         <?php
            $sql = "SELECT * FROM gtn_scores WHERE difficulty='Moderate' ORDER BY score DESC";
            $result = mysqli_query($con, $sql);

            if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                     $player_name = $row['player_name'];
                     $score = $row['score'];
                     echo '<tr><td>'.$player_name.'</td><td>'.$score.'</td></tr>';
                  }
            }
         ?>
      </table>

   </div>
   <div style="display: flex; gap: 20px; margin-bottom: 10px;">

   <table border="1" style="border-width:2px;margin:auto;width:80%;margin-bottom:5px;">
      <tr style="font-weight:bold;text-align:center;"><td colspan="2">HARD</td></tr>
      <tr style="font-weight:bold;text-align:center;"><td>Name</td><td width="10%">Score</td></tr>
      <?php
         $sql = "SELECT * FROM gtn_scores WHERE difficulty='Hard' ORDER BY score DESC";
         $result = mysqli_query($con, $sql);

         if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                  $player_name = $row['player_name'];
                  $score = $row['score'];
                  echo '<tr><td>'.$player_name.'</td><td>'.$score.'</td></tr>';
               }
         }
      ?>
   </table>

   <table border="1" style="border-width:2px;margin:auto;width:80%;margin-bottom:5px;">
      <tr style="font-weight:bold;text-align:center;"><td colspan="2">INSANE</td></tr>
      <tr style="font-weight:bold;text-align:center;"><td>Name</td><td width="10%">Score</td></tr>
      <?php
         $sql = "SELECT * FROM gtn_scores WHERE difficulty='Insane' ORDER BY score DESC";
         $result = mysqli_query($con, $sql);

         if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                  $player_name = $row['player_name'];
                  $score = $row['score'];
                  echo '<tr><td>'.$player_name.'</td><td>'.$score.'</td></tr>';
               }
         }
      ?>
   </table>

   </div>

   <table border="1" style="border-width:2px;margin:auto;width:80%;margin-bottom:5px;">
      <tr style="font-weight:bold;text-align:center;"><td colspan="2">1 IN A MILLION</td></tr>
      <tr style="font-weight:bold;text-align:center;"><td>Name</td><td width="10%">Score</td></tr>
      <?php
         $sql = "SELECT * FROM gtn_scores WHERE difficulty='1 in a Million' ORDER BY score DESC";
         $result = mysqli_query($con, $sql);

         if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                  $player_name = $row['player_name'];
                  $score = $row['score'];
                  echo '<tr><td>'.$player_name.'</td><td>'.$score.'</td></tr>';
               }
         }
      ?>
   </table>

   <?php
      if(isset($_POST['submit'])){
         $player_name = $_POST['player_name'];
         $score = $_POST['score'];
         $difficulty = $_POST['difficulty'];

         $sql = "INSERT INTO gtn_scores (player_name, score, difficulty) VALUES ('$player_name', '$score', '$difficulty')";
         $result = mysqli_query($con, $sql);
      }
   ?>
</body>
</html>