<table>
    <tr>
      <td>Name</td>
      <td>Email</td>
      <td>Phone</td>
      <td>Asset</td>
    </tr>
    @forelse ($reqs as $req )
    <tr>
        {{-- <td>{{$reqs->name}}</td> --}}
        <td>{{$reqs->email}}</td>
        <td>{{$reqs->phone}}</td>
        <td>{{$reqs->assets->name}}</td>
      </tr>
    @empty
        
    @endforelse

  </table>
  {{ $reqs->links() }}