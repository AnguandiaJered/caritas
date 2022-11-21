<?php
	include 'config/database.php';
	
	$query="SELECT * FROM paiement";
	$statement=$db->prepare($query);
	$statement->execute();
	$b=$statement->fetchAll(PDO::FETCH_OBJ);
    $query1 = $db->query("SELECT * FROM agent");
    $query2 = $db->query("SELECT * FROM services");
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
            <?php include 'partials/sidebar.php'; ?> 
        <div class="row page-header">
			<div class="col-lg-6 align-self-center ">
			    <h2>CARITAS</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">admin</a></li>
					<li class="breadcrumb-item active">paiement</li>		
				</ol>
			</div>
		</div>
        <section class="main-content">
			<div class="row">
                <div class="col-md-12">
                    <div class="card">                    
                        <div class="col-md-12 col-sm-12 text-right">							
							<button data-toggle="modal" data-target="#myModal" class="btn btn-danger mt-3">Effectuer l'opération</button>							
							<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
							    <div role="document" class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="exampleModalLabel" class="modal-title">Paramètrage des paiements</h5>
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body col-md-12">						
                                            <form id="forme" method="POST" action="admin/addData/addpaiement.php" class="form-horizontal col-md-12" autocomplete="off">									
                                                <div class="row">
                                                    <div class="col-md-12 mt-3">
                                                        <div class="form-group">
                                                            <label for="montant">Entré le montant</label>
                                                            <input type="number" class="form-control" name='montant' required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="anne_id">selectionner le devise</label>
                                                            <select class="form-control" name="devise">
                                                                <option selected="">Choose...</option>
                                                                <option>USD</option>
                                                                <option>FC</option>
                                                            </select>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="anne_id">selectionner l'agent</label>
                                                            <select class="form-control" name="agent">
                                                                <option selected="">Choose...</option>
                                                                <?php while ($ligne = $query1->fetch()) { ?>												
                                                                    <option value="<?php echo($ligne['nom']); ?>"><?php echo($ligne['nom']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>                                                    
                                                        <div class="form-group">
                                                            <label for="service_id">selectionner le service</label>
                                                            <select class="form-control" name="service">
                                                                <option selected="">Choose...</option>
                                                                <?php while ($ligne = $query2->fetch()) { ?>												
                                                                    <option value="<?php echo($ligne['designation']); ?>"><?php echo($ligne['designation']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>                                                                                               
                                                    </div>                                                              
                                                </div>
                                                <div class="form-group">                               
                                                    <input type="submit" class="btn btn-danger col-md-5 mt-4" value="Enregistrer" />
                                                </div>																							
                                            </form>
                                        </div>
                                    </div>								                        
                                </div>							
							</div>							
						</div>
                        <div class="card-body">
                            <table id="datatable2" class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>                                                    
                                        <th>Designation</th>                                                    
                                        <th>Devise</th>                                                    
                                        <th>Agents</th>                                                    
                                        <th>Services</th>                                                    
                                        <th>Date paiement</th>                                                    
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">                                   
                                    <?php foreach ($b as $item) :?>
                                    <div id="edit<?=$item->id ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 id="exampleModalLabel" class="modal-title">Paramètrage des paiements</h5>
                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body col-md-12">						
                                                    <form id="forme" method="POST" action="admin/editData/editpaiement.php" class="form-horizontal col-md-12" autocomplete="off">											    
                                                        <div class="row">
                                                            <input type="hidden" name="id" id="id" value="<?=$item->id ;?>" class="form-control" required/> 
                                                            <div class="col-md-12 mt-3">
                                                                <div class="form-group">
                                                                    <label for="montant">Entré le montant</label>
                                                                    <input type="number" class="form-control" name='montant' value="<?=$item->montant ;?>" required />
                                                                </div>  
                                                                <div class="form-group">
                                                                    <label for="anne_id">selectionner le devise</label>
                                                                    <select class="form-control" name="devise" value="<?=$item->devise ;?>" >
                                                                        <option value="<?=$item->devise ;?>"><?=$item->devise ;?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="anne_id">selectionner l'agent</label>
                                                                    <select class="form-control" name="agent" value="<?=$item->agent ;?>">											
                                                                        <option value="<?=$item->agent ;?>"><?=$item->agent ;?></option>
                                                                    </select>
                                                                </div>                                                    
                                                                <div class="form-group">
                                                                    <label for="service_id">selectionner le service</label>
                                                                    <select class="form-control" name="service" value="<?=$item->service ;?>">												
                                                                        <option value="<?=$item->service ;?>"><?=$item->service ;?></option>
                                                                    </select>
                                                                </div>                                                                                              
                                                            </div>                                                              
                                                        </div>
                                                        <div class="form-group">                               
                                                            <input type="submit" class="btn btn-danger col-md-5 mt-4 ml-5" value="Modifier" />
                                                        </div>																							
                                                    </form>
                                                </div>
                                            </div>								                        
                                        </div>							
                                    </div>	
                                    <tr>    
                                        <div class="modal fade" id="edit<?=$item->id ;?>">
                                            <div class="modal-dialog modal-success">
                                                <div class="modal-content">
                                                    <div class="modal-header" >
                                                    <h3>Editer</h3><button class="btn btn-danger" data-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body"></div>
                                                </div>
                                            </div>
                                        </div>                                   
                                        <td><?=$item->id ;?></td>
                                        <td><?=$item->montant ;?></td>
                                        <td><?=$item->devise ;?></td>
                                        <td><?=$item->agent ;?></td>
                                        <td><?=$item->service ;?></td>
                                        <td><?=$item->datepaie ;?></td>
                                        <td>
                                            <a data-toggle="modal" data-target="#edit<?=$item->id ;?>" href="#" id="edit"><i class="fa fa-edit"></i></a>
                                            <a onclick= "return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="admin/deleteData/deletepaie.php?id=<?=$item->id ;?>" id="del" class="ml-3"><i class="fa fa-trash"></i></a>                                                        
                                        </td>                                                    
                                    </tr>
                                    <?php endforeach ;?>                                                                                       
                                </tbody>
                            </table>              

                        </div>
                    </div>
                </div>
            </div>
          
            <?php include 'partials/footer.php'; ?>
        </section>
     
        <?php include 'partials/script.php'; ?>
    </body>

</html>