<?php

use Dcat\Admin\Admin;
use App\Actions\DcatSystemConfig;
use Dcat\Admin\Layout\Navbar;
use Dcat\Admin\Support\Helper;
use App\Admin\Actions\SystemCarbonConfig;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */
config(['admin' => systemConfig()]);
config(['carbon' => systemCarbonConfig()]);
config(['app.locale' => config('admin.lang') ?: config('app.locale')]);

Admin::navbar(function (Navbar $navbar) {
    if (!Helper::isAjaxRequest()) {
        $navbar->right(DcatSystemConfig::make());
//        $navbar->right(SystemCarbonConfig::make());
    }
});
