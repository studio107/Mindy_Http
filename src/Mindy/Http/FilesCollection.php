<?php
/**
 *
 *
 * All rights reserved.
 *
 * @author Falaleev Maxim
 * @email max@studio107.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 12/06/14.06.2014 19:58
 */

namespace Mindy\Http;

use Mindy\Helper\Collection;
use Mindy\Helper\Creator;
use Mindy\Helper\File;

class FilesCollection extends Collection
{
    public $uploadClass = '\Mindy\Http\UploadedFile';

    public function __construct(array $data = [])
    {
        foreach ($data as $item) {
            $this->data[] = Creator::createObject($this->uploadClass, $item);
        }
    }
}