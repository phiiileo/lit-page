<?php include_once('student-dashboard-header.php'); ?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            $enroll = $class->enrollToClass($_POST, Session::get('studentId'));
        }
    ?>
    
    <div class="row bootstrap snippets">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <div class="comment-wrapper">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="pull-left">
                                    <img src="../images/Logo.svg" alt="" class="img-circle">
                                </a>
                                <div class="media-body">
                                    <h3>Select Class You Want To Enroll In</h3>
                                    <!-- success/error message -->
                                    <?php
                                        if (isset($enroll)) {
                                            echo $enroll;
                                        } 
                                    ?>
                                    <form class="cc-form" action="" method="post">
                                        <div class="form-group">
                                            <select class="form-control" name="classId">  

                                                <option>Select Class</option>
                                                <!-- get all classes -->
                                            <?php
                                                $getAllClasses = $class->selectAllClasses();
                                                if ($getAllClasses) {
                                                    while ($result = $getAllClasses->fetch_assoc()) {
                                            ?>
                                                <option value="<?php echo $result['id']; ?>"><?php echo $result['class_name']; ?></option>
                                            <?php } } ?>
                                            </select>
                                        </div>

                                        <button class="btn btn-primary" name="submit" type="submit">Enroll</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><br><br>
        </div>
    </div>
</div>
</body>
</html>