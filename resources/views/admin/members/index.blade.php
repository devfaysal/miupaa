@extends('admin.layouts.app')
@section('content')
<section class="section">
    <div class="row sameheight-container">
        <div class="col col-12 col-sm-12 col-md-12 col-xl-12">
            <div class="card sameheight-item stats" data-exclude="xs">
                <div class="card-block">
                    <div class="title-block d-flex">
                        <h4 class="title"> Members</h4>
                        {{-- <a class="btn btn-success btn-oval btn-sm ml-auto" href="/admin/users/create">Create new</a> --}}
                    </div>
                    <div class="row row-sm">
                        <div class="col-12 col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Batch</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Organization</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <th scope="row">{{$member->id}}</th>
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->batch}}</td>
                                            <td>{{$member->email}}</td>
                                            <td>{{$member->phone}}</td>
                                            <td>{{$member->organization}}</td>
                                            <td>{{$member->designation}}</td>
                                            <td>
                                                <a class="btn btn-sm btn-oval btn-info" href="/admin/members/{{$member->id}}/edit">Edit</a>
                                                <a class="btn btn-sm btn-oval btn-primary" href="/admin/members/{{$member->id}}">Show</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection