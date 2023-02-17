<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G'Five Rentals</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="{{ asset('css/carmodel.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('#') }}">
          <img src="{{ asset('/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100"
            class="d-inline-block align-text-top" href="{{ url('#') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="file:///F:/usb/Kodego/coding/WD30-VOLTES-5/GFive/carmodel.html">Vehicles</a>
              </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="file:///F:/usb/Kodego/coding/WD30-VOLTES-5/carmodels/carmodel.html" role="button" data-bs-toggle="dropdown" 
                aria-expanded="false">
                Vehicles
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="file:///F:/usb/Kodego/coding/WD30-VOLTES-5/carmodels/carmodel.html">Hatchback</a></li>
                <li><a class="dropdown-item" href="#">Sedan</a></li>
                <li><a class="dropdown-item" href="#">SUV</a></li>
                <li><a class="dropdown-item" href="#">Van</a></li>
                <li><a class="dropdown-item" href="#">Pick-up</a></li>
                <li><a class="dropdown-item" href="#">Motorcycle</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Kariton</a></li>
              </ul>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="file:///F:/usb/Kodego/coding/WD30-VOLTES-5/GFive/termsandconditions.html">Terms and Conditions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="file:///F:/usb/Kodego/coding/WD30-VOLTES-5/GFive/underconstruction.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="file:///F:/usb/Kodego/coding/WD30-VOLTES-5/GFive/contactus.html">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex mx-auto">
            <button type="button" class="btn1 btn-outline-warning btn-lg" data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Login
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Members can access discounts,
                      points and special features</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <button type="button" class="btn1 btn-dark w-100">Sign in</button>
                    <h5><a href="#" class="text-decoration-none">Create a free account</a></h5>
                    <p>or continue with</p>
                    <h5><a href="#" class="text-decoration-none">List of favorites</a></h5>
                    <h5><a href="#" class="text-decoration-none">Loyalty programs</a></h5>
                  </div>
                  <div class="modal-footer">
                    <h5><a href="#" class="text-decoration-none">Feedback</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </div>
<!-- TOP -->
<div class="banner-hero">
    <div class="banner-content-cont">
    <h1>Available Cars For You</h1>
    </div>
    </div>
    <!-- TOP -->
    <!-- 1 -->
    <div class="content-body-cont">
    <div class="accordion" id="accordionExample">
      <!-- 1 -->
    
    <!-- 2 -->
    <div class="navigation">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5>KIA</h5>
          </button>
        </h2>
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5>TOYOTA</h5>
          </button>
        </h2>
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5>HONDA</h5>
          </button>
        </h2>
    </div>
    <!-- 2 -->
    
      <!-- KIA -->
      <div class="accordion-item">
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="owl-carousel owl-theme">
                            <!--  -->
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./Kiasred.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">KIA SOLUTO 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SEDAN</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./KIAGOLDST4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title-K1">KIA STINGER 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SEDAN</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./KiawhiteX.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">KIA XCEED 2020</h5>
                      <p class="card-text">
                        <li>TYPE: HATCHBACK</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./kiagreyrio.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">KIA RIO 2022</h5>
                      <p class="card-text">
                        <li>TYPE: HATCHBACK</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./kiadarkcarnival.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CARNIVAL 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./kiagreyS.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">STONIC 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./kiasportageblue.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">SPORTAGE 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./kiawhitesedona.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">SEDONA 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: KIA</li>
                        <li>CAPACITY: 7SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                            <!--  -->
            </div>
          </div>
        </div>
      </div>
      <!-- KIA -->

      <!-- TOYOTA -->
      <div class="accordion-item">
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="owl-carousel owl-theme">
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotagrswhite.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">VIOS GRS 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SEDAN</li>
                        <li>BRAND: VIOS</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./camrywhite.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CAMRY 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SEDAN</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyota-yaris-blue.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">YARIS 2021</h5>
                      <p class="card-text">
                        <li>TYPE: HATCHBACK</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotawigoyellow.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">WIGO 2022</h5>
                      <p class="card-text">
                        <li>TYPE: HATCHBACK</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotafortunerblack.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">FORTUNER GRS 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyota-veloz-white.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">VELOZ 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyota-avanza-black.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">AVANZA 2O22</h5>
                      <p class="card-text">
                        <li>TYPE: MPV</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotainnovadviolet.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">INNOVA 2022</h5>
                      <p class="card-text">
                        <li>TYPE: MPV</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5></p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotahiacepanelwhite.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">LITE ACE 2022</h5>
                      <p class="card-text">
                      <li>TYPE: VAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 2 SEATERS</li>
                      <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotahiacegrey.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">SUPER GRANDIA 2022</h5>
                      <p class="card-text">
                      <li>TYPE: VAN</li>
                      <li>BRAND: TOYOTA</li>
                      <li>CAPACITY: 10 SEATERS</li>
                      <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./toyotahiluxblue.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HILUX 2022</h5>
                      <p class="card-text">
                        <li>TYPE: PICK-UP</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item" ><div class="card" style="width: 18rem;">
                    <img src="./toyotahiluxgrsgrey.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HILUX GRS 2022</h5>
                      <p class="card-text">
                        <li>TYPE: PICK-UP</li>
                        <li>BRAND: TOYOTA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
              </div></div>
            </div>
          </div>
        </div>
      </div>
      <!-- TOYOTA -->
      <!-- HONDA -->
      <div class="accordion-item">
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" data-aos="fade-down">
          <div class="accordion-body">
            <div class="owl-carousel owl-theme">
                

                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./hondacivicryellow.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CIVIC TYPE R 2023</h5>
                      <p class="card-text">
                          <li>TYPE: SEDAN</li>
                          <li>BRAND: HONDA</li>
                          <li>CAPACITY: 5 SEATERS</li>
                          <h5>Price</h5>
                      </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./hondaaccorddgreen.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ACCORD HYBRID 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SEDAN</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./hondacitygrey.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CITY RS 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SEDAN</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./Honda-civic hatchback-red.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CIVIC HATCHBACK 2023</h5>
                      <p class="card-text">
                        <li>TYPE: HATCHBACK</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 5 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./hondabrvbrown.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">BR-V 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./hondahrvgreen.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HR-V 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./honda-crv-grey.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CR-V 2023</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
                <div class="item"><div class="card" style="width: 18rem;">
                    <img src="./hondacrvhybridred2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">CR-V HYBRID 2022</h5>
                      <p class="card-text">
                        <li>TYPE: SUV</li>
                        <li>BRAND: HONDA</li>
                        <li>CAPACITY: 7 SEATERS</li>
                        <h5>Price</h5>
                    </p>
                      <a href="#" class="btn btn-primary">BOOK NOW</a>
                    </div>
                  </div></div>
            </div>
          </div>
        </div>
      </div>
      <!-- HONDA -->
    
    <!-- 1 -->
    </div>
    </div>
    <!-- 1 -->
 

    


<!--                                                                                                                           -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>$('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:5,
              nav:true,
              loop:false
          }
      }
  })</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>