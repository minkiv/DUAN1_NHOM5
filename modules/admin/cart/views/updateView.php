<?php get_header('', 'Chỉnh sửa sản phẩm') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa sản phẩm</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Form thông tin sản phẩm</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="?role=admin&mod=cart&action=saveupdate&id=<?= $tt['idDH']?>" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="form-group">
                                <label>Trạng thái đơn hàng</label>
                                <select class="form-control select2" name="trangThai">
                                        <option value="0" <?php echo $tt['trangThai']==0?'selected = selected ' : ''?>>Đang giao hàng</option>
                                        <option value="1" <?php echo $tt['trangThai']==1?'selected = selected ' : ''?>>Đã giao hàng</option>
                                </select>
                            </div>
                        
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Chỉnh sửa</button>
                        <a href="?role=admin&mod=production" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>