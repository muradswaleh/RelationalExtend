<?php
/**
 * Bootstrap theme info file
 *
 * @author     Ahmed Maawy
 * @copyright  2011 - 2012 Ahmed Maawy
 */

namespace testtheme;

class Testtheme_Info extends \ThemeInfo implements \IInfo  {

    /**
     * Get extension meta data
     *
     * @return void
     */
    
    public function info()
    {
        $this->build_theme_data("Test theme", "Built on Twitter Bootstrap", "", time(), "1.0");
        $this->build_theme_layout_data("layout.html", "Main layout file", "", 0);
        $this->build_theme_partial_data("partial.html", "Main partial file", "", 0);
        $this->build_theme_javascript_data("bootstrap.js", "Sample JS file", "");
        $this->build_theme_style_data("bootstrap.css", "Sample CSS file", "");

        return array(\CMSTheme::THEME_PREFIX => $this->theme_data,
            \CMSTheme::LAYOUT_PREFIX => $this->layout_data,
            \CMSTheme::PARTIAL_PREFIX => $this->partial_data,
            \CMSTheme::JS_PREFIX => $this->js_data,
            \CMSTheme::CSS_PREFIX => $this->css_data
        );
    }
}
