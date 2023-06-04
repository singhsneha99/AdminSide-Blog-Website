<?php session_start();
include 'connection.php';
include 'header.php';
$id = $_GET['id'];

$sql1 = "SELECT b.*,l.user_name FROM blog b join login l ON l.id = b.user_id where b.id = '$id'";
$result = mysqli_query($link, $sql1);
$data = mysqli_fetch_array($result);
?>



            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blog Details</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                             <table class="table table-hover">
    
    <tbody>
      <tr>
        <th>Title</th>
        <td><?= $data['title'];?></td>
       </tr>
     <tr>
        <th>User Name</th>
        <td><?= $data['user_name'];?></td>
       </tr>
	    <tr>
        <th>Category</th>
        <td><?= $data['cat_id'];?></td>
       </tr>
     <tr>
        <th>Postaed Date</th>
        <td><?= $data['bdate'];?></td>
       </tr>
	   <tr>
        <th>Status</th>
        <td>
		<?php 
		if($data['status'] == 1){
			echo 'Active';
			
		}else{
			echo "Block";
		}
			
		?>
		
		</td>
        </tr>
	   <tr>
        <th>Description</th>
       <td><?= $data['description'];?></td>
       </tr>
	   <tr>
        <th>Image</th>
       <td><img src="../blog/<?= $data['bimg']?>"></td>
       </tr>
	    <tr>
        <th></th>
       <td><a href="viewblog.php"><button class="btn btn-danger">Back</button></a></td>
       </tr>
    </tbody>
  </table>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
               
            </div>
            <!-- /#page-wrapper -->



<?php include 'footer.php'; ?>
