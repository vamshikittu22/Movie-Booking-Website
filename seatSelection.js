var maxSeats = parseInt(document.getElementById('getSeatCount').value); // Set the max seats value

// Function to toggle seat selection
function toggleSeatSelection(seat) {
  var selectedSeats = [];

  function addClick(seat) {
    seat.addEventListener('click', function() {
      var seatId = seat.id;
      if (selectedSeats.indexOf(seatId) !== -1) {
        var index = selectedSeats.indexOf(seatId);
        selectedSeats.splice(index, 1);
        seat.classList.remove('selected');
      } else {
        if (selectedSeats.length < maxSeats) {
          selectedSeats.push(seatId);
          seat.classList.add('selected');
        } else {
          alert('You can only select up to ' + maxSeats + ' seats.');
        }
      }

      document.getElementById('selectedSeats').value = selectedSeats.sort().join(', ');
      document.getElementById('totalSeats').value = selectedSeats.length;
    }, false);
  }

  var seats = document.getElementsByClassName('seat');
  for (var i = 0; i < seats.length; i++) {
    addClick(seats[i]);
  }
}

window.addEventListener('load', function() {

    toggleSeatSelection();

    // Attach event listener to the submit button
document.getElementById('seatSubmitButton').addEventListener('click', function(event) {
    var totalSeatsSelected = document.getElementById('totalSeats').value;
    var getSeatCountValue = document.getElementById('getSeatCount').value;
  
    if (totalSeatsSelected !== getSeatCountValue) {
      event.preventDefault(); // Prevent form submission if seats don't match
      alert('Please select ' + getSeatCountValue + ' tickets to proceed.');
    }
  }, false);
  
}, false);

