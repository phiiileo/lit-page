<?php include_once('student-dashboard-header.php'); ?>
    <div class="row bootstrap snippets">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <!-- Loop through all classes -->
            <?php 
                $getAllClasses = $class->selectAllClassesEnrolled(Session::get('studentId'));
                if ($getAllClasses) {
                    while ($result = $getAllClasses->fetch_assoc()) {
            ?>
            <div class="comment-wrapper">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="pull-left">
                                    <img src="../images/Logo.svg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <h3>Class: <span class="text-danger"><?php echo $result['class_name']; ?></span></h3>
                                    <p class="color">
                                        <a href="student-class.php?classroom=<?php echo $result['classId']; ?>" class="btn btn-primary ">Download Material</a><br>    
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End loop -->
        <?php } echo "<h3>Interested in more Classes? <a href='select-class.php' class='btn btn-primary'>Enroll</a></h3> <br><br><br>"; } else {
                echo "
                    <div class='alert alert-danger'>
                        <h1>You're not enrolled in any class, please click the button below to enroll in a class!</h1>
                        <a href='select-class.php' class='btn btn-primary'>Enroll</a>
                    </div>
                ";
            }
        ?>
        </div>
    </div>
</div>
</body>
</html>