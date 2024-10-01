@extends('admin.layout.adminlayout')
@section('admin_body_content')
    <div class="container-fluid py-4">
        <form action="">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="text-white">Commen Item</h4>
                    <p class="text-white opacity-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores
                        accusantium totam itaque in molestias quo veritatis aspernatur, eaque expedita laudantium quasi
                        reiciendis, dicta alias ipsum tempora. Quam iste debitis eius!</p>
                </div>
                <div class="col-lg-4 text-right d-flex flex-column justify-content-center">
                    <button type="button"
                        class="btn bg-gradient-dark mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2 w-70">Submit</button>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Product Image</h5>
                            <div class="row">
                                <div class="col-12">
                                    <img class="w-100 border-radius-lg shadow-lg mt-3"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-page.jpg"
                                        alt="product_image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Product Information</h5>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label>Name</label>
                                    <input class="form-control" type="text" value="Minimal Bar Stool" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label>Product Code</label>
                                    <input class="form-control" type="number" value="2" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="mt-32">Alias Code</label>
                                    <input class="form-control" type="text" value="00000" />
                                </div>
                                <div class="col-4">
                                    <label class="mt-2">Category</label>
                                    <select class="form-control" name="choices-category" id="choices-category">
                                        <option value="Choice 1" selected>Furniture</option>
                                        <option value="Choice 2">Real Estate</option>
                                        <option value="Choice 3">Electronics</option>
                                        <option value="Choice 4">Clothing</option>
                                        <option value="Choice 5">Others</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label class="mt-2">SubCategory</label>
                                    <select class="form-control" name="choices-category" id="choices-subcategory">
                                        <option value="Choice 1" selected>Furniture</option>
                                        <option value="Choice 2">Real Estate</option>
                                        <option value="Choice 3">Electronics</option>
                                        <option value="Choice 4">Clothing</option>
                                        <option value="Choice 5">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="mt-2">HSN Code</label>
                                    <input class="form-control" type="text" value="00000" />
                                </div>
                                <div class="col-4">
                                    <label class="mt-2">Tax / Without Tax</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                            checked="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label class="mt-2">Tax %</label>
                                    <input class="form-control" type="text" value="20" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Stock</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Opening</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2">Active</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2">Damage</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2">Service</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2">Booked</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2">Rented</label>
                                    <input class="form-control" type="text" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 mt-sm-0 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="font-weight-bolder">Policy</h5>
                                <div class="col-6">
                                    <label>Select Policy</label>
                                    <select class="form-control" name="choices-sizes" id="choices-currency">
                                        <option value="Policy 1">Policy 1</option>
                                        <option value="Policy 2">Policy 2</option>
                                        <option value="Policy 3">Policy 3</option>
                                        <option value="Policy 4">Policy 4</option>
                                        <option value="Policy 5">Policy 5</option>
                                        <option value="Policy 6">Policy 6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-flex justify-between">
                                    <div class="col-6">
                                        <h5 class="font-weight-bolder">Plans</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button type="button" class="btn btn-secondary btn-sm mb-0" id="addPlanButton">+
                                            Add</button>
                                    </div>
                                </div>

                                <div class="col-12 row plan-item  " id="plansContainer" style="justify-content: space-between">
                                    <div class="col-md-6 row mt-3 ">
                                        <div class="col-6">
                                            <label>Select Plan 1</label>
                                            <select class="form-control" name="choices-sizes" id="choices-currency">
                                                <option value="Policy 1">1 Day</option>
                                                <option value="Policy 2">1 Week</option>
                                                <option value="Policy 3">1 Month</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>Amount</label>
                                            <input class="form-control" type="text" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        let planCount = 1;
    
        document.getElementById('addPlanButton').addEventListener('click', function() {
            planCount++;
            let plansContainer = document.getElementById('plansContainer');
    
            let newPlan = `
                <div class="col-md-6 row mt-3 ">
                    <div class="col-6">
                        <label>Select Plan ${planCount}</label>
                        <select class="form-control" name="choices-sizes" id="choices-currency">
                            <option value="Policy 1">1 Day</option>
                            <option value="Policy 2">1 Week</option>
                            <option value="Policy 3">1 Month</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label>Amount</label>
                        <input class="form-control" type="text" value="" />
                    </div>
                </div>
            `;
    
            // Append the new plan to the plans container
            plansContainer.insertAdjacentHTML('beforeend', newPlan);
        });
    </script>
@endsection
