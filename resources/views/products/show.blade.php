{!!'title: '.$product->title!!}
<br>
{!!'description: '.$product->description!!}
<br>
<br>
<a href="{{ url('/products/'.$product->id.'/edit') }}", class="btn btn-warning">edit this anime</a>
<br>
<a href="{{ url ('/products/'.$product->id) }}", data-method="DELETE">delete this anime</a>
