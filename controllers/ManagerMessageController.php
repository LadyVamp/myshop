<?php

/**
 * Контроллер ManagerMessageController
 * Управление сообщениями в панель менеджера
 */
class ManagerMessageController extends ManagerBase
{

    /**
     * Action для страницы "Управление сообщениями"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkManager();

        // Получаем список сообщений
        $messagesList = Message::getMessagesList();

        // Подключаем вид
        require_once(ROOT . '/views/manager_message/view.php');
        return true;
    }
    
    /**
     * Action для страницы "Просмотр сообщений"
     */
    public function actionView($id)
    {
        // Проверка доступа
        self::checkManager();

        // Получаем данные о конкретном заказе
        $message = Message::getMessageById($id);

//        // Получаем массив с идентификаторами и количеством товаров
//        $messagesQuantity = json_decode($message['messages'], true);
//
//        // Получаем массив с индентификаторами товаров
//        $messagesIds = array_keys($messagesQuantity);
//
//        // Получаем список товаров в заказе
//        $messages = Message::getMessagesByIds($messagesIds);

        // Подключаем вид
        require_once(ROOT . '/views/manager_message/view.php');
        return true;
    }


    }
