<div class="page-content">
   <!-- INNER PAGE BANNER -->
   <div class="wt-bnr-inr overlay-wraper" id="breadcrumb">
      <div class="overlay-main bg-black opacity-07"></div>
      <div class="container">
         <div class="wt-bnr-inr-entry">
            <h1 class="text-white"><?=$produto->PRO_Nome?></h1>
         </div>
      </div>
   </div>
   <!-- INNER PAGE BANNER END -->
   <!-- BREADCRUMB ROW -->                            
   <div class="bg-gray-light p-tb20">
      <div class="container">
         <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?=base_url('produtos')?>"> Produtos</a></li>
            <li><?=$produto->PRO_Nome?></li>
         </ul>
      </div>
   </div>
   <!-- BREADCRUMB ROW END -->                   
   <!-- SECTION CONTENT START -->
   <div class="section-full p-t80 p-b50">
      <!-- PRODUCT DETAILS -->
      <div class="container woo-entry">
         <div class="row m-b30">
            <div class="col-md-4 col-sm-4 m-b30">
               <div class="wt-box wt-product-gallery on-show-slider">
                  <div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
                     <?php foreach ($produto->imagens as $key): ?>
                        <div class="item">
                           <div class="mfp-gallery">
                              <div class="wt-box">
                                 <div class="wt-thum-bx wt-img-overlay1 ">
                                    <img src="<?=base_url('public/admin/img/produtos/'.$key->PROIMG_Imagem)?>" alt="">
                                    <div class="overlay-bx">
                                       <div class="overlay-icon">
                                          <a class="mfp-link" href="<?=base_url('public/admin/img/produtos/'.$key->PROIMG_Imagem)?>">
                                          <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach ?>
                  </div>
                  <div id="sync2" class="owl-carousel owl-theme">
                     <?php foreach ($produto->imagens as $key): ?>
                        <div class="item">
                        <div class="wt-media">
                           <img src="<?=base_url('public/admin/img/produtos/'.$key->PROIMG_Imagem)?>" alt="">
                        </div>
                     </div>
                     <?php endforeach ?>
                  </div>
               </div>
            </div>
            <div class="col-md-8 col-sm-8">
               <div class="wt-post-title ">
                  <h3 class="post-title"><a href=""><?=$produto->PRO_Nome?></a></h3>
               </div>
               <div class="wt-post-text">
                  <p class="m-b10"><?=$produto->PRO_Descricao_Curta?></p>
                  <p class="m-b10"><?=$produto->PRO_Descricao_Completa?></p>
               </div>
               <table class="table table-bordered table-striped m-b0" >
                  <tr>
                     <td><strong>Gramaturas</strong></td>
                     <td><strong>Caixa Master</strong></td>
                  </tr>
                  <?php if ($produto->PRO_Grama1 || $produto->PRO_Caixa1): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama1?></td>
                        <td><?=$produto->PRO_Caixa1?></td>
                     </tr>
                  <?php endif ?>
                  <?php if ($produto->PRO_Grama2 || $produto->PRO_Caixa2): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama2?></td>
                        <td><?=$produto->PRO_Caixa2?></td>
                     </tr>
                  <?php endif ?>
                  <?php if ($produto->PRO_Grama3 || $produto->PRO_Caixa3): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama3?></td>
                        <td><?=$produto->PRO_Caixa3?></td>
                     </tr>
                  <?php endif ?>
                  <?php if ($produto->PRO_Grama4 || $produto->PRO_Caixa4): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama4?></td>
                        <td><?=$produto->PRO_Caixa4?></td>
                     </tr>
                  <?php endif ?>
                  <?php if ($produto->PRO_Grama5 || $produto->PRO_Caixa5): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama5?></td>
                        <td><?=$produto->PRO_Caixa5?></td>
                     </tr>
                  <?php endif ?>
                  <?php if ($produto->PRO_Grama6 || $produto->PRO_Caixa6): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama6?></td>
                        <td><?=$produto->PRO_Caixa6?></td>
                     </tr>
                  <?php endif ?>
                  <?php if ($produto->PRO_Grama7 || $produto->PRO_Caixa7): ?>
                     <tr>
                        <td><?=$produto->PRO_Grama7?></td>
                        <td><?=$produto->PRO_Caixa7?></td>
                     </tr>
                  <?php endif ?>
               </table>
            </div>
         </div>
         <!-- TABS CONTENT START -->
         <div class="row">
            <div class="col-md-12 p-b30">
               <div class="wt-tabs border border-top bg-tabs">
                  <ul class="nav nav-tabs">
                     <li class="active"><a data-toggle="tab" href="#utilizar">Como Ultilizar</a></li>
                     <li><a data-toggle="tab" href="#cuidados">Cuidados/Precauções</a></li>
                     <li><a data-toggle="tab" href="#especificacao">Comentarios</a></li>
                  </ul>
                  <div class="tab-content">
                     <div id="utilizar" class="tab-pane active">
                        <div class=" p-a10">
                           <div class="row">
                              <div class="col-md-6">
                                 <iframe width="729" height="410" src="https://www.youtube.com/embed/C7AGN6abc90" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="col-md-6">
                                 <p class="m-b10"><strong>TÍTULO COMO ULTILIZAR</strong></p>
                                 <ul class="list-check-circle primary">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="cuidados" class="tab-pane">
                        <div class=" p-a10">
                           <div class="row">
                              <div class="col-md-6">
                                 <p class="m-b10"><strong>Cuidados</strong></p>
                                 <ul class="list-check-circle primary">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                 </ul>
                              </div>
                              <div class="col-md-6">
                                 <p class="m-b10"><strong>Precauções</strong></p>
                                 <ul class="list-check-circle primary">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="especificacao" class="tab-pane">
                        <div id="disqus_thread"></div>
                           <script>

                           /**
                           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                           /*
                           var disqus_config = function () {
                           this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                           this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                           };
                           */
                           (function() { // DON'T EDIT BELOW THIS LINE
                           var d = document, s = d.createElement('script');
                           s.src = 'https://pelo-pele-cosmeticos.disqus.com/embed.js';
                           s.setAttribute('data-timestamp', +new Date());
                           (d.head || d.body).appendChild(s);
                           })();
                           </script>
                           <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<button class="scroltop"><span class="fa fa-angle-double-up relative" id="btn-vibrate"></span></button>