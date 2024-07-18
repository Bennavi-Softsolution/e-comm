@extends('layouts.app')

@section('manage-product')

<div class="container-fluid mt-4">
    <div class="row mb-3">
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#addItemModal">
                <i class="bi bi-plus-circle-fill"></i> Add Item
            </button>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Search products...">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col"><div class="dropdown">
                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div></th>
                    <th scope="col"><div class="dropdown">
                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Brand
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div></th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Product 1</td>
                    <td>Category A</td>
                    <td>Brand X</td>
                    <td>10</td>
                    <td>$19.99</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-secondary mb-1 mb-sm-0 mr-2">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-custom" onclick="return confirm('Are you sure?');">
                            <i class="bi bi-trash-fill"></i> Delete
                        </a>
                    </td>
                </tr>
                <!-- More rows... -->
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

</div>

<!-- Add Item Modal -->
<div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <!-- Modal content as shown above -->
</div>
