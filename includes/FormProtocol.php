<main>
    <a href="indexProtocol.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <legend>Dados do protocolo</legend>
            <table cellspacing="10">
                <tr>
                    <td>
                        <label for="description">Descrição: </label>
                    </td>
                    <td align="left">
                        <textarea type="text" name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="deadline">Prazo: </label>
                    </td>
                    <td align="left">
                        <input type="date" name="deadline">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="user">Contribuente: </label>
                    </td>
                    <td>
                        <select name="user">
                            <?php
                            use \App\Entity\User;
                            // Fetch users from the database
                            $users = \App\Entity\User::getUsers(); // Ensure the correct namespace is used

                            // Loop through the users to populate the dropdown options
                            foreach ($users as $user) {
                                echo "<option value=\"{$user->id}\">{$user->name}</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>           
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
</main>