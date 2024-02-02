<!DOCTYPE html>
<html>

<head>
      <title>Admin</title>
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
                        <form action="../../includes/controllers/HomeController.php" method="post" class="form">
                              <h3>Users create form</h3>
                              <lable>Name</lable>
                              <input class="form-control" name="name" type="text" />
                              <lable>Email</lable>
                              <input class="form-control" name="email" type="email" /><br>
                              <button type="submit" class="btn btn-success" name="create">Create</button>
                        </form>
                  </div>
                  <div class="col-md-4"></div>
            </div>
      </div>
</body>

</html>