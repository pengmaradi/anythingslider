<?php

namespace Xp\Anythingslider\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Xiaoling Peng <pengmaradi@gmail.com>, pengmaradi
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Anythingslider
 */
class Anythingslider extends AbstractEntity
{
    protected string $title = '';

    protected int $type = 0;

    protected string $description = '';

    protected string $source = '';

    protected ?FileReference $video = null;

    protected ?FileReference $image = null;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    public function getVideo(): ?FileReference
    {
        return $this->video;
    }

    public function setVideo(FileReference $video): void
    {
        $this->video = $video;
    }

    public function getImage(): ?FileReference
    {
        return $this->image;
    }

    public function setImage(FileReference $image): void
    {
        $this->image = $image;
    }
}
