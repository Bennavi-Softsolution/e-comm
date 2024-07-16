@extends('layouts.app')

<div class="container">
    <form id="signup-form">
        <div class="form-group row">
        </div>
        <div class="form-group row">
            <label for="inputFullName" class="mb-3 col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFullName" placeholder="John Doe" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 mb-3 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="johndoe@example.com" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPhoneNumber" class="col-sm-2 mb-3 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="inputPhoneNumber" placeholder="Phone Number" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDistrict" class="col-sm-2 mb-3 col-form-label">District</label>
            <div class="col-sm-10">
                <select id="inputDistrict" class="form-control" required>
                    <option value="">Choose...</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAddress" class="col-sm-2 mb-3 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 mb-3 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputConfirmPassword" class="col-sm-2 mb-3 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password"
                    required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-custom">Sign up</button>
            </div>
        </div>
    </form>
</div>
