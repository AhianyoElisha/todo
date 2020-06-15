    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
     <div class="modal-dialog modal-confirm">
    	 <div class="modal-content">
    		 <div class="modal-header">
    			 <div class="icon-box" style="left:40%">
    				 <i class="material-icons">&#xE5CD;</i>
    			 </div>
    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    		 </div>
    		 <form class="" action="operation.php" method="post">
           <input type="hidden" name="delete_id">
           <div class="modal-body">
            <h4 style="left:27%; position:relative;">Are you sure?</h4>
            <p>Do you really want to delete these records? This process cannot be undone.</p>
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger" name="delete">Delete</button>
          </div>
         </form>
       </div>
     </div>
    </div>
<!-- ############################################################################################## -->
