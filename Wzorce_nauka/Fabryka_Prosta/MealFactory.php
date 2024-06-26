<?php
 
declare(strict_types=1);

namespace app\Wzorce_nauka\Fabryka_Prosta;
 
final class MealFactory
{
    public function create(MealType $mealType): MealInterface
    {
        return match ($mealType) {
            MealType::VEGETARIAN => new VegatarianMeal(),
            MealType::VEGAN => new VeganMeal()
        };
    }
    /*
    Do właściwości enuma odnosimy się jak do statycznych własciwości klasy

    return match został dodany w php 8.0
    match przyjmuję wartość, która jest następnie porownywana z WARTOŚCIAMI case jakie zostały zdefiniowane w enumie  
    */
}