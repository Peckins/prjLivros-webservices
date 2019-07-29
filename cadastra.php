<?PHP
  // cadastrando usuário
  try {
    include('db_sistem/insert.php');
  } catch (\Exception $e) {
    echo "erro ao cadastrar: ".$e;
  }
