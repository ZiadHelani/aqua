@extends('layouts.web-app')

@section('content')

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <iframe loading="lazy" src="https://maps.google.com/maps?q=Dubai%2C%20United%20Arab%20Emirates&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" title="Dubai, United Arab Emirates" aria-label="Dubai, United Arab Emirates" class="google-map mt-0" style="height: 500px;"></iframe>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">{{trans('words.contact-us')}}</h2>
                    <p class="mb-4">{{trans('words.ask')}}</p>

                    <form class="contact-form" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">{{trans('words.full-name')}}</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">{{trans('words.email-address')}}</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">{{trans('words.subject')}}</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">{{trans('words.message')}}</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="{{trans('words.send-message')}}" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1"><strong>{{trans('words.our-office')}}</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">{{trans('words.address')}} : </strong> {{$info->address}}</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">{{trans('words.phone')}} : </strong> {{$info->phone}}</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">{{trans('words.email')}} : </strong> <a href="mailto:mail@example.com"> {{$info->email}}</a></li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                            <h4 class="pt-5"><strong>{{trans('words.business-hours')}}</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> {{trans('words.monday')}} - {{trans('words.friday')}} - 9 {{trans('words.am')}} {{trans('words.to')}} 5 {{trans('words.pm')}}</li>
                            <li><i class="far fa-clock top-6"></i> {{trans('words.saturday')}} - 9 {{trans('words.am')}} {{trans('words.to')}} 2 {{trans('words.pm')}}</li>
                            <li><i class="far fa-clock top-6"></i> {{trans('words.sunday')}} - {{trans('words.closed')}}</li>
                        </ul>
                    </div>

                    <h4 class="pt-5"><strong>{{trans('words.get-in-touch')}}</strong></h4>
                    <p class="lead mb-0 text-4">{{$info->touch}}</p>

                </div>

            </div>

        </div>
