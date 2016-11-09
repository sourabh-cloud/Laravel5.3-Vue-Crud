<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo asset("css/app.css") ?>"/>
        <script type="text/javascript" src="<?php echo asset("js/app.js") ?>">
        </script>
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
    </head>
    <body style="margin-top: 50px">
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
                        <nav class="navbar navbar-inverse">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <router-link class="navbar-brand" to="/">
                                        <i class="glyphicon glyphicon-home"></i>
                                    </router-link>

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">

                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                        <router-link to="/">
                                            List <i class="glyphicon glyphicon-list"></i>
                                        </router-link>
                                        </li>
                                        <li>
                                        <router-link to="/new-contact">
                                            New <i class="glyphicon glyphicon-plus-sign"></i>
                                        </router-link>
                                        </li>

                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>