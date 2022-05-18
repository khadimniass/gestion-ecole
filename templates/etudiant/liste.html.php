<div class="container mt-5 ml-5">
<h1 class="text-center mb-5"><?= $titre ?></h1>
    <table class="table table-hover">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Login</th>
            <th>Adresse</th>
            <th>Matricule</th>
            <th>sexe</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i = 1;
        foreach ($etudiants as $etud) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td class="font-weight-bold"><?= $etud->nom_complet ?></td>
                <td><?= $etud->login ?></td>
                <td><?= $etud->adresse ?></td>
                <td><?= $etud->matricule ?></td>
                <td><?= $etud->sexe ?></td>

                <td class="text-center">
                    <button class="btn btn-primary btn-sm ">modifier</button>
                    <button class="btn btn-outline-danger btn-sm ">suprimer</button>
                    <button class="btn btn-info btn-sm ">details</button>
                </td>
            </tr>
        <?php    }
        ?>
    </table>

</div>