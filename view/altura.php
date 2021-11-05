<?php
$pessoa = $personamodel->listar();
?>

<div class="container">
    <div class="table-responsive">
        <br>
        <br>
        <table class="table">
            <tr class="table-primary">
                <th>Nome</th>
                <th>Altura</th>
            </tr>
            <?php foreach ($pessoa as $personamodel) : ?>
                <tr>
                    <td><?php echo $personamodel->getNome(); ?></td>
                    <td><?php echo number_format($personamodel->getAltura(), 2, '.', ',') . ' m'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php echo '<div><h3><span class="badge bg-primary">As alturas serão iguais após <strong>' . $ano . '</strong> anos.</span></h3></div>'; ?>