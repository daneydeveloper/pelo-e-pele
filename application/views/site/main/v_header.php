<header class="site-header header-style-1 ">
   <div class="top-bar">
      <div class="container">
         <div class="row">
            <div class="wt-topbar-left clearfix" id="invisiveltexto">
               <ul class="list-unstyled e-p-bx pull-right">
                  <li><i class="fa fa-envelope"></i>comercial@peloepelecosmeticos.com.br</li>
                  <li><i class="fa fa-phone"></i>(85) 3223-5414</li>
               </ul>
            </div>
            <div class="wt-topbar-right clearfix">
               <ul class="social-bx list-inline pull-right">
                  <li><a href="//www.facebook.com/peloepelecosmeticos/" class="fa fa-facebook" target="_blank"></a></li>
                  <li><a href="//www.instagram.com/peloepeleoficial/" class="fa fa-instagram" target="_blank"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="sticky-header main-bar-wraper">
      <div class="main-bar bg-white">
         <div class="container">
            <div class="logo-header">
               <a href="<?=base_url()?>">
               <img src="<?=base_url()?>/public/tema/images/logo.png" width="216" height="37" alt="" />
               </a>
            </div>
            <!-- TOGGLE BUTTON -->
            <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- MAIN NAV -->
            <div class="header-nav navbar-collapse collapse">
               <ul class="nav navbar-nav">
                  <li class=""><a href="<?=base_url()?>" id="weight">Home</a></li>
                  <li class=""><a href="<?=base_url()?>sobre_nos" id="weight">Sobre Nós</a></li>
                  <li class="">
                     <a id="weight">Produtos<i class="fa fa-chevron-down"></i></a>
                     <ul class="sub-menu">
                        <li>
                           <a href="<?=base_url('produtos')?>" id="weight">Todos</a>
                        </li>
                        <?php foreach ($categoria as $key): ?>
                        <li>
                           <a href="<?=base_url('buscar?cat='.$key->PROCAT_Nome)?>" id="weight"><?=$key->PROCAT_Nome?></a>
                        </li>
                        <?php endforeach ?>
                     </ul>
                  </li>
                  <li class=""><a href="" id="weight">Sustentabilidade</a></li>
                  <li class=""><a href="<?=base_url()?>representantes" id="weight">Representantes</a></li>
                  <li class=""><a href="<?=base_url()?>contato" id="weight">Contato</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</header>