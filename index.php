<?php
define('BASE_PATH',__DIR__);
$http=isset($_SERVER['HTTPS'])?'https':'http';
$host=$_SERVER['HTTP_HOST'];
$request_uri=$_SERVER['REQUEST_URI'];
$path=parse_url($request_uri,PHP_URL_PATH);

switch($path){
    case '/':
        $seo = [
            'title' => 'SLS Group | Engineering Excellence in Tamil Nadu',
            'description' => 'Leading engineering company in Tamil Nadu delivering world-class construction and infrastructure solutions.',
            'keywords'=>'SLS Group, engineering company India, construction company Tamil Nadu, infrastructure solutions, industrial   engineering'
        ];
        require __DIR__.'/views/home.php';
        break;
    case '/about':
        $seo = [
            'title' => 'About SLS Group | Engineering & Infrastructure Experts',
            'description' => 'Learn about SLS Group’s history, mission, and expertise in engineering, construction, and agricultural infrastructure development.',
            'keywords' => 'About SLS Group, engineering company Tamil Nadu, infrastructure company India, agricultural engineering experts'
        ];
        require __DIR__.'/views/about.php';
        break;
    case '/contact':
         $seo = [
            'title' => 'About SLS Group | Engineering & Infrastructure Experts',
            'description' => 'Learn about SLS Group’s history, mission, and expertise in engineering, construction, and agricultural infrastructure development.',
            'keywords' => 'About SLS Group, engineering company Tamil Nadu, infrastructure company India, agricultural engineering experts'
        ];
        require __DIR__.'/views/contact.php';
        break;
}
?>