<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-light navigation-wrap">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="fas fa-utensils logo pl-5"></i> CollegeBites</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active brown" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link brown" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link brown" href="#explore-food">Explore Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link brown" href="#testimonials">Reviews</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="home">
      <div class="container-fluid px-0 top-banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <h1>Meet, Eat & Enjoy the true taste </h1>
              <p> </p>
              <div class="mt-4">
                <a href="#explore-food"><button class="main-btn">order Now <i class="fas fa-shopping-basket ps-3"></i></button></a>
                <a href="#"><button class="white-btn ms-lg-4 mt-lg-0 mt-4">Login <i class="fas fa-angle-right ps-3"></i></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="about-section wrapper">
        <div class="container">
          <div class="row align-items center">
            <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
              <div class="card border-0 pt-5">
                <img src="images/img1.jpg" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-5 col-md-12 text-sec pt-lg-5">
              <h2>Discover a world of delicious flavors in a cozy and friendly atmosphere.</h2>
              <p>Explore the story of our cafe, our mission, and meet the fantastic team behind the scenes</p>
              <button class="main-btn mt-4">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
      <section id="explore-food">
        <div class="explore-food wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="text-content text-center">
                  <h2 class="pt-3 mt-5">Explore Our Foods</h2>
                </div>
              </div>
            </div>
            <div class="row pt-5">
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=Chinese">
                    <img src="images/chinese.jpg" class="img-fluid" alt="Chinese Food">
                    <h4 class="pt-2">Chinese</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=South%20Indian">
                    <img src="images/southindian.jpg" class="img-fluid" alt="south indian">
                    <h4 class="pt-2">south indian</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=Beverages">
                    <img src="images/beverages.jpg" class="img-fluid" alt="beverages">
                    <h4 class="pt-2">beverages</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=Ice%20cream">
                    <img src="images/icecream.jpg" class="img-fluid" alt="ice creams">
                    <h4 class="pt-2">ice Creams</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=Chips">
                    <img src="images/chips.jpg" class="img-fluid" alt="Chips">
                    <h4 class="pt-2">chips</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=chat-pati%20chaat">
                    <img src="images/chaat.jpg" class="img-fluid" alt="Chaat">
                    <h4 class="pt-2">Chaat</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=combo%20Meal">
                    <img src="images/paratha.jpg" class="img-fluid" alt="Paratha">
                    <h4 class="pt-2">Paratha</h4>
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-4 mb-3">
                <div class="text-center card">
                  <a href="menu.php?category=Biscuits">
                    <img src="images/biscuits.jpg" class="img-fluid" alt="Biscuits">
                    <h4 class="pt-2">Biscuits</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          

    <section id="testimonials">
      <div class="wrapper testimonial-section">
          <div class="container text-center">
              <div class="text-center pb-4">
                  <h2 style="color:white;" class="pt-3 mt-2">Testimonials</h2>
              </div>
              <div class="row">
                  <div class="col-sm-12 col-lg-10 offset-lg-1">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active center" data-bs-interval="3000">
                          <img src="images/student1.jpg" class="d-block profile img-fluid">
                          <p>"College Cafe never disappoints! The food is consistently tasty, and the menu has a good balance of healthy options and indulgent treats. The atmosphere is vibrant, and the staff is welcoming. A go-to place for a quick bite or a leisurely meal."</p>
                          <h3>Shankar Ganesh</h3>
                        </div>
                        <div class="carousel-item center" data-bs-interval="3000">
                          <img src="images/student2.jpg" class="d-block profile img-fluid" >
                          <p>"As a coffee enthusiast, I can't get enough of the amazing coffee served at College Cafe. The baristas really know their craft, and the quality is top-notch. The menu offers a great selection of pastries and snacks to complement your drink. It's my favorite spot on campus!"</p>
                          <h3>siddanth</h3>
                        </div>
                        <div class="carousel-item center" data-bs-interval="3000">
                          <img src="images/student3.jpg" class="d-block profile img-fluid" >
                          <p>"I absolutely love the cozy ambiance and delicious coffee at College Cafe! It's the perfect spot to relax, study, or catch up with friends. The menu has a great variety, and the staff is always friendly and attentive. Highly recommend!"
                          </p>
                          <h3>Gautam</h3>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>
          </div>
      </div>
  </section>

  <section id="feedback">
    <div class="feedback p-3">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center pt-3">
            <h3>Please Leave a Feedback</h3>
          </div>
          <div class="text-center text p-3">
            <textarea name="feedback" id="" cols="30" rows="5"></textarea>
          </div>
        </div>
      </div>
    </div>
  </section>

<div calss="d-block">
  <div style="display: inline-block;">Hello</div>
  <div  class="sample">
    <img src="images/biscuits.jpg">
  </div>
</div>

  <section id="footer">
    <div class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="footer-social pt-4 text-center">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="footer-copy">
              <div class="copy-right text-center pt-5">
                <p class="text-light">&copy; 2023.All rights reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      </body>
</html>
