<?php
namespace SanSIS\Core\SandboxBundle\Service;

use SanSIS\Core\BaseBundle\ServiceLayer\EntityServiceAbstract;

class CadastranteService extends EntityServiceAbstract
{
    protected $rootEntityName = '\SanSIS\Core\SandboxBundle\Entity\Cadastrante';
    
    protected $rootEntityIdName = 'coSeqDadocadastrante';
    
    /**
     * @var \SanSIS\Core\SandboxBundle\Entity\Cadastrante
     */
    protected $rootEntity;
}