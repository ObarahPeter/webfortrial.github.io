<?php

    //Massages Vars
        $msg = '';
        $msgClass= '';

    //Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //Get Form Data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //Check Required Fields
        if(!empty($name) && !empty($email) && !empty($message)){
                //SUCCESSFUL
            echo'SENT SUCCESSFULLY';
        } else{
                //NOT SUCCESSFUL
            $msg = 'Please, Fill in all the required fields';
            $magClass = 'alert-danger';
        }
    }
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>CONTACT US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css links-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!--optional css themes-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="genstyles.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <?php if($msg != ''):?>
    <div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>

    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <leble>Name</leble>
            <input type="text" name="name" class="form-control" value="" >
        </div>
        <div class="form-group">
            <leble>email</leble>
            <input type="text" name="email" class="form-control" value="" >
        </div>
        <div class="form-group">
            <leble>Message</leble>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <br/>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

</body>
</html>
