<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Page as BasePage;

class Page extends BasePage
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '';
    }

    /**
     * Get the global element shortcuts for the site.
     *
     * @return array
     */
    public static function siteElements()
    {
        return [
            //
        ];
    }
}
