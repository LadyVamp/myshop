<?php

/**
 * Класс Message - модель для работы с сообщениями
 */
class Message
{

    /**
     * Сохранение заказа 
     * @param string $userName <p>Имя</p>
     * @param string $userPhone <p>Телефон</p>
     * @param string $userComment <p>Комментарий</p>
     * @param integer $userId <p>id пользователя</p>
     * @param array $products <p>Массив с товарами</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO message (date, user_name, user_email, user_message, user_id, response, status) '
                . 'VALUES (:date, :user_name, :user_email, :user_message, :user_id, :response, :status)';

        $products = json_encode($products);

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * Возвращает список сообщений
     * @return array <p>Список сообщений</p>
     */
    public static function getMessagesList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT id, user_name, date, user_email, user_massage, response, status FROM message ORDER BY id DESC');
        $messagesList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $messagesList[$i]['id'] = $row['id'];
            $messagesList[$i]['user_name'] = $row['user_name'];
            $messagesList[$i]['date'] = $row['date'];
            $messagesList[$i]['user_email'] = $row['user_email'];
            $messagesList[$i]['user_message'] = $row['user_message'];
            $messagesList[$i]['response'] = $row['response'];
            $messagesList[$i]['status'] = $row['status'];
            $i++;
        }
        return $messagesList;
    }

    /**
     * Возвращает текстое пояснение статуса для заказа :<br/>
     * <i>1 - Новый заказ, 2 - В обработке, 3 - Доставляется, 4 - Закрыт</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'В обработке';
                break;
            case '3':
                return 'Доставляется';
                break;
            case '4':
                return 'Закрыт';
                break;
        }
    }

    /**
     * Возвращает сообщение с указанным id 
     * @param integer $id <p>id</p>
     * @return array <p>Массив с информацией о заказе</p>
     */
    public static function getMessageById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM message WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    /**
     * Удаляет заказ с заданным id
     * @param integer $id <p>id заказа</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteOrderById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM product_order WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирует заказ с заданным id
     * @param integer $id <p>id товара</p>
     * @param string $userName <p>Имя клиента</p>
     * @param string $userPhone <p>Телефон клиента</p>
     * @param string $userComment <p>Комментарий клиента</p>
     * @param string $date <p>Дата оформления</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateOrderById($id, $userName, $userPhone, $userComment, $date, $status)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE product_order
            SET 
                user_name = :user_name, 
                user_phone = :user_phone, 
                user_comment = :user_comment, 
                date = :date, 
                status = :status 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

}
