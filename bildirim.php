<div class="container">
  <div class="top-navbar header b-b"> <a data-original-title="Toggle navigation" class="toggle-side-nav pull-left" href="#"><i class="icon-reorder"></i> </a>
    <div class="brand pull-left"> <a href="default.php">ANCSoft | Satış</a></div>
    <ul class="nav navbar-nav navbar-right  hidden-xs">
      <li class="dropdown user  hidden-xs"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-male"></i> <span class="username"><?php echo $_SESSION['user']; ?></span> <i class="icon-caret-down small"></i> </a>
        <ul class="dropdown-menu">
          
          
          <li><a href="sifreDegistir.php"><i class="icon-edit"></i> Şifre Değiştir</a></li>
          <li class="divider"></li>
          <li><a href="exit.php"><i class="icon-key"></i> Çıkış Yap</a></li>
        </ul>
      </li>
    </ul>
    <form class="pull-right" method="GET" action="servisAra.php">
      <input type="search" placeholder="Müşteri Adı.." name="m_ad" class="search" id="search-input" />
    </form>
  </div>
</div>
