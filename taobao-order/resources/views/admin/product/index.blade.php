@extends('layouts.admin')
 @section('title', $viewData['title'])
 @section('content')
 <div class="card">
 <div class="card-header">
 Quản lí các sản phẩm
 </div>
 <div class="card-body">
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th scope="col">ID</th>
 <th scope="col">Tên</th>
 <th scope="col">Chỉnh sửa</th>
 <th scope="col">Xoá</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($viewData['products'] as $product)
 <tr>
 <td>{{ $product->getId() }}</td>
 <td>{{ $product->getName() }}</td>
 <td>Chỉnh sửa</td>
 <td>Xoá</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>
 @endsection
