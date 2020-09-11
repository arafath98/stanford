@extends('backend.auth.base_page');

@section('page_title')
    {{ $page_title }}
@endsection

@section('content')
    
    <div class="container-fluid">

        @if (Session::has('login_message'))
          <div class="row justify-content-center">
            <div class="col-10 col-sm-9 col-md-7 col-lg-6 col-xl-5">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-success">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>
                      {{Session::get('login_message')}}
                    </strong>
                  </div>
                </div>
              </div>
          </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-5">
                <h1>{{ $page_title }}</h1>
            </div>
        </div>

        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-10 col-sm-9 col-md-7 col-lg-6 col-xl-5">
                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">

                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">

                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

@endsection