<?php
namespace Ibram\Core\SandboxBundle\Service;

use Ibram\Core\BaseBundle\ServiceLayer\EntityServiceAbstract;

class CadastranteService extends EntityServiceAbstract
{
    protected $rootEntityName = '\Ibram\Core\SandboxBundle\Entity\Cadastrante';
    
    protected $rootEntityIdName = 'coSeqDadocadastrante';
    
    /**
     * @var \Ibram\Core\SandboxBundle\Entity\Cadastrante
     */
    protected $rootEntity;
}