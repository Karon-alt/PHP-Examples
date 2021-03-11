<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Examples</title>
            <link rel="stylesheet" href="styles/styles.css">
        </head>
        <body id="other_page">
        <div id="wrapper">
                    <header>
                        <?php
                        //adds in header & nav from a different page
                            include("includes/header.php");
                        ?>
                    </header>            
                    <main>
                        <h2>Examples Page</h2>
                        <section class="mod6">
                            <h1>Module 06</h1>
                            <div id="questions">
                            <h2>Questions</h2>
                            <a name="top"></a>
                            <article class= "quest_block">
                                <h3>1. List the data types that PHP supports with an example (description) of each.</h3>
                                    <ul>
                                        <li>String: A sequence of characters.</li>
                                        <li>Interger: Whole numbers.</li>
                                        <li>Float: A number with a decimal point or a number in exponential form.</li>
                                        <li>Boolean: A statement of True or False</li>
                                        <li>Array: Stores multiple values in one variable.</li>
                                        <li>Object: An instance of a class. The object inherits all properties of the class, but each object has different values for the properties.</li>
                                        <li>Null: A value that does not have a value assigned to it.</li>
                                        <li>Resource: Not an actual data type. It stores a reference to functions and resources external to PHP.</li>
                                    </ul>
                            </article>
                            <article class= "quest_block">
                                <h3>2. What is the difference between a PHP integer, float and number string. </h3>
                                    <p>A number string comes in two different forms in PHP, as an interger or float. A PHP float stores a number with a decimal or exponent. An integer string stores a whole number, both positive and negative. Here is an example of a number string: </p>
                                    <?php
                                        $birth_year = 1984;
                                        var_dump($birth_year);
                                    ?>
                                    <p>Here is an example of a float array:</p>
                                    <?php
                                        $pi = 3.14;
                                        var_dump($pi);
                                    ?>
                            </article>
                            <article class= "quest_block">
                                <h3>3. What is an array? Provide a description and use PHP to code an example of an <br>index/numeric array and any associative array using keys and values.
                                    Add a heading above each to identify the type of array with a brief paragraph to explain what it is doing. </h3>
                                    <p>An array is a way to store multiple values or characteristics to one value.</p>
                                    <h4>An Numerical/Index Array:</h4>
                                    <?php
                                    //lists the items in the array
                                        $favfoods =array("Oranges", "Potatoes", "Prosciutto", "Tuna");
                                        //calls the items by numerical index starting at 0
                                        echo $favfoods[0];
                                        ?>
                                    <h4>An Associative Array</h4>
                                    <?php
                                    //builds an associative array key and variables, not index numbers
                                        $food = array(
                                            'orange' =>       'fruit',
                                            'potato' =>       'root vegetable',
                                            'prosciutto' =>   'meat',
                                            'tuna' =>         'seafood');
                                        //calls the item by key name
                                            echo $food['tuna'];

                                    ?>

                                </article>
                            <article class= "quest_block">
                                <h3>4. What is a function? Provide a description of examples. </h3>
                                        <h4>A function is an action. In an array function you can create changes within one, or multiple variables, held
                                            within the array.Returning multiple results or a single result. You can use an array function for simple and
                                            multi-demensional arrays. There are many types of array functions some inculde:  </h4>
                                                <ul>
                                                    <li> array_merge() -Merges one of more arrays into one.</li>
                                                    <li>array_pop() -Deletes the last element of an array.</li>
                                                    <li>array_product() -Calculates the product of the values in an array.</li>
                                                    <li>array_slice() -Returns selected parts of an array.</li>
                                                    <li>array_push() -Inserts one or more elements to the end of an array.</li>
                                                </ul>
                                                </article>
                            <article class= "quest_block">
                                 <h3>5. Create a PHP code function example using any PHP math function</h3>
                                        <p>Here is a PHP math function that is rounding to its nearest interger. The numbers are: 5.45, 6.85, 12.32, and 0.35 </p>
                                        <?php
                                          echo '<h6>Here is 6.85 rounded: </h6>';   echo(round(6.85));  echo '<br>';
                                          echo '<h6>Here is 12.32 rounded: </h6>';   echo(round(12.32)); echo '<br>';
                                          echo '<h6>Here is 0.35 rounded: </h6>';   echo(round(0.35));  echo '<br>';
                                        ?>
                            </article>
                            <article class= "quest_block">
                                <h3>6. Research some of the top PHP functions used in WordPress.  List at least 5 with a description of what they do. </h3>
                                            <h4>Some of the top used functions in WordPress are:</h4>
                                            <ul>
                                                <li>Add new navigation menus to your theme. </li>
                                                <span>To add a theme you add a snipet of code into your theme's functions file and define a new menu location. </span>
                                                <li>Add Google fonts to WordPress</li>
                                                    <span>You do this by adding a link tag in the head section of your html and then calling it as a font-family rule in your CSS file.</span>
                                                <li>Detect when the reader is on a mobile device</li>
                                                    <span>To help with load time, you can add <it>wp_is_mobile()</it> in the function.php file. </span>
                                                <li>Hide login error in WorPress to ward off hackers.</li>
                                                    <span>Using a simple <it>no_wordpress-errors()</it> can hide login errors. Making it more difficult to
                                                        destinguish whether the wrong username or password has been entered makes your site a bit more secure. </span>
                                                <li>Display Post Content</li>
                                                    <span>To display post content use function named the_content('content here'); </span>
                                            </ul>
                            </article>
                            </div>
                        </section>
                        <section class="mod7">
                            <article class="new">
                            <h1>Module 07</h1>
                                <?php
                                    //adds in a back to the top link
                                    echo '<h4><a href="#top">Back to top</a></h4>'
                                ?>
                            </article>
                            <div id="questions">
                            <article class= "quest_block">
                                 <h3>Loops</h3>
                                    <ul>
                                        <li><h4>While</h4>
                                            <p>A while loop executes a block of code as long as the specified condition is true.</p>
                                            <!--  Loop prints while number is less than 5  -->
                                            <?php
                                                $x = 3;
                                                while($x <= 5) {
                                                    echo "The number is: $x <br>";
                                                    $x++;
                                                }
                                            ?>
                                        </li>

                                        <li><h4>Do While</h4>
                                            <p> A do...while loop will always execute the block once, then it checks the condition, and repeats the loop while condition is true. </p>
                                            <!--Prints at least once and continues until 4    -->
                                            <?php
                                                $x = 2;
                                                do {
                                                    echo "The do...while loop number is: $x <br>";
                                                    $x++;
                                                } while ( $x <= 4);
                                            ?>
                                            </li>
                                        <li><h4>For</h4>
                                            <p> The For loop is used when you know in advance how many times the script should run. </p>
                                            <!-- For loops stops at 50    -->
                                            <?php
                                                for ($x = 47; $x <= 50; $x++){
                                                    echo "The number in the for loop is $x it will stop at 50. <br>";
                                                }
                                            ?>
                                        </li>
                                        <li><h4>Foreach</h4>
                                            <p>A foreach loop only works on arrays and will loop through a block for each element in the array. </p>
                                             <!--  for each element in the array print the key value pairs  -->
                                            <?php
                                                $birthYr = array( "Alice" => "Female", "Seth"=> "Male", "Albert"=>"Male", "Emma" => "Female");

                                                foreach ($birthYr as $x =>  $value){
                                                    echo "$x =  $value <br> ";
                                                }
                                            ?>
                                        </li>
                                    </ul>

                            </article>
                            <article class= "quest_block">
                                 <h3>Conditional Statements</h3>
                                    <ul>
                                        <li><h4>If</h4>
                                            <p>Executes code if one condition is true.</p>
                                              <!--  If the current hour is less than 20 - Buenos Dias;   -->
                                            <?php
                                                $x = date("H");

                                                if ($x < "20"){
                                                    echo "Buenos Dias!";
                                                }
                                            ?>
                                        </li>
                                        <li><h4>If Else</h4>
                                            <p>Executes code is a conditon is true and another set of code if the condition is false.</p>
                                              <!--  If the current hour is less than 20 - Buenos Dias; else Buenos noches mess  -->
                                              <?php
                                                $x = date("H");

                                                if ($x < "20"){
                                                    echo "Buenos Dias!";
                                                } else {
                                                    echo "Buenos Noches!";
                                                }
                                              ?>

                                        </li>
                                        <li><h4>If Elseif Else</h4>
                                              <p>Executes different codes for more than two conditions.</p>
                                              <!--   If the current hour is less than 7 - have some coffee; elseif the hour is less than 20- Buenos Dias; else Buenos noches mess  -->
                                              <?php
                                                $x = date("H");

                                                if ($x < "7") {
                                                    echo "Have some coffee!";
                                                } elseif ($x < "20") {
                                                    echo "Buenos Dias!";
                                                } else {
                                                    echo "Buenos Noches!";
                                                }
                                             ?>
                                        </li>
                                        <li><h4>Switch</h4>
                                            <p>Selects one specific block of code out of many. </p>
                                              <!-- Prints message for Mon-Fri and default mess for weekends from day of week variable   -->
                                            <?php
                                                $day =  date("D");

                                                switch ($day){
                                                    case "Monday":
                                                        echo "Oh, no! It's Monday!";
                                                        break;

                                                    case "Tuesday";
                                                        echo "Happy Tuesday!";
                                                        break;

                                                    case "Wednesday";
                                                        echo "Humpday, YEAH!";
                                                        break;

                                                    case "Thursday";
                                                        echo "Happy Thursday";
                                                        break;

                                                    case "Friday";
                                                        echo "It's FriYAY!!";
                                                        break;

                                                    default:
                                                        echo "Have a great weekend!";
                                                }
                                            ?>
                                        </li>
                                    </ul>

                            </article>
                            <article class= "quest_block">
                                 <h3> Custom Functions</h3></h3>
                                    <p>To make a custom function, otherwise known as a user defined function, you first make a declaration using the keyword <b>function</b>. You may use this repeatedly throughout your program or just once. It is executed with a call to the function.</p>
                                    <p>This custom function will print out a message with two names, or arguments, in it.</p>

                                    <?php

                                        $firstName = "Jane";
                                        $lastName = "Johnson";
                                        function youRock($firstName, $lastName){


                                            echo "Hello, $firstName $lastName. Your RoCk!";
                                        }
                                        youRock($firstName, $lastName);

                                    ?>
                            </article>
                            <article class= "quest_block">
                                 <h3>Build-in PHP Function Arrays</h3>
                                    <p>The <b>array_product()</b> function returns the product of values in an array.</p>
                                    <p>This built-in function takes an array of numbers and adds them together.</p>
                                      <!--    -->
                                    <?php
                                      $math =  array(4, 5, 6, 9, 12);
                                      echo "The sum is: " . array_product($math) . "\n";

                                    ?>
                                    <p>Here is another built in function <b>array_rand()</b> it picks one or more random keys out of an array. </p>
                                    <?php
                                        $input = array( "Red", "Green", "Blue", "Teal", "Beige");
                                        $rand_keys = array_rand($input, 3);
                                        echo $input[$rand_keys[2]] . "<br>";
                                        echo $input[$rand_keys[1]] . "<br>";
                                        echo $input[$rand_keys[0]] . "<br>";
                                        //adds in a back to the top link
                                        echo '<h4><a href="#top">Back to top</a></h4>'
                                    ?>
                            </article>
                            </div>
                        </section>
                    </main>
                    <footer>
                        <?php
                        //adds in footer from another page
                            include("includes/footer.php");
                        ?>
                    </footer>
            </div>
        </body>
    </html>
