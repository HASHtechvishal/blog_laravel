@extends('admin.layouts.admin_layout')
@section('content')

<div class="content-wrapper">
    <div class="container">
    <div class="row pad-botm">
       <div class="col-md-12">
          <h4 class="header-line">WEBSITE SECTIONS</h4>
       </div>
    </div>
    <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
       <div class="alert alert-info back-widget-set text-center">
          <i class="fa fa-archive fa-5x"></i>
          <h3>Archive&nbsp;</h3>
          Amount Pending For Approval
       </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
       <div class="alert alert-success back-widget-set text-center">
          <i class="fa fa-bars fa-5x"></i>
          <h3>Category</h3>
          Pending For New Events
       </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
       <div class="alert alert-warning back-widget-set text-center">
          <i class="fa fa-phone fa-5x"></i>
          <h3>Contact</h3>
          To Be Made For New Orders
       </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
       <div class="alert alert-danger back-widget-set text-center">
          <i class="fa fa-briefcase fa-5x"></i>
          <h3>Admin</h3>
          That Should Be Resolved Now
       </div>
    </div>
    <div class="content-wrapper">
       
    </div>
@endsection
