<?php
session_start();

// Destrua todas as variáveis de sessão
session_unset();

// Destrua a sessão
session_destroy();

// Redirecione o usuário para a página de login ou outra página
header("Location:index1.php");
exit();
?>
