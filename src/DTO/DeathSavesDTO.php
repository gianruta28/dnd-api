<?php

namespace App\DTO;

class DeathSavesDTO
{

    private int $success;
    private int $failure;

    /**
     * @return int
     */
    public function getSuccess(): int
    {
        return $this->success;
    }

    /**
     * @param int $success
     */
    public function setSuccess(int $success): void
    {
        $this->success = $success;
    }

    /**
     * @return int
     */
    public function getFailure(): int
    {
        return $this->failure;
    }

    /**
     * @param int $failure
     */
    public function setFailure(int $failure): void
    {
        $this->failure = $failure;
    }

    public function fromJson(array $deathSavesJson): DeathSavesDTO
    {
        $deathSaves = new DeathSavesDTO();
        if (isset($deathSavesJson['success'])) {
            $deathSaves->setSuccess($deathSavesJson['success']);
        }
        if (isset($deathSavesJson['failure'])) {
            $deathSaves->setFailure($deathSavesJson['failure']);
        }
        return $deathSaves;
    }

    public function toJson(): array
    {
        return [
            'success' => $this->success,
            'failure' => $this->failure,
        ];
    }



}