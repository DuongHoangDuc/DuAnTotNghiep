@extends('backend.master_layout')
@section('title', 'Dashboard')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card-box">

      <h4 class="header-title mb-4">Thư Viện Ảnh</h4>
      <form action="{{ URL::To('/admin/gallery/store/'.$product_id) }}" method="post"
            enctype="multipart/form-data">
        @csrf
        <div class="col-md-6" id="add-image-file">
          <div class="mb-3">

            <label class="title_product" for="">Hình ảnh File</label>
            <div class="custom-file">
              <input type="file" name="file[]" multiple>

            </div>

          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-3">
                <input type="submit" name="upload" class="btn btn-primary" value="thêm ảnh  ">
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-xl-12">
          <input type="hidden" value="{{ $product_id }}" name="product_id" class="product_id">
          <form>
            @csrf
            <div id="gallery_load">


              </tbody>
              </table>
            </div>
          </form>
        </div>



      </div><!-- end row -->
    </div>
  </div><!-- end col -->
</div>
@endsection