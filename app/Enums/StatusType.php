<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static Actived()
 * @method static static Suspended()
 * @method static static Deleted()
 */
final class StatusType extends Enum
{
    const Pending = 'Pending';
    const Actived = 'Actived';
    const Suspended = 'Suspended';
    const Deleted = 'Deleted';
}
