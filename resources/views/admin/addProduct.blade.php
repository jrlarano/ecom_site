@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Product</div>

                <div class="panel-body">

                        <form class="form-horizontal" action="{{ route('add-product') }}" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sku" class="col-md-4 control-label">SKU</label>

                                <div class="col-md-6">
                                    <input id="sku" type="text" class="form-control" name="sku" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Image Name</label>

                                <div class="col-md-6">
                                    <input id="image" type="text" class="form-control" name="image" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file" class="form-control" name="photo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-md-4 control-label">Price</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="price" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="categoryId" class="col-md-4 control-label">Category Id</label>

                                <div class="col-md-6">
                                    <input id="categoryId" type="text" class="form-control" name="categoryId" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock" class="col-md-4 control-label">Stock</label>

                                <div class="col-md-6">
                                    <input id="stock" type="text" class="form-control" name="stock" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="longDescription" class="col-md-4 control-label">Long Description</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="longDescription" id="longDescription" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </form>   

                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ URL::to('vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::to('vendor/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
      selector: '#longDescription',  // change this value according to your HTML
      plugins : 'autolink link lists charmap print preview'
      // plugins : 'advlist autolink link lists charmap print preview'
    });
</script>

@endsection
