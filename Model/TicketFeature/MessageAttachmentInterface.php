<?php

/*
 * This file is part of HackzillaTicketBundle package.
 *
 * (c) Daniel Platt <github@ofdan.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hackzilla\Bundle\TicketBundle\Model\TicketFeature;

use Hackzilla\Bundle\TicketBundle\Model\TicketMessageInterface;
use Symfony\Component\HttpFoundation\File\File;

interface MessageAttachmentInterface extends TicketMessageInterface
{
    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return $this
     */
    public function setAttachmentFile(File $file = null);

    /**
     * @return File
     */
    public function getAttachmentFile();

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setAttachmentName($name);

    /**
     * @return string
     */
    public function getAttachmentName();

    /**
     * @param int $size Size in bytes
     *
     * @return $this
     */
    public function setAttachmentSize($size);

    /**
     * @return string
     */
    public function getAttachmentSize();

    /**
     * @param string $mimeType Attachment mime type
     *
     * @return $this
     */
    public function setAttachmentMimeType($mimeType);

    /**
     * @return string
     */
    public function getAttachmentMimeType();
}
