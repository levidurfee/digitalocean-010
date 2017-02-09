<?php

namespace wappr\digitalocean\Requests\DropletActions;

use wappr\digitalocean\RequestContract;

class DropletActionsRequest extends RequestContract
{
    /* These are for simple requests and only require the type. */
    const ENABLE_BACKUPS = 'enable_backups';
    const DISABLE_BACKUPS = 'disable_backups';
    const REBOOT = 'reboot';
    const POWER_CYCLE = 'power_cycle';
    const SHUTDOWN = 'shutdown';
    const POWER_OFF = 'power_off';
    const POWER_ON = 'power_on';
    const RESTORE = 'restore';
    const PASSWORD_RESET = 'password_reset';
    const ENABLE_IPV6 = 'enable_ipv6';
    const ENABLE_PRIVATE_NETWORKING = 'enable_private_networking';

    /* These require more than just the type. */
    const RESIZE = 'resize';
    const REBUILD = 'rebuild';
    const RENAME = 'rename';
    const CHANGE_KERNEL = 'change_kernel';
    const SNAPSHOT = 'snapshot';
}