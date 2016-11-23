<div id="homebody">
    <h2></h2>
    <div class ="alinhado-centro borda-base espaco-vertical">
    </div>
    <div class="row-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Data de Captura</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

                <tr class="danger">
                    <?php
                    foreach ($pokemon as $info) {
                        echo "<tr>";
                        echo "<td>" . $info->nome . "</td>";
                        echo "<td>" . $info->tipo_pokemon . "</td>";
                        echo "<td>" . $info->data_captura . "</td>";
                        echo "<td><a href='http://localhost/pokemon/index.php/Editar'><button type='submit' class='btn btn-primary'>Editar</button></a></td>";
                        echo"<td><a><button type='submit' class='btn btn-danger'>Excluir</button></a></td>";
                    }
                    ?>

                </tr>

            </tbody>
        </table>
    </div>
</div>
</div>
