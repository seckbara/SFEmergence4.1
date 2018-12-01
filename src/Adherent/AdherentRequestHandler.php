<?php

namespace App\Adherent;

use App\Entity\Adherent;
use Doctrine\ORM\EntityManagerInterface;

class AdherentRequestHandler
{
    private $em;
    private $adhrentFactory;
    private $photoDirectory;
    private $documentDirectory;

    /**
     * AdherentRequestHandler constructor.
     * @param EntityManagerInterface $entityManager
     * @param AdherentFactory $adhrentFactory
     * @param string $photoDirectory
     * @param string $documentDirectory
     */
    public function __construct(EntityManagerInterface $entityManager, AdherentFactory $adhrentFactory, string $photoDirectory, string $documentDirectory)
    {
        $this->em = $entityManager;
        $this->adhrentFactory = $adhrentFactory;
        $this->photoDirectory = $photoDirectory;
        $this->documentDirectory = $documentDirectory;
    }

    /**
     * @param AdherentRequest $request
     * @return Adherent|null
     */
    public function handle(AdherentRequest $request): ?Adherent
    {
        $photo = $request->getPhoto();
        $filePhoto = $request->getNom() . '_' . $request->getPrenom();
        $photo->move($this->photoDirectory, $filePhoto .'.'.$photo->guessExtension());

        $document = $request->getDocument();
        $fileDocument = $request->getNom() . '_' . $request->getPrenom();
        $document->move($this->documentDirectory, $fileDocument . '.' .$document->guessExtension());
        $adherent = $this->adhrentFactory->createFromAdherent($request);
        $this->em->persist($adherent);
        $this->em->flush();

        return $adherent;
    }


}