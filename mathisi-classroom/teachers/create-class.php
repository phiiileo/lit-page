<?php include 'teachers-dashboard-header.php'; ?>
<!-- <div class="toggle">
        <input type="checkbox" id="toggle" />
        <label for="toggle"></label>
        <em>Enable dark mode!</em>
    </div>
<script>
        const toggle = document.getElementById('toggle');
        const body = document.body;

        toggle.addEventListener('input', e => {
        const isChecked = e.target.checked;

        if (isChecked) {
        body.classList.add('dark-theme');
             } else {
         body.classList.remove('dark-theme');
         }
          });  
      </script> -->
      <h4>Create New Class</h4>
      
      <br><br>
    <div class="row">
    <div class="col-md-8 col-md-offset-2" style="padding-top: 10px" class="panel panel-primary">
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
          $addClass = $class->addNewClass($_POST);
      }
    ?>
    <?php 
        if (isset($addClass)) {
          echo $addClass;
        }
    ?> 
            
      <form role="form" action="" method="post">
        <!---<label>Create class</label><br>-->
        <div class="form-group">
          <input type="text" class="form-control" name="className" placeholder="Class Name" required> <br>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Create Class</button>
      </form>
   
      <hr>
      <h2>All Classes Available</h2>
      <table id="studentTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <th>S/N</th>
          <th>Class</th>
      </thead>
      <tbody>
        <?php 
          $getClass = $class->selectAllClasses();
          if (isset($getClass)) {
            $i = 0;
            while($row = $getClass->fetch_assoc()) {
              $i++;
        ?> 
        <tr>
          <td><?php echo $i; ?></td> 
          <td><?php echo $row['class_name']; ?></td>
        </tr> 
        <?php } } ?>
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
  </div>
</div>
</div>
</body>
<script src="../js/jquery-3.3.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
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
</html>
