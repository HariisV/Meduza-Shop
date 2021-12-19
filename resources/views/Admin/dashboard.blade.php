@extends('Admin.default')
@section('judul') Dashboard  @endsection
@section('konten')


            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-blue">
                                    <i class="anticon anticon-dollar"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">$23,523</h2>
                                    <p class="m-b-0 text-muted">Profit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                    <i class="anticon anticon-line-chart"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">+ 17.21%</h2>
                                    <p class="m-b-0 text-muted">Growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-gold">
                                    <i class="anticon anticon-profile"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">3,685</h2>
                                    <p class="m-b-0 text-muted">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avatar avatar-icon avatar-lg avatar-purple">
                                    <i class="anticon anticon-user"></i>
                                </div>
                                <div class="m-l-15">
                                    <h2 class="m-b-0">1,832</h2>
                                    <p class="m-b-0 text-muted">Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Total Revenue</h5>
                                <div>
                                    <div class="btn-group">
                                        <button class="btn btn-default active">
                                            <span>Month</span>
                                        </button>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-50" style="height: 330px">
                                <canvas class="chart" id="revenue-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="m-b-0">Customers</h5>
                            <div class="m-v-60 text-center" style="height: 200px">
                                <canvas class="chart" id="customers-chart"></canvas>
                            </div>
                            <div class="row border-top p-t-25">
                                <div class="col-4">
                                    <div class="d-flex justify-content-center">
                                        <div class="media align-items-center">
                                            <span class="badge badge-success badge-dot m-r-10"></span>
                                            <div class="m-l-5">
                                                <h4 class="m-b-0">350</h4>
                                                <p class="m-b-0 muted">New</p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-center">
                                        <div class="media align-items-center">
                                            <span class="badge badge-secondary badge-dot m-r-10"></span>
                                            <div class="m-l-5">
                                                <h4 class="m-b-0">450</h4>
                                                <p class="m-b-0 muted">Returning</p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-center">
                                        <div class="media align-items-center">
                                            <span class="badge badge-warning badge-dot m-r-10"></span>
                                            <div class="m-l-5">
                                                <h4 class="m-b-0">100</h4>
                                                <p class="m-b-0 muted">Others</p>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h2 class="m-b-0">$17,267</h2>
                                    <p class="m-b-0 text-muted">Avg.Profit</p>
                                </div>
                                <div>
                                    <span class="badge badge-pill badge-cyan font-size-12">
                                        <span class="font-weight-semibold m-l-5">+5.7%</span>
                                    </span>
                                </div>
                            </div>
                            <div class="m-t-50" style="height: 375px">
                                 <canvas class="chart" id="avg-profit-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                           <div class="d-flex justify-content-between align-items-center">
                                <h5>Top Product</h5>
                                <div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Sales</th>
                                                <th>Earning</th>
                                                <th style="max-width: 70px">Stock Left</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="avatar avatar-image rounded">
                                                            <img src="assets/images/others/thumb-9.jpg" alt="">
                                                        </div>
                                                        <div class="m-l-10">
                                                            <span>Gray Sofa</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>81</td>
                                                <td>$1,912.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100 m-b-0">
                                                            <div class="progress-bar bg-success" style="width: 82%"></div>
                                                        </div>
                                                        <div class="m-l-10">
                                                            82
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="avatar avatar-image rounded">
                                                            <img src="assets/images/others/thumb-10.jpg" alt="">
                                                        </div>
                                                        <div class="m-l-10">
                                                            <span>Gray Sofa</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>26</td>
                                                <td>$1,377.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100 m-b-0">
                                                            <div class="progress-bar bg-success" style="width: 61%"></div>
                                                        </div>
                                                        <div class="m-l-10">
                                                            61
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="avatar avatar-image rounded">
                                                            <img src="assets/images/others/thumb-11.jpg" alt="">
                                                        </div>
                                                        <div class="m-l-10">
                                                            <span>Wooden Rhino</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>71</td>
                                                <td>$9,212.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100 m-b-0">
                                                            <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                        </div>
                                                        <div class="m-l-10">
                                                            23
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="avatar avatar-image rounded">
                                                            <img src="assets/images/others/thumb-12.jpg" alt="">
                                                        </div>
                                                        <div class="m-l-10">
                                                            <span>Red Chair</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>79</td>
                                                <td>$1,298.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100 m-b-0">
                                                            <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                        </div>
                                                        <div class="m-l-10">
                                                            54
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="avatar avatar-image rounded">
                                                            <img src="assets/images/others/thumb-13.jpg" alt="">
                                                        </div>
                                                        <div class="m-l-10">
                                                            <span>Wristband</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>60</td>
                                                <td>$7,376.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress progress-sm w-100 m-b-0">
                                                            <div class="progress-bar bg-success" style="width: 76%"></div>
                                                        </div>
                                                        <div class="m-l-10">
                                                            76
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Latest Transactions</h5>
                                <div>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#5331</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-l-10 m-b-0">Erin Gonzales</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>8 May 2019</td>
                                                <td>$137.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                                        <span>Approved</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#5375</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-l-10 m-b-0">Darryl Day</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>6 May 2019</td>
                                                <td>$322.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                                        <span>Approved</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#5762</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                                <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-l-10 m-b-0">Marshall Nichols</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1 May 2019</td>
                                                <td>$543.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                                        <span>Approved</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#5865</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                                <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-l-10 m-b-0">Virgil Gonzales</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28 April 2019</td>
                                                <td>$876.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-primary badge-dot m-r-10"></span>
                                                        <span>Pending</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#5213</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image" style="height: 30px; min-width: 30px; max-width:30px">
                                                                <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-l-10 m-b-0">Nicole Wyne</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>28 April 2019</td>
                                                <td>$241.00</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-success badge-dot m-r-10"></span>
                                                        <span>Approved</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('script')
