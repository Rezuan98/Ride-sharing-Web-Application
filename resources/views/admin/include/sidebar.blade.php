<nav class="sidebar">
    <div class="sidebar-header">
      <a class="sidebar-brand text-white ms-0" href="{{route('admin.dashboard')}}"> <img style="width: 100px;" class="logo" src="{{asset('images/logo/hei40.png')}}" alt=""></a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
       <li class="nav-item nav-category">GoRide Controll</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Users</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.riders')}}" class="nav-link">Rider's</a>
              </li>
              <li class="nav-item">
                <a href="{{route('all.users')}}" class="nav-link">Passengers</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Admins</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">All Rides</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenities">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('pending.rides')}}" class="nav-link">Pending Ride's</a>
              </li>
              <li class="nav-item">
                <a href="{{route('posted.rides')}}" class="nav-link">Posted Ride's</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Completed Rides</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">All Bookings</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="property">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">All property</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/read.html" class="nav-link">Special property</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/compose.html" class="nav-link">Add property</a>
              </li>
            </ul>
          </div>
        </li>
        
       
        <li class="nav-item nav-category">Contact</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Messages</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">From Rider's</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">From User's</a>
              </li>
             
             
              
            </ul>
          </div>
        </li>
        
        
        
       
        
      
        
        <li class="nav-item nav-category">Work Schedules</li>
       
      </ul>
    </div>
  </nav>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  {{-- <nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{route('admin.dashboard')}}" class="sidebar-brand">
        Alpha<span>Land</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">ReasEstate</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Property Type</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.type')}}" class="nav-link">All Type</a>
              </li>
              <li class="nav-item">
                <a href="../../pages/email/read.html" class="nav-link">Add Another Type</a>
              </li>
              
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="../../pages/apps/chat.html" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Chat</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="../../pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">UI Kit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="../../pages/ui-components/accordion.html" class="nav-link">Accordion</a>
              </li>
              <li class="nav-item">
                <a href="../../pages/ui-components/alerts.html" class="nav-link">Alerts</a>
              </li>
             
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Advanced UI</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="../../pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
              </li>
              <li class="nav-item">
                <a href="../../pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
              </li>
              
            </ul>
          </div>
        </li>
        
        
         
        </li>
        
          
       
        
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Authentication</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="authPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="../../pages/auth/login.html" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="../../pages/auth/register.html" class="nav-link">Register</a>
              </li>
            </ul>
          </div>
        </li>
       
        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav> --}}