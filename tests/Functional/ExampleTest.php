<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use App\Entity\Education;
use App\Repository\EducationRepository;
use App\Tests\FunctionalTestCase;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;

/**
 * Class ExampleTest
 *
 * @package App\Tests\Functional
 */
class ExampleTest extends FunctionalTestCase
{
    private KernelBrowser $client;
    private EducationRepository $repository;
    private string $path = '/education/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Education::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Education index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }
}
