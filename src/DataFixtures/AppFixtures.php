<?php

namespace App\DataFixtures;

use App\Entity\Settings;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $settings = new Settings();
        $settings->setSiteTitle('New Demo Site');
        $settings->setSiteShortTitle('Tk-One');
        $settings->setSiteEmail('noreply@example.com');
//        $settings->setEmailSignature('');
//        $settings->setMetaKeywords('');
//        $settings->setMetaDescription('');
//        $settings->setGlobalJs('');
//        $settings->setGlobalCss('');
        $manager->persist($settings);

        $manager->flush();
    }
}
