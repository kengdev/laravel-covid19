

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label>Name</label>
                <input class="form-control form-control-sm" name="name" type="text" value="{{ isset($product->name) ? $product->name : '' }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label>Price</label>
                <input class="form-control form-control-sm" name="price" type="number" value="{{ isset($product->price) ? $product->price : '' }}">
            </div>
        </div>
    </div>

    <div class="form-actions">
        <div class="card-body border-top">
            <a href="/product/">กลับสู่หน้าหลัก</a> |
            <button type="submit" class="btn btn-success px-4">
                <div class="d-flex align-items-center">
                    Save
                </div>
            </button>

            <button type="button" class="btn btn-danger px-4 ms-2 text-white">
                Cancel
            </button>
        </div>
    </div>
