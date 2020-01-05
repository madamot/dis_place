var name = document.getElementById('name');
var nameFeedback = document.getElementById('nameFeedback');

function checkUsername() {
  if (name.value.length < 5) {
    nameFeedback.textContent = 'Not long enough, yet...';
    console.log('oh');
  } else {
    nameFeedback.textContent = '';
  }
}

function tipUsername() {
  nameFeedback.textContent = 'Username must be at least 5 characters';
}

name.addEventListener('focus', tipUsername, false);
name.addEventListener('blur', checkUsername, false);
