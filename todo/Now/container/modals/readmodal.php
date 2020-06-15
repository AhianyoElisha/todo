<!--Show Single Detail Modal -->
<div class="modal fade" id="readModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-read">
    <div class="modal-content">
      <div class="modal-header">
        <div class="move-icon" >
					<p><i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i></p>
				</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <table class="table table-borderless table-responsive" style="display:inline-block;text-align:center;" width="100%">

          <tbody style="display:inline-block;text-align:left;" class="case">
             <tr>
               <td scope="row">Todo  :</th>
               <td name="todo"> <input style="	border: none; -webkit-appearance: none;border-color:transparent" type="text" name="read_todo"> </td>
             </tr>
             <tr>
               <td scope="row">Due date  :</th>
               <td name="due_date"> <input type="text" style="	border: none; -webkit-appearance: none;border-color:transparent" name="read_due_date" value="" readonly> </td>
             </tr>
             <td scope="row">Date Created  :</th>
             <td name="created"> <input type="text" style="	border: none; -webkit-appearance: none;border-color:transparent" name="read_created" value="" readonly> </td>
             <tr>
               <td scope="row"  >Date Updated  :</th>
               <td name="updated"> <input type="text" style="	border: none; -webkit-appearance: none;border-color:transparent" name="read_updated" value="" readonly> </td>
             </tr>
             <tr>
               <td scope="row">Completed  :</th>
               <td name="completed"> <input type="text" style="	border: none; -webkit-appearance: none;border-color:transparent" name="read_done" value="" readonly> </td>
             </tr>
           </tbody>
         </table>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
        </div>
      </div>
    </div>
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
<table class="table table-borderless table-hover table-responsive" style="display:inline-block;text-align:center;" width="100%">
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
  <tbody width="100%" style="display:none;">
    <tr width="70%"style="display:none;" >
        <td name="update_id" width="60%" style="display:none;" scope="col" data-visible="false" data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
        <td name="delete_id" width="50%" style="display:none;"scope="col" data-visible="false" data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
    </tr>
     <tr>
       <td scope="row" style="display:none;" width="60%">Todo  :</th>
       <td name="todo" style="display:none;" scope="col" width="100%" data-id="<?php echo $row['id']; ?>"><?php echo $row['todo']; ?></td>
     </tr>
     <tr>
       <td scope="row" style="display:none;" width="60%">Due date  :</th>
       <td name="due_date" style="display:none;" scope="col" width="100%" data-id="<?php echo $row['id']; ?>"><?php echo date("j F Y g:i A",$date) ?></td>

     </tr>
     <td scope="row" style="display:none;" width="60%" >Date Created  :</th>
     <td name="created" style="display:none;" scope="col" width="100%" data-id="<?php echo $row['id']; ?>"><?php echo date("j F Y g:i A",$dateCr)?></td>
     <tr>
       <td scope="row" style="display:none;" width="60%" >Date Updated  :</th>
       <td name="updated"  scope="col" width="100%" data-id="<?php echo $row['id']; ?>"><?php echo date("j F Y g:i A",$dateUp) ?></td>
     </tr>
     <tr>
       <td scope="row" style="display:none;" width="60%" >Completed  :</th>
       <td name="completed" style="display:none;" scope="col" width="100%"  data-id="<?php echo $row['id']; ?>"><?php echo $answer ?></td>
     </tr>
     <tr>
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
