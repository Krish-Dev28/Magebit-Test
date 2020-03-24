const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('magebit');

signUpButton.addEventListener('click', () => {
    magebit.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    magebit.classList.remove('right-panel-active');
});
