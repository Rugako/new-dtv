@extends('backend.layout')
@section('content')
    <div class="container">
        <h1>edit User</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form method="POST" action="{{route('userpostedit',[$users->id])}}">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="naam">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$users->email }}">
                    </div>

                    <div class="form-group">
                        <label>Lid</label>
                        <br>
                        <select name="lid">
                                <option value="1" @if($users->lid == 1)selected @endif>lid</option>
                                <option value="0"@if($users->lid == 0)selected @endif>geen lid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Admin</label>
                        <br>
                        <select name="isAdmin">
                                <option value="1" @if($users->isAdmin == 1)selected @endif> Is Admin</option>
                                <option value="0"@if($users->isAdmin == 0)selected @endif>Geen Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

