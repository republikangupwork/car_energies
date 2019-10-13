@extends('admin.layouts.app')

@section('content')
	<div class="content">
        <div class="container-fluid">
         	<div class="row">
         		@include('admin.layouts.mailbox_menu')
            	<div class="col-md-10">
              		<div class="card">
                		<div class="card-header card-header-info">
                  			<h3 class="card-title inbox-title">Inbox</h3>
                		</div>
                		<div class="card-body" style="min-height: 400px;">
                			@if (count($data) > 0)
			      			<table id="mailbox" class="table table-bordered mb-0 inbox">
			      				<tbody>
			      					<form id="inbox_form">
			      					{!! csrf_field() !!}
			      					@foreach ($data as $d)
			      					@if (isset($d['images']))
			      					<tr id="{{ $d['id'] }}" class="{{ ($d['read'] == 0) ? 'mailbox-row-unread' : 'mailbox-row-read'}}" data-type="inbox_formsubmit_row">
		      						@else
		      						<tr id="{{ $d['id'] }}" class="{{ ($d['read'] == 0) ? 'mailbox-row-unread' : 'mailbox-row-read'}}" data-type="inbox_feedback_row">
		      						@endif
			      						<td>
			      							<p>
			      							<input type="hidden" name="id[]" value="{{ $d['id'] }}">
			      							@if (isset($d['images']))
			      							<div class="custom-control custom-checkbox">
											    <input type="checkbox" name="formsubmit[]" class="custom-control-input" id="inbox_formsubmit_row{{ $d['id'] }}" name="formasubmit">
											    <label class="custom-control-label" for="inbox_formsubmit_row{{ $d['id'] }}"></label>
										  	</div>
			      							@else
			      							<div class="custom-control custom-checkbox">
											    <input type="checkbox" name="feedback[]" class="custom-control-input" id="inbox_feedback_row{{ $d['id'] }}" name="feedback">
											    <label class="custom-control-label" for="inbox_feedback_row{{ $d['id'] }}"></label>
										  	</div>
			      							@endif
			      							</p>
			      						</td>
			      						<td>
			      							<p><b>{{ $d['name'] }}</b></p>
			      						</td>
			      						@if (isset($d['images']))
			      							<td>
			      								<b>[ FORM SUBMIT ]</b>
			      							</td>
			      						@else 
			      							<td>
			      								<b>[ {{ $d['subject'] }} ]</b><p>{{ str_limit($d['message'],100, '...') }}</p>
			      							</td>
			      						@endif
			      						<td width="30px">
			      							<p><small><i>{{ $d['created']->diffForHumans() }}</i></small></p>
			      						</td>
			      					</tr>
			      					@endforeach
			      					</form>
			      				</tbody>
			      				<tfoot>
			      					<tr>
			      						<td colspan="3" style="border:none !important;">
			      							<button class="btn btn-danger btn-sm" id="delete_inbox"><i class="far fa-trash-alt"></i>&nbsp; Delete</button>
			      							<button class="btn btn-info btn-sm" id="mark_all"><i class="far fa-check-square" aria-hidden="true"></i>&nbsp; Mark All</button>
			      						</td>
			      						<td style="border:none !important;">
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
			      						</td>
			      					</tr>
			      				</tfoot>
			      			</table>
			      			
			      			
							@else 
								<h3 class="text-center" style="font-size: 5vh;">Nothing in Inbox Messages <i class="far fa-folder-open"></i></h3>
							@endif
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
		$.extend({
			moveToTrash: function(data) {
				$.ajax({
		            type: 'POST',
		            url: "{{ url('admin-page/mailbox/move_to_trash/') }}", 
		            data: data,
		            success: function (response) {
		            	console.log(response)
		            },
		            error: function (error) {
		            	console.log(error)
		            }
		        });
			},
			showMessage: function() {

			}
		});

		$('#delete_inbox').on('click', function(e) {
			e.preventDefault();
			var data = $('#inbox_form').serialize();
			$.moveToTrash(data);
		});

		$('.inbox tbody tr input').on('click', function() {
			var id = $(this).attr('id');
			var type = $(this).attr('data-type');
		});

		$('#mark_all').on('click', function() {
			if ($(this).text() == '  Mark All') {
				$(this).html('<i class="far fa-square" aria-hidden="true"></i>&nbsp; Unmark All');
				$('.inbox tbody tr input').prop('checked', true); 
			} else {
				$(this).html('<i class="far fa-check-square" aria-hidden="true"></i>&nbsp; Mark All');
				$('.inbox tbody tr input').prop('checked', false); 
			}
		});


	})
</script>

@endsection