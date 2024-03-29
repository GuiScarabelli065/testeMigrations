<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NextMeal</title>

  <!-- Scripts -->
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.mask.min.js')); ?>"></script>
  <script>
      $(document).ready(function($) {
          $("#telefone").mask("(00) 0000-0000");
          $("#cep").mask("00000-000");

      });

  </script>

  <!-- Styles -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="<?php echo e(asset('css/utsukushi.css')); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo e(asset('css/footerDeDoido.css')); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo e(asset('css/Responsive.css')); ?>" rel="stylesheet" type="text/css">

</head>

<body>
  <!--NavBar-->
  <header>
    <div class="container">
      <img src="<?php echo e(asset('img/NextMeal.png')); ?>" alt="Rocketseat" />
      <div class="menu-section">
        <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
        <nav>
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#E">Aplicativo</a>
            </li>
            <li>
            <a id="btn-login" href="#Login">Login</a>
            </li>
            <li>
            <a id="btn-registro" href="#Registro">Registro</a>
            </li>
            <li>
              <a href="#Contato">Contato</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- -->
  <div id="modalLogin" class="modal">
    <div class="modal-content">
      <h2>Login</h2>
      <div class="corpin">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo e($errors->first()); ?>

        </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('autenticar')); ?>">
          <?php echo csrf_field(); ?>
          <label>Login: </label>
          <input type="text" name="login">

          <label>Senha: </label>
          <input type="password" name="senha">
          <div class="btn-login">

            <input type="submit" class="btn btn-success" value="Entrar">
            <a id="btn-abrirRegistro">Registrar-se</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  
  <div id="modalRegistro" class="modal">
    <div class="modal-content">
      <h2>Registro</h2>
      <div class="corpin">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo e($errors->first()); ?>

        </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('registrar')); ?>">
          <?php echo csrf_field(); ?>
          <label>Nome do restaurante: </label>
          <input type="text" class="form-control" name="nomeRestaurante"   value="<?php echo e($info->nomeRestaurante ?? ''); ?>">
          <br>

          <label>Cpf do restaurante: </label>
          <input type="text" class="form-control" name="cnpjRestaurante" id="cpf"   value="<?php echo e($info->cpfRestaurante ?? ''); ?>">
          <br>

          <label>Telefone do restaurante: </label>
          <input type="text" class="form-control" name="telRestaurante" id="telefone"   value="<?php echo e($info->telRestaurante ?? ''); ?>">
          <br>

          <label>E-mail do restaurante: </label>
          <input type="email" class="form-control" name="emailRestaurante"   value="<?php echo e($info->emailRestaurante ?? ''); ?>">
          <br>

          <label>Cep do restaurante: </label>
          <div class="input-group">
              <input type="text" class="form-control" name="cepRestaurante" id="cep"   value="<?php echo e($info->cepRestaurante ?? ''); ?>">
              <button type="button" class="btn btn-primary" id="validar">Validar</button>
          </div>
          <br>

          <label>Rua do restaurante: </label>
          <input type="text" class="form-control" name="ruaRestaurante" id="rua"   value="<?php echo e($info->ruaRestaurante ?? ''); ?>">
          <br>
          
          <label>Número do restaurante: </label>
          <input type="text" class="form-control" name="numRestaurante" id="numero"   value="<?php echo e($info->numRestaurante ?? ''); ?>">
          <br>
          
          <label>Bairro do restaurante: </label>
          <input type="text" class="form-control" name="bairroRestaurante" id="bairro"   value="<?php echo e($info->bairroRestaurante ?? ''); ?>">
          <br>
          
          <label>Cidade do restaurante: </label>
          <input type="text" class="form-control" name="cidadeRestaurante" id="cidade"   value="<?php echo e($info->cidadeRestaurante ?? ''); ?>">
          <br>
          
          <label>Estado do restaurante: </label>
          <input type="text" class="form-control" name="estadoRestaurante" id="estado"   value="<?php echo e($info->estadoRestaurante ?? ''); ?>">
          <br>

          <label>capacidade máxima do restaurante: </label>
          <input type="number" class="form-control" name="capMaximaRestaurante" value="<?php echo e($info->capMaximaRestaurante ?? ''); ?>">
          <br>

          <label>Tipo do restaurante: </label>
          <select name="tipoRestaurante" class="form-control">
              <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($tipo->idTipoRestaurante); ?>"><?php echo e($tipo->tipoRestaurante); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <br>

          <label>Foto do restaurante</label>
          <input type="file" name="fotoRestaurante" class="form-control">
          <br>

          <div class="btn-login">
            <input type="submit" class="btn btn-success" value="Registrar">
            <a id="btn-abrirLogin">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
