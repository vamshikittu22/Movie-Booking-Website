<?php
session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List of Movies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Now Showing</h1>
    <?php
    // Define an array of movies with their details
    $movies = array(
        array(
            "title" => "Dark Knight",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "darkknight.jpeg"
        ),
        array(
            "title" => "Inception",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "inception.jpeg"
        ),
        array(
            "title" => "Forest Gump",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "forrestgump.jpeg"
        ),
        array(
            "title" => "Godfather",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "godfather.jpeg"
        ),
        array(
            "title" => "LOTR",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "lotr.jpeg"
        ),
        array(
            "title" => "Schindlers List",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "schindlerslist.jpeg"
        ),
        array(
            "title" => "Titanic",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "titanic.jpeg"
        ),
        array(
            "title" => "The Matrix",
            "length" => "1 HR 20 MIN | PG",
            "release_date" => "Released on 2024-04-10",
            "image" => "the_matrix.jpeg"
        ),
    );
    ?>

    <section class="movies">
    <div class="container movies-container">
        <?php
            foreach ($movies as $movie) {
                echo "<div class='movie'>";
                echo "<img src='Movies/{$movie['image']}' alt='{$movie['title']}'>";
                echo "<div class='movie-details'>";
                echo "<h2 class= movie-title>{$movie["title"]}</h2>";
                echo "<p class=movie-info>{$movie['length']}<p>";
                echo "<p class=movie-info>{$movie['release_date']}<p>";
                echo "</div>";
                echo "<form action='bookTicket.php' method='POST'>";
                echo "<input type='hidden' name='movieTitle' value='{$movie['title']}'>";
                echo "<button type='submit' class='mainbtn'>Book Tickets</button>";
                echo "</form>";
                echo "</div>"; 
            }

            ?><!-- end PHP script -->
    </div> <!-- close movies-container -->
</section>

</body>
</html>


