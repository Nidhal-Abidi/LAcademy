const mail_input_form=document.getElementById('mail_input_form');

const reset_pwd_email=document.getElementById('reset_pwd_email');

const error_reset_pwd_email=document.getElementById('error_reset_pwd_email');

mail_input_form.addEventListener('submit',function(e){
  if (reset_pwd_email.value==='' || reset_pwd_email.value==null){
    e.preventDefault();
    error_reset_pwd_email.innerHTML="You have to input your e-mail!";
    error_reset_pwd_email.style.color = "#ff0000";
  }
});
