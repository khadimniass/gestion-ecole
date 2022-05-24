<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active " href="/personnes">Liste des personnes</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Etudiant</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/creerEtudiant">Creer etudiant</a>
                        <a class="dropdown-item" href="/listerEtudiant">liste des etudiants</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resposable Pedagogique</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/creer-rp">Inscrire RP</a>
                        <a class="dropdown-item" href="/lister-rp">lister</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Professeur</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/creer-professeur">Creer profs</a>
                        <a class="dropdown-item" href="/liste-professeur">liste des prof</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Les Attachés</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/liste-attacher">Creer AC</a>
                        <a class="dropdown-item" href="/creer-attacher">lister</a>
                    </div>
                </li>
            </ul>
            <a href="/logout" class="btn btn-danger">
                deconnecter
            </a>
        </div>
    </div>
</nav>
