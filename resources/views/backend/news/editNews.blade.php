@extends('backend.dashboard')

@section('page_title')
    {{ $page_title }}
@endsection

@section('content')

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">Edit the current News</div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Edit News</h3>
                <div class="tile-body">
                  <form action="{{ route('admin.news.updateEdit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="control-label">Topic</label>
                      <input class="form-control" type="text" placeholder="Enter title" name="topic" value="{{ $news->topic }}">
                      <input class="form-control" name="news_id" value="{{ $news->id }}" type="hidden">

                      @error('topic')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="control-label">Title</label>
                      <input class="form-control" type="text" placeholder="Enter text" name="title" value="{{ $news->title }}">

                      @error('text')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="control-label">Image</label>
                      <input class="form-control" type="text" placeholder="Enter Image Link" name="image" value="{{ $news->image }}">

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