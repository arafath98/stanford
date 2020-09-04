@extends('frontend.mainPage')

@section('content')
    <div class="container-fluid news-page-content">
        <div class="row">
            <div class="col">
              <center class="main-title">
                <h1>Stanford News</h1>
              </center>
            </div>
        </div>

        <div class="row">
            <div class="col">
              <center>Recent stories from around campus, published daily</center>
            </div>
        </div>

        <!-- Rendering all the full lines possible -->

        @for ($i = 0; $i < $lines; $i++)
            <div class="row news-line">
                
                @for ($j = ($i * 4); $j < (($i * 4) + 4); $j++)
                    
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                      <img class="card-image"
                        src="{{ $news[$j]->image }}">
                      <div class="card-body">
                        <div class="card-title">{{ $news[$j]->topic }}</div>
                        <p class="card-text">{{ $news[$j]->title }}</p>
                      </div>
                    </div>
                </div>

                @endfor

            </div>
        @endfor

        <!-- Rendering What is left -->

        <div class="row news-line justify-content-around">
            @if ( $left != 0 )

                @for ($i = 0; $i < $left; $i++)

                    <div class="{{ $class }}">
                        <div class="card">
                        <img class="card-image"
                            src="{{ $news[$toalNews - $i - 1]->image }}">
                        <div class="card-body">
                            <div class="card-title">{{ $news[$toalNews - $i - 1]->topic }}</div>
                            <p class="card-text">{{ $news[$toalNews - $i - 1]->title }}</p>
                        </div>
                        </div>
                    </div>

                @endfor
                
            @endif
        </div>

    </div>
@endsection