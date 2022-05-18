<div class="container mt-5 ml-5">

    <table class="table table-bordeless">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Login</th>
            <th>Role</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i = 1;
        foreach ($rp as $rpp) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td class="font-weight-bold"><?= $rpp->nom_complet ?></td>
                <td><?= $rpp->login ?></td>
                <td><?= $rpp->role ?></td>
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