<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Program;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(ProgramRepository $programRepository): Response
    {
        $programs = $programRepository->findAll();


        return $this->render('program/index.html.twig', [
            'programs'=>$programs
        ]);
    }

    /**
     * @Route("/show/{id<^[0-9]+$>}", name="show")
     * @param $id
     * @return Response
     */
    public function show(Program $program): Response
    {

        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }
}
