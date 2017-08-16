@extends('frontend.layouts.master')
@section('content')
    <!-- Profile -->
    <div class="container">
        <div class="row">
            <div class="profile-head">
                <div class="col-md-4 col-sm-4 col-xs-12 img-icon">
                    <img src="images/banner1.jpg" class="img-responsive"/>
                    <a href="javascript:void(0)" class="edit-icon" data-toggle="modal" data-target="#modalAvatar">
                        <i class="fa fa-pencil" aria-hidden="true"></i>Edit
                    </a>
                    <!-- dialog edit avatar-->
                    <div id="modalAvatar" class="modal fade" role="dialog">
                        <div class="modal-dialog form-edit">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Cập nhật Avatar</h4>
                                </div>
                                <div class="modal-body ">
                                    <div class="wrap-upload">
                                        <div class="row">
                                            <a href="javascript:void(0)" id="attachfile">
                                                <div class="col-md-12 col-sm-12 col-sx-12 button-upload-avatar">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                    <span>{{ __('Upload Image') }}</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="wrap-image-upload">
                                                <div class="col-md-3 col-lg-3">
                                                </div>
                                                <div class="col-md-6 col-lg-6 img-padding-circle image-upload"
                                                     align="center">
                                                    <img alt="User Pic" id="image_target"
                                                         class="img-circle img-responsive" width="300px" height="300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-upload-note">
                                            <span><b>{{ __('Note') }}
                                                    : </b>{{ __("Image's size recomment: greater 350px width and height") }} </span>

                                        </div>
                                        <div class="form-upload-avatar">

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                        <!-- //end dialog edit avatar-->
                    </div>
                </div><!--col-md-4 col-sm-4 col-xs-12 close-->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <h5>Jenifer Smith</h5>
                    <ul>
                        <li><span class="glyphicon glyphicon-user"></span> Gender: male</li>
                        <li><span class="glyphicon glyphicon-calendar"></span> 15/03/1995</li>
                        <li><span class="glyphicon glyphicon-map-marker"></span> U.S.A.</li>
                        <li><span class="glyphicon glyphicon-home"></span> 555 street Address,toedo 43606 U.S.A.</li>
                        <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">(+021) 956
                                789123</a></li>
                        <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">jenifer123@gmail
                                .com</a></li>
                        <li><span class="glyphicon glyphicon-comment"></span> Fashion design on the festival theme</li>
                        <li>
                            <a href="javascript:void(0)" class="span-edit-profile text-warning" data-toggle="modal"
                               data-target="#per-info">(Change Profile
                                <i class="fa fa-pencil" aria-hidden="true"></i>)
                            </a>
                            <!-- dialog edit information-->
                            <div id="per-info" class="modal fade" role="dialog">
                                <div class="modal-dialog form-edit">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Sửa đổi thông tin</h4>
                                        </div>
                                        <div class="modal-body ">
                                            <form>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="display_name">Tên</label>
                                                        <input class="form-control " type="text" placeholder="name"
                                                               id="display_name">
                                                    </div>
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="gender">Giới tính</label>
                                                        <select class="form-control" id="gender">
                                                            <option value="male">Nam</option>
                                                            <option value="female">Nữ</option>
                                                            <option value="orther">Khác</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="date_of_birth">Ngày Sinh</label>
                                                        <input class="form-control date_of_birth" type="date"
                                                               id="date_of_birth">
                                                    </div>
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="phone">Điện Thoại</label>
                                                        <input class="form-control phone" type="text" id="phone"
                                                               placeholder="phone">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="address">Địa Chỉ</label>
                                                        <input class="form-control" type="text" id="address"
                                                               placeholder="address">
                                                    </div>
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="nationality">Quốc Tịch</label>
                                                        <input class="form-control" type="text" id="nationality"
                                                               placeholder="Vietnamese">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-xs-12">
                                                        <label for="email">Email</label>
                                                        <input class="form-control" type="email" id="email"
                                                               placeholder="example@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12 col-xs-12">
                                                        <label for="description">Mô Tả</label>
                                                        <textarea class="form-control" type="text" row="6"
                                                                  id="description"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default" data-dismiss="modal">Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//end edit infpration -->
                            <a href="javascript:void(0)" class="span-edit-profile text-warning" data-toggle="modal"
                               data-target="#modalPassword">(Change Password
                                <i class="fa fa-pencil" aria-hidden="true"></i>)
                            </a>
                            <!-- dialog edit password-->
                            <div id="modalPassword" class="modal fade" role="dialog">
                                <div class="modal-dialog form-edit">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Thay đổi password</h4>
                                        </div>
                                        <div class="modal-body ">
                                            <form>
                                                <div class="form-group">
                                                    <label for="old_password">Mật khẩu cũ:</label>
                                                    <input class="form-control" type="password" id="old_password"
                                                           placeholder=" old password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="new_password">Mật khẩu mới:</label>
                                                    <input class="form-control" id="new_password" type="password"
                                                           placeholder="new password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="comfirm">Xác nhân:</label>
                                                    <input class="form-control" id="comfirm" type="password"
                                                           placeholder="comfirm password">
                                                </div>
                                            </form>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default" data-dismiss="modal">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>       <!-- //end dialog edit password-->
                        </li>
                    </ul>
                </div><!--col-md-8 col-sm-8 col-xs-12 close-->
            </div>
        </div><!--//profile-head close-->
        <div class="row">
            <div class="profile-content">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="block">
                        <div class="block-title">
                            <h2><i class="fa fa-line-chart"><b>Thống Kê</b></i></h2>
                        </div>
                        <ul>
                            <li>Tổng số chủ đề đã thiết kế</li>
                            <li>Tổng số trang phục đã thiết kế</li>
                            <li>Tổng số yêu cầu trang phục</li>
                            <li>Tổng só comment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="block">
                            <div class="block-title">
                                <h2>Chủ đề đã thiết kế</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="block">
                            <div class="block-title">
                                <h2>Trang phục đã thiết kế</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--container header close-->
    <!-- //Profile -->
@endsection('content')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="css/style_profile.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/custom-style.css">
@endsection('custom-css')
