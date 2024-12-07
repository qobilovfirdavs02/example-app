<h1>Маълумот аз БМ</h1>
@foreach ($result as $r)
    {{$r->id}}</br>
    {{$r->id_pod_menu}}</br>
    {{$r->menu}}</br>
    {{$r->url}}
@endforeach
