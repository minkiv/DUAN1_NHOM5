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
                <form method="POST" action="">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập vào tên sản phẩm" value="<?php echo $production['name'] ?>" />
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group mb-1">
                            <label for="descriptionCategoryInput">Mô tả sản phẩm</label>
                            <textarea name="description" class="form-control" id="descriptionCategoryInput" rows="3"><?php echo $production['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="descriptionCategoryInput">Giá sp</label>
                            <textarea name="price" class="form-control" id="descriptionCategoryInput" rows="3"><?php echo $production['price'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="descriptionCategoryInput">Trạng thái</label>
                            <textarea name="status" class="form-control" id="descriptionCategoryInput" rows="3"><?php echo $production['status'] ?></textarea>
                        </div>
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