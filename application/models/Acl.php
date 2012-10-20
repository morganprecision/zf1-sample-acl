<?php
/**
 * Sample ACL class
 *
 * @author Eugene Morgan <em@morganprecision.com>
 */
class App_Model_Acl extends Zend_Acl
{
    const ROLE_GUEST = 'guest';
    const ROLE_EMPLOYEE = 'employee';
    const ROLE_MANAGER = 'manager';
    const ROLE_SUPERADMIN = 'superadmin';

    const RESOURCE_ORDER = 'order';
    const RESOURCE_PRODUCT = 'product';
    const RESOURCE_USER = 'user';

    public function __construct()
    {
        // Roles
        $this->addRole(new Zend_Acl_Role(self::ROLE_GUEST));
        $this->addRole(new Zend_Acl_Role(self::ROLE_EMPLOYEE), self::ROLE_GUEST);
        $this->addRole(
            new Zend_Acl_Role(self::ROLE_MANAGER),
            self::ROLE_EMPLOYEE
        );
        $this->addRole(new Zend_Acl_Role(self::ROLE_SUPERADMIN));

        // Deny by default
        $this->deny();

        // Order resource
        $this->addResource(new Zend_Acl_Resource(self::RESOURCE_ORDER));
        $this->allow(self::ROLE_EMPLOYEE, self::RESOURCE_ORDER, 'view');
        $this->allow(self::ROLE_MANAGER, self::RESOURCE_ORDER, 'manage');

        // Product resource
        $this->addResource(new Zend_Acl_Resource(self::RESOURCE_PRODUCT));
        $this->allow(self::ROLE_GUEST, self::RESOURCE_PRODUCT, 'view');
        $this->allow(self::ROLE_EMPLOYEE, self::RESOURCE_PRODUCT, 'manage');

        // User resource
        $this->addResource(new Zend_Acl_Resource(self::RESOURCE_USER));
        $this->allow(self::ROLE_MANAGER, self::RESOURCE_USER, 'list');

        // Let superadmin do anything
        $this->allow(self::ROLE_SUPERADMIN);
    }
}
