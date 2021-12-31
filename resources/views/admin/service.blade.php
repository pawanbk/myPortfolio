@extends('layouts.master')
@section('content')
    <h4>Add service</h4>
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
        <form action="{{route('admin.service.store')}}" method="post">
            @csrf
            <div class="form-row"> 
                <input type="text" name="name" class="form-control" placeholder="title"> 
            </div>
            <div class="form-row"> 
                <input type="text" name="icon" class="form-control" placeholder="enter bootstrap icon eg: bi bi-briefcase"> 
            </div>
            <div class="form-row"> 
                <textarea type="text" class="form-control" name="description" placeholder="write a brief description" column="30"></textarea>
            </div>
            <div class="form-row">
                <input type="submit" value="Add" class="btn w-100">
            </div>
            
        </form>
    </section>
    <hr>
    <h4>Services list</h4>
    <section>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>description</th>
                                <th> icon </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$service)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$service->name}}</td>
                                <td>{{$service->description}}</td>
                                <td>{{$service->icon}}</td>
                                <td><a href="{{route('admin.service.delete',$service->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection