
const loginbtn = document.getElementById('loginbtn');
const formpop = document.getElementById('formpop');
const closelogin = document.querySelector('.closepop');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const switchto = document.querySelector('.switchto');
const switchto2 = document.querySelector('.switchto2');

loginbtn.addEventListener('click', ()=>{
    formpop.classList.remove('hidden');
})

closelogin.addEventListener('click', ()=>{
    formpop.classList.add('hidden');
})
switchto.addEventListener('click', ()=> {
    loginForm.classList.add('hidden');
    registerForm.classList.remove('hidden');
    document.querySelector('.logintext').innerText = 'Register';
})

switchto2.addEventListener('click', ()=> {
    registerForm.classList.add('hidden');
    loginForm.classList.remove('hidden');
    document.querySelector('.logintext').innerText = 'Login';
})