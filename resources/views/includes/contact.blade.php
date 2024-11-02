<div class="content-blocks contact">
    <section class="content">
        <div class="block-content">
            <h3 class="block-title">Get in touch</h3>
            <div class="row">
                <div class="col-md-6">
{{--                    <form id="contact_form">--}}

                        <input name="token" class="token" type="hidden" value="{{csrf_token()}}">

                        <div class="form-control-wrap">
                            <div id="message" class="alert alert-danger alert-dismissible fade"></div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contact-name" placeholder="Name*" name="name">
                            </div>
                            <div class="form-group mar-top-40">
                                <input type="email" class="form-control" id="contact-email" placeholder="email*" name="email">
                            </div>
                            <div class="form-group mar-top-60">
                                <textarea class="form-control" rows="10" name="message" id="contact-message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group mar-top-40">
                                <button class="btn v7 contact-btn">Send Message</button>
                            </div>
                        </div>
{{--                    </form>--}}
                </div>

                <div class="col-md-5 offset-md-1">
                    <div class="contact-content">
                        <div class="contact-icon">
                            <i class="ion-ios-location-outline"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Address</h5>
                            <p>{{$profile->en_address}}</p>
                        </div>
                    </div>
                    <div class="contact-content">
                        <div class="contact-icon">
                            <i class="ion-ios-telephone-outline"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Call Us</h5>
                        <p> <a href="tel:{{$profile->phone}}">{{$profile->phone}}</a></p>
                        </div>
                    </div>
                    <div class="contact-content">
                        <div class="contact-icon">
                            <i class="ion-ios-email-outline"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Enquiries</h5>
                            <p>{{$profile->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <!--Google Map-->
{{--                    <div id="map"></div>--}}
                    <!--Google Map End-->
                </div>
            </div>
        </div>
    </section>
</div>
