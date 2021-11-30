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
  <title>THE LIST</title>
  <script src="https://kit.fontawesome.com/0ef7f41e46.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">THE LIST</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main class="main-content">
        <?php if ($msg != ''): ?>
          <div class="alert <?php echo $alert; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <h2>ARE YOU READY TO START THE DAY?</h2>
        
        <p class="lead">
          <!-- <a href="#" class="btn btn-lg btn-secondary" data-bs-toggle="modal" data-bs-target="#register"> -->
          <a href="#"  data-bs-toggle="modal" data-bs-target="#register">
          <img src="/img/sun.png" alt="sun" ></a>
        </p>
      </main>
      <footer class="mt-auto text-white-50">
        <a href="https://github.com/BrandonTaft" class="text-white"><i class="fab fa-github fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/brandonmtaft" class="text-white"><i class="fab fa-linkedin fa-2x"></i></i></a>
        <a href="https://www.brandontaft.net" class="text-white"><i class="fas fa-user-circle fa-2x"></i></i></i></a>
        <p>&copy <a href="https://www.brandontaft.net" class="text-white">Brandon Taft 2021</a> </p>
      </footer>
    </div>
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registerLabel">THE LIST</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <p class="modal-text">Check the boxes as you complete the tasks. </p>
          </div>

          <div class="modal-body"> 
            
            
            
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for=""class="form-label">Check Email</label>
        <input type="checkbox" class="check"  name="checkList" value="Checked Email"><br />
        <label for=""class="form-label">Submit Applicatons</label>
        <input type="checkbox" class="check" name="checkList" value="Submitted Applications"><br />
        <label for=""class="form-label">Follow Up With Potential Employers</label>
        <input type="checkbox" class="check" name="checkList" value="Followed Up"><br />
        <label for=""class="form-label">Develop Skills</label>
        <input type="checkbox" class="check" name="checkList" value="Practiced/Studied"><br />
        <label for=""class="form-label">Work on Algorithms</label>
        <input type="checkbox" class="check" name="checkList" value="Worked Algorithms"><br />
        <label for=""class="form-label">Make A New Connection</label>
        <input type="checkbox" class="check" name="checkList" value="Made Connection"><br />
        <label for=""class="form-label">Take A Break/ Relax</label>
        <input type="checkbox" class="check" name="checkList" value="Relaxed"><br />
        <label for=""class="form-label">Exercise</label>
        <input type="checkbox" class="check" name="checkList" value="Exercised"><br />
        

              <!-- <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" name="name"  value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"  value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
              </div> -->
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
<script src="checklist.js"></script> 
</body>
</html>