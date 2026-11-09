<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат get_headers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            <div class="header-flex">
                <img src="logo.jpg" alt="МосПолитех">
                <h1 class="header-title">Результат работы функции get_headers</h1>
                <div style="width: 120px;"></div>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <h3>Заголовки, полученные с https://httpbin.org/post:</h3>
            
            <?php
                $url = "https://httpbin.org/get";
                
                // Инициализация cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, true); // Возвращаем заголовки
                curl_setopt($ch, CURLOPT_NOBODY, true); // Нам не нужно тело страницы
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Отключаем проверку сертификата
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Ждем не больше 10 секунд

                // Выполняем запрос
                $response = curl_exec($ch);
                $error = curl_error($ch);
                
                if ($response) {
                    $result = $response;
                } else {
                    $result = "Ошибка cURL: " . $error;
                }
            ?>

            <textarea style="width: 100%; height: 300px; padding: 10px; font-family: monospace;" readonly><?php echo htmlspecialchars($result); ?></textarea>
            
            <br><br>
            <a href="index.php">Вернуться на главную страницу</a>
        </td>
    </tr>

    <tr>
        <td colspan="2" class="footer">
            Задание для самостоятельной работы «Feedback form»
        </td>
    </tr>
</table>

</body>
</html>