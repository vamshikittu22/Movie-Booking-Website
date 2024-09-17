<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Movie Ticket Booking</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body background="groot_wallpaper.jpg">

        <?php include 'header.php'; ?>
        <section class="body">
            <div class="container">
                <h2>Welcome to Movie Ticket Booking</h2>
                <h3>Book your favorite movies online</h3>
                <form method="post" action = "movies.php">
                    <p>
                        <input type="submit" value="Explore Movies" class="mainbtn">
                    </p>
                </form>               
            </div>
        </section>
        <?php include 'footer.php';?>
        </body>
    </html>