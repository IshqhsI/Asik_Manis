 <!-- Sidebar -->
 <div class="bg-white" id="sidebar-wrapper">
     <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
             class="fas">ASIKMANIS</i></div>
     <div class="list-group list-group-flush my-3">
         <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                 class="fas fa-tachometer-alt me-2"></i>Home</a>
         <a href="/daftar" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                 class="fas fa-tachometer-alt me-2"></i>Daftar</a>
         <a href="/profil" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-chart-line me-2"></i>Profil</a>
         @can('admin')
             <a href="/dashboard/admin" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                     class="fas fa-tachometer-alt me-2"></i>Admin</a>
         @endcan
         <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                 class="fas fa-power-off me-2"></i>Logout</a>
     </div>
 </div>
 <!-- /#sidebar-wrapper -->
