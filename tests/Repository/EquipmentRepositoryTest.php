<?php

declare(strict_types=1);

namespace App\Tests\Repository;

use App\DataFixtures\EquipmentFixtures;
use App\Repository\EquipmentRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @internal
 * @coversNothing
 */
final class EquipmentRepositoryTest extends KernelTestCase
{
    use FixturesTrait;

    public function testCount(): void
    {
        self::bootKernel();

//        $this->loadFixtures([EquipmentFixtures::class]);

        $this->loadFixtureFiles([
            __DIR__.'/EquipmentRepositoryTestFixtures.yaml',
        ]);

        $equipments = self::$container->get(EquipmentRepository::class)->count([]);
        static::assertSame(10, $equipments);
    }
}
