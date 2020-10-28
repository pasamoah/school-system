  <div class="container-fluid">
        <div class="row">
          <div style="background-color: #ffffff">
            <div style="background-color: #ffffff">
              <div class="card-header" style="background-color: #ffffff">
                <h4 class="card-title d-inline-block">Student List</h4>
                <a href="/student-list" class="btn btn-primary float-right">View all</a>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table mb-0" id="tableData">
                    <thead class="d-none">
                      <tr>
                        <th>Student Name</th>
                        <th></th>
                        <th></th>
                        <th class="text-right">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if(count($students) > 0)
                       @foreach ($students as $std)
                      <tr>
                        <td style="min-width: 200px;">
                          <a class="avatar" href="profile.html"><img src="uploads/{{$std->image}}" style="width: 40px;height: 40px; border-radius: 50px" alt="No Image"></a>
                          <h2><a href="/users/{!! $std -> std_id !!}">{{$std->f_name}} {{$std->surname}} <span>{{$std->std_id}}, {{$std->c_level}}</span></a></h2>
                        </td>                 
                        <td>
                          <h5 class="time-title p-0">Former School</h5>
                          <p>{{$std->p_school}}</p>
                        </td>
                        <td>
                          <h5 class="time-title p-0">Gender</h5>
                          <p>{{$std->gender}}</p>
                        </td>

                        <td>
                          <h5 class="time-title p-0">Contact</h5>
                          <p>{{$std->phone}}</p>
                        </td>

                        <td class="text-right">
                          <a href="/users/{!! $std -> std_id !!}" class="btn btn-outline-primary">Profile</a>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


                   


