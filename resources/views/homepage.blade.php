<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <div class="container">
        <form method="get">
            <label for="nome">        
                <input type="text" name="nome" id="task-input" placeholder="Nome da Tarefa">               
            </label><br>
            <label>
                <input type="submit" value="Salvar" id="submit-input">
            </label> 
        </form>          
    </div>
    <label><?php echo $nome_tarefa?></label>
</body>
</html>