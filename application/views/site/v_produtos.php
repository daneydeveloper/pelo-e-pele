<div class="page-content">
  <!-- BREADCRUMB -->   
   <div class="wt-bnr-inr overlay-wraper" id="breadcrumb">
      <div class="overlay-main bg-black opacity-07"></div>
      <div class="container">
         <div class="wt-bnr-inr-entry">
            <h1 class="text-white">Produtos</h1>
         </div>
      </div>
   </div>
   <div class="bg-gray-light p-tb20">
      <div class="container">
         <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
            <li>Produtos</li>
         </ul>
      </div>
   </div>
   <!-- BREADCRUMB -->
   <!-- CONTENT -->
   <div class="section-full p-t80 p-b50">
      <div class="container">
         <div class="section-content">
            <div class="row">
               <div class="col-md-3">
                  <aside  class="side-bar">
                     <!-- PESQUISAR -->
                     <div class="widget bg-white">
                        <h4 class="widget-title">Pesquisar</h4>
                        <div class="search-bx">
                           <form role="search" action="<?=base_url('buscar')?>" method="get">
                              <div class="input-group">
                                 <input name="keyword" type="text" class="form-control" placeholder="O que você procura?">
                                 <span class="input-group-btn">
                                 <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                 </span>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="widget bg-white  widget_tag_cloud">
                        <h4 class="widget-title">Categorias</h4>
                        <div class="tagcloud">
                           <a href="<?=base_url('produtos')?>">Todos</a>
                           <?php foreach ($categoria as $key): ?>
                              <a href="<?=base_url('buscar?cat='.$key->PROCAT_Nome)?>"><?=$key->PROCAT_Nome?></a>
                           <?php endforeach ?>
                        </div>
                     </div> 
                     <!-- OFERTAS -->
                     <div class="widget widget_newsletter-2 bg-white">
                        <h4 class="widget-title">Ofertas</h4>
                        <div class="newsletter-bx p-a30">
                           <div class="newsletter-icon">
                              <i class="fa fa-envelope-o"></i>
                           </div>
                           <div class="newsletter-content">
                              <i>Gostaria de receber ofertas únicas no seu e-mail?</i>
                           </div>
                           <div class="m-t20">
                              <form role="search">
                                 <div class="input-group">
                                    <input name="news-letter" class="form-control" placeholder="Digite seu email:" type="text">
                                    <span class="input-group-btn">
                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </aside>
               </div>
               <div class="col-md-9">
                  <!-- TITULO -->
                  <div class="p-b10">
                     <?php if (@$busca): ?>
                        <h3 class="text-uppercase">Resultados da sua buscar por : <?=$busca?></h3>
                     <?php else: ?>
                        <h3 class="text-uppercase">Nossos Produtos</h3>
                     <?php endif ?>
                     <div class="wt-separator-outer m-b30">
                        <div class="wt-separator style-icon">
                           <i class="fa fa-leaf text-black"></i>
                           <span class="separator-left bg-primary"></span>
                           <span class="separator-right bg-primary"></span>
                        </div>
                     </div>
                  </div>
                  <!-- PRODUTOS -->
                  <div class="row">
                     <?php foreach ($categoria as $key): ?>
                        <div class="col-md-12">
                           <h3 class="text-uppercase"><?=$key->PROCAT_Nome?></h3>
                        <hr/>
                        </div>
                        <?php foreach ($key->produtos as $key2): ?>
                           <a href="<?=base_url('site/produto_detalhe/'.$key2->PRO_Codigo)?>">
                              <div class="col-md-4 col-sm-4 col-xs-12 col-xs-100pc m-b30">
                                 <div class="wt-box wt-product-box border-red height-fixed">
                                    <div class="wt-thum-bx wt-img-effect">
                                       <img id="imgprodutos" src="<?=base_url('public/admin/img/produtos/'.$key2->imagem->PROIMG_Imagem)?>" alt="">
                                    </div>
                                    <div class="wt-info  text-center">
                                       <div class="p-a10">
                                          <h4 class="wt-title">
                                             <a href=""><?=$key2->PRO_Nome?></a>
                                          </h4>
                                          <p id="#descricaocurta"><?=$key2->PRO_Descricao_Curta?></p>
                                          <div class="p-t10">
                                             <a href="<?=base_url('site/produto_detalhe/'.$key2->PRO_Codigo)?>" class="site-button" type="button" >Mais Informações <i class="fa fa-plus"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        <?php endforeach ?>
                     <?php endforeach ?>
                  </div>
                  <!-- OFERTAS -->
                  <div class="p-tb30">
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <div class="wt-box pro-banner">
                              <img src="<?=base_url()?>/public/tema/images/ofertas/image25576.png">
                              <div class="pro-banner-disc p-a20 text-white">
                                 <h2 class="text-uppercase m-a0 m-b10" style="text-align: right;">#TÔ ASSIM</h2>
                                 <h4 class="m-a0 m-b10" style="text-align: right;">Garanta já uma linha<br> de produtos completa!</h4>
                                 <a href="produto-detalhe" class="site-button ">SAIBA MAIS <i class="fa fa-angle-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- CONTENT -->
</div>
<!-- BUTTON TOP -->
<button class="scroltop"><span class="fa fa-angle-double-up relative" id="btn-vibrate"></span></button>