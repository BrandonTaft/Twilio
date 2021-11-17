<?php
    require  'form_validation.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Welcome To My House">
  <title>My House</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">My House</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>
      <main class="main-content">
        <?php if ($msg != ''): ?>
          <div class="alert <?php echo $alert; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <h1>HELLO!</h1>
        <p class="lead">WELCOME TO MY HOUSE!!!</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary" data-bs-toggle="modal" data-bs-target="#register">Register Now</a>
        </p>
      </main>
      <footer class="mt-auto text-white-50">
        <p>Made With Love <a href="#" class="text-white">The Beauty Salon</a>, by <a
            href="#" class="text-white">Ijeoma Nelson</a>.</p>
      </footer>
    </div>
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerLabel">The Beauty Salon</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body"> 
            <p class="modal-text">Leave your name + email.</p>
            <p class="modal-text">We'll get back to you soon!</p>
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
    crossorigin="anonymous">
</script> 
</body>
</html>