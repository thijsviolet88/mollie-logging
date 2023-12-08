<?php

namespace Violet88\MollieLogging;

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldAddNewButton;
use Violet88\MollieLogging\MollieLog;

class MollieLogAdmin extends ModelAdmin
{
    private static $menu_title = 'Mollie logs';
    private static $url_segment = 'mollie-logs';
    private static $managed_models = [
        MollieLog::class
    ];
    private static $menu_icon_class = 'font-icon-list';

    public function updateGridField(GridField $grid)
    {
        $grid->getConfig()->removeComponentsByType(GridFieldAddNewButton::class);
    }
}
