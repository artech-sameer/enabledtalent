<div class="user-profile-sidebar">
                            <div class="user-profile-sidebar-top">
                                <div class="user-profile-img">
                                    @if(empty(auth('company')->user()->avatar))
                                        <img src="{{ asset('assets/img/candidate.png') }}" alt="">
                                    @else
                                        <img src="{{ auth('company')->user()->avatar }}" alt="">
                                    @endif
                                    <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                                    <input type="file" class="profile-img-file">
                                </div>
                                <h4>{{ auth('company')->user()->details->company_name }}</h4>
                                @if(auth('company')->user()->details->industry)
                                    <p>{{ auth('company')->user()->details->industry->name }}</p>
                                @endif
                            </div>
                            <ul class="user-profile-sidebar-list">
                                <li>
                                  <a class="active" href="employer-dashboard.html"><i class="far fa-gauge-high"></i> Dashboard</a>
                                </li>

                                <li>
                                  <a href="{{ route('company.details.detail') }}"><i class="far fa-user-tie"></i> Company Profile</a>
                                </li>

                                {{-- <li><a href="employer-post-job.html"><i class="far fa-paper-plane"></i> Post A Job</a></li>
                                <li><a href="employer-manage-job.html"><i class="far fa-briefcase"></i> Manage Jobs</a></li>
                                <li><a href="employer-candidate.html"><i class="far fa-file-lines"></i> All Candidates</a></li>
                                <li><a href="employer-shortlisted-resume.html"><i class="far fa-file-zipper"></i> Shortlisted Resumes</a></li>
                                <li><a href="employer-message.html"><i class="far fa-envelope"></i> Messages <span class="badge">02</span></a></li>
                                <li><a href="employer-transaction.html"><i class="far fa-coins"></i> Transaction</a></li>
                                <li><a href="employer-resume-alert.html"><i class="far fa-bell"></i> Resume Alerts <span class="badge">05</span></a></li>
                                <li><a href="employer-settings.html"><i class="far fa-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="far fa-trash-can"></i> Delete Profile</a></li> --}}
                                <li><a href="{{ route('company.logout') }}"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>