<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body id="other_page">
    <div id="wrapper">
        <header>
            <?php
                //adds in the header & nav from seperate page
                include("includes/header.php");
            ?>
        </header>
        <main>
            <section>
                <div class="contact_head">
                    <h2>We love to hear from our users. Please share any questions, concerns, or feedback with us below. Let us know if you would like to see something different from this site.</h2>
                    <h1>Contact Us</h1>
                    <?php
                         $contact_img = "<img class='contact' src= 'img/contact.png'>";
                         echo $contact_img;
                    ?>
                </div>
                <form action="contact_us_code.php" id="form" method="post" name="form">
                    <label>Name: </label>
                    <input name="contact_name" id="contact_name" placeholder="Jane Doe" type="text" value="">
                    <label>Email:</label>
                    <input name="contact_email" id="contact_email"placeholder="someone@somewhere.com" type="text" value="">                  
                    <label>Message:</label>
                    <textarea name="message" id="message" placeholder="Type your message here. 70 characters max." rows="8"></textarea>
                    <input id="send" name="submit" type="submit" value="Submit Feedback">
                </form>
                <h3><?php
                    include "contact_us_code.php" ; 
                    ?>
                </h3>
            </section>
           

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
