<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="customer_mail" />
                </div>
            </div>
        </div>
        <hr />
        <br />
        <div class="row">
            <div class="col-md-12 right">
                <button type="button" id="add_row" class="btn btn-primary">+ Add
                    Row</button>
                <input class="btn btn-success" type="submit" value="บันทึกรายการ">
            </div>
        </div>

        <table class="table" id="products_table">
            <thead>
                <tr>
                    <th class="action"></th>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody id="product_body">
                <tr>
                    <td></td>
                    <td>
                        <select name="products[]" class="form-control">
                            <option value="">-- choose product --</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">
                                    {{ $product->name }}
                                    (฿{{ number_format($product->price, 2) }})
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantities[]" class="form-control" value="1" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
