<?php

namespace XT\CoverArticleThread;

use XF\Mvc\Entity\Entity;

class Listener
{
    public static function forumEntityStructure(\XF\Mvc\Entity\Manager $em, \XF\Mvc\Entity\Structure &$structure)
    {
        $structure->columns['xt_cover_img_path'] = ['type' => Entity::STR, 'default' => NULL, 'nullable' => true];
    }
}