<div class="nav-header">
  <a href="{{ route('admin.home') }}" class="brand-logo" style="padding-top:10px">
      
      <img class="" src="{{ asset('frontend/logo.png')}}" width="100"  style="margin: 65px;padding:15px" alt="">
      
  </a>

</div>


<!--**********************************
          Header start
        ***********************************--
        <!--**********************************
          Header end 
        ***********************************-->		
        <div class="header">
          <div class="header-content">
              <nav class="navbar navbar-expand">
                  <div class="collapse navbar-collapse justify-content-between">
                      <div class="header-left">
                          <div class="dashboard_bar">
                              Dashboard
                          </div>
                      </div>

                      <ul class="navbar-nav header-right">

                          <li class="nav-item header-profile">
                            <a href="{{ url('/en/logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket" style="width: 18px; height: 18px;"></i> 
                                <span class="ml-2">Logout </span>
                                </a>

                              <form id="logout-form" action="{{ url('/en/logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </li>
            
            
                          
                      </ul>
                  </div>
              </nav>
          </div>
      </div>