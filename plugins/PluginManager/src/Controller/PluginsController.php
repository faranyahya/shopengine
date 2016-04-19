<?php
namespace PluginManager\Controller;

use Cake\Core\Configure;
use Cake\Core\Configure\Engine\JsonConfig;

class PluginsController extends AppController
{
    private $pluginsJson = CONFIG . 'plugins.json';

    public function index()
    {
        $themes = $this->themes();
        $this->set(compact('themes'));
        $this->set('_serialize', ['themes']);
    }

    /*
     *  Get all plugins
     * */
    private function plugins(){
        $all_plugins = explode(',', json_decode(file_get_contents($this->pluginsJson))->all->names);
        debug($all_plugins);
        die;
    }

    /*
    * Get all Themes
    * */
    private function themes()
    {
        $all_plugins = json_decode(file_get_contents($this->pluginsJson))->themes;
        return $all_plugins;
    }

    /*
    * Get Active Themes
    * */
    private function activeThemes()
    {
        $all_plugins = json_decode(file_get_contents($this->pluginsJson))->active_theme;
        debug($all_plugins);
        die;
    }

}

