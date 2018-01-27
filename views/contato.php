
<title>Contato - SALGADOS AKIO</title>
<div class="container-fluid">
    <h2 class="text-center">Faça o seu cadastro e recebe as nossas noticias</h2></br>

    <form class="form-group-sm" method="POST">
   <div class="form-group">
    <label for="nome">Nome:</label>
    <input name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome completo">
  </div>
         <div class="form-group">
    <label for="fone">Telefone:</label>
    <input name="telefone" type="text" class="form-control" id="fone" placeholder="digite seu telefone de contato">
  </div>
      
    <div class="form-group">
    <label for="email">Email:</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="digite seu email">
  </div>
         
    
       
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar">
   
     
        </div>
        <div class="danger">
        <?php if (isset($erro) && !empty($erro)): ?>
     <div class="alert alert-danger"><?php echo $erro; ?></div> 
       <?php endif; ?>
        </div>
        <div class="danger">
        <?php if (isset($ok) && !empty($ok)): ?>
     <div class="alert alert-success"><?php echo $ok; ?></div> 
       <?php endif; ?>
        </div>
</form>
  
    <div class="form-group">
    <address class="text-info address">
        <h2>Onde nos encontrar?</h2>    
Endereço: Avenida São Paulo, nº828 - Bairro Jacaré - Distrito Jacaré - Cabreúva/SP. Ao lado da Pastelaria Akio!</br>
Telefone fixo:   <?php    echo $value = $viewData['telefone'];  ?></br>
Celular: <?php    echo $value = $viewData['celular'];  ?></br>
Email: <?php    echo $value = $viewData['email'];  ?></br>

<hr/>
    <img src="<?php BASE_URL ?>assets/images/foto_estabelecimento_frontal.png" width="200" height="200" class="img-rounded img-responsive">
    
    </address>
    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.963958766659!2d-47.06167538459018!3d-23.244398555849436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf397d341e59af%3A0x9d37d8833d8e721e!2sAv.+S%C3%A3o+Paulo%2C+828+-+Jandim+Andre%2C+Cabre%C3%BAva+-+SP%2C+13315-000!5e0!3m2!1spt-BR!2sbr!4v1503893598450" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
          <div class="mapamobile">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.963958766659!2d-47.06167538459018!3d-23.244398555849436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf397d341e59af%3A0x9d37d8833d8e721e!2sAv.+S%C3%A3o+Paulo%2C+828+-+Jandim+Andre%2C+Cabre%C3%BAva+-+SP%2C+13315-000!5e0!3m2!1spt-BR!2sbr!4v1503893598450" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
       <div class="mapamobile2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.963958766659!2d-47.06167538459018!3d-23.244398555849436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf397d341e59af%3A0x9d37d8833d8e721e!2sAv.+S%C3%A3o+Paulo%2C+828+-+Jandim+Andre%2C+Cabre%C3%BAva+-+SP%2C+13315-000!5e0!3m2!1spt-BR!2sbr!4v1503893598450" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
    </div>
  
   </div>