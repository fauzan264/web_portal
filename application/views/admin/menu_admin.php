
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active"><a href="<?php echo base_url('admin/superadmin/dashboardadmin');?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i>
        <span>Master Menu Utama</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('admin/superadmin/identitaswebsite');?>"><i class="fa fa-circle-o"></i> Identitas Website</a></li>
        <li><a href="<?php echo base_url('admin/superadmin/menuwebsite');?>"><i class="fa fa-circle-o"></i> Menu Website</a></li>
      </ul>
    </li>
    <li><a href="<?php echo base_url('admin/superadmin/masterdataberita');?>"><i class="fa fa-newspaper-o"></i> <span>Master Data Berita</span></a></li>
    <!-- <li><a href="<?php echo base_url('admin/superadmin/masterdataiklan');?>"><i class="fa fa-list-alt"></i> <span>Master Data Iklan</span></a></li> -->
    <li><a href="<?php echo base_url('admin/superadmin/masterdatakategori');?>"><i class="fa fa-align-justify"></i> <span>Master Data Kategori</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-list-alt"></i>
        <span>Master Iklan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('admin/superadmin/dataiklanheader');?>"><i class="fa fa-circle-o"></i> Header</a></li>
        <li><a href="<?php echo base_url('admin/superadmin/dataiklansidebar');?>"><i class="fa fa-circle-o"></i> Sidebar</a></li>
        <li><a href="<?php echo base_url('admin/superadmin/dataiklanfooter');?>"><i class="fa fa-circle-o"></i> Footer</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-user"></i>
        <span>Master Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo base_url('admin/superadmin/dataadmin');?>"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
        <!-- <li><a href="<?php echo base_url('karyawan/masterdataprofile');?>"><i class="fa fa-circle-o"></i> Manajemen Modul</a></li> -->
      </ul>
    </li>
  </ul>
</section>
