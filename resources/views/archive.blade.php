<div>
<h3>Archive</h3>

<ul>
  @foreach($archive as $archived)
    <li><a href="?month={{$archived['month']}}&year={{$archived['year']}}">{{$archived->month . ' ' . $archived->year}}</a></li>
  @endforeach
</ul>
</div>
