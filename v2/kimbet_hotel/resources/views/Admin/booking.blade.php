<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .table_deg{
            border: 2px solid white;
            margin: auto;
            width: 90%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg{
            background-color: skyblue;
            padding: 8px;
        }

        tr{
            border: 3px solid white;
        }

        td{
            padding: 10px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
            <table class="table_deg">
                    <tr>
                        <th class="th_deg">Room_id</th>
                        <th class="th_deg">Customer Name</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival Date</th>
                        <th class="th_deg">Leaving Date</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Status Update</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->room_id}}</td>
                        <td> {{$data->name}} </td>
                        <td> {{$data->phone}} </td>
                        <td> {{$data->start_date}} </td>
                        <td> {{$data->end_date}} </td>
                        <td>
                            @if($data->status=='approve')
                            <span style="color: skyblue">Approved</span>

                            @elseif($data->status=='rejected')
                            <span style="color: red">Rejected</span>

                            @endif

                            @if($data->status=='waiting')
                            <span style="color: yellow">Waiting</span>
                            @endif
                        </td>
                        <td> {{$data->room_title}} </td>
                        <td>
                            <a onClick="return confirm('Are sure want to delete this?')" href="{{url('delete_booking', $data->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <span style="padding-bottom: 10px;">
                                <a href="{{url('approve_book', $data->id)}}" class="btn btn-success">Approve</a>
                            </span>
                            <a href="{{url('reject_book', $data->id)}}" class="btn btn-warning">Reject</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
        
    @include('admin.footer')
  </body>
</html>