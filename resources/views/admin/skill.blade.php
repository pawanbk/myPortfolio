@extends('layouts.master')
@section('content')
    <section>
        <h4>Add skills</h4>
        <form method="post" action="{{route('admin.skill.store')}}">
            @csrf
            <div class="form-row mb-3"> <input type="text" class="form-control" placeholder="skill name" name="name"> </div>
            <div class="form-row mb-3"> <input type="number" class="form-control" min="1" max="100" placeholder="your level" name="level"> </div>
            <div class="form-row"> <input type="submit" class="btn w-100" value="Add"> </div>
        </form>
    </section>
    
    <section class="mt-3">
    <h4>Skill lists</h4>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Skill</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$skill)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$skill->name}}</td>
                                <td>{{$skill->level}}</td>
                                <td>
                                    <a href="{{route('admin.skill.delete',$skill->id)}}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection