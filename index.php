<?php
define('BASE_PATH', __DIR__);

$http        = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$host        = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$path        = parse_url($request_uri, PHP_URL_PATH);

switch ($path) {

    case '/':
        $seo = [
            'title'       => 'SLS Group | Engineering Excellence in Tamil Nadu',
            'description' => 'Leading engineering company in Tamil Nadu delivering world-class construction and infrastructure solutions.',
            'keywords'    => 'SLS Group, engineering company India, construction company Tamil Nadu, infrastructure solutions, industrial engineering'
        ];
        require __DIR__ . '/views/home.php';
        break;

    case '/about':
        $seo = [
            'title'       => 'About SLS Group | Engineering & Infrastructure Experts',
            'description' => 'Learn about SLS Group\'s history, mission, and expertise in engineering, construction, and agricultural infrastructure development.',
            'keywords'    => 'About SLS Group, engineering company Tamil Nadu, infrastructure company India, agricultural engineering experts'
        ];
        require __DIR__ . '/views/about.php';
        break;

    case '/businesses':
        $seo = [
            'title'       => 'Our Businesses | SLS Group',
            'description' => 'Explore the diverse business verticals of SLS Group — from engineering and construction to energy, hospitality, and agriculture.',
            'keywords'    => 'SLS businesses, SLS Contracting, SLS Blue Metals, SLS Agency, SLS Farm, SLS Marriage Hall'
        ];
        require __DIR__ . '/views/businesses.php';
        break;

    case '/projects':
        $seo = [
            'title'       => 'Project Portfolio | SLS Group',
            'description' => 'Discover SLS Group\'s completed and ongoing projects in electrical infrastructure, construction, and more.',
            'keywords'    => 'SLS projects, substation projects, electromechanical projects, infrastructure Tamil Nadu'
        ];
        require __DIR__ . '/views/projects.php';
        break;

    case '/gallery':
        $seo = [
            'title'       => 'Visual Gallery | SLS Group',
            'description' => 'A window into SLS Group\'s facilities, operations, and successful project outcomes across all divisions.',
            'keywords'    => 'SLS gallery, SLS Group photos, engineering gallery, construction gallery Tamil Nadu'
        ];
        require __DIR__ . '/views/gallery.php';
        break;

    case '/contact':
        $seo = [
            'title'       => 'Contact SLS Group | Get in Touch',
            'description' => 'Contact SLS Group for enquiries about engineering, construction, energy, and infrastructure projects.',
            'keywords'    => 'Contact SLS Group, SLS enquiry, SLS Group Tamil Nadu contact'
        ];
        require __DIR__ . '/views/contact.php';
        break;

    default:
        http_response_code(404);
        $seo = [
            'title'       => '404 — Page Not Found | SLS Group',
            'description' => 'The page you are looking for does not exist.',
            'keywords'    => ''
        ];
        // Optional: create views/404.php for a custom error page
        if (file_exists(__DIR__ . '/views/404.php')) {
            require __DIR__ . '/views/404.php';
        } else {
            echo '<h1 style="text-align:center;margin-top:80px;font-family:sans-serif;">404 — Page Not Found</h1>';
        }
        break;
}
?>