<?php

namespace App\Test\Controller;

use App\Entity\Dnd35Races;
use App\Repository\RacesRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Dnd35RacesControllerTest extends WebTestCase
{
    /** @var KernelBrowser */
    private $client;
    /** @var RacesRepository */
    private $repository;
    private $path = '/races/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Dnd35Races::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Dnd35Race index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'dnd35_race[nom]' => 'Testing',
            'dnd35_race[taille]' => 'Testing',
            'dnd35_race[vitesse]' => 'Testing',
            'dnd35_race[donssupplvl1]' => 'Testing',
            'dnd35_race[compsupplvl1]' => 'Testing',
            'dnd35_race[compsuppbylvl]' => 'Testing',
            'dnd35_race[idclassepredilection]' => 'Testing',
            'dnd35_race[immunitesommeil]' => 'Testing',
            'dnd35_race[visionnocturne]' => 'Testing',
            'dnd35_race[modiffor]' => 'Testing',
            'dnd35_race[modifdex]' => 'Testing',
            'dnd35_race[modifcon]' => 'Testing',
            'dnd35_race[modifint]' => 'Testing',
            'dnd35_race[modifsag]' => 'Testing',
            'dnd35_race[modifcha]' => 'Testing',
            'dnd35_race[nblanguessupplementaires]' => 'Testing',
            'dnd35_race[description]' => 'Testing',
            'dnd35_race[AgeId]' => 'Testing',
        ]);

        self::assertResponseRedirects('/races/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Dnd35Races();
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setVitesse('My Title');
        $fixture->setDonssupplvl1('My Title');
        $fixture->setCompsupplvl1('My Title');
        $fixture->setCompsuppbylvl('My Title');
        $fixture->setIdclassepredilection('My Title');
        $fixture->setImmunitesommeil('My Title');
        $fixture->setVisionnocturne('My Title');
        $fixture->setModiffor('My Title');
        $fixture->setModifdex('My Title');
        $fixture->setModifcon('My Title');
        $fixture->setModifint('My Title');
        $fixture->setModifsag('My Title');
        $fixture->setModifcha('My Title');
        $fixture->setNblanguessupplementaires('My Title');
        $fixture->setDescription('My Title');
        $fixture->setAgeId('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Dnd35Race');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Dnd35Races();
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setVitesse('My Title');
        $fixture->setDonssupplvl1('My Title');
        $fixture->setCompsupplvl1('My Title');
        $fixture->setCompsuppbylvl('My Title');
        $fixture->setIdclassepredilection('My Title');
        $fixture->setImmunitesommeil('My Title');
        $fixture->setVisionnocturne('My Title');
        $fixture->setModiffor('My Title');
        $fixture->setModifdex('My Title');
        $fixture->setModifcon('My Title');
        $fixture->setModifint('My Title');
        $fixture->setModifsag('My Title');
        $fixture->setModifcha('My Title');
        $fixture->setNblanguessupplementaires('My Title');
        $fixture->setDescription('My Title');
        $fixture->setAgeId('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'dnd35_race[nom]' => 'Something New',
            'dnd35_race[taille]' => 'Something New',
            'dnd35_race[vitesse]' => 'Something New',
            'dnd35_race[donssupplvl1]' => 'Something New',
            'dnd35_race[compsupplvl1]' => 'Something New',
            'dnd35_race[compsuppbylvl]' => 'Something New',
            'dnd35_race[idclassepredilection]' => 'Something New',
            'dnd35_race[immunitesommeil]' => 'Something New',
            'dnd35_race[visionnocturne]' => 'Something New',
            'dnd35_race[modiffor]' => 'Something New',
            'dnd35_race[modifdex]' => 'Something New',
            'dnd35_race[modifcon]' => 'Something New',
            'dnd35_race[modifint]' => 'Something New',
            'dnd35_race[modifsag]' => 'Something New',
            'dnd35_race[modifcha]' => 'Something New',
            'dnd35_race[nblanguessupplementaires]' => 'Something New',
            'dnd35_race[description]' => 'Something New',
            'dnd35_race[AgeId]' => 'Something New',
        ]);

        self::assertResponseRedirects('/races/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getTaille());
        self::assertSame('Something New', $fixture[0]->getVitesse());
        self::assertSame('Something New', $fixture[0]->getDonssupplvl1());
        self::assertSame('Something New', $fixture[0]->getCompsupplvl1());
        self::assertSame('Something New', $fixture[0]->getCompsuppbylvl());
        self::assertSame('Something New', $fixture[0]->getIdclassepredilection());
        self::assertSame('Something New', $fixture[0]->getImmunitesommeil());
        self::assertSame('Something New', $fixture[0]->getVisionnocturne());
        self::assertSame('Something New', $fixture[0]->getModiffor());
        self::assertSame('Something New', $fixture[0]->getModifdex());
        self::assertSame('Something New', $fixture[0]->getModifcon());
        self::assertSame('Something New', $fixture[0]->getModifint());
        self::assertSame('Something New', $fixture[0]->getModifsag());
        self::assertSame('Something New', $fixture[0]->getModifcha());
        self::assertSame('Something New', $fixture[0]->getNblanguessupplementaires());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getAgeId());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Dnd35Races();
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setVitesse('My Title');
        $fixture->setDonssupplvl1('My Title');
        $fixture->setCompsupplvl1('My Title');
        $fixture->setCompsuppbylvl('My Title');
        $fixture->setIdclassepredilection('My Title');
        $fixture->setImmunitesommeil('My Title');
        $fixture->setVisionnocturne('My Title');
        $fixture->setModiffor('My Title');
        $fixture->setModifdex('My Title');
        $fixture->setModifcon('My Title');
        $fixture->setModifint('My Title');
        $fixture->setModifsag('My Title');
        $fixture->setModifcha('My Title');
        $fixture->setNblanguessupplementaires('My Title');
        $fixture->setDescription('My Title');
        $fixture->setAgeId('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/races/');
    }
}
