<?php

namespace XT\CoverArticleThread\XF\Admin\Controller;

use XF\Mvc\FormAction;
use XF\Mvc\ParameterBag;

class Forum extends XFCP_Forum
{
    protected function saveTypeData(FormAction $form, \XF\Entity\Node $node, \XF\Entity\AbstractNode $data)
    {
        $result = parent::saveTypeData($form, $node, $data);

        /** @var \XF\Entity\Forum $data */
        $data->xt_cover_img_path = $this->filter('xt_cover_img_path', 'str');

        return $result;
    }
}