<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Log in Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/css/stylez.css" />
    </head>
    <body>
        <div class="box">
            <h2>Log in</h2>
            <?php if(session()->get('success')): ?>
                <div class="alert alert success">
                    <?=session()->get('success') ?>
                </div>

            <?php endif; ?>


            <form action="" method="POST">
                <div class="inputBox">
                    <input  name="email" value="<?=set_value('email') ?>" >
                    <label for="email">Email </label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password">
                    <label for="password" class="">Password <img src="/assets/images/lock.png" alt="" height="15px" width=""></label>
                </div>
                <?php if(isset($validation)): ?>
                       <div class="col-12">
                           <div class="alert alert-danger" roles="alert">
                               <?= $validation->listerrors()?>

                           </div>
                       </div>
                    <?php endif; ?>
                <button type="submit" name="login" value="Submit" id="btn">LOG IN</button>
                <P>Don't have an account <a  href="/register">Sign up here</a></P>
            </form>
        </div>
    </body>
</html>