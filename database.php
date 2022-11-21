<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARITAS</title>

        <!-- Common Plugins -->
        <?php include 'partials/link.php'; ?>
    </head>
    <body>
        <div class="top-bar primary-top-bar">          
            <?php include 'partials/header.php'; ?>
	    </div>           
            <?php include 'partials/sidebar.php'; ?> 
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>CARITAS</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Sauvegarde</a></li>
					<li class="breadcrumb-item active">Sauvegarde de données</li>		
				</ol>
			</div>
		</div>

    <section class="main-content">
	
        <div class="col-md-12">
	    <div class="row">		
            <div class="col-md-6" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-header text-center text-uppercase bg-danger text-white">
                        <i class="fa fa-download"></i>&nbsp;Generer la sauvergarde des données(backup)
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <img src="{{ asset('img/backup db.svg')}}" class="img img-responsive" >
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center" style="margin-top: 53px;">
                                    <i class="fa fa-hand-o-down fa-lg"></i>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="#" class="btn btn-danger btn-round">
                                        <i class="fa fa-download"></i>&nbsp; Sauvegarder la base des données
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-header text-center text-uppercase bg-danger text-white">
                        <i class="fa fa-download"></i>&nbsp;Importer la sauvergarde des données(backup)
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4">
                                            <img src="{{ asset('img/restore db.svg')}}" class="img img-responsive" >
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mb-2" style="margin-top: 10px;">
                                    <form method="POST" action="#" enctype="multipart/form-data" class="row">
                                        <div class="col-12" style="margin-top: 10px;">
                                            <input type="file" name="file_name" id="file_name" class="form-control form-round">
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <button type="submit" class="btn btn-danger btn-round"><i class="fa fa-download"></i>&nbsp; importer la base des données</button>
                                        </div>                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'partials/footer.php'; ?>
        </section>
        <?php include 'partials/script.php'; ?>
    </body>

</html>