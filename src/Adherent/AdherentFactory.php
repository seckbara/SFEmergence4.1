<?php

namespace App\Adherent;

use App\Entity\Adherent;

class AdherentFactory
{
    public function createFromAdherent(AdherentRequest $request): Adherent
    {
        return Adherent::create(
            $request->getId(),
            $request->getNom(),
            $request->getPrenom(),
            $request->getDateNaissance(),
            $request->getSexe(),
            $request->getTelephone(),
            $request->getAdresse(),
            $request->getEmail(),
            $request->getCertificat(),
            $request->getNumeSecu(),
            $request->getDocument(),
            $request->getCommentaire(),
            $request->getPhoto(),
            $request->getSituation()
        );
    }
}