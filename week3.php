<?php
    //This is needed on any page that is going to be running sessions to maintain the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The PHP Cheat Sheet - Variables Arrays and Super Globals</title>
</head>

<style>
    html {
        font-family: sans-serif;
    }

    body {
        margin: 0;
    }

    section {
        transition: .3s all ease-in-out;
        padding: 5px;
    }

    section:hover {
        background-color: #dceaf2;
    }

    .wrapper {
        border: 1px solid #222;
        width: 70%;
        margin: 20px auto;
    }

    .header {
        background-color: #222;
        color: #fff;
        height: 40vh;
    }

    .header h1 {
        margin-top: 0;
        text-align: center;
        padding-top: 13vh;
        font-size: 100px;
        transition: .3s all ease-in-out;
        text-shadow: 10px 10px 5px #000;
    }

    .header h1:hover {
        color: #2cb0ff;
        transform: scale(1.2);
    }

    br {
        display: block;
        margin: 30px;
        content: "";
    }

    hr {
        border: 2px solid #2cb0ff;
    }

    .preface {
        border: 1px solid rgba(0, 234, 255, 0.26);
        background-color: rgba(0, 234, 255, 0.26);
    }

    .main {
        padding: 10px;
    }

    table {
        width: 90%;
        border: 1px solid;
        border-collapse: collapse;
        margin: 30px auto;
    }

    th, td {
        border: 1px solid #000;
        transition: .2s all ease-in-out;
    }

    th:hover, td:hover {
        background-color: red;
    }
</style>

