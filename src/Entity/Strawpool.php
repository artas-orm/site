<?php

declare(strict_types=1);

namespace Artas\Site\Entity;

class Strawpool
{
    /** @var ?int */
    protected $id;

    /** @var ?bool */
    protected $interested;

    /** @var ?int */
    protected $phpVersion;

    /** @var ?bool */
    protected $dbal;

    /** @var ?bool */
    protected $sqlByOwn;

    /** @var bool */
    protected $dbmsMysql;

    /** @var bool */
    protected $dbmsOci;

    /** @var bool */
    protected $dbmsSqlServer;

    /** @var bool */
    protected $dbmsPostgreSql;

    /** @var bool */
    protected $dbmsDb2;

    /** @var bool */
    protected $dbmsSqLite;

    /** @var bool */
    protected $dbmsOther;

    /** @var ?int */
    protected $importancePerformance;

    /** @var ?int */
    protected $importanceReleasesFrequency;

    /** @var ?int */
    protected $importanceCodeExtensibility;

    /** @var ?int */
    protected $importanceCommunity;

    /** @var ?bool */
    protected $crowdFunding;

    /** @var ?bool */
    protected $frameworkSymfony2;

    /** @var ?bool */
    protected $frameworkSymfony3;

    /** @var ?bool */
    protected $frameworkZend2;

    /** @var ?bool */
    protected $frameworkZend3;

    /** @var ?bool */
    protected $frameworkLaravel54;

    /** @var ?bool */
    protected $frameworkNette24;

    /** @var ?bool */
    protected $frameworkOther;

    /** @var ?string */
    protected $chooseArtas;

    /** @var ?string */
    protected $preferedFeatures;

    /** @var ?string */
    protected $faults;

