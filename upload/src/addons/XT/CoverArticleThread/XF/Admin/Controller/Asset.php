<?php

namespace XT\CoverArticleThread\XF\Admin\Controller;

class Asset extends XFCP_Asset
{
    protected function getAssetPermissionMap(): array
    {
        return array_merge([
            'cover_img' => 'style',
        ], parent::getAssetPermissionMap());
    }
}