<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-6">
    <label for="inputNomeJogo" class="form-label">Nome do Jogo</label>
    <input type="text" name="nomejogousu" class="form-control" id="inputNomeJogo" required>
  </div>
  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor do Jogo</label>
    <input type="number" name="valorjogousu" class="form-control" id="inputValor" required>
  </div>
  <div class="col-6">
    <label for="inputGen" class="form-label">Genero do Jogo</label>
    <input type="text" name="generojogousu" class="form-control" id="inputGen"  required>
  </div>
  <div class="col-6">
    <label for="inputQtd" class="form-label">Quantidade</label>
    <input type="text" name="qtdjogousu" class="form-control" id="inputQtd" required>
  </div>
  <div class="col-md-4">
    <label for="inputDataLancamento" class="form-label">Data de Lançamento do Jogo</label>
    <input type="date" name="datalancamentojogousu" class="form-control" id="inputDataLancamento" required>
  </div>
  <div class="col-4">
    <label for="inputStudio" class="form-label">Studio</label>
    <input type="text" name="studiojogousu" class="form-control" id="inputStudio"  required>
    <div class="col-5">
  </div>
  </div>

 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceita-se os termo de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</form>

</div>

<?php
include_once("footer.php");
?>
