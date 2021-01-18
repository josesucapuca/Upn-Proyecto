
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/datatables.min.css">
    <link rel="stylesheet" href="../css/fullcalendar.min.css">
    <link rel="stylesheet" href="../css/bootadmin.min.css">

    <title>Forms | BootAdmin</title>
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
                    <a href="#sm_base" data-toggle="collapse">
                        <i class="fa fa-fw fa-cube"></i> Base
                    </a>
                    <ul id="sm_base" class="list-unstyled collapse">
                        <li><a href="https://bootadmin.net/demo/base/colors">Colors</a></li>
                        <li><a href="https://bootadmin.net/demo/base/typography">Typography</a></li>
                        <li><a href="https://bootadmin.net/demo/base/tables">Tables</a></li>
                        <li><a href="https://bootadmin.net/demo/base/progress">Progress</a></li>
                        <li><a href="https://bootadmin.net/demo/base/modal">Modal</a></li>
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
                <li class="active"><a href="https://bootadmin.net/demo/forms"><i class="fa fa-fw fa-edit"></i> Forms</a></li>
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
        		        	<div class="text-center mb-4">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Responsive -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4097235499795154"
                         data-ad-slot="5211442851"
                         data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
	        	</div>
        	
                <h2 class="mb-4">Forms</h2>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Basic Form
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check mb-0">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </form>
        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Form Controls
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group mb-0">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Input Sizing
        </div>
        <div class="card-body">
            <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
            <input class="form-control mb-3" type="text" placeholder="Default input">
            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Checkboxes &amp; Radios
        </div>
        <div class="card-body">
            <p>Checkboxes:</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Default checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                <label class="form-check-label" for="defaultCheck2">
                    Disabled checkbox
                </label>
            </div>

            <p class="mt-3">Radios:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Default radio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Second default radio
                </label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                </label>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Horizontal Forms
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row mb-0">
                    <div class="col-sm-2">Checkbox</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Inline Forms
        </div>
        <div class="card-body">
            <form class="form-inline">
                <label class="sr-only" for="inlineFormInputName2">Name</label>
                <input type="text" class="form-control mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

                <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                <div class="input-group mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                </div>

                <div class="form-check mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white font-weight-bold">
            Form Validation
        </div>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">First name</label>
                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Last name</label>
                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServerUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer03">City</label>
                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer04">State</label>
                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer05">Zip</label>
                        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer bg-white">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-white font-weight-bold">
            Input Groups
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
            </div>

            <label for="basic-url">Your vanity URL</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">With textarea</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
        </div>
    </div>
        </div>
    </div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/datatables.min.js"></script>
<script src="../js/moment.min.js"></script>
<script src="../js/fullcalendar.min.js"></script>
<script src="../js/bootadmin.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118868344-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
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