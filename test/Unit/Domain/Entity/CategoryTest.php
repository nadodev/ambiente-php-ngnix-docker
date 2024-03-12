<?php
use Core\Domain\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{

    public function test_attributes()
    {
        $category = new Category(
            id: '1',
            name: 'Category 1',
            description: 'Description of category 1',
            isActive: true
        );

        $this->assertEquals('Category 1', $category->name);
        $this->assertEquals('Description of category 1', $category->description);
        $this->assertTrue($category->isActive);
        
    }


    public function test_isActivated()
    {
        $category = new Category(
            name: 'Category 1',
            isActive: false
        );

        $this->assertFalse($category->isActive);

        $category->isActivated();

        $this->assertTrue($category->isActive);
        
    }

    public function test_disabled()
    {
        $category = new Category(
            name: 'Category 1',
            isActive: true
        );

        $this->assertTrue($category->isActive);

        $category->disabled();
        
        $this->assertFalse($category->isActive);
        
    }
  
}
