<x-layout>
    <div class="masthead-heading text-uppercase">Welcome ,New Request Needed!?</div>
    {{-- <div class="masthead-subheading">Request can be rejected</div> {{ Auth()->user()->name}}--}}
    <a class="btn btn-primary btn-lg text-uppercase" href="{{ route('login') }}">Login</a>
    <a class="btn btn-primary btn-lg text-uppercase" href="{{ route('register') }}">register</a>
</x-layout>
