<?php  

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST["submit"]))  
{  
      if(empty($_POST["day1a"]))  
      {  
        //   array_push($error,"Enter Day1a");
            $error = "Enter Day1a";  
      } else{
          $day1a = test_input($_POST["day1a"]);
          if(!preg_match("/^[a-zA-Z ]*$/",$day1a)){
            $error = "Only letters allowed";
          }
      } 
      if(empty($_POST["day1b"]))  
      {  
        array_push($error,"Enter Day1b");
        //    $error = "Enter Day1b";  
      }  
      if(empty($_POST["day1c"]))  
      {  
        array_push($error,"Enter Day1c");
        //    $error = "Enter Day1c";  
      }
      if(empty($_POST["day2a"]))  
      {  
        array_push($error,"Enter Day2a");
        //    $error = "Enter Day2a";  
      }  
      if(empty($_POST["day2b"]))  
      {  
        array_push($error,"Enter Day2b");
        //    $error = "Enter Day2b";  
      }  
      if(empty($_POST["day2c"]))  
      {  
        array_push($error,"Enter Day2c");
        //    $error = "Enter Day2c";  
      }
      if(empty($_POST["day3a"]))  
      {  
        array_push($error,"Enter Day3a");
        //    $error = "Enter Day3a";  
      }  
      if(empty($_POST["day3b"]))  
      {  
        array_push($error,"Enter Day3b");
        //    $error = "Enter Day3b";  
      }  
      if(empty($_POST["day3c"]))  
      {  
        array_push($error,"Enter Day3c");
        //    $error = "Enter Day3c";  
      }
      if(empty($_POST["day4a"]))  
      {  
        array_push($error,"Enter Day4a");
        //    $error = "Enter Day4a";  
      }  
      if(empty($_POST["day4b"]))  
      {  
        array_push($error,"Enter Day4b");
        //    $error = "Enter Day4b";  
      }  
      if(empty($_POST["day4c"]))  
      {  
        array_push($error,"Enter Day4c");
        //    $error = "Enter Day4c";  
      }
      if(empty($_POST["day5a"]))  
      {  
        array_push($error,"Enter Day5a");
        //    $error = "Enter Day5a";  
      }  
      if(empty($_POST["day5b"]))  
      {  
        array_push($error,"Enter Day5b");
        //    $error = "Enter Day5b";  
      }  
      if(empty($_POST["day5c"]))  
      {  
        array_push($error,"Enter Day5c");
        //    $error = "Enter Day5c";  
      }
      if(empty($_POST["day6a"]))  
      {  
        array_push($error,"Enter Day6a");
        //    $error = "Enter Day6a";  
      }  
      if(empty($_POST["day6b"]))  
      {  
        array_push($error,"Enter Day6b");
        //    $error = "Enter Day6b";  
      }  
      if(empty($_POST["day6c"]))  
      {  
        array_push($error,"Enter Day6c");
        //    $error = "Enter Day6c";  
      }
      if(empty($_POST["day7a"]))  
      {  
        array_push($error,"Enter Day7a");
        //    $error = "Enter Day7a";  
      }  
      if(empty($_POST["day7b"]))  
      {  
        array_push($error,"Enter Day7b");
        //    $error = "Enter Day7b";  
      }  
      if(empty($_POST["day7c"]))  
      {  
        array_push($error,"Enter Day7c");
        //    $error = "Enter Day7c";  
      }
      if(empty($_POST["day8a"]))  
      {  
        array_push($error,"Enter Day8a");
        //    $error = "Enter Day8a";  
      }  
      if(empty($_POST["day8b"]))  
      {  
        array_push($error,"Enter Day8b");
        //    $error = "Enter Day8b";  
      }  
      if(empty($_POST["day8c"]))  
      {  
        array_push($error,"Enter Day8c");
        //    $error = "Enter Day8c";  
      }
      if(empty($_POST["day9a"]))  
      {  
        array_push($error,"Enter Day9a");
        //    $error = "Enter Day9a";  
      }  
      if(empty($_POST["day9b"]))  
      {  
        array_push($error,"Enter Day9b");
        //    $error = "Enter Day9b";  
      }  
      if(empty($_POST["day9c"]))  
      {  
        array_push($error,"Enter Day9c");
        //    $error = "Enter Day9c";  
      }
      if(empty($_POST["day10a"]))  
      {  
        array_push($error,"Enter Day10a");
        //    $error = "Enter Day10a";  
      }  
      if(empty($_POST["day10b"]))  
      {  
        array_push($error,"Enter Day10b");
        //    $error = "Enter Day10b";  
      }  
      if(empty($_POST["day10c"]))  
      {  
        array_push($error,"Enter Day10c");
        //    $error = "Enter Day10c";  
      }
      if(empty($_POST["day11a"]))  
      {  
        array_push($error,"Enter Day11a");
        //    $error = "Enter Day11a";  
      }  
      if(empty($_POST["day11b"]))  
      {  
        array_push($error,"Enter Day11b");
        //    $error = "Enter Day11b";  
      }  
      if(empty($_POST["day11c"]))  
      {  
        array_push($error,"Enter Day11c");
        //    $error = "Enter Day11c";  
      }
      if(empty($_POST["day12a"]))  
      {  

        array_push($error,"Enter Day12a");
        //    $error = "Enter Day12a";  
      }  
      if(empty($_POST["day12b"]))  
      {  
        array_push($error,"Enter Day12b");
        //    $error = "Enter Day12b";  
      }  
      if(empty($_POST["day12c"]))  
      {  
        array_push($error,"Enter Day12c");
        //    $error = "Enter Day12c";  
      }
      if(empty($_POST["day13a"]))  
      {  
        array_push($error,"Enter Day13a");
        //    $error = "Enter Day13a";  
      }  
      if(empty($_POST["day13b"]))  
      {  
        array_push($error,"Enter Day13b");
        //    $error = "Enter Day13b";  
      }  
      if(empty($_POST["day13c"]))  
      {  
        array_push($error,"Enter Day13c");
        //    $error = "Enter Day13c";  
      }
      if(empty($_POST["day14a"]))  
      {  
        array_push($error,"Enter Day14a");
        //    $error = "Enter Day14a";  
      }  
      if(empty($_POST["day14b"]))  
      {  
        array_push($error,"Enter Day14b");
        //    $error = "Enter Day14b";  
      }  
      if(empty($_POST["day14c"]))  
      {  
        array_push($error,"Enter Day14c");
        //    $error = "Enter Day14c";  
      }
      if(empty($_POST["q1"]))  
      {  
        array_push($error,"Enter q1");
        //    $error = "Enter q1";  
      }  
      if(empty($_POST["q2"]))  
      {  
        array_push($error,"Enter q2");
        //    $error = "Enter q2";  
      }  
      if(empty($_POST["q3"]))  
      {  
        array_push($error,"Enter q3");
        //    $error = "Enter q3";  
      }
      if(empty($_POST["q4"]))  
      {  

        array_push($error,"Enter q4");
        //    $error = "Enter q4";  
      }  
      if(empty($_POST["q5"]))  
      {  
        array_push($error,"Enter q5");
        //    $error = "Enter q5";  
      }  
      if(empty($_POST["q6"]))  
      {  
        array_push($error,"Enter q6");
        //    $error = "Enter q6";  
      }
      if(empty($_POST["q7"]))  
      {  
        array_push($error,"Enter q7");
        //    $error = "Enter q7";  
      }  
      if(empty($_POST["q8"]))  
      {  
        array_push($error,"Enter q8");
        //    $error = "Enter q8";  
      }  
      if(empty($_POST["q9"]))  
      {  
        array_push($error,"Enter q9");
        //    $error = "Enter q9";  
      }
      if(empty($_POST["q10"]))  
      {  
        array_push($error,"Enter q10");
        //    $error = "Enter q10";  
      }
    }
}
?>