<script src="{{Asset('enlink-assets/vendors/chartjs/Chart.min.js')}}"></script>
<script>
    /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./app/assets/es6/constant/theme-constant.js":
/*!***************************************************!*\
  !*** ./app/assets/es6/constant/theme-constant.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n\r\nconst ThemeConstant = {\r\n   \r\n    magenta: '#eb2f96',\r\n    magentaLight: 'rgba(235, 47, 150, 0.05)',\r\n    red: '#de4436',\r\n    redLight: 'rgba(222, 68, 54, 0.05)',\r\n    volcano: '#fa541c',\r\n    volcanoLight: 'rgba(250, 84, 28, 0.05)',\r\n    orange: '#fa8c16',\r\n    orangeLight: 'rgba(250, 140, 22, 0.1)',\r\n    gold: '#ffc107',\r\n    goldLight: 'rgba(255, 193, 7, 0.1)',\r\n    lime: '#a0d911',\r\n    limeLight: 'rgba(160, 217, 17, 0.1)',\r\n    green: '#52c41a',\r\n    greenLight: 'rgba(82, 196, 26, 0.1)',\r\n    cyan: \"#05c9a7\",\r\n    cyanLight: 'rgba(0, 201, 167, 0.1)',\r\n    blue: '#3f87f5',\r\n    blueLight: 'rgba(63, 135, 245, 0.15)',\r\n    geekBlue: '#2f54eb',\r\n    geekBlueLight: 'rgba(47, 84, 235, 0.1)',\r\n    purple: '#886cff',\r\n    purpleLight: 'rgba(136, 108, 255, 0.1)',\r\n    gray: '#53535f',\r\n    grayLight: '#77838f',\r\n    grayLighter: '#ededed',\r\n    grayLightest: '#f1f2f3',\r\n    border: '#edf2f9',\r\n    white: '#ffffff',\r\n    dark: '#2a2a2a',\r\n    transparent: 'rgba(255, 255, 255, 0)'\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (ThemeConstant);\n\n//# sourceURL=webpack:///./app/assets/es6/constant/theme-constant.js?");

/***/ }),

