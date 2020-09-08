@extends('backend.dashboard')

@section('page_title')
    {{ $page_title }}
@endsection

@section('content')

    <div class="row">
      <div class="col-md-12">

        @if (Session::has('success'))
          <div class="col-md-12">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-success">
                <button class="close" type="button" data-dismiss="alert">×</button>
                <strong>
                  {{Session::get('success')}}
                </strong>
              </div>
            </div>
          </div>
        @endif

        <div class="tile">
          <div class="tile-body">
            @if (count($brands) == 0)
                There are no Brands in the table
            @else
                Brands in the table
            @endif
          </div>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th> Brand no </th>
              <th> Name </th>
              <th> Status </th>
              <th> Image </th>
              <th></th>
              <th> Actions </th>
            </tr>
          </thead>
          <tbody>


            @foreach ($brands as $key => $brand)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $brand->name }}</td>
                <td>{{ $brand->status == 1 ? "Active" : "Inactive" }}</td>
                <td> <img src="{{ asset($brand->image) }}" width="50px"> </td>
                <td>
                </td>
                <td>
                  <a href=" {{ route('admin.brand.showEditBrandPage', $brand->id) }}"> Edit </a>
                  <a href="{{ route('admin.brand.delete', $brand->id) }}"> Delete </a>
                </td>
              </tr>
            @endforeach
         
           
          </tbody>
        </table>
      </div>
    </div>

@endsection