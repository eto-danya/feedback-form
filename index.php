<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form - Лабораторная работа</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            <div class="header-flex">
                <img src="logo.jpg" alt="МосПолитех">
                <h1 class="header-title">Лабораторная работа: Feedback Form</h1>
                <div style="width: 120px;"></div>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <form action="https://httpbin.org/post" method="POST">
                <div class="form-group">
                    <label for="username">Имя пользователя:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail пользователя:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="request_type">Тип обращения:</label>
                    <select id="request_type" name="request_type">
                        <option value="complaint">Жалоба</option>
                        <option value="suggestion">Предложение</option>
                        <option value="gratitude">Благодарность</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Текст обращения:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group checkbox-group">
                    <label>Вариант ответа:</label>
                    <label><input type="checkbox" name="reply_sms" value="yes"> СМС</label>
                    <label><input type="checkbox" name="reply_email" value="yes"> E-mail</label>
                </div>
                <button type="submit">Отправить</button>
            </form>
            
            <br><hr><br>
            <a href="page2.php">Перейти на 2 страницу (результат get_headers)</a>
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