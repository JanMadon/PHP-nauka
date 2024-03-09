<?php

// oczywiście importy powwiny być !!!
class IndexController
{

    public function calculateBenefitsAction(): void
    {
        $healthCare = new JuniorHealthCare();
        $healthCare->calculateGrant();
    }

}