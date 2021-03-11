<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width-device-width, initial-scale-1.0">
            <title>PHP Midterm Assignment</title>
            <link rel="stylesheet" href="styles/styles.css">
        </head>
        <body class="home">
              <div id="wrapper">
                    <header>
                        <?php
                            //adds in the header & nav from seperate page
                            include("includes/header.php");
                        ?>
                    </header>
                          <?php
                            //variables for images

                              $prosc_img = "<img class='item' src= 'img/pro.jpg'>";
                              $orange_img = "<img  class='item' src= 'img/oranges.jpg'>";
                              $potato_img = "<img  class='item'src= 'img/potatoes1.jpg'>";
                              $tuna_img = "<img src= 'img/tuna.jpg' class='item'>";
                              $steak_img = "<img src = 'img/steak.jpg' class='item'>";
                              $sushi_img = "<img src = 'img/sushi.jpg' class='item'>";

                            //price calculations and lists of variables
                              $proscName = 'Prosciutto';
                              $proscPrice = 14.59;
                              $tax = 1.06;
                              $total = $proscPrice * $tax;
                              $proscTotal = number_format($total, 2);

                              $orangeName = 'Oranges';
                              $orangePrice = 1.48;
                              $tax = 1.06;
                              $total = $orangePrice * $tax;
                              $orangeTotal = number_format($total, 2);

                              $potatoName = 'Potatoes';
                              $potatoPrice = 0.79;
                              $tax = 1.06;
                              $total = $potatoPrice * $tax;
                              $potatoTotal = number_format($total, 2);

                              $tunaName = 'Ahi Tuna';
                              $tunaPrice = 12.67;
                              $tax = 1.06;
                              $total = $tunaPrice * $tax;
                              $tunaTotal = number_format($total, 2);

                              $steakName = 'Steak';
                              $steakPrice = 8.99;
                              $tax = 1.06;
                              $total = $steakPrice * $tax;
                              $steakTotal = number_format($total, 2);

                              $sushiName = 'Sushi Rolls';
                              $sushiPrice = 12.48;
                              $tax = 1.06;
                              $total = $sushiPrice * $tax;
                              $sushiTotal = number_format($total, 2);

                            //Multidemensional Array using Key/Value Pairs in an Associative Array
                            $foods = array(
                                array(
                                    'image' => $prosc_img,
                                    'name' =>  $proscName,
                                    'mess' => '<p>Prosciutto is an Italian dry cured ham. It is usually sliced thin and served uncooked. Many regions have their own variation of prosciutto. I am currently attempting to make a prosciutto at home.</p>',
                                    'price'=> $proscPrice,
                                    'location'=> 'Fred Meyers',
                                    'totalCost' => $sushiTotal

                                ),

                                array(
                                    'image' => $orange_img,
                                    'name' =>  $orangeName,
                                    'mess' => '<p>Oranges have lots of Vitamin C! It is a member of the citrus family. The fruit of any citrus tree is a kind of modified berry. Oranges can be juiced to drink or to use in different recipes. You can add champagne to your oranjuice to make a mamosa!  </p>',
                                    'price'=> $orangePrice,
                                    'location'=>'Safeway',
                                    'totalCost' => $orangeTotal
                                ),

                                array(
                                    'image' =>  $potato_img,
                                    'name' =>   $potatoName,
                                    'mess' => '<p class="mess">Potatoes are very versatile! They are a root vegetable often refered to as spuds and originated in modern-day Peru. They are a stapple food and an intregal part of the food supply throughout the world.</p>',
                                    'price'=> $potatoPrice,
                                    'location'=> 'Safeway',
                                    'totalCost' => $potatoTotal
                                )
                          );
                            //Multidemensional Array using Key/Value Pairs in an Associative Array
                      $foods2 = array(
                            array(
                                'image' => $steak_img,
                                'name'  => $steakName,
                                'mess'  => '<p>Beef is a red meat from a cow. It is the third most widely consumed meat in the world. Beef can be consumed raw. It is a great source protein. Beef production has a high enviromental impact. </p>',
                                'price'  => $steakPrice,
                                'location'=> 'Meat Market',
                                'totalCost' => $steakTotal
                            ),

                            array(
                                'image' => $tuna_img,
                                'name' =>  $tunaName,
                                'mess' => '<p>Ahi Tuna is a type of seafood. Ahi Tuna can be eaten raw when hadled properly. Tuna is highly nutritious, but due to high mercury levels, it is best to eat raw tuna in moderation. Ahi refers to two species, the bigeye tuna and the yellowfin tuna.   </p>',
                                'price'=> $tunaPrice,
                                'location'=> 'Super One',
                                'totalCost' => $tunaTotal
                            ),

                            array(
                                'image' => $sushi_img ,
                                'name'  => $sushiName,
                                'mess'  => '<p>Sushi is raw fish such as salmon, ahi tuna, It delicious when served with a little bit of soy sauce. It is a traditional Japanese dish. It can be just fish, fish over rice, or in a sushi roll.</p>',
                                'price'  => $sushiPrice,
                                'location'=> 'Fishermans Market',
                                'totalCost' => $sushiTotal
                            )
                            );
                            ?>
                            
                    <main class= "homeMain">
                      <div class= 'content'>
                             <?php
                               //Foreach loops using keyword ECHO to print out items in the above array calling the key/value pairs
                              foreach ($foods as $food){
                                    echo '<h2>'  .$food['name'] . '</h2>';
                                    echo $food['image'];
                                    echo '<h4>It is currently available at '. $food['location'] . ' in Coeur d Alene for ' . $food['price'] . ' per pound and ' . $food['totalCost'] . ' after tax. </h4>';
                                    echo $food['mess'];
                                    echo '<hr>';
                              }
                             ?>
                      </div>
                      <div class= 'content2'>
                             <?php
                              foreach ($foods2 as $food){
                                    echo '<h2>'  .$food['name'] . '</h2>';
                                    echo $food['image'];
                                    echo '<h4>It is currently available at '. $food['location'] . ' in Coeur d Alene for ' . $food['price'] . ' per pound and ' . $food['totalCost'] . ' after tax. </h4>';
                                    echo $food['mess'];
                                    echo '<hr>';
                              }
                             ?>
                      </div>
                    </main>
                    <footer>
                            <?php
                             //adds in the footer from seperate page
                                include("includes/footer.php");
                            ?>
                    </footer>
                </div>
              </body>
    </html>
