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
        <form method="POST" action="{{ url('/homepage/create-task') }}">
            @csrf
            <label for="nome">        
                <input type="text" name="nomeTarefa" id="task-input" placeholder="Nome da Tarefa">               
            </label><br>
            <label>
                <input type="submit" value="Salvar" id="submit-input">                
            </label> 
        </form>         
    </div>
    <div class="container-1">
        <?php
            foreach($tasks as $task){
                
                ?>
                    <div class="content">
                        <label>
                            <?php echo$task->nomeTarefa?>                          
                        </label>
                    </div>
                    <a href="homepage/deletar/<?php echo $task->idTarefa?>"><img src="\img\icon-apagar.png" alt="Deletar"></a><br>
                <?php
            }
        ?>
    </div>      
</body>
</html>