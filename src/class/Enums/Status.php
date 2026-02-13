<?php

declare(strict_types = 1);

namespace Class\Enums;

enum Status{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'paid';

    public const ALL_STATUSES = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined',
    ];
}