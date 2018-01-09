<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <base href="http://codebases.com/foodcart/">
        <link rel="icon" href="assets/admin/images/favicon.ico">
        <title>Dashboard</title>

        <link href="http://codebases.com/foodcart/assets/admin/css/bootstrap.css" rel="stylesheet">
                <link href="http://codebases.com/foodcart/assets/admin/css/style.css" rel="stylesheet">
        <link href="http://codebases.com/foodcart/assets/admin/lib/dialog/dist/css/bootstrap-dialog.css" rel="stylesheet">
        <link href="http://codebases.com/foodcart/assets/admin/lib/dialog/dist/css/bootstrap-dialog.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Hind:400,500,600,300,700" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="">
        <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>index.php/penjualan">Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-pad-adjust nav-notification"></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="http://codebases.com/foodcart/assets/admin/images/avtar.png" alt="" class="thumb-md img-circle">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="http://codebases.com/foodcart/admin/profile">My account</a></li>
                        <li><a href="http://codebases.com/foodcart/admin/profile/change_password">Change password</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="http://codebases.com/foodcart/admin/logout">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2">
    <div class="sidebar">
        <div class="panel-group side-menu" id="accordion">
            <div class="panel panel-sidebar">
                <div class="panel-heading ">
                    <h4 class="panel-title"><a href="http://codebases.com/foodcart/admin/console"><span class="glyphicon glyphicon glyphicon-home"></span> Dashboard</a></h4>
                </div>               
            </div>
            <div class="panel panel-sidebar">
                <div class="panel-heading ">
                    <h4 class="panel-title"><a href="http://codebases.com/foodcart/admin/order"><span class="glyphicon glyphicon glyphicon-piggy-bank"></span> Orders</a></h4>
                </div>               
            </div>
            <div class="panel panel-sidebar">
                <div class="panel-heading ">
                    <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse4"><span class="glyphicon glyphicon-cutlery"></span> Food Section</a></h4>
                </div>               
                <div class="panel-collapse collapse " id="collapse4">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li class=""><a href="http://codebases.com/foodcart/admin/dish_category">Dish Categories</a></li>
                            <li class=""><a href="http://codebases.com/foodcart/admin/dish">Dish Items</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a href="http://codebases.com/foodcart/admin/coupons"><span class="glyphicon glyphicon glyphicon-check"></span> Coupons</a></h4>
                    </div>               
                                    </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse6"><span class="glyphicon glyphicon-search"></span> CMS</a></h4>
                    </div>               
                                            <div class="panel-collapse collapse " id="collapse6">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/cms/menu">Menu manager</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/cms/page">Page manager</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/cms/blog">Blog</a></li>
                                                                    </ul>
                            </div>
                        </div>
                                    </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse7"><span class="glyphicon glyphicon glyphicon-wrench"></span> Settings</a></h4>
                    </div>               
                                            <div class="panel-collapse collapse " id="collapse7">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/store">Store Settings</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/Order">Order Settings</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/working_hours">Working Hours</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/social_media">Social Media</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/payment">Payment Settings</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/email">Email Settings</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/SMS">SMS Settings</a></li>
                                                                            <li class=""><a href="http://codebases.com/foodcart/admin/settings/Layouts">Menus Layouts</a></li>
                                                                    </ul>
                            </div>
                        </div>
                                    </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" href="#collapse8"><span class="glyphicon glyphicon glyphicon-eye-open"></span> Users</a></h4>
                    </div>               
                                            <div class="panel-collapse collapse " id="collapse8">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class=""><a href="http://codebases.com/foodcart/admin/user/user">Users</a></li>
                                </ul>
                            </div>
                        </div>
                                    </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a href="http://codebases.com/foodcart/admin/faqs"><span class="glyphicon  glyphicon glyphicon-bullhorn"></span> FAQS</a></h4>
                    </div>               
                                    </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a href="http://codebases.com/foodcart/admin/review"><span class="glyphicon glyphicon glyphicon-record"></span> Customer Reviews</a></h4>
                    </div>               
                                    </div>
                                <div class="panel panel-sidebar">
                    <div class="panel-heading ">
                        <h4 class="panel-title"><a href="http://codebases.com/foodcart/admin/reservation"><span class="glyphicon glyphicon glyphicon-tasks"></span> Reservations</a></h4>
                    </div>               
                                    </div>
                        </div>
    </div>
</div>                <div class="col-sm-9 col-md-10 page-content">
                    <div id="flash-message-wrapper" style="display: none;"></div>
                    <div class="panel panel-default custom-panel">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div class="huge">0</div>
                                <div>Orders Today</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div class="huge">$ 0.00</div>
                                <div>Sales Today</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div class="huge">122</div>
                                <div>Orders Total</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div class="huge">$ 13.883.63</div>
                                <div>Sales Total</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
            </div>
        </div>

        <script type="text/javascript">
            var config = {
                admin_url: 'http://codebases.com/foodcart/admin',
                token: '8bc750c3cf9af748b61ea424bb2cd0c4',
                today: '01/07/2018'
            };
            var lang = {"lengthMenu":"Showing _MENU_ entries","zeroRecords":"No data available in table ","error_mandatory":false};
        </script>
        

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://codebases.com/foodcart/assets/admin/lib/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://codebases.com/foodcart/assets/admin/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://codebases.com/foodcart/assets/admin/js/ie10-viewport-bug-workaround.js"></script>
                <script type="text/javascript" src="http://codebases.com/foodcart/assets/admin/js/app.js"></script>
        <script src="http://codebases.com/foodcart/assets/admin/js/underscore-min.js "></script>
    


<input id="ext-version" type="hidden" value="1.2.2"></body></html>