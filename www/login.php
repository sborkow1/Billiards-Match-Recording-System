<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Billiards Login</title>

  <link rel="icon" href="img/favicon.ico">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <style>
    body {
      background-color: #f4f6f9;
      height: 100vh;
    }

    .login-card {
      width: 100%;
      max-width: 400px;
      border-radius: 15px;
    }
  </style>
</head>
<body>

  <div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="card shadow p-4 login-card">

      <div class="text-center mb-4">
        <h2 class="fw-bold">Login</h2>
        <p class="text-muted">Sign in to your account</p>
      </div>

      <form>
        <!-- Email -->
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input
            type="email"
            class="form-control"
            placeholder="Enter username"
            required
          >
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            placeholder="Enter password"
            required
          >
        </div>

        <!-- Remember me -->
        <div class="form-check mb-3">
          <input
            class="form-check-input"
            type="checkbox"
            id="rememberMe"
          >
          <label class="form-check-label" for="rememberMe">
            Remember me
          </label>
        </div>

        <!-- Login button -->
        <button type="submit" class="btn btn-primary w-100">
          Login
        </button>
      </form>

      <!-- Footer -->
      <div class="text-center mt-3">
        <small class="text-muted">
          Don't have an account?
          <a href="#">Register</a>
        </small>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>