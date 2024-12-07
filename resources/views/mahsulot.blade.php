@extends('load.app')
<h1 style="text-align: center; color: #f0f; font-size: 3.5rem; font-family: monotype corsiva" >
Welcome to the products page
</h1>
    <table border="1">
        <tr>
            <th>№</th>
            <th>Мавод</th>
            <th>Шумора</th>
            <th>Нарх</th>
            <th>Вибрать</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        @php 
            $i = 1;
        @endphp
        @if(isset($_GET['insert']))
        @foreach ($sql as $item)
            <tr>
                <td>{{ $i++ }} </td>
                <td>{{ $item->mavod }} </td>
                <td>{{ $item->shumora }} </td>
                <td>{{ $item->narkh }} </td>
                <td><button type="submit" name="btnselect" value='{{ $item->id}}'>Интихоб</button></td>
                
            </tr> 
            @endforeach
            <form action="{{ route('urlstory')}}" method="post">
                @csrf
                <tr>
                    <td></td>
                    <td> <input type="text" name="mavod"> </td>
                    <td> <input type="text" name="shumora"> </td>
                    <td> <input type="text" name="narkh"> </td>
                    <td> <input type="submit" value="ok"> </td>
                </tr>
            </form>
        @else
        
                @if(isset($_GET['update']))
                @foreach ($sql as $item)
                    @if ($item->id == $_GET['update'])

                    <form action="{{ route('urlupdate')}}" method="post">
                    @csrf
                            <tr>
                                <td><input type="hidden" name="id" value="{{ $item->id }}"></td>
                                <td> <input type="text" name="mavod" value="{{ $item->mavod }}"> </td>
                                <td> <input type="text" name="shumora" value="{{ $item->shumora }}"> </td>
                                <td> <input type="text" name="narkh" value="{{ $item->narkh }}"> </td>
                                <td> <input type="submit" value="ok"> </td>
                            </tr>
                    </form>
                    @else 
                        <tr>
                            <td>{{ $i++ }} </td>
                            <td>{{ $item->mavod }} </td>
                            <td>{{ $item->shumora }} </td>
                            <td>{{ $item->narkh }} </td>
                        </tr>
                    @endif
                @endforeach
            @else
                @foreach ($sql as $item)
                <tr>
                    <td>{{ $i++ }} </td>
                    <td>{{ $item->mavod }} </td>
                    <td>{{ $item->shumora }} </td>
                    <td>{{ $item->narkh }} </td>
                    <td><button type="submit" name="btnselect" value='{{ $item->id}}'>Интихоб</button></td>
                <form action="{{ route('urlselect')}}" method="get"> 
                    <td><button type="submit" name="update" value='{{ $item->id}}'>Ислох</button></td>
                    </form>
                    <form action="{{ route('urldelete')}}" method="post">
                        @csrf
                        <td><button type="submit" name="delete" value='{{ $item->id}}'>Хорич</button></td>
                    </form>
                </tr> 
                @endforeach
            @endif
        @endif
    </table>

<form action="{{ route('urlselect') }}" >
    <input type="Submit" value="+" name="insert">
</from>