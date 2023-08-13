<x-layout>
    <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Leave Type</th>
                    <th scope="col">Your Notes</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reason</th>
                  </tr>
                </thead>
                @foreach ($requests as $request )
                <tbody>
                  <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->type->name }}</td>
                    <td>{{ $request->notes }}</td>
                    <td>{{ $request->status }}</td>
                    <td>{{ $request->reason }}</td>

                  </tr>
                </tbody>
        @endforeach
            </table>
    </div>
</x-layout>
