<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfAbout extends WebTestCase {

    function testPage() {
        $this->get('http://localhost/mvc_php/test_mvc.php');
        $this->assertTitle('Simple MVC');
    }

    function testButton(){
    	$this->get('http://localhost/mvc_php/test_mvc.php');
    	$this->click('Sort');
    	$this->assertTitle(new PatternExpectation('/Simple MVC/'));

    }

    function testcheckSelectBox(){
    	$this->get('http://localhost/mvc_php/test_mvc.php');
    	$this->assertFieldById('selection', 'bubble');
    }

    function testDefaultValue(){
    	$this->get('http://localhost/mvc_php/test_mvc.php');
    	$this->assertField('inputValue', 'input');
    	$this->setField('inputValue', 'New value');
        $this->click('Sort');
    }
}

?>