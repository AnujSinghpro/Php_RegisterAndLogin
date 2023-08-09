<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">

  function submitData(){
    const emailInput = document.getElementById('username');
      const email = emailInput.value.trim();
      const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      
      const passwordInput = document.getElementById('password');
      const password = passwordInput.value.trim();

      
      const confirmPasswordInput = document.getElementById('confirmpassword');
      const confirmPassword = confirmPasswordInput.value.trim();

      const minLength = 8;             // Minimum length of 8 characters
      const hasUppercase = /[A-Z]/;    // At least one uppercase letter
      const hasLowercase = /[a-z]/;    // At least one lowercase letter
      const hasNumber = /\d/;          // At least one numeric digit
      const hasSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\\/\-]/; // At least one special character

      
      if (emailPattern.test(email)) {
        $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        confirmpassword: $("#confirmpassword").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
      }
      
      else {
        alert('Invalid email address. Please enter a valid email.');
      };
    

      if (password.length < minLength) {
        alert('Password must be at least 8 characters long.');
        return;
      } else if (!hasUppercase.test(password)) {
        alert('Password must contain at least one uppercase letter.');
        return;
      } else if (!hasLowercase.test(password)) {
        alert('Password must contain at least one lowercase letter.');
        return;
      } else if (!hasNumber.test(password)) {
        alert('Password must contain at least one numeric digit.');
        return;
      } else if (!hasSpecialChar.test(password)) {
        alert('Password must contain at least one special character.');
        return;
      }
      if (confirmPassword !== password) {
        alert('Passwords do not match. Please try again.');
        return;
      }

    
  };
 
</script>
