@extends('layout.app') @section('title', $viewData["title"]) @section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/floridina.jpeg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/mi sedap.jpeg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/sarigandum.jpeg') }}" class="img-fluid rounded">
</div>
</div> @endsection
