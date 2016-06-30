<?php
namespace Grav\Plugin;
use \Grav\Common\Plugin;
use Grav\Common\Page\Page;
use Grav\Common\Page\Pages;
use Grav\Common\Uri;
use Grav\Common\Grav;
use Symfony\Component\Yaml\Yaml;
class madanaEnginePlugin extends Plugin
{
    protected $route = 'tiles';
    //protected $enable = false;
    public static function getSubscribedEvents()
    {
		/*Dia melakukan fetching pada twig extension sehingga ketika loadding semua function
		dia akan menambahkan ke dalammnya, sebuah include file php
		*/
        return [
            'onTwigExtensions' => ['onTwigExtensions', 0], // Hook ketika Symfony memanggil Twig extension
            'onPluginsInitialized' => ['onPluginsInitialized', 0] // Hook ketika plugins mau dijalankan
        ];
    }
    
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/trya/twih.php');
        $this->grav['twig']->twig->addExtension(new twih());
    }
    
    public function onPluginsInitialized(){
		if(!$this->isAdmin()) {
			return;
		}
        // Get The URI Path anyway
		$uri = $this->grav['uri'];
        $this->enable([
            'onTwigTemplatePaths' => ['onTwigAdminTemplatePaths', 0],
            'onAdminMenu' => ['onAdminMenu', 0],
        ]);
        if (strpos($uri->path(), $this->config->get('plugins.admin.route') . '/' . $this->route) === false) {
            return;
        }
        // Not adding css and JS when not in the page, so not messing up anyway
		$this->enable([
            'onAssetsInitialized' => ['onAssetsInitialized', 0],
        ]);
        // Break kalau bukan Halaman Plugins ini , langsung ke main program
        

    }

    public function onTwigAdminTemplatePaths(){
        //This add the template paths of mine, contohnya aku mau masukin 
        //
        $this->grav['twig']->twig_paths[] = __DIR__ . '/admin/templates';
    }

    public function onAdminMenu(){
        // Hooking this page into the menu
        $this->grav['twig']->plugins_hooked_nav['Tiles'] = ['route' => $this->route, 'icon' => 'fa-cube'];
    }

    public function onAssetsInitialized(){
        //Try add css
        $asset = $this->grav['assets'];
        $asset->addCss('plugin://madanaEngine/css/main.css',-999);
        $asset->add('plugin://madanaEngine/js/func.js',-999);
    }
}
?>