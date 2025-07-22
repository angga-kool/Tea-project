@csrf
<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
</div>
<div class="mb-3">
    <label class="form-label">Category</label>
    <input type="number" name="category_id" class="form-control" value="{{ old('category_id', $product->category_id ?? '') }}">
</div>
<div class="mb-3">
    <label class="form-label">Purchase Price</label>
    <input type="number" step="0.01" name="purchase_price" class="form-control" value="{{ old('purchase_price', $product->purchase_price ?? '') }}">
</div>
<div class="mb-3">
    <label class="form-label">Sale Price</label>
    <input type="number" step="0.01" name="sale_price" class="form-control" value="{{ old('sale_price', $product->sale_price ?? '') }}">
</div>
<div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock ?? '') }}">
</div>
<button type="submit" class="btn btn-primary">Save</button>
