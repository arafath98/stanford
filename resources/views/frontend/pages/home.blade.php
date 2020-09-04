@extends('frontend.mainPage')

@section('content')
  <!-- News -->
  <div class="container">
    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>Stanford Today</h1>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <center>The latest news from Stanford</center>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2020/07/29071013/CO-Opportunities3.jpg">
          <div class="card-body">
            <div class="card-title">SCIENCE & TECHNOLOGY</div>
            <p class="card-text">Stanford scholars say COVID-19 offers rare opportunities to study natural, human
              systems</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2020/08/10001028/ProspectTheory.jpg">
          <div class="card-body">
            <div class="card-title">SCIENCE & TECHNOLOGY</div>
            <p class="card-text">Evolutionary theory of economic decisions</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2020/08/10001044/democracy.jpg">
          <div class="card-body">
            <div class="card-title">SOCIAL SCIENCES</div>
            <p class="card-text">U.S. democracy facing historic crisis</p>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-3 col-md-4">
        <div class="card">
          <img src="https://www-media.stanford.edu/wp-content/uploads/2020/08/11101015/image.img_.full_.high-1.jpg"
            class="card-image">
          <div class="card-body">
            <div class="card-title">MEDICINE</div>
            <p class="card-text">Stanford experts recommend strict, costly approaches for reopening schools</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="card">
          <img src="https://www-media.stanford.edu/wp-content/uploads/2020/08/12061013/Steel-making.jpg"
            class="card-image">
          <div class="card-body">
            <div class="card-title">SCIENCE & TECHNOLOGY</div>
            <p class="card-text">To solve climate change, we must deal with heat</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-4">
        <div class="card">
          <img src="https://www-media.stanford.edu/wp-content/uploads/2020/07/23040015/CDe-p3-7.jpg" class="card-image">
          <div class="card-body">
            <div class="card-title">UNIVERSITY AFFAIRS</div>
            <p class="card-text">Stanford contingency plans evolve as COVID-19 cases surge nationwide</p>
          </div>
        </div>
      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="more-news-button">
          <p class="more-news-text">More Stanford News</p>
        </div>
      </div>

    </div>

  </div>

  <!-- Events -->
  <div class="container-fluid events">
    <div class="container">

      <div class="row">
        <div class="col">
          <center style="color: white;" class="main-title">
            <h1>Stanford Events</h1>
          </center>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <center style="color: white;">What’s happening on campus</center>
        </div>
      </div>

      <div class="row">

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="card">
            <img src="https://events.stanford.edu/events/884/88420/88420-1.jpg" class="card-image">
            <div class="card-body events-card-body">

              <div class="news-date">
                <div class="dates">
                  <div class="month">AUG</div>
                  <div class="day">13</div>
                </div>
              </div>

              <div class="card-title">SCREENING</div>
              <p class="card-text">Camera as Witness Presents documentary RESISTANCE FIGHTERS – THE GLOBAL ANTIBIOTICS
                CRISIS</p>
              <p>1:00 PM</p>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="card">
            <img src="https://events.stanford.edu/events/884/88470/88470-1.jpg" class="card-image">

            <div class="card-body events-card-body">

              <div class="news-date">
                <div class="dates">
                  <div class="month">AUG</div>
                  <div class="day">13</div>
                </div>
              </div>

              <div class="card-title">LECTURE</div>
              <p class="card-text">Virtual Event, Rural Broadband in the West: Missing Connections</p>
              <p>02:00 PM</p>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="card">
            <img src="https://events.stanford.edu/events/885/88547/88547-1.jpg" class="card-image">
            <div class="card-body events-card-body">

              <div class="news-date">
                <div class="dates">
                  <div class="month">AUG</div>
                  <div class="day">16</div>
                </div>
              </div>

              <div class="card-title">SEMINAR</div>
              <p class="card-text">Kenneth Mack joins the Community Hour</p>
              <p>01:00 PM</p>
            </div>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="card">
            <img src="https://events.stanford.edu/events/860/86062/86062-2.jpg" class="card-image">
            <div class="card-body events-card-body">

              <div class="news-date">
                <div class="dates">
                  <div class="month">AUG</div>
                  <div class="day">17</div>
                </div>
              </div>

              <div class="card-title">LECTURE</div>
              <p class="card-text">Linear Algebra - ICME Summer Workshops 2020</p>
              <p>9:00 AM</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row justify-content-center">

        <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="more-news-button">
            <p class="more-news-text">More Stanford Events</p>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- Academics -->
  <div class="container-fluid academics-container">

    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>Academics</h1>
        </center>
      </div>
    </div>

    <div style="font-size: 15pt;" class="row">
      <div class="col">
        <center>Preparing students to make meaningful contributions to society</center>
      </div>
    </div>

    <div style="font-size: 15pt;" class="row">
      <div class="col">
        <center>as engaged citizens and leaders in a complex world</center>
      </div>
    </div>

    <div style="margin-top: 40px;" class="row">

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/23172842/undergrad-class-8x5.jpg"
          class="academics-image">
        <div class="title">Undergraduate Education</div>
        <p class="text">Rich learning experiences that provide a broad liberal arts foundation and deep subject-area
          expertise</p>
        <div class="link">
          <span class="link">Undergraduate Education</span>
          <span class="link-arrow">></span>
        </div>
      </div>

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/23171005/graduate_cars_lab-8x5.jpg"
          class="academics-image">
        <div class="title">Graduate Education</div>
        <p class="text">Unsurpassed opportunities to participate in the advancement of entire fields of knowledge</p>
        <div class="link">
          <span class="link">Graduate Education</span>
          <span class="link-arrow">></span>
        </div>
      </div>

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/23174732/lifelong_learning-8x5.jpg"
          class="academics-image">
        <div class="title">Lifelong learning</div>
        <p class="text">Continuing adult education, executive and professional programs, and programs for K-12 students
        </p>
        <div class="link">
          <span class="link">Programs for Lifelong Learning</span>
          <span class="link-arrow">></span>
        </div>
      </div>

    </div>

    <div style="margin-top: 20px;" class="row">
      <div class="col">
        <center class="main-title">
          <h1>Seven schools in which to pursue your passions</h1>
        </center>
      </div>
    </div>

    <div class="row justify-content-center link-row">

      <div class="col-8">
        <center>
          <span class="link-name">Medicine</span>
          <span class="link-separator">|</span>

          <span class="link-name">Law</span>
          <span class="link-separator">|</span>

          <span class="link-name">Humanities & Sciences</span>
          <span class="link-separator">|</span>

          <span class="link-name">Engineering</span>
          <span class="link-separator">|</span>

          <span class="link-name">Education</span>
          <span class="link-separator">|</span>

          <span class="link-name">Earth</span>
          <span class="link-separator">|</span>

          <span class="link-name">Business</span>
        </center>
      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="more-news-button">
          <p class="more-news-text">More About Academics</p>
        </div>
      </div>

    </div>

  </div>

  <!-- Prfessor comment -->
  <div class="professor-comment heather">

    <div class="bg"></div>

    <div class="container">

      <div class="row justify-content-center professor-image">
        <div class="col-4">
          <center>
            <img
              src="https://www-media.stanford.edu/wp-content/uploads/2020/04/22140604/Heather_Hadlock_480x480_website-v2-240x240.jpg">
          </center>
        </div>
      </div>

      <div class="row justify-content-center professor-text">
        <div class="col-9">
          <center>“Here at Stanford, people are constantly in conversation with one another. During my time as the
            director of the program in Feminist, Gender, and Sexuality Studies, I saw how faculty and students in
            different disciplines were incredibly engaged with their material and with one another. People are very
            intellectually generous here.”</center>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <center>
            <div class="title">Heather Hadlock</div>
            <p class="text">Associate Professor of Music</p>
            <div class="link-container">
              <span class="link">More about Heather</span>
              <span class="link-arrow">></span>
            </div>
          </center>
        </div>
      </div>

    </div>

  </div>

  <!-- Research -->
  <div class="container-fluid research">

    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>Research</h1>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <center>A culture of collaboration that drives innovative discoveries vital</center>
        <center>to our world, our health and our intellectual life</center>
      </div>
    </div>

    <hr class="hr">

    <div class="row">

      <div class="col-md-4">
        <center class="main-title">
          <h1>18 Institutes</h1>
        </center>
        <center>cross interdisciplinary boundaries</center>
      </div>

      <div class="col-md-4">
        <center class="main-title">
          <h1>20 Libraries</h1>
        </center>
        <center>hold over 9.5 million volumes</center>
      </div>

      <div class="col-md-4">
        <center class="main-title">
          <h1>$1.6 Billion</h1>
        </center>
        <center>annual research budget</center>
      </div>

    </div>

    <hr class="hr">

    <div style="margin-top: 40px;" class="row">
      <div class="col">
        <center class="main-title">
          <h1>Stanford research for a better world</h1>
        </center>
      </div>
    </div>

    <div class="row research-images">

      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2020/07/22103014/gettyimages-covid-cal.jpg">
          <div class="card-body">
            <div class="card-title">SCIENCE & TECHNOLOGY</div>
            <p class="card-text">Stanford team uses data to help California track and prevent COVID-19</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2019/10/28161015/wildfire_GettyImages-155308044.jpg">
          <div class="card-body">
            <div class="card-title">SCIENCE & TECHNOLOGY</div>
            <p class="card-text">Understanding wildfire season</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2019/08/19125020/chemist_dassama_1400-1499x999.jpg">
          <div class="card-body">
            <div class="card-title">SCIENCE & TECHNOLOGY</div>
            <p class="card-text">What it’s like to be a chemist</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <img class="card-image"
            src="https://www-media.stanford.edu/wp-content/uploads/2019/08/23093112/gettybacktoschool.jpg">
          <div class="card-body">
            <div class="card-title">TEACHING & STUDENTS</div>
            <p class="card-text">Back to school: Applying Stanford research to student success</p>
          </div>
        </div>
      </div>

    </div>

    <div style="margin-top: 20px;" class="row justify-content-center">
      <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="more-news-button">
          <p class="more-news-text">More About Research</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Health Care -->
  <div class="container-fluid health">

    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>Health Care</h1>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <center>Caring for people and advancing human health through</center>
        <center>innovative research, education and health care</center>
      </div>
    </div>

    <div style="margin-top: 40px;" class="row">

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/04/12163351/health-care-3.jpg"
          class="health-image">
        <div class="title">Stanford Health Care</div>
        <p class="text">Our multidisciplinary approach delivers unparalleled care for each patient’s unique needs,
          coordinating expertise with the most advanced technology.</p>
        <div class="link">
          <span class="link">Stanford Health Care</span>
          <span class="link-arrow">></span>
        </div>
      </div>

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/10141805/med-highlight-8x5.jpg"
          class="health-image">
        <div class="title">Stanford Medicine</div>
        <p class="text">Comprised of our biomedical research, education and clinical enterprises, Stanford Medicine is
          leading a worldwide revolution in precision health.</p>
        <div class="link">
          <span class="link">Stanford Medicine</span>
          <span class="link-arrow">></span>
        </div>
      </div>

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/10141827/packard-childrens-hospital-8x5.jpg"
          class="health-image">
        <div class="title">Stanford Children's Health</div>
        <p class="text">The only health care network in the Bay Area – and one of the few in the country – exclusively
          dedicated to pediatric and obstetric care</p>
        <div class="link">
          <span class="link">Stanford Children's Health</span>
          <span class="link-arrow">></span>
        </div>
      </div>

    </div>

    <div style="margin-top: 20px;" class="row justify-content-center">
      <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="more-news-button">
          <p class="more-news-text">More About Health Care</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Prfessor comment -->
  <div class="professor-comment alma">

    <div class="bg"></div>

    <div class="container">

      <div class="row justify-content-center professor-image">
        <div class="col-4">
          <center>
            <img src="https://www-media.stanford.edu/wp-content/uploads/2019/06/03161346/Flores-Perez-Alma-240x240.jpg">
          </center>
        </div>
      </div>

      <div class="row justify-content-center professor-text">
        <div class="col-9">
          <center>“Move about the world and make as much of a difference and as much change as you can.”</center>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <center>
            <div class="title">Alma Flores-Pérez</div>
            <p class="text">Class of 2019, Linguistics and Iberian and Latin American Cultures</p>
            <div class="link-container">
              <span class="link">More about Alma</span>
              <span class="link-arrow">></span>
            </div>
          </center>
        </div>
      </div>

    </div>

  </div>

  <!-- Campus Life -->
  <div class="container-fluid campus-life">

    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>Campus Life</h1>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <center>A thriving community of creative and accomplished</center>
        <center>people from around the world</center>
      </div>
    </div>

    <div style="margin-top: 40px;" class="row">

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/23180235/roble_hall-8x5.jpg"
          class="health-image">
        <div class="title">Student Life</div>
        <p class="text">A residential campus with diverse housing, exceptional dining, health care and over 600 student
          organizations</p>
        <div class="link">
          <span class="link">Student Affairs</span>
          <span class="link-arrow">></span>
        </div>
      </div>

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/23180723/dance-8x5.jpg"
          class="health-image">
        <div class="title">Arts & Culture</div>
        <p class="text">A rich tradition of fostering creativity and a vibrant arts district on campus</p>
        <div class="link">
          <span class="link">Stanford Arts</span>
          <span class="link-arrow">></span>
        </div>
      </div>

      <div class="col-lg-4">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2017/06/23175630/swimming-8x5.jpg"
          class="health-image">
        <div class="title">Athletics & Fitness</div>
        <p class="text">36 varsity sports, 32 club sports and state-of-the-art recreational facilities and fitness
          programs</p>
        <div class="link">
          <span class="link">Go Stanford</span>
          <span class="link-arrow">></span>
        </div>
      </div>

    </div>

    <div style="margin-top: 20px;" class="row justify-content-center">
      <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="more-news-button">
          <p class="more-news-text">More About Campus Life</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Admission -->
  <div class="container-fluid admission">

    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>Admission</h1>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <center>An extraordinary freedom of opportunity—to explore, to</center>
        <center>collaborate and to challenge yourself</center>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12">
        <img src="https://www-media.stanford.edu/wp-content/uploads/2020/02/20110042/Admissions-Feb2020-Lg-2048x981.jpg"
          class="admission-image">
      </div>
    </div>

    <div class="row admission-text justify-content-center">

      <div class="col-6">
        <div class="title">Explore the possibilities of a Stanford education as you map out your college journey.</div>
        <p class="text">We look for distinctive students who exhibit an abundance of energy and curiosity in their
          classes, activities, projects, research and lives.</p>
      </div>

      <div class="col-6">
        <div class="title">Stanford meets the full financial need of every admitted undergrad who qualifies for
          assistance.</div>
        <p class="text">Nearly 70% of undergrads receive financial aid. Generally, tuition is covered for families with
          incomes below $125,000.</p>
      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-10 col-sm-9 col-md-7 col-lg-5 col-xl-5">
        <div class="more-news-button">
          <p class="more-news-text">More About Academics</p>
        </div>
      </div>

    </div>

  </div>

  <!-- About Stanford -->
  <div class="container-fluid about">

    <div class="row">
      <div class="col">
        <center class="main-title">
          <h1>About Stanford</h1>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <center>A place for learning, discovery, innovation, expression and</center>
        <center>discourse</center>
      </div>
    </div>

    <div class="row justify-content-around stats">
      <div class="col-2">
        <center class="text">Opened in</center>
        <center class="number">1891</center>
      </div>

      <div class="col-2">
        <center class="text">Opened in</center>
        <center class="number">1891</center>
      </div>

      <div class="col-2">
        <center class="text">Opened in</center>
        <center class="number">1891</center>
      </div>
    </div>

    <div style="margin-top: 20px;" class="row justify-content-center">
      <div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4">
        <div class="more-news-button">
          <p class="more-news-text">More About Stanford</p>
        </div>
      </div>
    </div>

  </div>
@endsection