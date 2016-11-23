
<div class="input-group">

    <fieldset>
        <div class ="alinhado-centro borda-base espaco-vertical">

            <!-- Form Name -->
            <legend>Adicionar</legend>
            <form name="formCadastro" id="formCadastro" class="form-horizontal" enctype="multipart/form-data" method="POST" action="http://localhost/pokemon/index.php/Cadastro/cadastrar">
                <label class="input-group">NOME:</label>
                <div class="input-group">
                    <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required="">
                </div>
                <br>
                <label class="input-group">DATA DE CAPTURA:</label>
                <div class="input-group">

                    <input id="data_captura" type="text" class="form-control" name="data_captura" placeholder="AAAA-MM-DD" required="">
                </div>
                <br>
                <div class="dropdown">
                    <label class="input-group">TIPO:</label>

                    <select data-toggle="dropdown" id="tipo_pokemon" name="tipo_pokemon" class="btn btn-danger dropdown-toggle" required=""><span class="caret"></span>
                        <ul class="dropdown-menu">
                            <option value="" disabled selected hidden>TIPO DE POKEMON</option>
                            <option value="Verde">VERDE</option>
                            <option value="Laranja">LARANJA</option>
                            <option value="Vermelho">VERMELHO</option>

                        </ul>
                    </select>

                </div>
                <br>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">

                        <button type="submit" href="#" class="btn btn-primary"><i class="fa fa-sign-in"></i> Cadastrar</button>


                    </div>
                </div>


            </form>

    </fieldset>

</div>
