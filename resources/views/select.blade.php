@extends('load.app')
<h1 style="text-align: center; font-size: 3.5rem; font-family: monotype corsiva; color: #f0f;">
    Информация из таблици база данных
</h1>
<table border="1">
    <tr>
        <th>№</th>
        <th>Мавод</th>
        <th>Шумора</th>
        <th>Нарх</th>
        
    </tr>
    <tr>
        <td> {{ $sqlselect->id }} </td>
        <td> {{ $sqlselect->mavod }} </td>
        <td> {{ $sqlselect->shumora }} </td>
        <td> {{ $sqlselect->narkh }} </td>
    </tr>
</table>