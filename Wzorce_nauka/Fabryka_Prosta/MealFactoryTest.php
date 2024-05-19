<?php
 
declare(strict_types=1);

namespace app\Wzorce_nauka\Fabryka_Prosta;
 
use PHPUnit\Framework\TestCase;
 
final class MealFactoryTest extends TestCase
{
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