<div class="container">
	<h2 class="text-center">
		 Create
	</h2>
	<div class="card p-5">

		<form action="{{route('subjects.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Title:</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Body:</label>
					<textarea name="name" class="form-control"></textarea>
				</div>
				<div class="form-group">	
					<input type="submit" name="btnsubmit" class="btn btn-info" value="Submit">
				</div>		
		</form>
	</div>
</div>