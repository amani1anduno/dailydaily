<div class="countdown" > <span id=demo></span> till next winner!!</div>
    <script>
// Set the date we're counting down to
  var now = new Date();

  var countDownDate = new  Date(
      now.getFullYear(),
      now.getMonth(),
      now.getDate() + 1, // the next day, ...
      0, 0, 00 // ...at 00:00:00 hours
  );
  // Update the count down every 1 second
  var x = setInterval(function() {
  now = new Date();

  // Get today's date and time

  // Find the distance between now and the count down date
  var distance = countDownDate.getTime() - now.getTime();

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML =  + hours + ":"
  + minutes + ":" + seconds;
  console.log(distance);

  // If the count down is finished, write some text
  if (hours==0&&minutes==0&&seconds==0 ) {
    window.location = "/";
  }
}, 1000);
</script>