<!---->

  <img class="back" src="<?php echo e(URL::asset('img/beck.png')); ?>">
  <!--NavBar-->
  <main>

    <section class="hero">
      <div class="container">
        <div class="Info">
          <h2>Next Meal</h2>
          <p>O Next Meal é uma solução web e mobile para reduzir as filas de restaurantes,
            ajudando mais de 10mil babacas desinformados por dia.</p>
        </div>
        <img class="image" src="<?php echo e(URL::asset('img/logoNext.png')); ?>" />
      </div>
      </div>
    </section>

    <div class="Vantagens">
      <h2>Vantagens</h2>
      <div class="container">
        <div class="boxV">
          <h3>Esteja à frente da concorrência.</h3>
          <p>Conosco, o seu restaurante será movimentado da forma correta, onde poderão escolher o seu estabelecimento!
          </p>
        </div>
        <div class="boxV">
          <h3>Melhorar a logística do seu negócio.</h3>
          <p>Melhoria em organização, movimentação, vizibilidade, etc.
          </p>
        </div>
        <div class="boxV">
          <h3>Experiência que gera fidelidade do cliente.</h3>
          <p>Uma solução perfeita para você construir a fidelidade com seu cliente.
              O NextMeal é a ponte entre o seu negócio e o público-alvo.
          </p>
        </div>
        <div class="boxV">
          <h3>Optar pelo seu estabelecimento</h3>
          <p>Utilizando o nosso sistema de reservas o seu cliente estará ligado diretamente ao seu restaurante
             pois poderá escolher você!!
          </p>
        </div>
      </div>
      <div class="bottonV">
        <div class="letsGo">
          <a href="#"> Vamos lá?</a>
        </div>
      </div>
    </div>

    <div class="Download" id="Download">
      <div class="container">
        <img class="boxIMG" src="<?php echo e(URL::asset('img/dwon.png')); ?>">
        <div class="box">
          <h2>Download</h2>
          <div class="iOSAndroid">
            <button class="Android">
              <a href="#"><img src="<?php echo e(URL::asset('img/and.png')); ?>"></a>
              <h5 class="card-title">Play Store</h5>
            </button>
            <button class="iOS">
              <a href="#"><img src="<?php echo e(URL::asset('img/ios.png')); ?>"></a>
              <h5 class="card-title">App Store</h5>
            </button>
          </div>
        </div>
      </div>
    </div>

  </main>


  <footer>
    <section class="footer">
      <div class="Contato" id="Contato">
        <div class="footer-header">
          <h2>Redes sociais</h2>
          <ul class="rede">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
        <div class="footer-content">
          <h3>"Lazer Sem Filas"</h3>
          <p>@NextMeal</p>
        </div>
      </div>
    </section>
  </footer>

  <button id="topBtn"><i class="fas fa-arrow-up"></i></button>

  <script src="<?php echo e(asset('js/hamburguer.js')); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo e(asset('js/Modal.js')); ?>"></script>
  <script src="<?php echo e(asset('js/back-top.js')); ?>"></script>

</body>

</html><?php /**PATH C:\Users\Guilherme\Desktop\next-meal-web-main\resources\views/login.blade.php ENDPATH**/ ?>