@extends('frontend.mainPage')

@section('content')
    <div class="container-fluid about-page-header">
        <div class="row">
            <div class="col">
              <center class="main-title">
                <h1>About Stanford</h1>
              </center>
            </div>
        </div>

        <div class="row">
            <div class="col">
              <center>A place for learning, discovery, innovation, expression and discourse</center>
            </div>
        </div>

        <div class="row about-img">
            <div class="col-12">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/03/24182714/about_landing-1.jpg">
            </div>
        </div>

        <hr style="margin-bottom: 50px" class="hr">

        <div class="row justify-content-around">
            <div class="col-md-4">
                <center>Opened in</center>
                <center class="main-title">
                  <h1>1891</h1>
                </center>
            </div>

            <div class="col-md-4">
                <center>Located in</center>
                <center class="main-title">
                  <h1>Stanford, CA</h1>
                </center>
            </div>
        </div>

        <div class="row justify-content-around">
            <div class="col-md-4">
                <center class="main-title">
                  <h1>16,424</h1>
                </center>
                <center>Students</center>
            </div>

            <div class="col-md-4">
                <center class="main-title">
                  <h1>2,219</h1>
                </center>
                <center>Faculty</center>
            </div>
        </div>

        <hr class="hr">
    </div>

    <div class="container-fluid about-page-leadership img-3-links">
        <div class="row">
            <div class="col">
              <center class="main-title">
                <h1>Leadership</h1>
              </center>
            </div>
        </div>

        <div style="margin-top: 30px" class="row">
            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/03/11120759/about-stanford.jpeg"
                  class="health-image">
                <div class="title">President Marc Tessier-Lavigne</div>
                <p class="text">Marc Tessier-Lavigne became Stanford University’s eleventh president on September 1, 2016.</p>
                <div class="link">
                  <span class="link">Office of the President</span>
                  <span class="link-arrow">></span>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/03/11115827/about-stanford-2.jpg"
                  class="health-image">
                <div class="title">Provost Persis Drell</div>
                <p class="text">Persis Drell is Stanford’s thirteenth provost, the chief academic and budgetary officer of the University.</p>
                <div class="link">
                  <span class="link">Office of the Provost</span>
                  <span class="link-arrow">></span>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/05/11120211/admin-highlight.jpg"
                  class="health-image">
                <div class="title">Other Administration</div>
                <p class="text">The University is also governed by a Board of Trustees and Faculty Senate and supported by numerous offices.</p>
                <div class="link">
                  <span class="link">University Administration</span>
                  <span class="link-arrow">></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid about-page-history img-3-links">
        <div class="row">
            <div class="col">
              <center class="main-title">
                <h1>History</h1>
              </center>
            </div>
        </div>

        <div style="margin-top: 30px" class="row">
            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/03/09163847/about-stanford-4.jpg"
                  class="health-image">
                <div class="title">Stanford History</div>
                <p class="text">The Leland Stanford Junior University was founded in 1885 by California Senator Leland Stanford and his wife, Jane, in memory of their only child, Leland Jr., who died of typhoid fever at 15.</p>
                <div class="link">
                  <span class="link">A History of Stanford</span>
                  <span class="link-arrow">></span>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/05/09164206/about-then-now.jpg"
                  class="health-image">
                <div class="title">Stanford Then & Now</div>
                <p class="text">Stanford has changed with the world over the last 125+ years, often leading the way with new ideas and discoveries. Here’s a look at Stanford people, places and experiences, past and present.</p>
                <div class="link">
                  <span class="link">Stanford Then & Now</span>
                  <span class="link-arrow">></span>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/05/09164547/about-timeline.jpeg"
                  class="health-image">
                <div class="title">Stanford Timelines</div>
                <p class="text">Our history is rich and inspiring. Our future will be cutting edge and groundbreaking. Immerse yourself in our past and see into our future.</p>
                <div class="link">
                  <span class="link">Stanford Timelines</span>
                  <span class="link-arrow">></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid about-page-experience">
        <div class="row">
            <div class="col-md-6 experience-text">
                <h4>“Be Here” – a virtual reality experience of Stanford</h4>
                <p>What’s it like to be a Stanford undergraduate or graduate student? Students chart their own paths of discovery, learning and growth, and each journey is as unique as the individual. Experience the stories of five Stanford students in immersive 360° video.</p>
                <div class="link">
                    <span class="link">Watch the video</span>
                    <span class="link-arrow">></span>
                </div>
            </div>
            <div class="col-md-6 experience-img">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2018/01/24160831/be-here-360.jpg">
            </div>
        </div>
    </div>

    <div class="container-fluid about-page-history img-3-links">
        <div class="row">
            <div class="col">
              <center class="main-title">
                <h1>Visiting Stanford</h1>
              </center>
            </div>
        </div>

        <div style="margin-top: 30px" class="row">
            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/03/11124656/about-stanford-5.jpg"
                  class="health-image">
                <div class="title">Plan a Visit</div>
                <p class="text">Stanford welcomes more than 150,000 visitors to campus annually. Whether you live in the neighborhood or are coming from far away, we look forward to seeing you here on the Farm.</p>
                <div class="link">
                  <span class="link">Visitor Information</span>
                  <span class="link-arrow">></span>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/05/11150137/about-virtualtour.jpg"
                  class="health-image">
                <div class="title">Virtual Tours</div>
                <p class="text">Visitor Information offers several multimedia tours of Stanford, including videos, slideshows and a self-guided tour.</p>
                <div class="link">
                  <span class="link">Virtual Tours</span>
                  <span class="link-arrow">></span>
                </div>
            </div>

            <div class="col-lg-4">
                <img src="https://www-media.stanford.edu/wp-content/uploads/2017/03/11123744/about-stanford-3.jpg"
                  class="health-image">
                <div class="title">Other Resources</div>
                <p class="text">Have a delicious meal at one of Stanford’s numerous dining locations.  If you want to do some shopping during your visit, we’ve got that covered too.  Our Maps & Directions will help you find your way.</p>
            </div>
        </div>
    </div>
@endsection