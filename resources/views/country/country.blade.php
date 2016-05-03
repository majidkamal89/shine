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

<section id="content" ng-controller="customersCrtl">
    <div class="container">
        <div class="block-header">
            <h2>Countries</h2>
        </div>
        
        <div class="card">
            <div class="card-header">
                <p ng-show="success == true" class="alert alert-success">@{{ message }}</p>
                <p ng-show="error == true" class="alert alert-warning">@{{ message }}</p>
            </div>

            <div class="card-body table-responsive">

                <div class="btn-demo">
                    <div class="col-sm-4">
                        <a class="btn btn-sm btn-default waves-effect waves-button" ng-click="openAddModel()">Add Country</a>
                    </div>
                    <div class="col-sm-4">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-default waves-effect waves-button" type="button">Per Page</button>
                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle waves-effect waves-button" type="button">
                                <span class="caret"></span>
                                <span class="sr-only">Split button dropdowns</span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#" tabindex="-1" role="menuitem" ng-click="perPage(2)">2</a></li>
                                <li><a href="#" tabindex="-1" role="menuitem" ng-click="perPage(5)">5</a></li>
                                <li><a href="#" tabindex="-1" role="menuitem" ng-click="perPage(10)">10</a></li>
                                <li><a href="#" tabindex="-1" role="menuitem" ng-click="perPage(20)">20</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="md md-call-missed"></i></span>
                                <div class="fg-line">
                                    <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-demo">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="col-sm-4">#</th>
                            <th>Country Name <a ng-click="sort_by('country_name');"><i class="glyphicon glyphicon-sort"></i></a></th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="data in filtered = (list | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" ng-show="filteredItems > 0">
                            <td><button type="button" ng-click="openEditModel(data)" class="btn btn-info">Edit</button> |
                                <button type="button" ng-click="removeRow(data.id, data.status)" class="btn btn-warning">Delete</button></td>
                            <td>@{{ data.country_name }}</td>
                            <td ng-show="data.status == 0">Active</td>
                            <td ng-show="data.status == 1">In-Active</td>
                        </tr>
                        <tr ng-show="filteredItems == 0">
                            <td colspan="3">No Record Found.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-12" ng-show="filteredItems > 0">
                    <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- add Modal Default -->
    <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body card-padding">
                        <form role="form">
                            <div class="form-group fg-line">
                                <label for="name">Country Name</label>
                                <input type="text" placeholder="Enter Name" ng-model="country_name" name="country_name" class="form-control input-sm">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <i class="input-helper"></i>
                                    Don't forget to check me out
                                </label>
                            </div>

                            <button class="btn btn-primary btn-sm m-t-10 waves-effect" ng-click="addRecord()" type="button">Submit</button>
                            <button type="button" class="btn btn-default btn-sm m-t-10 waves-effect" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Model -->
    <div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body card-padding">
                        <form role="form">
                            <input type="hidden" ng-model="list.selected.id" name="id" class="form-control input-sm">
                            <div class="form-group fg-line">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Enter Name" ng-model="list.selected.country_name" name="name" class="form-control input-sm">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    <i class="input-helper"></i>
                                    Don't forget to check me out
                                </label>
                            </div>

                            <button class="btn btn-primary btn-sm m-t-10 waves-effect" ng-click="updateRecord(list.selected.id)" type="button">Update</button>
                            <button type="button" class="btn btn-default btn-sm m-t-10 waves-effect" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="/js/angular.min.js"></script>
    <script src="/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
    <script src="/js/app.js"></script>
@stop
