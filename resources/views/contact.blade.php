@extends ("layout")
@section("main")
<!-- about-Us -->
<div class="contact-container">
    <div class="contact">
        <div>
            <img src="Assets/mail-icon.png" alt="" />
        </div>
        <div class="contact__addres">
            <p>Hotel Addres</p>
            <p>19/A, Cirikon City hall Tower New York, NYC</p>
        </div>
        <p class="contact__number">01</p>
    </div>

    <div class="contact">
        <div>
            <img src="Assets/phone-icon.png" alt="" />
        </div>
        <div class="contact__addres">
            <p>Phone Number</p>
            <p>+97656867578647</p>
            <p>+87676686757656</p>
        </div>
        <p class="contact__number">02</p>
    </div>
    <div class="contact">
        <div>
            <img src="Assets/location-icon.png" alt="" />
        </div>
        <div class="contact__addres">
            <p>Email</p>
            <p>info@webmail.com</p>
            <p>jobs.webmail@mail.com</p>
        </div>
        <p class="contact__number">03</p>
    </div>
</div>
<div class="contact-img">
    <img src="Assets/maps.png" alt="bahamas maps" />
</div>

<form class="contact-form" method="post">
    @csrf
    <div class=" contact-form__input-container">
        <input type="text" placeholder="Your full name" name="fullName" />
        <img src="Assets/icon/contact/human.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <input type="text" placeholder="Add phone number" name="phone" />
        <img src="Assets/icon/contact/phone.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <input type="text" placeholder="Enter email address" name="email" />
        <img src="Assets/icon/contact/email.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <input type="text" placeholder="Enter subject" name="subjet" />
        <img src="Assets/icon/contact/book.png" alt="" />
    </div>
    <div class="contact-form__input-container">
        <textarea id="contact-textarea" rows="10" cols="22" name="message"></textarea>
        <img src="Assets/icon/contact/pencil.png" alt="" />
    </div>
    <button class="contact-form__submit" type="submit">Send</button>
</form>
@if($status=Session::get("success"))

<div class="pageDetailsAvailability__modalContainer" id="availabilityModal">
    <div class="pageDetailsAvailability__modal">
        <h2 class="pageDetailsAvailability__modal__title">
            ¡Thank you for your request!

        </h2>
        <p class="pageDetailsAvailability__modal__text">
            We have received it correctly. Someone from our Team will get back to you very soon.
            The Miranda Hotel
        </p>
        <button class="button button-variant1 pageDetailsAvailability__modal__btn" id="modalBtn">
            ACEPT
        </button>
    </div>
</div>

@endif




@endsection