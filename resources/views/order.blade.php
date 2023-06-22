@extends ("layout")
@section("main")

<div>
    <form class="contact-form" method="post">
        @csrf
        <div class=" contact-form__input-container">
            <select name=" roomId" id="roomId">
                @foreach($rooms as $room)
                <option value="{{$room['id']}}">{{$room["floorNumber"]}}-{{$room["doorNumber"]}}</option>
                @endforeach
            </select>
        </div>
        <div class="contact-form__input-container">
            <select name="type" id="type">
                <option value="food">Food</option>
                <option value="others">Others</option>
            </select>
        </div>

        <div class="contact-form__input-container">
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Please let us know, what you want"></textarea>
            <img src="Assets/icon/contact/pencil.png" alt="" />
        </div>
        <button class="contact-form__submit" type="submit">Place Order</button>
    </form>
</div>


@endsection