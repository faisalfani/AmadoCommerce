@extends('layouts.admin')
@section('title')
	Product Panel
@endsection
@section('sidetitle','Product')
@section('content')
	<div class="content">
    <div class="box">
        <div class="box-header">
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-xs pull-right">Tambah</a>
            <h3>Daftar Product</h3>
        </div>
        <div class="box-body table-responsive">
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{session()->get('success_message')}}
                </div>
            @endif

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Foto Produk</th>
                    <th>Nama product</th>
                    <th>Kategori ID</th>
                    <th>Status Product</th>
                    <th>deskripsi</th>
                    <th>harga</th>
                    <th>stok</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <td>{{$key+1}}</td>

                        <td> <?php $photo = !is_null($product->foto_produk) ? $product->foto_produk :'default.png'
                          ?>
                           <img src="{{asset('/uploads/'.$photo)}}" alt="profile Pic" height="100" width="100" >
                        </td>
                        <td>{{$product['nama_produk']?$product['nama_produk']:''}}</td>
                        <td>{{$product['category_id']?$product['category_id']:''}}</td>
                        <td>{{$product['status_produk']?$product['status_produk']:''}}</td>
                        <td>{{$product['deskripsi']?$product['deskripsi']:''}}</td>
                        <td>{{$product['harga']?$product['harga']:''}}</td>
                        <td>{{$product['stok']?$product['stok']:''}}</td>
                        <td>
                            <a href="{{route('products.edit', ['product' => $product['id']])}}" class="btn btn-circle btn-default btn-sm" title="Edit">
                                 <i class="far fa-edit"></i>
                             </a>
                             <a href="{{route('products.destroy',['product'=>$product['id']]) }}" onclick="deleteMenu(event,this)" class="btn btn-circle btn-danger btn-sm" title="Remove">
                                <i class="far fa-trash-alt"></i>
                        </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


@push('scripts')
    <form action="" id="form_delete_menu" method="post">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function deleteMenu(event, el) {
            event.preventDefault();
            var cf = confirm("Apakah Anda yakin akan menghapus data?");
            if (cf) {
                $("#form_delete_menu").attr('action', $(el).attr('href'));
                $("#form_delete_menu").submit();
            }
        }
    </script>
@endpush