<?php
    /**
    * Class ScriptLoader
    * classe responsável por carregar os scripts de css e js
    */
    class ScriptLoader {
        public static function LoadJS($nomeArquivo){
            echo "<script type='text/javascript' src='".SCRIPTS.$nomeArquivo.".js'></script>";
        }

        public static function LoadCSS($nomeArquivo){
            echo "<link rel='stylesheet' media='screen' type='text/css' href='".STYLES.$nomeArquivo.".css'>";
        }
        
        public static function LoadPLUGINSJS($nomeArquivo){
            echo "<script type='text/javascript' src='".PLUGINS.$nomeArquivo."'></script>";
        }

        public static function LoadPLUGINSCSS($nomeArquivo){
            echo "<link rel='stylesheet' media='screen' type='text/css' href='".PLUGINS.$nomeArquivo."'>";
        }
    }
?>