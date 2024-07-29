<?php

class twig {

    static $loader;
    static $twig;

    static function init() {

        self::$loader=new \Twig\Loader\FilesystemLoader(TWIG_TEMPLATE_DIR);

        self::$twig=new \Twig\Environment(self::$loader, [
            'cache' => TWIG_TEMPLATE_CAHCHE_DIR,
            'auto_reload' => TWIG_AUTO_RELOAD,
        ]);

    }

}

?>