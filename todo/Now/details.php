<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag ---------->
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="../Now/css/details.css">
</head>
<body>

<div class="container">
  <div class="col-lg-10 ml-auto mr-auto" style="padding-top:5%;">
  <a href="../Now/main.php"><button type="button" class="btn btn-warning btn-lg  px-5 py-2" name="button">Back</button></a>
    <div class="img">
      <div class="text">
        <h1><span>Det</span>ails</h1>
      </div>

    </div>
    <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "newdata";
   $con = mysqli_connect($servername,$username,$password);
   $db = mysqli_select_db($con,$dbname);
   $query = "SELECT * FROM items";
   $query_run = mysqli_query($con,$query);
   ?>
      <table class="table table-lg" >
          <thead>
              <tr>
                  <th class="pl-4 py-4 text-center" >Todo</th>
                  <th class=" py-4 text-center" >Due Date</th>
                  <th class=" py-4  text-center">Created on </th>
                  <th class=" py-4 text-center">Updated on</th>
                  <th class="py-4  text-center">Completed ?</th>
              </tr>
          </thead>
          <?php
          if ($query_run) {
          foreach ($query_run as $row) {
            $sqlDueDate = $row['due_date'];
            $date = strtotime($sqlDueDate);

            $sqlUpDate = $row['updated'];
            $dateUp = strtotime($sqlUpDate);

            $sqlCreateDate = $row['created'];
            $dateCr = strtotime($sqlCreateDate);
            if ($row['done'] ==0) {
              $answer = "No";
            }else {
              $answer = "Yes";
            }
          ?>

          <tbody>
              <tr>
                    <td name="update_id" style="display:none;" data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                    <td name="delete_id" style="display:none;" data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                    <td name="todo" class="p-5 text-left"  data-id="<?php echo $row['id']; ?>"><?php echo $row['todo']; ?></td>
                    <td name="due_date" class=" py-5 text-center" data-id="<?php echo $row['id']; ?>"><?php echo date("j F Y g:i A",$date) ?></td>
                    <td name="created" class=" py-5 text-center" data-id="<?php echo $row['id']; ?>"><?php echo date("j F Y g:i A",$dateCr)?></td>
                    <td name="updated" class=" py-5 text-center" data-id="<?php echo $row['id']; ?>"><?php echo date("j F Y g:i A" ,$dateUp) ?></td>
                    <td name="completed" class=" py-5 text-right" data-id="<?php echo $row['id']; ?>"><?php echo $answer ?></td>
              </tr>
          </tbody>
          <?php
            }
          }
          else
          {
            echo "Add Item ";
          };
           ?>
      </table>
      </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

</body>
