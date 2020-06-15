<!-- addModal HTML -->
<div id="addModal" class="modal fade">
	<div class="modal-dialog modal-additem">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
        <form action="../Now/operation.php" control="" class="form-group" method="post">
							<div class="row">
								<input type="text" name="todo" id="todo" class="form__input" placeholder="Add to do">
							</div>
              <div class="form-control">
								<h5>Set due date and time</h5>
                	<input type="datetime-local" class="datetime-local" name="due_date" style="margin:auto" required/>
                </div>
              </div>
							<div class="row">
				            <button class="btn btn-success btn-block btn-lg" type="submit" name="create">Add Item</button>
							</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- ################################################################################################################################## -->
