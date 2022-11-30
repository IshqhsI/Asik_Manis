 <!-- Sidebar -->
 <div class="bg-white" id="sidebar-wrapper">
     <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
             class="fas">ASIKMANIS</i></div>
     <div class="list-group list-group-flush my-3">
         <a href="/dashboard"
             class="list-group-item list-group-item-action bg-transparent second-text {{ $title === 'Dashboard' ? 'active' : '' }}"><i
                 class="fas fa-house me-2"></i>Home</a>
         <a href="/daftar"
             class="list-group-item list-group-item-action bg-transparent second-text {{ $title === 'Daftar' ? 'active' : '' }}"><i
                 class="fas fa-user me-2"></i>Daftar</a>
         @can('admin')
             <a href="/dashboard/admin"
                 class="list-group-item list-group-item-action bg-transparent second-text {{ $title === 'Dashboard Admin' ? 'active' : '' }}"><i
                     class="fas fa-user-secret me-2"></i>Admin</a>
         @endcan
         <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                 class="fas fa-power-off me-2"></i>Logout</a>
     </div>
 </div>
 <!-- /#sidebar-wrapper -->

 {{-- <div class="bg-white" id="sidebar-wrapper">
     <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
             class="me-2"></i>ASIKMANIS</div>
     <div class="list-group list-group-flush my-3">
         <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                 class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
         <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-project-diagram me-2"></i>Data Pendaftar</a>
         <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-chart-line me-2"> Edit Data Pendaftar</i></a>
         <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                 class="fas fa-power-off me-2"></i>Logout</a>
     </div> --}}
