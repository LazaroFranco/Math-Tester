<?php
  $range_start1 = $_GET['range_start1'];
  $range_end1 = $_GET['range_end1'];
  
  $range_start2 = $_GET['range_start2'];
  $range_end2 = $_GET['range_end2'];

  $x = rand((int)$range_start1, (int)$range_end1);
  $y = rand((int)$range_start2, (int)$range_end2);


  $math= $_GET['math'];

  function math($x,$math,$y){
    if ($math == "+")
      $result = $x + $y;
      else if ($math == "-"){
        $result = $x - $y;
      }
      else if ($math == "/") {
        $result = $x / $y;
      }
      else if ($math == "*"){
        $result = $x * $y;
      }
    return $result;
  }
  $result = math($x,$math,$y);
  echo "answer: ", $result;
  echo "\n";
  //check if result is the answer
  //add one to counter of Attempt
  //add one to counter if Correct
  $answer = $_GET['answer'];
  echo "Your answer: ", $answer;
  $correct = 0;
  $attempt = 0;
  if ($result == $answer){
    $correct += 1;
    $attempt += 1;
  }

  else {
    $attempt += 1;
  }
?>

 
<!DOCTYPE html>
<html>
<head>
    <title>Class Project</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form action="" method="GET" class="row">

      <section class="column" style="background-color:#aaa;">
        <h2>Choose an Operator</h2>
          <select name="math">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="/">Divide</option>
            <option value="*">Multiply</option>
          </select>
      </section>

      <section class="column" style="background-color:#bbb;">
        <h2>Input your numbers</h2>
        <label for="first_number">First Number:</label>
          <input type="number" name="first_number" value="<?php echo $x; ?>" disabled >
          <br>
        <label for="second_number">Second Number:</label>
          <input type="number" name="second_number" value="<?php echo $y; ?>" disabled >
          <br>
        <label for="answer">What will the answer be?</label>
          <input type="number" name="answer">
          <button type="submit">CHECK ANSWER</button>
      </section>


      <section class="column" style="background-color:#ccc;">
        <form action="" method="POST" class="column"/``>
          <h2>Range</h2>
          <h3>First Number</h3>
            <input type="number"  placeholder="start" name="range_start1"/>
            <input type="number"  placeholder="end" name="range_end1"/>
          <br>
          <h3>Second Number</h3> 
            <input type="number"  placeholder="start" name="range_start2"/>
            <input type="number"  placeholder="end" name="range_end2"/>
          <button type="submit">SET RANGE </button>
        </form>
        <br>
      </section>

    </form>
    <h1 name="attempt">Total Attempted: <?php echo $attempt; ?> </h1>
    <br>
    <h1 name="correct">Total Correct: <?php echo $correct; ?> </h1>
          
  </body>
</html>
