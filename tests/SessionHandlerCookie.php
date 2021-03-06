<?php

require '../vendor/autoload.php';

class SessionHandlerCookieTest extends PHPUnit_Framework_TestCase {

  public function testCanConstruct() {
    $sh = new SessionHandler\Cookie;
    $this->assertInstanceOf('SessionHandler\Cookie', $sh);
  }

  public function testWritesHashedCookie() {
    $sh = new SessionHandler\Cookie;
    session_set_save_handler($sh, false);
    session_start();

    $_SESSION["foobar"] = "bar";

    $this->assertEquals($_COOKIE[session_id()], "");

    ob_end_clean();
  }

  public function testOpen() {}

  public function testRead() {}

  public function testWrite() {}

  public function testDestroy() {}

  public function testGc() {}

  public function testClose() {}
}
