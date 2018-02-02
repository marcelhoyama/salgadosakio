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
        <?php
        $pagina = "pagina";
        if ($pagina == "pagina") {
            ?>
            <script>

                $(document).ready(function () {
                    $('#myModal').modal('show');
                });

            </script>

        <?php }
        ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">  <p class="text-center text-danger">Novidades! Por tempo limitado...</p></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <p class="text-center">Salgados de Bar</p>
                                        <hr>
                                        <p class="text-xl-left">Risole de Palmito </p>
                                        <hr>
                                        <p class="text-left">Encomende já...</p>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <p class="text-center">Mini Salgados</p>
                                        <hr>
                                        <p class="text-xl-left">Mini Almofadinha de Calabresa </p>
                                        <hr>
                                        <p class="text-left">Encomende já...</p>

                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="javascript:;" onclick="pedido()"> <button type="button" class="btn btn-primary">Fazer Pedido</button></a>
                    </div>
                </div>
            </div>
        </div>


            <script>
function pedido(){
     
                    $('#myModalpedido').modal('show');
                $('#myModal').modal('hide');

}
              
            </script>

       
        <!-- Modal -->
        <div class="modal fade" id="myModalpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><p class="text-danger text-center">Nossos Contatos</p></h4>
                    </div>
                    <div class="modal-body">
                        Endereço: Avenida São Paulo, nº828 - Bairro Jacaré - Distrito Jacaré - Cabreúva/SP.
                        <p> Ao lado da Pastelaria Akio!</p></br>
Telefone fixo:   <?php    echo $value = $viewData['telefone'];  ?></br>
Celular: <?php    echo $value = $viewData['celular'];  ?></br>
Email: <?php    echo $value = $viewData['email'];  ?></br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   </div>
                </div>
            </div>
        </div>


        <!--  aqui onde vai o corpo das paginas do sistema -->
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>






    </body>

    <footer>
        <div class="rodape">
            SALGADOSAKIO © 2010 – <?php echo date('Y'); ?> Todos Direitos Reservados. Desenvolvido por Marcel Hoyama
        </div>
    </footer>

</html>
