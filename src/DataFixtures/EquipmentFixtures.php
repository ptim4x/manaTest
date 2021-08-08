<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Equipment;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipmentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $equipment = (new Equipment())
                ->setName('Equip '.$i)
                ->setCategory('Categ '.$i)
                ->setNumber(str_pad((string) random_int(1000, 100000), 6, '0', STR_PAD_LEFT))
                ->setDescription('tadata')
                ->setCreatedAt(new DateTimeImmutable())
                ->setUpdatedAt(new DateTimeImmutable())
            ;

            $manager->persist($equipment);
        }

        $manager->flush();
    }
}
