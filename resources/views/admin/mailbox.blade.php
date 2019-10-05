@extends('admin.layouts.app')

@section('content')
	<style>
		table#mailbox {
			border-right: none !important;
			border-left: none !important;
		}
		table#mailbox tbody tr td {
			border-right: none !important;
			border-left: none !important;
		}
		.list-group#mailbox-list-tab .list-group-item.list-group-item-action.active {
			background: linear-gradient(60deg, #26c6da, #00acc1) !important;
		}
		.list-group#mailbox-list-tab .list-group-item.list-group-item-action {
			border-bottom: 2px solid whitesmoke !important;
		}
	</style>
	<div class="content">
        <div class="container-fluid">
         	<div class="row">
         		<div class="col-md-2">
         			{{-- <button class="btn btn-primary btn-block btn-md" id="compose_message" style="font-size: 14px;"><i class="far fa-edit"></i> &nbsp;&nbsp;Compose</button><br> --}}
         			<div class="list-group bg-light inbox-list-group" id="mailbox-list-tab" role="tablist">
				      	<a class="list-group-item list-group-item-action active" data-toggle="list" id="Inbox" href="#inbox" role="tab" aria-controls="inbox"><i class="far fa-envelope"></i>&nbsp;&nbsp; Inbox
				      	</a>
				      	<a class="list-group-item list-group-item-action" data-toggle="list" id="Sent" href="#sent" role="tab" aria-controls="sent"><i class="far fa-paper-plane"></i>&nbsp;&nbsp; Sent
				      	</a>
			     	 	<a class="list-group-item list-group-item-action" data-toggle="list" id="Trash" href="#trash" role="tab" aria-controls="trash"><i class="far fa-trash-alt"></i>&nbsp;&nbsp; Trash
			     	 	</a>
				    </div>

         		</div>
            	<div class="col-md-10">
              		<div class="card">
                		<div class="card-header card-header-info">
                  			<h3 class="card-title inbox-title">Inbox</h3>
                		</div>
                		<div class="card-body" style="min-height: 400px;">
                			<div class="tab-content" id="nav-tabContent">
					      		<div class="tab-pane active" id="inbox" role="tabpanel">
					      			<table id="mailbox" class="table table-bordered">
					      				<tbody>
					      					<tr>
					      						<td>
					      							<p><input type="checkbox" name=""></p>
					      						</td>
					      						<td>
					      							<p><b>Juan Tamad</b></p>
					      						</td>
					      						<td>
				      								@php 
				      									$subject = 'FORM SUBMIT';
				      									$description = str_limit("This string is really really long.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 100, '...');
				      								@endphp
					      							<b>[ {{ $subject }} ]</b><p>{{ $description }}</p>
					      						</td>
					      						<td>
					      							<p>1min ago</p>
					      						</td>
					      					</tr>
					      					<tr style="background-color: whitesmoke;">
					      						<td>
					      							<p><input type="checkbox" name=""></p>
					      						</td>
					      						<td>
					      							<p><b>Cardo Dalisay</b></p>
					      						</td>
					      						<td>
				      								@php 
				      									$subject = 'Helpful Evaluation!';
				      									$description = str_limit("This string is really really long.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 100, '...');
				      								@endphp
					      							<b>[ {{ $subject }} ]</b><p>{{ $description }}</p>
					      						</td>
					      						<td>
					      							<p>2hrs ago</p>
					      						</td>
					      					</tr>
					      					<tr style="background-color: whitesmoke;">
					      						<td>
					      							<p><input type="checkbox" name=""></p>
					      						</td>
					      						<td>
					      							<p><b>Pepito Manaloto</b></p>
					      						</td>
					      						<td>
				      								@php 
				      									$subject = 'THANKS!';
				      									$description = str_limit("This string is really really long.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 100, '...');
				      								@endphp
					      							<b>[ {{ $subject }} ]</b><p>{{ $description }}</p>
					      						</td>
					      						<td>
					      							<p>3hrs ago</p>
					      						</td>
					      					</tr>
					      				</tbody>
					      			</table>
					      			<button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
					      			<nav aria-label="Page navigation example">
									  	<ul class="pagination justify-content-end">
									    	<li class="page-item disabled">
									      		<a class="page-link" href="#" tabindex="-1">Previous</a>
									    	</li>
									    	<li class="page-item">
									    		<a class="page-link" href="#">1</a>
									    	</li>
									    	{{-- <li class="page-item">
									    		<a class="page-link" href="#">2</a>
									    	</li>
									    	<li class="page-item">
									    		<a class="page-link" href="#">3</a>
									    	</li> --}}
									    	<li class="page-item disabled">
									      		<a class="page-link" href="#">Next</a>
									    	</li>
									  	</ul>
									</nav>
					      		</div>
					      		<div class="tab-pane" id="sent" role="tabpanel">
					      			<h3 class="text-center" style="font-size: 5vh;">Nothing in Sent Messages <i class="far fa-folder-open"></i></h3>
					      		</div>
					      		<div class="tab-pane" id="trash" role="tabpanel">
					      			<h3 class="text-center" style="font-size: 5vh;">Nothing in Trash Bin <i class="far fa-folder-open"></i></h3>
					      		</div>
						    </div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script>
	$(document).ready(function() {
		$('.inbox-list-group a').on('click', function (e) {
		  	e.preventDefault()
		  	$('.inbox-title').text($(this).attr('id'))
		});
	})
</script>

@endsection