<?php
//Encerrando a sessão
session_start();
session_unset();
session_destroy();

//Após o Logout, voltar a página de login
header('Location: index.php');