<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Cadastro</title>
</head>
<body>
  <h1> Cadastrar Pessoa </h1>
    <form action="{{ route('cadastrar') }}" method="POST">
      @csrf

      <label for="">Nome:</label><br>
      <input type="text" name="name"><br>

      <label for="">Idade:</label><br>
      <input type="text" name="idade"><br>

      <label for="">Função:</label><br>
      <input type="text" name="função"><br><br>

      <input type="submit" value="Enviar">
    </form>
</body>
</html>

