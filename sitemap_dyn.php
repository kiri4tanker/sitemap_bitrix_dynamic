<?
$host = preg_replace("/\:\d+/is", "", $_SERVER["HTTP_HOST"]);
$hostName = explode(".", $host)[0];
if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on"){
	$http = "https";
}
else{
	$http = "http";
}
$hostCurrent = "www.divano.ru";
$sitemapName = "";
if ($host !== $hostCurrent) {
$sitemapName = "/" . $hostName . "-sitemap-";
} else {
$sitemapName = "/sitemap-";
}
header("Content-Type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<sitemapindex xmlns="<?= $http ?>://www.sitemaps.org/schemas/sitemap/0.9"><sitemap><loc><?= $http ?>://<?= $host ?><?= $sitemapName ?>files.xml</loc><lastmod>2022-10-11T00:06:28+03:00</lastmod></sitemap><sitemap><loc><?= $http ?>://<?= $host ?><?= $sitemapName ?>iblock-1.xml</loc><lastmod>2022-10-15T17:00:16+03:00</lastmod></sitemap><sitemap><loc><?= $http ?>://<?= $host ?><?= $sitemapName ?>iblock-19.xml</loc><lastmod>2022-10-11T00:06:46+03:00</lastmod></sitemap><sitemap><loc><?= $http ?>://<?= $host ?><?= $sitemapName ?>iblock-29.xml</loc><lastmod>2022-10-11T00:06:47+03:00</lastmod></sitemap><sitemap><loc><?= $http ?>://<?= $host ?><?= $sitemapName ?>iblock-1.part1.xml</loc><lastmod>2022-10-15T23:30:21+03:00</lastmod></sitemap></sitemapindex>