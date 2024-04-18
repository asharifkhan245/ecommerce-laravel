@extends('admin.layout.master')

@section('content')

<div class="container m-5">
    <h2 class="mb-4 text-center">Add Product</h2>
    <form action="{{route('store_product')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control rounded-3" id="productName" placeholder="Enter product name" name="product_name" required>
                </div>
                <div class="mb-3">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control rounded-3" id="productDescription" rows="3" placeholder="Enter product description" name="product_description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="productCategory" class="form-label">Product Category</label>
                    <input type="text" class="form-control rounded-3" id="productCategory" placeholder="Enter product category" name="product_category" required>
                </div>
                <div class="mb-3">
                    <label for="availableQuantity" class="form-label">Available Quantity</label>
                    <input type="number" class="form-control rounded-3" id="availableQuantity" placeholder="Enter available quantity" name="available_quantity" required>
                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control rounded-3" id="price" placeholder="Enter price" name="product_price" required>
                </div>

                <div class="mb-3">
                    <label for="mainImage" class="form-label">Main Image</label>
                    <input type="file" class="form-control" id="mainImage" accept="image/*" name="main_image" required>
                </div>
                <div class="mb-3">
                    <label for="otherMedia" class="form-label">Other Media</label>
                    <input type="file" class="form-control" id="otherMedia" name="other_media[]" multiple accept="image/*, video/*">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select rounded-3" id="status" name="status" required>
                        <option value="">Choose...</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
    </form>

    @if(Session::has('success'))
    <!-- Toast message -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toast" class="toast align-items-center text-white bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ Session::get('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    @endif

</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-m7QEX8tcZcvMY/AeYXTy1Amz8lpWuPZa8C4agQ8txSXHc0oBrpamNmD1ZDZTCX9z" crossorigin="anonymous"></script>

<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function () {
        // Check if the success message exists in the session
        const successMessage = "{{ Session::get('success') }}";

        // If the success message exists, show the toast
        if (successMessage) {
            const toast = new bootstrap.Toast(document.getElementById('toast'));
            toast.show();
        }
    });
</script>

@endsection
