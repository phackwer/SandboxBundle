<?php

namespace SanSIS\Core\SandboxBundle\Controller;

use \SanSIS\Core\BaseBundle\Controller\ControllerCrudAbstract;

class DefaultController extends ControllerCrudAbstract
{
    protected $service          = 'SanSIS_core_sandbox.cadastrante';
    
    protected $indexView        = 'SanSISCoreSandboxBundle:Default:index.html.twig';

    protected $createView       = 'SanSISCoreSandboxBundle:Default:form.html.twig';
    protected $createRoute      = 'SanSIS_core_sandbox_create';

    protected $editView         = 'SanSISCoreSandboxBundle:Default:form.html.twig';
    protected $editRoute        = 'SanSIS_core_sandbox_edit';
    
    protected $saveSuccessRoute = 'SanSIS_core_sandbox_homepage';
    
    protected $deleteRoute      = 'SanSIS_core_sandbox_delete';
    
    protected $viewView         = 'SanSISCoreSandboxBundle:Default:formView.html.twig';
    protected $viewRoute        = 'SanSIS_core_sandbox_view';
    
    /**
     * Sobrescrito apenas para forçar o uso de uma conexão diferente da aplicação pela service
     *
     * @return object
     */
    protected function getService()
    {
        $srv = $this->get($this->service);
        $srv->setEntityManager($this->get('doctrine')->getManager('sandbox'));
       
        return $srv;
    }
}
