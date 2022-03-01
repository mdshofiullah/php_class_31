@extends('master')

@section('title')
    Manage Student Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div class="card-header font-weight-bolder bg-warning text-center">All Student</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Student Id</th>
                                        <th>Student Name</th>
                                        <th>Student Email</th>
                                        <th>Student Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
{{--                              loop iteration is build in function that increment & count loop count  --}}
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>
                                            <a href="{{ route('edit-student', ['id' => $student->id]) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm" onclick="deleteStudent({{ $student->id }})">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <form action="{{ route('delete-student',['id' => $student->id]) }}" id="deleteStudentForm{{ $student->id }}" method="post">
                                                @csrf
                                            </form>
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
    </section>
    <script>
        function deleteStudent(id)
        {
            // alert('test');
            event.preventDefault();
           var check = confirm('Are You sure You want to delete this?');
           if (check)
           {
               document.getElementById('deleteStudentForm'+id).submit();
           }
        }
    </script>
@endsection
