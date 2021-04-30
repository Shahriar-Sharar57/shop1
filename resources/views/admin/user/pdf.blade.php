<!DOCTYPE html>
<html>
    <head>
      <title>PDF</title>
      <style>
          .wrapper{
            width: 600px;
            margin: 0px auto;
          }

          h1{
              text-align: center;
          }


      </style>
    </head>
    <body>
      <div class="wrapper">
          <h1>All User Information</h1>
          <table width="500" align="center">
              <tr>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Role</th>
              </tr>
              @foreach($all as $data)
              <tr>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{$data->userRole->role_name}}</td>
              </tr>
              @endforeach
          </table>
      </div>
    </body>
</html>
