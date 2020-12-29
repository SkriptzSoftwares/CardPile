@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Home</h4>
                            <h6 class="text-muted card-subtitle mb-2">Active as <i>{{auth()->user()->name}}</i></h6>
                            <form class="pb-3">
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group text-left"><label class="text-muted" for="username">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div><input type="text" class="form-control" id="username" style="border-radius: 25px;" name="username" placeholder="Username" />
                                                <div class="input-group-append"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group text-left"><label class="text-muted" for="email">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"></div><input type="text" class="form-control" id="email" style="border-radius: 25px;" name="email" placeholder="Email" inputmode="email" />
                                                <div class="input-group-append"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group text-left"><label class="text-muted" for="password">Current Password</label><input type="password" class="form-control" id="password" style="border-radius: 25px;" name="password" placeholder="Password" /></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><button class="btn btn-outline-success" type="submit"><i class="fa fa-floppy-o"></i> Save</button></div>
                                </div>
                            </form>
                            <h4 class="card-title">Change Password</h4>
                            <form class="pb-3">
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group text-left"><label class="text-muted" for="password">Current Password</label><input type="password" class="form-control" id="password" style="border-radius: 25px;" name="password" placeholder="Current Password" /></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group text-left"><label class="text-muted" for="newpassword">New Password</label><input type="password" class="form-control" id="newpassword" style="border-radius: 25px;" name="password" placeholder="New Password" /></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group text-left"><label class="text-muted" for="newpasswordconf">Confirm Password</label><input type="password" class="form-control" id="newpasswordconf" style="border-radius: 25px;" name="password" placeholder="Confirm New Password" /></div>
                                    </div>
                                </div><span class="text-muted">The changes will take effect as soon as you click this button. Make sure you use a secure password.</span>
                                <div class="form-row">
                                    <div class="col"><button class="btn btn-outline-danger" type="submit"><i class="fa fa-floppy-o"></i> Save</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
