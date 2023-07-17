<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disney World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='style.css' />
</head>

<body>
    <?php $name = "Mickey";
    $lastName = "Mouse";
    $placeLiving = "Disney World";

    echo "<h2> Hello! My name is $name $lastName and I live in $placeLiving with my friends. </h2> <br>";

    $array_friends = ['Pluto', 'Donald', 'Goofy', 'Daisy', 'Minnie'];

    echo "<h2>My best friend is $array_friends[0]. </h2> <br>";

    //Advanced
    // Define an associative array and output array elements on the screen. 
    // Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.). 

    echo "<h3> Our favourite Mickey Mouse episodes: </h3>";

    $array_favEpisods = ["Daisy" => '"Mickey Mouse in No Service"', "Minnie" => '"Wish Upon a Coin"', "Goofy" => '"Potatoland"', "Pluto" => '"Springtime"'];
    echo "<p>Favourite episod of Minnie is $array_favEpisods[Minnie].</p>";
    echo "<p>Favourite episod of Goofy is $array_favEpisods[Goofy].</p>";
    echo "<p>Favourite episod of Daisy and Clarabelle Cow is $array_favEpisods[Daisy].</p>";
    echo "<h3> What is your favourite Episode? </h3>";

    echo "<div class='input-group mb-3 w-50 input_1'>
    <input type='text' class='form-control' aria-label='Text input with checkbox'>
    </div>";


    //Challenge
    //The second thing you need to do is to create user-friendly GUI rendering. 
    //You should use Bootstrap elements to create GUI for this project. 
    //Come up with an idea of which data you would like to present 
    //and which pages (forms, tables) you need in your GUI part and create them. 

    echo "<h3> Our Disney Shop: </h3>";
    $array_shop = array(
        array(
            "Name" => "T-Shirt",
            "Img" => "photos/tshirt.jpg",
            "Price" => 25,
            "Size" => "XS, S, M, L, XL",
            "Color" => "Pink",
            "Availability" => true
        ),

        array(

            "Name" => "Mickey Figure",
            "Img" => "photos/toys.jpg",
            "Price" => 10.99,
            "Size" => "different",
            "Color" => "Pink and White",
            "Availability" => true
        ),

        array(
            "Name" => "Jacket",
            "Img" => "photos/jacket.jpg",
            "Price" => 55,
            "Size" => "XS, S, M, L, XL",
            "Color" => "Jeans",
            "Availability" => false
        ),

        array(
            "Name" => "Mickey Mouse Cap",
            "Img" => "photos/cap.jpg",
            "Price" => 15,
            "Size" => "XS, S, M, L, XL",
            "Color" => "Black and Red",
            "Availability" => false
        ),
        array(
            "Name" => "Mickey Mouse Cap",
            "Img" => "photos/cap.jpg",
            "Price" => 15,
            "Size" => "XS, S, M, L, XL",
            "Color" => "Black and Red",
            "Availability" => false
        ),
        array(
            "Name" => "Mickey Mouse Cap",
            "Img" => "photos/cap.jpg",
            "Price" => 15,
            "Size" => "XS, S, M, L, XL",
            "Color" => "Black and Red",
            "Availability" => false
        )
    );

    //BOOTSTRAP CARD

    echo "<div class = 'main-grid'>";   //main grid to put card in grid
    foreach ($array_shop as $item) {
        echo " 
        <div class='card' style='width: 18rem;'>
        <img src={$item['Img']} class='card-img-top' width='50px' height='260px' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'> {$item['Name']} </h5>
            <p class='card-text'>This is a very cool {$item['Name']} in {$item['Color']} color.</p>
        </div>
        <ul class='list-group list-group-flush'>
            <li class='list-group-item'>{$item['Name']} costs {$item['Price']} $ </li>
            <li class='list-group-item'> We have {$item['Name']} in {$item['Size']} sizes </li>
            <li class='list-group-item'>This {$item['Name']} is " . ($item["Availability"] ? 'available' : 'not available') . "</li>
        </ul>
        <div class='card-body'>
            <a href='#' class='card-link'>Buy Now</a>
        </div>
        </div>
         ";
    }
    echo "</div>";  //close main grid
    ?>

</body>