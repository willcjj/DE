// remember to add css(class=highlight)


<?php

session_start();

$name= $_POST['userId'];

$_SESSION['userId']= $name;

echo "Hi " .  $_SESSION['userId'];

?>




<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Form</title> 
           <link rel="stylesheet" type="text/css" href="style.css">
      </head>  
      <body>  
            <div class="main">
                <div class="q1"> 
                    <h2>1. Alcohol Consumption in the Past 2 Weeks</h2>
                    <p>For A, did you consume alcohol for that day? Please state <span class="highlight">Yes</span> or <span class="highlight">No</span>.</p>
                    <p>For B, approximately how many drinks did you consume? Please input your amount in <span class="highlight">whole numbers</span>.</p>
                    <p>For C, for how long did you consume these drinks (unit: hours)? Please input your amount in <span class="highlight">whole numbers</span>.</p>

                        <form method="post" action="process.php">
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
                                    A
                                    <input type="text" name="day1a" value=" "/>
                                    B
                                    <input type="number" name="day1b" value=" " />
                                    C
                                    <input type="number" name="day1c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day2a" value=" " />
                                    B
                                    <input type="number" name="day2b" value=" " />
                                    C
                                    <input type="number" name="day2c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day3a" value=" " />
                                    B
                                    <input type="number" name="day3b" value=" " />
                                    C
                                    <input type="number" name="day3c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day4a" value=" " />
                                    B
                                    <input type="number" name="day4b" value=" " />
                                    C
                                    <input type="number" name="day4c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day5a" value=" " />
                                    B
                                    <input type="number" name="day5b" value=" " />
                                    C
                                    <input type="number" name="day5c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day6a" value=" " />
                                    B
                                    <input type="number"name="day6b" value=" " />
                                    C
                                    <input type="number" name="day6c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day7a" value=" " />
                                    B
                                    <input type="number" name="day7b" value=" " />
                                    C
                                    <input type="number" name="day7c" value=" " />
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
                                    A
                                    <input type="text" name="day8a" value=" " />
                                    B
                                    <input type="number" name="day8b" value=" " />
                                    C
                                    <input type="number" name="day8c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day9a" value=" " />
                                    B
                                    <input type="number" name="day9b" value=" " />
                                    C
                                    <input type="number" name="day9c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day10a" value=" " />
                                    B
                                    <input type="number" name="day10b" value=" " />
                                    C
                                    <input type="number" name="day10c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day11a" value=" " />
                                    B
                                    <input type="number" name="day11b" value=" " />
                                    C
                                    <input type="number" name="day11c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day12a" value=" " />
                                    B
                                    <input type="number" name="day12b" value=" " />
                                    C
                                    <input type="number" name="day12c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day13a" value=" " />
                                    B
                                    <input type="number" name="day13b" value=" " />
                                    C
                                    <input type="number" name="day13c" value=" " />
                                    </td>
                                    <td>
                                    A
                                    <input type="text" name="day14a" value=" " />
                                    B
                                    <input type="number" name="day14b" value=" " />
                                    C
                                    <input type="number" name="day14c" value=" " />
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
                                    <td><input type="radio" name="q1" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q1" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>2. I have taken foolish risks when I have been drinking.</td>
                                    <td><input type="radio" name="q2" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q2" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>3. I’ve not been able to remember large stretches of time while drinking heavily.</td>
                                    <td><input type="radio" name="q3" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q3" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>4. The quality of my work or school work has suffered because of my drinking.</td>
                                    <td><input type="radio" name="q4" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q4" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>5. I have had less energy or felt tired because of my drinking.</td>
                                    <td><input type="radio" name="q5" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q5" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>6. My drinking has gotten me into sexual situations I later regretted.</td>
                                    <td><input type="radio" name="q6" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q6" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>7. I often have ended up drinking on nights when I had planned not to drink.</td>
                                    <td><input type="radio" name="q7" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q7" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>8. My physical appearance has been harmed by my drinking.</td>
                                    <td><input type="radio" name="q8" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q8" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>9. While drinking, I have said or done embarrassing things.</td>
                                    <td><input type="radio" name="q9" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q9" value="no" />&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>10. I have felt very sick to my stomach or thrown up after drinking.</td>
                                    <td><input type="radio" name="q10" value="yes" />&nbsp;</td>
                                    <td><input type="radio" name="q10" value="no" />&nbsp;</td>
                                </tr>
                            </table>
                            <br>
                            <input type="submit" name="submit" value="Submit"/><br />                      
                            
                        </form>
                    </div>
                    
                </div> 
                 
      </body>  
 </html>  