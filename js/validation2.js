const new_pwd_input_form=document.getElementById('new_pwd_input_form');

const reset_pwd1=document.getElementById('reset_pwd1');
const reset_pwd2=document.getElementById('reset_pwd2');

const error_reset_pwd1=document.getElementById('error_reset_pwd1');
const error_reset_pwd2=document.getElementById('error_reset_pwd2');

new_pwd_input_form.addEventListener('submit',function(e){
  
  if (!(reset_pwd1.value==='' || reset_pwd1.value==null)){
    error_reset_pwd1.innerHTML="New Password Written!";
    error_reset_pwd1.style.color = "green";
  }
  if (!(reset_pwd2.value==='' || reset_pwd2.value==null)){
    error_reset_pwd2.innerHTML="New Password Rewritten!";
    error_reset_pwd2.style.color = "green";
  }
  if (reset_pwd1.value==='' || reset_pwd1.value==null){
    e.preventDefault();
    error_reset_pwd1.innerHTML="You have to input your new Password!";
    error_reset_pwd1.style.color = "#ff0000";
  }
  else if (reset_pwd2.value==='' || reset_pwd2.value==null){
    e.preventDefault();
    error_reset_pwd2.innerHTML="You have to rewrite your new Password!";
    error_reset_pwd2.style.color = "#ff0000";
  }

  else if (reset_pwd1.value!==reset_pwd2.value){
    e.preventDefault();
    error_reset_pwd2.innerHTML="Passwords don't match!";
    error_reset_pwd2.style.color = "#ff0000";
  }




});
