<div class="container-fluid">
  <?php if (!isLoggedIn()): ?>
    <div class="row d-lg-none">
      <div class="col-6">
        <a class="btn btn-danger w-100  " href="/login.php">
          Sign In
        </a>
      </div>
      <div class="col-6">
        <a class="btn btn-danger w-100" href="/register.php">
          Sign Up
        </a>
      </div>
    </div>
  <?php endif; ?>

  <nav class="row navbar navbar-expand-lg navbar-light mt-2 mb-2">
    <a class="navbar-brand" href="/">
      <img src="/images/title.jpg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav w-100">
        <li class="nav-item active">
          <a class="nav-link" href="/howwework.php">HOW IT WORKS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shipping_calculator.php">SHIPPING CALCULATOR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/newpricing.php">PRICING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deals.php">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/frequently_asked_questions.php">F.A.Q.</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.php">CONTACT</a>
        </li>
        <li class="ml-auto">
        </li>
        <?php if (!isLoggedIn()): ?>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="/login.php">
              <button class="btn btn-danger" style="margin: -.5rem 0">Sign In</button>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="/register.php">
              <button class="btn btn-danger" style="margin: -.5rem 0">Sign Up</button>
            </a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="/logout.php">
              <button class="btn btn-danger" style="margin: -.5rem 0">Logout</button>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>
</div>
