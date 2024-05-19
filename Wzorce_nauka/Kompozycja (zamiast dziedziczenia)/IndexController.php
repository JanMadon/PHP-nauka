<?php

// oczywiście importy powwiny być !!!
class IndexController
{

    public function calculateBenefitsAction(): void
    {
        $healthCare = new HealthCare(new Junior());
        $healthCare->calculateGrant();

        $healthCare->setJobLevel(new Senior());
        $healthCare->calculateGrant();

        // Ponieważ klasy senior i junior implementują ten sam interfejs a w konsruktorze jest wstrzyknięcie przez interfejs
        // można w łatwy sposób zmienić obiekt, na którym ma zostać wykonana jakaś akcja.

        //plusy:
        // + mozna w locie(rand-time) zmieniać implementacje
        // + wieksza elastyczność (luzniej powiązane są klasy)
        // + można powiedzieć że jest lepsza od dziedziczenia (powinna być faboryzowana)
        // + wiekszość WP opiera się właśnie o kompozycje   MUSZISZ UMIEC!
    }

}