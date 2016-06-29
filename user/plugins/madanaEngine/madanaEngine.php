<?php
namespace Grav\Plugin;
use \Grav\Common\Plugin;
class madanaEnginePlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
		/*Dia melakukan fetching pada twig extension sehingga ketika loadding semua function
		dia akan menambahkan ke dalammnya, sebuah include file php
		*/
        return [
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/trya/twih.php');
        $this->grav['twig']->twig->addExtension(new twih());
    }
}
?>