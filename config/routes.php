<?php

return array(
    // Товар:
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    // Каталог:
    'catalog' => 'catalog/index', // actionIndex в CatalogController
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    // Бренд товаров:
    'brand/([0-9]+)/page-([0-9]+)' => 'catalog/brand/$1/$2', // actionBrand в CatalogController   
    'brand/([0-9]+)' => 'catalog/brand/$1', // actionBrand в CatalogController
    // Корзина:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'cabinet/history' => 'cabinet/history',
    // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    
     //Статистика
    'admin/stat' => 'adminStat/index',
    
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление брендами:    
    'admin/brand/create' => 'adminBrand/create',
    'admin/brand/update/([0-9]+)' => 'adminBrand/update/$1',
    'admin/brand/delete/([0-9]+)' => 'adminBrand/delete/$1',
    'admin/brand' => 'adminBrand/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    // Управление заказами для менеджера:    
    'manager/order/update/([0-9]+)' => 'managerOrder/update/$1',
    'manager/order/delete/([0-9]+)' => 'managerOrder/delete/$1',
    'manager/order/view/([0-9]+)' => 'managerOrder/view/$1',
    'manager/order' => 'managerOrder/index',
    //Статистика
    'manager/stat' => 'managerStat/index',
    // Управление пользователями:    
    'admin/user/create' => 'adminUser/create',
    'admin/user/update/([0-9]+)' => 'adminUser/update/$1',
    'admin/user/delete/([0-9]+)' => 'adminUser/delete/$1',
    'admin/user/view/([0-9]+)' => 'adminUser/view/$1',
    'admin/user' => 'adminUser/index',
    // Админпанель:
    'admin' => 'admin/index',
    
//    'admin/changepass' => 'admin/changepass',
    // О магазине
    'contacts' => 'site/contact',
    'about' => 'site/about',
    
    // Поиск
    'search' => 'site/search',
    // Подбор ноутбука
    'choice' => 'site/choice',
    // Результат теста
    'result' => 'site/result',
    
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController     
);
