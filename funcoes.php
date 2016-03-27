<?php
function carrega_pagina(){
    (isset($_GET['p']))? $pagina=$_GET['p'] : $pagina='home' ;
        if(file_exists('page_'.$pagina.'.php')):
        require_once('page_'.$pagina.'.php');
    else:
        require_once('page_home.php');
    endif;
}
function gera_titulos(){
    (isset($_GET['p']))? $pagina=$_GET['p'] : $pagina='home' ;
    switch($pagina):
        case 'apostilhas':
            $titulo='Apostilhas - GS Serviços';
            break;
        case 'cadastro':
            $titulo='Cadastro - GS Serviços';
            break;
        case 'contato':
            $titulo='Contato - GS Serviços';
            break;
        case 'css3':
            $titulo='CSS3 - GS Serviços';
            break;
        case 'cursos':
            $titulo='Cursos - GS Serviços';
            break;
        case 'html5':
            $titulo='HTML5 - GS Serviços';
            break;
        case 'ide':
            $titulo='IDE\'s - GS Serviços';
            break;
        case 'js':
            $titulo='JavaScript - GS Serviços';
            break;
        case 'login':
            $titulo='Login - GS Serviços';
            break;
        case 'php':
            $titulo='PHP - GS Serviços';
            break;
        case 'quemSomos':
            $titulo='Quem Somos - GS Serviços';
            break;
        case 'senha':
            $titulo='Recuperar Senha - GS Serviços';
            break;
        case 'servicos':
            $titulo='Serviços - GS Serviços';
            break;
        case 'videoAulas':
            $titulo='Video Aulas - GS Serviços';
            break;
        default:
            $titulo='GS Serviços';
    endswitch;
    return $titulo;
}