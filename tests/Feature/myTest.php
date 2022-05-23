<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class myTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckHomeIndex():void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testCheckNewsIndex():void
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }
    public function testCheckCategoriesIndex():void
    {
        $response = $this->get('/categories');
        $response->assertStatus(200);
    }
    public function testCheckAdminIndex():void
    {
        $response = $this->get('/admin');
        $response->assertStatus(200);
    }
    public function testCheckAdminNewsIndex():void
    {
        $response = $this->get('/admin/news');
        $response->assertStatus(200);
    }
    public function testCheckAdminCategoriesIndex():void
    {
        $response = $this->get('/admin/categories');
        $response->assertStatus(200);
    }
}
