<?php 
    $results = '';
    foreach($user as $user){
        
        $results.= '<tr>
                        <td>'.$user->id.'</td>
                        <td>'.$user->name.'</td>
                        <td>'.$user->birthdate.'</td>
                        <td>'.$user->cpf.'</td>
                        <td>'.$user->gender.'</td>
                        <td>
                            <a href="editar.php?id='.$user->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="excluir.php?id='.$user->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
    }
//<td>'.date('d/m/Y',strtotime($user->data)).'</td>'
?>
<main>
    <a href="cadastrar.php">
        <button class="btn btn-success">Nova</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>nome</th>
                <th>data nascimento</th>
                <th>cpf</th>
                <th>genero</th>
            </tr>
        </thead>
        <tbody>
            <?=$results?>
        </tbody>
    </table>
</main>