<main>
    <a href="indexUser.php">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3">Excluir cadastro</h2>

    <form method="post">
        <div class="form-group">
            <p>Deseja exlcuir o cadastro?<strong><?=$obUser->name?></strong></p>
        </div>

        <div class="from-group">   
            <a href="indexUser.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form> 

</main>