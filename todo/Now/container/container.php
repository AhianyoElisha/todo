<style media="screen">
.done{
  text-decoration:line-through;
}
</style>
<!-- ############################################################################################################################3 -->
<!-- Button trigger modal -->
<!-- Main Page -->
<div class="container">
  <div class="card">
    <button class="proceed">
      <a href="#addModal" data-toggle="modal">
        <span class="addicon">
          &#43;
        </span>
      </a>
    </button>
    <a href="../Now/details.php">
      <button   style="background-color: #47a44b;outline: none;height: 50px;width: 150px;border-radius: 40px;border: none;color: white;">
        <span class="pl-2" style="font-size:20px; position:static; vertical-align:top;">TodoStore</span>  <i style="font-size: 25px; line-height: 36px; position: static; left: 25%;top: 11%;" class="material-icons">keyboard_arrow_right</i>
      </button>
    </a>
    <div class="datepop" id="date"></div>
  </div>
  <div class="todo-table">
          <div class="table-responsive">
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
            <table class="table table-hover" id="employees-table">
                <tbody id="#tbody">
                  <?php
      						if ($query_run) {
      							foreach ($query_run as $row) {
      						?>
                    <tr>
                      <?php if(!$row['done']): ?>
                      <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="text-center">
                      <form action="../Now/operation.php" method="post">
                        <input type="hidden" name="do_id" id="<?php echo $row['id'];?>" value="<?php echo $row['id'];?>">
                         <button class="checkbtn" style="background-color:transparent;border:none;outline:none;" data-id="<?php echo $row['id'];?>" type="submit" name="circle"><i class="fa fa-circle-thin fa-2x"></i></button>
                       </form>
                     <?php endif; ?>
                     <?php if($row['done']): ?>
                       <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="text-center">
                       <form action="../Now/operation.php" method="post">
                         <input type="hidden" name="undo_id" data-id="<?php echo $row['id'];?>" value="<?php echo $row['id'];?>">
                          <button class="uncheckbtn" style="background-color:transparent;border:none;outline:none;" data-id="<?php echo $row['id'];?>" type="submit" name="check"><i style="color:green;" class="fa fa-check-circle fa-2x"></i></button>
                        </form>
                      <?php endif; ?>
                        </td>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" <?php echo$row['done']?$done :'' ?>   colspan="4"><?php echo $row['todo']; ?></td>
                        <td data-id="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" class="td-actions text-right">
                          <button class="btn btn-link btn-just-icon btn-sm linebtn readbtn" style="width:30px; height:30px;border-radius:50%;">
                            <span style="bottom:2px; right:6px; position: relative; font-size: 30px;">
                              <a href="#readModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                <i class="material-icons blue" data-id="<?php echo $row['id'];?>">receipt</i>
                              </a>
                            </span>
                          </button>
                          <button class="btn btn-link btn-just-icon btn-sm editbtn linebtn" data-toggle="modal" data-target="#exampleModal" style="width:30px; height:30px;border-radius:50%;">
                                <span style="bottom:2px; right:4px; position: relative; font-size: 30px;">
                                  <a href="#editModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                    <i class="material-icons green" data-id="<?php echo $row['id'];?>">edit</i>
                                  </a>
                              </span>

                          </button>
                          <button  class=" btn btn-link btn-just-icon btn-sm linebtn" style="width:30px; height:30px;border-radius:50%;">
                              <span style="bottom:2px; right:5px; position: relative; font-size: 30px;">
                                <a href="#myModal" data-toggle="modal" data-id="<?php echo $row['id']; ?>">
                                  <i class="material-icons red deletebtn" data-id="<?php echo $row['id'];?>">close</i>
                              </a>
                            </span>
                          </button>
                          </td>
                    </tr>
                    <?php
                      }
                    }
                    else
                    {
                      echo "Add Item ";
                    };
                     ?>
                </tbody>
            </table>
            </div>
        </div>
      </div>
