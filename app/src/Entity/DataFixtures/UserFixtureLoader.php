<?php

namespace DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;

class UserFixtureLoader implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('Test');
        $manager->persist($user);
        $manager->flush();
    }
}
