<?php
define('TEMPLATES_DIR', './templates/');
define('LAYOUTS_DIR', 'layouts/');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = ['login' => 'admin'];
switch ($page) {
    case 'index':
        $params['name'] = 'Камрад';
        break;
    case 'catalog':
        $params['catalog'] = [
            [
                'name' => 'чай',
                'price' => 10
            ],
            [
                'name' => 'ватрушка',
                'price' => 5
            ],
            [
                'name' => 'булик',
                'price' => 3
            ]
        ];
        break;
}

function render($page, $params = []) {
    return renderTemplates(LAYOUTS_DIR . 'main',
        [
            'menu' => renderTemplates('menu'),
            'content' => renderTemplates($page, $params)
        ]);
}

function renderTemplates($page, $params = []) {
    ob_start();
    $fileName = TEMPLATES_DIR . $page . ".php";

    if (!is_null($params)) {
        extract($params);
    }

//    тожк что и extract();
//    foreach ($params as $key => $item) {
//        $$key = $item;
//    }

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        die("Страницы {$page} нет! 404!!!");
    }

    return ob_get_clean();
}

echo render($page, $params);