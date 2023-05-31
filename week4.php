<style>
html {
    font-family: sans-serif;
}

body {
    margin: 0;
}

.wrapper {
    width: 80%;
    margin: 50px auto;
    border: 1px solid #222;
    box-shadow: 1px 1px 10px #222;
}

.container {
    padding: 5px;
}

.header {
    height: 50vh;
    background: linear-gradient(45deg, #444, #222);
}

.header h1 {
    margin-top: 0;
    text-align: center;
    padding-top: 20vh;
    font-size: 4vw;
    color: #fff;
    text-shadow: 5px 5px 10px #000;
    transition: .3s all ease-in-out;
}

.header:hover > h1 {
    transform: scale(1.5);
    color: skyblue;
    padding-top: 16vh;
}

section {
    transition: .3s all ease-in-out;
}

.code {
    background-color: black;
    color: white;
}

section:hover {
    background-color: #999;
}
</style>

<?php
    ////////////////////////////////////////////////
    //loops/////////////////////////////////////////
    ////////////////////////////////////////////////

    /*
    There are 4 kinds of loops:

    while 
    do-while
    for
    foreach

    */

    //echo out some HTML structure
    echo '<div class="wrapper">';
    echo '<div class="header">';
    echo '<h1>Loops & Functions</h1>';
    echo '</div>';
    echo '<div class="container">';
   
    echo '<hr>';

    echo '<section>';

        //while loop
        echo '<h1>While loop</h1>';

        // A while loop will loop continually as long as the condition is true.
        echo '<h2>A while loop will loop continually as long as the condition is true.</h2>';
        echo '<p>In the example below the num variable is equal to 1. While (the number is less than or equal to 10) {echo out the loop number and add 1} Once we get to 10 the loop will be false and thus it will stop.</p>';

        echo '<br>';

        //make the variable. While the number is less then or equal to 10 run the loop and increment up by 1.
        $num = 1;
        while ($num <=10) {
            echo "Loop Number<br> " . $num++;
        }

    echo '</section>';

    echo '<hr>';

    echo '<section>';

        //do-while loop//
        echo '<h1>Do-while loop</h1>';
        
        //A do-while loop will always run the code at least 1 time and check against the condition to see if it is true or false. If it true it will keep running, if it is false it will stop after the 1st cycle.
        echo '<h2>A do-while loop will always run the code at least 1 time and check against the condition to see if it is true or false. If it true it will keep running, if it is false it will stop after the 1st cycle.</h2>';
        echo '<p>In the case below the variable newnumber is = to 10, do will loop until the condition is met, that condition being while the variable newnumber is = or greater then 20.</p>';

        echo '<br>';

        //Make the variable. Run the loop which will run until the while condition is met. 
        $newnum = 10;
        do {
            echo "New Loop Number <br>" . $newnum++ ;
        }
        while ($newnum <= 20);


    echo '</section>';
    
    echo '<hr>';

    echo '<section>';

        //for loop//
        echo '<h1>For Loop</h1>';

        //A for loop will loop through a block of code a specific number of times.
        echo '<h2>A for loop will loop through a block of code a specific number of times.</h2>';
        echo '<p>In the case below. We declare the variable year as 2010; We state that if the year is less then or = to 2023; Add 1 more year incrementally. Once the condition is met (it getting to 2023) it will stop.</p>';
            

        //The for loop will run a set amount if times, in this case it will run while the number is less than 2023.
        for ($year = 2010; $year <= 2023; $year++){
            echo 'The Year is ' . $year . '<br>';
        }
    
    echo '</section>';

    echo '<hr>';

    echo '<section>';

        //foreach loop
        echo '<h1>For each loop</h1>';
        echo '<h2>The foreach loop is used to iterate over an arrays. If you need to go through each element of an array the foreach loop is best practice.</h2>';
        echo '<p>In the code below we just have an array which is a list of cars. Suppose we need to go through the list, we can use foreach to go through the list of cars and convert the plural to singular and list them individually.</p>';

        $cars = array('Genesis', '240SX', '300ZX', 'Silvia', 'EVO' );
        foreach ($cars as $car) {
        echo $car;
        echo '<br>';
        }
    
    echo '</section>';

    echo '<hr>';

    echo '<section>';

        echo '<h1>Functions</h1>';

        echo ('
        <h2>In php there are:</h2>

        <h2>Built in functions</h2>
        <p>These are pre built functions in PHP, which PHP has over 1000 of them. There is no way you will remember them all, rather you can reference them when you need to:</p>
        
        <a href="https://www.w3schools.com/php/php_ref_overview.asp">https://www.w3schools.com/php/php_ref_overview.asp</a>
        <br>
        
        <p>Alternatively you can just google “php built in functions” and find many results for different lists.</p>
        
        <h2>User defined functions - These are any function you make</h2> 

        <p>Reusable, better optimization, load code before needing it, easy to use.</p><br>
        ');

        //A Built in function
        echo '<h2>The builtin function below echos the date</h2>';
        // Prints the day, date, month, year, time, AM or PM
        echo gmdate("l jS \of F Y h:i:s A") . "<br>" . '<p>see more about gmdate() <a href="https://www.w3schools.com/php/func_date_gmdate.asp">here</a>';
        
        echo '<br><br>';

        echo '<h2>The user defined function below just echos out a string</h2>';
        //A simple function. Just a simple echo of a string wrapped in a function.
        function himynameis() {
            echo 'Hi my name is, slim shady.';
        }

        //Call the function when we need it
        himynameis();


        echo '<br>';

        echo '<p>Here we make a function num_nums and do some math with it so we can echo it out later.</p>';

        function num_nums($num1 = 10, $num2 = 5) {
            $value = $num1 * $num2;
            return $value; //return gets the result but does not print it
        }

        echo num_nums();

    echo '</section>';

    echo '</div>';//close the container
    echo '</div>';//close the wrapper
   
?>
