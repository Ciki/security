<?php

/**
 * Test: Nette\Security\Permission Ensures that ACL-wide rules apply to privileges for a particular Role.
 */

use Nette\Security\Permission;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$acl = new Permission;
$acl->addRole('guest');
$acl->allow('guest');
Assert::true($acl->isAllowed('guest', NULL, 'somePrivilege'));
$acl->deny('guest');
Assert::false($acl->isAllowed('guest', NULL, 'somePrivilege'));
