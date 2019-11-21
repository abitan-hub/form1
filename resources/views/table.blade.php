<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
      @foreach($st as $s)
      <tr>
          <td>{{ $s->id}}</td>
          <td>{{ $s->first_name}}</td>
          <td>{{ $s->last_name}}</td>
          <td>{{ $s->email}}</td>
          <td>{{ $s->description}}</td>
          <td><button><a href="{{url('show/'.$s->id)}}">Show</a></button>
          <button><a href="{{url('edit/'.$s->id)}}">edit</a></button>
          <form action="{{url('delete/'.$s->id)}}" method="post">
            @csrf
            {!! method_field('delete') !!}
            <button type="submit" class="btn btn-success">Delete</button>
          </form>
          </td>
     </tr>
    @endforeach
  </tbody>
</table>