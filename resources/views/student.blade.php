<h1 style=" text-align: center; font-size: 3.5rem; font-family: cursive; color: red;">
    Маълумот аз БМ
</h1>
<!-- Student table -->
<table border="1">
    <tr>
        <th>№</th>
        <th>Насаб</th>
        <th>Ном</th>
        <th>Гурух</th>
        <th>Телефон</th>
        <th></th>
    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->firstname}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->grup}}</td>
            <td>{{ $item->tel}}</td>
        </tr>
    @endforeach
</table>