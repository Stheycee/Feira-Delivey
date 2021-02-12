<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icone.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<nav>
    <div class="nav-wrapper red lighten-3">
      <a href="#" class="brand-logo">
        <img src="feira.jpg" width="150" height="65" class="d-inline-block align-top" alt="">
        Feira Delivery
      </a>

    </div>
  </nav>
    <div class="container">
        <div class="row">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <div class="card-login">
                    <div class="card">
                        <div class="card-header">

						<div class="limiter">
							<div class="container-login100">
								<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
									<form action="cadastrar_usuario.php" method="POST" class="login100-form validate-form">
										<span class="login100-form-title p-b-55">
											Cadastro
										</span>
										<div class="wrap-input100 validate-input m-b-16">
											<input class="input100" type="text" name="nome" placeholder="Nome">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<span class="lnr lnr-user"></span>
											</span>
										</div>
										<div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
											<input class="input100" type="text" name="email" placeholder="Email">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<span class="lnr lnr-envelope"></span>
											</span>
										</div>

										<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
											<input class="input100" type="password" name="senha" placeholder="Senha">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<span class="lnr lnr-lock"></span>
											</span>
										</div>

										<?php if (isset($_GET['login']) && $_GET['login'] == 'igual') { ?>
											<div class="alert alert-warning" role="alert">
												Email já cadastrado!
											</div>

										<?php } ?>

										<div class="container-login100-form-btn p-t-25">
											<button class="login100-form-btn">
												Cadastrar
											</button>
										</div>


										<div class="text-center w-full p-t-115">
											<span class="txt1">
												Ja é cadastrado(a)?
											</span>

											<a class="txt1 bo1 hov1" href="index.php">
												Faça o Login
											</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>