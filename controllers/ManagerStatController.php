<?php

/**
 * Контроллер ManagerStatController
 * Просмотр статистики в панели менеджера
 */
class ManagerStatController extends ManagerBase
{

    /**
     * Action для страницы "Просмотр статистики"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkManager();

        // Подключаем вид
        require_once(ROOT . '/views/manager_stat/index.php');
        return true;
    }

}
