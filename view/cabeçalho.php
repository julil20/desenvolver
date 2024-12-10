<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/temaescuro.css">


    <?php if($paginaUrl === "principal"):?>
      <link rel="stylesheet" href="css/index.css">
    <?php endif; ?>
    <?php if($paginaUrl === "contato"):?>
        <link rel="stylesheet" href="css/contato.css">
        <link rel="stylesheet" href="css/validacao-contato.css">
    <?php endif; ?>

    <?php if($paginaUrl === "contato"):?>
        <link rel="stylesheet" href="css/contato.css">
        <link rel="stylesheet" href="css/validacao-contato.css">
    <?php endif; ?>
    <?php if($paginaUrl === "cadastrar-noticia" || $paginaUrl === "cadastrar-categoria" ):?>
        <link rel="stylesheet" href="css/contato.css">
        <link rel="stylesheet" href="css/validacao-contato.css">
    <?php endif; ?>