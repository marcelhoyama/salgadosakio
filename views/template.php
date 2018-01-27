<!DOCTYPE html> <!-- para usufruir do html5 -->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewport" content= "width=device-width, user-scalable=no" />
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->


        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
        <link href="<?php echo BASE_URL; ?>assets/css/normalize.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>


    </head>

    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">


                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="./" class="navbar-brand"> Akio Pasteis e Salgados</a>
                    <a href="https://www.facebook.com/akio.shimohara.1"><img src="<?php BASE_URL; ?>assets/images/facebookcolor.png" width="32" height="32" style="margin-top: 8px"/></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="<?php BASE_URL; ?>home">HOME</a></li>
                        <li><a href="<?php BASE_URL; ?>sobre">SOBRE</a></li>
                        
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUTOS<span class="caret"></span></a>
                          
    <ul class="dropdown-menu">
        <li><a href="produto">Todos</a></li>
        <li><a href="pasteis">Pastéis</a></li>
        <li><a href="salgados">Salgados</a></li>
        <li><a href="minipasteis">Mini-Pastéis</a></li>
        <li><a href="minisalgados">Mini-Salgados</a></li>
    </ul>
  </li>
                            </li>
                        <li><a href="<?php BASE_URL; ?>contato">CONTATO</a></li>


                    </ul>



                </div>
            </div>
        </nav>


         
        

        
                <!--  aqui onde vai o corpo das paginas do sistema -->
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>




            
          
    </body>
  
    <footer>
        <div class="rodape">
            SALGADOSAKIO 2010 Todos Direitos Reservados. Desenvolvido por Marcel Hoyama
        </div>
    </footer>

</html>
