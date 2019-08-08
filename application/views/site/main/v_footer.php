<footer class="site-footer" style="background-image:url(<?=base_url()?>/public/tema/images/background/bg-1.png)!important; background-size: cover!important; border-top:2px solid rgb(245, 190, 190) !important;">
   <!-- FOOTER -->  
   <div class="footer-top overlay-wraper">
      <div class="overlay-main"></div>
      <div class="container">
         <div class="row">
            <!-- SOBRE NOS -->
            <div class="col-md-3 col-sm-6">
               <div class="widget widget_about">
                  <h4 class="widget-title">Pelo &amp; Pele</h4>
                  <p class="text-justify" style="text-align: justify;">A Pelo &amp; Pele Cosméticos trabalha explorando os sentidos de seus clientes através das vendas dos seus produtos e sua composição natural, contribuindo diretamente com o meio-ambiente. Muito mais do que produtos, nós vendemos uma ideia.
                  </p>
               </div>
            </div>
            <!-- SOBRE NOS -->
            
            <!-- PAGINAS -->
            <div class="col-md-3 col-sm-6">
               <div class="widget widget_services">
                  <h4 class="widget-title">Páginas</h4>
                  <ul>
                     <li><a href="<?=base_url('produtos')?>">Home</a></li>
                     <li><a href="<?=base_url('sobre-nos')?>">Sobre Nós</a></li>
                     <li><a href="<?=base_url('representantes')?>">Representantes</a></li>
                     <li><a href="<?=base_url('contato')?>">Contato</a></li>
                  </ul>
               </div>
            </div>

            <!-- PRODUTOS -->
            <div class="col-md-3 col-sm-6">
               <div class="widget widget_services">
                  <h4 class="widget-title">Produtos</h4>
                  <ul>
                     <li>
                        <a href="<?=base_url('produtos')?>">Todos</a>
                     </li>
                     <?php foreach ($categoria as $key): ?>
                     <li>
                        <a href="<?=base_url('buscar?cat='.$key->PROCAT_Nome)?>"><?=$key->PROCAT_Nome?></a>
                     </li>
                     <?php endforeach ?>
                  </ul>
               </div>
            </div>
            <style type="text/css">
            .catalogo{margin-top: 10px;cursor: pointer;}
            </style>
            <!-- NEWSLETTER -->
            <div class="col-md-3 col-sm-6">
               <div class="widget widget_newsletter">
                  <h4 class="widget-title">Ofertas únicas</h4>
                  <div class="newsletter-bx">
                     <form role="search" method="post">
                        <div class="input-group">
                           <input name="news-letter" class="form-control" placeholder="Deixe seu e-mail" type="text">
                           <span class="input-group-btn">
                           <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                           </span>
                        </div>
                     </form>
                  </div>
                  <a href="" class="site-button catalogo" type="button">Baixar Catálogo</a>
               </div>
            </div>
            <!-- NEWSLETTER -->
         </div>
      </div>
   </div>
   <!-- COPYRIGHT -->
   <div class="footer-bottom overlay-wraper">
      <div class="overlay-main"></div>
      <div class="constrot-strip"></div>
      <div class="container p-t30">
         <div class="row">
            <div class="wt-footer-bot-left">
               <span class="copyrights-text">© <?=Date('Y')?> <strong class="pelo-e-pele">Pelo & Pele Cosméticos</strong> | Todos os direitos reservados.</span>
            </div>
            <div class="wt-footer-bot-right">
               <span class="copyrights-text">Desenvolvido por <strong><a href="https://www.agenciamidia9.com.br" target="_blank" style="color: orange;">Agência Mídia9</a></strong></span>
            </div>
         </div>
      </div>
   </div>
</footer>