<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/poliban.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <script src="assets/js/fontawesome.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>
      <?= APPNAME; ?>
    </title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-<?= darkMode() ?> bg-<?= darkMode() ?>">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/images/poliban.png" alt="Tes" width="40" class="d-inline-block align-text-middle mx-3">
          <?= APPNAME; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <?php foreach($pages as $page => $link): ?>
            <?php if(!singleWord($page)) continue; ?>
            <li class="nav-item">
              <a class="nav-link <?= activePage([$page]); ?>" href="<?= linkTo($page); ?>"><?= ucfirst($page); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </nav>
    
    <?php isset($_GET['page']) ? loadView($pages[$_GET['page']]) : loadView('home.php') ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
