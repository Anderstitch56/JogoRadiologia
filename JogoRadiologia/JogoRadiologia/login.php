<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="wrapper">
        <form>
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Nome de usário" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Senha" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Lembrar de mim</label>
                <a href="#">Esqueceu sua senha?</a>
            </div>
            <button type="submit " class="btn">Entrar</button>
            <div class="register-link">
                <p>Não possui conta ? <a href="#"> Criar conta</a></p>
            </div>
        </form>
    </div>

</body>
</html>