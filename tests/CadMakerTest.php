<?php

namespace DXFWriter\tests;

use DXFWriter\CadMaker;
use DXFWriter\Page;

class CadMakerTest extends \PHPUnit_Framework_TestCase
{
    public function testAddPage(){
        $pageExpected = new Page("Page 1");

        $cad = new CadMaker();
        $pageGenerated = $cad->pages[$cad->addPage("Page 1")];
        $this->assertEquals($pageExpected, $pageGenerated);
    }

    protected function setUp(){

    }
}