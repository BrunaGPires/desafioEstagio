<?php
    // Initialize $obUser to avoid "Undefined variable" warnings
    $obUser = isset($obUser) ? $obUser : new \App\Entity\User();

    // Extract properties from $obUser
    $name = isset($obUser->name) ? $obUser->name : '';
    $birthdate = isset($obUser->birthdate) ? $obUser->birthdate : '';
    $cpf = isset($obUser->cpf) ? $obUser->cpf : '';
?>

<main>
    <a href="indexUser.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <legend>Dados Pessoais</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <label for="name">Nome completo: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="name" value="<?= $name ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="birthdate">Nascimento: </label>
                    </td>
                    <td align="left">
                        <input type="date" name="birthdate" value="<?= $birthdate ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cpf">CPF: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="cpf" size="15" maxlength="15" value="<?= $cpf ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gênero: </label>
                    </td>
                    <td align="left">
                        <select name="gender">
                            <option value="" hidden>Selecione o gênero</option>
                            <option value="female" <?= $obUser->gender === 'female' ? 'selected' : '' ?>>Feminino</option> 
                            <option value="male" <?= $obUser->gender === 'male' ? 'selected' : '' ?>>Masculino</option>
                            <option value="nb" <?= $obUser->gender === 'nb' ? 'selected' : '' ?>>Não-binário</option>
                            <option value="NA" <?= $obUser->gender === 'NA' ? 'selected' : '' ?>>Outro</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br />
            <legend>Endereço</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <label for="cidade">Cidade: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="cidade">
                    </td>
                    <td>
                        <label for="bairro">Bairro: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="bairro">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rua">Rua: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="rua">
                    </td>
                    <td>
                        <label for="numero">Numero: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="numero" size="4">
                    </td>
                    <td>
                        <label for="complemento">Complemento: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="complemento">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
</main>