
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/css/icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.0.3/src/css/icons.min.css">
<!-- Phosphor Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.0.3/src/css/icons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



<aside class="sidebar">
  <!-- sidebar close btn -->
   <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i class="ph ph-x"></i></button>
  <!-- sidebar close btn -->
  
  <a href="{{ url('dashboard') }}" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-35 px z-1 pb-10">
      <img src="{{ asset('assets/img/NFest-logo.png')}}" alt="Logo">
  </a>

  <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
      <div class="p-20 pt-10">
          <ul class="sidebar-menu">
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-squares-four"></i></span>
                      <span class="text">Dashboard</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                <a href="{{ url('dashboard/events') }}" class="sidebar-menu__link">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                    </svg></span>
                    <span class="text">Events</span>
                </a>
              </li>
              
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard/users') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-users-three"></i></span>
                      <span class="text">akun</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                <form action="{{ url('logout') }}" method="POST" class="sidebar-menu__link" 
                      style="display: flex; align-items: center; gap: 10px; color: #dc3545; background-color: transparent; border: none; width: 100%; text-align: start; padding: 8px 12px; border-radius: 4px; transition: color 0.3s, background-color 0.3s; cursor: pointer;" 
                      onsubmit="return confirmLogout();">
                    @csrf
                    <button type="submit" style="display: flex; align-items: center; gap: 10px; color: inherit; background-color: inherit; border: none; width: 100%; text-align: start; padding: 0;">
                        <span class="icon"><i class="ph ph-sign-out"></i></span>
                        <span class="text">Logout</span>
                    </button>
                </form>
            </li>
                         
                  <!-- Submenu End --> 
          </ul>
      </div>
  </div>

</aside>

<script>
    function confirmLogout() {
        return confirm("Apakah Anda yakin ingin keluar?");
    }
</script>