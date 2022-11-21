<?php
	include 'config/database.php';
	
	$query="SELECT * FROM projets";
	$statement=$db->prepare($query);
	$statement->execute();
	$b=$statement->fetchAll(PDO::FETCH_OBJ);
    $query1 = $db->query("SELECT * FROM agent");
    $query2 = $db->query("SELECT * FROM services");
    $query3 = $db->query("SELECT * FROM departements");
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
					<li class="breadcrumb-item active">projet</li>		
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
                                            <h5 id="exampleModalLabel" class="modal-title">Paramètrage des projets</h5>
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body col-md-12">						
                                            <form id="forme" method="POST" action="admin/addData/addprojet.php" class="form-horizontal col-md-12" autocomplete="off">								
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="designation">Entré la designation</label>
                                                            <input type="text" class="form-control" name='designation' required />
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="description">Entré la description</label>
                                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="anne_id">selectionner le coordonateur</label>
                                                            <select class="form-control" name="coordonateur">
                                                                <option selected="">Choose...</option>
                                                                <?php while ($ligne = $query1->fetch()) { ?>												
                                                                    <option value="<?php echo($ligne['nom']); ?>"><?php echo($ligne['nom']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>                                                    
                                                        <div class="form-group">
                                                            <label for="service_id">selectionner le service</label>
                                                            <select class="form-control" name="service_id">
                                                                <option selected="">Choose...</option>
                                                                <?php while ($ligne = $query2->fetch()) { ?>												
                                                                    <option value="<?php echo($ligne['id']); ?>"><?php echo($ligne['designation']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="departement_id">selectionner le departement</label>
                                                            <select class="form-control" name="departement_id">
                                                                <option selected="">Choose...</option>
                                                                <?php while ($ligne = $query3->fetch()) { ?>												
                                                                    <option value="<?php echo($ligne['id']); ?>"><?php echo($ligne['designation']); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>                                                                                                                                                    
                                                    </div>                                                                                                               
                                                </div>
                                                <div class="form-group">                               
                                                    <input type="submit" class="btn btn-danger col-md-5 mt-2" value="Enregistrer" />
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
                                        <th>Designation</th>                                                    
                                        <th>Description</th>                                                    
                                        <th>Coordonateur</th>                                                    
                                        <th>Service</th>                                                                                          
                                        <th>Departement</th>                                                                                          
                                        <th>Date Opération</th>                                                                                                                                                                          
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php foreach ($b as $item) :?>
                                    <div id="edit<?=$item->id ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 id="exampleModalLabel" class="modal-title">Paramètrage des projets</h5>
                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body col-md-12">						
                                                    <form id="forme" method="POST" action="admin/editData/editprojet.php" class="form-horizontal col-md-12" autocomplete="off">										    
                                                        <div class="row">
                                                            <input type="hidden" name="id" id="id"  value="<?=$item->id ;?>" class="form-control" required/> 
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="designation">Entré la designation</label>
                                                                    <input type="text" class="form-control" name='designation' value="<?=$item->designation ;?>" required />
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="description">Entré la description</label>
                                                                    <textarea class="form-control" rows="3" name="description" value="<?=$item->description ;?>"><?=$item->description ;?></textarea>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="anne_id">selectionner le coordonateur</label>
                                                                    <select class="form-control" name="coordonateur" value="<?=$item->coordonateur ;?>">											
                                                                        <option value="<?=$item->coordonateur ;?>"><?=$item->coordonateur ;?></option>
                                                                    </select>
                                                                </div>                                                    
                                                                <div class="form-group">
                                                                    <label for="service_id">selectionner le service</label>
                                                                    <select class="form-control" name="service_id" value="<?=$item->service_id ;?>">												
                                                                        <option value="<?=$item->service_id ;?>"><?=$item->service_id ;?></option>
                                                                    </select>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="departement_id">selectionner le departement</label>
                                                                    <select class="form-control" name="departement_id" value="<?=$item->departement_id ;?>">												
                                                                        <option value="<?=$item->departement_id ;?>"><?=$item->departement_id ;?></option>
                                                                    </select>
                                                                </div>                                                                                                                                                    
                                                            </div>                                                          
                                                        </div>
                                                        <div class="form-group">                               
                                                            <input type="submit" class="btn btn-danger col-md-5 mt-2 ml-5" value="Modifier" />
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
                                        <td><?=$item->designation ;?></td>
                                        <td><?=$item->description ;?></td>
                                        <td><?=$item->coordonateur ;?></td>
                                        <td><?=$item->service_id ;?></td>
                                        <td><?=$item->departement_id ;?></td>
                                        <td><?=$item->dateprod ;?></td>                                       
                                        <td>
                                            <a data-toggle="modal" data-target="#edit<?=$item->id ;?>" href="#" id="edit"><i class="fa fa-edit"></i></a>
                                            <a onclick= "return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="admin/deleteData/deleteprojet.php?id=<?=$item->id ;?>" id="del" class="ml-3"><i class="fa fa-trash"></i></a>                                                        
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