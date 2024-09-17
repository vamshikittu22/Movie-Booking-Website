window.addEventListener("load",start,false);
function start(){
    document.getElementById("submit").addEventListener("click",addReview,false);
}

function addReview(){
    username = document.getElementById('username').value;
    rating = document.getElementById('rating').value;
    comment = document.getElementById('comment').value;

    // Create a review element with inner HTML
    reviewHTML = "<div class='review'>" +
                        "<h3>" + username + "</h3>" +
                        "<p>Rating: " + rating + "</p>" +
                        "<p>" + comment + "</p>" +
                    "</div>";

    document.getElementById("reviews").innerHTML += reviewHTML;

    // Reset form fields
    reviewForm.reset();
}