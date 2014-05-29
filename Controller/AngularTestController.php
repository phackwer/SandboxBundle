<?php

namespace Ibram\Core\SandboxBundle\Controller;

use \Ibram\Core\BaseBundle\Controller\ControllerCrudAbstract;

class AngularTestController extends ControllerCrudAbstract
{
    protected $service = 'Ibram_core_sandbox.cadastrante';

    protected $indexView = 'IbramCoreSandboxBundle:angularTest.html.twig';

    protected $createView = 'IbramCoreSandboxBundle:Default:form.html.twig';
    protected $createRoute = 'Ibram_core_sandbox_create';

    protected $editView = 'IbramCoreSandboxBundle:Default:form.html.twig';
    protected $editRoute = 'Ibram_core_sandbox_edit';

    protected $saveSuccessRoute = 'Ibram_core_sandbox_homepage';

    protected $deleteRoute = 'Ibram_core_sandbox_delete';

    protected $viewView = 'IbramCoreSandboxBundle:Default:formView.html.twig';
    protected $viewRoute = 'Ibram_core_sandbox_view';

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

    public function indexAction()
    {
        $result = array('nome' => 'João Gabriel', 'Data' => '10/05/2013', 'Tipo' => 'Biologia');
//        $teste = 'ola mundo';

        return $this->render('IbramCoreSandboxBundle:Default:angularTest.html.twig', $result);
    }


    /**
     * Retorna um array de exemplo em Json
     *
     * @param $foo
     * @internal param string $type
     * @internal param int $from
     * @internal param int $to
     * @return json
     */
    public function getJsonExemploAction()
    {
        $exemplo = array('foo' => $this->getRequest('foo'), 'planeta' => 'terra', 'habitantes' => 'terretres');

        return $this->renderJson($exemplo);
    }
}