/***/ "./app/assets/es6/pages/dashboard-default.js":
/*!***************************************************!*\
  !*** ./app/assets/es6/pages/dashboard-default.js ***!
  \***************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../constant/theme-constant */ \"./app/assets/es6/constant/theme-constant.js\");\n\r\n\r\nclass DashboardDefault {\r\n\r\n    static init() {\r\n\r\n        const revenueChartConfig = new Chart(document.getElementById(\"revenue-chart\").getContext('2d'), {\r\n            type: 'line',\r\n            data: {\r\n                labels: [\"16th\", \"17th\", \"18th\", \"19th\", \"20th\", \"21th\", \"22th\", \"23th\", \"24th\", \"25th\", \"26th\"],\r\n                datasets: [{\r\n                    label: 'Series A',\r\n                    backgroundColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].transparent,\r\n                    borderColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blue,\r\n                    pointBackgroundColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blue,\r\n                    pointBorderColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].white,\r\n                    pointHoverBackgroundColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blueLight,\r\n                    pointHoverBorderColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blueLight,\r\n                    data: [30, 60, 40, 50, 40, 55, 85, 65, 75, 50, 70]\r\n                }]\r\n            },\r\n            options: {\r\n                legend: {\r\n                    display: false\r\n                },\r\n                maintainAspectRatio: false,\r\n                responsive: true,\r\n                hover: {\r\n                    mode: 'nearest',\r\n                    intersect: true\r\n                },\r\n                tooltips: {\r\n                    mode: 'index'\r\n                },\r\n                scales: {\r\n                    xAxes: [{ \r\n                        gridLines: [{\r\n                            display: false,\r\n                        }],\r\n                        ticks: {\r\n                            display: true,\r\n                            fontColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].grayLight,\r\n                            fontSize: 13,\r\n                            padding: 10\r\n                        }\r\n                    }],\r\n                    yAxes: [{\r\n                        gridLines: {\r\n                            drawBorder: false,\r\n                            drawTicks: false,\r\n                            borderDash: [3, 4],\r\n                            zeroLineWidth: 1,\r\n                            zeroLineBorderDash: [3, 4]  \r\n                        },\r\n                        ticks: {\r\n                            display: true,\r\n                            max: 100,                            \r\n                            stepSize: 20,\r\n                            fontColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].grayLight,\r\n                            fontSize: 13,\r\n                            padding: 10\r\n                        }  \r\n                    }],\r\n                }\r\n            }\r\n        });\r\n\r\n        const customersChartConfig = new Chart(document.getElementById(\"customers-chart\").getContext('2d'), {\r\n            type: 'doughnut',\r\n            data: {\r\n                labels: ['New', 'Returning', 'Others'],\r\n                datasets: [{\r\n                    label: 'Series A',\r\n                    backgroundColor: [_constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].cyan, _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].purple, _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].gold],\r\n                    pointBackgroundColor : [_constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].cyan, _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].purple, _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].gold],\r\n                    data: [350, 450, 100]\r\n                }]\r\n            },\r\n            options: {\r\n                legend: {\r\n                    display: false\r\n                },\r\n                cutoutPercentage: 75,\r\n                maintainAspectRatio: false\r\n            }\r\n        });\r\n\r\n        const avgProfitChartConfig = new Chart(document.getElementById(\"avg-profit-chart\").getContext('2d'), {\r\n            type: 'bar',\r\n            data: {\r\n                labels: ['Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],\r\n                datasets: [\r\n                    {\r\n                        label: 'Series A',\r\n                        backgroundColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blue,\r\n                        borderWidth: 0,\r\n                        data: [38, 38, 30, 19, 56, 55, 31]\r\n                    },\r\n                    {\r\n                        label: 'Series B',\r\n                        backgroundColor: _constant_theme_constant__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blueLight,\r\n                        borderWidth: 0,\r\n                        data: [55, 69, 90, 81, 86, 27, 77]\r\n                    }\r\n                ]\r\n            },\r\n            options: {\r\n                legend: {\r\n                    display: false\r\n                },\r\n                scaleShowVerticalLines: false,\r\n                responsive: true,\r\n                maintainAspectRatio: false,\r\n                scales: {\r\n                    xAxes: [{\r\n                        categoryPercentage: 0.35,\r\n                        barPercentage: 0.3,\r\n                        display: true,\r\n                        stacked: true,\r\n                        scaleLabel: {\r\n                            display: false,\r\n                            labelString: 'Month'\r\n                        },\r\n                        gridLines: false,\r\n                        ticks: {\r\n                            display: true,\r\n                            beginAtZero: true,\r\n                            fontSize: 13,\r\n                            padding: 10\r\n                        }\r\n                    }],\r\n                    yAxes: [{\r\n                        categoryPercentage: 0.35,\r\n                        barPercentage: 0.3,\r\n                        display: true,\r\n                        stacked: true,\r\n                        scaleLabel: {\r\n                            display: false,\r\n                            labelString: 'Value'\r\n                        },\r\n                        gridLines: {\r\n                            drawBorder: false,\r\n                            offsetGridLines: false,\r\n                            drawTicks: false,\r\n                            borderDash: [3, 4],\r\n                            zeroLineWidth: 1,\r\n                            zeroLineBorderDash: [3, 4]\r\n                        },\r\n                        ticks: {                           \r\n                            stepSize: 40,\r\n                            display: true,\r\n                            beginAtZero: true,\r\n                            fontSize: 13,\r\n                            padding: 10\r\n                        }\r\n                    }]\r\n                }\r\n            }\r\n        });\r\n    }\r\n}\r\n\r\n$(() => { DashboardDefault.init(); });\r\n\r\n\n\n//# sourceURL=webpack:///./app/assets/es6/pages/dashboard-default.js?");

/***/ }),

/***/ 4:
/*!*********************************************************!*\
  !*** multi ./app/assets/es6/pages/dashboard-default.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("module.exports = __webpack_require__(/*! C:\\Users\\Nate\\Desktop\\starter\\app\\assets\\es6\\pages\\dashboard-default.js */\"./app/assets/es6/pages/dashboard-default.js\");\n\n\n//# sourceURL=webpack:///multi_./app/assets/es6/pages/dashboard-default.js?");

/***/ })

/******/ });
</script>
@endsection