<body>

    <div class="wrapper">

        <div class="header">
            <h1>If Elseif & Switch</h1>
        </div>

        <div class="main">

            <section class="preface">
                <p>If elseif and switch allow us to navigate up and down code.</p>
            </section>

            <section>
                <h1>If</h1>
                <h2>An if statement will run how we want it based off some condition being true or not. Like if we have a variable, we can check against that variable and see if some condition is true or not. Depending on if true or false we can give a different outcome.</h2>

    
                <p>//The variable</p>
                <p>$num = 10;</p>

                <p>//If statement - If the number is greater then 10...</p>
                <p>if ($num > 10)</p>
                <p>{</p>
                <p>//The conditional output</p>
                <p>echo "The number is greater then 10";</p>
                <p>}</p>   
                
                <br>

                <p>
                //Elseif statement if the variable of $num is equal to 10
                <br>
                elseif ($num == 10){
                <br>
                    &nbsp;//The conditional output
                    &nbsp;echo "The number is the same as 10";
                <br>
                }
                <br>
                <br>
                //Else statement
                <br>
                else
                <br>
                {
                    <br>
                    //The conditional output
                    <br>
                    echo "The number is less then 10";
                    <br>
                }
                </p>

                </p>
                <?php 
    
                    //The variable
                    $num = 10;

                    //If statement - If the number is greater then 10...
                    if ($num > 10)
                    {
                        //The conditional output
                        echo "The number is greater then 10";
                    }

                    //Elseif statement if the variable of $num is equal to 10
                    elseif ($num == 10){

                        //The conditional output
                        echo "The number is the same as 10";
                    }
                    
                    //Else statement
                    else
                    {
                        //The conditional output
                        echo "The number is less then 10";
                    }

                ?>
            </section>

            <hr>

            <section>

                <h1>elseif</h1>
                
                <?php 
    
                    //The variable
                    $num = 10;

                    //If statement - If the number is greater then 10...
                    if ($num > 10)
                    {
                        //The conditional output
                        echo "The number is greater then 10";
                    }

                    //Elseif statement if the variable of $num is equal to 10
                    elseif ($num == 10){

                        //The conditional output
                        echo "The number is the same as 10";
                    }
                    
                    //Else statement
                    else
                    {
                        //The conditional output
                        echo "The number is less then 10";
                    }
                
                ?>
                

            <hr>

            <section>
                <h1>Switch</h1>

                <?php
                    $food = "oxtail";

                    //Switch statement with the variable we want to check loaded in the () 
                    switch ($food) {

                        //We can have multiple cases in case there is different ways to spell it
                        case "Ox Tail":
                        case "ox tail":
                        case "Oxtail":
                        case "oxtail":
                            //echo out this conditional
                            echo "Ox Tail is my fave dish and the best part of the cow 🐂 ";
                            //Break
                            break;

                        //Same thing here with the different spelling 
                        case "Curry Goat":
                        case "curry goat":
                            //Echo out this conditional
                            echo "Curry Goat is a stewed dish which often contains potato and possibly chick peas🍲";
                            //Break
                            break;

                        //Same thing here with the different spelling 
                        case "Patty":
                        case "patty":
                            //Echo out this conditional
                            echo "Patties are also a staple all over the world 🌎";
                            //Break
                            break;
                        
                            //A default answer
                        default:
                            //Echo out a default . There is no need for a break after seeing as its the last one.
                            echo "It's ok I guess.";
                    }
                ?>
                
            </section>

            <hr>

            <section>
                <h1>Links in PHP</h1>
                
                <?php
                    //This is an associative array. 
                    $links = array(
                        0 => array (
                            'linkName' => 'Codecademy',
                            'linkURL' =>'https://www.codecademy.com/',
                            'linkImage' => 'https://production.cdmycdn.com/webpack/44e01805165bfde4e6e4322c540abf81.svg',
                            'linkDescription' => 'Learn to code interactively, for free.' ),
                        1 => array(
                            'linkName' => 'W3Schools',
                            'linkURL' => 'https://www.w3schools.com/',
                            'linkImage' => '',
                            'linkDescription' => 'W3Schools is optimized for learning, testing, and training.' ),
                        2 => array(
                            'linkName' => 'Mozilla Developer Network',
                            'linkURL' => 'https://www.codecademy.com/',
                            'linkImage' => '',
                            'linkDescription' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
                        );
                        

                    for( $i = 0; $i < 3; $i ++ )
                    {
                        //get the linkName and echo it
                        echo $links[$i]['linkName'] . '<br>';
                    }

                    echo '<br>';
                    
                    
                    for( $i = 0; $i < 3; $i ++ )
                    {   
                        //print out just the linkURLs
                        echo '<h1>'.$links[$i]['linkURL'].'</h1>';
                    }


                ?>
                
            </section>

            <hr>

            <section>
                <table>
                    <tr>
                        <th colspan="3">Arithmetic Operator</th>
                    </tr>
                    <tr>
                        <td>Operator</td>
                        <td>Name</td>
                        <td>Example	</td>
                    </tr>

                    <tr>
                        <td>+</td>
                        <td>Addition</td>
                        <td>$x + $y</td>
                    </tr>

                    <tr>
                        <td>-</td>
                        <td>Subtraction</td>
                        <td>$x - $y</td>
                    </tr>

                    <tr>
                        <td>*</td>
                        <td>Multiplication</td>
                        <td>$x * $y</td>
                    </tr>

                    <tr>
                        <td>/</td>
                        <td>Division</td>
                        <td>$x / $y	</td>
                    </tr>

                    <tr>
                        <td>%</td>
                        <td>Modulus</td>
                        <td>$x % $y</td>
                    </tr>

                    <tr>
                        <td>**</td>
                        <td>Exponentiation</td>
                        <td>$x ** $y</td>
                    </tr>
                </table>
            
		        <table>
                    <th colspan="2">Assignment Operator</th>
                    <tr>
                        
                        <td>= Equal to</td>
                    </tr>
                </table> 	

                <table>
                    <tr>
                        <th>Comparison Operator</th>
                      
                        <th>Description</th>
                    </tr>
             
                    <tr>
                        <td>==</td>
                        <td>equal</td>
                    </tr>
                    <tr>
                        <td>===</td>
                        <td>identical</td>
                    </tr>
                    <tr>
                        <td>!=</td>
                        <td>not equal</td>
                    </tr>
                    <tr>
                        <td>!==</td>
                        <td>not identical</td>
                    </tr>
                    <tr>
                        <td>&lt;&gt;</td>
                        <td>not equal</td>
                    </tr>
                    <tr>
                        <td>&lt;</td>
                        <td>less than</td>
                    </tr>
                    <tr>
                        <td>&lt;=</td>
                        <td>less than or equal</td>
                    </tr>
                    <tr>
                        <td>&gt;</td>
                        <td>greater than</td>
                    </tr>
                    <tr>
                        <td>&gt;=</td>
                        <td>greater than or equal</td>
                    </tr>
                    <tr>
                        <td>&lt;=&gt;</td>
                        <td>spaceship operator</td>
                    </tr>
               
                </table>


            </section>

        </div>

    </div>
    
</body>
</html>
