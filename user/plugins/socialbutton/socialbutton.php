<?php
/*
    Benyamin Limanto
    First Time Learn Grav Engine CMS
*/
namespace Grav\Plugin;

use Grav\Common\Plugin;

class socialbuttonPlugin extends Plugin
{
    //It will make a listener
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],// This add listener when plugins loaded, then add function to run
        ];
    }
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }// It wont show on admin I guess???
        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);//Set a Variable through this event from Grav
    }
    
    public function onTwigSiteVariables()
    {
        $this->grav['assets']->addCss('plugin://socialbutton/css/sosbut.css', -999);
        $this->grav['twig']->twig_vars['sosbut'] = $this->config->get('plugins.socialbutton');//Set a variable so the twig can read from it
    }
}
?>