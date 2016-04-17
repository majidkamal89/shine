@extends('/layouts/default')

{{-- Page title --}}
@section('title')
    Admin
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
                <h2>Dashboard</h2>
            </div>

            <!-- <div class="card">
                <div class="card-header">
                    <h2>Basic Table</h2>
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
            </div> -->

            <div class="mini-charts">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-cyan">
                            <div class="clearfix">
                                <div class="chart stats-bar"><canvas style="display: inline-block; width: 83px; height: 45px; vertical-align: top;" width="83" height="45"></canvas></div>
                                <div class="count">
                                    <small>Website Traffics</small>
                                    <h2>987,459</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-lightgreen">
                            <div class="clearfix">
                                <div class="chart stats-bar-2"><canvas style="display: inline-block; width: 83px; height: 45px; vertical-align: top;" width="83" height="45"></canvas></div>
                                <div class="count">
                                    <small>Website Impressions</small>
                                    <h2>356,785K</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-orange">
                            <div class="clearfix">
                                <div class="chart stats-line"><canvas style="display: inline-block; width: 85px; height: 45px; vertical-align: top;" width="85" height="45"></canvas></div>
                                <div class="count">
                                    <small>Total Sales</small>
                                    <h2>$ 458,778</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-bluegray">
                            <div class="clearfix">
                                <div class="chart stats-line-2"><canvas style="display: inline-block; width: 85px; height: 45px; vertical-align: top;" width="85" height="45"></canvas></div>
                                <div class="count">
                                    <small>Support Tickets</small>
                                    <h2>23,856</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
