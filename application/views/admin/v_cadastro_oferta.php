<header class="app-header">
   <div class="container-fluid">
      <div class="row ">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
            <a class="logo">
            <img src="<?=base_url()?>/public/admin/img/logo.png" alt="Unify Admin Dashboard">
            </a>
            <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
            <i class="icon-sort"></i>
            </a>
            <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
            <i class="icon-chevron-thin-left"></i>
            </a>
         </div>
      </div>
   </div>
</header>
<div class="app-container">
   <aside class="app-side" id="app-side">
      <div class="side-content ">
         <div class="user-profile">
            <?php if ($this->session->usuario->USR_Imagem): ?>
               <img src="<?=base_url('public/admin/img/usuarios/'.$this->session->usuario->USR_Imagem)?>" class="profile-thumb" alt="User Thumb"> 

            <?php else: ?>
               <img src="<?=base_url('public/admin/img/usuarios/usuario_default.png')?>" class="profile-thumb" alt="User Thumb"> 
            <?php endif ?>

            <h6 class="profile-name"><?=$this->session->usuario->USR_Nome?></h6>
         </div>
         <nav class="side-nav">
            <ul class="unifyMenu" id="unifyMenu">
               <li >
                  <a href="#" class="has-arrow" aria-expanded="false">
                  <span class="has-icon">
                  <i class="icon-adjust2"></i>
                  </span>
                  <span class="nav-title">Painel</span>
                  </a>
                  <ul aria-expanded="false">
                     <li>
                        <a href="<?=base_url('admin')?>">Todos os Produtos</a>
                     </li>
                     <li>
                        <a href="<?=base_url('admin/cadastro_produto')?>">Cadastrar Produtos</a>
                     </li>
                     <li>
                        <a href="<?=base_url('admin/categorias')?>">Todas as Categorias</a>
                     </li>
                     <li>
                        <a href='<?=base_url('admin/cadastro_categoria')?>'>Cadastrar Categorias</a>
                     </li>
                  </ul>
               </li>
               <li class="active">
                  <a href="#" class="has-arrow" aria-expanded="false">
                  <span class="has-icon">
                  <i class="icon-lock_outline"></i>
                  </span>
                  <span class="nav-title">Ofertas</span>
                  </a>
                  <ul aria-expanded="false">
                     <li>
                        <a href='<?=base_url('admin/ofertas')?>'>Todas as Ofertas</a>
                     </li>
                     <li>
                        <a href='<?=base_url('admin/cadastro_oferta')?>'>Cadastrar Oferta</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#" class="has-arrow" aria-expanded="false">
                  <span class="has-icon">
                  <i class="icon-lock_outline"></i>
                  </span>
                  <span class="nav-title">Admin</span>
                  </a>
                  <ul aria-expanded="false">
                     <li>
                        <a href='<?=base_url('admin/usuarios')?>'>Usuarios</a>
                     </li>
                     <li>
                        <a href='<?=base_url('admin/cadastro_usuario')?>'>Cadastrar Usuario</a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="<?=base_url('login/sair')?>">
                  <span class="has-icon">
                  <i class="icon-arrow-back"></i>
                  </span>
                  <span class="nav-title">Sair</span>
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </aside>
   <div class="app-main">
      <header class="main-heading">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                  <div class="page-icon">
                     <i class="icon-layers"></i>
                  </div>
                  <div class="page-title">
                     <h5>Bem vindo ao Painel Administrativo</h5>
                     <h6 class="sub-heading">AdminCarry</h6>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="main-content">
         <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <form method="POST" action="<?=base_url('oferta/cadastrar')?>" enctype="multipart/form-data">
                        <div class="card">
                           <div class="card-body">
                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Nome: *</label>
                                    <input required="true" type="text" class="form-control" name="OFER_Nome" placeholder="Digite o nome da oferta:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label class="col-form-label">Descrição da Oferta:</label>
                                    <textarea rows="7" name="OFER_Descricao" class="form-control" placeholder="Digite a descrição da oferta:"></textarea>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label style="width: 100%;">Imagem de Perfil:</label>
                                    <input type="file" accept="image/*" name="OFER_Imagem" placeholder="imagem" style="width: 100%;">
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-cadastrar">CADASTRAR</button>
                              <br>
                              <?php if (@$error): ?>
                                 <div class="alert custom alert-danger">
                                    <i class="icon-warning2"></i> <?=@$msg?>
                                 </div>
                              <?php elseif(@$success): ?>
                                 <div class="alert custom alert-success">
                                    <i class="icon-tick"></i> <?=@$msg?>
                                 </div>
                              <?php endif ?>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>