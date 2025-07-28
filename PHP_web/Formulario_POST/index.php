<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Cadastro.php" method="POST">
    <div>
        <input type="text" name="marca" placeholder="Digite a marca do carro">
    </div>
    <div>
        <input type="text" name="valor" placeholder="Digite o valor do carro"> 
    </div>
    <div>
        <input type="checkbox" name="opcionais[]" value="teto solar">Teto solar
    </div>
    <div>
        <input type="checkbox" name="opcionais[]" value="automatico">Automatico
    </div>
    <div>
        <input type="checkbox" name="opcionais[]" value="4x4">4x4
    </div>
    <div>
        <input type="submit" placeholder="Enviar">
    </div>

    </form>
</body>
</html>