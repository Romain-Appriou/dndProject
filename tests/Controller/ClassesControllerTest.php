<?php

namespace App\Test\Controller;

use App\Entity\Classes;
use App\Repository\ClassesRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClassesControllerTest extends WebTestCase
{
    /** @var KernelBrowser */
    private $client;
    /** @var ClassesRepository */
    private $repository;
    private $path = '/classes/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Classes::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Class index');

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
            'class[nom]' => 'Testing',
            'class[dv]' => 'Testing',
            'class[pointscompetences]' => 'Testing',
            'class[caracteristiquelanceursort]' => 'Testing',
            'class[pominlvl1]' => 'Testing',
            'class[pomaxlvl1]' => 'Testing',
            'class[description]' => 'Testing',
            'class[typemagie]' => 'Testing',
        ]);

        self::assertResponseRedirects('/classes/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Classes();
        $fixture->setNom('My Title');
        $fixture->setDv('My Title');
        $fixture->setPointscompetences('My Title');
        $fixture->setCaracteristiquelanceursort('My Title');
        $fixture->setPominlvl1('My Title');
        $fixture->setPomaxlvl1('My Title');
        $fixture->setDescription('My Title');
        $fixture->setTypemagie('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Class');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Classes();
        $fixture->setNom('My Title');
        $fixture->setDv('My Title');
        $fixture->setPointscompetences('My Title');
        $fixture->setCaracteristiquelanceursort('My Title');
        $fixture->setPominlvl1('My Title');
        $fixture->setPomaxlvl1('My Title');
        $fixture->setDescription('My Title');
        $fixture->setTypemagie('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'class[nom]' => 'Something New',
            'class[dv]' => 'Something New',
            'class[pointscompetences]' => 'Something New',
            'class[caracteristiquelanceursort]' => 'Something New',
            'class[pominlvl1]' => 'Something New',
            'class[pomaxlvl1]' => 'Something New',
            'class[description]' => 'Something New',
            'class[typemagie]' => 'Something New',
        ]);

        self::assertResponseRedirects('/classes/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getDv());
        self::assertSame('Something New', $fixture[0]->getPointscompetences());
        self::assertSame('Something New', $fixture[0]->getCaracteristiquelanceursort());
        self::assertSame('Something New', $fixture[0]->getPominlvl1());
        self::assertSame('Something New', $fixture[0]->getPomaxlvl1());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getTypemagie());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Classes();
        $fixture->setNom('My Title');
        $fixture->setDv('My Title');
        $fixture->setPointscompetences('My Title');
        $fixture->setCaracteristiquelanceursort('My Title');
        $fixture->setPominlvl1('My Title');
        $fixture->setPomaxlvl1('My Title');
        $fixture->setDescription('My Title');
        $fixture->setTypemagie('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/classes/');
    }
}
