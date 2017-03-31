<?php
require_once('simpletest/autorun.php');
require_once('simpletest/web_tester.php');

class TestOfAbout extends WebTestCase {
    function testPage() {
        $this->get('http://localhost/paolo/test_mvc.php');
    }
}

?>