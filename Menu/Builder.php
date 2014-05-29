<?php

namespace Ibram\Core\SandboxBundle\Menu;

use Knp\Menu\Silex\RouterAwareFactory;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;

class Builder 
{
	public function menu(RouterAwareFactory $factory, array $options)
	{
		$menu = $factory->createItem('root');
		
		$dropdown = $menu->addChild('Sandbox', array(
                'uri' => '#'
            ));
		$dropdown->addChild('Consultar Cadastro', array(
				'route' 		=> 'ibram_core_sandbox_homepage',
				'routeAbsolute'	=> false
		));
		$dropdown->addChild('Criar Novo Cadastro', array(
				'route' 		=> 'ibram_core_sandbox_create',
				'routeAbsolute'	=> false
		));
    		
		return $menu;
	}
}
