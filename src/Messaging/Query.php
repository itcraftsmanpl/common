<?php
/**
 * This file is part of the prooph/common.
 *  (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 *  (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

declare (strict_types=1);

namespace Prooph\Common\Messaging;

/**
 * Class Query
 *
 * This is the base class for queries used to fetch data from read model.
 *
 * @package Prooph\Common\Messaging
 * @author Alexander Miertsch <contact@prooph.de>
 */
abstract class Query extends DomainMessage
{
    public function messageType() : string
    {
        return self::TYPE_QUERY;
    }
}
