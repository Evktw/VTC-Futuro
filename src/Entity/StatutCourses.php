<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutCourses
 *
 * @ORM\Table(name="Statut_courses")
 * @ORM\Entity(repositoryClass="App\Repository\StatutCoursesRepository")
 */
class StatutCourses
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_StatutCourse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatutcourse;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut_NomCourse", type="string", length=50, nullable=false)
     */
    private $statutNomcourse;

    public function getIdStatutcourse(): ?int
    {
        return $this->idStatutcourse;
    }

    public function getStatutNomcourse(): ?string
    {
        return $this->statutNomcourse;
    }

    public function setStatutNomcourse(string $statutNomcourse): self
    {
        $this->statutNomcourse = $statutNomcourse;

        return $this;
    }




}
