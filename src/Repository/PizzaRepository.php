<?php

namespace App\Repository;


use App\Entity\PizzaEntity;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: PizzaEntity::class)]
class PizzaRepository extends Repository
{

}
