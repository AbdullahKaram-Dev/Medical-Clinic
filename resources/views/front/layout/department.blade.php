<div class="department_area section-padding2">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center mb-100">
                    <span>Our Departments</span>
                    <h2>Our Medical Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="depart_ment_tab mb-30">
                    <!-- Tabs Buttons -->
                    <ul class="nav" id="myTab" role="tablist">
                        @if(isset($departments) && count($departments) > 0)
                        @foreach($departments as $department)
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">
                                <i class="flaticon-teeth"></i>
                                <h4>{{$department->name}}</h4>
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
