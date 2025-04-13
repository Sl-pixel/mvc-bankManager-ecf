<?php

require_once __DIR__ . '/../lib/database.php';

class Contract
{
    private int $id;
    private string $type;
    private float $amount;
    private string $duration;
    private int $clientId;
    public function getContractId(): int
    {
        return $this->id;
    }

    public function getContractType(): string
    {
        return $this->type;
    }
    public function getContractAmount(): string
    {
        return $this->amount;
    }

    public function getContractDuration(): string
    {
        return $this->duration;
    }
    public function getClientId(): int
    {
        return $this->clientId;
    }
    public function setContractId(int $id): void
    {
        $this->id = $id;
    }

    public function setContractType(string $type): void
    {
        $this->type = htmlspecialchars($type);
    }
    public function setContractAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function setContractDuration(string $time): void
    {
        $this->duration = htmlspecialchars($time);
    }
    public function setClientId(int $clientId): void
    {
        $this->clientId = $clientId;
    }

}