<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>
  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-4 shadow-3 text-center">
            <h2 class="fw-bold mb-5">Connectez-vous</h2>
            <form action="/login" method="POST">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input name="username" value="adamae@gamil.com" type="email" placeholder="votre email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input value="adama123" name="password" type="password" placeholder="votre mot de pass" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>
              <button type="submit" class="btn btn-primary btn-block mb-4">
                CONNEXION
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
          <!--   <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" /> -->
          <img src="<?= Constantes::WEB_ROOT . "images/login-phone.jpg " ?>" class="w-100 rounded-4 shadow-4" alt="">
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->