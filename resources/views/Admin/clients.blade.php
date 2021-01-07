@extends('Admin.layouts.app')

@section('title', 'Clients')
@section('content')
        <section>
            <div class="section-wrap">
                <div class="packages-switch-btns-bar">
                    <button class="package-item active-package" data-show=".platinum-package-tbl">
                        <span class="package-num">32</span>
                        <span class="package-name">Platinum package</span>
                    </button>
                    <button class="package-item" data-show=".gold-package-tbl">
                        <span class="package-num">140</span>
                        <span class="package-name">Gold package</span>
                    </button>
                    <button class="package-item" data-show=".silver-package-tbl">
                        <span class="package-num">265</span>
                        <span class="package-name">Silver package</span>
                    </button>
                    <button class="package-item" data-show=".bronze-package-tbl">
                        <span class="package-num">186</span>
                        <span class="package-name">Bronze package</span>
                    </button>
                </div>

                <div class="form-search-group">
                    <label for="search">
                        <input type="search" placeholder="Search" id="search">
                        <img src="{{asset('images/4010/icons/search-icon.svg')}}" class="search-icon" alt="Search Icon"
                             title="Search">
                    </label>
                </div>

                <div class="packages-banner">
                    <div class="platinum-package-tbl">
                        <table class="responsive-table">
                            <thead>
                            <tr>
                                <th scope="col">Client name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Assets-To-Protect Form</th>
                                <th scope="col">Irrevocable Trust Form</th>
                                <th scope="col">Trust And Corporate Docs</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>

                            <tbody id="platinum_package_body">
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="{{asset('images/4010/icons/stop_icon.svg')}}" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Jain Williams</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/send_icon.svg')}}" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>20 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="{{asset('images/4010/icons/stop_icon.svg')}}" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="{{asset('images/4010/icons/check_icon.svg')}}" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>20 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Sam Brown</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Laura Andrew</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Brittany James</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">John Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>20 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Sam Brown</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Jain Williamsh</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Jain Williamsh</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Jain Williamsh</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>20 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                            <tfoot>
                            <tr>
                                <td>
                                    <button onclick="scrollingTbl(0, -10)" class="scroll-icon-bar scroll-top-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>

                                    <button onclick="scrollingTbl(0, 10)" class="scroll-icon-bar scroll-bottom-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="other-pages">
                            <button class="page-arrow page-prev">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Prev" title="Prev Page">
                            </button>
                            <div>
                                <span class="page-num-item">1</span>
                                <span class="page-num-item active-page">2</span>
                                <span class="page-num-item">3</span>
                                <span class="page-num-item">4</span>
                                <span class="page-num-item">5</span>
                                <span class="many-pages-hide">...</span>
                                <span class="page-num-item">21</span>
                            </div>
                            <button class="page-arrow page-next">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Next" title="Prev Next">
                            </button>
                        </div>
                    </div>
                    <div class="gold-package-tbl hide">
                        <table class="responsive-table">
                            <thead>
                            <tr>
                                <th scope="col">Client name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Assets-To-Protect Form</th>
                                <th scope="col">Irrevocable Trust Form</th>
                                <th scope="col">Trust And Corporate Docs</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>

                            <tbody id="gold_package_body">
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>21 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>21 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>21 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">James Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>21 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                            <tfoot>
                            <tr>
                                <td>
                                    <button onclick="scrollingTbl(0, -10)" class="scroll-icon-bar scroll-top-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>

                                    <button onclick="scrollingTbl(0, 10)" class="scroll-icon-bar scroll-bottom-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="other-pages">
                            <button class="page-arrow page-prev">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Prev" title="Prev Page">
                            </button>
                            <div>
                                <span class="page-num-item">1</span>
                                <span class="page-num-item active-page">2</span>
                                <span class="page-num-item">3</span>
                                <span class="page-num-item">4</span>
                                <span class="page-num-item">5</span>
                                <span class="many-pages-hide">...</span>
                                <span class="page-num-item">21</span>
                            </div>
                            <button class="page-arrow page-next">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Next" title="Prev Next">
                            </button>
                        </div>
                    </div>
                    <div class="silver-package-tbl hide">
                        <table class="responsive-table">
                            <thead>
                            <tr>
                                <th scope="col">Client name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Assets-To-Protect Form</th>
                                <th scope="col">Irrevocable Trust Form</th>
                                <th scope="col">Trust And Corporate Docs</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>

                            <tbody id="silver_package_body">
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>22 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>22 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>22 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">David Smith</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>22 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                            <tfoot>
                            <tr>
                                <td>
                                    <button onclick="scrollingTbl(0, -10)" class="scroll-icon-bar scroll-top-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>

                                    <button onclick="scrollingTbl(0, 10)" class="scroll-icon-bar scroll-bottom-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="other-pages">
                            <button class="page-arrow page-prev">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Prev" title="Prev Page">
                            </button>
                            <div>
                                <span class="page-num-item">1</span>
                                <span class="page-num-item active-page">2</span>
                                <span class="page-num-item">3</span>
                                <span class="page-num-item">4</span>
                                <span class="page-num-item">5</span>
                                <span class="many-pages-hide">...</span>
                                <span class="page-num-item">21</span>
                            </div>
                            <button class="page-arrow page-next">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Next" title="Prev Next">
                            </button>
                        </div>
                    </div>
                    <div class="bronze-package-tbl hide">
                        <table class="responsive-table">
                            <thead>
                            <tr>
                                <th scope="col">Client name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Assets-To-Protect Form</th>
                                <th scope="col">Irrevocable Trust Form</th>
                                <th scope="col">Trust And Corporate Docs</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>

                            <tbody id="bronze_package_body">
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>23 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>23 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">

                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">Active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="send-again-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Send again</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="send-form-bar">
                                        <div>
                                            <img src="images/4010/icons/send_icon.svg" alt="" title="">
                                            <h4>Send form</h4>
                                        </div>
                                        <!-- <div><p>23 Aug 2020</p></div>-->
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-in_process">in process</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-active">active</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/stop_icon.svg" alt="">
                                        <p>stop</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="personal-page.html">Marry Jane</a></th>
                                <td data-title="Email Address">email_example@gmail.com</td>
                                <td data-title="Assets-To-Protect Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Irrevocable Trust Form">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Trust And Corporate Docs">
                                    <div class="filled-bar">
                                        <div>
                                            <img src="images/4010/icons/check_icon.svg" alt="" title="">
                                            <h4>Filled</h4>
                                        </div>
                                        <div>
                                            <p>23 Aug 2020</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Status">
                                    <button class="status-finished">Finished</button>
                                </td>
                                <td data-title="Actions">
                                    <div>
                                        <img src="images/4010/icons/archive_icon.svg" alt="">
                                        <p>archive</p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                            <tfoot>
                            <tr>
                                <td>
                                    <button onclick="scrollingTbl(0, -10)" class="scroll-icon-bar scroll-top-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>

                                    <button onclick="scrollingTbl(0, 10)" class="scroll-icon-bar scroll-bottom-icon">
                                        <img src="images/4010/icons/scroll-arrow.svg" alt="" title="">
                                    </button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="other-pages">
                            <button class="page-arrow page-prev">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Prev" title="Prev Page">
                            </button>
                            <div>
                                <span class="page-num-item">1</span>
                                <span class="page-num-item active-page">2</span>
                                <span class="page-num-item">3</span>
                                <span class="page-num-item">4</span>
                                <span class="page-num-item">5</span>
                                <span class="many-pages-hide">...</span>
                                <span class="page-num-item">21</span>
                            </div>
                            <button class="page-arrow page-next">
                                <img src="images/icons/arrow-pages-icon.svg" alt="Arrow Next" title="Prev Next">
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </section>
@endsection