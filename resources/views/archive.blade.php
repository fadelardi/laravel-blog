<div>
<h3>Archive</h3>

<ul>
  @foreach($archives as $archive)
    <li><a href="?month={{$archive->month}}&year={{$archive->year}}">{{$archive->month . ' ' . $archive->year}}</a></li>
  @endforeach
</ul>
</div>
