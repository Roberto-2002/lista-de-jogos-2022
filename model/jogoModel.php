<?php 

function inserirJogo($conn,$nomejogousu,$valorjogousu,$generojogousu,$qtdjogousu,$datalancamentojogusu,$studiojogousu) {



$query = "INSERT INTO `tbjogos` (`idjogodusu`, `nomejogousu`, `generojogousu`, `qtdjogousu`, `datalancamentojogousu`, `studiojogousu`) VALUES (NULL,'{$nomejogousu}','{$valorjogousu}','{$generojogousu}','{$qtdusu}','{$datalancamentojogousu}','{$studiojogousu}";


$dados = mysqli_query($conn,$query);
return $dados; 

};

function visuUsuarioNome($conn,$nomeusu){
    $query = "select * from tbusuario where nomeusu like '%{$nomejogousu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
     
};

function visuUsuarioEmail($conn,$emailusu){
    $query = "select * from tbusuario where emailusu like '%{$emailusu}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
     
};
function visuUsuarioCodigo($conn,$codigousu){
    $query = "select * from tbusuario where idusu = {$codigousu}";
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
     
};


?>