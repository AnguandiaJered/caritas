<?php
	include 'config/database.php';
	
	$query="SELECT * FROM enseignant";
	$statement=$db->prepare($query);
	$statement->execute();
	$b=$statement->fetchAll(PDO::FETCH_OBJ);

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
					<li class="breadcrumb-item active">enseignant</li>		
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
                                            <h5 id="exampleModalLabel" class="modal-title">Paramètrage des enseignants</h5>
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body col-md-12">						
                                            <form id="forme" method="POST" action="admin/addData/addenseignant.php" class="form-horizontal col-md-12" autocomplete="off">	
                                              									
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nom">Entré le nom</label>
                                                            <input type="text" class="form-control" name='nom' required />
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="postnom">Entré le postnom</label>
                                                            <input type="text" class="form-control" name='postnom' required />
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="prenom">Entré le prenom</label>
                                                            <input type="text" class="form-control" name='prenom' required />
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="anne_id">selectionner le sexe</label>
                                                            <select class="form-control" name="sexe">
                                                                <option selected="">Choose...</option>
                                                                <option>M</option>
                                                                <option>F</option>
                                                            </select>
                                                        </div>                                                    
                                                                                                                                                                                                        
                                                    </div>  
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="datenaiss">Entré la date de naissance</label>
                                                            <input type="date" class="form-control" name='datenaiss' required />
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="adresse">Entré l'adresse</label>
                                                            <textarea class="form-control" rows="3" name="adresse"></textarea>
                                                        </div>                                                  
                                                     
                                                        <div class="form-group">
                                                            <label for="observation">Entré le mail</label>
                                                            <input type="email" class="form-control" name='mail' required />
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="telephone">Entré le telephone</label>
                                                            <input type="tel" class="form-control" name='telephone' required />
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
                                        <th>Nom</th>                                                    
                                        <th>Postnom</th>                                                    
                                        <th>Prenom</th>                                                    
                                        <th>Sexe</th>                                                                                          
                                        <th>Date de naissance</th>                                                                                                                                          
                                        <th>Adresse</th>                                                                                           
                                        <th>mail</th>                                                    
                                        <th>telephone</th>                                                   
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php foreach ($b as $item) :?>
                                    <div id="edit<?=$item->id ;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                        <div role="document" class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 id="exampleModalLabel" class="modal-title">Paramètrage des enseignants</h5>
                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body col-md-12">						
                                                    <form id="forme" method="POST" action="admin/editData/editenseignant.php" class="form-horizontal col-md-12" autocomplete="off">										
                                                       	    
                                                        <div class="row">
                                                            <input type="hidden" name="id" id="id"  value="<?=$item->id ;?>" class="form-control" required/> 
                                                            <div class="col-md-6 mt-3">
                                                                <div class="form-group">
                                                                    <label for="nom">Entré le nom</label>
                                                                    <input type="text" class="form-control" name='nom'  value="<?=$item->nom ;?>" required />
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="postnom">Entré le postnom</label>
                                                                    <input type="text" class="form-control" name='postnom'  value="<?=$item->postnom ;?>" required />
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="prenom">Entré le prenom</label>
                                                                    <input type="text" class="form-control" name='prenom'  value="<?=$item->prenom ;?>" required />
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="anne_id">selectionner le sexe</label>
                                                                    <select class="form-control" name="sexe"  value="<?=$item->sexe ;?>">
                                                                        <option  value="<?=$item->sexe ;?>"><?=$item->sexe ;?></option>
                                                                    </select>
                                                                </div>                                                                
                                                                                                                                                         
                                                            </div>  
                                                            <div class="col-md-6 mt-3"> 
                                                                <div class="form-group">
                                                                    <label for="datenaiss">Entré la date de naissance</label>
                                                                    <input type="date" class="form-control" name='datenaiss'  value="<?=$item->datenaiss ;?>" required />
                                                                </div>                                                              
                                                                <div class="form-group">
                                                                    <label for="adresse">Entré l'adresse</label>
                                                                    <textarea class="form-control" rows="3" name="adresse"  value="<?=$item->adresse ;?>"><?=$item->adresse ;?></textarea>
                                                                </div>                                                                 
                                                                <div class="form-group">
                                                                    <label for="mail">Entré le mail</label>
                                                                    <input type="email" class="form-control" name='mail' value="<?=$item->mail ;?>" required />
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label for="telephone">Entré le telephone</label>
                                                                    <input type="tel" class="form-control" name='telephone' value="<?=$item->telephone ;?>" required />
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
                                                    <h3>Editer</h3><button class="btn btn-danger" data-dismiss="modal></button>
                                                    </div>"
                                                    <div class="modal-body"></div>
                                                </div>
                                            </div>
                                        </div>                                   
                                        <td><?=$item->nom ;?></td>
                                        <td><?=$item->postnom ;?></td>
                                        <td><?=$item->prenom ;?></td>
                                        <td><?=$item->sexe ;?></td>
                                        <td><?=$item->datenaiss ;?></td>
                                        <td><?=$item->adresse ;?></td>                                       
                                        <td><?=$item->mail ;?></td>
                                        <td><?=$item->telephone ;?></td>
                                        <td>
                                            <a data-toggle="modal" data-target="#edit<?=$item->id ;?>" href="#" id="edit"><i class="fa fa-edit"></i></a>
                                            <a onclick= "return (confirm(' Voulez-vous supprimer vraiment cette information ?'));" href="admin/deleteData/deleteenseignant.php?id=<?=$item->id ;?>" id="del" class="ml-3"><i class="fa fa-trash"></i></a>                                                        
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