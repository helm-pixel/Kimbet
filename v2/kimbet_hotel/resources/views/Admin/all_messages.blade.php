<!DOCTYPE html>
<html>
  <head> 
  <style type="text/css">
        .table_deg{
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg{
            background-color: skyblue;
            padding: 15px;
        }

        tr{
            border: 3px solid white;
        }

        td{
            padding: 10px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
            <table class="table_deg">
                    <tr>
                        <th class="th_deg">Name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Message</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td> {{$data->name}} </td>
                        <td> {{$data->email}} </td>
                        <td> {{$data->phone}} </td>
                        <td> {{$data->message}} </td>
                   </tr>
                    @endforeach                    
                </table>
            </div>
        </div>
    </div>
        
    @include('admin.footer')
  </body>
</html>