<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stressing</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>


  <style>
    .background {

        background-color: #044556;
    }
    .backgroundtwo {
        background-color: white;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light mybg">
        <div class="container">
         
          <a class="navbar-brand text-light" href="#">USTP CONeXT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
           <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a class="nav-link text-light" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#administrators">Administrator</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   
      <nav class="navbar navbar-expand-lg navbar-dark mybg2">
    <div class="container d-flex justify-content-between align-items-center">
      
        <div class="d-grid gap-2 d-md-flex align-items-center">
            <a class="navbar-register text-dark fs-5" href="/form" style= "text-decoration :none;">Register to be a Legit TRAILBLAZER</a>
           <a href="/form">
            <button id="joinNowButton" class="btn btn-primary btn-sm" type="button">JOIN NOW!</button>
            </a>

            

        </div>

      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<section id="administrators" class="bg-primary pt-5 pb-5">
      <div class="container mt-5">
        <div class="row pb-5">
          <div class="col-sm-12 text-center text-light">
            <h2>The Administrators</h2>
            <p>
              Our administrators are experts in the field of business and
              technologies with 5 years of experience
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/tontawan.jpg"
                  img src="{{ asset('images/tontawan.jpg') }}" alt="1"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Tontawan Tantivejakul</h5>
                <p class="card-text">Tontawan Tantivejakul also known as Tu Tontawan is a Thai actress and model. She first appeared in Ink Waruntorn Paonil's music video alongside Billkin Putthipong Assaratanakul. </p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/Bright(1).jpg"
                  img src="{{ asset('images/Bright(1).jpg') }}" alt="2"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Vachirawit Chivaaree</h5>
                <p class="card-text">Vachirawit Chivaaree, known professionally as Bright Vachirawit or Bright, is a Thai actor, singer and model. He is popular for his roles in F4 Thailand: Boys Over Flowers, 2gether: The Series, Astrophile, I Sea U, for variety show Toe Laew and for mini album Adolescent.</p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/ryu.jpg"
                  img src="{{ asset('images/ryu.jpg') }}" alt="3"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Vachirawich Aranthanawong</h5>
                <p class="card-text">Vachirawich Watthanaphakdeephaisan, nicknamed Ryu, is a Thai singer, actor and table tennis player. He was a member of the boy group 9x9 (Nine by Nine). Nowadays, Ryu is an artist under Channel 3.</p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/metawin.jpg"
                  img src="{{ asset('images/metawin.jpg') }}" alt="4"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Metawin Opas-iamkajorn</h5>
                <p class="card-text">Metawin Opas-iamkajorn, widely known as Win is a Thai actor of Chinese descent. He gained fame in 2020 with his acting debut and has since received recognition in both the entertainment and fashion industries.</p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>