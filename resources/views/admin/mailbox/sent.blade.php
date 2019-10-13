@extends('admin.layouts.app')

@section('content')
	<div class="content">
        <div class="container-fluid">
         	<div class="row">
         		@include('admin.layouts.mailbox_menu')
            	<div class="col-md-10">
              		<div class="card">
                		<div class="card-header card-header-info">
                  			<h3 class="card-title inbox-title">Sent</h3>
                		</div>
                		<div class="card-body" style="min-height: 400px;">
                			@if (count($data) > 0)
                			<div class="{{ count($data) > 7 ? 'table-wrapper-scroll-y my-custom-scrollbar' : '' }}">
				      			<table id="mailbox" class="table table-bordered mb-0 trash">
				      				<tbody>
				      					@foreach ($data as $d)
				      					<input type="hidden" name="id" id="{{ $d['id'] }}">
				      					<tr>
				      						<td><input type="checkbox" name=""></td>
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
				      						<td>
				      							<p><small><i>{{ $d['created']->diffForHumans() }}</i></small></p>
				      						</td>
				      					</tr>
				      					@endforeach
				      					
				      				</tbody>
				      			</table>
				      		</div>
			      			<button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>&nbsp; Delete</button>
			      			<button class="btn btn-info btn-sm"><i class="far fa-check-square" aria-hidden="true"></i>&nbsp; Mark All</button>
			      			{{-- <nav aria-label="Page navigation example">
							  	<ul class="pagination justify-content-end">
							    	<li class="page-item disabled">
							      		<a class="page-link" href="#" tabindex="-1">Previous</a>
							    	</li>
							    	<li class="page-item">
							    		<a class="page-link" href="#">1</a>
							    	</li>
							    	<li class="page-item">
							    		<a class="page-link" href="#">2</a>
							    	</li>
							    	<li class="page-item">
							    		<a class="page-link" href="#">3</a>
							    	</li>
							    	<li class="page-item disabled">
							      		<a class="page-link" href="#">Next</a>
							    	</li>
							  	</ul>
							</nav> --}}
							@else 
								<h3 class="text-center" style="font-size: 5vh;">Nothing in Sent Messages <i class="far fa-folder-open"></i></h3>
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
		$('.inbox tbody tr').on('click', function() {
			// alert($('#id').val())
		})
	})
</script>

@endsection