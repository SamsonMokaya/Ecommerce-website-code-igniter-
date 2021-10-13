
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>SignUp in Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       <link rel="stylesheet" href="/assets/css/stylez.css" />
    </head>
    <body>
        <div class="box">
            <h2>Sign Up</h2>
            <form action="" method="POST">
                <div class="inputBox">
                    <input type="text" name="firstname" value="<?=set_value('firstname') ?>">
                    <label for="firstname">First Name</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="lastname" value="<?=set_value('lastname') ?>" required>
                    <label for="lastname">Last Name </label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" value="<?=set_value('email') ?>" required>
                    <label for="email">Email </label>
                </div>
                <div class="inputBx">
                    <label for="gender" class="g_label">Gender</label><br>
                        <select name="gender" class="g_select">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>                   
                    
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="pass1" >
                    <label for="pass" class="">Password <img src="/assets/images/lock.png" alt="" height="15px" width=""></label>
                </div>
                <div class="inputBox">
                    <input type="password" name="confirmpass" id="pass2">
                    <label for="cpass" class=""> Confirm Password <img src="/assets/images/lock.png" alt="" height="15px" width=""></label>
                </div>
                <div class="">
                    <?php if(isset($validation)): ?>
                       <div class="col-12">
                           <div class="alert alert-danger" roles="alert">
                               <?= $validation->listerrors()?>

                           </div>
                       </div>
                    <?php endif; ?>
                </div>



                <div id="btnDiv"><button type="submit" name="register" value="Submit" id="btn">REGISTER</button></div>
                <P>Already have an account <a  href="/login">Log in here</a></P>
            </form>
        </div>

        <script>
            document.getElementById("pass1").addEventListener("keyup", testpassword2);
            document.getElementById("pass2").addEventListener("keyup", testpassword2);
            var submitBtn = document.getElementById("btn");
            function testpassword2() {
            var text1 = document.getElementById("pass1");
            var text2 = document.getElementById("pass2");
            if(text1.value != "" && text2.value != ""){
                if (text1.value.trim() === text2.value.trim()) {
                    text2.style.borderColor = "#2EFE2E";
                    submitBtn.disabled = false;
                } 
                else if(text1.value.trim() != text2.value.trim()) {
                    text2.style.borderColor = "red"
                    
                    submitBtn.disabled = true;
                
                }
            }   
        }
        </script>
        <script href="/assets/js/script.js"></script>
    </body>
</html>