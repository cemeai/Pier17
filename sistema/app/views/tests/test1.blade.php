<h1> HOLAAA </h1>

<ul>
@foreach($users as $user)
	<li>{{ $user->name }}</li>
@endforeach
</ul>

<ul>
@foreach($order as $or)
	<li>{{ $or->name }}</li>
@endforeach
</ul>

<ul>
@foreach($mail as $m)
	<li>{{ $m->name }}</li>
@endforeach
</ul>