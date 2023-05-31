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
</style>

<body>

    <div class="wrapper">

        <div class="header">
            <h1>Variables</h1>
        </div>

        <div class="main">

            <section class="preface">
                <h1>Preface:</h1>
                <h2>Before we begin, there is one thing we must understand. I will prove my point with some questions.</h2>
                <h2>Do you have memorized, every word in the dictionary of your 1st learned language?</h2>
                <h2>Whats 2+2? How about 349.50 + 879.22?</h2>

                <li>The answer to question 1 is no.</li>
                <li>The answer to question 2 is 4 which is common knowledge, but.</li>
                <li>The answer to question 3 is "let me get my calculator and find out".</li>

                <p>Why? Because A: It is impossible to remember every word in any language and B: Although we all know the sum of 2 and 2 is 4, we also have an operation that we can use to get more complex answers, thats the point. Language and math is an order of operation / protocol we use as an over all concept. We dont have to remember every minute detail of it, rather, we want to be familiar with the over all concept so we can look up whatever we don't know and know what to do. What we are learning here is no different.</p>

            </section>

            <section>
                <h1>Echo and Print</h1>
                <h2>Echo and print is how we display data on the html page. Any bit of data we work with in PHP can be called and displayed using these.</h2>

                <p><b>For a string:</b> echo 'the string in here';</p>
                <br>
                <p><b>For a number:</b> echo 123;</p>
                <br>
                <p><b>For a variable:</b> echo $varname;</p>
                <br>

                <?php 
                    //Echo
                    echo 'This is the thing being ECHOED out!';
                    //below we are just echoing out a br tag to make space
                    echo '<br>';
                    //print
                    print 'This is the thing being PRINTED out!';
                ?>
            </section>

            <hr>

            <section>
                <h1>Variables</h1>
                <h2>A variable is just like a container. It's a container that we can use to hold a bit of information. That data can be:</h2>
                <li>A string (Text and numbers)</li>
                <li>An integer (Whole number)</li>
                <li>A floating number (decimal Number)</li>
                <li>Boolean (T / F)</li>
                <li>Null (Nothing)</li>

                <p>A variable starts with a money / dollar sign $ and then a name we will give the variable. After that we add the content of the variable</p>
                <p>$varname = 'somecontent';</p>

                <?php
                    $varname = 'This is the content of the variable!🤩';
                    $first_number = 30;
                    $second_number = 70;
                ?>

                <p>After we create a variable we can do something with that data, like echo it out.</p>
                <p>echo $varname;</p>

                <?php
                    echo $varname;
                ?>

                <?php
                    echo $first_number + $second_number;
                ?>
            </section>

            <hr>

            <section>
                <h1>Arrays</h1>
                <h2>An array is just multiple variables at the same time.</h2>
                <p>
                    //makes an array of cars in this example.
                    <br>
                    $cars = array('Genesis', 'Volvo', 'Lambo', 'Lada');
                    <br>
                    //echo one of them out of the list, in this case its the 0th one (which is the 1st one on the list).
                    <br>
                    echo $cars[0];
                </p>

                <?php
                    //makes an array of cars in this example
                    $cars = array('Genesis', 'Volvo', 'Lambo', 'Lada');
                    //echo one of them out of the list, in this case its the 0th one (which is the 1st one on the list)
                    echo $cars[0];
                ?>
            </section>

            <hr>

            <section>
                <h1>Super Globals</h1>
                
                <h2>There are a bunch of built in variables in PHP. They all do sort of crucial things / regular things that are done on the regular in PHP so it makes it easier to have them built in! We will go through the basic ones here.</h2>

                <h2>$_SERVER</h2>
                <h3>Gets data about the server</h3>

                <?php
                    //Below are server variables returning information on the server. The . '<br>' at the end of each line is simply concatenating another string to the end of each line and passing a br tag through to break up each line. 
                    echo $_SERVER['PHP_SELF'] . '<br>';	//Returns the filename of the currently executing script .
                    echo $_SERVER['GATEWAY_INTERFACE'] . '<br>';	//Returns the version of the Common Gateway Interface (CGI) the server is using
                    echo $_SERVER['SERVER_ADDR'] . '<br>';	//Returns the IP address of the host server
                    echo $_SERVER['SERVER_NAME'] . '<br>';	//Returns the name of the host server (such as www.w3schools.com)
                    echo $_SERVER['SERVER_SOFTWARE'] . '<br>';	//Returns the server identification string (such as Apache/2.2.24)
                    echo $_SERVER['SERVER_PROTOCOL'] . '<br>';	//Returns the name and revision of the information protocol (such as HTTP/1.1)
                    echo $_SERVER['REQUEST_METHOD'] . '<br>';	//Returns the request method used to access the page (such as POST)
                    echo $_SERVER['REQUEST_TIME'] . '<br>';	//Returns the timestamp of the start of the request (such as 1377687496)
                    echo $_SERVER['QUERY_STRING'] . '<br>';	//Returns the query string if the page is accessed via a query string
                    echo $_SERVER['HTTP_ACCEPT'] . '<br>';	//Returns the Accept header from the current request
                    echo $_SERVER['HTTP_ACCEPT_CHARSET'] . '<br>';	//Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
                    echo $_SERVER['HTTP_HOST'] . '<br>';	//Returns the Host header from the current request
                    echo $_SERVER['HTTP_REFERER'] . '<br>';	//Returns the complete URL of the current page (not reliable because not all user-agents support it)
                    echo $_SERVER['HTTPS'] . '<br>';	//Is the script queried through a secure HTTP protocol
                    echo $_SERVER['REMOTE_ADDR'] . '<br>';	//Returns the IP address from where the user is viewing the current page
                    echo $_SERVER['REMOTE_HOST'] . '<br>';	//Returns the Host name from where the user is viewing the current page
                    echo $_SERVER['REMOTE_PORT'] . '<br>';	//Returns the port being used on the user's machine to communicate with the web server
                    echo $_SERVER['SCRIPT_FILENAME'] . '<br>';	//Returns the absolute pathname of the currently executing script
                    echo $_SERVER['SERVER_ADMIN'] . '<br>';	//Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
                    echo $_SERVER['SERVER_PORT'] . '<br>';	//Returns the port on the server machine being used by the web server for communication (such as 80)
                    echo $_SERVER['SERVER_SIGNATURE'] . '<br>';	//Returns the server version and virtual host name which are added to server-generated pages
                    echo $_SERVER['PATH_TRANSLATED'] . '<br>';	//Returns the file system based path to the current script
                    echo $_SERVER['SCRIPT_NAME'] . '<br>';	//Returns the path of the current script
                    echo $_SERVER['SCRIPT_URI'] . '<br>';	//Returns the URI of the current page
                ?>
            </section>

            <hr>

            <section>
                <h2>$_POST & $_GET</h2>
                <h3>Used to collect data from a form in HTML. When using a form in HTML there are 2 ways we can send the data. POST and GET. Let's look at each method:</h3>

                <br>

                <h2>$_POST</h2>
                <h3>The POST method sends the data without it showing up in the URL bar.</h3>

                <form method="POST">

                    <fieldset>
                        <legend>Personal Information</legend>

                        <label for="fname">First Name</label>
                        <br>
                        <input type="text" id="fname" name="f_name">
                        <br>
                        <input type="submit">
                    </fieldset>

                </form>

                <?php
                    //This will echo out the value entered on the front end of whatever input which has the name attribute of "f_name".
                    echo $_POST['f_name'];
                ?>

                <br>

                <h2>$_GET</h2>
                <h3>The GET method sends the data through the URL bar</h3>

                <form method="GET">

                    <fieldset>
                        <legend>Hardware Information</legend>

                        <label for="phone">What brand of phone do you use?</label>
                        <br>
                        <input type="text" id="phone" name="phone_brand">
                        <br>
                        <input type="submit">
                    </fieldset>

                </form>

                <?php
                    //This will echo the result but also note that the result will also be in the URL bar. This will happen regardless of if we echo out the result!
                    echo $_GET['phone_brand'];
                ?>
            </section>

            <hr>

            <section>
                <h2>$_COOKIE</h2>
                <h3>A cookie is something that we have all herd of for the most part. When you go to a website, the website might use cookies which are stored on your computer. They contain data about you or things you do on a site.</h3>

                <p>
                    //Sets the cookie(name, value, time() + a day); time() means right now.
                    <br>
                    setcookie("name", "User007", time() + 87000);
                    <br>
                    //Here we just echo out the name of the cookie which in this case is User007
                    <br>
                    echo $_COOKIE['name'];
                </p>


                <?php
                    //Sets the cookie(name, value, time() + a day); time() means right now.
                    setcookie("name", "User007", time() + 87000);
                    //Here we just echo out the name of the cookie which in this case is User007
                    echo $_COOKIE['name'];
                ?>
            </section>

            <hr>

            <section>
                <h2>$_SESSION</h2>
                <h3>A session saves sensitive data about the user like login credentials and is stored on the server side.</h3>

                <p>
                    //This creates a session variable
                    <br>
                    $_SESSION['user_name'] = "007";
                    <br>
                    //echo out the user number
                    <br>
                    echo $_SESSION['user_name'];
                </p>

                <?php
                    //This creates a session variable
                    $_SESSION['user_name'] = "007";
                    //echo out the user number
                    echo $_SESSION['user_name'];

                    //This bit of code is just just saying that if there is no user session, echo out "you are not logged in" and if else, echo out that you are logged in.
                    if(!isset($_SESSION['user_name'])) {
                        echo ' You are not logged in!';
                    } else {
                        echo ' You are logged in!';
                    };  
                ?>
            </section>

        </div>

    </div>
    
</body>
</html>
