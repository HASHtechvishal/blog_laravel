@if(Session::has('error'))
	<div class="alert alert-danger alert-dismissible fade show text-capitalize" role="alert">
   {{Session::get('error')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif  


@if(Session::has('success'))
	<div class="alert alert-success alert-dismissible fade show text-capitalize" role="alert">
    {{Session::get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger alert-dismissable fade show text-capitalize" role='alert'>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif