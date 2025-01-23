<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <center>
                <h1 style="font-size: 40px; font-weight: bolder; color: white;">Gallery</h1>
                <div class="row">
                    @foreach($gallery as $gallery)
                    <div class="col-md-4">
                        <img src="/gallery/{{$gallery->image}}" style="height: 200!important; width: 300!important;" alt="#">
                        <a href="{{url('delete_gallery', $gallery->id)}}" class="btn btn-danger">Delete Image</a>
                    </div>
                    @endforeach
                </div>
                <form action="{{url('upload_gallery')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 30px;">
                        <label style="color: white; font-weight: bold;">Upload Image</label>
                        <input type="file" name="image">

                        <input type="submit" class="btn btn-primary" value="Upload Image">
                    </div>
                </form>
                </center>
            </div>
        </div>
    </div>
        
    @include('admin.footer')
  </body>
</html>