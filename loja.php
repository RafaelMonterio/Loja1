<?php
include 'conexao.php';
include 'cabecalho.php';

if (!$pdo) {
  die('<p>Erro na conexão com o banco de dados.</p>');
}
?>
<div class="container">
  <div class="vitrine-title">
    <h2>Catálogo</h2>
    <div><small>Livros disponíveis</small></div>
  </div>

  <div class="vitrine-grid">
    <?php
  $sql = "SELECT * FROM produtos";
  try {
    $stmt = $pdo->query($sql);
    $produtos = $stmt->fetchAll();
  } catch (PDOException $e) {
    echo '<p>Erro ao carregar produtos.</p>';
    $produtos = [];
  }
  if (empty($produtos)) {
    echo '<p>Nenhum produto encontrado.</p>';
  } else {
    foreach ($produtos as $produto) {
     
      echo '<article class="card">';
      
      echo '<h3>'.htmlspecialchars($produto['nome']).'</h3>';

      echo '<div class="meta">';
      echo '<div class="price">R$ '.htmlspecialchars(number_format($produto['preco'],2,",",".")).'</div>';
      echo '<form method="post" action="carrinho.php">';
      echo '<input type="hidden" name="produto_id" value="'.intval($produto['id']).'">';

      
      echo '</form>';
      echo '</div>';
      echo '</article>';
    }
  }
    ?>
  </div>
</div>
<?php include 'rodape.php'; ?>
