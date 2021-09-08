<?php include_once"config.php";?>
<?php 
 $id = $_GET['id'];
 $conn = mysqli_connect( $servidor, $dbusuario, $dbsenha, $dbname);
 mysqli_set_charset($conn, 'utf8');
 $sql = "SELECT * FROM tbcliente WHERE id='$id'";
 $result = mysqli_query($conn, $sql );
 while ($linha = mysqli_fetch_array($result)){
  $id = $linha['id'];
  $nome = $linha['nome'];
  $endereco = $linha['endereco'];
  $estado = $linha['estado'];
  $telefone = $linha['telefone'];
  $celular = $linha['celular'];
  $email = $linha['email'];

 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>EDITAR</title>
</head>
<body>

    <!--/Busca-->

    <script>
  function deleta_cliente(){
      if(confirm("Deletar esse Cliente ?"))
      document.forms[0].submit();
   else 
    return false; }
     
</script>
 
<div class="container-fluid">
    <?php include_once"menu.php" ?>
    <label>Pesquisa</label>
    <form class="col-md-4 d-flex" method="GET" action="busca.php">
        <input  class="form-control" type="text" name="busca" value="">
        <button class="btn btn-primary" type="submit">OK</button>
    </form>
</div>
    <!--//Busca-->



<!-- Enviar ao banco de dados-->
   <div class="container-fluid">
     <h2>EDITAR</h2>
     <h1> <?php echo $nome; ?> </h1>
     <form method="POST" action="atualizar.php">
     <input type="text" hidden="true" name="id" value="<?php echo $id;?>">
         <div class="form-group col-md-6">
            <label for="">Nome : </label>
            <input class="form-control" type="text" name="nome" value="<?php echo $nome ;?>" >
         </div>

         <div class="form-group col-md-6">
             <label for="">Endereço : </label>
             <input class="form-control" type="text" name="endereco" value="<?php echo $endereco ;?>">
         </div>   

         <div class="form-group col-md-4">
              <label for="">Estado : </label>
               <input class="form-control" type="text" name="estado" value="<?php echo $estado; ?>">
         </div>

         <div class="form-group col-md-3">
               <label for="">Telefone : </label>
               <input class="form-control" type="text" name="telefone" value="<?php echo $telefone ;?>">
         </div>
         
         <div class="form-group col-md-3">
            <label for="">Celular: </label>
             <input class="form-control" type="text" name="celular" value="<?php echo $celular; ?>">
         </div>
        
         <div class="form-group col-md-6">
             <label for="">E-mail: </label>
             <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" >
         </div>   

         <button type="submit">SALVAR</button>
     </form>
     </div>
     
<!--//Enviar ao banco de dados-->






     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>