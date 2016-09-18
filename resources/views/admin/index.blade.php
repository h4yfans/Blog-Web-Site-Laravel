@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/modal.css')  }}">
@endsection

@section('content')
    <div class="container">
        @include('includes.info-box')
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="" class="btn">New Posts</a></li>
                        <li><a href="" class="btn">Show all Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    {{--if no POST--}}
                    <li>No Posts</li>
                    {{--if POSTS--}}
                    <li>
                        <article>
                            <div class="post-info">
                                <h3>Post Title</h3>
                                <span class="info">Post Author - Date</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="">View Post</a></li>
                                        <li><a href="">Edit</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>

        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="" class="btn">Show all Messages</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    {{--if no POST--}}
                    <li>No Posts</li>
                    {{--if Messages--}}
                    <li>
                        <article data-message="Body" data-id="ID">
                            <div class="message-info">
                                <h3>Message Subject</h3>
                                <span class="info">Sender ... - Date</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="">View</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal">Close</button>
    </div>
@endsection


@section('scripts')
    <script>
        var token = "{{Session::token()}}";
    </script>

    <script src="{{URL::asset('js/modal.js')}}"></script>
    <script src="{{URL::asset('js/contact_messages.js')}}"></script>
@endsection