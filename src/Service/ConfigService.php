<?php

namespace App\Service;

use App\Repository\ContentRepository;
use Twig\Extension\AbstractExtension;

class ConfigService
    extends AbstractExtension
{
    /**
     * @var $ContentRepository
     */
    private $configRepository;

    public function __construct(ContentRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    public function getGarageHoraires()
    {
        // return $this->configRepository->findOneBy(['position' => 'contact_horaires']);
       
        return $this->configRepository ->findByPosition('contact_horaires');

    }

    public function getGarageAdresse()
    {
        return $this->configRepository->findOneBy(['position' => 'contact_adresse']);
    }

    public function getGarageTelephone()
    {
        return $this->configRepository->findOneBy(['position' => 'contact_telephone']);
    }
}