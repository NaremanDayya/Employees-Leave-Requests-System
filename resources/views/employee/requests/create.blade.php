<x-layout>
<form action="{{ route('employee.request.store' ,$empId) }}" method="POST">
@csrf
@include('employee.requests._form',[
    'button' => 'Send Leave Request'
])
</form>
</x-layout>