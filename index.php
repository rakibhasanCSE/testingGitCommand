<!DOCTYPE html>
<html lang="en">
    <head>
        <title> dummyMarkup </title>
        <meta charset="utf-8"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

         <link rel="shortcut icon" href="assets/images/favicon.ico"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- all css files here -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/style.css?v=1.1" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <!-- load jquery file -->
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type='text/javascript' src="assets/js/bootstrap.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    </li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>   


    
        <!-- main contain area -->

        <div class="block_container container-fluid"> </div>



        <!-- main contain area -->


        <!-- footer section-->
        <section class="footer" style="position:fixed;bottom:0;left:0;right:0;margin:0 auto;padding:15px 0;background:gray;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <div class="copyRight">
                            Copyright <i class="fa fa-copyright"></i> Company Name. All Rights Reserved
                            <span style="color: #c0c0c0;">Develop by - Hasan</span>
                        </div>
                    </div>
                    <div class="col-sm-6 dateTime text-right">
                        <span id="currentDateTime" style="color: #fff"></span>
                    </div>
                </div>
            </div>
        </section><!-- /end footer section-->

        <script type='text/javascript' src="assets/js/functions.js"></script>

    </body>
</html>

<script>
    setInterval(function(){
        var d = new Date(),
            minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
            hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
            today = d.getDay(),
            ampm = d.getHours() >= 12 ? 'pm' : 'am',
            months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
            days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
        var second=d.getSeconds();
        var timezone = (d.getTimezoneOffset())/(-60);
        var symbol=((String(timezone).search("-"))<0)?'+':'';
        var areaZoneName=Intl.DateTimeFormat().resolvedOptions().timeZone;
        var text=" UTC "+symbol+" "+timezone;
        var newtiemx= days[today]+" "+ d.getDate()+' '+months[d.getMonth()]+' '+d.getFullYear()+' '+hours+':'+minutes+":"+second+" "+text;
        document.getElementById("currentDateTime").innerHTML =newtiemx
    }, 100);
</script>