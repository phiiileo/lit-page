<?php include_once('student-dashboard-header.php'); 

  if (isset($_GET['classroom']) && $_GET['classroom'] != "") {
      $classId = $_GET['classroom'];
  } else {
    header("Location: classroom.php");
  }
?>

<div class="row bootstrap snippets">
    <div class="row bootstrap snippets">
        <div class="col-md-8 col-md-offset-2">
        <table id="studentTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Class</th>
                    <th>Items</th>
<!-- ======================== We display the class item name ========-->
                <?php
                    // we use the id to get the number of items on each class
                    $getAllItems3 = $class->selectAllItems($classId);
                    if ($getAllItems3) {
                        $i = 0;
                        while ($row2 = $getAllItems3->fetch_assoc()) {
                                $i++;
               
                // If items are greater than 1 display more than one heading 
                        echo "<th>Download Item ".$i."</th>";
                    } }
                ?>    
                </tr>
            </thead>
            <tbody>
            <!-- get all classes student enrolled in -->
            <?php
                $getsingle = $class->selectSingleClass($classId);
                    if ($getsingle) {
                        while ($result2 = $getsingle->fetch_assoc()) {
                
            ?>
                    <tr>
                        <td><strong><?php echo $result2['class_name']; ?></strong></td>
                    <?php
                        // id from the class table
                        $id2 = $result2['id'];
                        // we use the id to get the number of items on each class
                        $getAllItems = $class->selectAllItemsOfaClass($id2);
                        $count = $getAllItems->fetch_array();

                    ?>
                            <!-- items -->
                            <td class="mr">Items (<?php echo $count['items_count']; ?>)</td>
                            
                            <!-- download button -->
                            <?php 
                                // if the class has no material, remove the download button
                                if($count['items_count'] == 0) {
                                    echo "<td></td>";
                                } else {
                                    $download = $class->selectAllItems($classId);
                                        if ($download) {
                                            while ($downloadItem = $download->fetch_assoc()) {
                                ?>
                                                <td><a href="../class-files/<?php echo $downloadItem['item']; ?>" class="btn btn-primary" target="_blank">Download</a></td>
                                        <?php } 
                                        } 
                                        else { echo "<td>No Material Available For Download, please check back later</td>"; } 
                                }
                            ?>
                        </tr>
            <?php } } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Class</th>
                    <th>Items</th>
                    <th>Download</th>
                </tr>
            </tfoot>
        </table>
    </div></div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#studentTable').DataTable({
        scrollY: true,
        scrollX: true
    });
  });
</script>
</body>
</html>