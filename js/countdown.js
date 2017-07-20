// Javascript for countdown timer

// #countdown is hidden thru css
// After ? second, slowly fade in 
// setTimeout(show_countdown, 3000);

// Fade in occurs over ? seconds
// function show_countdown() {
//   $('#countdown').fadeIn(4000);
// }

$(document).ready(function() {
  $('#countdown').show()
  countdown()
});

// Parse current date
var current_date = new Date();
var current_year = current_date.getFullYear();
var current_month = current_date.getMonth();
var current_day = current_date.getDate();

// Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2016 15:37:25").getTime();

// Set countdown to certain time today
var countDownDate = new Date(current_year, current_month, current_day, 10, 00).getTime();

// Update the count down every 1 second
var x = setInterval(function() {
  countdown()
}, 1000);

function countdown(){
  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id
  // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  document.getElementById("countdown-clock").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    // document.getElementById("countdown-clock").innerHTML = "(Expired)";
    document.getElementById("countdown-text").innerHTML = "Orders locked";
    document.getElementById("countdown-clock").innerHTML = "";
    $("button[name='addtocart']").hide()
    $("input[name='addtocart']").hide()
  } else {
    document.getElementById("countdown-text").innerHTML = "Checkout in";
    $("button[name='addtocart']").show()
    $("input[name='addtocart']").show()
  }
}