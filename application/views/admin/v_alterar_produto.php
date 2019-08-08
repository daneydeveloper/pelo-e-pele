<!-- <?php 
   var_dump($produto);
 ?> -->
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
               <li class="active ">
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
               <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <form method="POST" action="<?=base_url('produto/alterar/'.$produto->PRO_Codigo)?>" enctype="multipart/form-data">
                        <div class="card">
                           <div class="card-header">Alterar Produto</div>
                           <div class="card-body">
                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Nome:</label>
                                    <input type="hidden" name="PRO_Codigo" value="<?=$produto->PRO_Codigo?>">
                                    <input type="text" class="form-control" name="PRO_Nome" value="<?=$produto->PRO_Nome?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Categoria:</label>
                                    <select class="form-control" id="form-control-edition" name="PRO_Codigo_Categoria">
                                       <?php foreach ($categorias as $key): ?>
                                       <option <?=($produto->PRO_Codigo_Categoria == $key->PROCAT_Codigo)?'selected':''?> value="<?=$key->PROCAT_Codigo?>"><?=$key->PROCAT_Nome?></option>
                                       <?php endforeach ?>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Gramatura 1</label>
                                    <input type="text" class="form-control" name="PRO_Grama1" value="<?=$produto->PRO_Grama1?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Caixa Master 1</label>
                                    <input type="text" class="form-control" name="PRO_Caixa1" value="<?=$produto->PRO_Caixa1?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Gramatura 2</label>
                                    <input type="text" class="form-control" name="PRO_Grama2" value="<?=$produto->PRO_Grama2?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Caixa Master 2</label>
                                    <input type="text" class="form-control" name="PRO_Caixa2" value="<?=$produto->PRO_Caixa2?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Gramatura 3</label>
                                    <input type="text" class="form-control" name="PRO_Grama3" value="<?=$produto->PRO_Grama3?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Caixa Master 3</label>
                                    <input type="text" class="form-control" name="PRO_Caixa3" value="<?=$produto->PRO_Caixa3?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Gramatura 4</label>
                                    <input type="text" class="form-control" name="PRO_Grama4" value="<?=$produto->PRO_Grama4?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Caixa Master 4</label>
                                    <input type="text" class="form-control" name="PRO_Caixa4" value="<?=$produto->PRO_Caixa4?>" placeholder="Digite o nome do produto:" style="height: 40px;">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Descrição Curta:</label>
                                    <textarea rows="7" name="PRO_Descricao_Curta" class="form-control" placeholder="Digite uma descrição curta do produto:"><?=$produto->PRO_Descricao_Curta?></textarea>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Descrição Completa:</label>
                                    <textarea rows="7" name="PRO_Descricao_Completa" class="form-control" placeholder="Digite a descrição completa do produto:"><?=$produto->PRO_Descricao_Completa?></textarea>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Video de Demonstração:</label>
                                    <input rows="7" name="PRO_Videodemo" class="form-control" value="<?=$produto->PRO_Videodemo?>" placeholder="Digite a url do video:"></input>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label class="col-form-label">Video Como Utilizar:</label>
                                    <input rows="7" name="PRO_Videocomoutilizar" class="form-control" value="<?=$produto->PRO_Videocomoutilizar?>" placeholder="Digite a url do video:"></input>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label style="width: 100%;">Imagem do Produto:</label>
                                    <input type="file" accept="image/*" name="PROIMG_Imagem[]" placeholder="imagem" style="width: 100%;" multiple>
                                 </div>
                              </div>
                              <div class="row">
                                 <?php if ($produto->PROIMG_Imagem): ?>
                                    <?php foreach ($produto->PROIMG_Imagem as $key): ?>
                                    <div class="col-md-4">
                                       <img width="100%" src="<?=base_url('public/admin/img/produtos/'.$key->PROIMG_Imagem)?>">
                                    </div>
                                    <?php endforeach ?>
                                 <?php endif ?>
                              </div>
                              <br>
                              <button type="submit" class="btn btn-cadastrar" style="margin-bottom: 20px;">ALTERAR</button>
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