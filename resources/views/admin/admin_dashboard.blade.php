@extends('admin.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <div class="container">
       <div class="row pad-botm">
          <div class="col-md-12">
             <h4 class="header-line">ADMIN DASHBOARD</h4>
          </div>
       </div>
       <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-6">
             <div class="alert alert-info back-widget-set text-center">
                <i class="fa fa-photo fa-5x"></i>
                <h3>Website Banners</i></h3>
                Amount Pending For Approval
             </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
             <div class="alert alert-success back-widget-set text-center">
                <i class="fa fa-archive fa-5x"></i>
                <h3>All categories 20+</h3>
                Pending For New Events
             </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
             <div class="alert alert-warning back-widget-set text-center">
                <i class="fa fa-recycle fa-5x"></i>
                <h3>Total Posts 200+</h3>
                To Be Made For New Orders
             </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">
             <div class="alert alert-danger back-widget-set text-center">
                <i class="fa fa-briefcase fa-5x"></i>
                <h3>Unread Comments</h3>
                That Should Be Resolved Now
             </div>
          </div>
       </div>
 
       <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
             <div class="panel panel-default">
                <div class="panel-heading">
                   Recent Subscribers
                </div>
                <div class="panel-body text-center recent-users-sec">
                   <img class="img-thumbnail" src="assets/img/user.gif" />
                   <img class="img-thumbnail" src="assets/img/user2.png" />
                   <img class="img-thumbnail" src="assets/img/user.gif" />
                   <img class="img-thumbnail" src="assets/img/user2.png" />
                   <img class="img-thumbnail" src="assets/img/user.gif" />
                   <img class="img-thumbnail" src="assets/img/user2.png" />
                   <img class="img-thumbnail" src="assets/img/user.gif" />
                   <img class="img-thumbnail" src="assets/img/user2.png" />
                   <img class="img-thumbnail" src="assets/img/user.gif" />
                </div>
             </div>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="panel panel-success">
                <div class="panel-heading">
                    Subscribers Details
                </div>
                <div class="panel-body">
                   <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover">
                         <thead>
                            <tr>
                               <th>#</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Username</th>
                               <th>User No.</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td>1</td>
                               <td>Mark</td>
                               <td>Otto</td>
                               <td>@mdo</td>
                               <td>100090</td>
                            </tr>
                            <tr>
                               <td>2</td>
                               <td>Jacob</td>
                               <td>Thornton</td>
                               <td>@fat</td>
                               <td>100090</td>
                            </tr>
                            <tr>
                               <td>3</td>
                               <td>Larry</td>
                               <td>the Bird</td>
                               <td>@twitter</td>
                               <td>100090</td>
                            </tr>
                            <tr>
                               <td>4</td>
                               <td>Mark</td>
                               <td>Otto</td>
                               <td>@mdo</td>
                               <td>100090</td>
                            </tr>
                            <tr>
                               <td>5</td>
                               <td>Jacob</td>
                               <td>Thornton</td>
                               <td>@fat</td>
                               <td>100090</td>
                            </tr>
                            <tr>
                               <td>6</td>
                               <td>Larry</td>
                               <td>the Bird</td>
                               <td>@twitter</td>
                               <td>100090</td>
                            </tr>
                            <tr>
                               <td>7</td>
                               <td>Jacob</td>
                               <td>Thornton</td>
                               <td>@fat</td>
                               <td>100090</td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
             <div class="panel panel-warning">
                <div class="panel-heading">
                   Recent Comments
                </div>
                <div class="panel-body">
                   <ul class="media-list">
                      <li class="media">
                         <a class="pull-left" href="#">
                         <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
                         </a>
                         <div class="media-body">
                            <h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
                            <p>
                               Donec sit amet ligula enim. Duis vel condimentum massa.
                               Maecenas eget congue dui
                               interdum nibh et, volutpat dolor.
                            </p>
                            <!-- Nested media object -->
                            <div class="media">
                               <a class="pull-left" href="#">
                               <img class="media-object img-circle img-comments" src="assets/img/user2.png">
                               </a>
                               <div class="media-body">
                                  <h4 class="media-heading">Nulla gravida vitae neque </h4>
                                  Donec sit amet ligula enim. Duis vel condimentum massa.
                                  Maecenas eget congue dui. Vestibulum et eros consectetur,
                                  interdum nibh et, volutpat dolor.
                                  <!-- Nested media object -->
                                  <div class="media">
                                     <a class="pull-left" href="#">
                                     <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
                                     </a>
                                     <div class="media-body">
                                        <h4 class="media-heading">Donec sit amet ligula enim</h4>
                                        Donec sit amet ligula enim. Duis vel condimentum massa.
                                        Maecenas eget congue dui. Vestibulum et eros consectetur,
                                        interdum nibh et, volutpat dolor.
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-default">
               <div class="panel-heading">
                  Blog Publisher
               </div>
               <div class="panel-body text-center recent-users-sec">
                  <img class="img-thumbnail" src="assets/img/user.gif" />
                  <img class="img-thumbnail" src="assets/img/user2.png" />
                  <img class="img-thumbnail" src="assets/img/user.gif" />
                  <img class="img-thumbnail" src="assets/img/user2.png" />
                  <img class="img-thumbnail" src="assets/img/user.gif" />
                  <img class="img-thumbnail" src="assets/img/user2.png" />
                  <img class="img-thumbnail" src="assets/img/user.gif" />
                  <img class="img-thumbnail" src="assets/img/user2.png" />
                  <img class="img-thumbnail" src="assets/img/user.gif" />
               </div>
            </div>
         </div>
       </div>
       <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
               <div class="panel-heading">
                  Compose a Mail For Admin
               </div>
               <div class="panel-body">
                  <form role="form">
                    
                     <div class="form-group">
                        <label>Enter Email</label>
                        <input class="form-control" type="text" />
                     </div>
                     <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" type="text" />
                     </div>
                     <div class="form-group">
                        <label>Enter Message</label>
                        <input class="form-control" type="text" style="min-height:100px;" />
                     </div>
                     <div class="form-group">
                        <label>Attach File </label>
                        <input type="file" />
                     </div>
                     <div class="form-group">
                        <label>For Role </label>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" value="" />Admin 
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" value="" />Sub Admin
                           </label>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" value="" />Guest Admin
                           </label>
                        </div>

                     </div>
                     <button type="submit" class="btn btn-success">Send Message </button>
                     <button type="reset" class="btn btn-primary">Reset Fields</button>
                  </form>
               </div>
            </div>
         </div>
          <div class="col-md-6">
             <div class="panel panel-info">
                <div class="panel-heading">
                   Compose a Mail For User
                </div>
                <div class="panel-body">
                   <form role="form">
                      
                      <div class="form-group">
                         <label>Enter Email</label>
                         <input class="form-control" type="text" />
                      </div>
                      <div class="form-group">
                         <label>Subject</label>
                         <input class="form-control" type="text" />
                      </div>
                      <div class="form-group">
                         <label>Enter Message</label>
                         <input class="form-control" type="text" style="min-height:100px;" />
                      </div>
                      <div class="form-group">
                         <label>Attach File </label>
                         <input type="file" />
                      </div>
                      <div class="form-group">
                         <label>For Role </label>
                         <div class="checkbox">
                            <label>
                            <input type="checkbox" value="" />Subsciber
                            </label>
                         </div>
                         <div class="checkbox">
                            <label>
                            <input type="checkbox" value="" />User
                            </label>
                         </div>
                         <div class="checkbox">
                            <label>
                            <input type="checkbox" value="" />Guest User
                            </label>
                         </div>
                         
                      </div>
                      <button type="submit" class="btn btn-success">Send Message </button>
                      <button type="reset" class="btn btn-primary">Reset Fields</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection