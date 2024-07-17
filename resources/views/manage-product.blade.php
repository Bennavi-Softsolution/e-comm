@extends('layouts.app')


<div class="container-fluid mt-4">
  <div class="row mb-3">
      
      <div class="col-md-6 text-right">
          <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#addItemModal">
              <i class="bi bi-plus-circle-fill"></i> Add Item
          </button>
      </div>
  </div>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="thead-dark table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
                <th scope="col">Brand</th>
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
                    <a href="#" class="btn btn-sm btn-outline-secondary mb-1 mb-sm-0 mr-2">Edit</a>
                    <a href="#" class="btn btn-sm btn-custom">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Product 2</td>
                <td>Category B</td>
                <td>Brand Y</td>
                <td>5</td>
                <td>$24.99</td>
                <td>
                    <a href="#" class="btn btn-sm btn-outline-secondary mb-1 mb-sm-0 mr-2">Edit</a>
                    <a href="#" class="btn btn-sm btn-custom">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Product 3</td>
                <td>Category C</td>
                <td>Brand Z</td>
                <td>8</td>
                <td>$29.99</td>
                <td>
                    <a href="#" class="btn btn-sm btn-outline-secondary mb-1 mb-sm-0 mr-2">Edit</a>
                    <a href="#" class="btn btn-sm btn-custom">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


