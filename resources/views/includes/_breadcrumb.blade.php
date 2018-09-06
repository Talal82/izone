<section class="content-header">
    <h1>
        <i class="fa {{ $breadCrumb['pIcon'] or 'fa-cogs'}}"></i>
        {{-- {{$breadCrumb['pHeader']}} --}} @yield('breadcrumb-header')
        <small>{{-- {{$breadCrumb['pDetail']}} --}} @yield('breadcrumb-detail')</small>
    </h1>
    
    {{-- @if(count($breadCrumb['crumbs'])  > 0)
    <ol class="breadcrumb">
        <li><a href="{{url($breadCrumb['dashboard'])}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        @foreach($breadCrumb['crumbs'] as $key => $value)
        @if($value['link'] !='')
        <li><a href="{{url($value['link'])}}"><i class="{{$value['icon']}}"></i> {{$value['text']}}</a></li>
        @else
        <li class="active"><i class="{{$value['icon']}}"></i> {{$value['text']}}</li>
        @endif
        @endforeach

    </ol>
    @endif --}}
</section>