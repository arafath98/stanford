@extends('backend.dashboard')

@section('page_title')
    {{ $page_title }}
@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">Edit the current Brand</div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit Brand</h3>
                <div class="tile-body">
                  <form action="{{ route('admin.brand.updateEdit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="control-label">Name</label>
                      <input class="form-control" type="text" placeholder="Enter name" name="name" value="{{ $brand->name }}">
                      <input class="form-control" name="brand_id" value="{{ $brand->id }}" type="hidden">

                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="control-label">Status</label>
                      <select name="status" class="form-control">
                        <option value="1" {{ $brand->staus == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $brand->staus == 0 ? 'selected' : '' }}>Inactive</option>
                      </select>

                      @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="control-label">Image</label>
                      <input class="form-control" type="file" name="image" value="{{ $brand->image }}">

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