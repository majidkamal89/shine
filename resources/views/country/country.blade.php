@extends('../layouts/default')

{{-- Page title --}}
@section('title')
    Admin | Country
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

<section id="content">
    <div class="container">
        <div class="block-header">
            <h2>Countries</h2>
        </div>
        
        <div class="card">
            <div class="card-header">
                <button class="btn btn-info waves-effect waves-button waves-float" id="sa-title">Add Flight</button>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No#</th>
                        <th>Flight Name</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($countries) > 0)
                    @foreach($countries as $country)
                    <tr>
                        <td>FL{!! $country->id !!}</td>
                        <td>{!! $country->country_name !!}</td>
                        <td>@if($country->status == 1) <a href="#" class="text-red">In-active</a> @else <a href="#" class="text-green">Active</a> @endif</td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
                {!! $countries->render() !!}
            </div>
        </div>
    </div>
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script>
        //A title with a text under
        $('#sa-title').click(function(){
            swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
        });
    </script>
@stop
