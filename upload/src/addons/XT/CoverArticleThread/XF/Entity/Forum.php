<?php

namespace XT\CoverArticleThread\XF\Entity;

class Forum extends XFCP_Forum
{
    public function getCoverImage()
    {
        if ($this->xt_cover_img_path)
        {
            $pather = \XF::app()['request.pather'];
            $imgPath = htmlspecialchars($pather ? $pather($this->xt_cover_img_path, 'base') : $this->xt_cover_img_path);
            return $imgPath;
        }
        else
        {
            $pather = \XF::app()['request.pather'];
            $defaultImg = 'styles/default/xt/dcat/defaultCover.jpg';
            $imgPath = htmlspecialchars($pather ? $pather($defaultImg, 'base') : $defaultImg);
            return $imgPath;
        }
    }
}