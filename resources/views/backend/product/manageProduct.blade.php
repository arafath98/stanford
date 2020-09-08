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
            @if (count($products) == 0)
                There are no Products in the table
            @else
                Products in the table
            @endif
          </div>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th> Product no </th>
              <th> Name </th>
              <th> Brand Name </th>
              <th> Description </th>
              <th> Status </th>
              <th> Image </th>
              <th></th>
              <th> Actions </th>
            </tr>
          </thead>
          <tbody>


            @foreach ($products as $key => $product)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand_id }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->status == 1 ? "Active" : "Inactive" }}</td>
                <td> <img src="{{ asset($product->image) }}" width="50px"> </td>
                <td>
                </td>
                <td>
                  <a href=" {{ route('admin.product.showEditProductPage', $product->id) }}"> Edit </a>
                  <a href="{{ route('admin.product.delete', $product->id) }}"> Delete </a>
                </td>
              </tr>
            @endforeach
         
           
          </tbody>
        </table>
      </div>
    </div>

@endsection