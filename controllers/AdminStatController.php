<?php

/**
 * Контроллер AdminStatController
 * Просмотр статистики в админпанели 
 */
class AdminStatController extends AdminBase
{

    /**
     * Action для страницы "Просмотр статистики"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_stat/index.php');
        return true;
    }

}
