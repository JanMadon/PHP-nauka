<?php
 
declare(strict_types=1);

namespace app\Wzorce_nauka\Fabryka_Prosta;
 
interface MealInterface 
{
    public function containsAnimalProducts(): bool;
}