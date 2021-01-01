<?php

namespace Tests\Unit;

use App\Models\NewsModel;
use PHPUnit\Framework\TestCase;

class NewsModelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $model = new NewsModel();
        $new = $model->getNewById(1);
        $this->assertIsArray($new);
        $this->assertNotEmpty($new);
        $this->assertIsString($new['title']);
        $this->assertNotEmpty($new['title']);
        $this->assertIsString($new['content_short']);
        $this->assertNotEmpty($new['content_short']);
        $this->assertIsString($new['content_long']);
        $this->assertNotEmpty($new['content_long']);
    }
}
