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
    <div class="row g-0 align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-6 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Connexion</h2>
            <form action="index.php?ctl=utilisateur&action=validConnect" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="form-outline mb-4">
                <input type="text" name="login" class="form-control" />
                <label class="form-label" for="login">Pseudo : </label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label" for="password">Mot de passe : </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Se connecter
              </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block   -->
