@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show">
    <h4 class='text-success'><b>{{Session::get('success')}}</b></h4>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show">
    <h4 class='text-danger'><b>{{Session::get('error')}}</b></h4>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
