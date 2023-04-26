<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/admin/css/login.css">
</head>
<body>
    <div class="login-box">
    <h2>Login</h2>
    <form action="index.php?area=admin&controller=login&action=doLogin" method="post">
        <div class="user-box">
        <input type="text" name="email" required="">
        <label>Tên đăng nhập</label>
        </div>
        <div class="user-box">
        <input type="password" name="password" required="">
        <label>Mật khẩu</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="">Đăng nhập</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>