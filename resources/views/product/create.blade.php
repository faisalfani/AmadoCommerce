@extends('layouts.admin')
@section('title')
    Product Panel
@endsection
@section('sidetitle','Product')
@section('content')
    <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Add Product</strong>
            </div>           
            <div class="panel-body">
              <div class="form-horizontal">
                <div class="row">
                  <div class="col-md-6">
                      @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form role="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                      <label for="name" class="control-label col-md-3">Name</label>
                      <div class="col-md-8">
                        <input type="text" name="nama_produk" id="name" class="form-control">
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label for="email" class="control-label col-md-3">Category</label>
                      <div class="col-md-8">
                                <select name="category_id" id="Category" class="form-control">
                                    <option class="text-primary" value="">Select Category</option>
                                    @foreach (App\Category::pluck('name','id') as $key => $val)
                                        <option class="text-primary" value="{{$key}}">{{$val}}</option>
                                    @endforeach
                                </select>
                                </div>
                    </div>

                    <div class="form-group">
                      <label for="stok" class="control-label col-md-3">Stok</label>
                      <div class="col-md-8">
                        <input type="Number" name="stok" id="stok" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="phone" class="control-label col-md-3">Harga</label>
                      <div class="col-md-8">
                        <input type="Number" name="harga" id="harga" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="name" class="control-label col-md-3">Description</label>
                      <div class="col-md-8">
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                                <label for="exampleInputEmail1" class="control-label col-md-3">Status</label>
                                <div class="col-md-8">
                                <select name="status" id="status" class="form-control">
                                    <option class="text-primary" value="0" selected="selected">drafted</option>
                                         <option class="text-primary">deleted</option>
                                         <option class="text-primary">published</option>
                                </select>
                                </div>
                          </div>
                     
                    </div>
                  </div>
                  <div class="col-md-4 ">
                    <label for="">Upload Photo</label>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail " >
                        <img  alt="">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;"></div>
                      <div class="text-left">
                        <span class="btn btn-primary btn-sm btn-file">
                            Choose File
                         <input type="file" name="foto_produk"></span>

                      </div>
                    </div>
                  </div>
                

                </div>
              </div>
            </div>


            <div class="panel-footer">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                      <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                      <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
@endsection