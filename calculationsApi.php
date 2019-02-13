<?php
require_once 'Api.php';

class calculationsApi extends Api
{
    public $apiName = 'users';

    /**
     * Метод GET
     * Вывод списка всех записей
     * http://ДОМЕН/users
     * @return string
     */
    public function sumAction()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sum'])) {
            func();
        }
        function factorial($n)
        {
            if ($n == 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }
        function func() {
            $a = (int)$_POST['a'];
            $b = (int)$_POST['b'];
            $c = $a + $b;
            $fOut = ".";
            if ($c >= 0) {
                $factorial = factorial($c);
                $fOut =  ". Её факториал равен " . (string)$factorial . ".";
            }
            $outString = "Сумма чисел равна " . (string)$c . $fOut;
            echo $outString;
        }
    }

    /**
     * Метод GET
     * Просмотр отдельной записи (по id)
     * http://ДОМЕН/users/1
     * @return string
     */
    public function viewAction()
    {

    }

    /**
     * Метод POST
     * Создание новой записи
     * http://ДОМЕН/users + параметры запроса name, email
     * @return string
     */
    public function createAction()
    {

    }

    /**
     * Метод PUT
     * Обновление отдельной записи (по ее id)
     * http://ДОМЕН/users/1 + параметры запроса name, email
     * @return string
     */
    public function updateAction()
    {

    }

    /**
     * Метод DELETE
     * Удаление отдельной записи (по ее id)
     * http://ДОМЕН/users/1
     * @return string
     */
    public function deleteAction()
    {

    }

}