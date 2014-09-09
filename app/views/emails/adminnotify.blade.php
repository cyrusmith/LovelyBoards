<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{$type or 'Тип формы не задан'}}</h2>

<div>

    <h3>Контакты</h3>
    <table>
        <tr>
            <th>Имя</th>
            <td>{{$order_name or 'Не задано'}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$order_email or 'Не задано'}}</td>
        </tr>
        <tr>
            <th>Телефон</th>
            <td>{{$order_phone or 'Не задано'}}</td>
        </tr>
    </table>

    <h3>Данные анкеты</h3>
    <p>Тариф: {{$tarif or 'Не задано'}}</p>
    <table>
        <tr><th>Имя</th><td>{{$name or 'Не задано'}}</td></tr>
        <tr><th>Д.р.</th><td>{{$birthdate or 'Не задано'}}</td></tr>
        <tr><th>Рост</th><td>{{$height or 'Не задано'}}</td></tr>
        <tr><th>Вес</th><td>{{$weight or 'Не задано'}}</td></tr>
        <tr><th>Игрушка</th><td>{{$toy or 'Не задано'}}</td></tr>
        <tr><th>Песня</th><td>{{$song or 'Не задано'}}</td></tr>
        <tr><th>Занятие</th><td>{{$deed or 'Не задано'}}</td></tr>
        <tr><th>Игра</th><td>{{$game or 'Не задано'}}</td></tr>
        <tr><th>Еда</th><td>{{$food or 'Не задано'}}</td></tr>
        <tr><th>Еще</th><td>{{$more or 'Не задано'}}</td></tr>
    </table>

</div>
</body>
</html>
