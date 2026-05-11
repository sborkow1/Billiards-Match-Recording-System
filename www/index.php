<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Billiards Homepage</title>

  <link rel="icon" href="img/favicon.ico">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    .hero-image {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }

    .main-content {
      padding: 60px 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Billiards Website</a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Image Section -->
  <img
    src="https://images.unsplash.com/photo-1506744038136-46273834b3fb"
    alt="Nature"
    class="hero-image"
  />

  <!-- Main Text -->
  <section class="main-content container">
    <h1 class="display-4">Welcome to our website.</h1>

    <p class="lead mt-4">
      This is a simple Bootstrap webpage template with a navigation bar,
      a large image, and some main content text.
    </p>

    <button class="btn btn-primary btn-lg mt-3">
      Click Here
    </button>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>