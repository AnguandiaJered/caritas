<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="img" href="assets/img/CEPAC.png">
        <title>Login</title>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
	
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body class="bg-light">

        <div class="misc-wrapper">
            <div class="misc-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <div class="misc-header text-center">
                                <?php if(isset($_GET['error'])) {echo"<div class='alert alert-danger'>Erreur de connexion !!! email ou password incorrect</div>";} ?>
                                <h1><strong>CARITAS</strong></h1>
                            </div>
                            <div class="misc-box">                                    
                                <form role="form" action="session.php" method="POST" autocomplete="off">                              
                                    <div class="form-group">                                      
                                        <label  for="exampleuser1">Email</label>
                                        <div class="group-icon">
                                        <input id="exampleuser1" type="email" placeholder="Email adress" class="form-control" name="email" autofocus required="">
                                        <span class="icon-user text-muted icon-input"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mot de passe</label>
                                        <div class="group-icon">
                                        <input id="exampleInputPassword1" type="password" placeholder="Password" name="password" class="form-control" required />
                                        <span class="icon-lock text-muted icon-input"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="float-left">
                                           <div class="checkbox checkbox-primary margin-r-5">
												<input id="checkbox2" type="checkbox" checked="">
												<label for="checkbox2"> Se souvenir de moi</label>
											</div>
                                        </div>
                                        <div class="float-right">                                      
                                            <input type="submit" class="btn btn-block btn-danger btn-rounded box-shadow" value="Se connecter" />                                           
                                        </div>
                                    </div>
                                    <hr>                                   
                                </form>
                            </div>
                            <div class="text-center misc-footer">
                               <p>Copyright &copy; <?php $today = new DateTime('today'); echo $today->format('2022 - Y'), PHP_EOL; ?> CARITAS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
		
    </body>

</html>
