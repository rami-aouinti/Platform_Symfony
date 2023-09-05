<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use App\Repository\EducationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResumeController extends AbstractController
{
    #[Route('/resume', name: 'app_resume', methods: ['GET'])]
    public function index(ExperienceRepository $exp, EducationRepository $edu): Response
    {
        return $this->render('resume/index.html.twig', [
            'controller_name' => 'ResumeController',
            'exp' => $exp->findAll(),
            'edu' => $edu->findAll(),
        ]);
    }
}
