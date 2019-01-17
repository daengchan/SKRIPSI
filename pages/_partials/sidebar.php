<?php
function is_active($page) {
  $uri = "$_SERVER[REQUEST_URI]";
  if (strpos($uri, $page)) {
    echo 'active';
  }
}
?>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('dasbor'); ?>">
    <a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Dasbor</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('warga'); ?>">
    <a href="../warga"><i class="glyphicon glyphicon-book"></i> Data Warga</a>
  </li>
  <li class="<?php is_active('kartu-keluarga'); ?>">
    <a href="../kartu-keluarga"><i class="glyphicon glyphicon-inbox"></i> Data Kartu Keluarga</a>
  </li>
  <li class="<?php is_active('kelahiran'); ?>">
    <a href="../kelahiran"><i class="glyphicon glyphicon-export"></i> Data Kelahiran</a>
  </li>
  <li class="<?php is_active('kematian'); ?>">
    <a href="../kematian"><i class="glyphicon glyphicon-export"></i> Data Kematian</a>
  </li>
  <li class="<?php is_active('mutasi'); ?>">
    <a href="../mutasi"><i class="glyphicon glyphicon-export"></i> Data Mutasi</a>
  </li>
  <li class="<?php is_active('pendatang'); ?>">
    <a href="../pendatang"><i class="glyphicon glyphicon-export"></i> Data Pendatang</a>
  </li>
</ul>

<ul class="nav nav-sidebar">
  <li class="<?php is_active('agenda'); ?>">
    <a href="../agenda"><i class="glyphicon glyphicon-list-alt"></i> Agenda</a>
  </li>
  <li class="<?php is_active('dana-desa'); ?>">
    <a href="../dana-desa"><i class="glyphicon glyphicon-usd"></i> Dana Desa</a>
  </li>
</ul>

<?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
<ul class="nav nav-sidebar">
  <li class="<?php is_active('user'); ?>">
    <a href="../user"><i class="glyphicon glyphicon-user"></i> User</a>
  </li>
</ul>
<?php endif; ?>
