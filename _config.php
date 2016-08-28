<?php

// Extend SiteConfig with the Social Media Links
Object::add_extension('SiteConfig', 'SocialMediaConfig');

// Extend Page_Controller with the Social Media Links
Object::add_extension('Page_Controller', 'SocialMediaController');

?>