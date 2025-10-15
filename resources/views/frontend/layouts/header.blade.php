
         <header id="pq-header" class="pq-header-style-3 pq-has-sticky ">
          <div class="pq-top-header">
             <div class="container">
                <div class="row flex-row-reverse">
                   <div class="col-md-6 text-right">
                      <div class="pq-header-social text-right">
                         <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-md-6">
                      <div class="pq-header-contact ">
                         <ul>
                            <li>
                               <a href="tel:+1800001658"><i class="fas fa-phone"></i>
                                  <span> +1800-001-658</span>
                               </a>
                            </li>
                            <li>
                               <a href="mailto:info@peacefulthemes.com"><i
                                     class="fas fa-envelope"></i><span>info@peacefulthemes.com</span></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="pq-bottom-header">
             <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                      <nav class="navbar navbar-expand-lg navbar-light">
                         <a class="navbar-brand" href="index.html">
                            <img class="img-fluid logo" src="{{ asset('medicatetheme/images/HCAEn.png')}}" alt="medicate" >
                         </a>
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="pq-menu-contain">
                               <div class="pq-menu-contain">
                                  <ul id="pq-main-menu" class="navbar-nav ml-auto">
                                     <li class="menu-item current-menu-item">
                                        <a href="{{ route('welcome') }}">Home</a>
                                        
                                     </li>
                                     <li class="menu-item ">
                                        <a href="{{ route('about-us') }}">About Us</a>
                                        
                                     </li>
                                     <li class="menu-item ">
                                        <a href="{{ route('protocols' , 0) }}">Protocols</a>
                                        
                                     </li>
                                     <li class="menu-item ">
                                        <a href="{{ route('newsletter') }}">News letters</a>
                                        
                                     </li>

                                     <li class="menu-item ">
                                      <a href="{{ route('contact-us') }}">Contact us</a>
                                      
                                     </li>

                                     <li class="menu-item ">
                                      <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                                     </li>
                                     @auth
                                     
                                      <li class="menu-item ">
                                        <a href="#">{{ auth()->user()->name }}</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                        <ul class="sub-menu">
                                          @if(auth()->user()->role == 'admin')
                                          <li class="menu-item-has-children ">
                                             <a href="{{ route('admin.home') }}">Dashboard</a>
                                             
                                          </li>
                                          @endif


                                          {{-- <li class="menu-item-has-children ">
                                              <a href="#">Profile</a>
                                              
                                          </li>
                                          <li class="menu-item-has-children">
                                              <a href="#">Bookmark</a>
                                              
                                          </li>
                                          <li class="menu-item ">
                                              <a href="">History</a>
                                          </li> --}}

                                          <li>
                                             <a href="{{ url('/ar/logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <span class="ml-2">Logout </span>
                                                </a>

                                                <form id="logout-form" action="{{ url('/ar/logout') }}" method="POST" style="display: none;">
                                                   @csrf
                                                </form>
                                          </li>
                                        </ul>
                                      </li>
                                     @else 
                                      <li class="menu-item ">
                                          <a href="{{ route('login') }}">Login</a>
                                          
                                      </li>
                                     @endif
                                     
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="pq-header-info-box">
                            <div class="info-icon">
                               <div class="icon">
                                  <i class="ti-headphone-alt" aria-hidden="true"></i>
                               </div>
                            </div>
                            <div class="info-icon-content">
                               <h4><a href="tel:+1800-001-658"> +1800-001-658</a></h4>
                               <p>Mon-Fri: 6AM - 10PM</p>
                            </div>
                         </div>
                         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                         </button>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </header>
      