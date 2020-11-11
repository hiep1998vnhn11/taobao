@extends('layout')

@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Check Out</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span12">
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
                        </div>
                        <div id="collapseOne" class="accordion-body in collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h4>Choose Payment Method</h4>
                                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                        <form action="#" method="post">
                                            <fieldset>
                                                <label class="radio" for="register">
                                                    <input type="radio" name="account" value="register" id="momo" checked="checked">Momo
                                                    <img class="payment-logo" src="https://upload.wikimedia.org/wikipedia/vi/archive/f/fe/20201011055543%21MoMo_Logo.png" alt="New products" style="width:30px;height:30px;" >
                                                </label>
                                                <label class="radio" for="guest">
                                                    <input type="radio" name="account" value="guest" id="visa">VISA
                                                    <img class="payment-logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/1280px-Former_Visa_%28company%29_logo.svg.png" alt="New products" style="width:30px;" >
                                                </label>
                                                <br>
                                                <button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <!-- <div class="span6">
                                        <h4>Returning Customer</h4>
                                        <p>I am a returning customer</p>
                                        <form action="#" method="post">
                                            <fieldset>
                                                <div class="control-group">
                                                    <label class="control-label">Username</label>
                                                    <div class="controls">
                                                        <input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">Password</label>
                                                    <div class="controls">
                                                        <input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
                                                    </div>
                                                </div>
                                                <button class="btn btn-inverse">Continue</button>
                                            </fieldset>
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h4>Your Personal Details</h4>
                                        <div class="control-group">
                                            <label class="control-label">First Name</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Last Name</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Email Address</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Telephone</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Fax</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <h4>Your Address</h4>
                                        <div class="control-group">
                                            <label class="control-label">Company</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Company ID:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> Address 1:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Address 2:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> City:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> Post Code:</label>
                                            <div class="controls">
                                                <input type="text" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> Country:</label>
                                            <div class="controls">
                                                <select class="input-xlarge">
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa</option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"><span class="required">*</span> Region / State:</label>
                                            <div class="controls">
                                                <select name="zone_id" class="input-xlarge">
                                                    <option value=""> --- Please Select --- </option>
                                                    <option value="3513">Aberdeen</option>
                                                    <option value="3514">Aberdeenshire</option>
                                                    <option value="3515">Anglesey</option>
                                                    <option value="3516">Angus</option>
                                                    <option value="3517">Argyll and Bute</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="row-fluid">
                                    <div class="control-group">
                                        <label for="textarea" class="control-label">Comments</label>
                                        <div class="controls">
                                            <textarea rows="3" id="textarea" class="span12"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-inverse pull-right">Confirm order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