    public function __construct()
    {
        $this->dbmsMysql = false;
        $this->dbmsOci = false;
        $this->dbmsSqlServer = false;
        $this->dbmsPostgreSql = false;
        $this->dbmsDb2 = false;
        $this->dbmsSqLite = false;
        $this->dbmsOther = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setInterested(?bool $interested): self
    {
        $this->interested = $interested;

        return $this;
    }

    public function getInterested(): ?bool
    {
        return $this->interested;
    }

    public function setPhpVersion(?int $phpVersion): self
    {
        $this->phpVersion = $phpVersion;

        return $this;
    }

    public function getPhpVersion(): ?int
    {
        return $this->phpVersion;
    }

    public function setDbal(?bool $dbal): self
    {
        $this->dbal = $dbal;

        return $this;
    }

    public function getDbal(): ?bool
    {
        return $this->dbal;
    }

    public function setSqlByOwn(?bool $sqlByOwn): self
    {
        $this->sqlByOwn = $sqlByOwn;

        return $this;
    }

    public function getSqlByOwn(): ?bool
    {
        return $this->sqlByOwn;
    }

    public function setDbmsMysql(bool $dbmsMysql): self
    {
        $this->dbmsMysql = $dbmsMysql;

        return $this;
    }

    public function getDbmsMysql(): bool
    {
        return $this->dbmsMysql;
    }

    public function setDbmsOci(bool $dbmsOci): self
    {
        $this->dbmsOci = $dbmsOci;

        return $this;
    }

    public function getDbmsOci(): bool
    {
        return $this->dbmsOci;
    }

    public function setDbmsSqlServer(bool $dbmsSqlServer): self
    {
        $this->dbmsSqlServer = $dbmsSqlServer;

        return $this;
    }

    public function getDbmsSqlServer(): bool
    {
        return $this->dbmsSqlServer;
    }

    public function setDbmsPostgreSql(bool $dbmsPostgreSql): self
    {
        $this->dbmsPostgreSql = $dbmsPostgreSql;

        return $this;
    }

    public function getDbmsPostgreSql(): bool
    {
        return $this->dbmsPostgreSql;
    }

    public function setDbmsDb2(bool $dbmsDb2): self
    {
        $this->dbmsDb2 = $dbmsDb2;

        return $this;
    }

    public function getDbmsDb2(): bool
    {
        return $this->dbmsDb2;
    }

    public function setDbmsSqLite(bool $dbmsSqLite): self
    {
        $this->dbmsSqLite = $dbmsSqLite;

        return $this;
    }

    public function getDbmsSqLite(): bool
    {
        return $this->dbmsSqLite;
    }

    public function setDbmsOther(bool $dbmsOther): self
    {
        $this->dbmsOther = $dbmsOther;

        return $this;
    }

    public function getDbmsOther(): bool
    {
        return $this->dbmsOther;
    }

    public function setImportancePerformance(?int $importancePerformance): self
    {
        $this->importancePerformance = $importancePerformance;

        return $this;
    }

    public function getImportancePerformance(): ?int
    {
        return $this->importancePerformance;
    }

    public function setImportanceReleasesFrequency(?int $importanceReleasesFrequency): self
    {
        $this->importanceReleasesFrequency = $importanceReleasesFrequency;

        return $this;
    }

    public function getImportanceReleasesFrequency(): ?int
    {
        return $this->importanceReleasesFrequency;
    }

    public function setImportanceCodeExtensibility(?int $importanceCodeExtensibility): self
    {
        $this->importanceCodeExtensibility = $importanceCodeExtensibility;

        return $this;
    }

    public function getImportanceCodeExtensibility(): ?int
    {
        return $this->importanceCodeExtensibility;
    }

    public function setImportanceCommunity(?int $importanceCommunity): self
    {
        $this->importanceCommunity = $importanceCommunity;

        return $this;
    }

    public function getImportanceCommunity(): ?int
    {
        return $this->importanceCommunity;
    }

    public function setCrowdFunding(?bool $crowdFunding): self
    {
        $this->crowdFunding = $crowdFunding;

        return $this;
    }

    public function getCrowdFunding(): ?bool
    {
        return $this->crowdFunding;
    }

    public function setFrameworkSymfony2(?bool $frameworkSymfony2): self
    {
        $this->frameworkSymfony2 = $frameworkSymfony2;

        return $this;
    }

    public function getFrameworkSymfony2(): ?bool
    {
        return $this->frameworkSymfony2;
    }

    public function setFrameworkSymfony3(?bool $frameworkSymfony3): self
    {
        $this->frameworkSymfony3 = $frameworkSymfony3;

        return $this;
    }

    public function getFrameworkSymfony3(): ?bool
    {
        return $this->frameworkSymfony3;
    }

    public function setFrameworkZend2(?bool $frameworkZend2): self
    {
        $this->frameworkZend2 = $frameworkZend2;

        return $this;
    }

    public function getFrameworkZend2(): ?bool
    {
        return $this->frameworkZend2;
    }

    public function setFrameworkZend3(?bool $frameworkZend3): self
    {
        $this->frameworkZend3 = $frameworkZend3;

        return $this;
    }

    public function getFrameworkZend3(): ?bool
    {
        return $this->frameworkZend3;
    }

    public function setFrameworkLaravel54(?bool $frameworkLaravel54): self
    {
        $this->frameworkLaravel54 = $frameworkLaravel54;

        return $this;
    }

    public function getFrameworkLaravel54(): ?bool
    {
        return $this->frameworkLaravel54;
    }

    public function setFrameworkNette24(?bool $frameworkNette24): self
    {
        $this->frameworkNette24 = $frameworkNette24;

        return $this;
    }

    public function getFrameworkNette24(): ?bool
    {
        return $this->frameworkNette24;
    }

    public function setFrameworkOther(?bool $frameworkOther): self
    {
        $this->frameworkOther = $frameworkOther;

        return $this;
    }

    public function getFrameworkOther(): ?bool
    {
        return $this->frameworkOther;
    }

    public function setChooseArtas(?string $chooseArtas): self
    {
        $this->chooseArtas = $chooseArtas;

        return $this;
    }

    public function getChooseArtas(): ?string
    {
        return $this->chooseArtas;
    }

    public function setPreferedFeatures(?string $preferedFeatures): self
    {
        $this->preferedFeatures = $preferedFeatures;

        return $this;
    }

    public function getPreferedFeatures(): ?string
    {
        return $this->preferedFeatures;
    }

    public function setFaults(?string $faults): self
    {
        $this->faults = $faults;

        return $this;
    }

    public function getFaults(): ?string
    {
        return $this->faults;
    }
}
