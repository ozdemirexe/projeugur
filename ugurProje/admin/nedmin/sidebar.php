
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dimg/admins/<?php echo $_SESSION['admins']["admins_file"]; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php 
          
          echo $_SESSION['admins']["admins_namesurname"]; ?></p>
          <!-- Status -->
          <a href="#"></i>Yönetici</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menüler</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li class="active"><a href="sliders.php"><i class="fa fa-image"></i> <span>Sliders</span></a></li>
        <li class="active"><a href="frontpages.php"><i class="fa fa-file-powerpoint-o"></i> <span>Trendler</span></a></li>
        
              <li class="active"><a href="blogs.php"><i class="fa fa-file-text-o"></i> <span>Araçlar</span></a></li>
              <li class="active"><a href="cars.php"><i class="fa fa-file-text-o"></i> <span>Parçalar</span></a></li>
        


           <li class="active treeview">
          <a href="#"><i class="fa fa-key"></i> <span>Kullanıcı İşlemleri</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
            <li><a href="users.php"><i class="fa fa-user"></i>Kullanıcılar</a></li> 
            <li><a href="admins.php"><i class="fa fa-user"></i>Yöneticiler</a></li>
               
            
          </ul>
        </li>



        <li class="active treeview">
          <a href="#"><i class="fa fa-key"></i> <span>Yönetim</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="settings.php"><i class="fa fa-cog"></i>Ayarlar</a></li>
          
            
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>