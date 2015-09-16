<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Upload de Imagens com phpOO</title>
</head>

<body>

<form method="post" action="imagemAction.php" enctype="multipart/form-data">
    <p>Entre com uma imagem:</p>
    <input type="file" name="arquivo[]" multiple /> <br />
    <input type="submit" value="CASDASTRAR" />
</form>

</body>
</html>




