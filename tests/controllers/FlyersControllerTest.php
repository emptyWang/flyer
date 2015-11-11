<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FlyersControllerTest extends TestCase
{
    /** @test */
    public function it_show_the_form_to_create_new_flyers()
    {
        $this->visit('flyers/create');
    }
}
