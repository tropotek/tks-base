<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SettingsRepository")
 */
class Settings
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $siteTitle;

    /**
     * @ORM\Column(type="string", length=128, options={"default":""})
     */
    private $siteShortTitle;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $siteEmail;

    /**
     * @ORM\Column(type="text", options={"default":""})
     */
    private $emailSignature;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $metaDescription;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $metaKeywords;

    /**
     * @ORM\Column(type="text", options={"default":""})
     */
    private $globalJs;

    /**
     * @ORM\Column(type="text", options={"default":""})
     */
    private $globalCss;



    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->setSiteTitle('New Untitled Site');
        $this->setSiteShortTitle('Untitled');
        $this->setSiteEmail('noreply@example.com');
        $this->setEmailSignature('');
        $this->setMetaKeywords('');
        $this->setMetaDescription('');
        $this->setGlobalCss('');
        $this->setGlobalJs('');

    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiteTitle(): ?string
    {
        return $this->siteTitle;
    }

    public function setSiteTitle(string $siteTitle): self
    {
        $this->siteTitle = $siteTitle;

        return $this;
    }

    public function getSiteShortTitle(): ?string
    {
        return $this->siteShortTitle;
    }

    public function setSiteShortTitle(string $siteShortTitle): self
    {
        $this->siteShortTitle = $siteShortTitle;

        return $this;
    }

    public function getSiteEmail(): ?string
    {
        return $this->siteEmail;
    }

    public function setSiteEmail(string $siteEmail): self
    {
        $this->siteEmail = $siteEmail;

        return $this;
    }

    public function getEmailSignature(): ?string
    {
        return $this->emailSignature;
    }

    public function setEmailSignature(string $emailSignature): self
    {
        $this->emailSignature = $emailSignature;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    public function getGlobalJs(): ?string
    {
        return $this->globalJs;
    }

    public function setGlobalJs(string $globalJs): self
    {
        $this->globalJs = $globalJs;

        return $this;
    }

    public function getGlobalCss(): ?string
    {
        return $this->globalCss;
    }

    public function setGlobalCss(string $globalCss): self
    {
        $this->globalCss = $globalCss;

        return $this;
    }
}
