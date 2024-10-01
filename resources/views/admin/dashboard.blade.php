@extends('admin.layout.adminlayout') 
@section('admin_body_content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-12 text-start">
                            <p class="text-sm mb-1 text-uppercase font-weight-bold">Today Sales</p>
                            <h5 class="font-weight-bolder mb-0">
                                230,220
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-sm-0 mt-4">
            <div class="card">
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-12 text-start">
                            <p class="text-sm mb-1 text-uppercase font-weight-bold">Total products</p>
                            <h5 class="font-weight-bolder mb-0">
                                32
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-sm-0 mt-4">
            <div class="card">
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-12 text-start">
                            <p class="text-sm mb-1 text-uppercase font-weight-bold">Total Customers</p>
                            <h5 class="font-weight-bolder mb-0">
                                32
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4   mt-4">
            <div class="card">
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-12 text-start">
                            <p class="text-sm mb-1 text-uppercase font-weight-bold">Total Pending Amount</p>
                            <h5 class="font-weight-bolder mb-0">
                                1200
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <div class="card">
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-12 text-start">
                            <p class="text-sm mb-1 text-uppercase font-weight-bold">Total Amount </p>
                            <h5 class="font-weight-bolder mb-0">
                                1200
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-4">
            <div class="card">
                <div class="card-body p-3 position-relative">
                    <div class="row">
                        <div class="col-12 text-start">
                            <p class="text-sm mb-1 text-uppercase font-weight-bold"> pending product</p>
                            <h5 class="font-weight-bolder mb-0">
                                1200
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Reantal table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">user name
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">mobile number
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start
                        Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End
                        Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/product.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Product name</h6>
                            <p class="text-xs text-secondary mb-0">Product id number</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">user name</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+91 000 000 0000</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">completed</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/05/18</span>
                      </td>
                      <td class="align-middle">
                        <a href="product.html" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                          data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/product.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Product name</h6>
                            <p class="text-xs text-secondary mb-0">Product id number</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">user name</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+91 000 000 0000</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">01/02/19</span>
                      </td>
                      <td class="align-middle">
                        <a href="product.html" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                          data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/product.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Product name</h6>
                            <p class="text-xs text-secondary mb-0">Product id number</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">user name</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">+91 000 000 0000</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-danger">pending</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">25/10/17</span>
                      </td>
                      <td class="align-middle">
                        <a href="product.html" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                          data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection