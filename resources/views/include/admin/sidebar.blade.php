<aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{ asset('assets/image/header_logo.png')}}" width="90" alt="digirusholution">
            </div>
            <div>
              <h4 class="logo-text">Digirush<sup>US</sup></h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <ul class="metismenu" id="menu">
            <li>
              {{-- <a href="{{route('admindashboard')}}" class="has-arrow"> --}}
                <a href="{{route('admindashboard')}}">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
           
            <!-- <li>
              <a href="">
                <div class="parent-icon"><i class="bi bi-person-check"></i>
                </div>
                <div class="menu-title">Contact Forms</div>
              </a>
            </li> -->
            <!-- <li>
              <a href="">
                <div class="parent-icon"><i class="bi bi-file-earmark-break"></i>
                </div>
                <div class="menu-title">Home Forms
                </div>
              </a>
            </li> -->
            
            <!-- <li>
              <a href="">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Our Project</div>
              </a>
            </li> -->


            <li>
              <a href="{{route('blog-category')}}">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Blog Category</div>
              </a>
            </li>
            <li>
              <a href="{{route('admin.blog')}}">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Blogs</div>
              </a>
            </li>
            <li>
            <a href="{{route('metaPage')}}">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Settings</div>
              </a>
            </li>

            
          </ul>
       </aside>