@extends('admin.admin_master')
@section('admin')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}


        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
               
                <!-- end page title -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">user page</h4>
                                <br>
                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                     <input type="hidden" name="id">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">uniq id</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="uniq_id" type="text" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="text" id="example-text-input">
                                    </div>
                                </div>
                              
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Register">