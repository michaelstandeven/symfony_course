<?php
/**
 * Created by PhpStorm.
 * User: mstandeven
 * Date: 7/30/2018
 * Time: 2:42 PM
 */

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i<10;$i++){
            $microPost = new MicroPost();
            $microPost->setText('Some random text' . rand(0, 100));
            $microPost->setTime(new \DateTime('2018-03-15'));
            $manager->persist($microPost);
        }

        $manager->flush;
    }
}