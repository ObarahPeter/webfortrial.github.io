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
    <title> INDEX COOL CHOICE</title>
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
<div class="container-fluid bg-success">
    <div class="container-fluid" id="containerTwo">
        <div class="row">
            <!--<img src="pic11.jpg" width="100%" style="border-radius: 1%"/>-->
            <div id="slider" class=" grey carousel slide" data-ride="carousel">

                <!--indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>
                    <li data-target="#slider" data-slide-to="4"></li>
                    <li data-target="#slider" data-slide-to="5"></li>
                    <li data-target="#slider" data-slide-to="6"></li>
                </ol>

                <!--wrapper for slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="pic1.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic8.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic9.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic32.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic4.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic2.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic3.jpg" alt="appliences" width="100%"/>
                        <div class="carousel-caption">
                            <h3>LINK WITH US</h3>
                            <br/>
                            <button type="button" class="btn btn-default">our address</button>
                        </div>
                    </div>
                </div>
                <!--next and prev button-->
                <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="containerText">
        <h3 class="ourClientHd">OUR CLIENTS</h3>
        <p class="hmClientPar">Our quality and professional services have been highly appreciated by well known reputable firms.</p>
        <div class="col-md-4">
            <img src="Dentuss.jpg" width="100%" style="border-radius: 30%">
            <p class="hmClientPar">SAMSUNG COMPANY OFFICES IN KENYA, UGANDA & TANZANIA SAMSUNG COMPANY OFFICES IN KENYA, UGANDA & TANZANIA</p>
        </div>
        <div class="col-md-4">
            <img src="Samsung.jpg" width="100%" style="border-radius: 30%">
            <p class="hmClientPar">SAMSUNG COMPANY OFFICES IN KENYA, UGANDA & TANZANIA SAMSUNG COMPANY OFFICES IN KENYA, UGANDA & TANZANIA</p>
        </div>
        <div class="col-md-4">
            <img src="LG.jpg" width="100%" style="border-radius: 30%">
            <p class="hmClientPar">SAMSUNG COMPANY OFFICES IN KENYA, UGANDA & TANZANIA SAMSUNG COMPANY OFFICES IN KENYA, UGANDA & TANZANIA</p>
        </div>
        <p class="hmClientPar">Website: www.coolchoicerefrigeration.co.ke</p>
    </div>
    <div class="container-fluid" id="hmDeco">
        <hr>
        <p class="hmDecPar">VISIT US IN TIMES TOWER </p>
        <p class="hmDecPar">OR</p>
        <p class="hmDecPar">You can reach Us through The Link below</p><br/>
        <p class="hmDecPar"><a href="#">www.coolchoice</a></p>
        <hr>
    </div>
    <div class="row">
        <h3 class="headServ"> WHAT DEFINES OUR QUALITY SERVICES</h3>
        <div class="col-md-4">
            <p class="servParHomeCent">From large-scale commercial through to residential, we deliver a solution designed to your unique requirements and budget.
                We guarantee our products and work standards a  understand the critical importance of meeting deadlines.</p>
        </div>
        <div class="col-md-4">
            <img src="pic20.jpg" width="100%" style="border-radius: 6%">
        </div>
        <div class="col-md-4">
            <p class="servParHomeCent">From large-scale commercial through to residential, we deliver a solution designed to your unique requirements and budget.
                We guarantee our products and work standards a  understand the critical importance of meeting deadlines.</p>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <img src="pic34.jpg" width="100%" style="border-radius: 6%">
        </div>
        <div class="col-md-4">
            <p class="servParHomeCent">From large-scale commercial through to residential, we deliver a solution designed to your unique requirements and budget.
                We guarantee our products and work standards a  understand the critical importance of meeting deadlines.</p>
        </div>
        <div class="col-md-4">
            <img src="pic24.jpg" width="100%" style="border-radius: 6%">
        </div>
    </div>
    <hr/>
</div>
<div class="container-fluid" id="footer">
    <div classs="row">
        <div class="col-md-4">
            <h3>Head Office</h3><br/>
            <p>
                JOSTER BUSINESS PLAZA Ambala road first floor wing 2<br/>
                P.O BOX 18530-00100<br/>
                Nairobi Kenya<br/>
            </p>
        </div>
        <div class="col-md-4">
            <h3>About Us</h3><br/>
            <p>
                Information<br/>
                JOSTER BUSINESS PLAZA Ambala road first floor wing 2<br/>
                P.O BOX 18530-00100<br/>
                Nairobi Kenya<br/>
                Tel+254713 720 816<br/>
                +25439 905 606<br/>
                Email coolchoice2014@gmail.com<br/>
                Facebook: Cool Choice (EA) Ltd
            </p>
        </div>
        <div class="col-md-4">
            <div class="container-fluid">
                <h3>Check In With Us</h3>

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
    </div>
</div>
<div class="container-fluid" id="copyRyt">
    <p class="copyRyt">media icons</p>
    <p class="copyRyt">copyright © PETSTA(SAMGITZ) 2018. All Rights Reserved | PetStaGrapher</p>
</div>

<!--jQuery- necessary for bootstrap-->
<script src="js/jquery-3.3.1.min.js"></script>
<!--optional-->
<script src="js/bootstrap.min.js"></script>
<!--myOn-->
<script src="style.js"></script>
</body>
</html>