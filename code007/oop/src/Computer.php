<?php 

declare(strict_types=1);

namespace App;

class Computer 
{
    private string $modelName;
    private string $storageMemory;
    private string $ramMemory;
    private string $processor;

    public function __construct(
        string $modelName,
        string $storageMemory,
        string $ramMemory,
        string $processor
    ) {
        $this->modelName = $modelName;
        $this->storageMemory = $storageMemory;
        $this->ramMemory = $ramMemory;
        $this->processor = $processor;
    }
    
    public function displayAttributes(): array
    {
        return [
            'modelName' => $this->modelName,
            'storageMemory' => $this->storageMemory,
            'ramMemory' => $this->ramMemory,
            'processor' => $this->processor
        ];
    }

    public function getModelName(): string
    {
        return $this->modelName;
    }

    
    public function getStorageMemory(): string
    {
        return $this->storageMemory;
    }

    public function getRamMemory(): string
    {
        return $this->ramMemory;
    }

    public function getProcessor(): string
    {
        return $this->processor;
    }
}