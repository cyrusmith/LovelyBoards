<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{$type}}</h2>

<div>

    <h3>Контакты</h3>
    <table>
        <tr>
            <th>Имя</th>
            <td>{{$order_name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$order_email}}</td>
        </tr>
        <tr>
            <th>Телефон</th>
            <td>{{$order_phone}}</td>
        </tr>
    </table>

    <h3>Данные анкеты</h3>
    <p>Тариф: {{$tarif}}</p>
    <table>
        <tr><th>Имя</th><td>{{$name}}</td></tr>
        <tr><th>Д.р.</th><td>{{$birthdate}}</td></tr>
        <tr><th>Рост</th><td>{{$height}}</td></tr>
        <tr><th>Вес</th><td>{{$weight}}</td></tr>
        <tr><th>Игрушка</th><td>{{$toy}}</td></tr>
        <tr><th>Песня</th><td>{{$song}}</td></tr>
        <tr><th>Занятие</th><td>{{$deed}}</td></tr>
        <tr><th>Игра</th><td>{{$game}}</td></tr>
        <tr><th>Еда</th><td>{{$food}}</td></tr>
        <tr><th>Еще</th><td>{{$more}}</td></tr>
    </table>

</div>
</body>
</html>
