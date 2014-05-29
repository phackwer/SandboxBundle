<?php

namespace Ibram\Core\SandboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCoreDadoCadastrante
 *
 * @ORM\Table(name="CADASTRANTE")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="\Ibram\Core\SandboxBundle\EntityRepository\Cadastrante")

 */
class Cadastrante extends \Ibram\Core\SandboxBundle\Entity\AbstractBase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CO_SEQ_DADOCADASTRANTE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $coSeqDadocadastrante;

    /**
     * @var string
     *
     * @ORM\Column(name="DS_ENDERECOWEB_CADASTRANTE", type="string", length=100, nullable=false)
     */
    private $dsEnderecowebCadastrante;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_CADASTRANTE", type="string", length=150, nullable=false)
     */
    private $noCadastrante;

    /**
     * @var string
     *
     * @ORM\Column(name="NO_IDENTIFICADOR_MAQUINA", type="string", length=150, nullable=false)
     */
    private $noIdentificadorMaquina;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DT_INCLUSAO", type="date", nullable=true)
     */
    private $dtInclusao;


    /**
     * Get coSeqDadocadastrante
     *
     * @return integer 
     */
    public function getCoSeqDadocadastrante()
    {
        return $this->coSeqDadocadastrante;
    }

    /**
     * Set dsEnderecowebCadastrante
     *
     * @param string $dsEnderecowebCadastrante
     * @return TbCoreDadoCadastrante
     */
    public function setDsEnderecowebCadastrante($dsEnderecowebCadastrante)
    {
        $this->dsEnderecowebCadastrante = $dsEnderecowebCadastrante;
    
        return $this;
    }

    /**
     * Get dsEnderecowebCadastrante
     *
     * @return string 
     */
    public function getDsEnderecowebCadastrante()
    {
        return $this->dsEnderecowebCadastrante;
    }

    /**
     * Set noCadastrante
     *
     * @param string $noCadastrante
     * @return TbCoreDadoCadastrante
     */
    public function setNoCadastrante($noCadastrante)
    {
        $this->noCadastrante = $noCadastrante;
    
        return $this;
    }

    /**
     * Get noCadastrante
     *
     * @return string 
     */
    public function getNoCadastrante()
    {
        return $this->noCadastrante;
    }

    /**
     * Set noIdentificadorMaquina
     *
     * @param string $noIdentificadorMaquina
     * @return TbCoreDadoCadastrante
     */
    public function setNoIdentificadorMaquina($noIdentificadorMaquina)
    {
        $this->noIdentificadorMaquina = $noIdentificadorMaquina;
    
        return $this;
    }

    /**
     * Get noIdentificadorMaquina
     *
     * @return string 
     */
    public function getNoIdentificadorMaquina()
    {
        return $this->noIdentificadorMaquina;
    }

    /**
     * Set dtInclusao
     *
     * @param \DateTime  $dtInclusao
     * @return TbCoreDadoCadastrante
     */
    public function setDtInclusao(\DateTime $dtInclusao = null)
    {
        $this->dtInclusao = $dtInclusao;
    
        return $this;
    }

    /**
     * Get dtInclusao
     *
     * @return \DateTime 
     */
    public function getDtInclusao()
    {
        return $this->dtInclusao;
    }
}