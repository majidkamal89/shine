@extends('../layouts/default')

{{-- Page title --}}
@section('title')
    Admin | Flight
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
            <h2>Flights</h2>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h2>Flight Table</h2>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>No#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Nickname</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alexandra</td>
                        <td>Christopher</td>
                        <td>@makinton</td>
                        <td>Ducky</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Madeleine</td>
                        <td>Hollaway</td>
                        <td>@hollway</td>
                        <td>Cheese</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sebastian</td>
                        <td>Johnston</td>
                        <td>@sebastian</td>
                        <td>Jaycee</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mitchell</td>
                        <td>Christin</td>
                        <td>@mitchell4u</td>
                        <td>AdskiDeAnus</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Elizabeth</td>
                        <td>Belkitt</td>
                        <td>@belkitt</td>
                        <td>Goat</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Benjamin</td>
                        <td>Parnell</td>
                        <td>@wayne234</td>
                        <td>Pokie</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Katherine</td>
                        <td>Buckland</td>
                        <td>@anitabelle</td>
                        <td>Wokie</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Nicholas</td>
                        <td>Walmart</td>
                        <td>@mwalmart</td>
                        <td>Spike</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
