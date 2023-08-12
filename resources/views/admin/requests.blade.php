<x-layout>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    {{-- <a href="{{ route('employee.request.show',$employee->id) }}"> --}}
                    <th scope="col">#</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Leave Type</th>
                    <th scope="col">Employee Notes</th>
                    <th scope="col">Status</th>
                    <th scope="col">Change Status</th>
                </tr>
            </thead>
            @foreach ($requests as $request)
                <tbody>
                    <tr>
                        <td> <a
                                href="{{ route('employee.request.show', ['employee' => $employee->id, 'request' => $request->id]) }}">{{ $request->id }}</a>
                        </td>
                        <td>{{ $request->employee->name }}</td>
                        <td>{{ $request->type->name }}</td>
                        <td>{{ $request->notes }}</td>
                        <td>{{ $request->status }}</td>

                        <td>
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('requests.accept', $request->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-success" request="submit">
                                            <i class="fa-solid fa-check-circle" style="color: green;"></i> Accept
                                        </button>
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="{{ route('requests.reject', $request->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger" request="submit">
                                            <i class="fa-solid fa-times-circle" style="color: red;"></i> Reject
                                        </button>
                                    </form>
                                </div>
                            </div>




                        </td>


                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</x-layout>
