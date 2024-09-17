window.addEventListener('load', function() {
  // Add event listeners for calculating total price and seat count
  document.getElementById('adultQty').addEventListener('input', function() {
    updateTotalCountAndPrice();
  }, false);

  document.getElementById('seniorQty').addEventListener('input', function() {
    updateTotalCountAndPrice();
  }, false);

  document.getElementById('childQty').addEventListener('input', function() {
    updateTotalCountAndPrice();
  }, false);

  // Add event listener on submit button click
  document.getElementById('submitButton').addEventListener('click', function(event) {
    if (countSeats()) { // Check if total is greater than 0 before submitting
      alert('You have selected ' + total + ' tickets !!');
    } else {
      event.preventDefault(); // Prevent default form submission if no tickets selected
      alert('Please enter the number of tickets to move forward!!');
    }
  }, false);
}, false);

function updateTotalCountAndPrice() {
  var adultQty = parseInt(document.getElementById('adultQty').value) || 0;
  var seniorQty = parseInt(document.getElementById('seniorQty').value) || 0;
  var childQty = parseInt(document.getElementById('childQty').value) || 0;

  // Calculate total count
  var total = adultQty + seniorQty + childQty;

  // Update total count display in the total seats textbox
  document.getElementById('totalCount').value = total;

  // Calculate and update total price
  var adultTotal = updatePrice(adultQty, 20, 'adultTotal');
  var seniorTotal = updatePrice(seniorQty, 15, 'seniorTotal');
  var childTotal = updatePrice(childQty, 10, 'childTotal');

  var totalPrice = adultTotal + seniorTotal + childTotal;
  document.getElementById('totalPrice').value = totalPrice.toFixed(2);
}

function updatePrice(quantity, pricePerTicket, outputId) {
  var total = quantity * pricePerTicket;
  document.getElementById(outputId).value = total.toFixed(2);
  return total;
}

function countSeats() {
  var adultQty = parseInt(document.getElementById('adultQty').value) || 0;
  var seniorQty = parseInt(document.getElementById('seniorQty').value) || 0;
  var childQty = parseInt(document.getElementById('childQty').value) || 0;

  // Calculate total count
  var total = adultQty + seniorQty + childQty;

  return total > 0;
}


