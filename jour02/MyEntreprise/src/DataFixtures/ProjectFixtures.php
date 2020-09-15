<?php

namespace App\DataFixtures;
use App\Entity\Projets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTime;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++)
        {
            $product = new Projets();
            $product->setTitle('titre '.$i);
            $product->setContent('<p>Article n°'.$i.'</p>');
            $product->setImage('http://placehold.it/350x150');
            $product->setCreatedAt(new Datetime('today'));

            $manager->persist($product);
        }
        $manager->flush();
    }
}


