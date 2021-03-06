<?php

class FinanceTest extends TestCase
{
    protected $ac_svc,
              $ICAO = 'B777';

    public function setUp()
    {
        parent::setUp();
        $this->addData('base');
    }

    public function testFlightFaresNoOverride()
    {
        $fare_svc = app('App\Services\FareService');

        $flight = factory(App\Models\Flight::class)->create();
        $fare = factory(App\Models\Fare::class)->create();

        $fare_svc->setForFlight($flight, $fare);
        $subfleet_fares = $fare_svc->getForFlight($flight);

        $this->assertCount(1, $subfleet_fares);
        $this->assertEquals($fare->price, $subfleet_fares->get(0)->price);
        $this->assertEquals($fare->capacity, $subfleet_fares->get(0)->capacity);

        #
        # set an override now
        #
        $fare_svc->setForFlight($flight, $fare, [
            'price' => 50, 'capacity' => 400
        ]);

        # look for them again
        $subfleet_fares = $fare_svc->getForFlight($flight);

        $this->assertCount(1, $subfleet_fares);
        $this->assertEquals(50, $subfleet_fares[0]->price);
        $this->assertEquals(400, $subfleet_fares[0]->capacity);

        # delete
        $fare_svc->delFareFromFlight($flight, $fare);
        $this->assertCount(0, $fare_svc->getForFlight($flight));
    }

    public function testSubfleetFaresNoOverride()
    {
        $fare_svc = app('App\Services\FareService');

        $subfleet = factory(App\Models\Subfleet::class)->create();
        $fare = factory(App\Models\Fare::class)->create();

        $fare_svc->setForSubfleet($subfleet, $fare);
        $subfleet_fares = $fare_svc->getForSubfleet($subfleet);

        $this->assertCount(1, $subfleet_fares);
        $this->assertEquals($fare->price, $subfleet_fares->get(0)->price);
        $this->assertEquals($fare->capacity, $subfleet_fares->get(0)->capacity);

        #
        # set an override now
        #
        $fare_svc->setForSubfleet($subfleet, $fare, [
            'price' => 50, 'capacity' => 400
        ]);

        # look for them again
        $subfleet_fares = $fare_svc->getForSubfleet($subfleet);

        $this->assertCount(1, $subfleet_fares);
        $this->assertEquals(50, $subfleet_fares[0]->price);
        $this->assertEquals(400, $subfleet_fares[0]->capacity);

        # delete
        $fare_svc->delFareFromSubfleet($subfleet, $fare);
        $this->assertCount(0, $fare_svc->getForSubfleet($subfleet));
    }

    public function testSubfleetFaresOverride()
    {
        $fare_svc = app('App\Services\FareService');

        $subfleet = factory(App\Models\Subfleet::class)->create();
        $fare = factory(App\Models\Fare::class)->create();

        $fare_svc->setForSubfleet($subfleet, $fare, [
            'price' => 50, 'capacity' => 400
        ]);

        $ac_fares = $fare_svc->getForSubfleet($subfleet);

        $this->assertCount(1, $ac_fares);
        $this->assertEquals(50, $ac_fares[0]->price);
        $this->assertEquals(400, $ac_fares[0]->capacity);

        #
        # update the override to a different amount and make sure it updates
        #

        $fare_svc->setForSubfleet($subfleet, $fare, [
            'price' => 150, 'capacity' => 50
        ]);

        $ac_fares = $fare_svc->getForSubfleet($subfleet);

        $this->assertCount(1, $ac_fares);
        $this->assertEquals(150, $ac_fares[0]->price);
        $this->assertEquals(50, $ac_fares[0]->capacity);

        # delete
        $fare_svc->delFareFromSubfleet($subfleet, $fare);
        $this->assertCount(0, $fare_svc->getForSubfleet($subfleet));
    }
}
