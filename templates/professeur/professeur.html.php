<div class="mt-5">
<table class="table border">
    <tbody>
        <head>
    <tr class="bg-info">
        <th>#</th>
        <th>Nom Complet</th>
        <th>Grade</th>
        <th class="text-center">Actions</th>
    </tr>
    <?php foreach ($professeurs as $prof) { ?>
        <tr>
                <td> <?= $id ++ ?> </td>
                <td> <?= $prof->nom_complet ?> </td>
                <td> <?= $prof->grade ?> </td>
            <td>
                <button class="btn btn-primary btn-sm ">modifier</button>
                <button class="btn btn-outline-danger btn-sm ">suprimer</button>
                <button class="btn btn-info btn-sm ">details</button>
            </td>
        </tr>
    <?php } ?>
        </head>
    </tbody>
</table>
</div>
