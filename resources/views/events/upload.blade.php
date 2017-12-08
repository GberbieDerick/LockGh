
@extends('layouts.app')

@section('content')
	
		</div><!--End of header-->
		<div class="content">
			<div class="upload-form">
				<form action="#" method="post">
					<div class="row">			
						
							<legend>Create Event</legend>
						
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" type="text" name="eventName" id="eventName" placeholder="Enter the name of Event">
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="venue" id="eventVenue" placeholder="Enter the venue of Event">
							</div>

							<div class="form-group">
								<input class="form-control" type="date" name="date" id="eventDate" placeholder="Enter the date of Event">
							</div>
							<div class="form-group">
								<input class="form-control" type="text"  name="time" id="eventTime" placeholder="Enter the time of Event">
							</div>
							<div class="form-group">
								<input class="form-control" type="text"  name="rate" id="eventTime" placeholder="Event Rate">
							</div>
						</div>	
						<div class="col-md-2"></div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="eventFlier"><strong>Flier Image:</strong></label>
								<input class="form-control" type="file" name="eventFlier" id="eventFlier" placeholder="Select the Flier image">
							</div>
							
							<div class="form-group">
								<label for="exampleTextarea">Description</label>
    <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="form-group">
								<input class="form-control" value="Upload" type="submit" name="upload" id="upload">
							</div>
						</div>
						<div class="col-md-4"></div>
					</div>	
				</form>
			</div>

			<div class="row">
				<footer>
					<p>&copy;2017&nbsp;LockGh | Privacy | All rights reserved</p>
				</footer>
			</div>	
		</div><!--content-->
	</div>
	@endsection
	
