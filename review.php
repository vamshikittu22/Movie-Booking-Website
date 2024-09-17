<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Review Page</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .review {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }
    button{
    background-color: rgb(247, 74, 74);
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 3px;
    margin-bottom: 16px;
  }
  .reviewForm{
    width: 100%;
    text-align: center;
  }
  h2,h1{
    color: rgb(247, 74, 74);
  }
  
  </style>
  <script type="text/javascript" src="review.js"></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <h1>Movie Review Page</h1>
  <h2>Add a Review</h2>
  <form id="reviewForm" class="reviewForm">
    <p>
      <label for="username">Your Name:</label>
      <input type="text" id="username" required>
    </p>
    <p>
      <label for="rating">Rating (1-5):</label>
      <input type="number" id="rating" min="1" max="5" required>
    </p>
    <p>
      <label for="comment">Your Review:</label>
      <textarea id="comment" rows="4" required></textarea>
    </p>
    <button type="submit" id="submit">Submit Review</button>
  </form>

  <div id="reviews">
    <!-- Previous Reviews -->
    <div class="review">
      <h3>John Doe</h3>
      <p>Rating: 4</p>
      <p>Best experience at finger tips. Easy to place order.</p>
    </div>
    <div class="review">
      <h3>Jane Smith</h3>
      <p>Rating: 3</p>
      <p>I use this website always for all my movie bookings. its simply awesome and convenient.</p>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
