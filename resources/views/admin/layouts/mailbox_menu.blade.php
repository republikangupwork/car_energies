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
	.mailbox-row-unread {
		background-color: whitesmoke;
	}
	.mailbox-row-read {
		background-color: white;
	}
</style>
<div class="col-md-2">
	<div class="list-group bg-light inbox-list-group" id="mailbox-list-tab" role="tablist">
	  	<a class="list-group-item list-group-item-action {{ Request::is('admin-page/mailbox/inbox')  ? 'active' : '' }}" id="Inbox" href="{{ url('admin-page/mailbox/inbox') }}"><i class="far fa-envelope"></i>&nbsp;&nbsp; Inbox
	  	</a>
	  	<a class="list-group-item list-group-item-action {{ Request::is('admin-page/mailbox/sent')  ? 'active' : '' }}" id="Sent" href="{{ url('admin-page/mailbox/sent') }}"><i class="far fa-paper-plane"></i>&nbsp;&nbsp; Sent
	  	</a>
	 	<a class="list-group-item list-group-item-action {{ Request::is('admin-page/mailbox/trash')  ? 'active' : '' }}" id="Trash" href="{{ url('admin-page/mailbox/trash') }}"><i class="far fa-trash-alt"></i>&nbsp;&nbsp; Trash
	 	</a>
	</div>
</div>