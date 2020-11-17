<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaMarcas{
        private $titulo;

        function __construct(){
            $this->titulo = "FlyShoes";
        }
        function OrganizarXMarca($item, $marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->assign('items', $item);
            $smarty->display('templates/gruposMarcas.tpl'); 
        }
        function adminRenderMarcas($marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/adminMarcas.tpl'); 
        }
        function renderMarcasLogged($marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/loggedMarcas.tpl'); 
        }
        function renderMarcas($marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/userMarcas.tpl'); 
        }
        function ShowFormEditMarca($marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/formEditMarca.tpl'); 
        }
    }
?>