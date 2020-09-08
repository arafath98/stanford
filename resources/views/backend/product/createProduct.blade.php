@extends('backend.dashboard')

@section('page_title')
    {{ $page_title }}
@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">Insert a new Product in the table</div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Create Product</h3>
                <div class="tile-body">
                  <form action="{{ route('admin.product.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input class="form-control" type="text" placeholder="Enter name" name="name">

                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="control-label">Brand</label>
                      <select name="brand_id" class="form-control">

                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach

                      </select>

                      @error('brand')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea class="form-control"  rows="15" name="description" type="text" placeholder="Enter Description"></textarea>

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select name="status" class="form-control">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
  
                        @error('status')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label class="control-label">Image</label>
                      <input class="form-control" type="file" name="image">

                      @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</a>
                  </form>
                </div>
            </div>
        </div>
    </div>


@endsection