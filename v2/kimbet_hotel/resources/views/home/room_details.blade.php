<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      @include('home.css')
      <style>
         label{
            display: inline-block;
            width: 200px;
         }

         input{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
         }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         @include('home.header')         
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <div id="serv_hover" class="room">
                     <div class="room_img" style="padding: 20px">
                        <img style="height: 300px; 800px" src="/room/{{$room->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>
                           {{$room->room_title}}
                        </h3>
                        <p style="padding: 12px">
                           {{$room->description}}
                        </p>
                        <h4 style="padding: 12px">
                           Free Wifi: {{$room->wifi}}
                        </h4>
                        <h4 style="padding: 12px">
                           Room Type: {{$room->room_type}}
                        </h4>
                        <h3 style="padding: 12px">
                           Price: {{$room->price}}
                        </h3>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <h1 style="font-size: 40px!important;">Book Room</h1>
                  @if($errors)
                  @foreach($errors->all() as $errors)
                  <li style="color: red;">
                     {{$errors}}
                  </li>
                  @endforeach
                  @endif
                  <form action="{{url('add_booking', $room->id)}}" method="Post">
                  @csrf
                  <div>
                     <label>Name</label>
                     <input type="text" name="name" 
                     @if(Auth::id())
                     value="{{Auth::user()->name}}"
                     @endif>
                  </div>
                  <div>
                     <label>Email</label>
                     <input type="email" name="email"
                     @if(Auth::id())
                     value="{{Auth::user()->email}}"
                     @endif>
                  </div>
                  <div>
                     <label>Phone</label>
                     <input type="number" name="phone"
                     @if(Auth::id())
                     value="{{Auth::user()->phone}}"
                     @endif>
                  </div>
                  <div>
                     <label>Start Date</label>
                     <input type="date" name="startDate"8 id="startDate">
                  </div>
                  <div>
                     <label>End Date</label>
                     <input type="date" name="endDate" id="endDate">
                  </div>
                  <div style="padding-top: 10px">
                     <input type="submit" value="Book Now" class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!--  footer -->
      @include('home.footer')

      <script>
         $(function(){
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if(month < 10)
               month = '0' + month.toString();

            if(day < 10)
               day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);
         });
      </script>
   </body>
</html>