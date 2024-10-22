@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Dashboard')
 
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Column -->
        <div class="row mb-4">
            <!-- Job Applicants -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Job Applicants</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.job.applicants.index')}}">{{count($job_applicants)}}</a>
                    </div>
                </div>
            </div>

            <!-- Job Circulars -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Job Circulars</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.job.circular.index')}}">{{count($job_circulars)}}</a>
                    </div>
                </div>
            </div>

            <!-- Investment Applicants -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Investment Applicants</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.investment.applicants.index')}}">{{count($investment_applicants)}}</a>
                    </div>
                </div>
            </div>

            <!-- Investment Proposals -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Investment Proposals</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.investment.proposal.index')}}">{{count($investment_propsals)}}</a>
                    </div>
                </div>
            </div>

            <!-- Intern Applicants -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Intern Applicants</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.intern.index')}}">{{count($intern_applicants)}}</a>
                    </div>
                </div>
            </div>

            <!-- Business Proposals -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Business Proposals</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.busines.proposal.index')}}">{{count($business_proposals)}}</a>
                    </div>
                </div>
            </div>

            <!-- Team Members -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Team Members</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.teams.list')}}">{{count($team_members)}}</a>
                    </div>
                </div>
            </div>

            <!-- Pages -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pages</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.pages.index')}}">{{count($pages)}}</a>
                    </div>
                </div>
            </div>

            <!-- Portfolios -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Portfolios</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.portfolios.index')}}">{{count($portfolios)}}</a>
                    </div>
                </div>
            </div>

            <!-- Blogs -->
            <div class="col-md-4 col-12 mb-4">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Blogs</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.blogs.index')}}">{{count($blogs)}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
