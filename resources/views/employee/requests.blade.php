<x-layout>
    <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Leave Type</th>
                    <th scope="col">Employee Notes</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                @foreach ($requests as $request )
                <tbody>
                  <tr>
                    <td>{{ $request->employee->name }}</td>
                    <td>{{ $request->type->name }}</td>
                    <td>{{ $request->notes }}</td>
                    <td>{{ $request->status }}</td>

                  </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</x-layout>
