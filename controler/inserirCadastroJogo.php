<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogoModel.php");


extract($_REQUEST,EXTR_OVERWRITE);


if(inserirUsuario($conn,$nomejogousu,$valorjogousu,$generojogousu,$qtdjogousu,$datalancamentojogousu,$studiojogousu)){
echo("O jogo foram cadastro com sucesso !!!");
}else{
echo("O jogo esta incompleto, tente novamente !!!");

}



include_once("../view/footer.php");
?>