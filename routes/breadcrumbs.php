<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

Breadcrumbs::for('location', function (BreadcrumbTrail $trail) {
    $trail->push('Location', route('admin.country.index'));
});

Breadcrumbs::for('country', function (BreadcrumbTrail $trail) {
    $trail->parent('location');
    $trail->push('Country', route('admin.country.index'));
});


Breadcrumbs::for('state', function (BreadcrumbTrail $trail) {
    $trail->parent('country');
    $trail->push('State', route('admin.state.index'));
});

Breadcrumbs::for('district', function (BreadcrumbTrail $trail) {
    $trail->parent('state');
    $trail->push('District', route('admin.district.index'));
});

Breadcrumbs::for('city', function (BreadcrumbTrail $trail) {
    $trail->parent('district');
    $trail->push('city', route('admin.city.index'));
});


Breadcrumbs::for('control-panel', function (BreadcrumbTrail $trail) {
    $trail->push('Control Panel', route('admin.app-setting.index'));
});

Breadcrumbs::for('app-setting', function (BreadcrumbTrail $trail) {
    $trail->parent('control-panel');
    $trail->push('App Setting', route('admin.app-setting.index'));
});

Breadcrumbs::for('companies', function (BreadcrumbTrail $trail) {
    $trail->push('Companies', route('admin.all-companies.index'));
});