function showSignUp() {
  document.getElementById('signIn').hidden=true;
  document.getElementById('signUp').hidden=false;
  document.getElementById('logoImg').hidden=true;
  document.getElementById('company').hidden=true;
}
function showSignIn() {
  document.getElementById('signUp').hidden=true;
  document.getElementById('signIn').hidden=false;
  document.getElementById('logoImg').hidden=true;
  document.getElementById('company').hidden=true;
}
function home() {
  document.getElementById('signUp').hidden=true;
  document.getElementById('signIn').hidden=true;
  document.getElementById('logoImg').hidden=false;
  document.getElementById('company').hidden=true;
}
function company() {
  document.getElementById('signUp').hidden=true;
  document.getElementById('signIn').hidden=true;
  document.getElementById('logoImg').hidden=true;
  document.getElementById('company').hidden=false;
}
