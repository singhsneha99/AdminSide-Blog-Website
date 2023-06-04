<?php session_start();
include 'connection.php';
include 'header.php';
?>



            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blog User</h1>
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
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
											<th>Name</th>
                                               
                                                  <th>Gender</th>
												   <th>Email</th>
												    <th>Mobile</th>
													  <th>Address</th>
													    <th>Email</th>
                                               
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sql = "SELECT * FROM login order by id desc";
                                            $result = $link->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['user_name']; ?></td>
												   <td><?php echo $row['gender']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['mobile']; ?></td>
												  <td><?php echo $row['address']; ?></td>
												    <td><?php echo $row['gender']; ?></td>
                                               
                                            </tr>
                                          <?php }
                                          } ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                              
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
