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

use Assert\Assertion;

/**
 * Class NoOpMessageConverter
 *
 * The NoOpMessageConverter does not perform any conversion logic.
 * It simply returns DomainMessage::toArray.
 * The converter acts as a default implementation but allows replacement
 * with a custom converter using some special logic.
 *
 * @package Prooph\Common\Messaging
 * @author Alexander Miertsch <contact@prooph.de>
 */
final class NoOpMessageConverter implements MessageConverter
{
    public function convertToArray(Message $domainMessage) : array
    {
        Assertion::isInstanceOf($domainMessage, DomainMessage::class);

        return $domainMessage->toArray();
    }
}
