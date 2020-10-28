                        <hr>
                        <div class="card member-panel">
                            <div class="card-header bg-white">
								<h4 class="card-title mb-0">Employees</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    @foreach($staff as $staff)
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="/staff/{!! $staff -> staff_id !!}" title="{!! $staff->firstname_staff !!} {!! $staff->lastname_staff !!}"><img src="/uploads/{!! $staff->image !!}" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">{{ $staff->firstname_staff }} {{$staff->lastname_staff }}</span>
                                                <span class="contact-date">{{$staff->department_staff }}, {{$staff->designation_staff }}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="/staff" class="text-muted">View all Employees</a>
                            </div>
                    