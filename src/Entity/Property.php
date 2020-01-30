<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 */
class Property
{
    const HEAT = [
        0 => 'Electrique',
        1 => 'Gaz'
    ];

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $surface;

    /**
     * @ORM\Column(type="integer")
     */
    private $rooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $bedrooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $floor;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $heat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postal_code;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $sold = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="boolean")
     */
    private $swimmingpool;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sauna;

    /**
     * @ORM\Column(type="boolean")
     */
    private $wifi;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sport;

    /**
     * @ORM\Column(type="boolean")
     */
    private $helipad;

    /**
     * @ORM\Column(type="boolean")
     */
    private $terrasse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $balcon;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hifi;

    /**
     * @ORM\Column(type="boolean")
     */
    private $television;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plageprox;

    /**
     * @ORM\Column(type="boolean")
     */
    private $mervue;

    /**
     * @ORM\Column(type="boolean")
     */
    private $montagnevue;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enville;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visavis;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plageprive;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pieddanseau;

    /**
     * @ORM\Column(type="boolean")
     */
    private $centreville;

    /**
     * @ORM\Column(type="boolean")
     */
    private $champetre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typepropriete;

    public function __construct()
    {
        $this->created_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): string
    {
        return (new Slugify())->slugify($this->title);
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->bedrooms;
    }

    public function setBedrooms(int $bedrooms): self
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function getFormattedPrice() 
    {
        return number_format($this->price,0, '',' ');
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getHeat(): ?int
    {
        return $this->heat;
    }

    public function setHeat(int $heat): self
    {
        $this->heat = $heat;

        return $this;
    }

    public function getHeatType(): string
    {
        return self::HEAT[$this->heat];
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getSold(): ?bool
    {
        return $this->sold;
    }

    public function setSold(bool $sold): self
    {
        $this->sold = $sold;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getSwimmingpool(): ?bool
    {
        return $this->swimmingpool;
    }

    public function setSwimmingpool(bool $swimmingpool): self
    {
        $this->swimmingpool = $swimmingpool;

        return $this;
    }

    public function getSauna(): ?bool
    {
        return $this->sauna;
    }

    public function setSauna(bool $sauna): self
    {
        $this->sauna = $sauna;

        return $this;
    }

    public function getWifi(): ?bool
    {
        return $this->wifi;
    }

    public function setWifi(bool $wifi): self
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function getSport(): ?bool
    {
        return $this->sport;
    }

    public function setSport(bool $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getHelipad(): ?bool
    {
        return $this->helipad;
    }

    public function setHelipad(bool $helipad): self
    {
        $this->helipad = $helipad;

        return $this;
    }

    public function getTerrasse(): ?bool
    {
        return $this->terrasse;
    }

    public function setTerrasse(bool $terrasse): self
    {
        $this->terrasse = $terrasse;

        return $this;
    }

    public function getBalcon(): ?bool
    {
        return $this->balcon;
    }

    public function setBalcon(bool $balcon): self
    {
        $this->balcon = $balcon;

        return $this;
    }

    public function getHifi(): ?bool
    {
        return $this->hifi;
    }

    public function setHifi(bool $hifi): self
    {
        $this->hifi = $hifi;

        return $this;
    }

    public function getTelevision(): ?bool
    {
        return $this->television;
    }

    public function setTelevision(bool $television): self
    {
        $this->television = $television;

        return $this;
    }

    public function getPlageprox(): ?bool
    {
        return $this->plageprox;
    }

    public function setPlageprox(bool $plageprox): self
    {
        $this->plageprox = $plageprox;

        return $this;
    }

    public function getMervue(): ?bool
    {
        return $this->mervue;
    }

    public function setMervue(bool $mervue): self
    {
        $this->mervue = $mervue;

        return $this;
    }

    public function getMontagnevue(): ?bool
    {
        return $this->montagnevue;
    }

    public function setMontagnevue(bool $montagnevue): self
    {
        $this->montagnevue = $montagnevue;

        return $this;
    }

    public function getEnville(): ?bool
    {
        return $this->enville;
    }

    public function setEnville(bool $enville): self
    {
        $this->enville = $enville;

        return $this;
    }

    public function getVisavis(): ?bool
    {
        return $this->visavis;
    }

    public function setVisavis(bool $visavis): self
    {
        $this->visavis = $visavis;

        return $this;
    }

    public function getPlageprive(): ?bool
    {
        return $this->plageprive;
    }

    public function setPlageprive(bool $plageprive): self
    {
        $this->plageprive = $plageprive;

        return $this;
    }

    public function getPieddanseau(): ?bool
    {
        return $this->pieddanseau;
    }

    public function setPieddanseau(bool $pieddanseau): self
    {
        $this->pieddanseau = $pieddanseau;

        return $this;
    }

    public function getCentreville(): ?bool
    {
        return $this->centreville;
    }

    public function setCentreville(bool $centreville): self
    {
        $this->centreville = $centreville;

        return $this;
    }

    public function getChampetre(): ?bool
    {
        return $this->champetre;
    }

    public function setChampetre(bool $champetre): self
    {
        $this->champetre = $champetre;

        return $this;
    }

    public function getMas(): ?bool
    {
        return $this->mas;
    }

    public function setMas(bool $mas): self
    {
        $this->mas = $mas;

        return $this;
    }

    public function getManoir(): ?bool
    {
        return $this->manoir;
    }

    public function setManoir(bool $manoir): self
    {
        $this->manoir = $manoir;

        return $this;
    }

    public function getTypepropriete(): ?string
    {
        return $this->typepropriete;
    }

    public function setTypepropriete(string $typepropriete): self
    {
        $this->typepropriete = $typepropriete;

        return $this;
    }
}
