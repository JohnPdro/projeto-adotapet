<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>


<br>
<body>
    <main>
        <form action="cadastro.php" method="post" autocomplete="on">

            <div class="posicaoPerguntas">
                <label for="inome">Nome*</label>
                <input type="text" name="nome" id="inome" placeholder="Digite o nome do seu pet aqui!"
                    autocomplete="nickname" required>
            </div>
            <div class="posicaoPerguntas">

                <label for="iespecie">Espécie*</label>
                <input type="" name="especie" id="iespecie" required>
            </div>

            <div clas="posicaoPerguntas">
                <label for="">Sexo*</label>
                <div class="lblSexo">
                    <input type="radio" name="sexo" id="isexom" checked><label for="isexom">Macho</label>
                    <input type="radio" name="sexo" id="isexof"><label for="isexof">Fêmea</label>
                </div>
            </div>

            <div class="posicaoPerguntas">
                <label for="iidade">Idade:</label>
                <input type="number" name="idade" id="iidade" placeholder="Aproximadamente">
            </div>

            <div class="posicaoPerguntas">
                <label for="itamanho">Tamanho*</label>
                <select name="tamanho" id="itamanho" required>
                    <option value="" selected>---Esolha---</option>
                    <option value="pequeno">Pequeno</option>
                    <option value="medio">Médio</option>
                    <option value="grande">Grande</option>
                </select>
            </div>

            <div class="posicaoPerguntas">
                <label for="iestado">Estado*</label>
                <select name="estado" id="iestado">
                    <option value="" selected>---Esolha---</option>
                    <option value="SP">São Paulo</option>
                </select>
            </div>

            <div class="posicaoPerguntas">
                <label for="icidade">Cidade*</label>
                <select name="cidade" id="icidade">
                    <option value="" selected>---Esolha---</option>
                    <option value="americana">Americana</option>
                    <option value="santaBarbara">Santa Barbara D'Oeste</option>
                    <option value="sumare">Sumaré</option>
                    <option value="novaOdessa">Nova Odessa</option>
                    <option value="limeira">Limeira</option>
                    <option value="hortolandia">Hortolândia</option>
                    <option value="piracicaba">Piracicaba</option>
                    <option value="campinas">Campinas</option>
                </select>
            </div>

            <div class="posicaoPerguntas">
                <label for="isobre">Fale sobre seu pet:</label>
                <textarea name="sobrePet" id="isobre" cols="30" rows="10"></textarea>
            </div>

            <div class="posicaoPerguntas">
                <label for="ifoto">Foto do seu pet</label>
                <input type="file" name="foto" id="ifoto" required>
            </div>

            <fieldset>
                <legend>Informações Adicionais</legend>

                <input id="btnNecessidades" type="button" name="necessidadesEsp" id="incssddESP" value="Necessidades Especiais">
                <input type="button" name="carinhoso" id="icarinhoso" value="Carinhoso">
                <input type="button" name="calmo" id="icalmo" value="Calmo">
                <input type="button" name="agitado" id="iagitado" value="Agitado">
                <input type="button" name="docil" id="idocil" value="Dócil">
                <input type="button" name="bravo" id="ibravo" value="Bravo">
                <input type="button" name="medroso" id="imedroso" value="Medroso">
                <input type="button" name="independente" id="iindependente" value="Independente">
                <input type="button" name="sociavel" id="isociavel" value="Sociável com animais">
            </fieldset>

            <input id="btnEnviar" type="submit" value="Registrar Pet">
        </form>
    </main>


<?php
include "../includes/rodape.php";
?>