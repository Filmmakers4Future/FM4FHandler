<?php
  // this is an XML file
  header("Content-Type: application/xml");
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>https://filmmakersforfuture.org/</loc>
    <changefreq>weekly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/index.php")) ?></lastmod>
    <priority>1</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/contact</loc>
    <changefreq>monthly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/contact.php")) ?></lastmod>
    <priority>0.4</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/demands</loc>
    <changefreq>weekly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/demands.php")) ?></lastmod>
    <priority>0.8</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/greenfilmmaking</loc>
    <changefreq>weekly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/greenfilmmaking.php")) ?></lastmod>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/legal</loc>
    <changefreq>monthly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/legal.php")) ?></lastmod>
    <priority>0</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/participate</loc>
    <changefreq>weekly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/participate.php")) ?></lastmod>
    <priority>0.6</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/privacy</loc>
    <changefreq>monthly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/privacy.php")) ?></lastmod>
    <priority>0</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/signatures</loc>
    <changefreq>daily</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/signatures.php")) ?></lastmod>
    <priority>0.9</priority>
  </url>
  <url>
    <loc>https://filmmakersforfuture.org/videos</loc>
    <changefreq>weekly</changefreq>
    <lastmod><?= date("Y-m-d", filemtime(__DIR__."/videos.php")) ?></lastmod>
    <priority>0.5</priority>
  </url>
</urlset>
