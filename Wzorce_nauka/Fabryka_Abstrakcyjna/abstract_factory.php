<?php

namespace app\Wzorce_nauka\Fabryka_Abstrakcyjna;

interface FeatureFactory 
{
    public function search(string $query, array $filters = []): SearchFeature;

    public function book(): BookFeature;

    public function pay(): PaymentFeature;
}



interface SearchFeature 
{
    public function search(): array;
}

interface BookFeature 
{
    public function booking(int $id, PaymentFeature $pemyent): void;
}

interface PaymentFeature 
{
    public function pay(): void;
    public function getAmonut(): float; 
}

class BasicAccount implements FeatureFactory
{
    public function search(string $query, array $filters = []): SearchFeature
    {
        return new BasicSearch($query, $filters);
    }

    public function book(): BookFeature
    {
        return new BasicBooking();
    }

    public function pay(): PaymentFeature
    {
        return new Paymnet(50); 
    }  
}

class MediumAccount implements FeatureFactory
{
    public function search(string $query, array $filters = []): SearchFeature
    {
        return new Search($query, $filters);
    }

    public function book(): BookFeature
    {
        return new StandardBooking();
    }

    public function pay(): PaymentFeature
    {
        return new Paymnet(100); 
    }  
}

class BasicSearch implements SearchFeature
{
    public function __construct(private string $query, private array $filters)
    {
    }

    public function search(): array
    {
        echo "Basic search done on query ". $this->query . "\n";
        return ['result'=>$this->query];  
    }
}

class Search implements SearchFeature
{
    public function __construct(private string $query, private array $filters)
    {
    }

    public function search(): array
    {
        echo "Standard search done on query ". $this->query . 
        " and filters". join("; ", $this->filters) . "\n";

        if(count($this->filters) > 0 ) {
            return ['result' => 'search with filters'];
        }

        return ['result' => $this->query];  
    }
}

class BasicBooking implements BookFeature 
{
    public function booking(int $id, PaymentFeature $payment): void
    {
        echo "Very cheap room on id $id has been paid with amoint: " . $payment->getAmonut() . "\n";
        $payment->pay();
    }
}

class StandardBooking implements BookFeature 
{
    public function booking(int $id, PaymentFeature $payment): void
    {
        echo "Nice room with view on id $id has been paid with amoint: " . $payment->getAmonut() . "\n";
        $payment->pay();
    }
}

class Paymnet implements PaymentFeature
{

    public function __construct(private float $amound)
    {
    }

    public function pay(): void
    {
        echo "You paid {$this->amound}\n";
    }

    public function getAmonut(): float 
    {

        return $this->amound;
    } 
}

class BookingApp
{
    public function __construct(private FeatureFactory $factory)
    {
    }

    public function search(string $query, array $filters = []): array
    {
        return $this->factory->search($query, $filters)->search();
    }

    public function book(int $id): void
    {
        $payment = $this->factory->pay();

        $this->factory->book()->booking($id, $payment);
    }
}

// use basic accont 
// $app = new BookingApp(new BasicAccount());
// $app->search("Portugal", ['filter1', 'filter2']);
// $app->book(1);

// use medium accont 
$app = new BookingApp(new MediumAccount());
$app->search("Portugal", ['filter1', 'filter2']);
$app->book(1);