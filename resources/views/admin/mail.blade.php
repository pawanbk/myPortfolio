@extends('layouts.master')
@section('content')
<section class="mt-3">
    <h4>Mails</h4>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Email Address</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$mail)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$mail->name}}</td>
                                <td>{{$mail->subject}}</td>
                                <td>{{$mail->from}}</td>
                                <td>{{$mail->message}}</td>
                                <td>
                                    <a href="{{route('admin.mail.delete',$mail->id)}}" class="btn btn-danger btn-sm">
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