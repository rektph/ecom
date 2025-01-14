<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TOP2BOTTOMHOMES</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand"> <img class="img-fluid" img src="assets/img/portfolio/LOGO.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Bookings</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>*
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                        @auth
                            <li class="nav-item"><a class="nav-link" href="#">{{ auth()->user()->name }}'s Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form action="{{ url(route('logout')); }}" method="post" id="logout-form"> @csrf </form>
                        @else
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" href="#loginModal">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="padding-top: 5.8rem;">
                <img class="img-fluid" src="assets/img/portfolio/sample.png" alt="..." />
                <br> <br> <br>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                    <img class="img-fluid" src="assets/img/portfolio/LOGO.png" alt="..." />
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">TOP 2 BOTTOM HOMES is a one stop shop for your housing needs,from house construction to garden landscaping. Our partners are recognized businesses to provide high quality results for you!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        @auth
            @if(auth()->user()->isAdmin())
            <section class="page-section" id="services">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Admin Tools</h2>
                        <h3 class="section-subheading text-muted">Have a good day!</h3>
                    </div>
                    @auth    
                        @if(auth()->user()->isAdmin() && $errors->count() > 0)
                        <div class="row">
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                    @endauth
                    <div class="row">
                        @include('admin.admin')
                    </div>
                </div>
            </section>
            @endif
        @endauth
        <!-- About-->
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">YOU ASK, TOP 2 BOTTOM HOMES PROVIDE</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        
                            <img class="img-fluid" src="assets/img/portfolio/hammer.png" alt="..." />
                        
                        <h4 class="my-3">HOUSE CONSTRUCTION</h4>
                        <p class="text-muted">Top 2 Bottom Homes offers House Construction needs to help you start your dream house, our partners are well known construction firms. </p>
                    </div>
                    <div class="col-md-4">
                            <img class="img-fluid" src="assets/img/portfolio/paint-bucket.png" alt="..." />
                        <h4 class="my-3">HOUSE DESIGN</h4>
                        <p class="text-muted">Top 2 Bottom Homes offers House Designing services to light up and upgrade your homes into your dream house.</p>
                    </div>
                    <div class="col-md-4">

                            <img class="img-fluid" src="assets/img/portfolio/tools.png" alt="..." />
                      
                        <h4 class="my-3">HOUSE REPAIRS</h4>
                        <p class="text-muted">TOP 2 BOTTOM HOMES offer House Repair services from our trusted partners to provide quality and sure repairing and fixing services for any problems in your house.<p>
                    </div>
                </div>
            </div>
        </section>
    
                  <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">BOOK A SERVICE</h2>
                    <h3 class="section-subheading text-muted">WHAT CAN WE DO FOR YOU TODAY?</h3>
                </div>
                @auth    
                    @if(!auth()->user()->isAdmin() && $errors->count() > 0)
                    <div class="row">
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                @endauth
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/house construction.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">HOUSE CONSTRUCTION</div>
                            </div>
                        </div>
                    </div>

                     <!-- Portfolio Modals-->
        <!-- HOUSE CONSTRUCTION modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">HOUSE CONSTRUCTION SERVICES</h2>
                                    
                                    <p class="item-intro text-muted">Choose your business and book now.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HC-1.png" alt="..." /> <br>
                                    <p>Ace & Hammer Builders - Ace & Hammer Builders  is a construction company that delivers high quality, reliable construction services for governmental establishments. In addition, we have broad expertise with commercial clients.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HC-2.png" alt="..." /> <br>
                                    <p> Center Circle Design-Build - Center Circle Design-Build is an army of construction professionals, tradesmen and support staff. Our team has expertise in residential, commercial and industrial construction and the ability to deliver any scale of construction project.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button" id="houseConstructionModalButton">
                                        <i class="fas fa-times me-1"></i>
                                        BOOK
                                    </button> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/house repair.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">HOUSE REPAIR</div>
                                
                            </div>
                        </div>
                    </div>
 <!-- HOUSE REPAIR modal popup-->
 <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">HOUSE REPAIR SERVICES</h2>
                                    
                                    <p class="item-intro text-muted">Choose your business and book now.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HR-1.png" alt="..." /> <br>
                                    <p>Big Sky Home Repair - We are a licensed home repair contractor, fully insured, and experienced in renovations, making us the perfect choice to work on your home. </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HR-2.png" alt="..." /> <br>
                                    <p>Just Right Home Repairs - Just Right Home Repairs’ mission is to provide knowledgeable, convenient, and reasonably-priced handyman service.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="houseRepairModalButton" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        BOOK
                                    </button> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/house paint.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">HOUSE REPAINTING</div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- HOUSE REPAIR modal popup-->
 <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">HOUSE REPAINTING SERVICES</h2>
                                    
                                    <p class="item-intro text-muted">Choose your business and book now.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HRP-1.png" alt="..." /> <br>
                                    <p>Comfort in Color - Comfort in Color will provide top-quality interior and exterior residential and commercial painting services. The company will seek to provide these services in the most timely manner and with an ongoing comprehensive quality control program to provide 100% customer satisfaction.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HRP-2.png" alt="..." /> <br>
                                    <p>Brush Up My Home - Brush Up My Home offers a full line of services primarily focused on interior and exterior residential and commercial painting. The firm also provides such services as drywall plastering, acoustical ceilings, pressure washing, and others.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="houseRepaintingModalButton" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        BOOK
                                    </button> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/house move.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">HOUSE MOVING SERVICES</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">

  <!-- HOUSE MOVING modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">HOUSE MOVING SERVICES</h2>
                                    
                                    <p class="item-intro text-muted">Choose your business and book now.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HM-1.png" alt="..." /> <br>
                                    <p>Life-Home Movers - Life-Home movers assure that they do not just move the contents of your previous house. All appliances and decorations are properly handled ensuring that nothing will be left and damaged in order to keep the memories and home vibes stay until your next home.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HM-2.png" alt="..." /> <br>
                                    <p>Two men and a Truck - Two men and a Truck has well experienced personnels and various vehicle sizes that will fit all the content of your house if you wish to move to another location. They provide service from picking up the items to installation to the new home. </p>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="houseMovingServicesModalButton" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        BOOK
                                    </button> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/house plumb.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">HOUSE PLUMBING SERVICES</div>
                            
                            </div>
                        </div>
                    </div>

                  <!-- HOUSE PLUMBING modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">HOUSE PLUMBING SERVICES</h2>
                                    
                                    <p class="item-intro text-muted">Choose your business and book now.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HP-1.png" alt="..." /> <br>
                                    <p>Puso Septic and Plumbing - Puso Septic and plumbing has well-trained plumbers that can fix any plumbing concerns. 
                                    They also have the materials that can extract the contents of the septic tank whenever there’s already a need. </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/HP-2.png" alt="..." /> <br>
                                    <p>Hardcore Plumber-Hardcore plumbers ensures that all the leakage in the house are stopped. They also provide plumbing plans and estimation for those who plan to build their new home. </p>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="housePlumbingServicesModalButton" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        BOOK
                                    </button> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/garden landscape.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">GARDEN LANDSCAPING</div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- GARDEN LANDSCAPING modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">GARDEN LANDSCAPING</h2>
                                    
                                    <p class="item-intro text-muted">Choose your business and book now.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/GL-1.png" alt="..." /> <br>
                                    <p>Lawn Fairy - Lawn fairy makes a boring, plain, and blank garden into a magical place. Whatever garden size it may be, lawn fairy artists and gardeners can definitely turn it into an eye catcher and stress reliever place in your house. </p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/GL-2.png" alt="..." /> <br>
                                    <p>Epic Gardening-Epic Gardening specializes in landscape architecture. They provide well-planned designs that could turn vacant lawn space to the favorite anytime ‘meryenda’ location in your house.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" id="gardenLandscapingModalButton" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        BOOK
                                    </button> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                   <br>
                    <img class="img-thumbnail" src="assets/img/portfolio/GROUP.jpg" alt="..." /> <br>
                    <br> <br>
                    <h3 class="section-subheading text-muted">RDLJ CO. is a startup company formed by a team of people who wants to help out small home services.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/portfolio/lau.png" alt="..." />
                            <h4>Laureen De Guzman</h4>                         
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/portfolio/rudolf.jpg" alt="..." />
                            <h4>Rudolf Edmund</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/portfolio/jeanina.jpg" alt="..." />
                            <h4>Jeanina Nepomuceno</h4>  
                      </div>                  
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle"src="assets/img/portfolio/daphny.jpg" alt="..." />
                            <h4>Daphne Clarice Tonog</h4>
                      </div>
                    </div>
                </div>
        </section>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Do you want to be our partner? Fill up this form!</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; RLDJ CO.TOP 2 BOTTOM HOMES</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="{{ url(route('login')) }}" method="post">
                                        @if(Session::get('errors'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('errors')->first() }}
                                            </div>
                                        @endif
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>                                        
                                        <button class="btn btn-primary text-uppercase" type="submit">
                                            Login
                                        </button> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- House Construction Modal --}}
        <div class="portfolio-modal modal fade" id="houseConstructionModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h1>Booking House Construction</h1>
                                    @auth
                                        <form action="/users/booking/add" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_id">Service Type</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach (\App\Models\Service::where('name', 'House Construction')->get() as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="datetime-local" name="date" class="form-control">
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success">Add Booking</button>
                                            </div>
                                        </form>
                                    @else
                                        <h1>Please Login to Book</h1>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- House Repair Modal --}}
        <div class="portfolio-modal modal fade" id="houseRepairModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h1>Booking House Repair</h1>
                                    @auth
                                        <form action="/users/booking/add" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_id">Service Type</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach (\App\Models\Service::where('name', 'House Repair')->get() as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="datetime-local" name="date" class="form-control">
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success">Add Booking</button>
                                            </div>
                                        </form>
                                    @else
                                        <h1>Please Login to Book</h1>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- House Repainting Modal --}}
        <div class="portfolio-modal modal fade" id="houseRepaintingModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h1>Booking House Repainting</h1>
                                    @auth
                                        <form action="/users/booking/add" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_id">Service Type</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach (\App\Models\Service::where('name', 'House Repainting')->get() as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="datetime-local" name="date" class="form-control">
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success">Add Booking</button>
                                            </div>
                                        </form>
                                    @else
                                        <h1>Please Login to Book</h1>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- House Moving Services Modal --}}
        <div class="portfolio-modal modal fade" id="houseMovingServicesModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h1>Booking House Moving Services</h1>
                                    @auth
                                        <form action="/users/booking/add" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_id">Service Type</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach (\App\Models\Service::where('name', 'House Moving Services')->get() as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="datetime-local" name="date" class="form-control">
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success">Add Booking</button>
                                            </div>
                                        </form>
                                    @else
                                        <h1>Please Login to Book</h1>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- House Plumbing Services Modal --}}
        <div class="portfolio-modal modal fade" id="housePlumbingServicesModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h1>Booking House Plumbing Services</h1>
                                    @auth
                                        <form action="/users/booking/add" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_id">Service Type</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach (\App\Models\Service::where('name', 'House Plumbing Services')->get() as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="datetime-local" name="date" class="form-control">
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success">Add Booking</button>
                                            </div>
                                        </form>
                                    @else
                                        <h1>Please Login to Book</h1>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- Garden Landscaping Modal --}}
        <div class="portfolio-modal modal fade" id="gardenLandscapingModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h1>Booking Garden Landscaping</h1>
                                    @auth
                                        <form action="/users/booking/add" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="service_id">Service Type</label>
                                                <select name="service_id" class="form-control">
                                                    @foreach (\App\Models\Service::where('name', 'Garden Landscaping')->get() as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }} - {{ $service->user->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" name="location" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="date">Date</label>
                                                <input type="datetime-local" name="date" class="form-control">
                                            </div>
                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-success">Add Booking</button>
                                            </div>
                                        </form>
                                    @else
                                        <h1>Please Login to Book</h1>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>Garden Landscaping
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#houseConstructionModalButton").on('click', function() {
                $('#portfolioModal1').modal('hide');
                $('#houseConstructionModal').modal('show');
            });

            $("#houseRepairModalButton").on('click', function() {
                $('#portfolioModal2').modal('hide');
                $('#houseRepairModal').modal('show');
            });

            $("#houseRepaintingModalButton").on('click', function() {
                $('#portfolioModal3').modal('hide');
                $('#houseRepaintingModal').modal('show');
            });

            $("#houseMovingServicesModalButton").on('click', function() {
                $('#portfolioModal4').modal('hide');
                $('#houseMovingServicesModal').modal('show');
            });

            $("#housePlumbingServicesModalButton").on('click', function() {
                $('#portfolioModal5').modal('hide');
                $('#housePlumbingServicesModal').modal('show');
            });

            $("#gardenLandscapingModalButton").on('click', function() {
                $('#portfolioModal6').modal('hide');
                $('#gardenLandscapingModal').modal('show');
            });
        </script>

        @auth
            @if(auth()->user()->isAdmin())
        <script>
            $(document).ready(function(){
                $(".editBookings").on('click', function() {
                    $("#adminEditBookingModal").data('value', $(this).data('id'));
                    $("#adminEditBookingModal").modal('show');
                });

                $("#adminEditBookingModal").on('show.bs.modal', function() {
                    $('#adminEditBookingModalSpinner').removeClass('d-none');
                    $('#adminEditBookingModalBody').addClass('d-none');
                    let booking_id = $(this).data('value');
                    
                    $.ajax({
                        type: 'GET',
                        url: '/admin/booking',
                        data: {
                            booking_id: booking_id
                        },
                        success: function (response) {
                            $("#adminEditBookingModalBody h2").html(response.booking.company);
                            $("#adminEditBookingModalBody span#service_type").html(response.booking.service_type);
                            $("#adminEditBookingModalBody span#booking_user").html(response.booking.name);
                            $("#adminEditBookingModalBody span#current_status").html(response.booking.current_status);
                            $("#adminEditBookingModalBody span#date").html(response.booking.date);

                            $("#adminEditBookingModalSpinner").addClass('d-none');
                            $("#adminEditBookingModalBody").removeClass('d-none');
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });

                $("#updateStatus-check_avail").on('click', function() {
                    let booking_id = $("#adminEditBookingModal").data('value');

                    $.ajax({
                        type: 'POST',
                        url: '/admin/booking/update_status',
                        data: {
                            booking_id: booking_id,
                            status: 0
                        },
                        success: function (response) {
                            window.location = window.location
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });

                $("#updateStatus-approve").on('click', function() {
                    let booking_id = $("#adminEditBookingModal").data('value');

                    $.ajax({
                        type: 'POST',
                        url: '/admin/booking/update_status',
                        data: {
                            booking_id: booking_id,
                            status: 1
                        },
                        success: function (response) {
                            window.location = window.location
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });

                $("#updateStatus-paid").on('click', function() {
                    let booking_id = $("#adminEditBookingModal").data('value');

                    $.ajax({
                        type: 'POST',
                        url: '/admin/booking/update_status',
                        data: {
                            booking_id: booking_id,
                            status: 2
                        },
                        success: function (response) {
                            window.location = window.location
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });

                $("#updateStatus-done").on('click', function() {
                    let booking_id = $("#adminEditBookingModal").data('value');

                    $.ajax({
                        type: 'POST',
                        url: '/admin/booking/update_status',
                        data: {
                            booking_id: booking_id,
                            status: 3
                        },
                        success: function (response) {
                            window.location = window.location
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });

                $("#updateStatus-deny").on('click', function() {
                    let booking_id = $("#adminEditBookingModal").data('value');

                    $.ajax({
                        type: 'POST',
                        url: '/admin/booking/update_status',
                        data: {
                            booking_id: booking_id,
                            status: 4
                        },
                        success: function (response) {
                            window.location = window.location
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });
                
                $(".editServices").on('click', function() {
                    $("#adminEditServiceModal").data('value', $(this).data('id'));
                    $("#adminEditServiceModal").modal('show');
                });

                $("#adminEditServiceModal").on('show.bs.modal', function() {
                    $('#adminEditServiceModalSpinner').removeClass('d-none');
                    $('#adminEditServiceModalBody').addClass('d-none');
                    let service_id = $(this).data('value');
                    
                    $.ajax({
                        type: 'GET',
                        url: '/admin/service',
                        data: {
                            service_id: service_id
                        },
                        success: function (response) {
                            $("#idEditService").val(response.service.id);
                            $("#nameEditService").val(response.service.name);
                            $("#locationEditService").val(response.service.location);
                            $("#descriptionEditService").val(response.service.description);
                            $("#user_idEditService").val(response.service.user_id);

                            $("#adminEditServiceModalSpinner").addClass('d-none');
                            $("#adminEditServiceModalBody").removeClass('d-none');
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });
                
                $(".editUser").on('click', function() {
                    $("#adminEditUserModal").data('value', $(this).data('id'));
                    $("#adminEditUserModal").modal('show');
                });

                $("#adminEditUserModal").on('show.bs.modal', function() {
                    $('#adminEditUserModalSpinner').removeClass('d-none');
                    $('#adminEditUserModalBody').addClass('d-none');
                    let user_id = $(this).data('value');
                    
                    $.ajax({
                        type: 'GET',
                        url: '/admin/user',
                        data: {
                            user_id: user_id
                        },
                        success: function (response) {
                            $("#idEditUser").val(response.user.id);
                            $("#nameEditUser").val(response.user.name);
                            $("#emailEditUser").val(response.user.email);
                            $("#statusEditUser").val(response.user.status);

                            $("#adminEditUserModalSpinner").addClass('d-none');
                            $("#adminEditUserModalBody").removeClass('d-none');
                        },
                        error: function (xhr, status, error) {
                            alert(error);
                        },
                    });
                });
            });
        </script>
            @endif
        @endauth
    </body>
</html>