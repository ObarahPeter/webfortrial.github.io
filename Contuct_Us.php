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
            // Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
            }
            else{
                //Passed
            }
        } else{
            //NOT SUCCESSFUL
            $msg = 'Please, Fill in all the required fields';
            $magClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css links-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!--optional css themes-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="genstyles.css" type="text/css" rel="stylesheet">
    <title>CONTACT</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-12" style="background-color: #8c8c8c">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuCodes" aria-expanded="false">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                CoolChoice
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="menuCodes">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#">HOME</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">ABOUT US</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Company Profile</a></li>
                                        <li><a href="#">PERSONNEL/Employees</a></li>
                                        <li><a href="#l">Values</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">SERVICES</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">CLIENT</a></li>
                                        <li><a href="#">PERSONNEL</a></li>
                                        <li><a href="#l">HISTORY</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">GALLERY</a></li>
                                <li><a href="#">CLENTS</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-success">
    <div class="jumbotron col-mid-12">
        <h1 id="jumTitle">COOL CHOICE ltd.</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-5">

        <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537.7851343847035!2d36.829648382173396!3d-1
                    .2827393887074638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f112bf66ea147%3A0x2beb179467e0310d!
                    2sAmbala+Rd%2C+Nairobi!5e1!3m2!1sen!2ske!4v1521903006339" width="100%" height="550" frameborder="0" style="border:0"
                    allowfullscreen></iframe>
        </p>

    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-4">
        <h3>SUGGESTION</h3>
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
</div>

<div class="container-fluid bg-primary">
    <div classs="row">
        <div class="col-md-12">
            <p class="footCnt">
                Head office<br/>
                JOSTER BUSINESS PLAZA Ambala road first floor wing 2<br/>
                P.O BOX 18530-00100<br/>
                Nairobi Kenya<br/>
                Tel+254713 720 816<br/>
                +25439 905 606<br/>
                Email coolchoice2014@gmail.com<br/>
                Facebook: Cool Choice (EA) Ltd
            </p>
        </div>
    </div>
</div>

<!--jQuery- necessary for bootstrap-->
<script src="js/jquery-3.3.1.min.js"></script>
<!--optional-->
<script src="js/bootstrap.min.js"></script>
<!--myOn-->
<script src="style.js"></script>
</body>
</html>