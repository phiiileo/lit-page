<?php include_once('student-dashboard-header.php'); ?>
    <div class="row bootstrap snippets">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <!-- Loop through all classes -->
            
            <div class="comment-wrapper">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="pull-left">
                                    <img src="../images/Logo.svg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <h3><span class="text-danger">Your Profile</span></h3>
                                <?php 
                                    $profile = $student->getSingleStudentProfile(Session::get('studentId'));
                                    if ($profile) {
                                        while ($row = $profile->fetch_assoc()) {
                                ?>
                                    <p class="color">
                                        Name: <?php echo $row['name']; ?>
                                    </p>
                                    <p class="color">
                                        Name: <?php echo $row['email']; ?>
                                    </p>
                                <?php } } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <h2>Classes Enrolled In</h2>
            <table id="studentTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <th>S/N</th>
                <th>Class</th>
                </thead>
                <tbody>
                <?php 
                    $getAllClasses = $class->selectAllClassesEnrolled(Session::get('studentId'));
                    if ($getAllClasses) {
                        $i = 0;
                        while ($result = $getAllClasses->fetch_assoc()) {
                        $i++;
                    ?> 
                    <tr>
                    <td><?php echo $i; ?></td> 
                    <td><?php echo $result['class_name']; ?></td>
                    </tr> 
                    <?php } } else {
                        echo "<td>You've not enrolled in any class yet!</td>";
                    } ?>
                </tbody>
                <tfoot>
                    <tr>
                    <th>S/N</th>
                    <th>Class</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>  
</body>
</html>