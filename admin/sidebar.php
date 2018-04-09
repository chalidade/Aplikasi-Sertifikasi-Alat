<!-- LEFT SIDEBAR -->
<?php
$id = $_REQUEST['id'];
?>
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <?php if($id == 'home'){ ?>
        <li><a href="index.php?id=home" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        <?php } else { ?>
        <li><a href="index.php?id=home" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        <?php } ?>

        <?php if($id == 'dataApar'){ ?>
        <li><a href="data-apar.php?id=dataApar" class="active"><i class="lnr lnr-user"></i> <span>User</span></a></li>
        <?php } else { ?>
        <li><a href="data-apar.php?id=dataApar" class=""><i class="lnr lnr-user"></i> <span>User</span></a></li>
        <?php } ?>

        <?php if($id == 'history'){ ?>
        <li><a href="history.php?id=history" class="active"><i class="lnr lnr-history"></i> <span>History</span></a></li>
        <?php } else { ?>
        <li><a href="history.php?id=history" class=""><i class="lnr lnr-history"></i> <span>History</span></a></li>
        <?php } ?>

        <li><a href="../logout.php" class=""><i class="lnr lnr-arrow-left-circle"></i> <span>Logout</span></a></li>
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
