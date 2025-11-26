<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ URL::to('/') }}/sitemap/basic.xml</loc>
        <lastmod><?= date('Y-m-d', time()) ?></lastmod>
    </sitemap>  
</sitemapindex>