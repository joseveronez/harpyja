<?php
    /**

    * Description of Autoloader

    *

    * @author Elton

    */

    class Autoloader {
        public static $loader;

        public static function init() {
            if (self::$loader == NULL)
                self::$loader = new self();
            return self::$loader;
        }

        public function __construct() {
            spl_autoload_register(array($this, 'autoload'));
        }

        function autoload($className) {
            if (strstr($className, "_") !== false){
                $pasta = explode("_", $className);
                $caminho = CLASSES."{$pasta[1]}/{$className}.class.php";

                if(!file_exists($caminho)){
                    $caminho = CLASSES. "{$className}.class.php";
                }
                
                $this->carregarClasse($caminho);
            } else {
                $caminho = CLASSES. "{$className}.class.php";
                $this->carregarClasse($caminho);
            }
        }

        public function carregarClasse($caminho) {
            if (file_exists($caminho)) {
                require_once $caminho;
            }
        }
    }
?>