@extends('layouts.hlayout')

@section('banner')
    @include('layouts.partials.banner')
@endsection

@section('body')
    <section class="filter ">
        <div class="links ">
            <ul>
                <li>
                    <a href="# " class="indoor active " data-filter=".indoor ">Indoor</a></li>
                <li>
                    <a href="# " class="indoor " data-filter=".outdoor ">Outdoor</a></li>
                <li>
                    <a href="# " class="indoor " data-filter=".furniture ">Furniture</a></li>
                <li>
                    <a href="# " class="indoor " data-filter=".interactive ">Interactive</a></li>
            </ul>
        </div>
        <div class="cards ">
            <div class="container ">
                <div class="row items ">
                    <div class="cards--items indoor col-md-4 ">
                        <img src="https://images.unsplash.com/photo-1571687404566-0245c06da7c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80 " alt=" ">
                        <p>Indoor Furniture Set(Blue)</p>
                    </div>
                    <div class="cards--items outdoor col-md-4 ">
                        <img src="https://images.unsplash.com/photo-1571687404566-0245c06da7c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80 " alt=" ">
                        <p>Indoor Furniture Set(Blue)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection