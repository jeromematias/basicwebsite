@extends('landing.index')
@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="row" id="list-page">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        @verbatim
                        <div class="list-title">Showing 25 of 2930 Jobs</div>
                        @endverbatim
                    </div>
                    <div class="col-md-12 list-left-content">
                        @verbatim
                            <div class="card card-job-list">                       
                                <div class="card-body card-body-list" ng-repeat="jobs in jobLists" id="joblist-content">                                  
                                    <div class="card-logo"><img src="assets/images/users/1.jpg"></div>
                                    <div class="detail-container">
                                        <div class="card-featured">FEATURED</div>
                                        <div class="text detail-title">
                                            {{ jobs.job_title }}
                                        </div                                      
                                        <br>
                                        <div class="text detail-company">
                                            {{ jobs.company_name }}
                                        </div>
                                        <br>
                                        <div class="text detail-description">
                                            {{jobs.job_description}}
                                        </div>
                                        <div class="text detail-job-info">                                          
                                            <ul>
                                                <li>
                                                    <div class="location-detail">
                                                        <i class="fa fa-map-marker" style="color: #6684f2;" aria-hidden="true"></i> 
                                                        <span class="location">Location: </span><span class="place">{{ jobs.location }}</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="location-detail">
                                                        <i class="fa fa-calendar" style="color: #6684f2;"></i>
                                                        <span class="location">Post Date: </span><span class="place">{{jobs.created_at}}</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="location-detail">                                                    
                                                        <i class="fa fa-usd" style="color: #6684f2;" aria-hidden="true"></i>
                                                        <span class="location">Salary: </span><span class="place">$280,000 - $320,000</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="location-detail">
                                                        <i class="fa fa-clock-o" style="color: #6684f2;"></i>
                                                        <span class="location">Duration: </span><span class="place">Fellowship</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="location-detail">
                                                        <i class="fa fas fa-hashtag" style="color: #6684f2;"></i>
                                                        <span class="location">Job id: </span><span class="place">{{jobs.id}}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endverbatim                        
                        
                    </div>
                </div>                  
            </div>
            <div class="col-md-2 search-content">
                <div class="search-row">
                    <div class="search-title">
                        Refine Search
                        <div class="circle-plus">+</div>
                    </div>
                    <div class="sort-content">
                        <div class="sort-title">Sort these jobs by:</div>
                        <div class="sort-options">
                            <ul>
                                <li class="active">Date posted</li>
                                <li>By location</li>
                                <li>By Browse with top</li>
                                <li>Browse Local jobs</li>
                                <li>Browse Categories</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search-row">
                    <div class="sort-content">
                        <div class="connect-title">Connect with Employers</div>
                        <div class="connect-options">
                            <ul>                                    
                                <li><div class="circle-employer"></div></li>
                                <li><div class="circle-employer"></div></li>
                                <li><div class="circle-employer"></div></li>
                                <li><div class="circle-employer"></div></li>
                            </ul>
                        </div>
                    </div>                      
                </div>
                <div class="search-row">
                    <button type="button" id="btn-modal-post" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalNewPost">New job Posst</button>                                                                                                        
                </div>
            </div>              
        </div>
    </div>
</div>
<!-- new job posting modal -->
<div id="modalNewPost" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">Post new job</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
            <div class="form-group">                
                <label for="job-title">Job title</label>
                <input type="text" class="form-control" ng-model="jobTitle" value="" name="job-title" placeholder="Enter title">
            </div>
            <div class="form-group">                
                <label for="company-name">Company name</label>
                <input type="text" class="form-control" ng-model="companyName" value="" name="company-name" placeholder="Enter Company name">
            </div>
            <div class="form-group">                
                <label for="job-description">Job Description</label>
                <textarea class="form-control" name="job-description" id="job-description" ng-model="jobDescription" rows="4" placeholder="Enter Description here"></textarea>
            </div>
            <div class="form-group">                
                <label for="job-location">Location</label>
                <input type="text" class="form-control" ng-model="jobLocation" value="" name="job-location" placeholder="Enter job location">
            </div>
        </div>
        <input type="file" class="form-control" id="file" ng-model="file" onchange="angular.element(this).scope().fileChanged(this)">        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" ng-click="JobPost()">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
@endsection