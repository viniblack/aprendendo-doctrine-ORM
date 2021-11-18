<?php


namespace Alura\Doctrine\Entity;

/**
 * @Entity
 */

class Telefone
{
  /**
   * @Id
   * @GeneratedValue
   * @Column(type="integer")
   */
    private $id;
    /**
     * @Column(type="string")
     */
    private $numero;

    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private $aluno;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }


    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }
}