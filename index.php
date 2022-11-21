<?php
	include 'config/database.php';
  
  session_start();
  if (!isset($_SESSION['user_id'])){
	  header('location:login.php');
  }

  $query1 = $db->query("SELECT COUNT(*) as id from agent");
  $query2 = $db->query("SELECT COUNT(*) as id FROM ecole");
  $query3 = $db->query("SELECT COUNT(*) as id FROM services");
  $query4 = $db->query("SELECT COUNT(*) as id FROM departements");
  $query5 = $db->query("SELECT COUNT(*) as id FROM enseignant");
  $query6 = $db->query("SELECT COUNT(*) as id FROM projets");
  $query7 = $db->query("SELECT Totalpaie from vpaiement ");
  $query8 = $db->query("SELECT COUNT(*) as id from users");

?>
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
      <?php include 'partials/sidebar.php' ;?>       
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2>Dashboard</h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>			
		</div>
		
        <section class="main-content">
          <div class="row w-no-padding margin-b-30">          
            <div class="col-md-3">
              <div class="widget  bg-light">
                <div class="row row-table ">
                  <div class="margin-b-30">
                  <h2 class="margin-b-5">Personnel</h2>
                  <p class="text-muted">Total Agents</p>
                  <?php while ($item = $query1->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                  <?php } ?>
                </div>
                <div class="progress margin-b-10  progress-mini">
                  <div style="width:50%;" class="progress-bar bg-danger"></div>
                </div>
           
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget  bg-light">
              <div class="row row-table ">
                <div class="margin-b-30">
                  <h2 class="margin-b-5">Ecoles</h2>
                  <p class="text-muted">Total Ecoles</p>
                  <?php while ($item = $query2->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                  <?php } ?> 
                </div>
                <div class="progress margin-b-10 progress-mini">
                  <div style="width:45%;" class="progress-bar bg-indigo"></div>
                </div>
        
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget  bg-light">
              <div class="row row-table ">
                <div class="margin-b-30">
                  <h2 class="margin-b-5">Services</h2>
                  <p class="text-muted">Total services</p>
                  <?php while ($item = $query3->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                  <?php } ?>
                </div>
                <div class="progress margin-b-10 progress-mini">
                  <div style="width:85%;" class="progress-bar bg-success"></div>
                </div>
       
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget  bg-light">
              <div class="row row-table ">
                <div class="margin-b-30">
                  <h2 class="margin-b-5">Departements</h2>
                  <p class="text-muted">Total departements</p>
                  <?php while ($item = $query4->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                  <?php } ?>
                </div>
                <div class="progress margin-b-10 progress-mini">
                  <div style="width:38%;" class="progress-bar bg-warning"></div>
                </div>
             
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class="row w-no-padding margin-b-30">          
            <div class="col-md-3">
              <div class="widget  bg-light">
                <div class="row row-table ">
                  <div class="margin-b-30">
                  <h2 class="margin-b-5">Enseignants</h2>
                  <p class="text-muted">Total enseignants</p>
                  <?php while ($item = $query5->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                  <?php } ?>
                </div>
                <div class="progress margin-b-10  progress-mini">
                  <div style="width:50%;" class="progress-bar bg-danger"></div>
                </div>
          
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget  bg-light">
              <div class="row row-table ">
                <div class="margin-b-30">
                  <h2 class="margin-b-5">Projets</h2>
                  <p class="text-muted">Total projets</p>
                  <?php while ($item = $query6->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                  <?php } ?>
                </div>
                <div class="progress margin-b-10 progress-mini">
                  <div style="width:45%;" class="progress-bar bg-indigo"></div>
                </div>
              
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget  bg-light">
              <div class="row row-table ">
                <div class="margin-b-30">
                  <h2 class="margin-b-5">Paiements</h2>
                  <p class="text-muted">Total Paiements</p>
                  <?php while ($item = $query7->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['Totalpaie'] ;?></span>
                  <?php } ?>
                </div>
                <div class="progress margin-b-10 progress-mini">
                  <div style="width:85%;" class="progress-bar bg-success"></div>
                </div>
              
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="widget  bg-light">
              <div class="row row-table ">
                <div class="margin-b-30">
                  <h2 class="margin-b-5">Users</h2>
                  <p class="text-muted">Total Users</p>
                  <?php while ($item = $query8->fetch()) { ?>	
                    <span class="float-right text-danger widget-r-m"><?=$item['id'] ;?></span>
                    <?php } ?>
                </div>
                <div class="progress margin-b-10 progress-mini">
                  <div style="width:38%;" class="progress-bar bg-warning"></div>
                </div>
              
              </div>
            </div>
          </div>
        </div> 
      </div>
      <?php include 'partials/footer.php' ?>
        </section>
        <?php include 'partials/script.php' ?>
                  
    </body>

</html>