<?PHP
  // conectando-se ao banco de dados
  try {
    include('connect.php');

  } catch (\Exception $e) {
    echo "erro ao conectar: ".$e;
  }

  // inserindo os dados no banco
  try {
    $titulo = $_GET['totulo'];
    $autor = $_GET['autor'];
    $ano = $_GET['ano'];
    $isbn = $_GET['isbn'];

    $insert = "insert into tb_livro values (default, '$titulo', '$autor', '$ano', '$isbn')";

    mysqli_query($conexao, $insert);
  } catch (\Exception $e) {
    echo "erro ao inserir dados: ".$e;
  }
