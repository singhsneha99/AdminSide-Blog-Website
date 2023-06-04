<?php session_start();
include 'connection.php';
include 'header.php';
?>



            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blog List</h1>
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
											<th>Sr No</th>
											<th>Blog Category</th>
                                                <th>Blog Title</th>
                                                <th>Posted Date</th>
												<th>View</th>
												<th>Status</th>
                                               
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sql = "SELECT * FROM blog order by id desc";
                                            $result = $link->query($sql);
												$count = 1;
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
												
                                            ?>
                                            <tr class="odd gradeX">
											 <td><?php echo $count; ?></td>
                                                <td><?php echo $row['cat_id']; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['bdate']; ?></td>
												  <td><a href="<?php echo 'blog.php?id='.$row['id'];?>"><button class="btn btn-info">View Blog</button></a></td>
												  
												  <?php if($row['status'] == 1){ ?>
												  
													<td><a href="<?php echo 'block.php?id='.$row['id'].'&bid=0';?>"><button class="btn btn-danger">Block Blog</button></a></td>
												  <?php }else{?>
												  
												  <td><a href="<?php echo 'block.php?id='.$row['id'].'&bid=1';?>"><button class="btn btn-success">UnBlock Blog</button></a></td>
												  <?php } ?>
												  
												  
												  
												  
												  
                                               
                                            </tr>
                                          <?php $count++;}
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
