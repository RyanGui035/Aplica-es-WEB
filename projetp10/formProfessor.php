<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .menu a.active {
            background-color: #4CAF50;
            color: white;
        }
        .menu a#sair {
            float: left;
            color: red;
        }
    </style>


<div class="menu">
    <a href="menu.php" class="active">Home</a>
    <a href="formProfessor.php">Professor</a>
    <a href="fromAluno.php">Alunos</a>
    <a href="fromDisciplina">Disciplinas</a>
    <a href="index.php" id="sair">Sair</a>
</div>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Cadastro de Professor</h2>
        <form action="ControleProfessor.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="salario">Salário:</label>
            <input type="number" id="salario" name="salario" required>

            <label for="nivel">Nível:</label>
            <select id="nivel" name="nivel">
                <option value="graduacao">Graduação</option>
                <option value="mestrado">Mestrado</option>
                <option value="doutorado">Doutorado</option>
            </select>
            <input type="submit" value="Gravar">
        </form>
    
    </div>
    <div class="container">
        <h2>Listar Professores Existentes</h2>
      
        <center>
            <a href='listarProfessor.php'>LISTAR</a>
</body>
</html>
