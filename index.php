<?php  

//API Url
$url = 'https://drug-education-project-backend.herokuapp.com/';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'day1a' => $_POST['day1a'],  
    'day1b' => $_POST["day1b"],  
    'day1c' => $_POST["day1c"], 
    'day2a' => $_POST['day2a'],  
    'day2b' => $_POST["day2b"],  
    'day2c' => $_POST["day2c"], 
    'day3a' => $_POST['day3a'],  
    'day3b' => $_POST["day3b"],  
    'day3c' => $_POST["day3c"],
    'day4a' => $_POST['day4a'],  
    'day4b' => $_POST["day4b"],  
    'day4c' => $_POST["day4c"],
    'day5a' => $_POST['day5a'],  
    'day5b' => $_POST["day5b"],  
    'day5c' => $_POST["day5c"],
    'day6a' => $_POST['day6a'],  
    'day6b' => $_POST["day6b"],  
    'day6c' => $_POST["day6c"],
    'day7a' => $_POST['day7a'],  
    'day7b' => $_POST["day7b"],  
    'day7c' => $_POST["day7c"],
    'day8a' => $_POST['day8a'],  
    'day8b' => $_POST["day8b"],  
    'day8c' => $_POST["day8c"],
    'day9a' => $_POST['day9a'],  
    'day9b' => $_POST["day9b"],  
    'day9c' => $_POST["day9c"],
    'day10a' => $_POST['day10a'],  
    'day10b' => $_POST["day10b"],  
    'day10c' => $_POST["day10c"],
    'day11a' => $_POST['day11a'],  
    'day11b' => $_POST["day11b"],  
    'day11c' => $_POST["day11c"],
    'day12a' => $_POST['day12a'],  
    'day12b' => $_POST["day12b"],  
    'day12c' => $_POST["day12c"],
    'day13a' => $_POST['day13a'],  
    'day13b' => $_POST["day13b"],  
    'day13c' => $_POST["day13c"],
    'day14a' => $_POST['day14a'],  
    'day14b' => $_POST["day14b"],  
    'day14c' => $_POST["day14c"],
    'q1' => $_POST['q1'],  
    'q2' => $_POST["q2"],  
    'q3' => $_POST["q3"], 
    'q4' => $_POST['q4'],  
    'q5' => $_POST["q5"],  
    'q6' => $_POST["q6"],
    'q7' => $_POST['q7'],  
    'q8' => $_POST["q8"],  
    'q9' => $_POST["q9"],
    'q10' => $_POST['q10'] 
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch); 

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["day1a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day1a</label>";  
      }  
      else if(empty($_POST["day1b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day1b</label>";  
      }  
      else if(empty($_POST["day1c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day1c</label>";  
      }
      else if(empty($_POST["day2a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day2a</label>";  
      }  
      else if(empty($_POST["day2b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day2b</label>";  
      }  
      else if(empty($_POST["day2c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day2c</label>";  
      }
      else if(empty($_POST["day3a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day3a</label>";  
      }  
      else if(empty($_POST["day3b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day3b</label>";  
      }  
      else if(empty($_POST["day3c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day3c</label>";  
      }
      else if(empty($_POST["day4a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day4a</label>";  
      }  
      else if(empty($_POST["day4b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day4b</label>";  
      }  
      else if(empty($_POST["day4c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day4c</label>";  
      }
      else if(empty($_POST["day5a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day5a</label>";  
      }  
      else if(empty($_POST["day5b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day5b</label>";  
      }  
      else if(empty($_POST["day5c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day5c</label>";  
      }
      else if(empty($_POST["day6a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day6a</label>";  
      }  
      else if(empty($_POST["day6b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day6b</label>";  
      }  
      else if(empty($_POST["day6c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day6c</label>";  
      }
      else if(empty($_POST["day7a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day7a</label>";  
      }  
      else if(empty($_POST["day7b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day7b</label>";  
      }  
      else if(empty($_POST["day7c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day7c</label>";  
      }
      else if(empty($_POST["day8a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day8a</label>";  
      }  
      else if(empty($_POST["day8b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day8b</label>";  
      }  
      else if(empty($_POST["day8c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day8c</label>";  
      }
      else if(empty($_POST["day9a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day9a</label>";  
      }  
      else if(empty($_POST["day9b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day9b</label>";  
      }  
      else if(empty($_POST["day9c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day9c</label>";  
      }
      else if(empty($_POST["day10a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day10a</label>";  
      }  
      else if(empty($_POST["day10b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day10b</label>";  
      }  
      else if(empty($_POST["day10c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day10c</label>";  
      }
      else if(empty($_POST["day11a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day11a</label>";  
      }  
      else if(empty($_POST["day11b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day11b</label>";  
      }  
      else if(empty($_POST["day11c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day11c</label>";  
      }
      else if(empty($_POST["day12a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day12a</label>";  
      }  
      else if(empty($_POST["day12b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day12b</label>";  
      }  
      else if(empty($_POST["day12c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day12c</label>";  
      }
      else if(empty($_POST["day13a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day13a</label>";  
      }  
      else if(empty($_POST["day13b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day13b</label>";  
      }  
      else if(empty($_POST["day13c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day13c</label>";  
      }
      else if(empty($_POST["day14a"]))  
      {  
           $error = "<label class='text-danger'>Enter Day14a</label>";  
      }  
      else if(empty($_POST["day14b"]))  
      {  
           $error = "<label class='text-danger'>Enter Day14b</label>";  
      }  
      else if(empty($_POST["day14c"]))  
      {  
           $error = "<label class='text-danger'>Enter Day14c</label>";  
      }
      else if(empty($_POST["q1"]))  
      {  
           $error = "<label class='text-danger'>Enter q1</label>";  
      }  
      else if(empty($_POST["q2"]))  
      {  
           $error = "<label class='text-danger'>Enter q2</label>";  
      }  
      else if(empty($_POST["q3"]))  
      {  
           $error = "<label class='text-danger'>Enter q3</label>";  
      }
      else if(empty($_POST["q4"]))  
      {  
           $error = "<label class='text-danger'>Enter q4</label>";  
      }  
      else if(empty($_POST["q5"]))  
      {  
           $error = "<label class='text-danger'>Enter q5</label>";  
      }  
      else if(empty($_POST["q6"]))  
      {  
           $error = "<label class='text-danger'>Enter q6</label>";  
      }
      else if(empty($_POST["q7"]))  
      {  
           $error = "<label class='text-danger'>Enter q7</label>";  
      }  
      else if(empty($_POST["q8"]))  
      {  
           $error = "<label class='text-danger'>Enter q8</label>";  
      }  
      else if(empty($_POST["q9"]))  
      {  
           $error = "<label class='text-danger'>Enter q9</label>";  
      }
      else if(empty($_POST["q10"]))  
      {  
           $error = "<label class='text-danger'>Enter q10</label>";  
      }
      else{
          echo $_POST["team"];
      }
    //   else  
    //   {  
    //        if(file_exists('data.json'))    //convert php associative array to json
    //        {  
    //             $current_data = file_get_contents('data.json');  
    //             $array_data = json_decode($current_data, true);  
    //             $extra = array(  
    //                  'day1a' => $_POST['day1a'],  
    //                  'day1b' => $_POST["day1b"],  
    //                  'day1c' => $_POST["day1c"], 
    //                  'day2a' => $_POST['day2a'],  
    //                  'day2b' => $_POST["day2b"],  
    //                  'day2c' => $_POST["day2c"], 
    //                  'day3a' => $_POST['day3a'],  
    //                  'day3b' => $_POST["day3b"],  
    //                  'day3c' => $_POST["day3c"],
    //                  'day4a' => $_POST['day4a'],  
    //                  'day4b' => $_POST["day4b"],  
    //                  'day4c' => $_POST["day4c"],
    //                  'day5a' => $_POST['day5a'],  
    //                  'day5b' => $_POST["day5b"],  
    //                  'day5c' => $_POST["day5c"],
    //                  'day6a' => $_POST['day6a'],  
    //                  'day6b' => $_POST["day6b"],  
    //                  'day6c' => $_POST["day6c"],
    //                  'day7a' => $_POST['day7a'],  
    //                  'day7b' => $_POST["day7b"],  
    //                  'day7c' => $_POST["day7c"],
    //                  'day8a' => $_POST['day8a'],  
    //                  'day8b' => $_POST["day8b"],  
    //                  'day8c' => $_POST["day8c"],
    //                  'day9a' => $_POST['day9a'],  
    //                  'day9b' => $_POST["day9b"],  
    //                  'day9c' => $_POST["day9c"],
    //                  'day10a' => $_POST['day10a'],  
    //                  'day10b' => $_POST["day10b"],  
    //                  'day10c' => $_POST["day10c"],
    //                  'day11a' => $_POST['day11a'],  
    //                  'day11b' => $_POST["day11b"],  
    //                  'day11c' => $_POST["day11c"],
    //                  'day12a' => $_POST['day12a'],  
    //                  'day12b' => $_POST["day12b"],  
    //                  'day12c' => $_POST["day12c"],
    //                  'day13a' => $_POST['day13a'],  
    //                  'day13b' => $_POST["day13b"],  
    //                  'day13c' => $_POST["day13c"],
    //                  'day14a' => $_POST['day14a'],  
    //                  'day14b' => $_POST["day14b"],  
    //                  'day14c' => $_POST["day14c"],
    //                  'q1' => $_POST['q1'],  
    //                  'q2' => $_POST["q2"],  
    //                  'q3' => $_POST["q3"], 
    //                  'q4' => $_POST['q4'],  
    //                  'q5' => $_POST["q5"],  
    //                  'q6' => $_POST["q6"],
    //                  'q7' => $_POST['q7'],  
    //                  'q8' => $_POST["q8"],  
    //                  'q9' => $_POST["q9"],
    //                  'q10' => $_POST['q10']             
    //             );  
    //             $array_data[] = $extra;  
    //             $final_data = json_encode($array_data);  
    //             if(file_put_contents('data.json', $final_data))  
    //             {  
    //                  $message = "<label class='text-success'>Successfully</p>";  
    //             }  
    //        }  
    //        else  
    //        {  
    //             $error = 'JSON File not exits';  
    //        }  
    //   }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Form</title>  
      </head>  
      <body>  
            <div class="main">
                <div class="q1"> 
                    <h2>1. Alcohol Consumption in the Past 2 Weeks</h2>
                    <p>For A, did you consume alcohol for that day? Please state Yes or No.</p>
                    <p>For B, approximately how many drinks did you consume? Please input your amount in whole numbers.</p>
                    <p>For C, for how long did you consume these drinks (unit: hours)? Please input your amount in whole numbers.</p>

                        <form method="post">
                            <?php   
                                if(isset($error))  
                                {  
                                    echo $error;  
                                }  
                            ?>
                            <table class="calendar">  
                                <tr>
                                    <th>Sunday</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                </tr>
                                <tr>
                                    <td>
                                    <input text="text" placeholder="A" name="day1a"/>
                                    <input text="number" placeholder="B" name="day1b"/>
                                    <input text="number" placeholder="C" name="day1c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day2a"/>
                                    <input text="number" placeholder="B" name="day2b"/>
                                    <input text="number" placeholder="C" name="day2c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day3a"/>
                                    <input text="number" placeholder="B" name="day3b"/>
                                    <input text="number" placeholder="C" name="day3c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day4a"/>
                                    <input text="number" placeholder="B" name="day4b"/>
                                    <input text="number" placeholder="C" name="day4c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day5a"/>
                                    <input text="number" placeholder="B" name="day5b"/>
                                    <input text="number" placeholder="C" name="day5c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day6a"/>
                                    <input text="number" placeholder="B"name="day6b"/>
                                    <input text="number" placeholder="C" name="day6c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day7a"/>
                                    <input text="number" placeholder="B" name="day7b"/>
                                    <input text="number" placeholder="C" name="day7c"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sunday</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                </tr>
                                <tr>
                                    <td>
                                    <input text="text" placeholder="A" name="day8a"/>
                                    <input text="number" placeholder="B" name="day8b"/>
                                    <input text="number" placeholder="C" name="day8c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day9a"/>
                                    <input text="number" placeholder="B" name="day9b"/>
                                    <input text="number" placeholder="C" name="day9c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day10a"/>
                                    <input text="number" placeholder="B" name="day10b"/>
                                    <input text="number" placeholder="C" name="day10c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day11a"/>
                                    <input text="number" placeholder="B" name="day11b"/>
                                    <input text="number" placeholder="C" name="day11c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day12a"/>
                                    <input text="number" placeholder="B" name="day12b"/>
                                    <input text="number" placeholder="C" name="day12c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day13a"/>
                                    <input text="number" placeholder="B" name="day13b"/>
                                    <input text="number" placeholder="C" name="day13c"/>
                                    </td>
                                    <td>
                                    <input text="text" placeholder="A" name="day14a"/>
                                    <input text="number" placeholder="B" name="day14b"/>
                                    <input text="number" placeholder="C" name="day14c"/>
                                    </td>
                                </tr>
                            </table> 

                        <h2>2. Brief Young Adult Alcohol Consequences Questionnaire</h2>
                        <p>
                        Below is a list of things that sometimes happen to people either during or after they have been drinking alcohol.  Next to each item below, please mark an “X” in either the NO or the YES column to indicate whether that item describes something that has happened to you IN THE PAST YEAR.
                        </p>
                        
                            <table class="trueFalse">
                                <tr>
                                    <th>In the past year...</th>
                                    <th>YES</th>
                                    <th>NO</th>
                                </tr>
                                <tr>
                                    <td>1. I have had a hangover (headache, sick stomach) the morning after I had been drinking.</td>
                                    <td><input type="radio" name="q1" />&nbsp;</td>
                                    <td><input type="radio" name="q1" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>2. I have taken foolish risks when I have been drinking.</td>
                                    <td><input type="radio" name="q2" />&nbsp;</td>
                                    <td><input type="radio" name="q2" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>3. I’ve not been able to remember large stretches of time while drinking heavily.</td>
                                    <td><input type="radio" name="q3" />&nbsp;</td>
                                    <td><input type="radio" name="q3" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>4. The quality of my work or school work has suffered because of my drinking.</td>
                                    <td><input type="radio" name="q4" />&nbsp;</td>
                                    <td><input type="radio" name="q4" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>5. I have had less energy or felt tired because of my drinking.</td>
                                    <td><input type="radio" name="q5" />&nbsp;</td>
                                    <td><input type="radio" name="q5" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>6. My drinking has gotten me into sexual situations I later regretted.</td>
                                    <td><input type="radio" name="q6" />&nbsp;</td>
                                    <td><input type="radio" name="q6" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>7. I often have ended up drinking on nights when I had planned not to drink.</td>
                                    <td><input type="radio" name="q7" />&nbsp;</td>
                                    <td><input type="radio" name="q7" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>8. My physical appearance has been harmed by my drinking.</td>
                                    <td><input type="radio" name="q8" />&nbsp;</td>
                                    <td><input type="radio" name="q8" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>9. While drinking, I have said or done embarrassing things.</td>
                                    <td><input type="radio" name="q9" />&nbsp;</td>
                                    <td><input type="radio" name="q9" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>10. I have felt very sick to my stomach or thrown up after drinking.</td>
                                    <td><input type="radio" name="q10" />&nbsp;</td>
                                    <td><input type="radio" name="q10" />&nbsp;</td>
                                </tr>
                            </table>
                            <input type="submit" name="submit" value="Append"/><br />                      
                            <?php  
                            if(isset($message))  
                            {  
                                echo $message;  
                            }  
                            ?>
                        </form>
                    </div>
                    
                    <!-- <div class="q2">
                        <h2>2. Brief Young Adult Alcohol Consequences Questionnaire</h2>
                        <p>
                        Below is a list of things that sometimes happen to people either during or after they have been drinking alcohol.  Next to each item below, please mark an “X” in either the NO or the YES column to indicate whether that item describes something that has happened to you IN THE PAST YEAR.
                        </p>

                        <form method="post">
                            <?php   
                                if(isset($error))  
                                {  
                                    echo $error;  
                                }  
                            ?>
                            <table class="trueFalse">
                                <tr>
                                    <th>In the past year...</th>
                                    <th>YES</th>
                                    <th>NO</th>
                                </tr>
                                <tr>
                                    <td>1. I have had a hangover (headache, sick stomach) the morning after I had been drinking.</td>
                                    <td><input type="radio" name="q1" />&nbsp;</td>
                                    <td><input type="radio" name="q1" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>2. I have taken foolish risks when I have been drinking.</td>
                                    <td><input type="radio" name="q2" />&nbsp;</td>
                                    <td><input type="radio" name="q2" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>3. I’ve not been able to remember large stretches of time while drinking heavily.</td>
                                    <td><input type="radio" name="q3" />&nbsp;</td>
                                    <td><input type="radio" name="q3" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>4. The quality of my work or school work has suffered because of my drinking.</td>
                                    <td><input type="radio" name="q4" />&nbsp;</td>
                                    <td><input type="radio" name="q4" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>5. I have had less energy or felt tired because of my drinking.</td>
                                    <td><input type="radio" name="q5" />&nbsp;</td>
                                    <td><input type="radio" name="q5" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>6. My drinking has gotten me into sexual situations I later regretted.</td>
                                    <td><input type="radio" name="q6" />&nbsp;</td>
                                    <td><input type="radio" name="q6" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>7. I often have ended up drinking on nights when I had planned not to drink.</td>
                                    <td><input type="radio" name="q7" />&nbsp;</td>
                                    <td><input type="radio" name="q7" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>8. My physical appearance has been harmed by my drinking.</td>
                                    <td><input type="radio" name="q8" />&nbsp;</td>
                                    <td><input type="radio" name="q8" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>9. While drinking, I have said or done embarrassing things.</td>
                                    <td><input type="radio" name="q9" />&nbsp;</td>
                                    <td><input type="radio" name="q9" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>10. I have felt very sick to my stomach or thrown up after drinking.</td>
                                    <td><input type="radio" name="q10" />&nbsp;</td>
                                    <td><input type="radio" name="q10" />&nbsp;</td>
                                </tr>
                            </table> 
                            <input type="submit" name="submit" value="Append"/><br />                      
                            <?php  
                            if(isset($message))  
                            {  
                                echo $message;  
                            }  
                            ?>
                        </form>
                    </div>-->
                </div> 
                 
      </body>  
 </html>  