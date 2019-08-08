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
   <?php 
   // var_dump($produtos);
   ?>
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
               <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="right-actions">
                     <a href="" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
                     <i class="icon-plus2"></i>
                     </a>
                  </div>
               </div> -->
            </div>
         </div>
      </header>
      <div class="main-content">
         <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="card">
                  <div class="card-header">Todos os Produtos</div>
                  <div class="card-body">
                     <table class="table table-bordered table-responsive">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Ações</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($ofertas as $key): ?>
                              <tr>
                                 <td><?=$key->OFER_Codigo?></td>
                                 <td><?=$key->OFER_Nome?></td>
                                 <td>
                                    <a href="<?=base_url('oferta/visualizar/'.$key->OFER_Codigo)?>" class="btn btn-editar-produto" data-toggle="tooltip" title="" data-original-title="Editar Usuario"><i class="icon-spanner"></i></a>
                                    <a href="<?=base_url('oferta/remover/'.$key->OFER_Codigo)?>" class="btn btn-excluir-produto" data-toggle="tooltip" title="" data-original-title="Excluir Usuario"><i class="icon-times"></i></a>
                                 </td>
                              </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
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
            </div>
         </div>
      </div>
   </div>
</div>