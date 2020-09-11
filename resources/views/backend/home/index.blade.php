@extends('backend.dashboard')

@section('page_title')
    {{ $page_title }}
@endsection


@section('content')

    @if (Session::has('registered'))
    <div class="col-md-12">
      <div class="bs-component">
        <div class="alert alert-dismissible alert-success">
          <button class="close" type="button" data-dismiss="alert">×</button>
          <strong>
            {{Session::get('registered')}}
          </strong>
        </div>
      </div>
    </div>
    @endif

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">This is the Admin Panel</div>
        </div>
      </div>
    </div>

@endsection