<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bug"></i> Logo Upload <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/logo/add')}}">Add New</a></li>
          <li><a href="{{ url('/logo/logolist')}}">Logo List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bug"></i> All Pages <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/pages/add')}}">Add New</a></li>
          <li><a href="{{ url('/pages/pagelist')}}">Page List</a></li>
        </ul>
      </li>
      </li>
      <li><a><i class="fa fa-bug"></i> All Post <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <!-- <li><a href="{{url('/post/add')}}">Add New</a></li> -->
          <li><a href="{{ url('/post/postlist')}}">Post List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i>User <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/user/add')}}">Add User</a></li>
          <li><a href="{{ url('/user/userlist')}}">User List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i>Categories <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ url('/category/categoryList')}}">Category List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i>Services <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
      <li><a href="{{ url('/service/add')}}">Service List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-list"></i>Teams <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ url('/team/add')}}">Add Team Section</a></li>
          <li><a href="{{ url('/team/teamlist')}}">Team Section List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-list"></i>Testimonials <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ url('/testimonials/add')}}">Add Testimonial</a></li>
          <li><a href="{{ url('/testimonials/testimonialslist')}}">Testimonials  List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-user"></i>Portfolio<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ url('/Portfolio/add')}}">Add Portfolio</a></li>
          <li><a href="{{ url('/Portfolio/all')}}">Portfolio  List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-info-circle"></i>Contact<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
         
          <li><a href="{{ url('/Contact/contactlist')}}">Contact  List</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/layout/invoice')}}">Invoice</a></li>
          <li><a href="{{url('/layout/inbox')}}">Inbox</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/layout/table')}}">Table Dynamic</a></li>
        </ul>
      </li>
      
      <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/layout/fixsidebar')}}">Fixed Sidebar</a></li>
          <li><a href="fixed_footer.html">Fixed Footer</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          
          <li><a href="{{url('/layout/projects')}}">Projects</a></li>
          <li><a href="{{url('/layout/projectsdetails')}}">Project Detail</a></li>
          <li><a href="{{url('/layout/contacts')}}">Contacts</a></li>
          <li><a href="{{url('/layout/profile')}}">Profile</a></li>
        </ul>
      </li>
      
      
    </ul>
  </div>

</div>