<<<<<<< HEAD
@if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

=======
@if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

>>>>>>> 2e7adb7059cdb6e3b5e795935b9ca86404a91428
@endif