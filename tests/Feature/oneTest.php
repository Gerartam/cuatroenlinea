<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class oneTest extends TestCase
{
    /**
	 * A basic feature test example.
	 *
	 * @return void
	 */
    public function page_status(){
        $status = $this->get('https://cuatroenlinea.ddev.site/jugar/1');
        $status->assertStatus(200);
    }
}