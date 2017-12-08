<div class="modal" id="eventModal1" role="dialog">
			<div class="modal-dialog">
				<!--Modal Content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2 class="modal-title">{{$event->event_name}}</h2>
					</div>
					<div class="modal-body">
						<p><img src="img/img13.jpg"></p>
						<p>Venue:{{$event->venue}} </p>
						<p>Sponsors: </p>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>	
		
	</div>