<?php

namespace App\Tests\Entity;

use App\Entity\Serie;
use PHPUnit\Framework\TestCase;

class SerieTest extends TestCase
{
    public function testSerieEntity(): void
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

        $this->assertNull($serie->getId());
        $this->assertEquals("GoT", $serie->getName());
        $this->assertEquals("", $serie->getOverview());
        $this->assertEquals("", $serie->getStatus());
        $this->assertEquals(8, $serie->getVote());
        $this->assertEquals(4, $serie->getPopularity());
        $this->assertEquals("", $serie->getFirstAirDate());
        $this->assertEquals("", $serie->getLastAirDate());
        $this->assertEquals("", $serie->getBackdrop());
        $this->assertEquals("", $serie->getPoster());
        $this->assertEquals(123456789, $serie->getTmdbid());
        $this->assertEquals($maintenant, $serie->getDateCreated());
        $this->assertEquals("", $serie->getDateModified());
        $this->assertEquals("", $serie->getGenres());
    }
}
