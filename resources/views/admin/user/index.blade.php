@extends("admin.layouts.layout")

@section("content")

    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div></div></div>
                                    <div class="row"><div class="col-sm-12"><table class="table zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150.859px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 248px;">User Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 113.75px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 44.4531px;">Create Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 88.6094px;">User Kind</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 71.7344px;"></th></tr>
                                                </thead>
                                                <tbody>

                                                @foreach($user as $user1)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{$user1->id}}</td>
                                                    <td>{{$user1->name}}</td>
                                                    <td>{{$user1->email}}</td>
                                                    <td>{{$user1->created_at}}</td>
                                                    <td>{{$user1->admin==1 ? "Admin":"Member" }}</td>
                                                    <td>
                                                        <a href="{{url("adminpanel/users/edit?id=".$user1->id)}}"> <button type="submit" class="btn btn-primary  btn-sm mr-1 mb-1 waves-effect waves-light" style="display: inline">Edit</button></a>
                                                        <a href="{{url("adminpanel/users/delete?id=".$user1->id)}}"> <button type="submit" class="btn btn-danger btn-sm mr-1 mb-1 waves-effect waves-light" style="display: inline">Delete</button></a>

                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

