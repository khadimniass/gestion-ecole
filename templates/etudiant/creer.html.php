<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-4 mx-md-4">

                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                         style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Enregistrement d'un nouveau Etudiant</h4>
                                </div>

                                <form method="POST" action="/creerEtudiant">
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" class="form-control"
                                               placeholder="your full name" name="nomComplet"/>
                                        <label class="form-label" for="form2Example11">nom complet</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example11" class="form-control"
                                               placeholder="adresse" name="adress"/>
                                        <label class="form-label" for="form2Example11">Adresse</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <select name="sexe" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Veillez choisir le sexe</option>
                                            <option value="M">HOMME</option>
                                            <option value="F">FEMME</option>
                                        </select>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example11" class="form-control"
                                               placeholder="yourename@email.com" name="login"/>
                                        <label class="form-label" for="form2Example11">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input name="password" type="password" id="form2Example22" class="form-control" placeholder="your password"/>
                                        <label class="form-label" for="form2Example22">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input name="password2" type="password" id="form2Example22" class="form-control" placeholder="confirm your password"/>
                                        <label class="form-label" for="form2Example22">confirm Password</label>
                                    </div>

                                    <div class="text-center pt-1 pb-1">
                                        <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="ENREGISTRER ETUDIANT">
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4 bg-secondary">
                                <h4 class="mb-4">Les fonctions d'un attaché dans le system </h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>