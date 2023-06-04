<?php
defined("ABSPATH") || exit();

class SuperbInfoContentConfig
{
    const THEME_LINK = 'https://superbthemes.com/petite-stories/';
    const DEMO_LINK = 'https://superbthemes.com/demo/petite-stories/';

    private $FEATURES = array();

    public function __construct()
    {
        $this->AddFeature(__("Customize Header Logo, Text & Background Color", "petite-stories"), "purple-paint-brush.svg");
        $this->AddFeature(__("Translation Ready", "petite-stories"), "purple-article-medium.svg");
        $this->AddFeature(__("Fully SEO Optimized", "petite-stories"), "purple-gauge.svg");
        $this->AddFeature(__("Customize All Fonts", "petite-stories"), "purple-article-medium.svg");
        $this->AddFeature(__("Customize All Colors", "petite-stories"), "purple-paint-brush.svg");
        $this->AddFeature(__("Importable Demo Content", "petite-stories"), "purple-images.svg");
        $this->AddFeature(__("Elementor Compatible", "petite-stories"), "purple-elementor-logo.svg");
        $this->AddFeature(__("Replace Copyright Text", "petite-stories"), "purple-copyright.svg");
        $this->AddFeature(__("Full-Width Page Template", "petite-stories"), "purple-frame-corners.svg");
        $this->AddFeature(__("Access All Child Themes", "petite-stories"), "purple-images.svg");
        $this->AddFeature(__("Customer Support and Documentation", "petite-stories"), "purple-files.svg");
        $this->AddFeature(__("Multiple Website Support", "petite-stories"), "purple-files.svg");

        $this->AddFeature(__("Show Full Posts on Blog", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Only Display Header Widgets on Front Page", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Show 'Continue Reading' Button on Blog", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show 'Go To Top' Button", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/show Shopping Cart in Navigation", "petite-stories"), "gear.svg");
        $this->AddFeature(__("'Related Posts' Section on Posts", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Add Custom Button to Header", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Only Show Header On Front Page", "petite-stories"), "gear.svg");
        $this->AddFeature(__("About The Author Section", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Next/Previous Post Buttons", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Categories and Tags", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Author Name From Byline", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Post Category on Blog", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Related Posts", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Sidebar on WooCommerce Pages", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Sidebar on Blog Feed, Search Page and Archive Pages", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Sidebar on Posts & Pages", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Header Button on Mobile", "petite-stories"), "gear.svg");
        $this->AddFeature(__("Hide/Show Header Tagline on Mobile", "petite-stories"), "gear.svg");


        $this->AddFeature(__("Remove 'Tag' from Tag Page Title", "petite-stories"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Author' from Author Page Title", "petite-stories"), "purple-article-medium.svg");
        $this->AddFeature(__("Remove 'Category' from Category Page Title", "petite-stories"), "purple-article-medium.svg");
    }

    private function AddFeature($title, $icon)
    {
        $this->FEATURES[] = array(
            "title" => $title,
            "icon" => $icon
        );
    }

    public function GetFeatures()
    {
        return $this->FEATURES;
    }
}
