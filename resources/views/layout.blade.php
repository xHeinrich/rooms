<!DOCTYPE html>
<html>
<head>
    <title>Laravel Rooms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/rooms.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 user-container p-4">
                        <div class="row d-flex justify-content-center">
                            <h5>Direct Messages</h5>
                            <ul class="user-list">
                                @include('rooms::user')
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-9 message-container p-0">
                        <div class="info-panel">
                            <h5>
                                Username Here Pls
                            </h5>
                            <div class="user-state online">
                            </div>
                        </div>
                        <ul class="message-list">
                            @include('rooms::message')
                        </ul>
                        <form class="p-3">
                            <div class="form-group container d-flex">
                                <textarea class="form-control" id="message" rows="1" placeholder="Message"></textarea>
                                <span class="input-group-btn hidden-sm-down">
                                    <a class="btn btn-primary" id="send">
                                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <span class="input-group-btn hidden-md-up">
                                    <a class="btn btn-primary" id="send">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>