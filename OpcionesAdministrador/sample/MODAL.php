
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://bootadmin.net/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://bootadmin.net/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://bootadmin.net/css/datatables.min.css">
        <link rel="stylesheet" href="https://bootadmin.net/css/fullcalendar.min.css">
        <link rel="stylesheet" href="https://bootadmin.net/css/bootadmin.min.css">

        <title>Modal | BootAdmin</title>
    </head>
    <body class="bg-light">

        <nav class="navbar navbar-expand navbar-dark bg-primary">
            <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
            <a class="navbar-brand" href="https://bootadmin.net">BootAdmin</a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="d-flex">
            <div class="sidebar sidebar-dark bg-dark">
                <ul class="list-unstyled">
                    <li><a href="https://bootadmin.net/demo"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
                    <li>
                        <a href="#sm_base" data-toggle="collapse" aria-expanded="true">
                            <i class="fa fa-fw fa-cube"></i> Base
                        </a>
                        <ul id="sm_base" class="list-unstyled collapse show">
                            <li><a href="https://bootadmin.net/demo/base/colors">Colors</a></li>
                            <li><a href="https://bootadmin.net/demo/base/typography">Typography</a></li>
                            <li><a href="https://bootadmin.net/demo/base/tables">Tables</a></li>
                            <li><a href="https://bootadmin.net/demo/base/progress">Progress</a></li>
                            <li class="active"><a href="https://bootadmin.net/demo/base/modal">Modal</a></li>
                            <li><a href="https://bootadmin.net/demo/base/alerts">Alerts</a></li>
                            <li><a href="https://bootadmin.net/demo/base/popover">Popover</a></li>
                            <li><a href="https://bootadmin.net/demo/base/tooltip">Tooltip</a></li>
                            <li><a href="https://bootadmin.net/demo/base/dropdown">Dropdown</a></li>
                            <li><a href="https://bootadmin.net/demo/base/navs">Navs</a></li>
                            <li><a href="https://bootadmin.net/demo/base/collapse">Collapse</a></li>
                            <li><a href="https://bootadmin.net/demo/base/lists">Lists</a></li>
                        </ul>
                    </li>
                    <li><a href="https://bootadmin.net/demo/icons"><i class="fa fa-fw fa-flag"></i> Icons</a></li>
                    <li><a href="https://bootadmin.net/demo/buttons"><i class="fa fa-fw fa-toggle-on"></i> Buttons</a></li>
                    <li><a href="https://bootadmin.net/demo/forms"><i class="fa fa-fw fa-edit"></i> Forms</a></li>
                    <li><a href="https://bootadmin.net/demo/datatables"><i class="fa fa-fw fa-table"></i> Datatables</a></li>
                    <li><a href="https://bootadmin.net/demo/cards"><i class="fa fa-fw fa-address-card"></i> Cards</a></li>
                    <li><a href="https://bootadmin.net/demo/calendar"><i class="fa fa-fw fa-calendar-alt"></i> Calendar</a></li>
                    <li><a href="https://bootadmin.net/demo/charts"><i class="fa fa-fw fa-chart-pie"></i> Charts</a></li>
                    <li><a href="https://bootadmin.net/demo/maps"><i class="fa fa-fw fa-map-marker-alt"></i> Maps</a></li>
                    <li>
                        <a href="#sm_examples" data-toggle="collapse">
                            <i class="fa fa-fw fa-lightbulb"></i> Examples
                        </a>
                        <ul id="sm_examples" class="list-unstyled collapse">
                            <li><a href="https://bootadmin.net/demo/examples/blank">Blank/Starter</a></li>
                            <li><a href="https://bootadmin.net/demo/examples/pricing">Pricing</a></li>
                            <li><a href="https://bootadmin.net/demo/examples/invoice">Invoice</a></li>
                            <li><a href="https://bootadmin.net/demo/examples/faq">FAQ</a></li>
                            <li><a href="https://bootadmin.net/demo/examples/login">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="https://bootadmin.net/demo/docs"><i class="fa fa-fw fa-book"></i> Documentation</a></li>
                </ul>
            </div>

            <div class="content p-4">
                <h2 class="mb-4">Modal</h2>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Launch default modal</button>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLong">Launch scrolling modal</button>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Launch vertically centered modal</button>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Launch large modal</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">Launch small modal</button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus maximus lacus vel ullamcorper. Duis euismod, risus vel faucibus imperdiet, nisl massa congue dolor, ut mollis lacus tortor eget velit. Nam non urna risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis metus orci, consectetur sed risus at, accumsan imperdiet elit. Nullam semper finibus lacus nec volutpat. Fusce convallis nulla ipsum, et hendrerit elit feugiat non.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus maximus lacus vel ullamcorper. Duis euismod, risus vel faucibus imperdiet, nisl massa congue dolor, ut mollis lacus tortor eget velit. Nam non urna risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis metus orci, consectetur sed risus at, accumsan imperdiet elit. Nullam semper finibus lacus nec volutpat. Fusce convallis nulla ipsum, et hendrerit elit feugiat non. Vivamus aliquet purus non euismod mattis. Aliquam dui dui, dapibus ac lobortis nec, egestas id nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis nulla nulla, id facilisis metus interdum dignissim. In efficitur ornare ipsum, sit amet facilisis tellus. Vestibulum porta a leo eget iaculis. Etiam nec nulla et ex tincidunt pretium.</p>

                                <p>Praesent ligula libero, cursus a est vel, venenatis bibendum tortor. Ut non lobortis nunc. Duis sed elit blandit, ullamcorper turpis vitae, convallis mauris. Nullam tempor eget tortor id condimentum. Integer sollicitudin, orci quis rhoncus convallis, dolor urna consectetur justo, vitae dignissim erat dui ut felis. Etiam egestas, nunc quis semper facilisis, mi lectus porttitor dolor, nec tincidunt ex ipsum quis neque. Curabitur urna sem, interdum id elit non, dapibus pharetra ipsum. Nunc imperdiet elit nulla, quis tincidunt turpis condimentum ut. Ut feugiat enim elit, sit amet semper risus tincidunt nec. Mauris efficitur sem non turpis dictum, tincidunt placerat nibh lobortis.</p>

                                <p>Integer ante turpis, ornare in velit non, laoreet porttitor orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum id felis iaculis, pulvinar quam sit amet, blandit turpis. In volutpat, est sed tristique mattis, nunc nulla sodales tortor, nec dignissim felis arcu quis magna. Donec eget odio risus. Etiam egestas enim ut diam molestie, in lacinia justo dapibus. Suspendisse sodales id tortor at varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sed egestas lorem. Quisque ultricies, tellus a commodo iaculis, neque nisl tristique lacus, nec sodales velit elit ac sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at euismod nisl. Donec finibus urna congue erat congue, eget suscipit augue ornare. Donec libero tortor, vestibulum in leo sit amet, fermentum dignissim risus. Praesent a felis vitae tortor facilisis tempus.</p>

                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus auctor, ipsum ac vestibulum tincidunt, tellus risus tincidunt mi, ut lobortis lacus libero ac nulla. Nam ac auctor nibh. Ut lacinia dictum dui. Etiam at pharetra elit. Vestibulum egestas metus quis purus pretium interdum. Etiam eu erat facilisis, vestibulum lectus eu, imperdiet eros.</p>

                                <p>Donec at enim at mi luctus viverra ut vehicula odio. Nam faucibus dui diam, quis fringilla lacus dapibus vitae. Duis tincidunt neque ultrices fringilla aliquet. Duis mauris dui, feugiat quis ullamcorper non, euismod nec sem. Fusce fringilla diam turpis, eu interdum diam euismod sit amet. Aliquam lacinia rhoncus arcu, consequat porttitor felis vestibulum in. Fusce volutpat ultricies ligula ac imperdiet.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus maximus lacus vel ullamcorper. Duis euismod, risus vel faucibus imperdiet, nisl massa congue dolor, ut mollis lacus tortor eget velit. Nam non urna risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis metus orci, consectetur sed risus at, accumsan imperdiet elit. Nullam semper finibus lacus nec volutpat. Fusce convallis nulla ipsum, et hendrerit elit feugiat non.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus maximus lacus vel ullamcorper. Duis euismod, risus vel faucibus imperdiet, nisl massa congue dolor, ut mollis lacus tortor eget velit. Nam non urna risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis metus orci, consectetur sed risus at, accumsan imperdiet elit. Nullam semper finibus lacus nec volutpat. Fusce convallis nulla ipsum, et hendrerit elit feugiat non.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus maximus lacus vel ullamcorper. Duis euismod, risus vel faucibus imperdiet, nisl massa congue dolor, ut mollis lacus tortor eget velit. Nam non urna risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis metus orci, consectetur sed risus at, accumsan imperdiet elit. Nullam semper finibus lacus nec volutpat. Fusce convallis nulla ipsum, et hendrerit elit feugiat non.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://bootadmin.net/js/jquery.min.js"></script>
        <script src="https://bootadmin.net/js/bootstrap.bundle.min.js"></script>
        <script src="https://bootadmin.net/js/datatables.min.js"></script>
        <script src="https://bootadmin.net/js/moment.min.js"></script>
        <script src="https://bootadmin.net/js/fullcalendar.min.js"></script>
        <script src="https://bootadmin.net/js/bootadmin.min.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118868344-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-118868344-1');
        </script>

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4097235499795154",
                enable_page_level_ads: true
            });
        </script>

    </body>
</html>