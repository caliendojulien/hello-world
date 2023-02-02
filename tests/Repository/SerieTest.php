<?php

namespace App\Tests\Repository;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use PHPUnit\Framework\TestCase;

class SerieTest extends TestCase
{
    public function testAvgSF(): void
    {
        $maintenant = new \DateTime();
        $serie = (new Serie())
            ->setName('GoT')
            ->setGenres('')
            ->setOverview('')
            ->setStatus('')
            ->setVote(8)
            ->setPopularity(4)
            ->setFirstAirDate(null)
            ->setLastAirDate(null)
            ->setBackdrop('')
            ->setPoster('')
            ->setTmdbid(123456789)
            ->setDateCreated($maintenant)
            ->setDateModified(null);
        $serieRepo = $this->createMock(SerieRepository::class);
        $serieRepo->expects($this->any())
            ->method('find')
            ->willReturn($serie);

    }
}
