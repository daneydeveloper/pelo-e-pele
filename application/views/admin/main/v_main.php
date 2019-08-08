<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Unify Admin Panel" />
		<meta name="keywords" content="Lock Screen, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>/public/tema/images/favicon.png" />
		<title>Login | Painel Administrativo</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<!-- Common CSS -->
		<link rel="stylesheet" href="<?=base_url()?>/public/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>/public/admin/fonts/icomoon/icomoon.css" />
		<!-- Mian and Login css -->
		<link rel="stylesheet" href="<?=base_url()?>/public/admin/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	</head>  
	<body>
		<style type="text/css">
			.side-nav .unifyMenu ul a {
				padding: .5em;
				padding-left: 3rem;
			}
			.btn-editar-produto{
               background-color: #1bca59;
               padding-top: 5px;
               padding-bottom: 5px;
               padding-left: 10px;
               padding-right: 10px;
               cursor: pointer;
			   color: #ffffff!important;
               font-size: 18px;
            }
            .btn-visualizar-produto{
               background-color: #1493d0;
               padding-top: 5px;
               padding-bottom: 5px;
               padding-left: 10px;
               padding-right: 10px;
               cursor: pointer;
			   color: #ffffff!important;
               font-size: 18px;
            }
            .btn-excluir-produto{
               background-color: #e84156;
               padding-top: 5px;
               padding-bottom: 5px;
               padding-left: 10px;
               padding-right: 10px;
               cursor: pointer;
			   color: #ffffff!important;
               font-size: 18px;
            }
		</style>
		<style type="text/css">
			.side-content .user-profile img.profile-thumb {
			    width: 50%;
			    height: auto;
			    box-shadow: none; 
			}
			.logo {
			    background: #ff465d;
			}
			.main-heading .page-icon i {
			    color: #ff465d;
			}
			.side-content .user-profile {
			    background: #e84156;
		        border-bottom: 1px solid #da3e51;
			}
			.app-header {
			    background: #e84156;
			}
			.app-side {
			    background: #ff465d;
			}
			a.mini-nav-btn {
			    border-right: 1px solid #e84156;
			}
			.side-nav .unifyMenu a {
			    background: #ff465d;
			}
			.side-content .user-profile h6.profile-name {
			    font-size: 18px;
			    color: #ffffff;
			}
			.side-nav .unifyMenu {
			    padding: 0px 0px 0px 0px;
			}
			.side-nav{
				font-size: 15px;
			}
			.side-nav .unifyMenu a, .side-nav .unifyMenu a, .side-nav .unifyMenu a {
			    color: #ffffff;
			}
			.side-nav .unifyMenu a:active, .side-nav .unifyMenu a:focus, .side-nav .unifyMenu a:hover {
			    color: #ffffff;
			    background: #e84156;
			}
		</style>
		<style type="text/css">
		   .side-nav .unifyMenu {
		      padding: 0rem 0; 
		   }
		   label{
		      font-family: 'Poppins', sans-serif;
		   }
		   h5{
		      font-family: 'Poppins', sans-serif;
		   }
		   .card .card-header{
		      font-family: 'Poppins', sans-serif;
		   }
		   .user-profile{
		      font-family: 'Poppins', sans-serif;
		   }
		   table{
		      font-family: 'Poppins', sans-serif;
		   }
		   ul{
		      font-family: 'Poppins', sans-serif;
		   }
		   .sub-heading{
		      font-family: 'Poppins', sans-serif;
		   }
		   .btn-alterar-usuario{
		      font-family: 'Poppins', sans-serif;
		      background-color: #4266B2;
		      color: #ffffff;
		      cursor: pointer;
		   }
		</style>
		<style type="text/css">
		   select{
		   color: #9796B7!important;
		   }
		   ::placeholder{
		   color: #9796B7!important;
		   opacity:1
		   }
		   :-ms-input-placeholder{
		   color: #9796B7!important;
		   }
		   ::-ms-input-placeholder{
		   color: #9796B7!important;
		   }
		   .side-nav .unifyMenu {
		   padding: 0rem 0; 
		   font-family: 'Poppins', sans-serif;
		   }
		   #form-control-edition{
		   height: 40px!important;
		   font-family: 'Poppins', sans-serif;
		   }
		   label{
		   font-family: 'Poppins', sans-serif;
		   }
		   h5{
		   font-family: 'Poppins', sans-serif;
		   }
		   .card .card-header {
		   font-family: 'Poppins', sans-serif;
		   }
		   .main-heading .page-title h6.sub-heading {
		   font-family: 'Poppins', sans-serif;
		   }
		   .side-content .user-profile h6.profile-name {
		   font-family: 'Poppins', sans-serif;
		   }
		   .btn-cadastrar{
		   background-color: #e84156;
		   padding-top: 10px;
		   padding-bottom: 10px;
		   color: white;
		   font-family: 'Poppins', sans-serif;
		   }
		</style>
		<div class="app-wrap">
			<!-- Contemt -->
			<?=$template?>
		</div>
		<!-- Js Padrao -->
		<script src="<?=base_url()?>/public/admin/js/jquery.js"></script>
		<script src="<?=base_url()?>/public/admin/js/tether.min.js"></script>
		<script src="<?=base_url()?>/public/admin/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>/public/admin/vendor/unifyMenu/unifyMenu.js"></script>
		<script src="<?=base_url()?>/public/admin/vendor/onoffcanvas/onoffcanvas.js"></script>
		<script src="<?=base_url()?>/public/admin/js/moment.js"></script>
		<!-- Data Tables -->
		<script src="<?=base_url()?>/public/admin/vendor/datatables/dataTables.min.js"></script>
		<script src="<?=base_url()?>/public/admin/vendor/datatables/dataTables.bootstrap.min.js"></script>
		<!-- Custom Data tables -->
		<script src="<?=base_url()?>/public/admin/vendor/datatables/custom/custom-datatables.js"></script>
		<script src="<?=base_url()?>/public/admin/vendor/datatables/custom/fixedHeader.js"></script>
		<!-- Common JS -->
		<script src="<?=base_url()?>/public/admin/js/common.js"></script>
	</body>
</html>