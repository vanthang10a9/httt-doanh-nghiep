
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addUserModal">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" value="" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="username" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="identity" placeholder="Chứng minh nhân dân">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phonenumber" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <select required class="form-control" id="role">
                            <option value="" disabled selected>Chọn vai trò</option>
                            <option value="0">Người dùng</option>
                            <option value="1">Nhân viên</option>
                            <option value="2">Quản trị viên</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="repassword" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-primary">
                    Thêm tài khoản
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editUserModal">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" value="" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="username" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="identity" placeholder="Chứng minh nhân dân">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phonenumber" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <select required class="form-control" id="role">
                            <option value="" disabled selected>Chọn vai trò</option>
                            <option value="0">Người dùng</option>
                            <option value="1">Nhân viên</option>
                            <option value="2">Quản trị viên</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-primary">
                    Sửa tài khoản
                </a>
            </div>
        </div>
    </div>
</div>