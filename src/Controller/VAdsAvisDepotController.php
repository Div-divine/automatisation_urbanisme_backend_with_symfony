<?php
// src/Controller/VAdsAvisDepotController.php

namespace App\Controller;

use App\Repository\VAdsAvisDepotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class VAdsAvisDepotController extends AbstractController
{
    private $repository;

    public function __construct(VAdsAvisDepotRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/api/v-ads-avis-depot", name="api_v_ads_avis_depot", methods={"GET"})
     */
    #[Route('/api/v-ads-avis-depot', name: 'api_v_ads_avis_depot', methods: ['GET'])]
    public function index(): JsonResponse
    {
        // Fetch all data from the repository
        $data = $this->repository->findAll();

        // Serialize the data
        $dataArray = array_map(function ($item) {
            return [
                'srt' => $item->getSrt(),
                'dateenclair' => $item->getDateenclair() ? $item->getDateenclair()->format('d/m/Y') : null,
                'BIE_ADRESSE' => $item->getBieAdresse(),
                'dos_dnm_t' => $item->getDosDnmT(),
                'nature' => $item->getNature(),
                'surf_ex' => $item->getSurfEx(),
                'surf_cc' => $item->getSurfCc(),
                'dateDemande' => $item->getDateDemande() ? $item->getDateDemande()->format('d/m/Y') : null,
                'date_depot' => $item->getDateDepot() ? $item->getDateDepot()->format('d/m/Y') : null,
                'dateComplet' => $item->getDateComplet() ? $item->getDateComplet()->format('d/m/Y') : null,
                'dateDecision' => $item->getDateDecision() ? $item->getDateDecision()->format('d/m/Y') : null,
                'decision' => $item->getDecision(),
                'srt2' => $item->getSrt2(),
                'srt3' => $item->getSrt3() ? $item->getSrt3()->format('d/m/Y') : null,
                'insee' => $item->getInsee(),
                'REFERENCE' => $item->getReference(),
                'BIE_CAT_D' => $item->getBieCadT(),
            ];
        }, $data);

        return new JsonResponse($dataArray);
    }
}
