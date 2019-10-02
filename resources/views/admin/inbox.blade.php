@extends('admin.layouts.app')

@section('content')
	<div class="content">
        <div class="container-fluid">
         	<div class="row">
         		<div class="col-md-3">
         			<button class="btn btn-info btn-block">Compose</button><br>
         			<div class="list-group" id="list-tab" role="tablist">
				      	<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Inbox</a>
				      	<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Sent</a>
			     	 	<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Trash</a>
				    </div>
         		</div>
            	<div class="col-md-9">
              		<div class="card">
                		<div class="card-header card-header-primary">
                  			<h4 class="card-title">Inbox</h4>
                  			{{-- <p class="card-category">Complete your profile</p> --}}
                		</div>
                		<div class="card-body">
                			<div class="tab-content" id="nav-tabContent">
					      		<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
					      		<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
					      		<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
					      		<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
						    </div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
@endsection