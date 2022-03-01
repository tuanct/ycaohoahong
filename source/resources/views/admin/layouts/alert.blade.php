@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('message'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {{ Session::get('message') }}
    </div>
@endif
@if (isset($errors) && $errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        @foreach( $errors->all(':message') as $mes)
            {{$mes}}<br/>
        @endforeach
    </div>
@endif
<?php
