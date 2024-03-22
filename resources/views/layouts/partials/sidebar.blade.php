<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{ url('/') }}" class="brand-link">
    <span class="brand-text font-weight-light">CRM</span>
  </a>

  <div class="sidebar">
    <!-- Enlaces a diferentes secciones del CRM -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('admin.users.index')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Usuarios</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/action-areas') }}" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>Áreas de Acción</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/activities') }}" class="nav-link">
            <i class="nav-icon fas fa-tasks"></i>
            <p>Actividades</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/validations') }}" class="nav-link">
            <i class="nav-icon fas fa-check-square"></i>
            <p>Validaciones</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <p>
              <i class="fas fa-fw fa-sign-out-alt nav-icon">

              </i>
              <p>Cerrar sesión</p>
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>