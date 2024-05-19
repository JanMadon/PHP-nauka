<?php

declare(strict_types=1);

namespace app\tests;

use app\Wzorce_nauka\Fabryka_Prosta\MealFactory;
use app\Wzorce_nauka\Fabryka_Prosta\MealInterface;
use app\Wzorce_nauka\Fabryka_Prosta\MealType;
use app\Wzorce_nauka\Fabryka_Prosta\Test;
use app\Wzorce_nauka\Fabryka_Prosta\VeganMeal;
use app\Wzorce_nauka\Fabryka_Prosta\VegatarianMeal;
use PHPUnit\Framework\TestCase;

final class MealFactoryTest extends TestCase
{

    //  public function testCanCreateVegetarianMeal(): void
    // {

    //     $autoloadTest = new Test();
    //     $autoloadTest->print();


    // }



    public function testCanCreateVegetarianMeal(): void
    {
        $meal = (new MealFactory())->create(MealType::VEGETARIAN);
        self::assertInstanceOf(MealInterface::class, $meal);
        self::assertInstanceOf(VegatarianMeal::class, $meal);

    }

    public function testCanCreateVeganMeal(): void
    {
        $meal = (new MealFactory())->create(MealType::VEGAN);

        self::assertInstanceOf(MealInterface::class, $meal);
        self::assertInstanceOf(VeganMeal::class, $meal);

    }
}
