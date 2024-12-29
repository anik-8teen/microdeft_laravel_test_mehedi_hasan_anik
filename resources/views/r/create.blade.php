<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="card">

    <div class="card-body">
        <form class="form-control" action="{{ route('r.store') }}" method="POST">
            <label class="form-control" for="name">First name: </label>
            <input class="form-control" type="text" name="firstname" required>
            <br>
            <label class="form-control" for="phone">Phone: </label>
            <input class="form-control" type="text" name="phone" required>
            <br>
            <br>
            <label for="email">email: </label>
            <input type="email" name="email" required>
            <br>
            <label for="cars">Choose a Asset:</label>
            @dump($assets)
            <select name="asset_id" id="asset">
                @foreach ($assets as $asset )
                <option value="{{$asset->id}}">{{$asset->name}}</option>                    
                @endforeach

            </select>
            <label for="designation">Designation: </label>
            <input type="text" name="designation" required>
            <br>
            <input type="submit" value="Create!">
        </form>
    </div>
</div>
