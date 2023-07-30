<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/icons/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/normalize.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/javascript.js"></script>
    <title>Portifólio</title>
</head>
<body>
    <div class="vh-100 gradient-custom" style="background-color: #212F3C;">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="row w-100">
                <div class="col-md-6 offset-md-3 col-lg-3 offset-lg-4">
                    <div class="rounded-4 bg-dark p-4">
                        <div class="d-inline gap-2 d-flex">
                            <button class="active btn btn-outline-primary w-50" id="login-form-link">Login</button>
                            <button class="btn btn-outline-primary w-50" id="register-form-link">Register</button>
                        </div>
                        <div class="text-center pt-3">
                            <i class="bi bi-person-circle" style="font-size: 60px; color: lightgrey;"></i>
                            <!--FORM LOGIN-->
                            <form id="login-form" action="manager/login.php" method="post" role="form" style="display: block;">
                                <div id="sucesso" class="alert alert-success" role="alert" hidden>
                                    Cadastro realizado com sucesso!
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input type="text" class="form-control" id="user" placeholder="User" name="user" required>
                                    <label for="user">User</label>
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input type="password" class="form-control" id="senha" placeholder="Password" name="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <button class="btn btn-lg btn-outline-primary mt-3 w-100" type="submit">Login</button>
                            </form>
                            <!--FORM REGISTER-->
                            <form id="register-form" action="manager/register.php" method="post" role="form" style="display: none;">
                                <div id="erroEmail" class="alert alert-danger" role="alert" hidden>
                                    <i class="bi bi-exclamation-triangle me-1" style="color: red;"></i> E-mail já cadastrado!
                                </div>
                                <div id="erroUser" class="alert alert-danger" role="alert" hidden>
                                    <i class="bi bi-exclamation-triangle me-1" style="color: red;"></i> Usuário já cadastrado!
                                </div>
                                <div id="erroData" class="alert alert-danger" role="alert" hidden>
                                    <i class="bi bi-exclamation-triangle me-1" style="color: red;"></i> Usuário deve ter mais de 10 anos!
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input type="text" class="form-control" id="user" name="user" placeholder="User" required>
                                    <label for="user">User</label>
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail" required>
                                    <label for="email">Your E-mail</label>
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input type="date" class="form-control" id="birth_date" name="bDay" placeholder="Birth Date" required>
                                    <label for="birth_date">Birth Date</label>
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input onkeyup="validaSenha()" type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-floating mt-3" style="color: gray;">
                                    <input onkeyup="validaSenha()" type="password" class="form-control" id="c_password" placeholder="Confirm Password" required>
                                    <label for="c_password">Confirm Password</label>
                                    <p id="confirmPass" style="color: white;"></p>
                                </div>
                                <button class="btn btn-lg btn-outline-primary mt-3 w-100 p-sm-3" type="submit" id="registerBt" disabled>Register</button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
