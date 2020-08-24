@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center home">
            <div class="col-12 col-lg-12 col-md-4 col-sm-6 col-sm-12 mt-2 mb-2 space">
                <div class="card">

                    <div class="card-header text-light text-center bg-secondary py-1">
                        <h5>Employee list</h5>
                    </div>

					@auth
						<div class="py-2" align="center">
							<a href="{{ url('printPDF') }}" class="btn-sm btn-info">Print employee list</a>
						</div>
					@endauth

                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            <strong>Success!</strong> {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table singer_list_table table-bordered">
                            <thead lass="bg-info">
                                <tr class="text-center">
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Position</th>
                                    <th>Salary</th>
									@auth
                                    	<th>Action</th>
									@endauth
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Salaries as $Salary)
                                    <tr class="text-center">
                                        <td>
                                            <img src="{{ asset('photo') }}/{{ $Salary->salaryToemployee->photo }}" alt="No Image found" width="60" />
                                        </td>
                                        <td>{{ $Salary->salaryToemployee->name }}</td>
                                        <td>{{ $Salary->salaryToemployee->email }}</td>
                                        <td>{{ $Salary->salaryToemployee->gender }}</td>
                                        <td>{{ $Salary->salaryToemployee->dob }}</td>
                                        <td>{{ $Salary->position }}</td>
                                        <td>{{ $Salary->salary }}</td>
										@auth
											<td>
												<div class="btn-group" role="group">
													<a href="{{ url('edit') }}/{{ $Salary->employee_id }}" class="btn btn-sm btn-info">Edit</a>
													<a href="{{ url('salary_delete') }}/{{ $Salary->id }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
												</div>
											</td>
										@endauth										
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
