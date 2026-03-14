<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$baseUrl = $protocol . "://" . $_SERVER['HTTP_HOST'];

$defaultSeo = [
    'url'       => $baseUrl . $_SERVER['REQUEST_URI'],
    'image'     => $baseUrl . '/assets/images/og-image.jpg',
    'type'      => 'website',
    'locale'    => 'en_IN',
    'site_name' => 'SLS Group',
    'twitter'   => '@slsgroup',
    'robots'    => 'index, follow',
];

$seo = array_merge($defaultSeo, $seo ?? []);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="preload" href="/assets/images/hero-video.mp4" as="video" type="video/mp4">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($seo['title']) ?></title>

<!-- PRIMARY SEO -->
<meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">
<meta name="keywords" content="<?= htmlspecialchars($seo['keywords']) ?>">
<meta name="robots" content="<?= $seo['robots'] ?>">
<link rel="canonical" href="<?= htmlspecialchars($seo['url']) ?>">

<!-- OPEN GRAPH -->
<meta property="og:type" content="<?= $seo['type'] ?>">
<meta property="og:title" content="<?= htmlspecialchars($seo['title']) ?>">
<meta property="og:description" content="<?= htmlspecialchars($seo['description']) ?>">
<meta property="og:url" content="<?= htmlspecialchars($seo['url']) ?>">
<meta property="og:image" content="<?= $seo['image'] ?>">
<meta property="og:site_name" content="<?= $seo['site_name'] ?>">
<meta property="og:locale" content="<?= $seo['locale'] ?>">

<!-- TWITTER -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($seo['title']) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($seo['description']) ?>">
<meta name="twitter:image" content="<?= $seo['image'] ?>">

<!-- FAVICON -->
<link rel="icon" href="/assets/favicon/favicon.ico">

<!-- STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "SLS Group",
  "url": "https://www.slsgroup.com",
  "logo": "https://www.slsgroup.com/assets/images/header_logo.png",
  "description": "<?= htmlspecialchars($seo['description']) ?>",
  "address": {
    "@type": "621116",
    "addressLocality": "Main office - 232/1A , VEPPANTHATTAI SOUTH, PERAMBALUR",
    "addressRegion": "Tamil Nadu",
    "addressCountry": "IN"
  }
}
</script>

<!-- PERFORMANCE -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<link rel="stylesheet" href="../public/common.css">
<link rel="stylesheet" href="../public/style.css">
</head>

<body>
<?php include __DIR__ . '/../layouts/header.php'; ?>