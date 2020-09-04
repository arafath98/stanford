@extends('backend.dashboard')

@section('page_title')
    {{$page_title}}
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
            @if (count($news) == 0)
                There are no news in the table
            @else
                News in the table
            @endif
          </div>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th> News no </th>
              <th> Topic </th>
              <th> Title </th>
              <th> Image </th>
              <th></th>
              <th> Actions </th>
            </tr>
          </thead>
          <tbody>


            @foreach ($news as $key =>  $n)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $n -> topic }}</td>
                <td>{{ $n -> title }}</td>
                <td>{{ $n -> image }}</td>
                <td>
                </td>
                <td>
                  <a href=" {{ route('admin.news.showEditNewsPage', $n->id) }}"> Edit </a>
                  <a href="{{ route('admin.news.delete', $n->id) }}"> Delete </a>
                </td>
              </tr>
            @endforeach
         
           
          </tbody>
        </table>
      </div>
    </div>

@endsection