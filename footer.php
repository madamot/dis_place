<footer>

</footer>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if(x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  // var el = document.getElementById('name');
  // var elMsg = document.getElementById('nameFeedback');
  //
  // function checkUsername() {
  //   if (el.value.length < 3) {
  //     elMsg.textContent = 'Not long enough, yet...';
  //   } else {
  //     elMsg.textContent = '';
  //   }
  // }
  //
  // function tipUsername() {
  //   elMsg.textContent = 'Name must be at least 3 characters';
  // }
  //
  // el.addEventListener('focus', tipUsername, false);
  // el.addEventListener('blur', checkUsername, false);

</script>



</body>
</html>
