function showSignUp() {
  document.getElementById('signIn').hidden=true;
  document.getElementById('signUp').hidden=false;
  document.getElementById('logoImg').hidden=true;
}
function showSignIn() {
  document.getElementById('signUp').hidden=true;
  document.getElementById('signIn').hidden=false;
  document.getElementById('logoImg').hidden=true;
}
function home() {
  document.getElementById('signUp').hidden=true;
  document.getElementById('signIn').hidden=true;
  document.getElementById('logoImg').hidden=false;
}
