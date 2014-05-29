<?php

namespace Ibram\Core\SandboxBundle\Controller;

use \Ibram\Core\BaseBundle\Controller\ControllerCrudAbstract;

class DoctrineTestController extends ControllerCrudAbstract
{
    protected $service          = 'Ibram_core_sandbox.cadastrante';

    protected $indexView        = 'IbramCoreSandboxBundle:Default:index.html.twig';

    protected $createView       = 'IbramCoreSandboxBundle:Default:form.html.twig';
    protected $createRoute      = 'Ibram_core_sandbox_create';

    protected $editView         = 'IbramCoreSandboxBundle:Default:form.html.twig';
    protected $editRoute        = 'Ibram_core_sandbox_edit';

    protected $saveSuccessRoute = 'Ibram_core_sandbox_homepage';

    protected $deleteRoute      = 'Ibram_core_sandbox_delete';

    protected $viewView         = 'IbramCoreSandboxBundle:Default:formView.html.twig';
    protected $viewRoute        = 'Ibram_core_sandbox_view';

    /**
     * Sobrescrito apenas para forçar o uso de uma conexão diferente da aplicação pela service
     *
     * @return object
     */
    protected function getService()
    {
        $srv = $this->get($this->service);
        //$srv->setEntityManager($this->get('doctrine')->getManager('sandbox'));

        return $srv;
    }

    public function indexAction(){

        /** @var \Ibram\Core\SandboxBundle\Service\CadastranteService $srv */
        $srv = $this->getService();

        $entity = $srv->getEntityManager()->getRepository('Ibram\Sgp\CoreBundle\Entity\PessoaFisica')->findAll();

        echo '<pre>'; print_r($entity);die();
    }
}
