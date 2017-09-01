@if(isset($produces))
    <div class="col-md-9">
        <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i>Produce</strong></a>
        <hr>
        <div class="row">
            <div class="well well-sm">
                <strong>Produce Title</strong>
                <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span> List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                class="glyphicon glyphicon-th"></span> Grid</a>
                </div>
                <a class="admin-produce btn" data-toggle="modal"
                   data-target="#per-info_7">addProduce</a>
                <div id="per-info_7" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content form-edit">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Thêm Produces</h4>
                            </div>
                            <form class="form-horizontal" action="{{ route('postProduce') }}"
                                  method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="modal-body ">


                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="display_name">name Produce</label>
                                            <input class="form-control " type="text"
                                                   name="produce_name"
                                                   placeholder="name produce">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="category_id">{{__('categories')}}</label>
                                            <select id="category_id" name="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{($category->id)}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control"
                                                   name="image"
                                            >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="money">Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="description">Mô Tả</label>
                                            <textarea class="form-control" type="text" row="6"
                                                      id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="color">Color</label>
                                            <select id="color" name="color">
                                                <option value="Black"
                                                        class="admin_black"
                                                >Black
                                                </option>
                                                <option value="Blue" class="admin_blue"
                                                        selected="selected">Blue
                                                </option>
                                                <option value="Red"
                                                        class="admin_red">Red
                                                </option>
                                                <option value="White"
                                                        class="admin_white">White
                                                </option>

                                            </select>
                                        </div>
                                        {{--</div>--}}
                                        {{--<div class="row"    >--}}
                                        <div class="form-group col-md-3" class="admin_form_1">

                                            <label for="gender">{{__('gender')}}</label>
                                            <select id="gender" name="gender">
                                                <option value="male">
                                                    {{__('male')}}
                                                </option>
                                                <option value="female">
                                                    {{__('female')}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-default" value="Add Produce"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div id="products" class="row list-group">
                @foreach($produces as $prod)
                    <div class="item  col-xs-4 col-lg-4">
                        <div class="thumbnail">
                            <img class="group list-group-image admin-height-image-2" src="/{!!$prod->image!!}" alt=""/>
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    {{$prod->produce_name}}</h4>
                                <p class="group inner list-group-item-text">
                                    {{$prod->description}}.</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            {{$prod->price}}vnđ</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success admin-sua-css"
                                           href="http://www.jquery2dotnet.com">Change</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@elseif(isset($styles))
    <div class="col-md-9">
        <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i>Style</strong></a>
        <hr>
        <div class="row">
            <div class="well well-sm">
                <strong>Style</strong>
                <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span> List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                class="glyphicon glyphicon-th"></span> Grid</a>
                </div>
                <a class="admin-produce btn" data-toggle="modal"
                   data-target="#per-info">addStyle</a>
                <div id="per-info" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content form-edit admin_form_v2">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;
                                </button>
                                <h4 class="modal-title">Them style</h4>
                            </div>
                            <form class="form-horizontal" action="{{ route('postStyle')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="display_name">Tittle</label>
                                            <input class="form-control" type="text"
                                                   name="tittle"
                                                   placeholder="tittle">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="image">image</label>
                                            <input class="form-control" type="file"
                                                   name="image">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="display_name">Description</label>
                                            <textarea class="form-control" type="text"
                                                      name="description"
                                                      placeholder="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-default" value="Add Style"/>

                                    </div>


                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <div class="admin-height-produce">
                <div id="products" class="row list-group">
                    @foreach($styles as $styles)
                        <div class="item  col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image admin-height-image" src="/{!!$styles->image!!}"
                                     alt=""/>
                                <div class="caption admin-cation">
                                    <h4 class="group inner list-group-item-heading">
                                        {{$styles->tittle}}</h4>
                                    <p class="group inner list-group-item-text">
                                        {{$styles->description}}.</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-success admin-sua-css"
                                               href="http://www.jquery2dotnet.com">Change</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@elseif(isset($topics))
    <div class="col-md-9">
        <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i>Topic</strong></a>
        <hr>
        <div class="row">
            <div class="well well-sm">
                <strong>Topic</strong>
                <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span> List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                class="glyphicon glyphicon-th"></span> Grid</a>
                </div>
                <a class="admin-produce btn" data-toggle="modal"
                   data-target="#per-info_1">addTopic</a>
                <div id="per-info_1" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content form-edit">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Thêm topic</h4>
                            </div>
                            <form class="form-horizontal" action="{{ route('postTopic') }}"
                                  method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="modal-body ">

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="display_name">name topic</label>
                                            <input class="form-control " type="text"
                                                   name="topic_name"
                                                   placeholder="name topic">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control"
                                                   name="image"
                                            >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="description">Mô Tả</label>
                                            <textarea class="form-control" type="text" row="6"
                                                      id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-default" value="Add Topic"/>
                                    {{--<button type="submit" class="btn btn-default" data-dismiss="modal">Add--}}
                                    {{--Topic--}}
                                    {{--</button>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="admin-height-produce">
                <div id="products" class="row list-group">
                    @foreach($topics as $topics)
                        <div class="item  col-xs-4 col-lg-4">
                            <div class=" nd-wrap thumbnail">
                                <img class="group list-group-image admin-height-image" src="/{!!$topics->image!!}"
                                     alt=""/>
                                <div class="nd-content">
                                    <div class="nd-content_inner">
                                        <div class="nd-content_inner1">
                                            <a href="#"> <span class="nd-icon"><i
                                                            class="admin-form-color">Change</i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption admin-cation">
                                    <h4 class="group inner list-group-item-heading">
                                        {{$topics->topic_name}}</h4>
                                    <p class="group inner list-group-item-text">
                                        {{$topics->description}}.</p>
                                    <div class="row">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@else
    <div class="col-md-9">
        <ul class="list-inline pull-right">
            <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="glyphicon glyphicon-comment"></i><span class="count">3</span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">1. Is there a way..</a></li>
                    <li><a href="#">2. Hello, admin. I would..</a></li>
                    <li><a href="#"><strong>All messages</strong></a></li>
                </ul>
            </li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
            <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span
                            class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
        </ul>
        <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Reports</h4></div>
                    <div class="panel-body">
                        <small>Success</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success admin-danhgia" role="progressbar" aria-valuenow="72"
                                 aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">72% Complete</span>
                            </div>
                        </div>
                        <small>Info</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info admin-danhgia" role="progressbar" aria-valuenow="20"
                                 aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <small>Warning</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning admin-danhgia" role="progressbar" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                        <small>Danger</small>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger admin-danhgia" role="progressbar" aria-valuenow="80"
                                 aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>

                    </div><!--/panel-body-->
                </div><!--/panel-->
                <hr>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>New Requests</h4></div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                            <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                            <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                        </div>
                    </div>
                </div>
            </div><!--/col-->
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Visits</th>
                        <th>ROI</th>
                        <th>Source</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>45</td>
                        <td>2.45%</td>
                        <td>Direct</td>
                    </tr>
                    <tr>
                        <td>289</td>
                        <td>56.2%</td>
                        <td>Referral</td>
                    </tr>
                    <tr>
                        <td>98</td>
                        <td>25%</td>
                        <td>Type</td>
                    </tr>
                    <tr>
                        <td>..</td>
                        <td>..</td>
                        <td>..</td>
                    </tr>
                    <tr>
                        <td>..</td>
                        <td>..</td>
                        <td>..</td>
                    </tr>
                    </tbody>
                </table>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>Engagement</h4></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF"
                                                               class="img-circle img-responsive"></div>
                        <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555"
                                                               class="img-circle img-responsive"></div>
                        <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222"
                                                               class="img-circle img-responsive"></div>
                    </div>
                </div><!--/panel-->
            </div><!--/col-span-6-->
        </div><!--/row-->
        <hr>
        <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Discussions</strong></a>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>
                            <small>(3 mins ago)</small>
                            The 3rd page reports don't contain any links. Does anyone know why..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>
                            <small>(1 hour ago)</small>
                            Hi all, I've just post a report that show the relationship betwe..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i>
                            <small>(2 hrs ago)</small>
                            Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i>
                            <small>(4 hrs ago)</small>
                            The map service on c243 is down today. I will be fixing the..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i>
                            <small>(yesterday)</small>
                            I posted a new document that shows how to install the services layer..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>
                            <small>(yesterday)</small>
                            ..</a></li>
                </ul>
            </div>
        </div>
    </div>
@endif
