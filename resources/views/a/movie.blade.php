<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>猫眼电影</title>
</head>
<body>
    <h1>电影购票</h1>
    <form action="">
        @csrf
        <table>
            @foreach($list as $v)
                @if($k & 5 == 0)
                    <tr></tr>
                @endif
                        <td>
                            {{$v['number']}}
                            @if(!in_array($v['number'],$number))
                                <input type="checkbox" name="film_count[]" value="{{$v['number']}}">
                            @else
                                <button type="button" style="background-color: red;height: 15px" value="{{$v['number']}}">
                            @endif
                        </td>
   
            @endforeach
        </table>
    </form>
</body>
</html>