<?php
 
declare(strict_types=1);

namespace app\Wzorce_nauka\Fabryka_Prosta;

/*
enumy zostały wprowadzone w php 8.1
enum jest klasą -> sprawdz class MealFactory
*/

enum MealType: string
{
    case VEGETARIAN = 'vegetarian';
    case VEGAN = 'vegan';
}