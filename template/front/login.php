<!DOCTYPE html>
<html>

<head>
      <title>Login</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
      <div class="container-fluid p-5 bg-primary text-white text-center">
            <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                        <form action="../../includes/controllers/AuthController.php" method="post" class="form">
                              <h3>Users Login form</h3>
                              <lable>Email</lable>
                              <input class="form-control" name="email" type="email" />
                              <lable>Password</lable>
                              <input class="form-control" name="password" type="password" /><br>
                              <button type="submit" class="btn btn-success" name="create">Login</button>
                        </form>
                  </div>
                  <div class="col-md-4"></div>
            </div>
      </div>
</body>

</html>