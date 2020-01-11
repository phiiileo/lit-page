<?php include_once('student-dashboard-header.php'); ?>
            <div class="row bootstrap snippets">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
<!-- loop through the announcements -->
<?php
        $getAllAnnouncements = $student->selectAllAnnouncements();
          if ($getAllAnnouncements) {
            while ($result = $getAllAnnouncements->fetch_assoc()) {
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
                                            <span class=" pull-right">
                                                <small class="color"><?php echo $result['title']; ?></small>
                                            </span>
                                            <strong class="color">Management: <span class="text-danger"><?php echo $result['name']; ?></span></strong>
                                            <p class="color-1"><?php echo $fm->formatDate($result['dates']); ?></p>
                                            <p class="color"><?php echo $result['content']; ?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php } } ?>
                </div>
            </div>

            </div>
</body>
</html>