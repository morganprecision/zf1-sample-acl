<?php
require_once APPLICATION_PATH . '/models/Acl.php';

class App_Model_AclTest extends PHPUnit_Framework_TestCase
{
    public function testGuestCannotViewOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_GUEST,
            App_Model_Acl::RESOURCE_ORDER,
            'view'
        ));
    }

    public function testGuestCannotManageOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_GUEST,
            App_Model_Acl::RESOURCE_ORDER,
            'manage'
        ));
    }

    public function testGuestCanViewProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_GUEST,
            App_Model_Acl::RESOURCE_PRODUCT,
            'view'
        ));
    }

    public function testGuestCannotManageProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_GUEST,
            App_Model_Acl::RESOURCE_PRODUCT,
            'manage'
        ));
    }

    public function testGuestCannotListUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_GUEST,
            App_Model_Acl::RESOURCE_USER,
            'list'
        ));
    }

    public function testGuestCannotManageUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_GUEST,
            App_Model_Acl::RESOURCE_USER,
            'manage'
        ));
    }

    public function testEmployeeCanViewOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_EMPLOYEE,
            App_Model_Acl::RESOURCE_ORDER,
            'view'
        ));
    }

    public function testEmployeeCannotManageOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_EMPLOYEE,
            App_Model_Acl::RESOURCE_ORDER,
            'manage'
        ));
    }

    public function testEmployeeCanViewProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_EMPLOYEE,
            App_Model_Acl::RESOURCE_PRODUCT,
            'view'
        ));
    }

    public function testEmployeeCanManageProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_EMPLOYEE,
            App_Model_Acl::RESOURCE_PRODUCT,
            'manage'
        ));
    }

    public function testEmployeeCannotListUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_EMPLOYEE,
            App_Model_Acl::RESOURCE_USER,
            'list'
        ));
    }

    public function testEmployeeCannotManageUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_EMPLOYEE,
            App_Model_Acl::RESOURCE_USER,
            'manage'
        ));
    }

    public function testManagerCanViewOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_MANAGER,
            App_Model_Acl::RESOURCE_ORDER,
            'view'
        ));
    }

    public function testManagerCanManageOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_MANAGER,
            App_Model_Acl::RESOURCE_ORDER,
            'manage'
        ));
    }

    public function testManagerCanViewProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_MANAGER,
            App_Model_Acl::RESOURCE_PRODUCT,
            'view'
        ));
    }

    public function testManagerCanManageProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_MANAGER,
            App_Model_Acl::RESOURCE_PRODUCT,
            'manage'
        ));
    }

    public function testManagerCanListUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_MANAGER,
            App_Model_Acl::RESOURCE_USER,
            'list'
        ));
    }

    public function testManagerCannotManageUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertFalse($acl->isAllowed(
            App_Model_Acl::ROLE_MANAGER,
            App_Model_Acl::RESOURCE_USER,
            'manage'
        ));
    }

    public function testSuperadminCanViewOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_SUPERADMIN,
            App_Model_Acl::RESOURCE_ORDER,
            'view'
        ));
    }

    public function testSuperadminCanManageOrder()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_SUPERADMIN,
            App_Model_Acl::RESOURCE_ORDER,
            'manage'
        ));
    }

    public function testSuperadminCanViewProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_SUPERADMIN,
            App_Model_Acl::RESOURCE_PRODUCT,
            'view'
        ));
    }

    public function testSuperadminCanManageProduct()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_SUPERADMIN,
            App_Model_Acl::RESOURCE_PRODUCT,
            'manage'
        ));
    }

    public function testSuperadminCanListUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_SUPERADMIN,
            App_Model_Acl::RESOURCE_USER,
            'list'
        ));
    }

    public function testSuperadminCanManageUsers()
    {
        $acl = new App_Model_Acl();
        $this->assertTrue($acl->isAllowed(
            App_Model_Acl::ROLE_SUPERADMIN,
            App_Model_Acl::RESOURCE_USER,
            'manage'
        ));
    }
}
