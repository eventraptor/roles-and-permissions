<?php

namespace Tarzancodes\RolesAndPermissions\Helpers;

use Illuminate\Support\Collection;
use Tarzancodes\RolesAndPermissions\Collections\PermissionCollection;

abstract class BasePermission extends BaseEnum
{
    /**
     * The class used to wrap the values when the `collect()` method is called.
     *
     * @var Collection
     */
    protected static $collectionClass = PermissionCollection::class;

    /**
     * Get all permissions
     *
     * @return array
     */
    public static function all(): array
    {
        return static::getValues();
    }
}
