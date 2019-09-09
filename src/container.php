<?php

$container = $app->getContainer();

$container['conf'] = function() {
    $config = parse_ini_file(CONF_DIR . '/database.ini', true);

    return $config;
};

$container['connection'] = function() use ($container) {
    $params = $container->get('conf')['database-config'];
    $config = new \Doctrine\DBAL\Configuration();

    return \Doctrine\DBAL\DriverManager::getConnection($params, $config);
};
