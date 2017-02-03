<?php

class CookieTest extends \Codeception\TestCase\WPTestCase {

	private $cookie;
    private static $name = 'test';
    private static $value = 'value';

	/**
	 * Html attribute
	 *
	 * @var array
	 */
	private $attr = array();

	public function setUp() {
		// before
		parent::setUp();

		$this->cookie = new Overclokk\Cookie\Cookie();

		// your set up methods here
	}

	public function tearDown() {
		// your tear down methods here

		// then
		parent::tearDown();
	}

    /**
     * @test
     * it should be instantiatable
     */
    public function it_should_be_instantiatable() {
        $this->assertInstanceOf( 'Overclokk\Cookie\Cookie', $this->cookie );
    }

    /**
     * @test
     * it_should_be_instance_of_Cookie_Interface
     */
    public function it_should_be_instance_of_Cookie_Interface() {
        $this->assertInstanceOf( 'Overclokk\Cookie\Cookie_Interface', $this->cookie );
    }

    /**
     * @test
     * it_should_be_an_object
     */
    public function it_should_be_an_object() {
        $this->assertTrue( is_object( $this->cookie ) );
    }

    /**
     * @covers Cookie::_set_it_should_be_Return_true()
     */
    public function test_set_it_should_be_Return_true()
    {
        $this->assertTrue( $this->cookie->set( self::$name, self::$value ), 'Cookie doesn\'t set.' );
    }

    /**
     * @covers Cookie::_forever_it_should_be_Return_true()
     */
    public function test_forever_it_should_be_Return_true()
    {
        $this->assertTrue( $this->cookie->forever( self::$name, self::$value ), 'Cookie doesn\'t set.' );
    }

    /**
     * @covers Cookie::_delete_it_should_be_Return_true()
     */
    public function test_delete_it_should_be_Return_true()
    {
    	$this->cookie = new Overclokk\Cookie\Cookie( [ self::$name => self::$value ] );
        $this->assertTrue( $this->cookie->delete( self::$name, self::$value ), 'Cookie doesn\'t set.' );
        $this->assertNull( $this->cookie->get( self::$name ), 'The cookie is set');
    }

    /**
     * @covers Cookie::_set_it_should_be_return_true_if_value_is_null()
     */
    public function test_set_it_should_be_return_true_if_value_is_null()
    {
        $this->assertTrue( $this->cookie->set( self::$name, null ), 'Cookie doesn\'t set.' );
    }

    /**
     * @covers Cookie::_get_it_should_be_return_self_value()
     */
    public function test_get_it_should_be_return_self_value()
    {
    	$this->cookie = new Overclokk\Cookie\Cookie( [ self::$name => self::$value ] );
        $this->assertEquals( self::$value, $this->cookie->get( self::$name ), 'Cookie doesn\'t set.');
    }
}
