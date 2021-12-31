@extends('layouts.master')
@section('content')
    <h4>Add social link</h4>
    <section>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="p-2">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.link.store')}}" method="post">
            @csrf
            <div class="form-row"> 
                <input type="text" name="social_link" class="form-control" placeholder="social media link"> 
            </div>
            <div class="form-row"> 
                <input type="text" name="icon" class="form-control" placeholder="enter bootstrap icon eg: bi bi-briefcase"> 
            </div>
            <div class="form-row">
                <input type="submit" value="Add" class="btn w-100">
            </div>
            
        </form>
    </section>
    <hr>
    <h4>Links</h4>
    <section>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Link</th>
                                <th> icon </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$link)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$link->social_link}}</td>
                                <td>{{$link->icon}}</td>
                                <td><a href="{{route('admin.link.delete',$link->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection