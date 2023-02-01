<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/series', name: 'serie')]
class SerieController extends AbstractController
{
    #[Route('/', name: '_series')]
    public function series(
        SerieRepository $serieRepository
    ): Response
    {
        $series = $serieRepository->findAll();
        return $this->render('serie/series.html.twig',
            ['series' => $series]
        );
    }

    #[Route('/{id}', name: '_serie', requirements: ['id' => '\d+'])]
    public function serie(
        Serie $id,
//        SerieRepository $serieRepository
    ): Response
    {
//        $serie = $serieRepository->find($id);
//        $serie = $serieRepository->findOneBy(["id" => $id]);
        return $this->render('serie/serie.html.twig',
            [
                'serie' => $id
            ]
        );
    }

    #[Route('/create', name: '_create')]
    public function create(
        EntityManagerInterface $em
    ): Response
    {
        $serie = new Serie();
        $serie->setName("The witcher");
        $serie->setDateCreated(new \DateTime("1984-04-07"));
        $serie->setFirstAirDate(new \DateTime());
        $serie->setLastAirDate(new \DateTime());
        $serie->setGenre("Fantasy");
        $serie->setOverview("Henry Cavill <3");
        $serie->setPopularity(123.0);
        $serie->setVote(9.9);
        $serie->setStatus("En production");
        $serie->setTmdbid(123456789);
        $em->persist($serie);
        $em->flush();
        return $this->render('serie/create.html.twig');
    }


}
