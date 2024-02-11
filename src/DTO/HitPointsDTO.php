<?php

namespace App\DTO;

class HitPointsDTO
{

    private int $currentHitPoints;
    private int $temporaryHitPoints;
    private int $maxHitPoints;

    /**
     * @return int
     */
    public function getCurrentHitPoints(): int
    {
        return $this->currentHitPoints;
    }

    /**
     * @param int $currentHitPoints
     */
    public function setCurrentHitPoints(int $currentHitPoints): void
    {
        $this->currentHitPoints = $currentHitPoints;
    }

    /**
     * @return int
     */
    public function getTemporaryHitPoints(): int
    {
        return $this->temporaryHitPoints;
    }

    /**
     * @param int $temporaryHitPoints
     */
    public function setTemporaryHitPoints(int $temporaryHitPoints): void
    {
        $this->temporaryHitPoints = $temporaryHitPoints;
    }

    /**
     * @return int
     */
    public function getMaxHitPoints(): int
    {
        return $this->maxHitPoints;
    }

    /**
     * @param int $maxHitPoints
     */
    public function setMaxHitPoints(int $maxHitPoints): void
    {
        $this->maxHitPoints = $maxHitPoints;
    }

    public function fromJson(array $hitPointsJson): HitPointsDTO{

        $hitPoints = new HitPointsDTO();
        $hitPoints->setMaxHitPoints($hitPointsJson['maxHitPoints']);
        $hitPoints->setCurrentHitPoints($hitPointsJson['currentHitPoints']);
        $hitPoints->setTemporaryHitPoints($hitPointsJson['temporaryHitPoints']);

        return $hitPoints;
    }

    public function toJson(HitPointsDTO $hitPointsDTO): array {
        $hitPointsJson = [];
        $hitPointsJson['maxHitPoints'] = $hitPointsDTO->getMaxHitPoints();
        $hitPointsJson['currentHitPoints'] = $hitPointsDTO->getCurrentHitPoints();
        $hitPointsJson['temporaryHitPoints'] =  $hitPointsDTO->getTemporaryHitPoints();

        return $hitPointsJson;
    }


}