@extends('layouts.app',
        [
        'body_class' => $bodyClass,
        'title' => setting('site.title') . ' | ' . $PageTitle
        ])

@section('content')

    <iframe class="background-dark-white" src="https://snazzymaps.com/embed/26407" width="100%" height="432px" style="border:none;"></iframe>

    <section class="contact-us background-dark-white">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-lg-4 contact-info">
                        <h1 class="title green italic font-weight-700">Contact us</h1>
                        <ul class="contact-info">
                            <li class="address"><p class="text-1"><span class="font-weight-500 text-1 green">Address: </span> Metn  -  Mansourieh highway, Facing the Municipality - Ground Floor</p></li>
                            <li class="mobile"><p class="text-1"><span class="font-weight-500 text-1 green">Mobile: </span><a class="tel font-weight-300" href="tel:+96170145557"> + 961 70 145 557</a></p></li>
                            <li class="phone"><p class="text-1"><span class="font-weight-500 text-1 green">Phone: </span><a class="tel font-weight-300" href="tel:+9614400671"> + 961 4 400 671</a></p></li>
                            <li class="email"><p class="text-1"><span class="font-weight-500 text-1 green">Email: </span><a class="tel font-weight-300" href="mailto:info@shopgetnuts.com">info@shopgetnuts.com</a></p></li>
                            <li>
                                <ul class="social">
                                    <li class="facebook"><a href="#"></a></li>
                                    <li class="instagram"><a href="#"></a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8 col-lg-8 contact-form">

                        <img src="{{url('images/contact/comment-form.png')}}" alt="" class="background">
                        <h1 class="font-weight-700 brown italic dark-brown title">Your feedback matters to us</h1>

                        <form id="contact-form" method="post" action="" class="form-horizontal">

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label class="col-md-12 text-1 font-weight-500 white control-label" for="full_name">Full Name:</label>
                                    <div class="col-md-12">
                                        <input id="full_name" name="full_name" type="text" placeholder="Enter Full Name" class="input-1 form-control input-md">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-md-12 text-1 font-weight-500 white control-label" for="subject">Subject:</label>
                                    <div class="col-md-12">
                                        <input id="subject" name="subject" type="text" placeholder="Enter Subject" class="input-1 form-control input-md">

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-md-12 text-1 font-weight-500 white control-label" for="email">Emal:</label>
                                    <div class="col-md-12">
                                        <input id="email" name="email" type="email" placeholder="Enter Email" class="input-1 form-control input-md">

                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-md-12 text-1 font-weight-500 white control-label" for="mobile">Mobile:</label>
                                    <div class="col-md-12">
                                        <input id="mobile" name="mobile" type="text" placeholder="Enter Mobile" class="input-1 form-control input-md">

                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="col-md-12 text-1 font-weight-500 white control-label" for="message">Message:</label>
                                    <div class="col-md-12">
                                        <textarea rows="3" class="form-control input-1" id="message" name="message" placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <button class="font-weight-500 white submit">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-md-12 col-lg-12">
                        <h2 class="title green italic font-weight-700">Find us</h2>
                        <ul class="row">
                            <li class="col-lg-3">
                                <ul>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Beit Merry</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Dekwaneh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Rabieh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Antelias</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Jeita</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Jbeil</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Saloumi</a></p></li>
                                </ul>
                            </li>
                            <li class="col-lg-3">
                                <ul>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Charcutier Aoun Jisr El Basha</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Broumana High School</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Sagesse High School</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Lime Pepper - ABC Dbayeh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">E Club Fitness Center - Zouk Moukayel</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Pharmacy One Zouk Mosbeh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Star Market - Kaslik</a></p></li>
                                </ul>
                            </li>
                            <li class="col-lg-3">
                                <ul>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Trini Market - Sahel Alma</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">الشرطة العسكرية - جسر الباشا</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">الشرطة العسكرية - الريحانية</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">8 to late - Zahle Bekaa</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Eco Market - Broumana</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Pharmacy Al Milad - Sed El Bauchrieh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Pharmacy C - Zouk Mosbeh</a></p></li>

                                </ul>
                            </li>
                            <li class="col-lg-3">
                                <ul>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Pharmacy Roy - Mansourieh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Sparc Twin care - Aoukar</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Step up Gym - Mansourieh</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">CARVED - Antonine Fitness Center - Ajaltoun</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Nohad Nawfal Gym - Zouk Mikael</a></p></li>
                                    <li class=""><span class="dot"></span><p><a href="" onclick="return false">Star Market Kaslik</a></p></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
    </section>

@endsection