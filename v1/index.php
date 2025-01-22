<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
  <title>Home Page</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg py-4 py-lg-0 shadow">
    <div class="container px-4">
      <img src="./img/logo.jpg" alt="Kimbet Logo">
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#top-navbar" aria-controls="top-navbar">
      <i class="lni lni-service-bell-1"></i>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="top-navbarLabel">
        <!-- Navbar content -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#top-navbar" aria-controls="top-navbar">
          <div class="d-flex justify-content-between p-3">
            <img src="./img/logo.jpg" alt="Kimbet Logo">
            <i class="lni lni-service-bell-1"></i>
          </div>
        </button>
        <ul class="navbar-nav ms-lg-auto p-4 p-lg-0">
        <li class="nav-item px-3 px-lg-0 py1 py-lg-4"> 
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item px-3 px-lg-0 py1 py-lg-4"> 
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Accomdations</a></li>
            <li><a class="dropdown-item" href="#">Team</a></li>
            <li><a class="dropdown-item" href="#">Book</a></li>
          </ul>
        </li>
        </ul>
      </div>
  </nav>
    <section id="welcome" class="py-5">
      <div class="container px-4">
        <div class="row">
          <div class="col-md-12">
            <h1 class="py-2 text-center fw-bold">Bootstrap Navbar</h1>
          </div>
          <div class="col-md-12 px-lg-0">
            <div class="welcome-description mt-4 text-center">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nisi itaque voluptatibus id ratione temporibus minima adipisci nemo magnam, quod tempore, voluptas quaerat earum error vel natus voluptates architecto. Iure!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nisi itaque voluptatibus id ratione temporibus minima adipisci nemo magnam, quod tempore, voluptas quaerat earum error vel natus voluptates architecto. Iure!
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nisi itaque voluptatibus id ratione temporibus minima adipisci nemo magnam, quod tempore, voluptas quaerat earum error vel natus voluptates architecto. Iure!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>    

      <!-- Bootstrap JS Bundle -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>