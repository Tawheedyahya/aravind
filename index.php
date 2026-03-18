<?php
define('BASE_PATH', __DIR__);

$http        = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$host        = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['REQUEST_URI'];
$path        = parse_url($request_uri, PHP_URL_PATH);

switch ($path) {

    case '/':
        $seo = [
            'title' => 'SLS Group | Electrical Infrastructure & Engineering Company in Tamil Nadu',
            'description' => 'SLS Group is a leading electrical infrastructure and engineering company in Tamil Nadu specializing in substation contracting, electromechanical design, and turnkey power solutions.',
            'keywords' => 'electrical contractor Tamil Nadu, substation contractor India, engineering company Tamil Nadu, electromechanical contractor India, infrastructure company Tamil Nadu'
        ];
        require __DIR__ . '/views/home.php';
        break;

    case '/about':
        $seo = [
            'title' => 'About SLS Group | Electrical Infrastructure & Engineering Experts',
            'description' => 'Discover SLS Group, a Tamil Nadu based engineering and electrical infrastructure company delivering high-voltage substation projects, electromechanical installations, and turnkey power solutions.',
            'keywords' => 'about SLS Group, electrical engineering company India, infrastructure contractor Tamil Nadu, power engineering company India'
        ];
        require __DIR__ . '/views/about.php';
        break;

    case '/businesses':
        $seo = [
            'title' => 'SLS Group Businesses | Engineering, Energy, Infrastructure & Agriculture',
            'description' => 'Explore the diversified businesses of SLS Group including electrical infrastructure contracting, blue metals supply, agriculture, and industrial services.',
            'keywords' => 'SLS Group businesses, engineering services Tamil Nadu, infrastructure company India, energy contractor Tamil Nadu'
        ];
        require __DIR__ . '/views/businesses.php';
        break;

    case '/projects':
        $seo = [
            'title' => 'SLS Group Projects | Electrical Infrastructure & Substation Projects',
            'description' => 'View SLS Group’s portfolio of electrical infrastructure projects including high-voltage substations, grid works, and electromechanical installations.',
            'keywords' => 'substation projects India, electrical infrastructure projects Tamil Nadu, electromechanical installation contractor'
        ];
        require __DIR__ . '/views/projects.php';
        break;

    case '/gallery':
        $seo = [
            'title' => 'SLS Group Gallery | Engineering Projects & Infrastructure Work',
            'description' => 'A visual showcase of SLS Group’s engineering expertise including electrical infrastructure, substation contracting, and industrial installations.',
            'keywords' => 'engineering gallery India, electrical infrastructure projects photos, substation contractor gallery'
        ];
        require __DIR__ . '/views/gallery.php';
        break;

    case '/contact':
        $seo = [
            'title' => 'Contact SLS Group | Electrical Infrastructure Contractor Tamil Nadu',
            'description' => 'Get in touch with SLS Group for electrical infrastructure projects, substation contracting, and electromechanical engineering solutions.',
            'keywords' => 'contact electrical contractor Tamil Nadu, substation contractor contact India'
        ];
        require __DIR__ . '/views/contact.php';
        break;
    case '/slsbim':
        $seo = [
            'title' => 'SLS BIM Services | Building Information Modelling Engineering Solutions',
            'description' => 'SLS BIM provides advanced building information modelling services for infrastructure, engineering, and construction projects.',
            'keywords' => 'BIM services India, building information modelling Tamil Nadu, BIM engineering solutions'
        ];
        require __DIR__ . '/views/slsbim.php';
        break;
    case '/alshams':
        $seo = [
            'title' => 'Al Shams Division | Sustainable Energy & Engineering Solutions',
            'description' => 'Al Shams, a division of SLS Group, focuses on sustainable engineering and energy solutions for modern infrastructure.',
            'keywords' => 'solar engineering Tamil Nadu, renewable energy contractor India, sustainable infrastructure engineering'
        ];
        require __DIR__ . '/views/alshams.php';
        break;

    case '/farm':
        $seo = [
            'title' => 'SLS Farm | Generational Agriculture & Sustainable Farming Tamil Nadu',
            'description' => 'SLS Farm is a legacy agricultural operation spanning mango and coconut plantations, seasonal crops, goat rearing and poultry farming in Tamil Nadu.',
            'keywords' => 'SLS Farm Tamil Nadu, agricultural farm Tamil Nadu, mango coconut plantation, sustainable farming India'
        ];
        require __DIR__ . '/views/farm.php';
        break;

    case '/marriage-hall':
        $seo = [
            'title' => 'SLS Marriage Hall | Premium Wedding & Event Venue Perambalur Tamil Nadu',
            'description' => 'SLS Marriage Hall is an elegant event venue on the Perambalur-Attur National Highway, ideal for weddings, receptions and large gatherings.',
            'keywords' => 'SLS Marriage Hall, wedding hall Perambalur, event venue Tamil Nadu, convention hall Attur highway'
        ];
        require __DIR__ . '/views/marriage-hall.php';
        break;

    case '/agency':
        $seo = [
            'title' => 'SLS Agency | Reliable Fuel & Petrol Station Tamil Nadu',
            'description' => 'SLS Agency operates a modern fuel station providing high-quality petrol and diesel with accurate dispensing, on-site delivery and reliable service.',
            'keywords' => 'SLS Agency petrol pump, fuel station Tamil Nadu, diesel petrol station, fuel delivery Tamil Nadu'
        ];
        require __DIR__ . '/views/agency.php';
        break;

    case '/contracting':
        $seo = [
            'title' => 'SLS Contracting Pvt Ltd | Electrical Infrastructure & Engineering Tamil Nadu',
            'description' => 'SLS Contracting Pvt Ltd delivers high-quality electrical substation, power transmission and electromechanical engineering solutions across India.',
            'keywords' => 'SLS Contracting, electrical contractor Tamil Nadu, substation works India, power transmission contractor, Alshams GCC India'
        ];
        require __DIR__ . '/views/contracting.php';
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
